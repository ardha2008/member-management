<?php

/**
 * @author Ardha-PC
 * @copyright 2014
 */



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $title ?> - Member Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content=""/>
  <meta name="author" content="Ardha Herdianto"/>

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append �#!watch� to the browser URL, then refresh the page. -->
	
	<link href="<?= $this->uri->getBaseUri(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= $this->uri->getBaseUri(); ?>assets/css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="<?= $this->uri->getBaseUri(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= $this->uri->getBaseUri(); ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= $this->uri->getBaseUri(); ?>assets/js/scripts.js"></script>
</head>

<body>