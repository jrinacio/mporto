<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $detalhe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $detalhe->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Detalhes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="detalhes form large-9 medium-8 columns content">
    <?= $this->Form->create($detalhe) ?>
    <fieldset>
        <legend><?= __('Edit Detalhe') ?></legend>
        <?php
            echo $this->Form->input('empresa_id', ['options' => $empresas, 'empty' => true]);
            echo $this->Form->input('titulo');
            echo $this->Form->input('descricao');
            echo $this->Form->input('usuario_id', ['options' => $usuarios, 'empty' => true]);
            echo $this->Form->input('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
