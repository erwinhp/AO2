<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Spatie\Browsershot\Browsershot;

class homez extends Controller
{
public function index()
{
  return view('home');

  $dompdf = new Dompdf();
  ob_start();?>
  <?php
  $html = ob_get_clean();
  $options = new Options();
  $options->set('defaultFont', 'Courier');
  $dompdf = new Dompdf($options);

  $dompdf->loadHtml($html);
  $dompdf->setPaper('A4', 'landscape');
  $dompdf->render();
  $dompdf->stream();


}



}
