<?php
/* @var $this BoletoController */
/* @var $model Boleto */

$this->breadcrumbs=array(
	'Boletos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Boleto', 'url'=>array('index')),
	array('label'=>'Create Boleto', 'url'=>array('create')),
	array('label'=>'Update Boleto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Boleto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Boleto', 'url'=>array('admin')),
);
?>

<h1>View Boleto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Nro_asiento',
		'origen',
		'destino',
		'hora_salida',
		'hora_llegada',
		'id_admin',
		'id_cliente',
		
	),
)); ?>
