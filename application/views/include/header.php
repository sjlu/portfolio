<?php $meta = get_meta(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="description" content="<?= $meta['meta_desc'] ?>" />
   <meta name="keywords" content="<?= $meta['meta_keywords'] ?>" />

   <title><? if(!empty($title)) echo $title.' - '; ?><?= $meta['title'] ?></title>

   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
   <script type="text/javascript" src="<?= base_url('resources/js/jquery.bxslider.min.js') ?>"></script>
   <script type="text/javascript" src="<?= base_url('resources/js/jquery.fancybox-1.3.4.pack.js') ?>"></script>

   <link href="<?= base_url('resources/css/style.css') ?>" rel="stylesheet" type="text/css" charset="utf-8" />
   <link href="<?= base_url('resources/css/jquery.fancybox-1.3.4.css') ?>" rel="stylesheet" type="text/css" charset="utf-8" />

</head>
<body>
