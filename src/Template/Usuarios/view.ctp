<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Usuários') ?>
            <small>Detalhe</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
            <li class="active">Detalhe do usuário</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <ul class="side-nav">
                <li class="list-group-item"><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
                <li class="list-group-item"><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List Arquivos'), ['controller' => 'Arquivos', 'action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New Arquivo'), ['controller' => 'Arquivos', 'action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?> </li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div class="table-responsive">
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
        </div>
    
        <?php if (!empty($usuario->categorias)): ?>
        <hr>
        <h4><?= __('Relação de categorias') ?></h4>
        <div class="table-responsive">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('ID') ?></th>
                    <th><?= __('Nome') ?></th>
                    <th><?= __('Descrição') ?></th>
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
        </div>
        <?php endif; ?>
        <?php if(!empty($usuario->eventos)): ?>
            <hr>
            <h4><?= __('Relação de eventos') ?></h4>
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
                    </thead>
                    <tbody>
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
            </div>
        <?php endif; ?>
        <?php if(!empty($usuario->servicos)): ?>
            <hr>
            <h4><?= __('Relação de serviços') ?></h4>
            <div class="table-responsive">
                <table class="table table-hover tablenoborder">
                    <thead>
                        <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Descrição') ?></th>
                            <th><?= __('Categoria Id') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuario->servicos as $servicos): ?>
                            <tr>
                                <td><?= h($servicos->id) ?></td>
                                <td><?= h($servicos->usuario_id) ?></td>
                                <td><?= h($servicos->nome) ?></td>
                                <td><?= h($servicos->descricao) ?></td>
                                <td><?= h($servicos->categoria_id) ?></td>
                                <td><?= h($servicos->ativo) ?></td>
                                <td><?= h($servicos->created) ?></td>
                                <td><?= h($servicos->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Servicos', 'action' => 'view', $servicos->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Servicos', 'action' => 'edit', $servicos->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Servicos', 'action' => 'delete', $servicos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicos->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

