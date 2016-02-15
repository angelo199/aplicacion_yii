
<!DOCTYPE html>
<html>

<body>
<?php 
$form=$this->beginWidget('CActiveForm', array(
        'id'=>'top-websites-cr-form',
        'enableAjaxValidation'=>true,
        
)); 
?>

 <div class="row">
        <?php echo CHtml::activeLabel($model,'username'); ?>
        <?php echo CHtml::activeTextField($model,'username') ?>
    </div>

     <div class="row">
        <?php echo CHtml::activeLabel($model,'username'); ?>
        <?php echo CHtml::activeTextField($model,'username') ?>
    </div>


<?php $this->endWidgets(); ?>

</body>
</html>