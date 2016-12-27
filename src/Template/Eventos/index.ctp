<?= $this->start('even') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-calendar icone"></i>Eventos</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="#"><i class="fa fa-list icone"></i>Eventos</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'eventos', 'action' => 'add'],
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
        <?= __('Eventos') ?>
        <small>listagem</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Lista de imagens</li>
    </ol>
    <div class="table-responsive">
        <table class="table table-hover table-condensed">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                <th><?= $this->Paginator->sort('titulo', 'Título') ?></th>
                <th><?= $this->Paginator->sort('categoria_id', 'Serv. ID') ?></th>
                <th><?= $this->Paginator->sort('dataEvento', 'Data') ?></th>
                <th><?= $this->Paginator->sort('ativo', 'Ativo') ?></th>
                <th><?= $this->Paginator->sort('usuario_id', 'Usuário') ?></th>
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
                        <td><?= $evento->has('categoria') ? $this->Html->link($evento->categoria->id, 
                                ['controller' => 'Categorias', 'action' => 'view', $evento->categoria->id]) : '' ?></td>
                        <td><?= h($evento->dataEvento) ?></td>
                        <td><?= $this->Number->format($evento->ativo) ?></td>
                        <td><?= $evento->has('usuario') ? $this->Html->link($evento->usuario->email, 
                                ['controller' => 'Usuarios', 'action' => 'view', $evento->usuario->id]) : '' ?></td>
                        <td><?= h($evento->created) ?></td>
                        <td><?= h($evento->modified) ?></td>
                        <td class="actions col-md-2">
                            <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                    ['action' => 'view', $evento->id],
                                    ['escape' => false, 'class' => 'btn btn-primary']) ?>
                            <?= $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i>'), 
                                    ['action' => 'edit', $evento->id],
                                    ['escape' => false, 'class' => 'btn btn-primary']) ?>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                    ['action' => 'delete', $evento->id], 
                                    ['confirm' => __('Deseja excluir o evento # {0}?', $evento->id),
                                     'escape' => false, 'class' => 'btn btn-danger']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
