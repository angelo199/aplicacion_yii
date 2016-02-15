<?php

class RegistroForm extends CFormModel
{

public $id;
public $nombre;
public $apellido;
public $CI;


	public function rules()
	{
		return array(

			array('id','required','message'=>'campo id requerido'),
			array('nombre','required','message'=>'campo nombre requerido'),
			array('apellido','required','message'=>'campo apellido requerido'),
			array('CI','required','message'=>'campo CI requerido')

			);
	}


}