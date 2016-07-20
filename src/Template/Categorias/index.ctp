<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Categorias') ?>
            <small>Listagem</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
            <li class="active">Lista de categorias</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-list"></i>&nbsp;Categorias</a></li>
                <li><?= $this->Html->link(__('Nova Categoria'), ['action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('Listar Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('Listar Serviços'), ['controller' => 'Servicos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo Serviço'), ['controller' => 'Servicos', 'action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                        <th><?= $this->Paginator->sort('nome', 'Nome') ?></th>
                        <th><?= $this->Paginator->sort('descricao', 'Descrição') ?></th>
                        <th><?= $this->Paginator->sort('ativo', 'Ativo') ?></th>
                        <th class="actions"><?= __('Ações') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categorias as $categoria): ?>
                        <tr>
                            <td><?= $this->Number->format($categoria->id) ?></td>
                            <td><?= h($categoria->nome) ?></td>
                            <td><?= h($categoria->descricao) ?></td>
                            <td><?= $this->Number->format($categoria->ativo) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $categoria->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $categoria->id]) ?>
                                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="row text-center">
            <div class="paginator">
                <ul class="pagination">
                     <!--$this->Paginator->prev('< ' . __('previous'))-->
                    <?= $this->Paginator->numbers() ?>
                    <!--$this->Paginator->next(__('next') . ' >')-->
                </ul>
                <p><?= $this->Paginator->counter() ?></p>
            </div>
        </div>
    </div>
</div>