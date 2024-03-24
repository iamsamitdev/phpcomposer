<?php
require_once __DIR__ . '/app/autoload.php';

use Samit\Phpcomposer\User;

$user = new User();
$user->firstName = 'Samit';
$user->lastName = 'Koyom';
$user->email = "samit@email.com";

$user->loginProcess();

$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML('Hello World');
$mpdf->WriteHTML('สวัสดีชาวโลก');

// Output a PDF file directly to the browser
$mpdf->Output();