<?php
/*
  $this->breadcrumbs = array(
  'Rights' => Rights::getBaseUrl(),
  Rights::t('core', 'Permissions'),
  );
 * 
 */
?>

<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Rights' => Rights::getBaseUrl(),
            Rights::t('core', 'Permissions'),
        ),
    ));
    ?>

    <h1 id="main-heading">
        Permission<span><?php echo Rights::t('core', 'Here you can view and manage the permissions assigned to each role.'); ?></span>
    </h1>
</div>

<div class="row-fluid">
    <div class="span12" id="request">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-content">
                    <?php
                    echo Rights::t('core', 'Authorization items can be managed under {roleLink}, {taskLink} and {operationLink}.', array(
                        '{roleLink}' => CHtml::link(Rights::t('core', 'Roles'), array('authItem/roles')),
                        '{taskLink}' => CHtml::link(Rights::t('core', 'Tasks'), array('authItem/tasks')),
                        '{operationLink}' => CHtml::link(Rights::t('core', 'Operations'), array('authItem/operations')),
                    ));
                    ?>
                    <p><?php echo CHtml::link(Rights::t('core', 'Generate items for controller actions'), array('authItem/generate'), array('class' => 'generator-link',)); ?></p>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header"><span class="title"><?php echo Rights::t('core', 'Permissions'); ?></span></div>
                <div class="widget-content">
                    <?php
                    $this->widget('bootstrap.widgets.TbGridView', array(
                        'type' => 'striped bordered',
                        'dataProvider' => $dataProvider,
                        'template' => "{items}",
                        'emptyText' => Rights::t('core', 'No authorization items found.'),
                        'htmlOptions' => array('class' => 'grid-view permission-table'),
                        'columns' => $columns,
                    ));
                    ?>
                    <div class="alert alert-info">
                        <p class="info">*) <?php echo Rights::t('core', 'Hover to see from where the permission is inherited.'); ?></p>
                    </div>
                    <script type="text/javascript">

                        /**
                         * Attach the tooltip to the inherited items.
                         */
                        jQuery('.inherited-item').rightsTooltip({
                            title: '<?php echo Rights::t('core', 'Source'); ?>: '
                        });

                        /**
                         * Hover functionality for rights' tables.
                         */
                        $('#rights tbody tr').hover(function() {
                            $(this).addClass('hover'); // On mouse over
                        }, function() {
                            $(this).removeClass('hover'); // On mouse out
                        });

                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
/*
<div id="permissions">
    <p>
        <?php echo Rights::t('core', 'Here you can view and manage the permissions assigned to each role.'); ?><br />
        <?php
        echo Rights::t('core', 'Authorization items can be managed under {roleLink}, {taskLink} and {operationLink}.', array(
            '{roleLink}' => CHtml::link(Rights::t('core', 'Roles'), array('authItem/roles')),
            '{taskLink}' => CHtml::link(Rights::t('core', 'Tasks'), array('authItem/tasks')),
            '{operationLink}' => CHtml::link(Rights::t('core', 'Operations'), array('authItem/operations')),
        ));
        ?>
    </p>
    <p><?php echo CHtml::link(Rights::t('core', 'Generate items for controller actions'), array('authItem/generate'), array('class' => 'generator-link',)); ?></p>

    <div class="row-fluid no-clear">
        <div class="span12 widget">
            <div class="widget-title">
                <i class="icon-bar-chart titleicon"></i>
                <p><?php echo Rights::t('core', 'Permissions'); ?></p>
            </div>
            <div class="widget-content">
                <?php
                $this->widget('bootstrap.widgets.TbGridView', array(
                    'type' => 'striped bordered',
                    'dataProvider' => $dataProvider,
                    'template' => "{items}",
                    'emptyText' => Rights::t('core', 'No authorization items found.'),
                    'htmlOptions' => array('class' => 'grid-view permission-table'),
                    'columns' => $columns,
                ));
                ?>
            </div>
        </div>
    </div>
    <p class="info">*) <?php echo Rights::t('core', 'Hover to see from where the permission is inherited.'); ?></p>


    <script type="text/javascript">

        /**
         * Attach the tooltip to the inherited items.
         *
        jQuery('.inherited-item').rightsTooltip({
            title: '<?php echo Rights::t('core', 'Source'); ?>: '
        });

        /**
         * Hover functionality for rights' tables.
         *
        $('#rights tbody tr').hover(function() {
            $(this).addClass('hover'); // On mouse over
        }, function() {
            $(this).removeClass('hover'); // On mouse out
        });

    </script>
</div>
 * 
 */
?>