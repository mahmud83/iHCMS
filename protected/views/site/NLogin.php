<div id="container">
    
    <div id="slideshow">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/shield/img/slideshow/1.jpg" alt=""/>
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/shield/img/slideshow/2.jpg" alt=""/>
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/shield/img/slideshow/3.jpg" alt=""/>
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/shield/img/slideshow/4.jpg" alt=""/>
    </div>
    
    <div id="loginbox">
        <h3>Login Administrator</h3>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
            'htmlOptions' => array(
                'class' => 'form-vertical'
            ),
        ));
        ?>
        <div class="alert alert-info">
            <?php echo $form->error($model,'username'); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>
        <!-- <form class="form-vertical" action="beranda-dashboard.html">  !-->
        <div class="control-group">
            <?php echo $form->textField($model,'username', array('class'=>'big', 'placeholder'=>'Username')); ?>
            <?php echo $form->passwordField($model,'password', array('class'=>'big', 'placeholder'=>'Password')); ?>
            <!--
            <input type="text" placeholder="Username" id="input-username" class="big" name="user_name"/>
            <input type="password" placeholder="Password" id="input-password" class="big" name="password"/>
            !-->
        </div>
        <div class="control-group">
            <label class="checkbox">
                <input type="checkbox" class="uniform" /> Remember me
            </label>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-info btn-block btn-large">Login</button>
        </div>
        <!-- </form> !-->
<?php $this->endWidget(); ?>
    </div>
</div>


<!-- ===================== SITE JS ===================== -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/js/jquery-1.9.1.min.js"></script>

<!-- Plugin Jquery Cycle -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/cycle/jquery.cycle.all.js"></script>
<script type="text/javascript">
    $(function() {
        $('#slideshow').cycle({
        });
    })
</script>
