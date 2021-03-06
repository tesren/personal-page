<?php

    $message_sent = false;

    if(isset($_POST['correo']) && $_POST['correo'] != ''){

        if(filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)){
           
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono=$_POST['telefono'];
            $presupuesto = $_POST['presupuesto'];
            $descripcion = $_POST['descripcion'];

            $to = 'erickalejandropm117@gmail.com';
            $subject = "Correo de erickperezdev.com";
            $body = "";

            $body .= "De: ".$nombre."\r\n";
            $body .= "Correo: ".$correo."\r\n";
            $body .= "Teléfono: ".$telefono."\r\n";
            $body .= "Presupuesto: ".$presupuesto."\r\n";
            $body .= "Descripción: ".$descripcion."\r\n";

            mail($to, $subject, $body);

            $message_sent = true;
        }
    }

   

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Erick Pérez</title>
        <link rel="icon" href="/images/favicon.png">
        <link rel="icon" href="/images/favicon32x32.png">
        <!--Bootstrap-->
        <link rel="stylesheet" href="/bootstrap-5.0/css/bootstrap.min.css">
        <link rel= "stylesheet" href="/css/index.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <!--fuente-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    </head>

    <body>

        <div class="container-fluid" id="contenedor-todo">

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <!-- Navbar content -->
                <div class="container-fluid">
                    <a class="navbar-brand" href="/#">
                        <!-- Logo -->
                        <img src="/images/logo.png" alt="logo" width="90" height="auto">
                    </a>
                    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse py-1" id="navbarNav">
    
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link"  href="/#work">WORK</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="/#about">ABOUT</a>
                            </li>
                            <li class="nav-item pe-2">
                                <a class="nav-link" href="/#form-contacto">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
              </nav>

              <div class="container-fluid" id="animation">
                <div class="anim">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1100 800">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#2193b0" d="M781.02 488.77v69.78c0 1.08-.88 1.96-1.97 1.96l-135.12-.04c-1.09 0-2.6.62-3.38 1.39l-39.23 38.96a5.52 5.52 0 0 1-3.37 1.4h-75.38a1.97 1.97 0 0 1-1.97-1.97v-33.5"/>
                            <path stroke="#2193b0" d="M674.88 355.57l45.54-45.24a5.42 5.42 0 0 0 1.39-3.35l-.06-10.38c0-1.08-.63-2.58-1.4-3.35l-43.38-43.07a1.94 1.94 0 0 1 0-2.77l82.83-82.25a5.52 5.52 0 0 1 3.37-1.4l44.94.1c1.08 0 2.6-.62 3.37-1.37L952.5 22.65"/>
                            <path stroke="#2193b0" d="M507-76.68v265.47a4 4 0 0 0 4 3.99H566c1.08 0 1.97.88 1.97 1.96v147.5c0 1.08-.63 2.59-1.4 3.35l-47.9 47.4a5.45 5.45 0 0 0-1.4 3.34c0 2.25.64 3.76 1.4 4.53l53.82 53.26c.77.76 1.76 1.39 2.19 1.39.43 0 .79.88.79 1.96v70.17c0 1.07-.89 1.96-1.97 1.96l-85.81-.04c-1.09 0-2.6.62-3.38 1.39l-1.55 1.54a5.52 5.52 0 0 1-3.38 1.4h-9.29"/>
                            <path stroke="#2193b0" d="M8 127.82v391.06a4.04 4.04 0 0 0 4 4.04L140.8 524"/>
                            <path stroke="#2193b0" d="M894.01 374l49.8-49.44a5.52 5.52 0 0 1 3.37-1.4h92.41c1.09 0 2.6.63 3.38 1.4l27.18 26.99"/>
                            <path stroke="#2193b0" d="M894.01 374l49.8-49.44a5.52 5.52 0 0 1 3.37-1.4h92.41c1.09 0 2.6.63 3.38 1.4l27.18 26.99"/>
                            <path stroke="#2193b0" d="M755.16 213.9l70.82.04c1.08 0 2.6-.63 3.37-1.4l91.61-90.97a5.52 5.52 0 0 1 3.37-1.39h77.07l-71.29-72.13a5.45 5.45 0 0 1-1.4-3.35V16.87"/>
                            <path stroke="#2193b0" d="M261.78-52.44l11.16 11.08c.77.77 1.4 2.28 1.4 3.35V-5L156.7 111.03l-85.4 84.8a5.45 5.45 0 0 0-1.4 3.35v100.67c0 1.08.89 1.96 1.97 1.96h50.4c1.09 0 1.98.88 1.98 1.96l.07 26.92c0 1.07.9 1.96 1.98 1.96l335.73.13c1.09 0 1.98.88 1.98 1.96v36.79l-42.99 43.78a5.52 5.52 0 0 1-3.37 1.4H385.2"/>
                            <path stroke="#2193b0" d="M564.8 549.64v17.76c0 1.08-.64 2.59-1.4 3.35L382.28 750.6a5.52 5.52 0 0 1-3.38 1.39h-109.1c-1.09 0-1.97.88-1.97 1.96v23.37c0 1.07-.9 1.96-1.98 1.96h-83.54c-1.08 0-1.97.88-1.97 1.96v45.8c0 1.07.89 1.95 1.97 1.95h29.89c1.08 0 1.97.88 1.97 1.96v51.07c0 1.08.63 2.59 1.4 3.35l10.32 10.25c.77.76 2.29 1.39 3.37 1.39h111.77c1.09 0 1.34.62.57 1.39M482.82 656H630.9"/>
                            <path stroke="#2193b0" d="M440.53 245.87l-31.7 31.48a5.52 5.52 0 0 1-3.37 1.39h-62.37c-1.09 0-2.6.62-3.38 1.39l-2.68 3.66-264.59.02c-1.08 0-2.6-.63-3.37-1.4l-47.3-46.97a5.52 5.52 0 0 0-3.37-1.39h-57.47l-1.12-34.61c0-1.08-.63-2.59-1.4-3.35l-66.54-65.94"/>
                            <path stroke="#2193b0" d="M705.31 221.73h7.83c1.09 0 2.6.63 3.37 1.4l45.8 45.6c.78.76 1.4 2.27 1.4 3.35v13.94c0 1.08.46 1.96 1.03 1.98.56 0 1.03.9 1.03 1.98v10.77l-.15 110.84c0 1.08-.89 1.96-1.98 1.96H628.32c-1.08 0-2.6-.63-3.37-1.4l-12.2-12.12a5.52 5.52 0 0 0-3.38-1.39h-46.18a2 2 0 0 0-2 1.96l-.17 26.74c0 1.08-.63 2.59-1.4 3.35l-8.82 8.76a5.52 5.52 0 0 1-3.37 1.39l-26.65-.06c-1.09 0-2.6.62-3.38 1.39l-48.1 47.78a5.52 5.52 0 0 1-3.38 1.39h-16.37l-79.45-.02c-1.09 0-2.6.63-3.36 1.39L220.71 639.06a5.47 5.47 0 0 1-3.35 1.4H31.06"/>
                            <path stroke="#2193b0" d="M145.43 99.41L289.6 243.5c.77.76 2.29 1.39 3.37 1.39h146.76c1.09 0 2.6.62 3.38 1.39l31.93 31.71c.77.77 1.4 2.27 1.4 3.35V474.1c0 1.08-.63 2.59-1.4 3.35l-7.6 7.54a5.52 5.52 0 0 1-3.36 1.4h-20.62l-20.67 20.97-2.78 2.78L289.37 640a5.45 5.45 0 0 0-1.4 3.35l.16 177.85"/>
                            <path stroke="#2193b0" d="M318.82 380.62h94.88c1.09 0 2.6.63 3.38 1.39l14.97 14.87c.77.76 2.29 1.39 3.37 1.39h72.99c1.08 0 2.6.63 3.35 1.39l58.57 58.53c.77.77 2.27 1.4 3.35 1.4h103.37c1.08 0 1.97-.89 1.97-1.97v-14.7c0-1.09-.89-1.97-1.97-1.97l-6.7.02H630.1a1.97 1.97 0 0 1-1.97-1.96v-57c0-1.08-.63-2.59-1.4-3.35l-14.58-14.48a5.45 5.45 0 0 1-1.4-3.35v-17.3c0-1.07-.63-2.58-1.4-3.34L597 327.92a5.52 5.52 0 0 0-3.37-1.39h-17.4c-1.09 0-2.6-.62-3.38-1.39l-41.8-41.5a5.52 5.52 0 0 0-3.37-1.4h-41.34"/>
                            <path stroke="#2193b0"/>
                            <path stroke="#2193b0" d="M855.2 194.4h59.84c1.09 0 1.97.89 1.97 1.96v28.74c0 1.08.64 2.59 1.4 3.35l50.96 50.6c.77.76 1.4 2.27 1.4 3.35v101.47l105.2 104.27"/>
                            <path stroke="#2193b0" d="M638.46 305.73L651 293.29c.77-.74.77-2 0-2.76l-31.35-31.13c-.76-.74-.76-2 0-2.76l18.53-18.4a5.52 5.52 0 0 1 3.37-1.39l160.41-.2 423.37 1.2c1.08 0 1.97.89 1.97 1.96v71.5"/>
                            <path stroke="#2193b0" d="M438.61 486.03h-18.54c-1.08 0-2.6-.63-3.37-1.4l-74.94-74.41a5.52 5.52 0 0 0-3.37-1.4h-38.57c-1.08 0-2.6-.62-3.37-1.38l-47-46.68-36.58-.04-57 71.59a5.45 5.45 0 0 0-1.4 3.35v23.9"/>
                            <path stroke="#2193b0" d="M882.06 358.97l-46.92 46.6a5.52 5.52 0 0 1-3.38 1.39h-94.64c-1.09 0-2.6-.63-3.38-1.4l-30.6-30.33a5.52 5.52 0 0 0-3.36-1.4l-34.94.04c-1.08 0-2.6.63-3.37 1.4l-29.57 29.36a5.52 5.52 0 0 1-3.37 1.39l-14.55-14.35a5.63 5.63 0 0 0-3.42-1.4l-156.97-.25c-1.11 0-2.65.63-3.43 1.4l-27.85 27.61a5.52 5.52 0 0 1-3.38 1.4H-23.82l-88.65.2-12.44 12.35"/>
                            <path stroke="#2193b0" d="M292.9 643.74l59.56-59.12a5.52 5.52 0 0 1 3.37-1.39h23.93c1.08 0 2.6-.63 3.37-1.39l46.53-46.21a5.52 5.52 0 0 1 3.38-1.4h33.53l153.67-.01c1.08 0 1.97-.88 1.97-1.96V420.01c0-1.07-.63-2.58-1.4-3.35l-38.64-38.37a5.45 5.45 0 0 1-1.4-3.35v-51.52c0-1.08-.64-2.59-1.4-3.35L468.91 210.39a5.52 5.52 0 0 0-3.38-1.4l-180.49.2"/>
                            <path stroke="#2193b0" d="M484.13 548.71h-37.09c-1.08 0-2.6.63-3.37 1.4l-69.02 68.54c-.77.76-.77 2 0 2.76l28.09 27.78c.77.76 2.29 1.39 3.37 1.39h62.41"/>
                            <path stroke="#2193b0" d="M520.82 561.7v-4.74c0-1.08-.89-1.96-1.98-1.96h-13.21c-1.09 0-2.6-.62-3.37-1.39l-43.36-42.88a5.45 5.45 0 0 1-1.4-3.35v-190.4c0-1.08.63-2.6 1.4-3.36l20.89-20.74a5.45 5.45 0 0 0 1.4-3.35v-95.4c0-1.08-.63-2.58-1.4-3.35L292.4 4.7l-.6-40.88c0-1.08-.62-2.58-1.4-3.35L278.8-51.07"/>
                            <path stroke="#2193b0" d="M275.76 745h99.28c1.09 0 2.6-.63 3.38-1.4l174.33-172.75a5.52 5.52 0 0 1 3.38-1.4h46.75c1.08 0 2.6-.62 3.35-1.38l51.47-51.46a5.42 5.42 0 0 0 1.38-3.35V311.29c0-1.07-.63-2.58-1.4-3.35l-51.84-51.3a5.52 5.52 0 0 0-3.38-1.4h-17.95a1.97 1.97 0 0 1-1.97-1.95v-44.47c0-1.07-.89-1.96-1.97-1.96h-88.63a1.97 1.97 0 0 1-1.97-1.96v-19.2c0-1.07-.64-2.58-1.4-3.34L309.87 4.92"/>
                            <path stroke="#2193b0" d="M1002.65 123.83H926.5c-1.08 0-2.6.62-3.37 1.39l-92.28 91.46a5.52 5.52 0 0 1-3.37 1.39l-131.87-.08c-1.09 0-2.6.63-3.37 1.37l-51.9 51.19c-.77.76-.77 2 0 2.76l21.22 21.1c.77.76 1.4 2.27 1.4 3.35v15.69"/>
                            <path stroke="#2193b0" d="M672.51 437.64h54.25c1.08 0 2.6.63 3.37 1.4l49.04 48.7c.77.76 2.29 1.38 3.37 1.38h45.16c1.08 0 2.6-.62 3.37-1.39L914.39 405a5.52 5.52 0 0 1 3.37-1.4h42.22c1.08 0 2.6.63 3.37 1.4l100.8 100.1"/>
                            <path stroke="#2193b0" d="M672.51 434.31h55.63c1.08 0 2.6.63 3.37 1.4l49.14 48.8c.77.76 2.29 1.38 3.37 1.38l41.9-.04c1.08 0 2.6-.62 3.37-1.39l62.08-61.68a5.45 5.45 0 0 0 1.4-3.35l-.1-268.18c0-1.08-.63-2.59-1.4-3.35l-99.8-99.28a5.52 5.52 0 0 0-3.37-1.39H422.62c-1.08 0-2.6.63-3.37 1.4L260.28 206.3a5.52 5.52 0 0 1-3.38 1.39H127.3c-1.08 0-2.6.62-3.37 1.39l-36.71 36.45a5.45 5.45 0 0 0-1.4 3.35v185.1"/>
                            <path stroke="#2193b0" d="M410.1 713.73l17.53 17.42c.77.76 2.29 1.39 3.37 1.39h42.02c1.09 0 2.6-.63 3.37-1.4l26.02-25.83 123.2-.31"/><path/>
                            <path stroke="#2193b0" d="M307.34 907.08c.77-.77.52-1.4-.57-1.4H108.29a1.97 1.97 0 0 1-1.98-1.95V743.59c0-1.08.9-1.96 1.98-1.96h264.38c1.09 0 2.6-.63 3.38-1.4l23.75-23.58c.77-.76.77-2 0-2.76l-80.84-80.1c-.77-.76-.51-1.4.57-1.4h137.53c1.09 0 2.6-.62 3.38-1.38l53.63-53.26a5.52 5.52 0 0 1 3.37-1.4l88.57-.2c1.09 0 2.6-.62 3.38-1.38l55.6-55.22a5.45 5.45 0 0 0 1.4-3.35V409.93c0-1.08.9-1.96 1.98-1.96h29c1.08 0 2.6-.63 3.37-1.4l43.32-43.01a5.52 5.52 0 0 1 3.37-1.4h6.11c1.09 0 2.6-.62 3.38-1.38l53.12-52.76a5.52 5.52 0 0 1 3.37-1.39h13.6c1.08 0 2.6.63 3.37 1.4L892.79 370c.77.77 2.29 1.4 3.37 1.4h74.06c1.08 0 2.6.62 3.37 1.38l93.97 93.5"/>
                            <path stroke="#2193b0" d="M647.56 429.46v-33.62c0-1.08-.63-2.59-1.4-3.35l-31.45-31.22a5.52 5.52 0 0 0-3.37-1.4h-36.87c-1.08 0-2.6.63-3.37 1.4l-74.35 73.83a5.52 5.52 0 0 1-3.37 1.39H440.9a1.97 1.97 0 0 1-1.98-1.96v-71.5c0-1.08-.88-1.96-1.97-1.96H9.3c-1.08 0-2.6.63-3.37 1.4l-37.9 37.62a5.52 5.52 0 0 1-3.37 1.4h-57c-1.1 0-2.61.62-3.38 1.38l-13.2 13.1a5.52 5.52 0 0 1-3.37 1.4h-13.2"/>
                            <path stroke="#2193b0" d="M219.9 357h144.49l76.54.13c1.08 0 1.97.88 1.97 1.96v71.7c0 1.08.89 1.96 1.97 1.96h46.36c1.08 0 2.6-.63 3.37-1.4l74.35-74a5.52 5.52 0 0 1 3.37-1.4h192.33c1.09 0 2.6-.62 3.37-1.38l43.58-43.28a5.52 5.52 0 0 1 3.37-1.39h10.6c1.08 0 2.6.63 3.37 1.4l62.65 62.2c.77.77 2.29 1.4 3.37 1.4h73.87c1.09 0 2.6.63 3.38 1.4l94.12 93.47 9.27.57c.84 0 2.17-.62 2.93-1.39l104.08-89.36a1.97 1.97 0 0 1 2.78 0l6.3 6.25"/>
                            <path stroke="#2193b0" d="M599.92 564.19a6.6 6.6 0 0 0 4.04-1.67l47.94-47.6a6.5 6.5 0 0 0 1.67-4.01V313.84c0-1.3-.75-3.1-1.67-4.02l-47.94-47.6a6.6 6.6 0 0 0-4.04-1.66h-97.84a6.6 6.6 0 0 0-4.05 1.66l-47.93 47.6a6.5 6.5 0 0 0-1.68 4.02v197.07c0 1.29.75 3.1 1.68 4.01l47.93 47.6a6.6 6.6 0 0 0 4.05 1.67h97.84z"/>
                            <path stroke="#2193b0" d="M648.25 527.17v33.3c0 1.08-.63 2.58-1.4 3.35l-87.37 86.76c-.77.76-.51 1.39.57 1.39h70.82"/>
                            <path stroke="#2193b0" d="M476.04 273.32v-18.86c0-1.08-.63-2.59-1.4-3.35l-30.9-30.68a5.52 5.52 0 0 0-3.37-1.4H274.62"/>
                            <path stroke="#2193b0" d="M923.43 372.6V119.09c0-1.07-.64-2.58-1.4-3.34L757.4-47.74a5.52 5.52 0 0 0-3.37-1.39H351.57c-1.09 0-2.6.63-3.38 1.4L310.5-10.3"/>
                            <path stroke="#2193b0" d="M317-49.77L304.42-37.3a5.58 5.58 0 0 0-1.42 3.35l-.36 21.45a5.3 5.3 0 0 0 1.36 3.35L493.36 178.9c.77.76 1.4 2.27 1.4 3.35v18.41c0 1.08.89 1.96 1.97 1.96h87.86c1.09 0 1.98.88 1.98 1.96v34.67c0 1.08.88 1.96 1.97 1.96h23.3c1.08 0 2.6.63 3.37 1.4l46.16 45.83c.77.77 1.4 2.28 1.4 3.35v138.64l.07 84.4c0 1.08-.63 2.6-1.38 3.35l-53.63 53.27a5.52 5.52 0 0 1-3.37 1.39H557.9c-1.08 0-2.6.63-3.37 1.39L380.57 746.98a5.52 5.52 0 0 1-3.38 1.39H112.47c-1.09 0-1.97.88-1.97 1.96v93.24c0 1.08-.9 1.96-1.98 1.96h-224.54"/>
                            <path stroke="#2193b0" d="M415.07 612.97l63.3-62.86a5.52 5.52 0 0 1 3.37-1.4h124.67c1.08 0 2.6-.6 3.37-1.37l28.23-27.83a5.35 5.35 0 0 0 1.4-3.33V478.2c0-1.07.89-1.96 1.97-1.96H694c1.09 0 1.97-.88 1.97-1.95v-52.11c0-1.08.64-2.59 1.4-3.35l29.57-29.37a5.45 5.45 0 0 0 1.4-3.35v-76c0-1.08.9-1.96 1.98-1.96h37.9a4 4 0 0 0 4-4v-29.3c0-1.08.63-2.59 1.4-3.35l35.35-35"/>
                            <path stroke="#2193b0" d="M893.1 374.7L847.5 420a5.52 5.52 0 0 1-3.37 1.38H618.66c-1.09 0-2.6-.62-3.37-1.39l-81.65-81.08a5.52 5.52 0 0 0-3.37-1.39H384.49c-1.08 0-2.6.63-3.37 1.4l-17.14 17.02"/>
                            <path stroke="#2193b0" d="M288.52 640.2h-46.9c-1.09 0-1.98.88-1.98 1.95v26.65c0 1.07-.89 1.95-1.97 1.95h-89.32"/>
                            <path stroke="#2193b0" d="M281.34 229.6l9.65 9.59c.77.76 2.29 1.39 3.37 1.39l146.76-.2c1.09 0 2.6.63 3.38 1.37l115.95 114c.77.76.77 1.99 0 2.75l-37.2 37.05a1.96 1.96 0 0 0 0 2.78l49.62 49.28c.77.77 2.3 1.4 3.38 1.4h138.28c1.08 0 2.6.62 3.37 1.39l37.26 37c.77.76 2.3 1.4 3.38 1.4h21.7"/>
                            <path stroke="#2193b0" d="M-116.02 841.87h216.77c1.09 0 1.97-.89 1.97-1.96v-99.83c0-1.08.9-1.96 1.98-1.96h266.24c1.08 0 2.6-.62 3.37-1.39l20.18-20.04c.77-.76.77-2.02 0-2.76l-78.7-78.2a5.45 5.45 0 0 1-1.4-3.35v-1.57c0-1.07.88-1.96 1.97-1.96l139.22.02c1.09 0 2.6-.62 3.38-1.39l53.7-53.48a4.86 4.86 0 0 1 2.8-1.39c.76 0 1.41-.88 1.41-1.96v-6.62"/>
                            <path stroke="#2193b0" d="M317.92 257.82l73.16 72.65c.77.77 1.4 2.27 1.4 3.35v45.25c0 1.08.63 2.59 1.4 3.35l12.02 11.93c.77.77 2.28 1.4 3.37 1.4h9.86c1.09 0 2.6-.63 3.38-1.4l6.29-6.25a5.52 5.52 0 0 1 3.37-1.39h85.81c1.08 0 2.6-.62 3.37-1.39l63.1-62.66a5.52 5.52 0 0 1 3.38-1.4h161.56c1.08 0 1.97.89 1.97 1.96v178.66c0 1.07-.63 2.58-1.4 3.35l-11.42 11.34a5.52 5.52 0 0 1-3.38 1.39H529.03a1.97 1.97 0 0 1-1.98-1.96v-73.07c0-1.07-.88-1.96-1.97-1.96h-88.26a1.97 1.97 0 0 1-1.97-1.95V406.5c0-1.08-.89-1.96-1.97-1.96-1.99 0-3.5-.63-4.28-1.4l-7.44-7.38"/>
                            <path stroke="#2193b0" d="M650.42-78.35v211.36c0 1.08.63 2.59 1.4 3.35l46.73 46.4c.77.77 1.4 2.28 1.4 3.36v35.79l-2.49-.14c-.75 0-1.97.63-2.74 1.4l-18.32 18.19a5.45 5.45 0 0 0-1.4 3.35v116.95c0 1.07.63 2.58 1.38 3.35l46.53 46.58a5.42 5.42 0 0 1 1.38 3.35l-.02 30.34c0 1.08-.63 2.59-1.4 3.35l-4.91 4.88a5.52 5.52 0 0 1-3.37 1.4H599.52c-1.08 0-1.97.87-1.97 1.95v36c0 1.08-.89 1.96-1.97 1.96h-92.71c-1.09 0-2.6.63-3.38 1.4l-19.58 19.45a5.52 5.52 0 0 1-3.38 1.39h-63.61"/>
                            <path stroke="#2193b0" d="M281.48 745v84.33c0 1.08-.89 1.96-1.97 1.96h-57.48c-1.09 0-1.98.88-1.98 1.96v10.36c0 1.08-.88 1.96-1.97 1.96H110.52"/>
                            <path stroke="#2193b0" d="M10.95 362.32l113.4 112.62c.78.77 2.3 1.4 3.38 1.4h36.12c1.08 0 2.6.62 3.37 1.38l205.45 204.03c.77.76 2.29 1.39 3.37 1.39l62.74.03h29.53c1.09 0 2.6.63 3.37 1.4l16.36 16.23c.77.77 2.29 1.4 3.37 1.4h134.34"/>
                            <path stroke="#2193b0" d="M275.82 590.44l24.44-24.27a5.52 5.52 0 0 1 3.37-1.4h121.52c1.08 0 2.6.63 3.37 1.4l34.32 34.08c.77.77 2.3 1.4 3.38 1.4h54.36"/>
                            <path stroke="#2193b0" d="M633.41 278.74l-21.36-21.22a5.45 5.45 0 0 1-1.4-3.35V-78.58"/>
                            <path stroke="#2193b0" d="M754.4 192.02v20.11c0 1.08-.9 1.96-1.98 1.96h-94.49c-1.08 0-2.6.63-3.37 1.4l-50.28 49.93a5.45 5.45 0 0 0-1.4 3.35v56.41c0 1.08.63 2.59 1.4 3.35l10.63 10.56c.77.76 1.4 2.27 1.4 3.35v121.45c0 1.08-.89 1.96-1.97 1.96H429.6c-1.08 0-2.6-.62-3.37-1.39l-21.2-21.06-15.77 14.8a5.52 5.52 0 0 1-3.37 1.38H282.15c-1.08 0-2.6.63-3.37 1.37l-62.1 61.3a5.5 5.5 0 0 1-3.37 1.37h-69.85c-1.09 0-2.6.63-3.37 1.4l-68.22 67.73a5.52 5.52 0 0 1-3.37 1.4H34.1c-1.09 0-2.6.62-3.38 1.38l-61.64 61.22a5.45 5.45 0 0 0-1.4 3.35v98.02c0 1.08-.89 1.96-1.97 1.96h-30.76c-1.08 0-2.6.63-3.37 1.4l-48.29 47.95"/>
                            <path stroke="#2193b0" d="M184.55 422.03v34.09c0 1.07-.63 2.58-1.4 3.35l-56.48 55.88a5.52 5.52 0 0 1-3.37 1.4H-34.6"/>
                            <path stroke="#2193b0" d="M980.12 416.59l-15.05-14.95a5.52 5.52 0 0 0-3.38-1.4h-46.04c-1.08 0-2.6.63-3.37 1.4l-14.5 14.4c-.77.76-1.4.5-1.4-.57v-34.93c0-1.08-.63-2.58-1.4-3.35l-2.48-2.47"/>
                            <path stroke="#2193b0" d="M826.77 238.25v54.43c0 1.08.63 2.59 1.4 3.35l86.38 85.78c.77.77 2.29 1.4 3.37 1.4h98.61c1.09 0 2.6-.63 3.36-1.4l22.6-22.8a5.47 5.47 0 0 1 3.36-1.39h106.38c1.08 0 1.97-.88 1.97-1.96l.04-95.24c0-1.08.89-1.96 1.97-1.96h39.02c1.09 0 1.97.88 1.97 1.96v48.1"/>
                            <path stroke="#2193b0" d="M12.87 361.05h-5c-1.1 0-2.61-.63-3.38-1.4l-17.72-17.58a5.52 5.52 0 0 0-3.37-1.4h-16.9c-1.09 0-2.6-.62-3.38-1.38l-55.64-55.26a5.52 5.52 0 0 0-3.38-1.4h-15.19"/>
                            <path stroke="#2193b0" d="M959.23 126.08l19.2 19.06c.76.76 2.28 1.39 3.36 1.39h177.42c1.09 0 1.97.88 1.97 1.96v100.84a3 3 0 0 0 3 3h36.42c1.08 0 1.97.88 1.97 1.96v54.65"/>
                            <path stroke="#2193b0" d="M33.17 798.75h242.12c1.08 0 1.97-.88 1.97-1.96V672.9c0-1.08-.89-1.96-1.97-1.96h-30.12a1.97 1.97 0 0 1-1.98-1.96v-26.76c0-1.07-.88-1.96-1.97-1.96h-20.87"/>
                            <path stroke="#2193b0" d="M458.48 496.1h9.55c1.09 0 2.6-.63 3.37-1.4l48.23-47.83a5.52 5.52 0 0 1 3.38-1.39h24.26c1.08 0 2.6.63 3.37 1.39l23.26 23.1c.77.76 2.29 1.39 3.37 1.39h111.06c1.09 0 1.97-.88 1.97-1.96v-54.46c0-1.08-.63-2.59-1.4-3.33l-20.35-20.04-2.8-2.76-1.17-1.16a5.52 5.52 0 0 0-3.37-1.39h-11.66a1.97 1.97 0 0 1-1.97-1.96V310.6c0-1.08.88-1.96 1.97-1.96h77.38"/>
                            <path stroke="#2193b0" d="M-34.94 402.19v111.19c0 1.07.63 2.58 1.4 3.35l49.06 48.71c.76.77 2.28 1.4 3.37 1.4h21.8c1.08 0 2.6.62 3.37 1.39l113 112.22c.78.77 2.3 1.4 3.38 1.4h170.6c1.08 0 1.97.87 1.97 1.95v60.41"/>
                        </g></svg>
                </div>
              </div>
             

            <!--foto-->
            <div class="container-fluid text-center" id="contenedor-foto">
                <img src="/images/erick.jpg" class="img-thumbnail" id="mifoto" >
            </div>

            <!--todo-->
            <div class="container-fluid bg-white text-center" id="texto-inicial"> 
                <h1 class="mt-5 pt-5 fw-bold">Erick Pérez</h1>
                <h2>Web & app Developer</h2>
                <p class="fs-5 px-3">Creo páginas web y aplicaciones móviles desde cero, a partir de las ideas de mis clientes y 
                    me apasiona crear un software excelente que mejore la vida de quienes me rodean. 
                    ¿Qué haría usted si tuviera un experto en software disponible a su alcance?
                </p>
                    <!--BOTONES-->
                    <div class="row justify-content-center">
                        <div class="col-5 col-sm-2">
                            <a class="btn btn-1" href="https://drive.google.com/file/d/1ZkoNy_F26vW7aVvgIH4WnLN2SojgFRg7/view?usp=sharing">Currículum</a>
                        </div>
                        <div class="col-5 col-sm-2">
                            <a class="btn btn-2" href="#form-contacto">Contacto</a>
                        </div>
                    </div>
                    
                    <!--skills-->
                    <div class="container-fluid text-center" id="skills">
                        
                        <div class="row px-2 pb-2">

                            <div class="col-md-6">
                                <h2 class="fw-bold pt-4">Web skills</h2>

                                <div class="px-3 text-start">

                                    <h6>HTML5</h6>
                                    <div class="progress my-2">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                    </div>

                                    <h6>CSS3</h6>
                                    <div class="progress my-2">
                                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>

                                    <h6>Bootstrap</h6>
                                    <div class="progress my-2">
                                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>

                                    <h6>JavaScript</h6>
                                    <div class="progress my-2">
                                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>

                                    <h6>PHP</h6>
                                    <div class="progress my-2">
                                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                    </div>

                                    <h6>React</h6>
                                    <div class="progress mt-2 mb-3">
                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>

                                </div>
                                
                            </div>

                                <div class="col-md-6">
                                    <h2 class="fw-bold pt-4">Mobile app skills</h2>

                                    <div class="px-3 text-start" id="mobile-skills">
                                        <h6>Java</h6>
                                        <div class="progress my-2">
                                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                        </div>

                                        <h6>Kotlin</h6>
                                        <div class="progress my-2">
                                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                        </div>

                                        <h6>Flutter</h6>
                                        <div class="progress my-2">
                                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                        </div>

                                        <h6>SQL</h6>
                                        <div class="progress my-2">
                                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                        </div>

                                        <h6>Firebase</h6>
                                        <div class="progress my-2">
                                            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                        </div>
                                    </div>
                                    

                                </div>
                        </div>

                    </div>

                    <!--Rapido, responsivo, intuitivo, dinamico-->
                    <div class="row justify-content-center pb-4" id="prioridades">
                        <h1 class="fw-bold pt-4 pb-2">Mis prioridades en un sitio web:</h1>
                        
                        <div class="col-sm-3" id="rapido">
                                <i class="bi bi-speedometer2"></i>
                                <h3>Rápido</h3>
                                <p class="fs-5">Tiempos de carga rápidos e interacción sin retrasos, mi mayor prioridad.</p>
                        </div>
                        
                        <div class="col-sm-3" id="responsivo">
                            <i class="bi bi-phone-fill"></i>
                            <h3>Responsivo</h3>
                            <p class="fs-5">Diseño responsivo para que funcione en cualquier tamaño de pantalla.</p>
                        </div>
                        
                        <div class="col-sm-3" id="intuitivo">
                            <i class="bi bi-lightbulb-fill"></i>
                            <h3>Intuitivo</h3>
                            <p class="fs-5">Interfaces intuitivas agradables y faciles de usar para el usuario.</p>
                        </div>
                        
                        <div class="col-sm-3 pt-3" id="dinamico">
                            <div id="space">
                                <div class="stars"></div>
                                <div class="stars"></div>
                                <div class="stars"></div>
                                <div class="stars"></div>
                                <div class="stars"></div>
                              </div>
                            <i class="fas fa-rocket"></i>
                            <h3 class="py-2">Dinámico</h3>
                            <p class="fs-5">Los sitios web no tienen que ser estáticos, me encanta hacer que las páginas cobren vida.</p>
                        </div>

                    </div>

                    <!--about-->
                    <div class="container-fluid text-center " id="about">
                        <div class="row px-3">
                            
                            <div class="col-md-4 pt-5 pb-3">
                                <img src="/images/erick.jpg" class="img-fluid img-thumbnail" id="foto-hexa">
                            </div>
                            <div class="col-md-8 pt-4 pb-3 text-start">
                                <h1 class="py-2 text-start">Un poco mas sobre mi</h1>
                                <p class="fs-4"> Mi nombre es Erick Pérez, soy de Puerto Vallarta, Jalisco y soy Ing. en Sistemas Computacionales me dedico
                                    a programar de forma independiente aplicaciones móviles y a desarrollar paginas web para personas o empresas. 
                                    Actualmente estoy trabajando de manera independiente mientras persigo nuevas oportunidades de 
                                    trabajo como desarrollador que me puedan llegar a través de este medio.
                                </p>
                                <a class="btn btn-2" id="boton-about" href="#form-contacto">Contáctame</a>
                            </div>

                        </div>

                        <div class="row px-3 justify-content-center" id="work">

                            <div class="col-md-6 text-start">
                                <h1 class="py-2">Trabajo reciente</h1>
                                <p class="fs-4"> En mi trabajo mas reciente me encargue de diseñar, desarrollar e implementar una 
                                    pagina web a la empresa de Reffki Films. Son una agencia de producción audiovisual especializada en 
                                    producciones audiovisuales narrativas, comerciales y de documental.
                                </p>
                            </div>

                            <div class="col-md-5 pb-3">
                                <img src="/images/reffki.jpg" class="img-fluid">
                                <a class="btn btn-1"  href="www.reffkifilms.com">Visita el sitio de Reffki</a>
                            </div>
                        </div>
                    </div>

                    <!--certificaciones-->
                    <div class="container-fluid">
                        <h1 class="fw-bold my-5">Certificaciones</h1>
                            <div class="row justify-content-center">
                                
                                <div class="col-6 col-md-3">
                                    <div class="card" style="width:100%;">
                                        <img src="/images/php.png" class="card-img-top" alt="php">
                                        <div class="card-body">
                                          <h5 class="card-title">Php certification</h5>
                                          <a href="https://drive.google.com/file/d/1RcTjAaZdGueZb_OV54dKkn88TfPqgnyC/view?usp=sharing" class="btn btn-1">Ver credencial</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card" style="width:100%;">
                                        <img src="/images/css.png" class="card-img-top" alt="css">
                                        <div class="card-body">
                                          <h5 class="card-title">CSS certification</h5>
                                          <a href="https://drive.google.com/file/d/1GXfEh6bmXLVV5tunv4WEr155gU4KfaVg/view?usp=sharing" class="btn btn-1">Ver credencial</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card" style="width:100%;">
                                        <img src="/images/android.png" class="card-img-top" alt="android">
                                        <div class="card-body">
                                          <h5 class="card-title">Android development certification</h5>
                                          <a href="https://drive.google.com/file/d/1m2nBDDUybo3IBYKWOL17_1kD-a2taqqI/view?usp=sharing" class="btn btn-1">Ver credencial</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card" style="width:100%;">
                                        <img src="/images/sql.png" class="card-img-top" alt="sql">
                                        <div class="card-body">
                                          <h5 class="card-title">SQL certification</h5>
                                          <a href="https://drive.google.com/file/d/1C0vIgk8sYjKGLyaxPOJCRl6i0uT-QSGV/view?usp=sharing" class="btn btn-1">Ver credencial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row justify-content-center">

                                <div class="col-6 col-md-3 py-3">
                                    <div class="card" style="width:100%;">
                                        <img src="/images/dart.png" class="card-img-top" alt="dart">
                                        <div class="card-body">
                                          <h5 class="card-title">Dart certification</h5>
                                          <a href="https://drive.google.com/file/d/1K66vNBPFWC7RDZWM7zDoHB1WyNLic5TB/view?usp=sharing" class="btn btn-1">Ver credencial</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-6 col-md-3 py-3">
                                    <div class="card" style="width:100%;">
                                        <img src="/images/html.png" class="card-img-top" alt="html">
                                        <div class="card-body">
                                          <h5 class="card-title">HTML certification</h5>
                                          <a href="https://drive.google.com/file/d/1L87M4m3AC2ZqUzArdpVS1xUf32UY3XwM/view?usp=sharing" class="btn btn-1">Ver credencial</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3 py-3">
                                    <div class="card" style="width:100%;">
                                        <img src="/images/javascript.png" class="card-img-top" alt="javascript">
                                        <div class="card-body">
                                          <h5 class="card-title">JavaScript certification</h5>
                                          <a href="https://drive.google.com/file/d/17HCblPpkydMvxVhPnzTZLlwJmPg07ytV/view?usp=sharing" class="btn btn-1">Ver credencial</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3 py-3">
                                    <div class="card" style="width:100%;">
                                        <img src="/images/java.png" class="card-img-top" alt="java">
                                        <div class="card-body">
                                          <h5 class="card-title">Java Advanced certification</h5>
                                          <a href="https://drive.google.com/file/d/1r6yl3k7lmRbwt2ddtBJ6nAHVxBsfZN44/view?usp=sharing" class="btn btn-1">Ver credencial</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                                
                            <div class="row justify-content-center">

                                <div class="col-6 col-md-3">
                                    <div class="card" style="width:100%;">
                                        <img src="/images/software.png" class="card-img-top" alt="java">
                                        <div class="card-body">
                                          <h5 class="card-title">Software Engineering certification</h5>
                                          <a href="https://drive.google.com/file/d/1r6yl3k7lmRbwt2ddtBJ6nAHVxBsfZN44/view?usp=sharing" class="btn btn-1">Ver credencial</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card" style="width:100%;">
                                        <img src="/images/ingles.png" class="card-img-top" alt="ingles">
                                        <div class="card-body">
                                          <h5 class="card-title">Diploma de la Carrera de Inglés</h5>
                                          <a href="https://platzi.com/p/erick-alejandro/carrera/81-idioma-ingles/diploma/detalle/" class="btn btn-1">Ver credencial</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="card" style="width:100%;">
                                        <img src="/images/github.png" class="card-img-top" alt="git">
                                        <div class="card-body">
                                          <h5 class="card-title">Curso profesional de Git y Github</h5>
                                          <a href="https://platzi.com/p/erick-alejandro/curso/1170-git-github-2017-old/diploma/detalle/" class="btn btn-1">Ver credencial</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                                
                            
                    </div>

                    <!--contacto-->
                    <div class="container-fluid" id="form-contacto">
                        <h1 class="fw-bold pt-5">Contacto</h1>
                        <div class="row px-3">
                            <div class="col-sm-6 order-sm-1 mt-3">
                                <img src="/images/foto-contacto.jpg" class="img-fluid">
                            </div>

                            <div class="col-sm-6 order-sm-12">

                                <?php
                                    if($message_sent):
                                ?>

                                <h2 class="my-2 text-center">¡Gracias! Me comunicaré contigo lo mas pronto posible</h2>

                                <?php
                                else:
                                ?>
                                
                            <!--formulario-->
                                <form action="index.php#form-contacto" class="pt-3 pb-5 text-start" method="POST">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                        <label for="floatingInput">Nombre</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com" required>
                                        <label for="floatingInput">Correo electronico</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="322 555 5555" required>
                                        <label for="floatingInput">Teléfono</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="presupuesto" name="presupuesto" aria-label="Floating label select example">
                                        <option selected>$0 - $4,999</option>
                                        <option value="$5,000 - $19,999">$5,000 - $19,999 </option>
                                        <option value="$20,000 - $49,999">$20,000 - $49,999</option>
                                        <option value="$50,000 o mas">$50,000 o más</option>
                                        </select>
                                        <label for="floatingSelect">Presupuesto</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Describenos tu proyecto" id="descripcion" name="descripcion" style="height: 150px" required></textarea>
                                        <label for="floatingTextarea2">Describe tu proyecto</label>
                                    </div>

                                    <p>Al presionar "Enviar" estoy de acuerdo con el <a class="link-light" href="/aviso.html">Aviso de privacidad.</a></p>
                                    <button type="submit" class="btn btn-2" >Enviar</button>

                                </form>
                                <?php
                                endif;
                                 ?>
                            </div>
                            
                        </div>
                        
                    </div>


                    <!--footer-->
                    <footer class="page-footer">
                        
                        <div class="row justify-content-center">  
                            <h2 class="py-3">Mis redes</h2>
                            <div class="col-2 col-sm-1 pb-5">
                                <a id="social" href="https://www.facebook.com/erickalejandro117/"><span>Facebook</span><i id="icons" class="bi bi-facebook"></i></a>
                            </div>
                            <div class="col-2 col-sm-1 pb-5">
                                <a id="social" href="https://wa.me/523221084847?text=Hola%20me%20gustaría%20iniciar%20un%20de%20proyecto"><span>Whatsapp</span><i id="icons" class="bi bi-whatsapp"></i></a>
                            </div>
                            <div class="col-2 col-sm-1 pb-5">
                                <a id="social" href="https://www.linkedin.com/in/erick-perez117/"><span>LinkedIn</span><i id="icons" class="bi bi-linkedin"></i></a>
                            </div>
                            <div class="col-2 col-sm-1 pb-5">
                                <a id="social" href="https://github.com/tesren"><span>Github</span><i id="icons" class="bi bi-github"></i></a>
                            </div>
                        </div>
                        
                        <div class="container-fluid text-center">
                            <p class="pb-3">Copyrigth 2021 &copy;Erick Alejandro Pérez Macedo. Todos los derechos reservados.</p>
                        </div>
                    </footer>
            </div>

           

            <!--Boton de Whatsapp-->
            <a href="https://wa.me/523221084847?text=Hola%20me%20gustaría%20iniciar%20un%20de%20proyecto" id="whatsapp" target="_blank"> 
                <i class="bi bi-whatsapp"></i>
            </a>

        </div>
        

        <!--JQuery-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!--JS de Bootstrap-->
        <script src="bootstrap-5.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="anime-master/lib/anime.min.js" type="text/javascript"></script>
        <script src="/js/animation.js" type="text/javascript"></script>
        <!--font awesome-->
        <script src="https://kit.fontawesome.com/164e915f72.js" crossorigin="anonymous"></script>
        <!--particle js-->
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    </body>


</html>