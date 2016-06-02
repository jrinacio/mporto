<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Arquivo'), ['action' => 'edit', $arquivo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Arquivo'), ['action' => 'delete', $arquivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arquivo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Arquivos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Arquivo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Servicos'), ['controller' => 'Servicos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servico'), ['controller' => 'Servicos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="arquivos view large-9 medium-8 columns content">
    <h3><?= h($arquivo->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $arquivo->has('usuario') ? $this->Html->link($arquivo->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $arquivo->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Evento') ?></th>
            <td><?= $arquivo->has('evento') ? $this->Html->link($arquivo->evento->id, ['controller' => 'Eventos', 'action' => 'view', $arquivo->evento->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Servico') ?></th>
            <td><?= $arquivo->has('servico') ? $this->Html->link($arquivo->servico->id, ['controller' => 'Servicos', 'action' => 'view', $arquivo->servico->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($arquivo->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($arquivo->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($arquivo->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Dir') ?></th>
            <td><?= h($arquivo->dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($arquivo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Size') ?></th>
            <td><?= $this->Number->format($arquivo->size) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($arquivo->ativo) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($arquivo->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($arquivo->modified) ?></td>
        </tr>
    </table>
</div>
