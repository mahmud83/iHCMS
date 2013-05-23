<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Breadcrumbs extends CWidget {

    public $columns;

    public function run() {
        
        $render = '<ul class="breadcrumb">';
        $render .= '<li><i class="icon-home"></i> Beranda <span class="divider">»</span></li>';
        if (isset(Yii::app()->controller->module->id)):
            $render .= '<li>'.CHtml::link(Yii::app()->controller->module->id, Yii::app()->controller->module->id).'<span class="divider">»</span></li>'; 
        else:
            $render .= '<li><a href="#"> Core </a> <span class="divider">»</span></li>';
        endif;
        
        if ((is_array($this->columns)) && (sizeof($this->columns) > 0)):
            foreach ($this->columns as $row => $value):
                if (is_array($value)):
                    foreach ($value as $rowV=>$valueV) {
                        //print_r($row);
                        //exit;
                        $render .= '<li>'.CHtml::link($row, $valueV).'<span class="divider">»</span></li>';
                    }
                else:
                    $render .= '<li><a href="#"> '.$value.' </a></li>';
                endif;
            endforeach;
        endif;
        $render .= "</ul>";

        echo $render;
    }

}