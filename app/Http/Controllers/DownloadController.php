<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function resume()
{
    $filePath = public_path('downloads/MarkLouieAbayhon_Resume.pdf');
    
    if(!File::exists($filePath)) {
        abort(404, 'Resume file not found');
    }

    return response()->download($filePath, 'MarkLouieAbayhon_Resume.pdf', [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="MarkLouieAbayhon_Resume.pdf"'
    ]);
}
}
