<?php

/**
 * @filesource /protected/components/widget/userlookup/UserLookupWidget.php
 */
class UserLookupAction extends CAction {
	
	/**
     * Runs the widgets.
     */
    public function run() {
    	Yii::import('application.modules.pim.models.Karyawan');
        
        $term = $_GET['term'];
        $users = Karyawan::model()->findAll(array(
        			'condition' => 'nama_depan LIKE :namaDepan OR nama_tengah LIKE :namaTengah OR nama_belakang LIKE :namaBelakang',
                    'params' => array(
                        ':namaDepan' => "%$term%",
                        ':namaTengah' => "%$term%",
                        ':namaBelakang' => "%$term%",
                    ),
                ));
        $return = array();
        foreach ($users as $user) {
	        $return[] = array(
            	'label' => $user->nama_depan.' '.$user->nama_tengah.' '.$user->nama_belakang ,
                'value' => '',
                'image' => $user->profilePage,
                'city' => $user->propinsi,
            );
        }
        echo CJSON::encode($return);
    }

}

/**
 * Widget for lookup action. 
 */
class UserLookupWidget extends CWidget {

        const LOOKUP_ACTION = 'lookup';

        public $route = '/ajax/userlookup.';

        /**
         * Returns actions list for action provider
         * @return array 
         */
        public static function actions() {
        	return array(
        		self::LOOKUP_ACTION => 'UserLookupAction',
        	);
        }

        /**
         * Get URL for users lookup.
         */
        public function getLookupUrl() {
        	return $this->controller->createUrl($this->route . self::LOOKUP_ACTION);
        }

        /**
         * Runs the widgets.
         */
        public function run() {
        	$this->widget(
        		'zii.widgets.jui.CJuiAutoComplete', 
        		array(
        			'id' => $this->id,
                    'name' => 'user',
                    'sourceUrl' => $this->getLookupUrl(),
                    'options' => array(
                        'minLength' => '2',
                        'select' => <<<JS
js:function(event, ui){
	window.location.href = ui.item.url;
}
JS
                    ,
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:20px;'
                    ),
                ));

                Yii::app()->clientScript->registerScript($this->id, <<<JS
jQuery('#{$this->id}').data('autocomplete')._renderItem = function( ul, item ) {
	return $('<li></li>')
		.data('item.autocomplete', item)
		.append('<a href=\'http://example.com\' class=\'userautocompletelink\'><img src=\''+item.image+'\' width=\'50px\'/><h1>'+item.label+'</h1><h2>'+item.city+'</h2></a>')
		.appendTo(ul);
};
JS
                        , CClientScript::POS_READY);

                Yii::app()->clientScript->registerCss($this->id, <<<CSS
        .userautocompletelink {height:52px;}
	.userautocompletelink img {float:left;margin-right:5px;}
	.userautocompletelink h1 {font-size:15px;padding:0px;margin:0px;font-width:bold;}
	.userautocompletelink h2 {font-size:12px;padding:0px;margin:0px;}
CSS
                );
        }

}
