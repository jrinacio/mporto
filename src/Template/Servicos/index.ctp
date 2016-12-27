<?= $this->start('serv') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-cogs icone"></i>Serviços</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="#"><i class="fa fa-list icone"></i>Serviços</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'servicos', 'action' => 'add'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
               </table>
            </div>
        </div>
    </div>
<?= $this->end() ?>

<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Serviços') ?>
        <small>Listagem</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Lista de serviços</li>
    </ol>
    <div class="table-responsive">
        <table class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                    <th><?= $this->Paginator->sort('nome', 'Nome') ?></th>
                    <th class="col-md-3"><?= $this->Paginator->sort('descricao', 'Descrição') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id', 'Usuário') ?></th>
                    <th><?= $this->Paginator->sort('categoria_id', 'Categ. ID') ?></th>
                    <th><?= $this->Paginator->sort('empresa_id', 'Emp. ID') ?></th>
                    <th><?= $this->Paginator->sort('ativo', 'Ativo') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($servicos as $servico): ?>
                    <tr>
                        <td><?= $this->Number->format($servico->id) ?></td>
                        <td><?= h($servico->nome) ?></td>
                        <td><?= h($servico->descricao) ?></td>
                        <td><?= $servico->has('usuario') ? $this->Html->link($servico->usuario->email, 
                                ['controller' => 'Usuarios', 'action' => 'view', $servico->usuario->id]) : '' ?></td>
                        <td><?= $servico->has('categoria') ? $this->Html->link($servico->categoria->id, 
                                ['controller' => 'Categorias', 'action' => 'view', $servico->categoria->id]) : '' ?></td>
                        <td><?= $servico->has('empresa') ? $this->Html->link($servico->empresa->id,
                                ['controller' => 'Empresas', 'action' => 'view', $servico->empresa->id]) : '' ?></td>
                        <td><?= $this->Number->format($servico->ativo) ?></td>
                        <td class="actions col-md-2">
                            <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                    ['action' => 'view', $servico->id], 
                                    ['escape' => false, 'class' => 'btn btn-primary']) ?>
                            <?= $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i>'), 
                                    ['action' => 'edit', $servico->id],
                                    ['escape' => false, 'class' => 'btn btn-primary']) ?>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                    ['action' => 'delete', $servico->id], 
                                    ['confirm' => __('Are you sure you want to delete # {0}?', $servico->id),
                                     'escape' => false, 'class' => 'btn btn-danger']) ?>
                            
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="row text-center">
            
    </div>
    <div class="row text-center">
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>
