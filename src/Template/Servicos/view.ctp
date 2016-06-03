
<div class="row">
    <div class="col-md-3">
        <nav>
            <ul class="side-nav">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('Edit Servico'), ['action' => 'edit', $servico->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete Servico'), ['action' => 'delete', $servico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servico->id)]) ?> </li>
                <li><?= $this->Html->link(__('List Servicos'), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Servico'), ['action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('List Arquivos'), ['controller' => 'Arquivos', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Arquivo'), ['controller' => 'Arquivos', 'action' => 'add']) ?> </li>
            </ul>
        </nav>
    </div>
    <div class="col-md-9">
        <div class="row">
            <h3><?= h($servico->id) ?></h3>
            <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($servico->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($servico->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $servico->has('usuario') ? $this->Html->link($servico->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $servico->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Categoria') ?></th>
            <td><?= $servico->has('categoria') ? $this->Html->link($servico->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $servico->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($servico->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($servico->ativo) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($servico->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($servico->modified) ?></td>
        </tr>
    </table>
    </div>
        <hr>
        <div class="row">
    <?= $this->Form->create(null, [
            'id' => 'upload', 
            'type' => 'file',
            'url' => ['controller' => 'Arquivos', 'action' => 'adicionar']
    ]) ?>

        <h3><?= __('Add Arquivo') ?></h3>
        <?php
            echo $this->Form->hidden('servico_id', ['value' => $servico->id]);
            echo $this->Form->input('file', [
                'type' => 'file',
                'id' => 'file',
                'label' => 'Adicionar arquivo'
            ]);
            echo $this->Form->input('titulo', ['label' => 'Título']);
            echo $this->Form->input('ativo');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
    <hr>
    <div class="related">
        <h4><?= __('Related Arquivos') ?></h4>
        <?php if (!empty($servico->arquivos)): ?>
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
            <?php foreach ($servico->arquivos as $arquivos): ?>
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
    
</div>


