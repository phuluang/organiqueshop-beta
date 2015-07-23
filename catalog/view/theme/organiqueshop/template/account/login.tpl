<?php echo $header; ?>
<?php if ($success) { ?>
<div class="success"><span class="fa fa-check-circle fa-lg margin-right10"></span><?php echo $success; ?></div>
<?php } ?>
<?php if ($error_warning) { ?>
<div class="warning"><span class="fa fa-exclamation-circle fa-lg margin-right10"></span><?php echo $error_warning; ?></div>
<?php } ?>
<?php echo $column_left; ?><?php echo $column_right; ?>
<div id="content"><?php echo $content_top; ?>
  <div class="breadcrumb hide">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <div class="box-heading">
    <h1><?php echo $heading_title; ?></h1>
  </div>
  <div class="login-content">
    <div class="left">
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="content">
          <div class="form-group">
            <h4><?php echo $text_returning_customer; ?></h4>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $entry_email; ?>" />
          </div>
          <div class="form-group">
            <input class="form-control"  type="password" name="password" value="<?php echo $password; ?>" placeholder="<?php echo $entry_password; ?>" />
          </div>
          <div class="form-group">
            <input type="submit" value="<?php echo $button_login; ?>" class="btn btn-default btn-lg btn-important" />
          </div>
          <?php if ($redirect) { ?>
          <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
          <?php } ?>
          <a href="<?php echo $forgotten; ?>"><?php echo $text_forgotten; ?></a>
        </div>
      </form>
    </div>
    <div class="right">
      <div class="content">
        <div class="form-group">
          <h4><?php echo $text_new_customer; ?></h4>
        </div>
        <p><?php echo $text_register_account; ?></p>
        <a href="<?php echo $register; ?>" class="btn btn-primary btn-lg btn-important"><?php echo $text_register; ?></a></div>
    </div>
  </div>
  <?php echo $content_bottom; ?></div>
<script type="text/javascript"><!--
$('#login input').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#login').submit();
	}
});
//--></script> 
<?php echo $footer; ?>