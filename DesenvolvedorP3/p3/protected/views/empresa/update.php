<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Atualizar',
);

$this->menu=array(
	array('label'=>'Listar Empresa', 'url'=>array('index')),
	array('label'=>'Criar Empresa', 'url'=>array('create')),
	array('label'=>'Visualizar Empresa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar Empresa', 'url'=>array('admin')),
);
?>

<h1>Atualizar Empresa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>