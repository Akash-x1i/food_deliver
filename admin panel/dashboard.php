<?php
include '../components/connect.php';
if (isset($_COOKIE['seller_id'])) {
    $seller_id = $_COOKIE['seller_id'];
} else {
    $seller_id = '';
    header('lacation:loging.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blue sky summer - seller registration page</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons/css/boxicons.min.css">
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="main-container">
        <?php include '../components/admin_header.php'; ?>
    </div>

    <!--sweetalert cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!--custom js link-->
    <script src="../js/script.js"></script>
    <?php
    include '../components/alert.php';
    ?>
</body>

</html>