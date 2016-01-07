<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Empresa', 'url'=>array('index')),
	array('label'=>'Criar Empresa', 'url'=>array('create')),
	array('label'=>'Atualizar Empresa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Remover Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar Empresa', 'url'=>array('admin')),
);
?>

<h1>Visualizar Empresa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome_empresa',
	),
)); ?>
