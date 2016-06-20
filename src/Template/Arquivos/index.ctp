<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Arquivos') ?>
            <small>listagem</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
            <li class="active">Lista de imagens</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href=""><i class="fa fa-list"></i>&nbsp;Arquivos</a></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo arquivo'), 
                        ['action' => 'add'], ['escape' => false]) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
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
                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $arquivo->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $arquivo->id]) ?>
                                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $arquivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arquivo->id)]) ?>
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
