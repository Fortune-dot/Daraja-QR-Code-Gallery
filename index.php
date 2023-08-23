<?php

include './accesstoken.php';
$qrcode = "https://sandbox.safaricom.co.ke/mpesa/qrcode/v1/generate";
$MerchantName = "FORTUNE DEV";
$AccountNumber = "IMAGE001";
$BusinessShortCode = "600997"; 
$payload = array(
    'MerchantName' => $MerchantName,
    'RefNo' => $AccountNumber,
    'Amount' => '10',
    'TrxCode' => 'PB',
    'CPI' => $BusinessShortCode,
    'Size' => '250',
);
$ch = curl_init();
curl_setopt_array(
    $ch,
    array(
        CURLOPT_URL => $qrcode,
        CURLINFO_HEADER_OUT => true,
        CURLOPT_HTTPHEADER => array('Content-Type: application/json','Authorization:Bearer ' . $access_token),
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false
    )
);

$response = curl_exec($ch);
$resp = json_decode($response);
$resp->QRCode;
$data = $resp->QRCode;
$Image = "data:image/jpeg;base64,{$resp->QRCode}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
    <form method="dialog" class="modal-box">
        <center>
                <div class="card w-96 bg-base-100 shadow-xl" style="overflow-y: hidden;">
                <figure class="px-10 pt-10">
                    <img src="<?php echo $Image; ?>" alt="Shoes" class="rounded-xl" />
                    <br>
                </figure>
                <br>
                <div class="card-body items-center text-center">
                    <p>Donate to Support Artist 💖</p>
                    <p>Scan QR Code to Checkout</p>
                    <br>
                    <div class="card-actions">
                        <button class="btn btn-primary">Download Image</button>
                    </div>
                </div>
            </div>
            </center>
    </form>
    </dialog>
    <br><br>
    <div class="container mx-auto space-y-2 lg:space-y-0 lg:gap-2 lg:grid lg:grid-cols-3">
        <div class="w-full rounded" onclick="my_modal_5.showModal()" >
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="image">
        </div>
        <div class="w-full rounded" onclick="my_modal_5.showModal()" >
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="image">
        </div>
        <div class="w-full rounded" onclick="my_modal_5.showModal()">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="image">
        </div>
        <div class="w-full rounded" onclick="my_modal_5.showModal()" >
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="image">
        </div>
        <div class="w-full rounded" onclick="my_modal_5.showModal()" >
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="image">
        </div>
        <div class="w-full rounded" onclick="my_modal_5.showModal()">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=989&q=80"
                alt="image">
        </div>
    </div>
</body>
</html>

