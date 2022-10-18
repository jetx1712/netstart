<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="theme-color" content="#d200e5">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <?php  $title =  $_SERVER["REQUEST_URI"];?>
  <?php $part = explode('/',$title)?>
  <title>
    NetStar<?php echo (!empty($part[2]))? ' - ' . $part[2] : ''; ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=0, shrink-to-fit=no'
    name='viewport'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <?php $url = 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>
  <meta property="title" content='NetStar -
  <?php  echo (isset($_SESSION['post']))? $_SESSION['post']->title :  $_SERVER["REQUEST_URI"] ;?>'>
  <meta name="description"
    content="<?php  echo (isset($_SESSION['post']))? $_SESSION['post']->sub_text: 'Todo nosso trabalho é feito pensando em oferecer o melhor para você: usamos tecnologia de ponta, para que tenha segurança em escolher nossos produtos; com atendimento de qualidade, para que se sinta confortável sempre. Nossa equipe trabalha dia a dia buscando as maiores novidades no mercado de provedores de internet. Queremos oferecer a você uma...' ?>">
  <meta name="keywords" content="<?php  echo (isset($_SESSION['post']))? $_SESSION['post']->tags: '' ?>">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets\build\img\favicon.ico" />
  <!-- Facebook -->
  <meta property="og:description" content='<?php  echo (isset($_SESSION['post']))? $_SESSION['post']->sub_text: 'Internet fibra de alta velocidade' ?>'>
  <meta property="og:url" content='<?php echo $url?>'>
  <meta property="og:image" content="<?php echo base_url(); ?>assets\build\img\link-icon.jpeg">
  <meta property="twitter:image" content="<?php echo base_url(); ?>assets\build\img\link-icon.jpeg">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:type" content="article">
  <meta property="og:title" content="NetStar - <?php  echo (isset($_SESSION['post']))? $_SESSION['post']->title : (isset($part[2])? $part[2] : $part[1]) ;?>">
  <meta property="og:description"
    content="<?php  echo (isset($_SESSION['post']))? $_SESSION['post']->sub_text: 'Entre em contato com a gente! No formulário ao lado você pode enviar comentários, sugestões, ou até mesmo aquela mensagem especial para o Nec. Vamos adorar!' ?>">
  <meta property="og:site_name" content="NetStar">

  <!-- -------------    Fonts and icons -----------    -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets\build\css\plugins\font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets\build\css\plugins\bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets\build\css\plugins\slick.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets\build\css\plugins\slick-theme.css">
  <link href="<?php echo base_url()?>assets\dist\css\all.min.css" rel="stylesheet">
  <!-- <link href="<?php echo base_url()?>assets/build/css/timeline.css" rel="stylesheet"> -->
  </head>

<body style="background-color: rgb(255, 255, 255);">
  <div class="bodyContainer" style="visibility: visible; display: block; opacity: 1;">
