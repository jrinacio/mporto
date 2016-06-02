<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Arquivos'), ['controller' => 'Arquivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Arquivo'), ['controller' => 'Arquivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventos index large-9 medium-8 columns content">
    <h3><?= __('Eventos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('categoria_id') ?></th>
                <th><?= $this->Paginator->sort('dataEvento') ?></th>
                <th><?= $this->Paginator->sort('ativo') ?></th>
                <th><?= $this->Paginator->sort('usuario_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventos as $evento): ?>
            <tr>
                <td><?= $this->Number->format($evento->id) ?></td>
                <td><?= h($evento->titulo) ?></td>
                <td><?= $evento->has('categoria') ? $this->Html->link($evento->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $evento->categoria->id]) : '' ?></td>
                <td><?= h($evento->dataEvento) ?></td>
                <td><?= $this->Number->format($evento->ativo) ?></td>
                <td><?= $evento->has('usuario') ? $this->Html->link($evento->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $evento->usuario->id]) : '' ?></td>
                <td><?= h($evento->created) ?></td>
                <td><?= h($evento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
