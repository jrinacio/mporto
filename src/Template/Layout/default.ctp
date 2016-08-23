<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?= $cakeDescription ?>:
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
    <?= $this->Html->script('dist/wysihtml-toolbar') ?>
    <?= $this->Html->script('parser_rules/advanced_and_extended') ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?php
        // TODO implementar o menu 
        echo $this->element('navbar');
    ?>

    <div class="container">
        <div class="row">
             <!--$this->fetch('title')--> 
            <?= $this->Flash->render() ?>
        </div>
        <?= $this->fetch('content') ?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="rodape">
                        <hr>
                        <p>Copyright &copy; Cia. Docas do Estado de São Paulo </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>
