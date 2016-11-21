<?= $this->start('vws') ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-list"></i>&nbsp;Detalhes</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Detalhe'),
            ['controller' => 'detalhes', 'action' => 'add'],
            ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
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
