<?php $fungsi = "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button><h5>Warning!</h5>Data Tidak sesuai</div>"; ?>
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
                               $("#Cbr_jabatan_id").val(ui.item.id);  
                               $("#user").val(ui.item.value);  
                               return false;  
                          }',
			    	),
			     'htmlOptions' => array(
			     	'style' => 'height:20px;'
			     	),
			    )); ?>
			    <input type="hidden" readonly="readonly" size="2" maxlength="2" name="Cbr[jabatan_id]" id="Cbr_jabatan_id">
			</div>
		</div>
		
		<div id="wizard">
			<ol>
				<li>Know How</li>
				<li>Problem Solving</li>
				<li>Accountability</li>
				<li>Score</li>
			</ol>
			<!-- Know How !-->
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
	            		'Professional Mastery'=>array('G-'=>'G-','G'=>'G', 'G+'=>'G+'),
	            		'Professional Mastery'=>array('H-'=>'H-','H'=>'H', 'H+'=>'H+'),
	            	), 
	            	array(
	            		'class'=>'mkh', 
	            		'rel'=>'popover', 
	            		'data-original-title'=>'Tekhnical Know-How', 
	            		'data-content'=>'Prosedur, teknik, disiplin profesional 
	            		<ul>
	            			<li>
	            				Primary (SD)
	            				<p>membaca, menulis, melakukan perhitungan sederhana</p>
	            			</li>
	            			<li>
	            				Elementary Vocational (SLTP)
	            				<p>Menggunakan mesin hitung, kalkulator, mesin ketik</p>
	            			</li>
	            			<li>
	            				Vocational (SLTA)
	            				<p>Menghitung menggunakan rumus</p>
	            			</li>
	            			<li>
	            				Advance Vocational (Diploma)
	            				<p>pengetahuan/keahlian/pengalaman selevel akademi (non theoritical)</p>
	            			</li>
	            			<li>
	            				Basic Professional (S1/Strata IV)
	            				<p>pengetahuan/keahlian/pengalaman selevel sarjana S1</p>
	            			</li>
	            			<li>
	            				Seasoned Professional (S1 + keahlian khusus professional/Strata V)
	            				<p>pengetahuan/keahlian/pengalaman yang diperloeh melalui pengalaman yang luas dalam hal teknis</p>
	            			</li>
	            			<li>
	            				Professional Mastery (S2/Strata VI)
	            				<p>pemahaman secara mendalam konsep, prinsip dan praktek yang diperoleh melalui pengalaman luas</p>
	            			</li>
	            			<li>
	            				Unique Authority (S3)
	            				<p>Diakui secara international</p>
	            			</li>
	            		</ul>',
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
	            
	            <?php //echo $form->textFieldRow($modelKh,'mkh',array('class'=>'span5')); ?>
	            <?php echo $form->dropDownListRow(
	            	$modelKh, 
	            	'mkh', 
	            	array(
	            		''=>'please select', 
	            		'N'=>'Task (N)', 
	            		'I'=>'Supervisory (I)', 
	            		'II'=>'Managerial (II)', 
	            		'III'=>'Diverse Managerial (III)', 
	            		'IV'=>'Total (IV)'), 
	            	array(
	            		'class'=>'mkh', 
	            		'rel'=>'popover', 
	            		'data-original-title'=>'Management Know-How', 
	            		'data-content'=>'
	            		<ul>
	            			<li>
	            				Supervisory (Strata IV)
	            				<p>Pelaksanaan tugas/supervisi pekerjaan yang spesifik tujuan dan isinya</p>
	            			</li>
	            			<li>
	            				Managerial (Strata V)
	            				<p>Menentukan perencanaan 1 tahun ke depan atau lebih, budgeting</p>
	            			</li>
	            			<li>
	            				Diverse Managerial (Strata VI)
	            				<p>Integrasi konseptual atau operasional dari fungsi fungsi yang berbeda sifat dan tujuannya</p>
	            			</li>
	            			<li>
	            				Total
	            				<p>Pengawasan sejumlah besar perusahaan dalam 1 grup</p>
	            			</li>
	            		</ul>', 
	            		'ajax' => array(
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
	            <?php echo $form->dropDownListRow(
	            	$modelKh, 
	            	'hrs', 
	            	array(
	            		''=>'please select', 
	            		'1'=>'Basic (1)', 
	            		'2'=>'Important (2)', 
	            		'3'=>'Critical (3)'), 
	            	array(
	            		'class'=>'mkh', 
	            		'rel'=>'popover', 
	            		'data-original-title'=>'Human Relation Skills', 
	            		'data-content'=>'
	            		<ul>
	            			<li>
	            				Basic
	            				<p>Memberi dan menerima informasi ke atau dari orang lain</p>
	            			</li>
	            			<li>
	            				Important
	            				<p>Memahami dan berkomunikasi dengan orang lain</p>
	            			</li>
	            			<li>
	            				Critical
	            				<p>Mempengaruhi, memotivasi, menggerakkan, mengembangkan orang lain untuk melakukan sesuatu</p>
	            				<p>Kabag di Direktorat Produksi , Kabag di Direkorat Renbang, Kabag di Direktorat SDM/Umum, Kabag di Direktorat Keuangan , GM SBU, Jab di Kebun (Manajer/Kanit, Askep, Astan, ATU dan Asum), Jab. Di Prabik (Manajer/Kanit, Maskep, ATP, APM, Aspol) </p>
	            			</li>
	            		</ul>', 
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
	            		
	            )) ;?>
	            
	            <?php echo $form->textFieldRow($model,'kh_score',array('class'=>'span5')); ?>
			</div>
			<!-- Problem Solving !-->
			<div>
				<p>Pemikiran yang diperlukan untuk menganalisa, emngevaluasi, menciptakan, mememberi alasan, mencapai dan menarik kesimpulan.</p>
				
				<?php echo $form->dropDownListRow(
					$modelPs, 
					'tet', 
					/*
					array(
						''=>'please select', 
						'Strict Routine'=>array('A'=>'A', 'A+'=>'A+'), 
						'Routine'=>array('B'=>'B', 'B+'=>'B+'), 
						'Semi Routine'=>array('C'=>'C', 'C+'=>'C+'), 
						'Standarised'=>array('D'=>'D', 'D+'=>'D+'), 
						'Clearly Defined'=>array('E'=>'E', 'E+'=>'E+'), 
						'Broadly Defined'=>array('F'=>'F', 'F+'=>'F+'), 
						'Generally Defined'=>array('G'=>'G', 'G+'=>'G+'), 
						'Abstractly Defined'=>array('H'=>'H', 'H+'=>'H+'),
					), 
					*/
					array(
						''=>'please select', 
						'A' => 'Strict Routine (A)', 
						'B' => 'Routine (B)', 
						'C' => 'Semi Routine (C)', 
						'D' => 'Standarized (D)', 
						'E' => 'Clearly Defined (E)', 
						'F' => 'Broadly Defined (F)', 
						'G' => 'Generally Defined (G)', 
						'H' => 'Abstractly Defined (H)',
					), 
					array(
						'rel'=>'popover', 
						'data-original-title'=>'Thinking Environment', 
						'data-content'=>'
						<ul>
							<li>
								Strict Routine (SD)
								<p>Berpikir di dalam batas instruksi rinci, precedent</p>
							</li>
							<li>
								Routine (SLTP)
								<p>Berpikir di dalam batas prosedur kerja standar, precedent</p>
							</li>
							<li>
								Semi Routine (SMA)
								<p>Pedoman teknis tersedia/dapat diberikan jika menghadapi situasi baru</p>
							</li>
							<li>
								Standardized (Diploma , Strata IV)
								<p>Pemegang peran diminta untuk memikirkan masalah mengambil tindakan dan mempertimbangkan konsekuensi tindakan</p>
							</li>
							<li>
								Clearly Defined (S1, Strata IV – V)
								<p>Bagaimana mencapainya dibatasi oleh peraturan, kebijakan, bimbingan arahan atasan</p>
							</li>
							<li>
								Broadly Defined (S2, Strata V- VI)
								<p>Kebebasan untuk mengatasi masalah</p>
							</li>
							<li>
								Generally Defined (S3, Strata VI)
								<p>Mengantisipasi masalah umum yang dapat muncul dalam pencapaian tujuan akhir</p>
							</li>
							<li>
								Abstractly Defined (Profesor)
								<p>Dalam merancang/merencanakan sesuatu tidak dibatasi oleh kebijakan dan pedoman internal</p>
							</li>
						</ul>',
						'ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/psv'),
	            			'data' => "js:{tet:$(CbrProblemSolving_tet).val(), tce:$(CbrProblemSolving_tce).val(), tkh:$(CbrKnowHow_tkh).val(), mkh:$(CbrKnowHow_mkh).val(), hrs:$(CbrKnowHow_hrs).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ps_persent").val(data.isi);
	            				$("#Cbr_ps_score").val(data.psp);
	            				if (parseInt(data.info) == 2) {
	            					$("#infocuy").addClass("alert alert-error");
	            					$("#infocuy").html("Maaf Data tidak sesuai");
	            				}
	            				else {
	            					$("#infocuy").removeClass("alert alert-error");
	            					$("#infocuy").html("");
	            				}
	            			}',),)) ;?>
				
				<?php echo $form->dropDownListRow(
					$modelPs, 
					'tce', 
					/*
					array(
						''=>'please select', 
						'1'=>'Repetitive', 
						'2'=>'Patterned', 
						'3'=>'Variable', 
						'4'=>'Adaptive', 
						'5'=>'Unearthed'), 
					*/
					array(
						''=>'please select', 
						'Repetitive'=>array('1'=>'1', '1+'=>'1+'), 
						'Patterned'=>array('2'=>'2', '2+'=>'2+'), 
						'Variable'=>array('3'=>'3', '3+'=>'3+'), 
						'Adaptive'=>array('4'=>'4', '4+'=>'4+'), 
						'Unearthed'=>array('5'=>'5', '5+'=>'5+'),
					),
					array(
						'rel'=>'popover', 
						'data-original-title'=>'Thinkng Challenge',
						'data-content'=>'
						<ul>
							<li>
								Repetitive (Strata I - III)
								<p>Permasalahan yang sama berulang kali muncul</p>
							</li>
							<li>
								Patterned (Strata IV)
								<p>Situasi sama, pemecahannya ada beberapa alternatif (lebih dari2), Tapi sudah tersedia</p>
							</li>
							<li>
								Variable (Strata IV – V)
								<p>Situasi berbeda yang memerlukan identifikasi dan seleksi dari pemencahan penggunaan aplikasi dan pengetahuan</p>
							</li>
							<li>
								Adaptive (Strata VI)
								<p>Perlu menggali fakta untuk mendefinisikan masalah lebih jauh</p>
							</li>
							<li>
								Uncharted
								<p>Melakukan judgement spekulatif, Menetapkan arah dan filosofi masa yang akan datang</p>
							</li>
						</ul>',
						'ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/psv'),
	            			'data' => "js:{tet:$(CbrProblemSolving_tet).val(), tce:$(CbrProblemSolving_tce).val(), tkh:$(CbrKnowHow_tkh).val(), mkh:$(CbrKnowHow_mkh).val(), hrs:$(CbrKnowHow_hrs).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ps_persent").val(data.isi);
	            				$("#Cbr_ps_score").val(data.psp);
	            				if (parseInt(data.info) == 2) {
	            					$("#infocuy").addClass("alert alert-error");
	            					$("#infocuy").html("Maaf Data tidak sesuai");
	            				}
	            				else {
	            					$("#infocuy").removeClass("alert alert-error");
	            					$("#infocuy").html("");
	            				}
	            			}',),)) ;?>
				
				<?php echo $form->textFieldRow($model,'ps_persent',array('class'=>'span5')); ?>

				<?php echo $form->textFieldRow($model,'ps_score',array('class'=>'span5')); ?>
				
				<?php //echo $form->textFieldRow($model,'information',array('class'=>'span5')); ?>
				<div id="infocuy"></div>
			</div>
			<!-- Accountability !-->
			<div>
				<ul>
				   <li>Hasil dan Konsekuensi dari tindakan.</li>
				   <li>Efek dari peran terhadap hasil akhir.</li>
				</ul>
				<?php echo $form->dropDownListRow(
					$modelAc, 
					'fta', 
					array(
						''=>'please select', 
						'A'=>'Prescribed (A)', 
						'B'=>'Controlled (B)', 
						'C'=>'Standardized (C)', 
						'D'=>'Regulated (D)', 
						'E'=>'Directed (E)', 
						'F'=>'Generally Directed (F)', 
						'G'=>'Guided (G)'), 
					array(
						'rel'=>'popover', 
						'data-original-title'=>'Freedom to Act',
						'data-content'=>'
						<ul>
							<li>
								Prescribed
								<p>Tindakan yang harus diambil telah ditentukan tahap demi tahap</p>
							</li>
							<li>
								Controlled
								<p>Masi bisa mengatur urutan kerja</p>
							</li>
							<li>
								Standardized (Strata IV)
								<p>Situasi berbeda yang memerlukan identifikasi dan seleksi dari pemecahan penggunaan aplikasi dan pengetahuan</p>
							</li>
							<li>
								Adaptive (Strata VI)
								<p>Bisa mengatur urutan kerja dan cara kerja, review progress dan hasil kerja</p>
							</li>
							<li>
								Regulated (Strata IV - V)
								<p>Ditentukan apa yang has dicapaian kapan, bekonribusi pada penetapa penggunaan sumbedaya tahunan</p>
							</li>
							<li>
								Directed (Strata VI)
								<p>Punya ruang gerak dalam pengambilan keputusan untuk hal operasional/fungsional yang dikelola</p>
							</li>
							<li>
								Generally Directed
								<p>Menerapkan kebijakan fungsional, melakukan kontrol terhadap unit operasional/perusahaan</p>
							</li>
							<li>
								Guided
								<p>Pengarahan dari pemegang saham</p>
							</li>
							<li>
								General Guidance
								<p>Menentukan Visi</p>
							</li>
						</ul>',
						'ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/acc'),
	            			'data' => "js:{fta:$(CbrAccountability_fta).val(), aid:$(CbrAccountability_aid).val(), amt:$(CbrAccountability_amt).val(), toi:$(CbrAccountability_toi).val(), prf:$(CbrAccountability_prf).val(), kha:$(Cbr_kh_score).val(), psa:$(Cbr_ps_score).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ac_score").val(data.isi);
	            				$("#Cbr_total").val(data.total);
	            			}',),)) ;?>
	            			
	            <?php echo $form->dropDownListRow(
	            	$modelAc, 
	            	'aid', 
	            	array(
	            		''=>'please select', 
	            		'A'=>'Nominal (A)', 
	            		'B'=>'Moderate (B)', 
	            		'C'=>'Major (C)', 
	            		'D'=>'Critical (D)'), 
	            	array(
	            		'rel'=>'popover', 
	            		'data-original-title'=>'Area Indeterminated',
	            		'data-content'=>'
	            		<ul>
	            			<li>
	            				Nominal 
	            				<p>Penyediaan pelayanan untuk orang lain untuk hasil akhir yang penting</p>
	            			</li>
	            			<li>
	            				Moderate
	            				<p>Maintenance peralatan pendukung/pendukung proses produksi/pabrik kecil</p>
	            			</li>
	            			<li>
	            				Major
	            				<p>Operasi dan maintenace peralatan utama pabrik</p>
	            			</li>
	            			<li>
	            				Critical
	            				<p>Kontrol Operasi dari suatu unit utama</p>
	            			</li>
	            		</ul>',
	            		'ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/acc'),
	            			'data' => "js:{fta:$(CbrAccountability_fta).val(), aid:$(CbrAccountability_aid).val(), amt:$(CbrAccountability_amt).val(), toi:$(CbrAccountability_toi).val(), prf:$(CbrAccountability_prf).val(), kha:$(Cbr_kh_score).val(), psa:$(Cbr_ps_score).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ac_score").val(data.isi);
	            				$("#Cbr_total").val(data.total);
	            			}',),)) ;?>
	            
	            <?php echo $form->dropDownListRow(
	            	$modelAc, 
	            	'amt', 
	            	array(
	            		''=>'please select', 
	            		'1'=>'Very Small (1)', 
	            		'2'=>'Small (2)', 
	            		'3'=>'Medium (3)', 
	            		'4'=>'Large (4)', 
	            		'5'=>'Very Large (5)'), 
	            	array(
	            		'rel'=>'popover', 
	            		'data-original-title'=>'Magnitude',
	            		'data-content'=>'
	            		<ul>
	            			<li>
	            				Small 
	            				<p>14 M sampai di bawah 200 M</p>
	            			</li>
	            			<li>
	            				Medium
	            				<p>200 M sampai di bawah 400 M</p>
	            			</li>
	            			<li>
	            				Large
	            				<p>400 M ke atas</p>
	            			</li>
	            		</ul>',
	            		'ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/acc'),
	            			'data' => "js:{fta:$(CbrAccountability_fta).val(), aid:$(CbrAccountability_aid).val(), amt:$(CbrAccountability_amt).val(), toi:$(CbrAccountability_toi).val(), prf:$(CbrAccountability_prf).val(), kha:$(Cbr_kh_score).val(), psa:$(Cbr_ps_score).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ac_score").val(data.isi);
	            				$("#Cbr_total").val(data.total);
	            			}',),)) ;?>
	            
	            <?php echo $form->dropDownListRow(
	            	$modelAc, 
	            	'toi', 
	            	array(
	            		''=>'please select', 
	            		'R'=>'Remote (R)', 
	            		'C'=>'Contributory (C)', 
	            		'S'=>'Shared (S)', 
	            		'P'=>'Prime (P)'), 
	            	array(
	            		'rel'=>'popover', 
	            		'data-original-title'=>'Type of Impact',
	            		'data-content'=>'
	            		<ul>
	            			<li>
	            				Remote (Kantor Pusat diluar Produksi (kode:  05.00 , 05.07 , 05.12 , 05.13))
	            				<p>Task Oriented</p>
	            			</li>
	            			<li>
	            				Contributory (Kantor Pusat di luar Direktorat Produksi (kode : 05.01 , 05.05 , 05.06 , 05.06 , 05.08 , 05.09 , 05.10 , 05.11 , 05.14))
	            				<p>Bersifat interpretatif, advisory, penyediaan pelayanan untuk orang lain dalam mengambil tindakan</p>
	            			</li>
	            			<li>
	            				Shared (Kantor Pusat di Derektorat Produksi (Kode : 05.02 , 05.03 , 05.04, 05.15 ))
	            				<p>Secara bersama2 bertanggung jawab dalam mengambil tindakan dan melaksanakan dampak yang menentukan terhadao hasil akhir</p>
	            			</li>
	            			<li>
	            				Prime (Semua Strata yang ada di unit dan SBU)
	            				<p>Fungsi lini</p>
	            			</li>
	            		</ul>',
	            		'ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/acc'),
	            			'data' => "js:{fta:$(CbrAccountability_fta).val(), aid:$(CbrAccountability_aid).val(), amt:$(CbrAccountability_amt).val(), toi:$(CbrAccountability_toi).val(), prf:$(CbrAccountability_prf).val(), kha:$(Cbr_kh_score).val(), psa:$(Cbr_ps_score).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ac_score").val(data.isi);
	            				$("#Cbr_total").val(data.total);
	            			}',),)) ;?>
	            			
	            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/profiling.png" width="100%" />
	            
	            <?php echo $form->dropDownListRow(
	            	$modelAc, 
	            	'prf', 
	            	array(
	            		''=>'please select', 
	            		'4'=>'P4', 
	            		'3'=>'P3', 
	            		'2'=>'P2', 
	            		'1'=>'P1', 
	            		'0'=>'P0/A0', 
	            		'1+'=>'A1', 
	            		'2+'=>'A2', 
	            		'3+'=>'A3', 
	            		'4+'=>'A4'), 
	            	array(
	            		'ajax' => array(
	            			'type'=>'POST',
	            			'dataType'=>'json',
	            			'url'=>CController::createUrl('/renum/cbr/acc'),
	            			'data' => "js:{fta:$(CbrAccountability_fta).val(), aid:$(CbrAccountability_aid).val(), amt:$(CbrAccountability_amt).val(), toi:$(CbrAccountability_toi).val(), prf:$(CbrAccountability_prf).val(), kha:$(Cbr_kh_score).val(), psa:$(Cbr_ps_score).val()}",
	            			'success'=>'function(data){
	            				$("#Cbr_ac_score").val(data.isi);
	            				$("#Cbr_total").val(data.total);
	            			}',),)) ;?>
	            			
	            <?php echo $form->textFieldRow($model,'ac_score',array('class'=>'span5')); ?>
	            
			</div>
			<!-- score !-->
			<div>
				<blockquote>
					<p>
						Total Job Unit : adalah jumlah nilai dari Know How, Problem Solving, dan Accountability
					</p>
				</blockquote>
				<?php echo $form->textFieldRow($model,'total',array('class'=>'span5')); ?>
				<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Submit')); ?>
				
			</div>
			
		</div>
		
		<script src="<?php echo Yii::app()->request->baseUrl;?>/js/bwizard.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		   $("#wizard").bwizard();
		   $("#CbrKnowHow_tkh").popover({trigger: 'hover'});
		   $("#CbrKnowHow_mkh").popover({trigger: 'hover'});
		   $("#CbrKnowHow_hrs").popover({trigger: 'hover'});
		   $("#CbrProblemSolving_tet").popover({trigger: 'hover'});
		   $("#CbrProblemSolving_tce").popover({trigger: 'hover'});
		   $("#CbrAccountability_aid").popover({trigger: 'hover'});
		   $("#CbrAccountability_fta").popover({trigger: 'hover'});
		   $("#CbrAccountability_amt").popover({trigger: 'hover'});
		   $("#CbrAccountability_toi").popover({trigger: 'hover'});
		</script>
	</div>
	
	<?php $this->endWidget(); ?>
</div>
