<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function index(){
    	$data = 'Angam';
    	$pdf = 	PDF::loadView('invoice', compact('data'));
		return $pdf->download('invoice.pdf');
    
    }
}
