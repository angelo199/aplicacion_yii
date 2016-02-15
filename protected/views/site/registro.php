<?php 

	$form = $this->beginWidgets('CActiveForm', array(

		'method'=>'post',
		'id'=>'form',
		'enableClientValidation' => true,
		'enableAjaxValidation'=> true,

		));

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro del sistema</title>
</head>
<body>

	<div class="row">
		<?php 
		echo $form->label($model,'id');
		echo $form->textField($model,'id')
		?>
	</div>
	<div class="row">
		<?php 
		echo $form->label($model,'nombre');
		echo $form->textField($model,'nombre')
		?>
	</div>

	<div class="row">
		<?php 
		echo $form->label($model,'apellido');
		echo $form->textField($model,'apellido')
		?>
	</div>
	<div class="row">
		<?php 
		echo $form->label($model,'CI');
		echo $form->textField($model,'CI')
		?>
	</div>

	<?php echo CHtml::submitButton('enviar'); ?>

</body>
</html>

<?php $form->end();?>