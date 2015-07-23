<div class="left">
  <h2><?php echo $text_new_customer; ?></h2><br />
  <!-- p><?php echo $text_checkout; ?></p -->
  <label for="register">
    <?php if ($account == 'register') { ?>
    <input type="radio" name="account" value="register" id="register" checked="checked" />
    <?php } else { ?>
    <input type="radio" name="account" value="register" id="register" />
    <?php } ?>
    <b><?php echo $text_register; ?></b></label>
  <br />
  <?php if ($guest_checkout) { ?>
  <label for="guest">
    <?php if ($account == 'guest') { ?>
    <input type="radio" name="account" value="guest" id="guest" checked="checked" />
    <?php } else { ?>
    <input type="radio" name="account" value="guest" id="guest" />
    <?php } ?>
    <b><?php echo $text_guest; ?></b></label>
  <br />
  <?php } ?>
  <br />
  <p><?php echo $text_register_account; ?></p>
  <input type="button" value="<?php echo $button_continue; ?>" id="button-account" class="btn btn-default btn-lg btn-important" />
  <br />
  <br />
</div>
<div id="login" class="right">
  <h2><?php echo $text_returning_customer; ?></h2>
  <p><?php echo $text_i_am_returning_customer; ?></p>
          <div class="form-group">
            <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $entry_email_placeholder; ?>" />
          </div>
          <div class="form-group">
            <input class="form-control"  type="password" name="password" value="<?php echo $password; ?>" placeholder="<?php echo $entry_password_placeholder; ?>" />
          </div>
  <input type="button" value="<?php echo $button_login; ?>" id="button-login" class="margin-bottom20 btn btn-default btn-lg btn-important" /><br />
  <a href="<?php echo $forgotten; ?>"><?php echo $text_forgotten; ?></a>
  <br /><br />
</div>