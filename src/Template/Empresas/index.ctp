<?= $this->start('vws') ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-list"></i>&nbsp;Listar empresas</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Empresa'), 
            ['action' => 'add'], 
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end() ?>
<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Empresas/Setores') ?>
        <small>Listagem</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Lista de empresas/setores</li>
    </ol>
    <div class="table-responsive">
        <table class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                    <th><?= __('Logotipo') ?></th>
                    <th><?= $this->Paginator->sort('nome', 'Nome') ?></th>
                    <th><?= $this->Paginator->sort('categoria_id', ['Categoria']) ?></th>
                    <th><?= $this->Paginator->sort('link', 'Website') ?></th>
                    <th><?= $this->Paginator->sort('ativo', 'Ativo') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empresas as $empresa): ?>
                <tr>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                    <td><?= $this->Html->image('/img/empresas/filename/' . 
                            $empresa->dir . '/square_' . $empresa->filename) ?></td>
                    <td><?= h($empresa->nome) ?></td>
                    <td><?= $empresa->has('categoria') ? $this->Html->link($empresa->categoria->nome, [
                        'controller' => 'Categorias', 'action' => 'view', $empresa->categoria->id]) : '' ?></td>
                    <td><?= h($empresa->link) ?></td>
<!--                        <td> h($empresa->dir) </td>
                    <td> h($empresa->filename) </td>-->
                    <td><?= $empresa->ativo === 1 ? 'Sim' : 'Não' ?></td>
                    <!--<td> $empresa->has('usuario') ? $this->Html->link($empresa->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $empresa->usuario->id]) : '' </td>-->
                    <td class="col-md-2">
                        <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                ['action' => 'view', $empresa->id],
                                ['escape' => false, 'class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link(__('<i class="fa fa-edit fa-lg"></i>'), 
                                ['action' => 'edit', $empresa->id],
                                ['escape' => false, 'class' => 'btn btn-primary']) ?>
                        <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                ['action' => 'delete', $empresa->id], 
                                ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id),
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
