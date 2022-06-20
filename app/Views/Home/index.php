<?= $this->extend('Layout/principal'); ?>

<!--Titulo para layout-->
<?= $this->section('titulo') ?>
<?php echo "| $titulo"; ?>
<?= $this->endSection() ?>


<!--Estilos para exportar -->
<?= $this->section('estilos') ?>

<?= $this->endSection() ?>

<!--Conteudo para exportar no layout-->
<?= $this->section('conteudo') ?>
<?php echo "Sistema"; ?>
<?= $this->endSection() ?>

<!--Scripts para layout-->
<?= $this->section('scripts') ?>

<?= $this->endSection() ?>