
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro del sistema</title>
</head>
<body>
<div class="row">
	<?php 

		$form = $this->beginWidget('CActiveForm', array(

			'method'=>'post',
			'id'=>'form',
			'enableClientValidation' => true,
			'enableAjaxValidation'=> true,

			));

	?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?><br>
		<?php echo $form->textField($model,'id')?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'nombre'); ?><br>
		<?php echo $form->textField($model,'nombre') ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido'); ?><br>
		<?php echo $form->textField($model,'apellido') ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'CI'); ?><br>
		<?php echo $form->textField($model,'CI') ?>
	</div>

	<?php echo CHtml::submitButton('Enviar'); ?>

<?php $this->endWidget(); ?>

