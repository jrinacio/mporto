<div class="row">
    <div class="col-md-12">

    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <ul>
                <li class="list-group-item"><?= $this->Html->link(__('Arquivos'), ['action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Usuários'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Serviços'), ['controller' => 'Servicos', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Serviço'), ['controller' => 'Servicos', 'action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-10 divisoria">
        <h1 class="page-header">
            <?= __('Arquivos') ?>
            <small>Adicionar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
            <li class="active">Adicionar arquivo</li>
        </ol>
        <div>
    <?= $this->Form->create($arquivo, ['id' => 'upload', 'type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Adicionar Arquivo') ?></legend>
        <?php
//            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
            echo $this->Form->input('evento_id', [
                'options' => $eventos,
                'empty' => 'Selecione um evento...']);
            echo $this->Form->input('servico_id', [
                'options' => $servicos,
                'empty' => 'Selecione um serviço...']);
            echo $this->Form->input('file', [
                'type' => 'file',
                'id' => 'file',
                'label' => 'Adicionar arquivo'
            ]);
            echo $this->Form->input('titulo', [
                'label' => 'Título',
                'placeholder' => 'Insira um título para imagem']);
            echo $this->Form->input('descricao', [
                'label' => 'Descrição',
                'placeholder' => 'Insira um descrição para a imagem...',
                'type' => 'textarea',
                'rows' => 2]);
            $atv = [0 => 'Não', 1 => 'Sim'];
            echo $this->Form->input('ativo', [
                'options' => $atv,
                'default' => 1,
                'class' => 'imputpequeno'
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->button(__('Limpar'), ['type' => 'reset']) ?>
    <?= $this->Form->end() ?>
</div>
    </div>
</div>


