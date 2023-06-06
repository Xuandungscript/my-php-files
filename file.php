<?php
$validCode = 'G3DU3HF781JDH72J72';

if ($_POST['code'] === $validCode) {
    $response = array(
        'thanhdieu' => 'ThanhDieuServerIPv1-4L8qHX',
        'spamcallsms' => 'LQM'
    );
    echo json_encode($response);
} else {
    echo "Mày vào làm con cặc gì?";
}
?>
