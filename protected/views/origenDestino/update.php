<?php
/* @var $this OrigenDestinoController */
/* @var $model OrigenDestino */

$this->breadcrumbs=array(
	'Origen Destinos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrigenDestino', 'url'=>array('index')),
	array('label'=>'Create OrigenDestino', 'url'=>array('create')),
	array('label'=>'View OrigenDestino', 'url'=>array('view', 'id'=>$model->Id)),
	//array('label'=>'Manage OrigenDestino', 'url'=>array('admin')),
);
?>

<h1>Update OrigenDestino <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>