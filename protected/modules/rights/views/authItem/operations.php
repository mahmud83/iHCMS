<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Operations'),
);
?>

<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Rights' => Rights::getBaseUrl(),
            Rights::t('core', 'Operations'),
        ),
    ));
    ?>

    <h1 id="main-heading">
        Operations
    </h1>
</div>

<div class="row-fluid">
    <div class="span12" id="request">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-content">
                    <p><?php echo Rights::t('core', 'An operation is a permission to perform a single operation, for example accessing a certain controller action.'); ?><br /><?php echo Rights::t('core', 'Operations exist below tasks in the authorization hierarchy and can therefore only inherit from other operations.'); ?></p>

                    <p><?php echo CHtml::link(Rights::t('core', 'Create a new operation'), array('authItem/create', 'type' => CAuthItem::TYPE_OPERATION), array('class' => 'add-operation-link',)); ?></p>

                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header"><span class="title"><?php echo Rights::t('core', 'Operations'); ?></span></div>
                <div class="widget-content">
                    <?php
                    $this->widget('bootstrap.widgets.TbGridView', array(
                        'type' => 'striped bordered',
                        'dataProvider' => $dataProvider,
                        'template' => "{items}",
                        'emptyText' => Rights::t('core', 'No operations found.'),
                        'htmlOptions' => array('class' => 'grid-view operation-table sortable-table'),
                        'columns' => array(
                            array(
                                'name' => 'name',
                                'header' => Rights::t('core', 'Name'),
                                'type' => 'raw',
                                'htmlOptions' => array('class' => 'name-column'),
                                'value' => '$data->getGridNameLink()',
                            ),
                            array(
                                'name' => 'description',
                                'header' => Rights::t('core', 'Description'),
                                'type' => 'raw',
                                'htmlOptions' => array('class' => 'description-column'),
                            ),
                            array(
                                'name' => 'bizRule',
                                'header' => Rights::t('core', 'Business rule'),
                                'type' => 'raw',
                                'htmlOptions' => array('class' => 'bizrule-column'),
                                'visible' => Rights::module()->enableBizRule === true,
                            ),
                            array(
                                'name' => 'data',
                                'header' => Rights::t('core', 'Data'),
                                'type' => 'raw',
                                'htmlOptions' => array('class' => 'data-column'),
                                'visible' => Rights::module()->enableBizRuleData === true,
                            ),
                            array(
                                'header' => '&nbsp;',
                                'type' => 'raw',
                                'htmlOptions' => array('class' => 'actions-column'),
                                'value' => '$data->getDeleteOperationLink()',
                            ),
                        ),
                    ));
                    ?>

                    <p class="info"><?php echo Rights::t('core', 'Values within square brackets tell how many children each item has.'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
/*
<p><?php echo Rights::t('core', 'An operation is a permission to perform a single operation, for example accessing a certain controller action.'); ?><br /><?php echo Rights::t('core', 'Operations exist below tasks in the authorization hierarchy and can therefore only inherit from other operations.'); ?></p>

<p><?php echo CHtml::link(Rights::t('core', 'Create a new operation'), array('authItem/create', 'type' => CAuthItem::TYPE_OPERATION), array('class' => 'add-operation-link',)); ?></p>

<div class="row-fluid no-clear">
    <div class="span12 widget">
        <div class="widget-title">
            <i class="icon-bar-chart titleicon"></i>
            <p><?php echo Rights::t('core', 'Operations'); ?></p>
        </div>
        <div class="widget-content">
            <?php
            $this->widget('bootstrap.widgets.TbGridView', array(
                'type' => 'striped bordered',
                'dataProvider' => $dataProvider,
                'template' => "{items}",
                'emptyText' => Rights::t('core', 'No operations found.'),
                'htmlOptions' => array('class' => 'grid-view operation-table sortable-table'),
                'columns' => array(
                    array(
                        'name' => 'name',
                        'header' => Rights::t('core', 'Name'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'name-column'),
                        'value' => '$data->getGridNameLink()',
                    ),
                    array(
                        'name' => 'description',
                        'header' => Rights::t('core', 'Description'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'description-column'),
                    ),
                    array(
                        'name' => 'bizRule',
                        'header' => Rights::t('core', 'Business rule'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'bizrule-column'),
                        'visible' => Rights::module()->enableBizRule === true,
                    ),
                    array(
                        'name' => 'data',
                        'header' => Rights::t('core', 'Data'),
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'data-column'),
                        'visible' => Rights::module()->enableBizRuleData === true,
                    ),
                    array(
                        'header' => '&nbsp;',
                        'type' => 'raw',
                        'htmlOptions' => array('class' => 'actions-column'),
                        'value' => '$data->getDeleteOperationLink()',
                    ),
                ),
            ));
            ?>
        </div>
    </div>
</div>
<p class="info"><?php echo Rights::t('core', 'Values within square brackets tell how many children each item has.'); ?></p>
 * 
 */
?>