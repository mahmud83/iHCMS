<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'cbr-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>
		
		<div class="control-group">
			<label class="control-label" for="PPerson_user_id">Jabatan</label>
			<div class="controls">
			<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
			    'name' => 'user',
			    'value' => '',
			    'sourceUrl' => $this->createUrl('/wOccupation/lookup'),
			    'options' => array(
			    	'showAnim' => 'fold',
			    	'minLength'=>'2',
			    	'select'=>'js:function( event, ui ) {  
                               $("#user_id").val(ui.item.id);  
                               $("#user").val(ui.item.value);  
                               return false;  
                          }',
			    	),
			     'htmlOptions' => array(
			     	'style' => 'height:20px;'
			     	),
			    )); ?>
			</div>
		</div>
		
		<div id="wizard">
			<ol>
				<li>Know How</li>
				<li>Problem Solving</li>
				<li>Accountability</li>
			</ol>
			<div>
				<p>Pengetahuan, keahlian, pengalaman untuk prestasi kerja standar yang dapat diterima</p>
				<?php //echo $form->textFieldRow($modelKh,'tkh',array('class'=>'span5')); ?>
	            <?php echo $form->dropDownListRow(
	            	$modelKh, 
	            	'tkh',
	            	array(
	            		''=>'please select', 
	            		'Primary'=>array('A-','A', 'A+'), 
	            		'Elementary Vocational'=>array('B-', 'B', 'B+'), 
	            		'Vocational'=>array('C-', 'C', 'C+'), 
	            		'Advance Vocational'=>array('D-', 'D', 'D+'), 
	            		'Basic Professional'=>array('E-', 'E', 'E+'), 
	            		'Seasoned Professional'=>array('F-', 'F', 'F+'), 
	            		'Professional Mastery'=>array('G-','G', 'G+')
	            	), 
	            	array(
	            		'rel'=>'popover', 
	            		'data-original-title'=>'Tekhnical Know-How', 
	            		'data-content'=>'Prosedur, teknik, disiplin profesional <ul><li>Primary<p>membaca, menulis, melakukan perhitungan sederhana</p></li><li>Elementary Vocational<p>Menggunakan mesin hitung, kalkulator, mesin ketik</p></li><li>Vocational<p>Menghitung menggunakan rumus</p></li><li>Advance Vocational<p>pengetahuan/keahlian/pengalaman selevel akademi (non theoritical)</p></li><li>Basic Professional<p>pengetahuan/keahlian/pengalaman selevel sarjana S1</p></li><li>Seasoned Professional<p>pengetahuan/keahlian/pengalaman yang diperloeh melalui pengalaman yang luas dlm hal teknis</p></li><li>Professional Mastery<p>pemahaman secara mendalam konsep, prinsip dan prakterk yang diperoleh melalui pengalaman luas</p></li></ul>',
	            		'ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/nama'),
	            			'data' => "js:{haha:$(this).val()}",
	            			'success'=>'function(data){
	            				$("#dinam").html(data.isi);
	            			}',
	            		),
	            	)
	            );
	            ?>
	            <div id="dinam">
