<?= $this->start('vws'); ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-search"></i>&nbsp;Detalhe Categoria</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Editar Categoria'), 
       ['controller' => 'categorias', 'action' => 'edit', $categoria->id],
       ['escape' => false, 'class' => 'btn btn-primary']) ?> 
    </li>
    <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir Categoria'), 
       ['controller' => 'categorias', 'action' => 'delete', $categoria->id], 
       ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id),
        'escape' => false, 'class' => 'btn btn-danger']) ?> 
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Arquivos'), 
       ['controller' => 'categorias', 'action' => 'index'],
       ['escape' => false, 'class' => 'btn btn-primary']) ?> 
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Categoria'), 
        ['controller' => 'categorias', 'action' => 'add'], 
        ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end('vws'); ?>

<div class="col-md-10">
    <h1 class="page-header">
        <?= __('Categoria') ?>
        <small>Detalhe</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Detalhe da categoria</li>
    </ol>
    <div class="table-responsive">
            <table class="table tablenoborder">
                <tr>
                    <th class="col-md-2"><?= __('ID') ?></th>
                    <td class="col-md-7"><?= $this->Number->format($categoria->id) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Nome') ?></th>
                    <td class="col-md-7"><?= h($categoria->nome) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Descrição') ?></th>
                    <td class="col-md-7"><?= h($categoria->descricao) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Usuário') ?></th>
                    <td class="col-md-7"><?= $categoria->has('usuario') ? $this->Html->link($categoria->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $categoria->usuario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Ativo') ?></th>
                    <td class="col-md-7"><?= $this->Number->format($categoria->ativo) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Cadastro') ?></th>
                    <td class="col-md-7"><?= h($categoria->created) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Alteração') ?></th>
                    <td class="col-md-7"><?= h($categoria->modified) ?></td>
                </tr>
            </table>
        </div>
    <?php if (!empty($categoria->eventos)): ?>
        <hr>
        <h4><?= __('Relação de Eventos') ?></h4>
        <div class="table-responsive">
            <table class="table table-hover tablenoborder">
                <thead>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Usuario Id') ?></th>
                        <th><?= __('Titulo') ?></th>
                        <th><?= __('Descricao') ?></th>
                        <th><?= __('DataEvento') ?></th>
                        <th><?= __('Categoria Id') ?></th>
                        <th><?= __('Ativo') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                <thead>
                <?php foreach ($categoria->eventos as $eventos): ?>
                <tr>
                    <td><?= h($eventos->id) ?></td>
                    <td><?= h($eventos->usuario_id) ?></td>
                    <td><?= h($eventos->titulo) ?></td>
                    <td><?= h($eventos->descricao) ?></td>
                    <td><?= h($eventos->dataEvento) ?></td>
                    <td><?= h($eventos->categoria_id) ?></td>
                    <td><?= h($eventos->ativo) ?></td>
                    <td><?= h($eventos->created) ?></td>
                    <td><?= h($eventos->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                ['controller' => 'Eventos', 'action' => 'view', $eventos->id],
                                ['escape' => false, 'class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link(__('<i class="fa fa-edit fa-lg"></i>'), 
                                ['controller' => 'Eventos', 'action' => 'edit', $eventos->id],
                                ['escape' => false, 'class' => 'btn btn-primary']) ?>
                        <?= $this->Form->postLink(__('<i class="fa fa-search fa-lg"></i>'), 
                                ['controller' => 'Eventos', 'action' => 'delete', $eventos->id], 
                                ['confirm' => __('Are you sure you want to delete # {0}?', $eventos->id),
                                 'escape' => false, 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endif; ?>
    <?php if (!empty($categoria->servicos)): ?>
        <hr>
        <h4><?= __('Relação de Serviços') ?></h4>
        <div class="table-responsive">
            <table class="table table-hover tablenoborder">
                <thead> 
                    <tr class="row">
                        <th><?= __('ID') ?></th>
                        <th><?= __('Nome') ?></th>
                        <th class="col-md-5"><?= __('Descrição') ?></th>
                        <th><?= __('Ativo') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categoria->servicos as $servicos): ?>
                    <tr class="row">
                        <td><?= h($servicos->id) ?></td>
                        <td><?= h($servicos->nome) ?></td>
                        <td class="col-md-5"><?= h($servicos->descricao) ?></td>
                        <td><?= h($servicos->ativo) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                    ['controller' => 'Servicos', 'action' => 'view', $servicos->id],
                                    ['escape' => false, 'class' => 'btn btn-primary']) ?>
                            <?= $this->Html->link(__('<i class="fa fa-edit fa-lg"></i>'), 
                                    ['controller' => 'Servicos', 'action' => 'edit', $servicos->id],
                                    ['escape' => false, 'class' => 'btn btn-primary']) ?>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                    ['controller' => 'Servicos', 'action' => 'delete', $servicos->id], 
                                    ['confirm' => __('Are you sure you want to delete # {0}?', $servicos->id),
                                     'escape' => false, 'class' => 'btn btn-danger']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>


