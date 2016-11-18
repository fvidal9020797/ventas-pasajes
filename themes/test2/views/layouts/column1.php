<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="row-fluid">
		<div class="span12">
		<div class="span12" style="margin-left: 600px; position: absolute;">
			<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
		?>
		</div>
	<?php echo $content; ?>
	
		</div>
		
</div><!-- content -->

<?php $this->endContent(); ?>