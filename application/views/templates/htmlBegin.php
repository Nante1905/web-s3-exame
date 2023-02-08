<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() . '/assets/css/nav.css' ?>">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() . '/assets/css/app.css' ?>">
    <?php 
    for($i=0;$i<sizeof($style);$i++){ ?>
        <link rel="stylesheet" href="<?= base_url() . "assets/css/".$style[$i] .'.css' ?>">
    <?php
    }
    $title = isset($htmlTitle) ? $htmlTitle : 'Document';
    ?>
    <title><?= $title ?></title>
</head>
<body>
    