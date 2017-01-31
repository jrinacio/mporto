<?php
//    debug($contextos);
//    die();
//echo count($contextos['detalhes']);
//die();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col-md-12">
    <h1 class="page-header">
        <?= __('O Complexo Cultural') ?>
        
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Sobre</li>
    </ol>
</div>
<div class="row">
    <?php 
        for($i = 0; $i < count($contextos['detalhes']); $i++):
            if($i % 2 == 0):
                echo '<div class="col-md-6">';
                echo $this->Html->image('/imgs/arquivos/file/' . $contextos->arquivos[$i]['dir'] . '/portrait_' . $contextos->arquivos[$i]['name'], [
                        'class' => 'img-responsive img-hover',
                        'width' => '750',
                        'escape' => false
                ]);
                echo '</div>';
                echo '<div class="col-md-6">';
                echo html_entity_decode($contextos->detalhes[$i]['descricao']);
                echo '</div>';
                echo '<div class="col-md-12"><h1></h1></div>';
            else:
                echo '</div>';
                echo '<div class="col-md-6">';
                echo html_entity_decode($contextos->detalhes[$i]['descricao']);
                echo '</div>';
                echo '<div class="col-md-6">';
                echo $this->Html->image('/imgs/arquivos/file/' . $contextos->arquivos[$i]['dir'] . '/portrait_' . $contextos->arquivos[$i]['name'], [
                        'class' => 'img-responsive img-hover',
                        'width' => '750',
                        'escape' => false
                ]);
                echo '</div>';
                echo '<div class="col-md-12"><h1></h1></div>';
            endif;
        endfor;
    ?>
    <div class="row">
        <?php for($i; $i < count($contextos['arquivos']); $i++): ?>
            <div class="col-md-3">
                <?= $this->Html->image('/imgs/arquivos/file/' . $contextos->arquivos[$i]['dir'] . '/portrait_' . $contextos->arquivos[$i]['name'], [
                    'class' => 'img-responsive img-hover',
                    'width' => '270',
                    'escape' => false
                ]); ?>
            </div>
        <?php endfor; ?>
    </div>
</div>
<?= $this->cell('Equipe') ?>


