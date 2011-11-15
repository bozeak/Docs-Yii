<?php
$this->breadcrumbs=array(
	'Responsabils',
);

$this->menu=array(
	array('label'=>'Create Responsabil', 'url'=>array('create')),
	array('label'=>'Manage Responsabil', 'url'=>array('admin')),
);
?>

<h1>Responsabils</h1>

<?php
// $this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); 
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'users-grid',
	'dataProvider'=>$dataProvider,
	'columns' => array(
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
		),
			 'fullname',
			 array(
			 	'name' => 'grad',
			 	'value' => '$data->grad0->md',
			 ),	
			 array(
			 	'name' => 'subdiv',
			 	'value' => '$data->subdiv1->name',
			 ),	
			 'contacts',
	),
)); ?>