<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Atualizar',
);

$this->menu=array(
	array('label'=>'Listar Funcionario', 'url'=>array('index')),
	array('label'=>'Criar Funcionario', 'url'=>array('create')),
	array('label'=>'Visualizar Funcionario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Funcionario', 'url'=>array('admin')),
);
?>

<h1>Atualizar Funcionario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>