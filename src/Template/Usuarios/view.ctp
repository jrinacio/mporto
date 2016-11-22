<?= $this->start('vws'); ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-search"></i>&nbsp;Detalhe Usuário</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Editar Usuário'), 
       ['controller' => 'usuarios', 'action' => 'edit', $usuario->id],
       ['escape' => false, 'class' => 'btn btn-primary']) ?> 
    </li>
    <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir Usuário'), 
       ['controller' => 'usuarios', 'action' => 'delete', $usuario->id], 
       ['confirm' => __('Deseja excluir o servico # {0}?', $usuario->id),
        'escape' => false, 'class' => 'btn btn-danger']) ?> 
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Usuários'), 
       ['controller' => 'usuarios', 'action' => 'index'],
       ['escape' => false, 'class' => 'btn btn-primary']) ?> 
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Usuário'), 
        ['controller' => 'usuarios', 'action' => 'add'], 
        ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end('vws'); ?>
<div class="col-md-10 divisoria">
    
        <h1 class="page-header">
            <?= __('Usuários') ?>
            <small>Detalhe</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
            <li class="active">Detalhe do usuário</li>
        </ol>

    <div class="table-responsive">
        <table class="table tablenoborder">
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($usuario->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Nome') ?></th>
                <td><?= h($usuario->nome) ?></td>
            </tr>
            <tr>
                <th><?= __('E-mail') ?></th>
                <td><?= h($usuario->email) ?></td>
            </tr>
    <!--        <tr>
                <th>< ? = __('Senha') ?></th>
                <td>< ? = h($usuario->senha) ?></td>
            </tr>-->
            <tr>
                <th><?= __('Ativo') ?></th>
                <td><?= $usuario->ativo === 1 ? 'Sim' : 'Não' ?></td>
            </tr>
            <tr>
                <th><?= __('Data cadastro') ?></th>
                <td><?= h($usuario->created->I18nFormat('dd/MM/yyyy HH:mm')) ?></td>
            </tr>
            <tr>
                <th><?= __('Data alteração') ?></th>
                <td><?= h($usuario->modified->I18nFormat('dd/MM/yyyy HH:mm')) ?></td>
            </tr>
            <tr>
                <th><?= __('Perfil') ?></th>
                <td><?= $usuario->perfil === 1 ? __('Administrador') : __('Padrão'); ?></td>
            </tr>
        </table>
        </div>
    
        <?php if (!empty($usuario->categorias)): ?>
            <hr>
            <h4><?= __('Relação de categorias') ?></h4>
            <div class="table-responsive">
                <table class="table table-hover table-condensed">
                <tr>
                    <th><?= __('ID') ?></th>
                    <th class="col-md-2"><?= __('Nome') ?></th>
                    <th class="col-md-3"><?= __('Descrição') ?></th>
                    <th><?= __('Ativo') ?></th>
                    <th><?= __('Created') ?></th>
                    <th><?= __('Modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($usuario->categorias as $categoria): ?>
                <tr>
                    <td><?= h($categoria->id) ?></td>
                    <td class="col-md-2"><?= h($categoria->nome) ?></td>
                    <td class="col-md-3"><?= h($categoria->descricao) ?> </td>
                    <td><?= h($categoria->ativo) ?></td>
                    <td><?= h($categoria->created) ?></td>
                    <td><?= h($categoria->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                ['controller' => 'categorias', 'action' => 'view', $categoria->id],
                                ['escape' => false, 'class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i>'), 
                                ['controller' => 'categorias', 'action' => 'edit', $categoria->id],
                                ['escape' => false, 'class' => 'btn btn-primary']) ?>
                        <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                ['controller' => 'categorias', 'action' => 'delete', $categoria->id], 
                                ['confirm' => __('Deseja excluir o arquivo # {0}?', $categoria->id),
                                 'escape' => false, 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
        <?php if(!empty($usuario->eventos)): ?>
            <hr>
            <h4><?= __('Relação de eventos') ?></h4>
            <div class="table-responsive">
                <table class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Titulo') ?></th>
                            <th><?= __('DataEvento') ?></th>
                            <th><?= __('Categ. Id') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuario->eventos as $evento): ?>

                            <tr>
                                <td><?= h($evento->id) ?></td>
                                <td><?= h($evento->titulo) ?></td>
                                <td><?= h($evento->dataEvento) ?></td>
                                <td><?= h($evento->categoria_id) ?></td>
                                <td><?= h($evento->ativo) ?></td>
                                <td><?= h($evento->created) ?></td>
                                <td><?= h($evento->modified) ?></td>
                                <td class="actions">
                                     <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                            ['controller' => 'eventos', 'action' => 'view', $evento->id],
                                            ['escape' => false, 'class' => 'btn btn-primary']) ?>
                                    <?= $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i>'), 
                                            ['controller' => 'eventos', 'action' => 'edit', $evento->id],
                                            ['escape' => false, 'class' => 'btn btn-primary']) ?>
                                    <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                            ['controller' => 'eventos', 'action' => 'delete', $evento->id], 
                                            ['confirm' => __('Deseja excluir o evento # {0}?', $evento->id),
                                             'escape' => false, 'class' => 'btn btn-danger']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </table>
            </div>
        <?php endif; ?>
        <?php if(!empty($usuario->servicos)): ?>
            <hr>
            <h4><?= __('Relação de serviços') ?></h4>
            <div class="table-responsive">
                <table class="table table-hover tablenoborder">
                    <thead>
                        <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Descrição') ?></th>
                            <th><?= __('Categ. Id') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuario->servicos as $servicos): ?>
                            <tr>
                                <td><?= h($servicos->id) ?></td>
                                <td><?= h($servicos->usuario_id) ?></td>
                                <td><?= h($servicos->nome) ?></td>
                                <td><?= h($servicos->descricao) ?></td>
                                <td><?= h($servicos->categoria_id) ?></td>
                                <td><?= h($servicos->ativo) ?></td>
                                <td><?= h($servicos->created) ?></td>
                                <td><?= h($servicos->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Servicos', 'action' => 'view', $servicos->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Servicos', 'action' => 'edit', $servicos->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Servicos', 'action' => 'delete', $servicos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicos->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </table>
            </div>
        <?php endif; ?>
</div>


