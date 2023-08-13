<?php
include './pdfgenerator/report-helper.php';
include './pdfgenerator/report-values.php';
// include './pdfgenerator/report-generate-overall-cyber-maturity.php';
// include './pdfgenerator/report-generate-maturity-by-domain.php';
// include './pdfgenerator/report-generate-maturity-by-industry-comparison.php';
require_once './pdfgenerator/dompdf/vendor/autoload.php';

ob_start();
include './pdfgenerator/report-markup.php';
$pdfHTML = ob_get_clean();

use Dompdf\Dompdf;
use Dompdf\Options;
$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$options->set('chroot', __DIR__);
$options->set('tempDir', __DIR__);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($pdfHTML);
$dompdf->setPaper('letter', 'portrait');
$dompdf->render();
$dompdf->stream('NEXAMPLE', array("Attachment" => false));
?>