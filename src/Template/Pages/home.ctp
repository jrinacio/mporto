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
        <!-- Custom Fonts -->
        <?= $this->Html->css('font-awesome/css/font-awesome.css') ?>
        <?= $this->Html->script('mporto.css') ?>
        <!-- Javascript -->
        <?= $this->Html->script('jquery-2.1.3.min') ?>
        <?= $this->Html->script('bootstrap.min') ?>
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
            
        </div>
        <script>
            $('.carousel').carousel({
                interval: 5000
            })
        </script>
    </body>
</html>

