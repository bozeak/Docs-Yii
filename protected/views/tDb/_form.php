<div class="form">

<?php
$form = $this->beginWidget('CActiveForm', array (
	'id' => 'tdb-form',
	'enableAjaxValidation' => false,

	
));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'subdiv'); ?>
		<?php
			echo $form->dropDownList($model,'subdiv',CHtml::listData(Subdiv::model()->findAll(),'id','name'),
                        array(
                                'prompt'=>'Alegeti ceva',
                                'ajax'=> array( 
                                'type' => 'POST',
                                'url'=>CController::createUrl('tDb/Dynamicresp'),
                                'update'=>'#'.CHtml::activeId($model,'responsabil'), 
                                )    
                        )   
                    );
			
		?>
		<?php echo $form->error($model,'subdiv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nr_reg'); ?>
		<?php echo $form->textField($model,'nr_reg',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'nr_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_reg'); ?>
		<?php		
		$this->widget('zii.widgets.jui.CJuiDatePicker', array (
			'name' => 'date_reg',
                        //'value' => $model->date_reg,
                        'attribute'=> 'date_reg',
                        'model'=>$model,
			// additional javascript options for the date picker plugin
			'options' => array (
				'showAnim' => 'fold',
				'dateFormat' => 'yy-mm-dd',			
			),
			'htmlOptions' => array (
				'style' => 'height:20px;'
			),
			
		));
		?>		
		<?php echo $form->error($model,'date_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_doc'); ?>
		<?php		
		$this->widget('zii.widgets.jui.CJuiDatePicker', array (
			'name' => 'date_doc',
                        //'value' => $model->date_doc,
                        'attribute'=> 'date_doc',
                        'model'=>$model,
			// additional javascript options for the date picker plugin
			'options' => array (
				'showAnim' => 'fold',
				'dateFormat' => 'yy-mm-dd',
				
			),
			'htmlOptions' => array (
				'style' => 'height:20px;'
			),
			
		));
		?>
		<?php echo $form->error($model,'date_doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'elab'); ?>
		<?php echo $form->textField($model,'elab',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'elab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_elab'); ?>
		<?php echo $form->textField($model,'id_elab',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'id_elab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nr_cadastr'); ?>
		<?php echo $form->textField($model,'nr_cadastr',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nr_cadastr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsabil'); ?>
		<?php //empty since it will be filled by the other dropdown
			//echo CHtml :: dropDownList('responsabil', $model->responsabil, CHtml::listData(Responsabil::model()->findAll(),'id','fullname'));
			//echo $form->dropDownList($model, 'responsabil',/* ($model->isNewRecord) ?  array() : CHtml::listData(Responsabil::model()->findAll(), 'id', 'fullname')*/array());
			echo $form->DropDownList($model,'responsabil',CHtml::listData(Responsabil::model()->findAllByAttributes(array('subdiv'=>$model->subdiv)),'id','fullname'));
		?>
		<?php echo $form->error($model,'responsabil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'get_exec'); ?>
		<?php		
		$this->widget('zii.widgets.jui.CJuiDatePicker', array (
			'name' => 'get_exec',
                        //'value' => $model->get_exec,
                        'attribute'=> 'get_exec',
                        'model'=>$model,
			// additional javascript options for the date picker plugin
			'options' => array (
				'showAnim' => 'fold',
				'dateFormat' => 'yy-mm-dd',
				
			),
			'htmlOptions' => array (
				'style' => 'height:20px;'
			),
			
		));
		?>
		<?php echo $form->error($model,'get_exec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nr_respons'); ?>
		<?php echo $form->textField($model,'nr_respons',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nr_respons'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_respons'); ?>
		<?php		
		$this->widget('zii.widgets.jui.CJuiDatePicker', array (
			'name' => 'date_respons',
                        //'value' => $model->date_respons,
                        'attribute'=> 'date_respons',
                        'model'=>$model,
			// additional javascript options for the date picker plugin
			'options' => array (
				'showAnim' => 'fold',
				'dateFormat' => 'yy-mm-dd',
				
			),
			'htmlOptions' => array (
				'style' => 'height:20px;'
			),
			
		));
		?>
		<?php echo $form->error($model,'date_respons'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'respons_type'); ?>
		<?php echo $form->dropDownList($model,'respons_type', CHtml::listData(Tipraspuns::model()->findAll(), 'id', 'name'), array('empty'=>'--Alegeti--')); ?>
		<?php echo $form->error($model,'respons_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dossier'); ?>
		<?php echo $form->textField($model,'dossier',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dossier'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->