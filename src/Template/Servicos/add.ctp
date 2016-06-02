<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Servicos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Arquivos'), ['controller' => 'Arquivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Arquivo'), ['controller' => 'Arquivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servicos form large-9 medium-8 columns content">
    <?= $this->Form->create($servico) ?>
    <fieldset>
        <legend><?= __('Add Servico') ?></legend>
        <?php
            echo $this->Form->input('nome', ['label' => 'Nome']);
            echo $this->Form->input('descricao', ['Descrição']);
//            echo $this->Form->input('usuario_id', ['options' => $usuarios, 'empty' => true]);
            echo $this->Form->input('categoria_id', [
                'options' => $categorias,
                'empty' => 'Selecione...']);
            $optAtivos = [0 => 'Não', 1 => 'Sim'];
            echo $this->Form->input('ativo', [
                'label' => 'Ativo',
                'options' => $optAtivos,
                'default' => 1
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
