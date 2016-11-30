<?= $this->start('vws'); ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-search"></i>&nbsp;Detalhe Serviço</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Editar Serviço'), 
       ['controller' => 'servicos', 'action' => 'edit', $servico->id],
       ['escape' => false, 'class' => 'btn btn-primary']) ?> 
    </li>
    <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir Servico'), 
       ['controller' => 'servicos', 'action' => 'delete', $servico->id], 
       ['confirm' => __('Deseja excluir o servico # {0}?', $servico->id),
        'escape' => false, 'class' => 'btn btn-danger']) ?> 
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Servicos'), 
       ['controller' => 'servicos', 'action' => 'index'],
       ['escape' => false, 'class' => 'btn btn-primary']) ?> 
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Servico'), 
        ['controller' => 'servicos', 'action' => 'add'], 
        ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end('vws'); ?>


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


