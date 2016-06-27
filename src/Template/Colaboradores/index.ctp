<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Colaboradores') ?>
            <small>Listagem</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
            <li class="active">Lista de colaboradors</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <ul class="side-nav">
            <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo colaborador'), [
                'action' => 'add'], ['escape' => false]) ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Usuarios'), [
                'controller' => 'Usuarios', 'action' => 'index'], ['escape' => false]) ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-plus"></i> New Usuario'), [
                'controller' => 'Usuarios', 'action' => 'add'], ['escape' => false]) ?></li>
        </ul>
    </div>
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                        <th><?= __('Imagem') ?></th>
                        <th><?= $this->Paginator->sort('nome', 'Nome') ?></th>
                        <th><?= $this->Paginator->sort('link') ?></th>
                        <th><?= $this->Paginator->sort('ativo') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($colaboradores as $colaborador): ?>
                    <tr>
                        <td><?= $this->Number->format($colaborador->id) ?></td>
                        <td><?= $this->Html->image('/img/colaboradores/filename/' . $colaborador->dir . '/square_' . $colaborador->filename) ?></td>
                        <td><?= h($colaborador->nome) ?></td>
                        <td><?= h($colaborador->link) ?></td>
                        <td><?= h($colaborador->filename) ?></td>
                        <td><?= $this->Number->format($colaborador->ativo) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $colaborador->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colaborador->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $colaborador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colaborador->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
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
    
