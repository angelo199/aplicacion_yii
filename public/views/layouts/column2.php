<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="row">
		<?php 

	$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));

		?>
	</div>

	<div class="row">

		<?php echo $content; ?>
		
	</div>

</div>

<?php $this->endContent(); ?>