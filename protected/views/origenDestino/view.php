<?php
/* @var $this OrigenDestinoController */
/* @var $model OrigenDestino */

$this->breadcrumbs=array(
	'Origen Destinos'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List OrigenDestino', 'url'=>array('index')),
	array('label'=>'Create OrigenDestino', 'url'=>array('create')),
	array('label'=>'Update OrigenDestino', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete OrigenDestino', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage OrigenDestino', 'url'=>array('admin')),
);
?>

<h1>View OrigenDestino #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nombre',
	),
)); ?>
