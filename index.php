<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />

    <title>my PHP blog</title>
</head>
<style>
    body {
        height: 100vh;

        padding: 0px 0px;
        margin-top: 0;
        margin-right: 0;
    }

    main {
        height: 100%;
        width: 100%;
    }

    h1,
    p {
        margin: 0;
        padding: 0;
    }

    li {
        font-size: x-large;
    }
</style>

<body class="">

    <!-- menu -->
    <?php
    include('layout/menu.php')
    ?>

    <!-- end of menu -->
    <main class="flex justify-center items-center  bg-[#E3D9B6]">
        <?php
        include('router.php')
        ?>

    </main>

    <!-- footer -->
    <?php
    include('layout/footer.php')
    ?>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>