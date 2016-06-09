<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Arquivos') ?>
            <small>Editar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
            <li class="active">Editar dados da imagem<li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <ul>
                <li class="list-group-item"><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $arquivo->id],
                        ['confirm' => __('Você tem certeza que deseja excluir o arquivo # {0}?', $arquivo->id)]
                    )
                ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Arquivos'), ['action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Servicos'), ['controller' => 'Servicos', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Servico'), ['controller' => 'Servicos', 'action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div>
            <h3><?= __('Editar arquivo') ?></h3>
        </div>
        <?= $this->Form->create($arquivo) ?>
        
        <?= $this->Form->input('evento_id', [
                'options' => $eventos,
                'empty' => 'Selecione um serviço...']) ?>
        <?= $this->Form->input('servico_id', [
            'options' => $servicos,
            'empty' => 'Selecione um serviço...']) ?>
        
        <?php
            echo $this->Form->input('name', [
                'label' => 'Nome do arquivo',
                'disabled' => 'disabled']);
            echo $this->Form->input('titulo', ['label' => 'Título']);
            echo $this->Form->input('descricao', ['label' => 'Descrição']);
            $atv = [0 => 'Não', 1 => 'Sim'];
            echo $this->Form->input('ativo', ['options' => $atv]);
        ?>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>


