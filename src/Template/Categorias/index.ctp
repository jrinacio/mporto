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
    <div class="col-md-2">
        <div class="list-group">
            <ul class="nav nav-stacked">
                <li><a href="#" class="btn btn-primary active"><i class="fa fa-list"></i>&nbsp;Listar Categorias</a></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Eventos'), 
                        ['controller' => 'Eventos', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Serviços'), 
                        ['controller' => 'Servicos', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Usuários'), 
                        ['controller' => 'Usuarios', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Categoria'), 
                        ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Evento'), 
                        ['controller' => 'Eventos', 'action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Serviço'), 
                        ['controller' => 'Servicos', 'action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Usuário'), 
                        ['controller' => 'Usuarios', 'action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
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
                                <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                        ['action' => 'view', $categoria->id], 
                                        ['escape' => false, 'class' => 'btn btn-primary']) ?>
                                <?= $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i>'), 
                                        ['action' => 'edit', $categoria->id],
                                        ['escape' => false, 'class' => 'btn btn-primary']) ?>
                                <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                        ['action' => 'delete', $categoria->id], 
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id),
                                         'escape' => false,
                                         'class' => 'btn btn-danger']) ?>
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