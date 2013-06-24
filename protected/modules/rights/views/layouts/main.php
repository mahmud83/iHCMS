<?php $this->beginContent(Rights::module()->appLayout); ?>
<?php
/*
  <div class="row-fluid" id="rights">
  <div class="span10">
  <?php //echo $content; ?>
  <?php $this->renderPartial('/_flash'); ?>
  <?php echo $content; ?>
  </div>

  <div class="span2">
  <?php if( $this->id!=='install' ): ?>
  <div id="menu">
  <?php $this->renderPartial('/_menu'); ?>
  </div>
  <?php endif; ?>
  </div>
  </div>
 * 
 */
?>
<div id="rights">
    <?php //echo $content; ?>
    <?php $this->renderPartial('/_flash'); ?>
    <?php echo $content; ?>
</div>

<?php $this->endContent(); ?>