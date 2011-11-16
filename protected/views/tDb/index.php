<?php
$this->pageTitle=Yii::app()->name . ' - Documente intrate';
$this->breadcrumbs=array(
	'Tdbs',
);

$this->menu=array(
	array('label'=>'Create TDb', 'url'=>array('create')),
	array('label'=>'Manage TDb', 'url'=>array('admin')),
);
?>

<h1>Registrul documentelor</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tdb-grid',
        'dataProvider'=>$dataProvider,
        'enableSorting'=>false,
	'columns'=>array(
		array('name'=>'id','value'=>'$data->id','htmlOptions'=>array('style'=>'width:30px',),),
                array(
                   // 'name'=>$data[nr_reg]." ".$data[date_reg],
                    'name'=>'Nr şi data inregistrarii',
                    'value'=>'nl2br($data->nr_reg)."<br>".nl2br($data->date_reg)',
                    'type'=>'raw',
                    'htmlOptions'=>array(
                        'style'=>'width: 120px',
                    ),
                ),

                array('name'=>'elab','value'=>'$data->elab','htmlOptions'=>array('style'=>'width:120px',),),
//                array(
//                    'name'=>'respons_type',
//                    'value'=>'$data->tipraspuns->name',
//                    'type'=>'raw',
//                    'htmlOptions'=>array(
//                        'style'=>'width: 120px',
//                    ),
//                ),
                array(
                    'name'=>'responsabil',
                    'value'=>'nl2br($data->resp->grad0->md)." ".nl2br($data->resp->fullname)."<br>".nl2br($data->resp->contacts)',
                    'type'=>'raw',
                    'htmlOptions'=>array(
                        'style'=>'width: 140px',
                    ),
                ),
		/*
		'id_elab',
		'address',
		'nr_cadastr',
		'tel',
		'content',
		'responsabil',
		'get_exec',
		'nr_respons',
		'date_respons',
		'respons_type',
		'note',
		'dossier',
		'author',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
));?>


