<?php $this->layout = false ?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('bootstrap.css') ?>
        <?= $this->Html->css('modern-business.css') ?>
        <?= $this->Html->css('mporto.css') ?>
        <!-- Custom Fonts -->
        <?= $this->Html->css('font-awesome/css/font-awesome.css') ?>
        
        <!-- Javascript -->
        <?= $this->Html->script('jquery-2.1.3.min') ?>
        <?= $this->Html->script('bootstrap') ?>
        <?= $this->Html->script('mporto') ?>
    </head>
    <body>
        <?php // TODO substituir o menu por element ?>
        <!-- navigation -->
        <?= $this->element('navbar') ?>
                <!-- Header Carousel -->
        <header id="myCarousel" class="carousel slide">
            <?= $this->cell('Carousel') ?>
        </header>
        <div class="container">
            <!-- Cell Serviços -->
            <?= $this->cell('Servicos') ?>
            <!-- Cell Acervo/Portfólio -->
            <?= $this->cell('Portfolio') ?>
            <!-- Cell Empresas/Setores -->
            <?= $this->cell('Parceiros') ?>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?= $this->cell('Localizacao') ?>
                    </div>
                </div>
                <div class="row">
                    <hr>
                    <p>Copyright &copy; Cia. Docas do Estado de São Paulo </p>
                </div>
            </div>
        </footer>
    </body>
</html>

