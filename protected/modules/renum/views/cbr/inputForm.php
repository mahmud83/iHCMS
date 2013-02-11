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
	            		'Primary'=>array('A-'=>'A-','A'=>'A', 'A+'=>'A+'), 
	            		'Elementary Vocational'=>array('B-'=>'B-', 'B'=>'B', 'B+'=>'B+'), 
	            		'Vocational'=>array('C-'=>'C-', 'C'=>'C', 'C+'=>'C+'), 
	            		'Advance Vocational'=>array('D-'=>'D-', 'D'=>'D', 'D+'=>'D+'), 
	            		'Basic Professional'=>array('E-'=>'E-', 'E'=>'E', 'E+'=>'E+'), 
	            		'Seasoned Professional'=>array('F-'=>'F-', 'F'=>'F', 'F+'=>'F+'), 
	            		'Professional Mastery'=>array('G-'=>'G-','G'=>'G', 'G+'=>'G+')
	            	), 
	            	array(
	            		'class'=>'mkh', 
	            		'rel'=>'popover', 
	            		'data-original-title'=>'Tekhnical Know-How', 
	            		'data-content'=>'Prosedur, teknik, disiplin profesional <ul><li>Primary<p>membaca, menulis, melakukan perhitungan sederhana</p></li><li>Elementary Vocational<p>Menggunakan mesin hitung, kalkulator, mesin ketik</p></li><li>Vocational<p>Menghitung menggunakan rumus</p></li><li>Advance Vocational<p>pengetahuan/keahlian/pengalaman selevel akademi (non theoritical)</p></li><li>Basic Professional<p>pengetahuan/keahlian/pengalaman selevel sarjana S1</p></li><li>Seasoned Professional<p>pengetahuan/keahlian/pengalaman yang diperloeh melalui pengalaman yang luas dlm hal teknis</p></li><li>Professional Mastery<p>pemahaman secara mendalam konsep, prinsip dan prakterk yang diperoleh melalui pengalaman luas</p></li></ul>',
	            		'ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/nama'),
	            			'data' => "js:{tkh:$(CbrKnowHow_tkh).val(), mkh:$(CbrKnowHow_mkh).val(), hrs:$(CbrKnowHow_hrs).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_kh_score").val(data.isi);
	            				$("#Cbr_ps_score").val(data.psp);
	            			}',
	            		),
	            	)
	            );
	            ?>
	            <div id="dinam"></div>
	            <?php //echo $form->textFieldRow($modelKh,'mkh',array('class'=>'span5')); ?>
	            <?php echo $form->dropDownListRow($modelKh, 'mkh', array(''=>'please select', 'N'=>'Task', 'I'=>'Supervisory', 'II'=>'Managerial', 'III'=>'Diverse Managerial', 'IV'=>'Total'), array('class'=>'mkh', 'rel'=>'popover', 'data-original-title'=>'Management Know-How', 'data-content'=>'<ul><li>Supervisory<p>Pelaksanaan tugas /supervisi pekerjaan yang spesifik tujuan dan isinya</p></li><li>Managerial<p>Menentukan perencanaan 1 tahun ke depan atau lebih, budgeting</p></li><li>Diverse Managerial<p>Integrasi konseptual atau operasional dari fungsi funsi yang berbeda sifat dan tujuan nya</p></li><li>Total<p>Pengawasan sejumlah besar perusahaan dalam 1 grup</p></li></ul>', 'ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/nama'),
	            			'data' => "js:{tkh:$(CbrKnowHow_tkh).val(), mkh:$(CbrKnowHow_mkh).val(), hrs:$(CbrKnowHow_hrs).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_kh_score").val(data.isi);
	            				$("#Cbr_ps_score").val(data.psp);
	            			}',
	            		),)) ;?>
	            
	            <?php //echo $form->textFieldRow($modelKh,'hrs',array('class'=>'span5')); ?>
	            <?php echo $form->dropDownListRow($modelKh, 'hrs', array(''=>'please select', '1'=>'Basic', '2'=>'Important', '3'=>'Critical'), array('class'=>'mkh', 'rel'=>'popover', 'data-original-title'=>'Human Relation Skills', 'data-content'=>'<ul><li>Basic<p>Memberi dan menerima informasi ke atau dari orang lain</p></li><li>Important<p>Memahami dan berkomunikasi dengan orang lain</p></li><li>Critical<p>Mempengaruhi, memotivasi, menggerakkan, mengembangkan orang lain untuk melakukan sesuatu</p></li></ul>', 'ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/nama'),
	            			'data' => "js:{tkh:$(CbrKnowHow_tkh).val(), mkh:$(CbrKnowHow_mkh).val(), hrs:$(CbrKnowHow_hrs).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_kh_score").val(data.isi);
	            				$("#Cbr_ps_score").val(data.psp);
	            			}',
	            		),
	            		
	            )) ;?>
	            
	            <?php echo $form->textFieldRow($model,'kh_score',array('class'=>'span5')); ?>
			</div>
			<div>
				<p>Pemikiran yang diperlukan untuk menganalisa, emngevaluasi, menciptakan, mememberi alasan, mencapai dan menarik kesimpulasn.</p>
				
				<?php echo $form->dropDownListRow($modelPs, 'tet', array(''=>'please select', 'Strict Routine'=>array('A'=>'A', 'A+'=>'A+'), 'Routine'=>array('B'=>'B', 'B+'=>'B+'), 'Semi Routine'=>array('C'=>'C', 'C+'=>'C+'), 'Standarised'=>array('D'=>'D', 'D+'=>'D+'), 'Clearly Defined'=>array('E'=>'E', 'E+'=>'E+'), 'Broadly Defined'=>array('F'=>'F', 'F+'=>'F+'), 'Generally Defined'=>array('G'=>'G', 'G+'=>'G+'), 'Abstractly Defined'=>array('H'=>'H', 'H+'=>'H+'),), array('rel'=>'popover', 'data-original-title'=>'Thinkng Environment', 'data-content'=>'<ul><li>Strict Routine<p>Berpikir di dalam batas intruksi rinci, precedent</p></li><li>Routine<p>Berpikir di dalam batas prosedur kerja standar, precedent</p></li><li>Semi Routine<p>Pedoman teknis tersedia/dapat diberikan jika menghadapi situasi baru</p></li><li>Standardized<p>Pemegang peran diminta untuk memikirkan masalah mengambil tindakan dan mempertimbangkan kensekuensi tindakan</p></li><li>Clearly Defined<p>Bagaimana mencapainya dibatasi oleh peraturan, kebijakan, bimbingan arahan atasan</p></li><li>Broadly Defined<p>Kebebasan untuk mengatasi masalah</p></li><li>Generally Defined<p>Mengantisipasi masalah umum yang dapat muncul dalam pencapaian tujuan akhir</p></li><li>Abstractly Defined<p>Dalam merancang/merencanakan sesuatu tidak dibatasi oleh kebijakan dan pedoman internal</p></li></ul>','ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/psv'),
	            			'data' => "js:{tet:$(CbrProblemSolving_tet).val(), tce:$(CbrProblemSolving_tce).val(), kha:$(Cbr_kh_score).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ps_persent").val(data.isi);
	            				$("#Cbr_ps_score").val(data.psp);
	            				$("#Cbr_information").val(data.info);
	            			}',),)) ;?>
				
				<?php echo $form->dropDownListRow($modelPs, 'tce', array(''=>'please select', '1'=>'Repetitive', '2'=>'Patterned', '3'=>'Variable', '4'=>'Adaptive', '5'=>'Unearthed'), array('ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/psv'),
	            			'data' => "js:{tet:$(CbrProblemSolving_tet).val(), tce:$(CbrProblemSolving_tce).val(), kha:$(Cbr_kh_score).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ps_persent").val(data.isi);
	            				$("#Cbr_ps_score").val(data.psp);
	            				$("#Cbr_information").val(data.info);
	            			}',),)) ;?>
				
				<?php echo $form->textFieldRow($model,'ps_persent',array('class'=>'span5')); ?>

				<?php echo $form->textFieldRow($model,'ps_score',array('class'=>'span5')); ?>
				
				<?php echo $form->textFieldRow($model,'information',array('class'=>'span5')); ?>
			</div>
			<div>
				<ul>
				   <li>Hasil dan Konsekuensi dari tindakan.</li>
				   <li>Efek danri peran terhadap hasil akhir.</li>
				</ul>
				<?php echo $form->dropDownListRow($modelAc, 'fta', array(''=>'please select', 'A'=>'Prescribed', 'B'=>'Controlled', 'C'=>'Standardised', 'D'=>'Regulated', 'E'=>'Directed', 'F'=>'Generally Directed', 'G'=>'Guided'), array('ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/acc'),
	            			'data' => "js:{fta:$(CbrAccountability_fta).val(), aid:$(CbrAccountability_aid).val(), amt:$(CbrAccountability_amt).val(), toi:$(CbrAccountability_toi).val(), prf:$(CbrAccountability_prf).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ac_score").val(data.isi);
	            			}',),)) ;?>
	            			
	            <?php echo $form->dropDownListRow($modelAc, 'aid', array(''=>'please select', 'A'=>'Nominal', 'B'=>'Moderate', 'C'=>'Major', 'D'=>'Critical'), array('ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/acc'),
	            			'data' => "js:{fta:$(CbrAccountability_fta).val(), aid:$(CbrAccountability_aid).val(), amt:$(CbrAccountability_amt).val(), toi:$(CbrAccountability_toi).val(), prf:$(CbrAccountability_prf).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ac_score").val(data.isi);
	            			}',),)) ;?>
	            
	            <?php echo $form->dropDownListRow($modelAc, 'amt', array(''=>'please select', '1'=>'Very Small', '2'=>'Small', '3'=>'Medium', '4'=>'Large', '5'=>'Very Large'), array('ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/acc'),
	            			'data' => "js:{fta:$(CbrAccountability_fta).val(), aid:$(CbrAccountability_aid).val(), amt:$(CbrAccountability_amt).val(), toi:$(CbrAccountability_toi).val(), prf:$(CbrAccountability_prf).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ac_score").val(data.isi);
	            			}',),)) ;?>
	            
	            <?php echo $form->dropDownListRow($modelAc, 'toi', array(''=>'please select', 'R'=>'Remote', 'C'=>'Contributory', 'S'=>'Shared', 'P'=>'Prime'), array('ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/acc'),
	            			'data' => "js:{fta:$(CbrAccountability_fta).val(), aid:$(CbrAccountability_aid).val(), amt:$(CbrAccountability_amt).val(), toi:$(CbrAccountability_toi).val(), prf:$(CbrAccountability_prf).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ac_score").val(data.isi);
	            			}',),)) ;?>
	            			
	            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/profiling.png" width="100%" />
	            
	            <?php echo $form->dropDownListRow($modelAc, 'prf', array(''=>'please select', 'P4'=>'P4', 'P3'=>'P3', 'P2'=>'P2', 'P1'=>'P1', '0'=>'P0/A0', 'A1'=>'A1', 'A2'=>'A2', 'A3'=>'A3', 'A4'=>'A4'), array('ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/acc'),
	            			'data' => "js:{fta:$(CbrAccountability_fta).val(), aid:$(CbrAccountability_aid).val(), amt:$(CbrAccountability_amt).val(), toi:$(CbrAccountability_toi).val(), prf:$(CbrAccountability_prf).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ac_score").val(data.isi);
	            			}',),)) ;?>
	            			
	            <?php echo $form->textFieldRow($model,'ac_score',array('class'=>'span5')); ?>
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
