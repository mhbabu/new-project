<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DocumentSignedMail;

class DocumentSignController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'imageFile' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data['pornstar'] = $request->pornstar;
        $data['cam_model'] = $request->cam_model;
        $data['social_media_star'] = $request->social_media_star;
        $data['magazine_model'] = $request->magazine_model;
        $data['other'] = $request->other;

        $signatureImage = $request->input('signatureImage');

        // Convert the base64-encoded signature image to a file and save it
        $signatureImageFile = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $signatureImage));
        $signatureImagePath = storage_path('app/public/signature.png');
        file_put_contents($signatureImagePath, $signatureImageFile);

        if ($request->hasFile('imageFileOfId')) {
            $imageFile = $request->file('imageFileOfId');
            $imagePath = storage_path('app/public/temp_image.png'); // Adjust the file extension as needed
            $imageFile->move(storage_path('app/public'), 'temp_image.png'); // Move the uploaded file to storage
        }

        if ($request->hasFile('imageBackOfId')) {
            $backImageFile = $request->file('imageBackOfId');
            $backImagePath = storage_path('app/public/temp_image2.png'); // Adjust the file extension as needed
            $backImageFile->move(storage_path('app/public'), 'temp_image2.png'); // Move the uploaded file to storage
        }

        $pdf = new \Mpdf\Mpdf();
        $html = view('pdf_with_signature',['data' => $request->all(), 'signatureImage' => $signatureImage])->render();
        $pdf->WriteHTML($html);
        $filename = 'generated_pdf_' . time() . '.pdf';
        $pdf->Output(storage_path('app/public/') . $filename, 'F');

        $pdfFileDestination = storage_path('app/public/' . $filename);
        $tagetMails = ['talent@alluringintros.eu', 'model@kdsystemsbd.com'];
        foreach ($tagetMails as $mail) {
            \Mail::to($mail)->send(new DocumentSignedMail($pdfFileDestination, $imagePath, $backImagePath, $request->all()));
        }

        // Redirect or return a response as needed
        return redirect()
            ->route('document.sign')
            ->with('success', 'Form submitted successfully.');
    }
}