</div>
	            <?php //echo $form->textFieldRow($modelKh,'mkh',array('class'=>'span5')); ?>
	            <?php echo $form->dropDownListRow($modelKh, 'mkh', array(''=>'please select', 'N'=>'Task', 'I'=>'Supervisory', 'II'=>'Managerial', 'III'=>'Diverse Managerial', 'IV'=>'Total'), array('rel'=>'popover', 'data-original-title'=>'Management Know-How', 'data-content'=>'<ul><li>Supervisory<p>Pelaksanaan tugas /supervisi pekerjaan yang spesifik tujuan dan isinya</p></li><li>Managerial<p>Menentukan perencanaan 1 tahun ke depan atau lebih, budgeting</p></li><li>Diverse Managerial<p>Integrasi konseptual atau operasional dari fungsi funsi yang berbeda sifat dan tujuan nya</p></li><li>Total<p>Pengawasan sejumlah besar perusahaan dalam 1 grup</p></li></ul>')) ;?>
	            
	            <?php //echo $form->textFieldRow($modelKh,'hrs',array('class'=>'span5')); ?>
	            <?php echo $form->dropDownListRow($modelKh, 'hrs', array(''=>'please select', '1'=>'Basic', '2'=>'Important', '3'=>'Critical'), array('rel'=>'popover', 'data-original-title'=>'Human Relation Skills', 'data-content'=>'<ul><li>Basic<p>Memberi dan menerima informasi ke atau dari orang lain</p></li><li>Important<p>Memahami dan berkomunikasi dengan orang lain</p></li><li>Critical<p>Mempengaruhi, memotivasi, menggerakkan, mengembangkan orang lain untuk melakukan sesuatu</p></li></ul>')) ;?>
	            
	            <?php echo $form->textFieldRow($model,'kh_score',array('class'=>'span5')); ?>
			</div>
			<div>
				<p>Pemikiran yang diperlukan untuk menganalisa, emngevaluasi, menciptakan, mememberi alasan, mencapai dan menarik kesimpulasn.</p>
				
				<?php echo $form->dropDownListRow($modelPs, 'tet', array(''=>'please select', 'Strict Routine'=>array('A', 'A+'), 'Routine'=>array('B', 'B+'), 'Semi Routine'=>array('C', 'C+'), 'Standarised'=>array('D', 'D+'), 'Clearly Defined'=>array('E', 'E+'), 'Broadly Defined'=>array('F', 'F+'), 'Generally Defined'=>array('G', 'G+'), 'Abstractly Defined'=>array('H', 'H+'),), array('rel'=>'popover', 'data-original-title'=>'Thinkng Environment', 'data-content'=>'<ul><li>Strict Routine<p>Berpikir di dalam batas intruksi rinci, precedent</p></li><li>Routine<p>Berpikir di dalam batas prosedur kerja standar, precedent</p></li><li>Semi Routine<p>Pedoman teknis tersedia/dapat diberikan jika menghadapi situasi baru</p></li><li>Standardized<p>Pemegang peran diminta untuk memikirkan masalah mengambil tindakan dan mempertimbangkan kensekuensi tindakan</p></li><li>Clearly Defined<p>Bagaimana mencapainya dibatasi oleh peraturan, kebijakan, bimbingan arahan atasan</p></li><li>Broadly Defined<p>Kebebasan untuk mengatasi masalah</p></li><li>Generally Defined<p>Mengantisipasi masalah umum yang dapat muncul dalam pencapaian tujuan akhir</p></li><li>Abstractly Defined<p>Dalam merancang/merencanakan sesuatu tidak dibatasi oleh kebijakan dan pedoman internal</p></li></ul>')) ;?>
				
				<?php echo $form->dropDownListRow($modelPs, 'tce', array(''=>'please select', '1'=>'Repetitive', '2'=>'Patterned', '3'=>'Variable', '4'=>'Adaptive', '5'=>'Unearthed')) ;?>
				
				<?php echo $form->textFieldRow($model,'ps_persent',array('class'=>'span5')); ?>

				<?php echo $form->textFieldRow($model,'ps_score',array('class'=>'span5')); ?>
			</div>
			<div>
				<ul>
				   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
				   <li>Aliquam tincidunt mauris eu risus.</li>
				   <li>Vestibulum auctor dapibus neque.</li>
				</ul>
			</div>
			
		</div>
		
		<script src="<?php echo Yii::app()->request->baseUrl;?>/js/bwizard.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		   $("#wizard").bwizard();
		   $("#CbrKnowHow_tkh").popover({trigger: 'hover'});
		   $("#CbrKnowHow_mkh").popover({trigger: 'hover'});
		   $("#CbrKnowHow_hrs").popover({trigger: 'hover'});
		   $("#CbrProblemSolving_tet").popover({trigger: 'hover'});
		</script>
	</div>
	
	<?php $this->endWidget(); ?>
</div>

