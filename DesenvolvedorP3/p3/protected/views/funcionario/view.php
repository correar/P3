<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Funcionario', 'url'=>array('index')),
	array('label'=>'Criar Funcionario', 'url'=>array('create')),
	array('label'=>'Atualizar Funcionario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover Funcionario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Funcionario', 'url'=>array('admin')),
);
?>

<h1>Visualizar Funcionario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome_funcionario',
		'login',
		'senha',
		'id_empresa',
	),
)); ?>
