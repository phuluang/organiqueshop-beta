<div class="box category-nav">
  <div class="box-heading">
    <h4><?php echo $heading_title; ?></h4>
  </div>
  <div class="box-content">
    <ul class="box-category">
      <?php foreach ($categories as $category) { ?>
      <?php if ($category['category_id'] == $category_id) { ?>
      <li class="active">
      <?php } else { ?>
      <li>
      <?php } ?>
        <?php if ($category['category_id'] == $category_id) { ?>
        <a href="<?php echo $category['href']; ?>" class="parent-cat active"><span class="fa fa-chevron-right"></span><?php echo $category['name']; ?></a>
        <?php } else { ?>
        <a href="<?php echo $category['href']; ?>" class="parent-cat"><span class="fa fa-chevron-right"></span><?php echo $category['name']; ?></a>
        <?php } ?>
        <?php if ($category['children']) { ?>
        <ul class="child-wrap">
          <?php foreach ($category['children'] as $child) { ?>
          <li>
            <?php if ($child['category_id'] == $child_id) { ?>
            <a href="<?php echo $child['href']; ?>" class="child-cat active"><span class="fa fa-chevron-right"></span><?php echo $child['name']; ?></a>
            <?php } else { ?>
            <a href="<?php echo $child['href']; ?>" class="child-cat"><span class="fa fa-chevron-right"></span><?php echo $child['name']; ?></a>
            <?php } ?>
          </li>
          <?php } ?>
        </ul>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>

<script type="text/javascript"><!--
$(document).ready(function() {
  if($('.child-cat').hasClass('active')){
    $('.parent-cat').removeClass('active');
  }
});
//--></script> 