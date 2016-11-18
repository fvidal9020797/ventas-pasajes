<?php
/* @var $this BoletoController */
/* @var $model Boleto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'boleto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nro_asiento'); ?>
		<?php echo $form->textField($model,'Nro_asiento'); ?>
		<?php echo $form->error($model,'Nro_asiento'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'origen'); ?>
		<?php echo $form->dropDownList($model,'origen',CHtml::listData(OrigenDestino::model()->findAll(),'Id','Nombre'),array('empty'=>'Seleccione origen')); ?>
		<?php echo $form->error($model,'origen'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'destino'); ?>
		<?php echo $form->dropDownList($model,'destino',CHtml::listData(OrigenDestino::model()->findAll(),'Id','Nombre'),array('empty'=>'Seleccione destino')); ?>
		<?php echo $form->error($model,'destino'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'hora_salida'); ?>
		<?php echo $form->textField($model,'hora_salida'); ?>
		<?php echo $form->error($model,'hora_salida'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'hora_llegada'); ?>
		<?php echo $form->textField($model,'hora_llegada'); ?>
		<?php echo $form->error($model,'hora_llegada'); ?>
	</div>
	<!--<div class="row">
		<?php// echo $form->labelEx($model,'id_admin'); ?>
		<?php //echo $form->textField($model,'id_admin'); ?>
		<?php //echo $form->error($model,'id_admin'); ?>
	</div>-->
	<div class="row">
		<?php echo $form->labelEx($model,'id_cliente'); ?>
		<?php echo $form->dropDownList($model,'id_cliente',CHtml::listData(Cliente::model()->findAll(),'id','nombres'),array('empty'=>'Seleccione Cliente')); ?>
		<?php echo $form->error($model,'id_cliente'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->