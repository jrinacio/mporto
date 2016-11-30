<?= $this->start('vws') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-archive icone"></i>Arquivos</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="#"><i class="fa fa-list icone"></i>Arquivos</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'arquivos', 'action' => 'add'],
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
        <?= __('Arquivos') ?>
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
                    <th><?= __('Imagem') ?></th>
                    <th><?= $this->Paginator->sort('evento_id', 'Evento ID') ?></th>
                    <th><?= $this->Paginator->sort('servico_id', 'Serviço ID') ?></th>
                    <th><?= $this->Paginator->sort('name', 'Nome') ?></th>
                    <th><?= $this->Paginator->sort('size', 'Tamanho') ?></th>
                    <th><?= $this->Paginator->sort('ativo', 'Ativo') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arquivos as $arquivo): ?>
                    <tr>
                        <td><?= $this->Number->format($arquivo->id) ?></td>
                        <td><?= $this->Html->image('/imgs/arquivos/file/' . $arquivo->dir . '/square_' . $arquivo->name) ?></td>
                        <td><?= $arquivo->has('evento') ? $this->Html->link($arquivo->evento->id, ['controller' => 'Eventos', 'action' => 'view', $arquivo->evento->id]) : '' ?></td>
                        <td><?= $arquivo->has('servico') ? $this->Html->link($arquivo->servico->id, ['controller' => 'Servicos', 'action' => 'view', $arquivo->servico->id]) : '' ?></td>
                        <td><?= h($arquivo->name) ?></td>
                        <td><?= $this->Number->format($arquivo->size) ?></td>
                        <td><?= $this->Number->format($arquivo->ativo) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                    ['action' => 'view', $arquivo->id],
                                    ['escape' => false, 'class' => 'btn btn-primary']) ?>
                            <?= $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i>'), 
                                    ['action' => 'edit', $arquivo->id],
                                    ['escape' => false, 'class' => 'btn btn-primary']) ?>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                    ['action' => 'delete', $arquivo->id], 
                                    ['confirm' => __('Deseja excluir o arquivo # {0}?', $arquivo->id),
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
                <!--$this->Paginator->prev('< ' . __('previous'))-->
                <?= $this->Paginator->numbers() ?>
                <!--$this->Paginator->next(__('next') . ' >')-->
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>

