<?php $this->beginContent('//layouts/main'); ?>
<?php
////			$this->beginWidget('zii.widgets.CPortlet', array(
////				'title'=>'Operations',
////			));
//			$this->widget('zii.widgets.CMenu', array(
//				'items'=>$this->menu,
//				'htmlOptions'=>array('class'=>'operations'),
//			));
////			$this->endWidget();
//		?>
<div class="container">
	<div class="span-24">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
<!--	<div class="span-5 last">
		<div id="sidebar">-->
		
<!--		</div> sidebar 
	</div>-->
</div>
<?php $this->endContent(); ?>