<?= $this->start('vws') ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-list"></i>&nbsp;Usuários</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo usuário'), 
            ['controller' => 'usuarios', 'action' => 'add'], 
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end() ?>
<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Usuários') ?>
        <small>Listagem</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Lista de usuários</li>
    </ol>
    <div class="table-responsive">
        <table class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                    <th><?= $this->Paginator->sort('nome', 'Nome') ?></th>
                    <th><?= $this->Paginator->sort('email', 'E-mail') ?></th>
                    <th><?= $this->Paginator->sort('perfil','Perfil') ?></th>
                    <th><?= $this->Paginator->sort('ativo', 'Ativo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?= $this->Number->format($usuario->id) ?></td>
                            <td><?= h($usuario->nome) ?></td>
                            <td><?= h($usuario->email) ?></td>
                            <td><?= $usuario->perfil === 1 ? 'Adiministrativo' : 'Padrão' ?></td>
                            <td><?= $usuario->ativo === 1 ? 'Sim' : 'Não'; ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                        ['action' => 'view', $usuario->id],
                                        ['escape' => false, 'class' => 'btn btn-primary']) ?>
                                <?= $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i>'), 
                                        ['action' => 'edit', $usuario->id],
                                        ['escape' => false, 'class' => 'btn btn-primary']) ?>
                                <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                        ['action' => 'delete', $usuario->id], 
                                        ['confirm' => __('Deseja excluir o arquivo # {0}?', $usuario->id),
                                         'escape' => false, 'class' => 'btn btn-danger']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
