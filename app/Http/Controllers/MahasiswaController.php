<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class MahasiswaController extends Controller
{
    public function generate()
    {
        $mhs = \App\Models\Mahasiswa::All();
        $pdf =
        PDF::loadview('1461900027_RismaAunaF_pdf',['mahasiswa'=>$mhs]);
        return $pdf->stream();
    }
}
