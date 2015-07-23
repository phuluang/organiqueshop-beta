<?php echo $header; ?><?php echo $column_left; ?><?php echo $column_right; ?>
<div id="content" class="contact-us-page"><?php echo $content_top; ?>
  <div class="breadcrumb hidden">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <div class="box-heading">
  <h1><?php echo $heading_title; ?></h1>
  </div>
  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-xs-6">
            <h4><?php echo $text_location; ?></h4>
            <div class="margin-top20 location-info">
                    <div>
                        <img src="image/data/store/head-store.jpg">
                    </div>
                    <div class="left margin-top20">
                        <strong><?php echo $store; ?></strong><br />
                        <?php /*echo $address; */?>
                        <?php echo $head_address; ?>
                    </div>
                    <div class="margin-top20">
                        <div class="content-item">
                            <span class="icon">
                                <i class="fa fa-map-marker"></i>
                            </span>
                            <a href="https://www.google.com/maps/d/embed?mid=zNhte4aI5-D8.kCqzOCb_F0AQ" class="iframe cboxElement"><strong><?php echo $text_view_map; ?></strong></a>
                        </div>
                        <div class="content-item">
                            <span class="icon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <a href="mailto:info@organiqueshop.net"><?php echo $config_email; ?></a>
                        </div>
                        <?php if ($telephone) { ?>
                        <div class="content-item">
                            <span class="icon">
                                <i class="fa fa-phone"></i>
                            </span>
                            <?php echo $telephone; ?>
                        </div>
                        <?php } ?>
                        <?php if ($fax) { ?>
                        <div class="content-item">
                            <span class="icon">
                                <i class="fa fa-fax"></i>
                            </span>
                            <?php echo $fax; ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="branch-content">
                        <h4 id="branch-button"><a><?php echo $text_branch; ?> <span class="fa fa-angle-double-down"></span></a></h4>
                        <div class="branch-wrap">
                            <div class="branch-item">
                                <?php echo $branch_address_1; ?>
                            </div>
                            <div class="branch-item">
                                <?php echo $branch_address_2; ?>
                            </div>
                            <div class="branch-item">
                                <?php echo $branch_address_3; ?>
                            </div>
                            <div class="branch-item">
                                <?php echo $branch_address_4; ?>
                            </div>
                            <div class="branch-item">
                                <?php echo $branch_address_5; ?>
                            </div>
                            <div class="branch-item">
                                <?php echo $branch_address_6; ?>
                            </div>
                            <div class="branch-item">
                                <?php echo $branch_address_7; ?>
                            </div>
                            <div class="branch-item">
                                <?php echo $branch_address_8; ?>
                            </div>
                            <div class="branch-item">
                                <?php echo $branch_address_9; ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-xs-6">
            <h4><?php echo $text_contact; ?></h4>
            <div class="margin-top20">
            <div class="form-group">
            <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $entry_name; ?>" />
            <?php if ($error_name) { ?>
            <span class="error"><?php echo $error_name; ?></span>
            <?php } ?>
            </div>
            <div class="form-group">
            <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $entry_email; ?>" />
            <?php if ($error_email) { ?>
            <span class="error"><?php echo $error_email; ?></span>
            <?php } ?>
            </div>
            <div class="form-group">
            <textarea class="form-control" name="enquiry" cols="40" rows="10" placeholder="<?php echo $entry_enquiry; ?>"><?php echo $enquiry; ?></textarea>
            <?php if ($error_enquiry) { ?>
            <span class="error"><?php echo $error_enquiry; ?></span>
            <?php } ?>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12"><b><?php echo $entry_captcha; ?></b></div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-4">
                        <img src="index.php?route=information/contact/captcha" alt="" />
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="captcha" value="<?php echo $captcha; ?>" />
                        </div>
                    </div>
                </div>
                 <?php if ($error_captcha) { ?>
                    <span class="error"><?php echo $error_captcha; ?></span>
                    <?php } ?>
            </div>
            </div>
            <div class="form-group">
              <input type="submit" value="<?php echo $button_send_message; ?>" class="btn btn-default btn-lg btn-important" />
            </div>
        </div>
    </div>
  </form>
  <?php echo $content_bottom; ?></div>
<?php echo $footer; ?>

<script type="text/javascript"><!--
$(document).ready(function() {
    $('.colorbox').colorbox({
        overlayClose: true,
        opacity: 0.5,
        rel: "colorbox"
    });
    $(".iframe").colorbox({iframe:true, width:"80%", height:"80%", opacity: 0.5});
});
//--></script> 