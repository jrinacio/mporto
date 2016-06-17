<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $colaboradore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $colaboradore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Colaboradores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="colaboradores form large-9 medium-8 columns content">
    <?= $this->Form->create($colaboradore) ?>
    <fieldset>
        <legend><?= __('Edit Colaboradore') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('link');
            echo $this->Form->input('contato');
            echo $this->Form->input('email');
            echo $this->Form->input('fone');
            echo $this->Form->input('dir');
            echo $this->Form->input('file');
            echo $this->Form->input('ativo');
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
