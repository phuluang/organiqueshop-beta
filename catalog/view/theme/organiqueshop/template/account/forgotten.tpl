<?php echo $header; ?>
<?php if ($error_warning) { ?>
<div class="warning"><span class="fa fa-exclamation-circle fa-lg margin-right10"></span><?php echo $error_warning; ?></div>
<?php } ?>
<?php echo $column_left; ?><?php echo $column_right; ?>
<div id="content"><?php echo $content_top; ?>
  <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <h1><?php echo $heading_title; ?></h1>
  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    <p><?php echo $text_email; ?></p>
    <h2 class="hidden"><?php echo $text_your_email; ?></h2>
    <div class="content">
      <table class="form">
        <tr>
          <td><?php echo $entry_email; ?></td>
          <td>
            <div class="form-group">
              <input class="form-control" type="text" name="email" value="" />
            </div>
          </td>
        </tr>
      </table>
    </div>
    <div class="buttons">
      <div class="left"><a href="<?php echo $back; ?>" class="btn btn-lg btn-secondary btn-important"><?php echo $button_back; ?></a></div>
      <div class="right">
        <input type="submit" value="<?php echo $button_continue; ?>" class="btn btn-default btn-lg btn-important" />
      </div>
    </div>
  </form>
  <?php echo $content_bottom; ?></div>
<?php echo $footer; ?>