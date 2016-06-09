<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Categoria') ?>
            <small>Detalhe</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
            <li class="active">Detalhe da categoria</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <ul class="side-nav">
                <li class="list-group-item"><?= $this->Html->link(__('Editar Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
                <li class="list-group-item"><?= $this->Form->postLink(__('Exclir Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Listar Categorias'), ['action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Nova Categoria'), ['action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Listar Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Listar Serviços'), ['controller' => 'Servicos', 'action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Serviço'), ['controller' => 'Servicos', 'action' => 'add']) ?> </li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table tablenoborder">
                <tr>
                    <th class="col-md-2"><?= __('ID') ?></th>
                    <td class="col-md-7"><?= $this->Number->format($categoria->id) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Nome') ?></th>
                    <td class="col-md-7"><?= h($categoria->nome) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Descrição') ?></th>
                    <td class="col-md-7"><?= h($categoria->descricao) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Usuário') ?></th>
                    <td class="col-md-7"><?= $categoria->has('usuario') ? $this->Html->link($categoria->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $categoria->usuario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Ativo') ?></th>
                    <td class="col-md-7"><?= $this->Number->format($categoria->ativo) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Cadastro') ?></th>
                    <td class="col-md-7"><?= h($categoria->created) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Alteração') ?></th>
                    <td class="col-md-7"><?= h($categoria->modified) ?></td>
                </tr>
            </table>
        </div>
        <?php if (!empty($categoria->eventos)): ?>
            <hr>
            <h4><?= __('Relação de Eventos') ?></h4>
            <div class="table-responsive">
                <table class="table table-hover tablenoborder">
                    <thead>
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
                    <thead>
                    <?php foreach ($categoria->eventos as $eventos): ?>
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
            </div>
        <?php endif; ?>
        <?php if (!empty($categoria->servicos)): ?>
            <hr>
            <h4><?= __('Relação de Serviços') ?></h4>
            <div class="table-responsive">
                <table class="table table-hover tablenoborder">
                    <thead> 
                        <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Descrição') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categoria->servicos as $servicos): ?>
                        <tr>
                            <td><?= h($servicos->id) ?></td>
                            <td><?= h($servicos->nome) ?></td>
                            <td><?= h($servicos->descricao) ?></td>
                            <td><?= h($servicos->ativo) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Servicos', 'action' => 'view', $servicos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Servicos', 'action' => 'edit', $servicos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Servicos', 'action' => 'delete', $servicos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

