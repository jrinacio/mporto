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
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
            echo $this->Form->input('evento_id', ['options' => $eventos]);
            echo $this->Form->input('servico_id', ['options' => $servicos]);
            echo $this->Form->input('name');
            echo $this->Form->input('titulo');
            echo $this->Form->input('size');
            echo $this->Form->input('type');
            echo $this->Form->input('dir');
            echo $this->Form->input('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
