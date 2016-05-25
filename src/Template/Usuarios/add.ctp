<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Arquivos'), ['controller' => 'Arquivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Arquivo'), ['controller' => 'Arquivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Add Usuario') ?></legend>
        <?php
            echo $this->Form->input('nome', ['label' => 'Nome']);
            echo $this->Form->input('email', ['label' => 'E-mail']);
            echo $this->Form->input('senha', [
                'label' => 'Senha',
                'type' => 'password']);
            $optPerfis = [1 => 'Administrador', 2 => 'Padrão'];
            echo $this->Form->input('perfil', [
                'label' => 'Perfil',
                'options' => $optPerfis,
                'default' => 2]);
            $optAtivos = [1 => 'Sim', 0 => 'Não'];
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
