<?php

require __DIR__."/vendor/autoload.php";

use \App\Pix\Payload;
use Mpdf\QrCode\Qrcode;
use Mpdf\QrCode\Output;

//INSTANCIA PRINCIAPL DO PAYLOAD PIX
$obPayload = (new Payload)->setPixKey('123456789000')
                          ->setDescription('Pagamento do pedido 123456')
                          ->setMerchantName('Fernando Rocha')
                          ->setMerchantCity("Caucaia")
                          ->setAmount('100.00')
                          ->setTxid('138')
                          ;  

//CÓDIGO DE PAGAMENTO PIX
$payloadQrCode = $obPayload->getPayload();

//QR CODE
$obQrCode = new Qrcode($payloadQrCode);

//IMAGEM DO QR CODE
$image = (new Output\Png)->output($obQrCode,400);

//header('Content-Type: image/png');
//echo $image;
?>

<h1> QR CODE PIX</h1>
<br>
<img src="data:image/png;base64, <?=base64_encode($image)?>">
<br><br>

Código Pix:

<strong><<?=$payloadQrCode?>/strong>


