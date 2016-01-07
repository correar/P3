<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Funcionario', 'url'=>array('index')),
	array('label'=>'Gerenciar Funcionario', 'url'=>array('admin')),
);
?>

<h1>Criar Funcionario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
