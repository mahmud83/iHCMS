<?php

/**
 * @filesource /protected/components/widget/SideUser.php
 */
 
class SideUser extends CWidget {
	
	public $karyawanId;
	
	public $columns;
	
	
	public function renderColumns ($model) {
		$columns = $this->columns;
		
		if (is_array($columns) == true) :
			$render = "<ul>";
			foreach ($columns as $column):
				if ($column == 'nama'):
					$render .= "<li>".$model->nama_depan." ".$model->nama_tengah." ".$model->nama_belakang."</li>";
				else :
					if ($model->$column != "")
						$render .= "<li>".$model->$column."</li>";
				endif; 
			endforeach;
			$render .= "</ul>";
		endif;
		
		return $render;
	}
	
	public function run() {
		Yii::import('application.modules.pim.models.Karyawan');
		
		$model = Karyawan::model()->find('id = :karyawanId', array(':karyawanId'=>$this->karyawanId));
		//echo $this->karyawanId;
		$render = "<div class=\"row-fluid\">";
		$render .= "<div class=\"span12\">";
		$render .= "<img src=\"".Yii::app()->request->baseUrl."/user/".$model->avatar."\">";
		$render .= "</div>";
		$render .= "</div>";
		
		$render .= "<div class=\"row-fluid\">";
		$render .= "<div class=\"span12 side-user\">";
		$render .= $this->renderColumns($model);
		$render .= "</ul>";
		$render .= "</div>";
		$render .= "</div>";
		echo $render;
	}
}