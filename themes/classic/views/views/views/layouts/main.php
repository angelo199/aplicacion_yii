<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title> <?php echo $this->pageTitle; ?></title>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/materialize.min.css">
</head>
<body>

 <div class="navbar-fixed">
    <nav>

		<?php $this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array("class"=>"grey  nav-wrapper hide-on-med-and-down "),
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>

    </nav>
  </div>

  <div class="container">
  	<div class="row">
  	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
			
  	</div>
  </div>
        
 <?php endif?>

        <?php echo $content; ?>

      <footer class="page-footer grey">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>


<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/materialize.min.js"></script>
</body>
</html>