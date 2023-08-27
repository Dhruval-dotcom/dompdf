<?php

require_once('./dompdf/autoload.inc.php');

use Dompdf\Dompdf;use Dompdf\Options;

// Create a Dompdf instance
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$html = file_get_contents('pdf.html');

$dompdf = new Dompdf($options);
$css = file_get_contents('style.css');
$dompdf->getOptions()->setIsRemoteEnabled(true);

// Add the CSS to Dompdf
// $dompdf->getCanvas()->getDomPDF()->getCss()->importStylesheet($css);
$dompdf->loadHtml($html);
$dompdf->setBasePath('css/');

$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
// $dompdf->stream("new file", ['Attachment' => 0]);
file_put_contents('pdfgen.pdf',$dompdf->output());
?>
<html>
    <head>
        <title>Pdf gen</title>
    </head>
    <body>
        <a href="pdfgen.pdf" download>Download</a>
    </body>
</html>