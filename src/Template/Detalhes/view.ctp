<?= $this->start('cont'); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseThree" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-file-word-o icone"></i>Contextos</a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse in">
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
                                ['controller' => 'detalhes', 'action' => 'edit', $detalhe->id],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o icone"></i>Excluir'),
                                ['controller' => 'detalhes', 'action' => 'delete', $detalhe->id],
                                ['confirm' => __('Você tem certeza que deseja excluir o contexto # {0}?', $detalhe->id),
                                 'escape' => false]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'detalhes', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'detalhes', 'action' => 'add'], 
                                ['escape' => false]) ?>
                        </td>
                    </tr>
               </table>
            </div>
        </div>
    </div>
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
