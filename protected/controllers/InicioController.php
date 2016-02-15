<?php


class InicioController extends Controller
{
  
	public function actionInicio()
	{	$model = new RegistroForm;

		if (isset($_POST['RegistroForm'])) 
		{
			$model->attributes = $_POST['RegistroForm'];

			if ($model->validate()) 
			{
				$model->id = $_POST['RegistroForm']['id'];
				$model->nombre = $_POST['RegistroForm']['nombre'];
				$model->apellido = $_POST['RegistroForm']['apellido'];
				$model->CI = $_POST['RegistroForm']['CI'];
			}

		}

		$this->render('inicio', array('model'=>$model));
	}

	public function actionRegistro()
	{
		$this->render('registro');
	}

}