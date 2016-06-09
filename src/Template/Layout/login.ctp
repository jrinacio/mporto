<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- pagina de estilo css -->
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('modern-business.css') ?>
    <?= $this->Html->css('font-awesome/css/font-awesome.css') ?>
    <?= $this->Html->css('mporto.css') ?>
    
    <!-- javascript -->
    <?= $this->Html->script('jquery-2.1.3.min') ?>
    <?= $this->Html->script('bootstrap') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="bg-darkTeal">
    <div class="login-form">
        <?= $this->Flash->render('auth') ?>
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>

