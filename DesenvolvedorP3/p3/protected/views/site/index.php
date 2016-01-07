<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bem-vindo ao <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php if(!Yii::app()->user->isGuest){ ?>

<p>Cadastre novos funcionarios e Empresas utilizando o menu principal</p>

<?php }else{ ?>

<p> Acesse o nosso sistema de controle de Funcionarios e Empresa, basta utilizar sua autenticacao

<?php } ?>