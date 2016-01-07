<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Empresa', 'url'=>array('index')),
	array('label'=>'Gerenciar Empresa', 'url'=>array('admin')),
);
?>

<h1>Criar Empresa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>