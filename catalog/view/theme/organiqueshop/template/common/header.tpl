<!DOCTYPE html>
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php } ?>
<?php if ($icon) { ?>
<link href="<?php echo $icon; ?>" rel="icon" />
<?php } ?>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/organiqueshop/css/main.min.css" />
<?php foreach ($styles as $style) { ?>
<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
<?php foreach ($scripts as $script) { ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php } ?>
<!--[if IE 7]> 
<link rel="stylesheet" type="text/css" href="catalog/view/theme/organiqueshop/css/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/organiqueshop/css/ie6.css" />
<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->
<?php if ($stores) { ?>
<script type="text/javascript"><!--
$(document).ready(function() {
<?php foreach ($stores as $store) { ?>
$('body').prepend('<iframe src="<?php echo $store; ?>" style="display: none;"></iframe>');
<?php } ?>
});
//--></script>
<?php } ?>
<?php echo $google_analytics; ?>
</head>
<body>
<div id="wrapper">
<div id="container">
<div id="header">
  <div class="top-bar">
  <?php echo $language; ?>
    <div id="welcome">
    <?php if (!$logged) { ?>
    <?php echo $text_welcome; ?> 
    <?php } else { ?>
    <?php echo $text_logged; ?>
    <?php } ?>
    </div>
  </div>
  <?php if ($logo) { ?>
  <div id="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a></div>
  <?php } ?>
  <div class="brand-text">
    <h3>Organique</h3>
    <p>
    Product with environmental <br />
    friendly shop  
    </p>
  </div>
  <?php echo $cart; ?>
  <div id="search" class="input-group">
    <input type="text" class="form-control input-sm" name="search" placeholder="<?php echo $text_search; ?>" value="<?php echo $search; ?>" />
    <span class="button-search input-group-addon"><i class="fa fa-search fa-fw"></i></span>
  </div>
    

<div id="menu">
  <ul>
    <li><a href="<?php echo $home; ?>"><?php echo $text_home; ?></a></li>
    <?php if ($categories) { ?>
    <li><a><?php echo $text_product; ?>&nbsp;&nbsp;<span class="fa fa-caret-down"></span></a>
      <div>
        <ul>
             <?php foreach ($categories as $category) { ?>
              <li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a></li>
              <?php } ?> 
        </ul>
      </div>
    </li>
    <?php } ?>
    <?php if ($informations) { ?>
    <?php foreach ($informations as $information) { ?>
        <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
    <?php } ?>
    <?php } ?>
    <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
  </ul>
</div>


</div>
<?php if ($error) { ?>
    
    <div class="warning"><span class="fa fa-exclamation-circle fa-lg margin-right10"></span><?php echo $error ?><span class="fa fa-remove fa-lg close"></span></div>
    
<?php } ?>
<div id="notification"></div>
