<?php
/* @var $this OrigenDestinoController */
/* @var $model OrigenDestino */

$this->breadcrumbs=array(
	'Origen Destinos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrigenDestino', 'url'=>array('index')),
	//array('label'=>'Manage OrigenDestino', 'url'=>array('admin')),
);
?>

<h1>Create OrigenDestino</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>