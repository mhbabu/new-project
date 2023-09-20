<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\DocumentSignedMail;
use App\Models\DocumentSigned;
use setasign\Fpdi\Fpdi;
// use File;
use Illuminate\Support\Facades\File;

use PDF;

class DocumentSignController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // Function to merge PDFs
    private function mergePdfs($pdfPaths, $outputPath, $signatureImagePath)
    {
        $pdf = new Fpdi();

        foreach ($pdfPaths as $pdfPath) {
            $pageCount = $pdf->setSourceFile($pdfPath);

            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                $pdf->AddPage();
                $templateId = $pdf->importPage($pageNo);
                $pdf->useTemplate($templateId, 0, 0);

                // Add the signature image to the page
                $pdf->Image($signatureImagePath, 0, 0, 100); // Adjust the position and size as needed
                $pdf->SetFont('Arial', '', 2); // Adjust the font and size as needed
                
            }
        }

        $pdf->Output($outputPath, 'F');
    }
    // private function mergePdfs($pdfPaths, $outputPath, $signatureImagePath)
    // {
    //     $pdf = new Fpdi();

    //     foreach ($pdfPaths as $pdfPath) {
    //         $pageCount = $pdf->setSourceFile($pdfPath);

    //         for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
    //             $pdf->AddPage();
    //             $templateId = $pdf->importPage($pageNo);
    //             $pdf->useTemplate($templateId, 0, 0);

    //             // Get the page dimensions
    //             $pageWidth = $pdf->GetPageWidth();
    //             $pageHeight = $pdf->GetPageHeight();

    //             // Calculate and set the margins for each page
    //             $leftMargin = 10; // Adjust as needed
    //             $rightMargin = $pageWidth - 10; // Adjust as needed
    //             $topMargin = 30; // Adjust as needed
    //             $bottomMargin = 10; // Adjust as needed

    //             // Set the font size for the signature text
    //             $pdf->SetFont('Arial', '', 8); // Adjust the font and size as needed

    //             // Get the width and height of the signature image
    //             list($sigWidth, $sigHeight) = getimagesize($signatureImagePath);

    //             // Calculate the position to place the signature at the end of the page
    //             $sigX = $leftMargin + ($pageWidth - $leftMargin - $rightMargin - $sigWidth) / 2;
    //             $sigY = $pageHeight - $bottomMargin - $sigHeight - 5; // Adjusted to place it slightly above the very bottom

    //             // Add the signature image to the page
    //             $pdf->Image($signatureImagePath, $sigX, $sigY, $sigWidth, $sigHeight);

    //             // Optionally, you can add a signature text below the image
    //             $pdf->SetFont('Arial', '', 6); // Adjust the font and size as needed
    //             $pdf->Text($sigX, $sigY + $sigHeight + 5, 'Your Signature Text');
    //         }
    //     }

    //     $pdf->Output($outputPath, 'F');
    // }




    public function submit(Request $request)
    {
        // Validate the form inputs
        $validatedData = $request->validate([
            // Existing validation rules
            'imageFile' => 'image|mimes:jpg,jpeg,png|max:2048', // Adjust the file size limit as needed
        ]);

        $data['pornstar'] = $request->pornstar;
        $data['cam_model'] = $request->cam_model;
        $data['social_media_star'] = $request->social_media_star;
        $data['magazine_model'] = $request->magazine_model;
        $data['other'] = $request->other;


        // Retrieve the signature image from the hidden input
        $signatureImage = $request->input('signatureImage');

        // Convert the base64-encoded signature image to a file and save it
        $signatureImageFile = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $signatureImage));
        $signatureImagePath = storage_path('app/public/signature.png');
        file_put_contents($signatureImagePath, $signatureImageFile);


        // Save form data to the database
        //$formData = YourModel::create($validatedData);

        // Send email with the document to a specific address
        //Mail::to('recipient@example.com')->send(new DocumentSigned($formData));
        //unlink($pdfPath);

        //return redirect()->route('document.sign')->with('success', 'Form submitted successfully.');
    
    
    
        if ($request->hasFile('imageFileOfId')) {
            $imageFile = $request->file('imageFileOfId');
            $imagePath = storage_path('app/public/temp_image.png'); // Adjust the file extension as needed
            $imageFile->move(storage_path('app/public'), 'temp_image.png'); // Move the uploaded file to storage
        
            // You can now use $imagePath to attach the image to the email or save it to the database.
        }
        if ($request->hasFile('imageBackOfId')) {
            $backImageFile = $request->file('imageBackOfId');
            $backImagePath = storage_path('app/public/temp_image2.png'); // Adjust the file extension as needed
            $backImageFile->move(storage_path('app/public'), 'temp_image2.png'); // Move the uploaded file to storage
        
            // You can now use $imagePath to attach the image to the email or save it to the database.
        }

         // Load the PDF Blade file for initial rendering (without the signature)
        $pdf = PDF::loadView('pdf_with_signature', [
            'data' => $request->all(),
            'signatureImage' => $signatureImagePath, // Pass the signature image path to the view
        ]);

        // Get the number of pages in the PDF
        $numPages = $pdf->getDomPDF()->getCanvas()->get_page_count();

        // Create an array to store the paths of individual page PDFs
        $individualPagePdfPaths = [];

        // Create a new PDF instance for each page and add the signature
        for ($page = 1; $page <= $numPages; $page++) {
            $individualPdf = PDF::loadView('pdf_with_signature', [
                'data' => $request->all(),
                'signatureImage' => $signatureImagePath, // Pass the signature image path to the view
            ]);

            // Save the individual page PDF
            $individualPagePdfPath = storage_path('app/public/temp_page_' . $page . '.pdf');
            $individualPdf->save($individualPagePdfPath);

            $individualPagePdfPaths[] = $individualPagePdfPath;
        }

        // Merge individual page PDFs into a single PDF with the signature on each page
        $mergedPdfPath = storage_path('app/public/merged_pdf_with_signature.pdf');
        $this->mergePdfs($individualPagePdfPaths, $mergedPdfPath, $signatureImagePath);

        $tagetMails = ['talent@alluringintros.eu', 'model@kdsystemsbd.com'];
        // Send the email with the merged PDF attachment

        foreach($tagetMails as $mail){
            \Mail::to($mail)->send(new DocumentSignedMail($mergedPdfPath, $imagePath, $backImagePath, $request->all()));
        }
        
        // Delete the temporary PDF files after sending
        foreach ($individualPagePdfPaths as $individualPagePdfPath) {
            File::delete($individualPagePdfPath);
        }

        // Redirect or return a response as needed
        return redirect()->route('document.sign')->with('success', 'Form submitted successfully.');
        
    }

    
}
