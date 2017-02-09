<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col-md-12">
    <h1 class="page-header">
        <?= __('Contato') ?>
        <small>Localização e Fale conosco</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Contato</li>
    </ol>
</div>

<div class="col-md-8">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.10690670346!2d-46.31387158453164!3d-23.956659484488114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce03ba575156cf%3A0x52697c7cee8f44db!2sAv.+Conselheiro+Rodrigues+Alves%2C+86+-+Estu%C3%A1rio%2C+Santos+-+SP!5e0!3m2!1spt-BR!2sbr!4v1486556225657" 
            width="750" 
            height="400" 
            frameborder="0" 
            style="border:0" 
        allowfullscreen>
    </iframe>
</div>
<div class="col-md-4">
    <h3>Informações</h3>
    <?php foreach ($empresa['enderecos'] as $endereco): ?>
        <p>
            <?= $endereco->logradouro . ', ' . $endereco->numero ?><br>
            <?= $endereco->bairro . ', ' . $endereco->cidade . ' - ' . $endereco->estado ?><br>
            <?= 'CEP: ' . $endereco->cep ?>
        </p>
        <p>
            <i class="fa fa-phone"></i>
            <abbr title="Telefone">T</abbr>&nbsp;<?= $empresa->telefone ?>
        </p>
        <p>
            <i class="fa fa-envelope-o"></i>
            <abbr title="Email">E</abbr>:
            <?= $empresa->email ?>
        </p>
        <p>
            <i class="fa fa-clock-o"></i>
            <abbr title="Horário funcionamento">H</abbr>: Segunda - Sexta das 9:00 às 17:30  
        </p>
    <?php endforeach; ?>
</div>
<div class="col-md-8">
    <h3>Envie uma mensagem </h3>
    <?= $this->Form->create() ?>
    
    <div class="col-xs-8">
        <?= $this->Form->input('nome', [
                'type' => 'text',
                'id' => 'nome',
                'required' => true,
                'placeholder' => 'Informe seu nome...',
                'label' => 'Nome Completo'
            ]) ?>
    </div>
    <div class="col-xs-4">
        <?= $this->Form->input('telefone', [
            'type' => 'text',
            'id' => 'telefone',
            'required' => true,
            'placeholder' => 'Informe o telefone p/ contato...',
            'label' => 'Telefone'
        ]) ?>
    </div>
    <div class="col-xs-8">
        <?= $this->Form->input('email', [
            'type' => 'email',
            'id' => 'email',
            'required' => true,
            'placeholder' => 'Informe um e-mail no formato válido...',
            'label' => 'E-mail'
        ]) ?>
    </div>
    <div class="col-xs-4">
        <?php $options = ['Elogio', 'Informação', 'Reclamação', 'Sugestão'] ?>
        <?= $this->Form->input('assunto', [
            'type' => 'select',
            'required' => true,
            'options' => $options,
            'empty' => 'Qual o assunto do e-mail ?',
            'label' => 'Assunto',
        ]) ?>
    </div>
    <div class="col-xs-12">
        <?= $this->Form->input('mensagem', [
            'type' => 'textarea',
            'rows' => '4',
            'required' => true,
            'id' => 'mensagem',
            'label' => 'Mensagem'
        ]) ?>
    </div>
    <div class="col-xs-12">
        <?= $this->Form->button(__('Enviar')) ?>
        <?= $this->Form->button(__('Limpar'), ['type' => 'reset']) ?>
        <?= $this->Form->end() ?>
    </div>
    
</div>
    




