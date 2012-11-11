<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

<div class="row-fluid no-clear">
						<div class="span12 content-info">
							<button class="btn pull-right" type="button"><i class="icon-info-sign"></i>Information</button>
						</div>
					</div>
					<div class="row-fluid no-clear">
						<div class="span12 widget">
							<div class="widget-title">
								<i class="icon-bar-chart titleicon"></i>
								<p>Monthly Stats</p>
							</div>
							<div class="widget-content">
								<?php
								$this->Widget('ext.highcharts.HighchartsWidget', array(
								   'options'=>array(
								      'title' => array('text' => 'Fruit Consumption'),
								      'xAxis' => array(
								         'categories' => array('Apples', 'Bananas', 'Oranges')
								      ),
								      'yAxis' => array(
								         'title' => array('text' => 'Fruit eaten')
								      ),
								      'series' => array(
								         array('name' => 'Jane', 'data' => array(1, 0, 4)),
								         array('name' => 'John', 'data' => array(5, 7, 3))
								      )
								   )
								));
								?>
							</div>
						</div>
					</div>
					<div class="row-fluid no-clear">
						<div class="span6 widget">
							<div class="widget-title">
								<i class="icon-group titleicon"></i>
								<p>Last Login user</p>
							</div>
							<div class="widget-content">
								<ul class="list-user">
									<li>
										<a href="#" class="user-img"><img src="user/face1.png" width="50px" alt="" /></a>
										<div class="user-info">
											<a href="#"><strong>Rahendra Putra</strong></a>
											<i class="user-occ">Chief Designer On Radicted Corporation</i>
											<i class="user-ll">Last sign in : 16:11 Feb 27th 2012</i>
										</div>
									</li>
									<li>
										<a href="#" class="user-img"><img src="user/face2.png" width="50px" alt="" /></a>
										<div class="user-info">
											<a href="#"><strong>Angger Dwi Purna</strong></a>
											<i class="user-occ">Chief Programmer On Script Corporation</i>
											<i class="user-ll">Last sign in : 16:11 Feb 27th 2012</i>
										</div>
									</li>
									<li>
										<a href="#" class="user-img"><img src="user/face3.png" width="50px" alt="" /></a>
										<div class="user-info">
											<a href="#"><strong>Avriqq Ramadhan</strong></a>
											<i class="user-occ">Chief Designer On Script Corporation</i>
											<i class="user-ll">Last sign in : 16:11 Feb 27th 2012</i>
										</div>
									</li>
								</ul>
							</div>
						</div>
					
						<div class="span6 widget">
							<div class="widget-title">
								<i class="icon-list-alt titleicon"></i>
								<p>Competency Summary</p>
							</div>
							<div class="widget-content">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Competency</th>
											<th>Value</th>
											<th>Changes</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Soft Competency</td>
											<td>82.3%</td>
											<td class="color-green"><i class="icon-circle-arrow-up"></i> 3.47%</td>
										</tr>
										<tr>
											<td>Hard Competency</td>
											<td>66.8%</td>
											<td class="color-red"><i class="icon-circle-arrow-down"></i> 20.47%</td>
										</tr>
										<tr>
											<td>Managerial Competency</td>
											<td>90.0%</td>
											<td class="color-green"><i class="icon-circle-arrow-up"></i>11.33%</td>
										</tr>
										<tr>
											<td>Production Competency</td>
											<td>72.3%</td>
											<td class="color-green"><i class="icon-circle-arrow-up"></i>7.33%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>