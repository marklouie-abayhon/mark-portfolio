<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class ResumeController extends Controller
{
    public function download()
    {
        // Path to the resume file in the public directory
        $filePath = public_path('assets/resume/resume.pdf');

        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404, 'File not found.');
        }

        // Return the file as a downloadable response
        return Response::download($filePath, 'Mark_Louie_Abayhon_Resume.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }
}