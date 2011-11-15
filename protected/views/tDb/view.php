<?php
$this->breadcrumbs=array(
	'Tdbs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TDb', 'url'=>array('index')),
	array('label'=>'Create TDb', 'url'=>array('create')),
	array('label'=>'Update TDb', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TDb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TDb', 'url'=>array('admin')),
);
?>

<h1>View TDb #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
		'name'=>'subdiv',
		'value'=>$model->subdiv2->name,
		),
		'nr_reg',
		'date_reg',
		'date_doc',
		'elab',
		'id_elab',
		'address',
		'nr_cadastr',
		'tel',
		'content',
		array(
		'name'=>'responsabil',
		'value'=>$model->resp->fullname,
		),
		'get_exec',
		'nr_respons',
		'date_respons',
		array(
		'name'=>'respons_type',
		'value'=>$model->tipraspuns->name,
		),
		'note',
		'dossier',
		array(
		'name'=>'author',
		'value'=>$model->autor->login,
		),
	),
)); ?>
