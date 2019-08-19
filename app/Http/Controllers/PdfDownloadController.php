<?php

namespace App\Http\Controllers;

use App\Entities\Birth;
use App\Entities\Marriage;
use App\Entities\Death;

use PDF;

class PdfDownloadController extends Controller
{
    public function birthDownload($id, $format)
    {
        $birth = Birth::findOrFail($id);
        
        if ($format === '1')
        {
            $pdf = PDF::loadView('formatos.nacimientos', ['partida' => $birth->partida]);
            return $pdf->stream();
        } elseif ($format === '2') {
            $pdf = PDF::loadView('formatos.default', ['partida' => $birth->partida]);
            return $pdf->stream();
        }
        // return $pdf->download('medium.pdf');
        // return $id;
    }

    public function marriageDownload($id, $format)
    {
        $marriage = Marriage::findOrFail($id);
        
        if ($format === '1')
        {
            $pdf = PDF::loadView('formatos.matrimonios', ['partida' => $marriage->partida]);
            return $pdf->stream();
        } elseif ($format === '2') {
            $pdf = PDF::loadView('formatos.default', ['partida' => $marriage->partida]);
            return $pdf->stream();
        }
        // return $pdf->download('medium.pdf');
        // return $id;
    }

    public function deathDownload($id, $format)
    {
        $death = Death::findOrFail($id);
        
        if ($format === '1')
        {
            $pdf = PDF::loadView('formatos.defunciones', ['partida' => $death->partida]);
            return $pdf->stream();
        } elseif ($format === '2') {
            $pdf = PDF::loadView('formatos.default', ['partida' => $death->partida]);
            return $pdf->stream();
        }
        // return $pdf->download('medium.pdf');
        // return $id;
    }
}
