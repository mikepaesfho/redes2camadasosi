<?php
    if (!isset($_GET ['camada'])) {
        header('Location: index.php');
        die();
    }

    include 'CLASSES/load.php';

    $camada = $_GET ["camada"];
    $camada = strtoupper($camada);

    switch ($camada) {
        case 'FISICA':
            $class = new Fisica();
            break;
        case 'ENLACE':
            $class = new Enlace();
            break;
        case 'REDE':
            $class = new Rede();
            break;
        case 'TRANSPORTE':
            $class = new Transporte();
            break;
        case 'SESSAO':
            $class = new Sessao();
            break;
        case 'APRESENTACAO':
            $class = new Apresentacao();
            break;
        case 'APLICACAO':
            $class = new Aplicacao();
            break;
        default:
            die();
    }
    echo $class->encapsular();

