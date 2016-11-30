<?php // debug($arquivo) ?>
<?= $this->start('vws'); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-archive icone"></i>Arquivos</a>
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
                                ['controller' => 'arquivos', 'action' => 'edit', $arquivo->id],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o icone"></i>Excluir'),
                                ['controller' => 'arquivos', 'action' => 'delete', $arquivo->id],
                                ['confirm' => __('Você tem certeza que deseja excluir o arquivo # {0}?', $arquivo->id),
                                 'escape' => false]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'arquivos', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'arquivos', 'action' => 'add'], 
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
        <?= __('Arquivo') ?>
        <small>Detalhe</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?>
        <li class="active">Detalhe do arquivo</li>    
    </ol>
    <?= $this->Html->image('/imgs/arquivos/file/' . $arquivo->dir . '/portrait_' . $arquivo->name,[
        'class' => 'img-responsive img-hover',
        'width' => '450',
        'scape' => false
    ]) ?>
    <div class="table-responsive">
        <table class="table tablenoborder">
            <tr>
                <th class="col-md-2"><?= __('Id') ?></th>
                <td class="col-md-7"><?= $this->Number->format($arquivo->id) ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Name') ?></th>
                <td class="col-md-7"><?= h($arquivo->name) ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Titulo') ?></th>
                <td class="col-md-7"><?= h($arquivo->titulo) ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Descrição') ?></th>
                <td class="col-md-7"><?= h($arquivo->descricao) ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Type') ?></th>
                <td class="col-md-7"><?= h($arquivo->type) ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Dir') ?></th>
                <td class="col-md-7"><?= h($arquivo->dir) ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Size') ?></th>
                <td class="col-md-7"><?= $this->Number->format($arquivo->size) ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Ativo') ?></th>
                <td class="col-md-7"><?= $this->Number->format($arquivo->ativo) ?></td>
            </tr>
            <tr>
                <th class="col-md-1"><?= __('Usuario') ?></th>
                <td class="col-md-8"><?= $arquivo->has('usuario') ? $this->Html->link($arquivo->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $arquivo->usuario->id]) : '' ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Evento') ?></th>
                <td class="col-md-7"><?= $arquivo->has('evento') ? $this->Html->link($arquivo->evento->id, ['controller' => 'Eventos', 'action' => 'view', $arquivo->evento->id]) : '' ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Servico') ?></th>
                <td class="col-md-7"><?= $arquivo->has('servico') ? $this->Html->link($arquivo->servico->id, ['controller' => 'Servicos', 'action' => 'view', $arquivo->servico->id]) : '' ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Topo rotativo') ?></th>
                <td class="col-md-7"><?= $arquivo->carousel === true ? 'Sim' : 'Não' ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Acerno na home') ?></th>
                <td class="col-md-7"><?= $arquivo->acervo === true ? 'Sim' : 'Não' ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Created') ?></th>
                <td class="col-md-7"><?= h($arquivo->created) ?></td>
            </tr>
            <tr>
                <th class="col-md-2"><?= __('Modified') ?></th>
                <td class="col-md-7"><?= h($arquivo->modified) ?></td>
            </tr>
        </table>
    </div>
</div>

