<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $arquivo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $arquivo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Arquivos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Servicos'), ['controller' => 'Servicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servico'), ['controller' => 'Servicos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="arquivos form large-9 medium-8 columns content">
    <?= $this->Form->create($arquivo) ?>
    <fieldset>
        <legend><?= __('Edit Arquivo') ?></legend>
        <?php
            echo $this->Form->input('usuario_id', [
                'options' => $usuarios,
                'disabled' => 'disabled']);
            echo $this->Form->input('evento_id', ['options' => $eventos]);
            echo $this->Form->input('servico_id', ['options' => $servicos]);
            echo $this->Form->input('name', ['disabled' => 'disabled']);
            echo $this->Form->input('titulo');
            echo $this->Form->input('descricao', ['label' => 'Descrição']);
//            echo $this->Form->input('size', ['disabled' => 'disabled']);
//            echo $this->Form->input('type', ['disabled' => 'disabled']);
//            echo $this->Form->input('dir', ['disabled' => 'disabled']);
            $atv = [0 => 'Não', 1 => 'Sim'];
            echo $this->Form->input('ativo', ['options' => $atv]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
