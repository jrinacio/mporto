<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Serviços') ?>
            <small>Listagem</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
            <li class="active">Lista de serviços</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <ul>
            <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-plus"></i>  Serviço'), 
                ['action' => 'add'], ['escape' => false]) ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Usuários'), [
                'controller' => 'Usuarios', 'action' => 'index'], ['escape' => false]) ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Usuário'), [
                'controller' => 'Usuarios', 'action' => 'add'], ['escape' => false]) ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Categorias'), [
                'controller' => 'Categorias', 'action' => 'index'], ['escape' => false]) ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Categoria'), [
                'controller' => 'Categorias', 'action' => 'add'], ['escape' => false]) ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Arquivos'), [
                'controller' => 'Arquivos', 'action' => 'index'], ['escape' => false]) ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Arquivo'), [
                'controller' => 'Arquivos', 'action' => 'add'], ['escape' => false]) ?></li>
        </ul>
    </div>
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                        <th><?= $this->Paginator->sort('nome', 'Nome') ?></th>
                        <th><?= $this->Paginator->sort('descricao', 'Descrição') ?></th>
                        <th><?= $this->Paginator->sort('usuario_id', 'Usuário') ?></th>
                        <th><?= $this->Paginator->sort('categoria_id', 'Categoria') ?></th>
                        <th><?= $this->Paginator->sort('ativo', 'Ativo') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Ações') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($servicos as $servico): ?>
                    <tr>
                        <td><?= $this->Number->format($servico->id) ?></td>
                        <td><?= h($servico->nome) ?></td>
                        <td><?= h($servico->descricao) ?></td>
                        <td><?= $servico->has('usuario') ? $this->Html->link($servico->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $servico->usuario->id]) : '' ?></td>
                        <td><?= $servico->has('categoria') ? $this->Html->link($servico->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $servico->categoria->id]) : '' ?></td>
                        <td><?= $this->Number->format($servico->ativo) ?></td>
                        <td><?= h($servico->created) ?></td>
                        <td><?= h($servico->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $servico->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servico->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servico->id)]) ?>
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
</div>