<?= $this->start('cont') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseThree" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-file-word-o icone"></i>Contextos</a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="#"><i class="fa fa-list icone"></i>Listar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'detalhes', 'action' => 'add'],
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
        <?= __('Detalhes/Contexto') ?>
        <small>Listagem</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Lista de contextos</li>
    </ol>
    <div class="table-responsive">
        <table class="table table-hover table-condensed">    
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                    <th><?= $this->Paginator->sort('empresa_id', 'Empresa') ?></th>
                    <th><?= $this->Paginator->sort('servico_id', 'Serviço') ?></th>
                    <th><?= $this->Paginator->sort('titulo', 'Título') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detalhes as $detalhe): ?>
                <tr>
                    <td><?= $this->Number->format($detalhe->id) ?></td>
                    <td><?= $detalhe->has('empresa') ? $this->Html->link($detalhe->empresa->nome, 
                            ['controller' => 'Empresas', 'action' => 'view', $detalhe->empresa->id]) : '' ?></td>
                    <td><?= $detalhe->has('servico') ? $this->Html->link($detalhe->servico->nome, 
                            ['controller' => 'Servicos', 'action' => 'view', $detalhe->servico->id]) : '' ?></td>
                    <td><?= h($detalhe->titulo) ?></td>
                    <td><?= $this->Number->format($detalhe->ativo) ?></td>
                    <td class="col-md-2">
                        <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                ['action' => 'view', $detalhe->id],
                                ['escape' => false, 'class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link(__('<i class="fa fa-edit fa-lg"></i>'), 
                                ['action' => 'edit', $detalhe->id],
                                ['escape' => false, 'class' => 'btn btn-primary']) ?>
                        <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                ['action' => 'delete', $detalhe->id], 
                                ['confirm' => __('Certeza que deseja excluir # {0}?', $detalhe->id),
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
