<?= $this->start('vws'); ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-search"></i>&nbsp;Detalhe</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Editar Contexto'), 
       ['controller' => 'detalhes', 'action' => 'edit', $detalhe->id],
       ['escape' => false, 'class' => 'btn btn-primary']) ?> 
    </li>
    <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir Contexto'), 
       ['controller' => 'detalhes', 'action' => 'delete', $detalhe->id], 
       ['confirm' => __('Confirma a exclusão do contexto # {0}?', $detalhe->id),
        'escape' => false, 'class' => 'btn btn-danger']) ?> 
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Contextos'), 
       ['controller' => 'detalhes', 'action' => 'index'],
       ['escape' => false, 'class' => 'btn btn-primary']) ?> 
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Contexto'), 
        ['controller' => 'detalhes', 'action' => 'add'], 
        ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end('vws'); ?>

<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Contexto') ?>
        <small>Detalhe</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?>
        <li class="active">Contexto da empresa</li>    
    </ol>
    <div class="table-responsive">
        <h3><?= h($detalhe->id) ?></h3>
        <table class="table tablenoborder">
            <tr>
                <th><?= __('Empresa') ?></th>
                <td><?= $detalhe->has('empresa') ? $this->Html->link($detalhe->empresa->nome, ['controller' => 'Empresas', 'action' => 'view', $detalhe->empresa->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Titulo') ?></th>
                <td><?= h($detalhe->titulo) ?></td>
            </tr>
            <tr>
                <th><?= __('Usuario') ?></th>
                <td><?= $detalhe->has('usuario') ? $this->Html->link($detalhe->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $detalhe->usuario->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($detalhe->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Ativo') ?></th>
                <td><?= $this->Number->format($detalhe->ativo) ?></td>
            </tr>
            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($detalhe->created) ?></td>
            </tr>
            <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($detalhe->modified) ?></td>
            </tr>
        </table>
        <div>
            <h4><?= __('Descricao') ?></h4>
            <?= html_entity_decode($detalhe->descricao); ?>
        </div>
    </div>
</div>
