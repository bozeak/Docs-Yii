<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'uid'); ?>
		<?php echo $form->textField($model,'uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rid'); ?>
		<?php echo $form->dropDownList($model,'rid', CHtml::listData(Roles::model()->findAll(), 'rid', 'rid_name'), array('empty'=>'--Alegeti--')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subdiv'); ?>
		<?php echo $form->dropDownList($model,'subdiv', CHtml::listData(Subdiv::model()->findAll(), 'id', 'name'), array('empty'=>'--Alegeti--')); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->