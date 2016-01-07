<?php
/* @var $this FuncionarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Funcionarios',
);

$this->menu=array(
	array('label'=>'Cadastrar Funcionario', 'url'=>array('create')),
	array('label'=>'Gerenciar Funcionario', 'url'=>array('admin')),
);
?>

<h1>Funcionarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));
 ?>
