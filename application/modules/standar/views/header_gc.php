<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo TITLE; ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('/assets/login_v6/images/icons/jasindo_icon.ico'); ?>"/>
    <!-- Bootstrap -->
    <link href="<?= base_url('/assets/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('/assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= base_url('/assets/build/css/custom.min.css'); ?>" rel="stylesheet">
    <script src="<?= base_url('/assets/accounting/accounting.js'); ?>"></script>
   <?php 
if (is_array($css_files)) {  
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; } ?>
<?php 
if (is_array($js_files)) { 
foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; } ?>  
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"> <img src="<?php echo site_url('assets/images/logo-jasindo3.png'); ?>" /><span></span></a>
            </div>
            <div class="clearfix"></div>