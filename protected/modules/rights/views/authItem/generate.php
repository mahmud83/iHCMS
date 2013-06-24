<?php
/*
  $this->breadcrumbs = array(
  'Rights' => Rights::getBaseUrl(),
  Rights::t('core', 'Generate items'),
  );
 * 
 */
?>

<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Rights' => Rights::getBaseUrl(),
            Rights::t('core', 'Generate items'),
        ),
    ));
    ?>

    <h1 id="main-heading">
        <?php echo Rights::t('core', 'Generate items'); ?><span><?php echo Rights::t('core', 'Please select which items you wish to generate.'); ?></span>
    </h1>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header"><span class="title"><?php echo Rights::t('core', 'Permissions'); ?></span></div>
                <div class="widget-content form">
                    <?php $form = $this->beginWidget('CActiveForm'); ?>



                    <table class="table table-striped table-bordered table-condensed items generate-item-table">

                        <tbody>

                            <tr class="application-heading-row">
                                <th colspan="3"><?php echo Rights::t('core', 'Application'); ?></th>
                            </tr>

                            <?php
                            $this->renderPartial('_generateItems', array(
                                'model' => $model,
                                'form' => $form,
                                'items' => $items,
                                'existingItems' => $existingItems,
                                'displayModuleHeadingRow' => true,
                                'basePathLength' => strlen(Yii::app()->basePath),
                            ));
                            ?>

                        </tbody>

                    </table>
                    
                    <?php
                    echo CHtml::link(Rights::t('core', 'Select all'), '#', array(
                        'onclick' => "jQuery('.generate-item-table').find(':checkbox').attr('checked', 'checked'); return false;",
                        'class' => 'selectAllLink'));
                    ?>
                    /
                    <?php
                    echo CHtml::link(Rights::t('core', 'Select none'), '#', array(
                        'onclick' => "jQuery('.generate-item-table').find(':checkbox').removeAttr('checked'); return false;",
                        'class' => 'selectNoneLink'));
                    ?>

                    <?php echo CHtml::submitButton(Rights::t('core', 'Generate')); ?>

                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
/*
  <div id="generator">

  <div class="page-header">
  <h1>
  <?php //echo CHtml::image(Yii::app()->request->baseUrl.'/images/icon/cash.png')  ?>
  <?php echo Rights::t('core', 'Generate items'); ?>
  </h1>
  </div>
  <p>
  <?php echo Rights::t('core', 'Please select which items you wish to generate.'); ?>
  </p>

  <div class="form">

  <?php $form = $this->beginWidget('CActiveForm'); ?>

  <div class="row">

  <table class="items generate-item-table" border="0" cellpadding="0"
  cellspacing="0">

  <tbody>

  <tr class="application-heading-row">
  <th colspan="3"><?php echo Rights::t('core', 'Application'); ?></th>
  </tr>

  <?php
  $this->renderPartial('_generateItems', array(
  'model' => $model,
  'form' => $form,
  'items' => $items,
  'existingItems' => $existingItems,
  'displayModuleHeadingRow' => true,
  'basePathLength' => strlen(Yii::app()->basePath),
  ));
  ?>

  </tbody>

  </table>

  </div>

  <div class="row">

  <?php
  echo CHtml::link(Rights::t('core', 'Select all'), '#', array(
  'onclick' => "jQuery('.generate-item-table').find(':checkbox').attr('checked', 'checked'); return false;",
  'class' => 'selectAllLink'));
  ?>
  /
  <?php
  echo CHtml::link(Rights::t('core', 'Select none'), '#', array(
  'onclick' => "jQuery('.generate-item-table').find(':checkbox').removeAttr('checked'); return false;",
  'class' => 'selectNoneLink'));
  ?>

  </div>

  <div class="row">

  <?php echo CHtml::submitButton(Rights::t('core', 'Generate')); ?>

  </div>

  <?php $this->endWidget(); ?>

  </div>

  </div>
 * 
 */
?>
