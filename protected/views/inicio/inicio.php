<?php 

	$form =$this->beginWidget('CActiveForm', array(
			'method'=>'post',
			'enableAjaxValidation'=>true,
		));

?>

<body>

	<div class="rows">
		<?php  
			echo $form->label($model, 'nombre');
			echo $form->textField($model, 'nombre')
		?>
	</div>

	<div class="rows">
		<?php  
			echo $form->label($model, 'apellido');
			echo $form->textField($model, 'apellido')
		?>
	</div>

	<div class="rows">
		<?php  
			echo $form->label($model, 'CI');
			echo $form->textField($model, 'CI')
		?>
	</div>

	<?php CHtml::submitButton('Enviar'); ?>

	<?php $this->endWidget(); ?>
</body>
