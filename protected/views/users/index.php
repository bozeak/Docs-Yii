<?php
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php
/* 
 * $this->widget('zii.widgets.CListView', array(
*	'dataProvider'=>$dataProvider,
*	'itemView'=>'_view',
*));
*/ ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'users-grid',
	'dataProvider'=>$dataProvider,
	'columns' => array(
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
		),
			 'login',
			 array(
			 	'name' => 'rid',
			 	'value' => '$data->role->rid_name',
			 ),	
			 array(
			 	'name' => 'subdiv',
			 	'value' => '$data->subdiv0->name',
			 ),	
	),
)); ?>
