<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evento'), ['action' => 'edit', $evento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evento'), ['action' => 'delete', $evento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Arquivos'), ['controller' => 'Arquivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Arquivo'), ['controller' => 'Arquivos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventos view large-9 medium-8 columns content">
    <h3><?= h($evento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($evento->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Categoria') ?></th>
            <td><?= $evento->has('categoria') ? $this->Html->link($evento->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $evento->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $evento->has('usuario') ? $this->Html->link($evento->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $evento->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($evento->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($evento->ativo) ?></td>
        </tr>
        <tr>
            <th><?= __('DataEvento') ?></th>
            <td><?= h($evento->dataEvento) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($evento->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($evento->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($evento->descricao)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Arquivos') ?></h4>
        <?php if (!empty($evento->arquivos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Evento Id') ?></th>
                <th><?= __('Servico Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Size') ?></th>
                <th><?= __('Type') ?></th>
                <th><?= __('Dir') ?></th>
                <th><?= __('Ativo') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($evento->arquivos as $arquivos): ?>
            <tr>
                <td><?= h($arquivos->id) ?></td>
                <td><?= h($arquivos->usuario_id) ?></td>
                <td><?= h($arquivos->evento_id) ?></td>
                <td><?= h($arquivos->servico_id) ?></td>
                <td><?= h($arquivos->name) ?></td>
                <td><?= h($arquivos->titulo) ?></td>
                <td><?= h($arquivos->size) ?></td>
                <td><?= h($arquivos->type) ?></td>
                <td><?= h($arquivos->dir) ?></td>
                <td><?= h($arquivos->ativo) ?></td>
                <td><?= h($arquivos->created) ?></td>
                <td><?= h($arquivos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Arquivos', 'action' => 'view', $arquivos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Arquivos', 'action' => 'edit', $arquivos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Arquivos', 'action' => 'delete', $arquivos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arquivos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
