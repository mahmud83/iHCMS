// REMEMBER, we have a hidden
// input HTML element with model's attribute_id
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'pperson-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>
<?php echo $form->hiddenField($model, 'attribute_id'); ?>
<?php
// ext is a shortcut for application.extensions
$this->widget('application.components.Sniffer', array(
    'name' => 'test_autocomplete',
    'source' => $this->createUrl('/pim/pPerson/autocomplete'),
// attribute_value is a custom property that returns the
// name of our related object -ie return $model->related_model->name
    'value' => $model->isNewRecord ? '': $model->attribute_value,
    'options' => array(
        'minChars'=>3,
        'autoFill'=>false,
        'focus'=> 'js:function( event, ui ) {
            $( "#test_autocomplete" ).val( ui.item.name );
            return false;
        }',
        'select'=>'js:function( event, ui ) {
            $("#'.CHtml::activeId($model,'attribute_id').'")
            .val(ui.item.id);
            return false;
        }'
     ),
    'htmlOptions'=>array('class'=>'input-1', 'autocomplete'=>'off'),
    'methodChain'=>'.data( "autocomplete" )._renderItem = function( ul, item ) {
        return $( "<li></li>" )
            .data( "item.autocomplete", item )
            .append( "<a>" + item.name +  "</a>" )
            .appendTo( ul );
    };'
));
?>

<?php $this->endWidget(); ?>