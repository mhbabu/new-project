<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DocumentSignedMail extends Mailable
{
    use Queueable, SerializesModels;


    public $pdfPath;
    public $imagePath;
    public $backImagePath;
    public $formData;

    
    public function __construct($pdfPath, $imagePath, $backImagePath, $formData)
    {
        $this->pdfPath = $pdfPath;
        $this->imagePath = $imagePath;
        $this->backImagePath = $backImagePath;
        $this->formData = $formData; // Pass the form data
    }

    // public function build()
    // {
    //     return $this->view('emails.document-signed')
    //         ->with('formData', $this->formData)
    //         ->attach('/path/to/signed/document.pdf', [
    //             'as' => 'signed_document.pdf',
    //             'mime' => 'application/pdf',
    //         ]);
    // }

    public function build()
    {
        return $this->subject('Form Submission')
            ->attach($this->pdfPath, ['as' => 'form_submission.pdf'])
            ->attach($this->imagePath, ['as' => 'nid_image.png']) // Attach the image
            ->attach($this->backImagePath, ['as' => 'back_nid_image.png']) // Attach the image
            ->view('emails.document-signed', [
                'formData' => $this->formData, // Pass the form data to the view
            ]);
    }

}
