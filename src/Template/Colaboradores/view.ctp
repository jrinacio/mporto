<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Colaboradore'), ['action' => 'edit', $colaboradore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Colaboradore'), ['action' => 'delete', $colaboradore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colaboradore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Colaboradores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Colaboradore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="colaboradores view large-9 medium-8 columns content">
    <h3><?= h($colaboradore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($colaboradore->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Link') ?></th>
            <td><?= h($colaboradore->link) ?></td>
        </tr>
        <tr>
            <th><?= __('Contato') ?></th>
            <td><?= h($colaboradore->contato) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($colaboradore->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Fone') ?></th>
            <td><?= h($colaboradore->fone) ?></td>
        </tr>
        <tr>
            <th><?= __('Dir') ?></th>
            <td><?= h($colaboradore->dir) ?></td>
        </tr>
        <tr>
            <th><?= __('File') ?></th>
            <td><?= h($colaboradore->file) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $colaboradore->has('usuario') ? $this->Html->link($colaboradore->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $colaboradore->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($colaboradore->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($colaboradore->ativo) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($colaboradore->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($colaboradore->modified) ?></td>
        </tr>
    </table>
</div>
