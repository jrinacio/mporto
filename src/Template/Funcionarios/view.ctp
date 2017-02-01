<?= $this->start('func'); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseSeven" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-users icone"></i>Funcinários</a>
            </h4>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse in">
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
                                ['controller' => 'funcionarios', 'action' => 'edit', $funcionario->id],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o icone"></i>Excluir'),
                                ['controller' => 'funcionarios', 'action' => 'delete', $funcionario->id],
                                ['confirm' => __('Você tem certeza que deseja excluir o funcionario # {0}?', $funcionario->id),
                                 'escape' => false]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'funcionarios', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'funcionarios', 'action' => 'add'], 
                                ['escape' => false]) ?>
                        </td>
                    </tr>
               </table>
            </div>
        </div>
    </div>
<?= $this->end(); ?>
<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Funcionario') ?>
        <small>Detalhe</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Detalhe do Funcionário</li>
    </ol>
    <?= $this->Html->image('/funcImgs/funcionarios/file/' . $funcionario->dir . '/square_' . $funcionario->foto, [
        'class' => 'img-responsive',
        'width' => '450',
        'scape' => false
    ]) ?>
    <div class="table-responsive">
        <table class="table tablenoborder">
            <tr>
                <th class="col-md-2"><?= __('Id') ?></th>
                <td class="col-md-7">
                    <?= $this->Number->format($funcionario->id) ?>
                </td>
            </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($funcionario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($funcionario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($funcionario->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $funcionario->has('empresa') ? $this->Html->link($funcionario->empresa->nome, ['controller' => 'Empresas', 'action' => 'view', $funcionario->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ds Cargo') ?></th>
            <td><?= h($funcionario->ds_cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($funcionario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ic Ativo') ?></th>
            <td><?= $this->Number->format($funcionario->ic_ativo) ?></td>
        </tr>
    </table>
    </div>
        
</div>
