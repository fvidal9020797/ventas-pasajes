<?php
/* @var $this OrigenDestinoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Origen Destinos',
);

$this->menu=array(
	array('label'=>'Create OrigenDestino', 'url'=>array('create')),
	///array('label'=>'Manage OrigenDestino', 'url'=>array('admin')),
);
?>

<h1>Origen Destinos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
