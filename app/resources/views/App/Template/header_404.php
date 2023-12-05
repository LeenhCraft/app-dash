<!DOCTYPE html>
<html lang="es" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?php echo $data['titulo_web']; ?></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/img/logo.png">
    <!-- <link rel="icon" type="image/x-icon" href="/img/favicon/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/app/appfonts.css">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/css/app/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/css/app/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/css/app/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/css/app/custom.css" />

    <link rel="stylesheet" href="/css/app/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    
    <link rel="stylesheet" href="/css/app/vendor/css/pages/page-auth.css" />
    <link rel="stylesheet" href="/css/app/vendor/css/pages/page-misc.css" />
    
    <script src="/js/app/vendor/js/helpers.js"></script>

    <script src="/js/app/plugins/config.js"></script>
    <link rel="stylesheet" href="/css/app/demo.css">
    
    <link rel="stylesheet" href="/css/app/plugins/select2.min.css">
    <link rel="stylesheet" href="/css/app/plugins/select2-bootstrap4.min.css">
    
    <?php
    if (isset($data['css']) && !empty($data['css'])) {
        for ($i = 0; $i < count($data['css']); $i++) {
            echo '<link rel="stylesheet" type="text/css" href="' . base_url() . $data['css'][$i] . '">';
        }
    }
    ?>

</head>

<body>