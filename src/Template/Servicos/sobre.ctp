<?php
//    debug($pagsobre);
//    debug($detalhes);

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

    <div class="col-md-6">
        <?= $this->Html->image('/imgs/arquivos/file/' . $pagsobre->arquivos[0]['dir'] . '/portrait_' . $pagsobre->arquivos[0]['name'], [
            'class' => 'img-responsive img-hover',
            'width' => '750',
            'escape' => false
        ]) ?>
    </div>
    <div class="col-md-6">
        <?=     html_entity_decode($detalhes->descricao); ?>
    </div>



