<?php
    
    define("CLIENT_ID", "AStdAJygi_srQmfyERvukwDHE_Rd_-KySzA0XS3xbaD9O4ctB-ZSZShseGmP3Q0mmjKF0eiCwkDxdxqS");
    define("TOKEN_MP", "TEST-8982517223624136-111015-d153b5137e8ff32a608d6822f1d505e5-436965469");
    define("CURRENCY", "MXN");
    define("KEY_TOKEN", "APR.wqc-354*");
    define("MONEDA", "$");

    session_start();

   $num_cart = 0;

    if(isset($_SESSION['carrito']['productos'])){
        $num_cart = count($_SESSION['carrito']['productos']);
    }

?>