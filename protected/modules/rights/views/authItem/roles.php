<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Roles'),
);
?>

<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Rights' => Rights::getBaseUrl(),
            Rights::t('core', 'Roles'),
        ),
    ));
    ?>

    <h1 id="main-heading">
        Roles
    </h1>
</div>

<div class="row-fluid">
    <div class="span12" id="request">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-content">
                    <p><?php echo Rights::t('core', 'A role is group of permissions to perform a variety of tasks and operations, for example the authenticated user.'); ?><br /><?php echo Rights::t('core', 'Roles exist at the top of the authorization hierarchy and can therefore inherit from other roles, tasks and/or operations.'); ?></p>

                    <p><?php echo CHtml::link(Rights::t('core', 'Create a new role'), array('authItem/create', 'type' => CAuthItem::TYPE_ROLE), array('class' => 'add-role-link',)); ?></p>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header"><span class="title"><?php echo Rights::t('core', 'Roles'); ?></span></div>
                <div class="widget-content">
                    <?php
                    $this->widget('bootstrap.widgets.TbGridView', array(
                        'type' => 'striped bordered',
                        'dataProvider' => $dataProvider,
                        'template' => "{items}",
                        'emptyText' => Rights::t('core', 'No roles found.'),
                        'htmlOptions' => array('class' => 'grid-view role-table'),
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
                                'value' => '$data->getDeleteRoleLink()',
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
<p><?php echo Rights::t('core', 'A role is group of permissions to perform a variety of tasks and operations, for example the authenticated user.'); ?><br /><?php echo Rights::t('core', 'Roles exist at the top of the authorization hierarchy and can therefore inherit from other roles, tasks and/or operations.'); ?></p>

<p><?php echo CHtml::link(Rights::t('core', 'Create a new role'), array('authItem/create', 'type' => CAuthItem::TYPE_ROLE), array('class' => 'add-role-link',)); ?></p>

<div class="row-fluid no-clear">
    <div class="span12 widget">
        <div class="widget-title">
            <i class="icon-bar-chart titleicon"></i>
            <p><?php echo Rights::t('core', 'Roles'); ?></p>
        </div>
        <div class="widget-content">
            <?php
            $this->widget('bootstrap.widgets.TbGridView', array(
                'type' => 'striped bordered',
                'dataProvider' => $dataProvider,
                'template' => "{items}",
                'emptyText' => Rights::t('core', 'No roles found.'),
                'htmlOptions' => array('class' => 'grid-view role-table'),
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
                        'value' => '$data->getDeleteRoleLink()',
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