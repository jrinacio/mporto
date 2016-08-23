<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Detalhe'), ['action' => 'edit', $detalhe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Detalhe'), ['action' => 'delete', $detalhe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalhe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Detalhes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalhe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="detalhes view large-9 medium-8 columns content">
    <h3><?= h($detalhe->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $detalhe->has('empresa') ? $this->Html->link($detalhe->empresa->nome, ['controller' => 'Empresas', 'action' => 'view', $detalhe->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($detalhe->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $detalhe->has('usuario') ? $this->Html->link($detalhe->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $detalhe->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($detalhe->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($detalhe->ativo) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($detalhe->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($detalhe->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($detalhe->descricao)); ?>
    </div>
</div>
