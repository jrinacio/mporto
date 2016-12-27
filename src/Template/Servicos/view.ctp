<?= $this->start('serv'); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-cogs icone"></i>Serviços</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="#"><i class="fa fa-search icone"></i>Detalhe</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Editar'), 
                                ['controller' => 'servicos', 'action' => 'edit', $servico->id],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o icone"></i>Excluir'),
                                ['controller' => 'servicos', 'action' => 'delete', $servico->id],
                                ['confirm' => __('Você tem certeza que deseja excluir o serviço # {0}?', $servico->id),
                                 'escape' => false]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'servicos', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'servicos', 'action' => 'add'], 
                                ['escape' => false]) ?>
                        </td>
                    </tr>
               </table>
            </div>
        </div>
    </div>
<?= $this->end(); ?>


<div class="col-md-10">
    <h1 class="page-header">
    <?= __('Serviço') ?>
    <small>Detalhe</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?>
        <li class="active">Detalhe do Serviço</li>    
    </ol>
    <h3><?= h($servico->id) ?></h3>
    <div class="table-responsive">
        <table class="table tablenoborder">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($servico->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($servico->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $servico->has('usuario') ? $this->Html->link($servico->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $servico->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Categoria') ?></th>
            <td><?= $servico->has('categoria') ? $this->Html->link($servico->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $servico->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $servico->has('empresa') ? $this->Html->link($servico->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $servico->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($servico->ativo) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($servico->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($servico->modified) ?></td>
        </tr>
    </table>
    <hr>
    <div class="related">
        <h4><?= __('Relação de Arquivos') ?></h4>
        <?php if (!empty($servico->arquivos)): ?>
        <table class="table tablenoborder">
            <tr>
                <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                <th class="col-md-2"><?= __('Imagem') ?></th>
                <th><?= $this->Paginator->sort('evento_id', 'Evento Id') ?></th>
                <th><?= $this->Paginator->sort('servico_id', 'Servico Id') ?></th>
                <th><?= $this->Paginator->sort('name', 'Nome') ?></th>
                <th class="col-md-1"><?= $this->Paginator->sort('size', 'Tamanho') ?></th>
                <th><?= $this->Paginator->sort('ativo', 'Ativo') ?></th>
                <th class="actions col-md-2"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($servico->arquivos as $arquivo): ?>
            <tr>
                <td><?= $this->Number->format($arquivo->id) ?></td>
                <td><?= $this->Html->image('/imgs/arquivos/file/' . $arquivo->dir . '/square_' . $arquivo->name) ?></td>
                <td><?= $arquivo->has('evento_id') ? $this->Html->link($arquivo->evento_id, [
                    'controller' => 'Eventos', 'action' => 'view', $arquivo->evento_id]) : '' ?></td>
                <td><?= $arquivo->has('servico_id') ? $arquivo->servico_id : '' ?></td>
                <td><?= h($arquivo->name) ?></td>
                <td><?= $this->Number->format($arquivo->size) ?></td>
                <td><?= $this->Number->format($arquivo->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                            ['controller' => 'arquivos', 'action' => 'view', $arquivo->id],
                            ['escape' => false, 'class' => 'btn btn-primary']) ?>
                    <?= $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i>'), 
                            ['controller' => 'arquivos', 'action' => 'edit', $arquivo->id],
                            ['escape' => false, 'class' => 'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                            ['controller' => 'arquivos', 'action' => 'delete', $arquivo->id], 
                            ['confirm' => __('Deseja excluir o arquivo # {0}?', $arquivo->id),
                             'escape' => false, 'class' => 'btn btn-danger']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    </div>
</div>


