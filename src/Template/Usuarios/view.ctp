<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Arquivos'), ['controller' => 'Arquivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Arquivo'), ['controller' => 'Arquivos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('E-mail') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
<!--        <tr>
            <th>< ? = __('Senha') ?></th>
            <td>< ? = h($usuario->senha) ?></td>
        </tr>-->
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $usuario->ativo === 1 ? 'Sim' : 'Não' ?></td>
        </tr>
        <tr>
            <th><?= __('Data cadastro') ?></th>
            <td><?= h($usuario->created->I18nFormat('dd/MM/yyyy HH:mm')) ?></td>
        </tr>
        <tr>
            <th><?= __('Data alteração') ?></th>
            <td><?= h($usuario->modified->I18nFormat('dd/MM/yyyy HH:mm')) ?></td>
        </tr>
        <tr>
            <th><?= __('Perfil') ?></th>
            <td><?= $usuario->perfil === 1 ? __('Administrador') : __('Padrão'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Arquivos') ?></h4>
        <?php if (!empty($usuario->arquivos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Evento Id') ?></th>
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
            <?php foreach ($usuario->arquivos as $arquivos): ?>
            <tr>
                <td><?= h($arquivos->id) ?></td>
                <td><?= h($arquivos->usuario_id) ?></td>
                <td><?= h($arquivos->evento_id) ?></td>
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
    <div class="related">
        <h4><?= __('Related Categorias') ?></h4>
        <?php if (!empty($usuario->categorias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Ativo') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->categorias as $categorias): ?>
            <tr>
                <td><?= h($categorias->id) ?></td>
                <td><?= h($categorias->nome) ?></td>
                <td><?= h($categorias->descricao) ?></td>
                <td><?= h($categorias->usuario_id) ?></td>
                <td><?= h($categorias->ativo) ?></td>
                <td><?= h($categorias->created) ?></td>
                <td><?= h($categorias->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categorias', 'action' => 'view', $categorias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categorias', 'action' => 'edit', $categorias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categorias', 'action' => 'delete', $categorias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Eventos') ?></h4>
        <?php if (!empty($usuario->eventos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('DataEvento') ?></th>
                <th><?= __('Categoria Id') ?></th>
                <th><?= __('Ativo') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->eventos as $eventos): ?>
            <tr>
                <td><?= h($eventos->id) ?></td>
                <td><?= h($eventos->usuario_id) ?></td>
                <td><?= h($eventos->titulo) ?></td>
                <td><?= h($eventos->descricao) ?></td>
                <td><?= h($eventos->dataEvento) ?></td>
                <td><?= h($eventos->categoria_id) ?></td>
                <td><?= h($eventos->ativo) ?></td>
                <td><?= h($eventos->created) ?></td>
                <td><?= h($eventos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Eventos', 'action' => 'view', $eventos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Eventos', 'action' => 'edit', $eventos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Eventos', 'action' => 'delete', $eventos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
