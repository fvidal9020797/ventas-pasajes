<?php
/* @var $this BoletoController */
/* @var $data Boleto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nro_asiento')); ?>:</b>
	<?php echo CHtml::encode($data->Nro_asiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('origen')); ?>:</b>
	<?php echo CHtml::encode($data->origen0->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destino')); ?>:</b>
	<?php echo CHtml::encode($data->destino0->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_salida')); ?>:</b>
	<?php echo CHtml::encode($data->hora_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_llegada')); ?>:</b>
	<?php echo CHtml::encode($data->hora_llegada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_admin')); ?>:</b>
	<?php echo CHtml::encode($data->Administrador->nombre); ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->Cliente->nombres); ?>
	<br />


</div>