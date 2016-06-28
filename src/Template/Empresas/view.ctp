<?php
//    debug($empresa);
//    die('lol');
?>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Empresa/Setor') ?>
            <small>Detalhe</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
            <li class="active">Detalhe da Empresa/Setor</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-search"></i>&nbsp;Detalhes Empresa</a></li>
                <li><?= $this->Html->link(__('<i class="fa fa-pencil"></i> Editar Empresa'), 
                        ['action' => 'edit', $empresa->id], ['escape' => false]) ?> </li>
                <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir Empresa'), 
                        ['action' => 'delete', $empresa->id], 
                        ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id),
                        'escape' => false]) ?> </li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Empresas'), 
                        ['action' => 'index'], ['escape' => false]) ?> </li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Empresa'), 
                        ['action' => 'add'], ['escape' => false]) ?> </li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <h3><?= $empresa->id ?></h3>
        <div class="table-responsive">
            <table class="table tablenoborder">
                <tr>
                    <th class="col-md-2"><?= __('Nome') ?></th>
                    <td class="col-md-7"><?= h($empresa->nome) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Categoria') ?></th>
                    <td class="col-md-7"><?= $empresa->has('categoria') ? $this->Html->link($empresa->categoria->nome, ['controller' => 'Categorias', 'action' => 'view', $empresa->categoria->id]) : '' ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Link') ?></th>
                    <td class="col-md-7"><?= h($empresa->link) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Dir') ?></th>
                    <td class="col-md-7"><?= h($empresa->dir) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Filename') ?></th>
                    <td class="col-md-7"><?= h($empresa->filename) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Usuario') ?></th>
                    <td class="col-md-7"><?= $empresa->has('usuario') ? $this->Html->link($empresa->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $empresa->usuario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Id') ?></th>
                    <td class="col-md-7"><?= $this->Number->format($empresa->id) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Ativo') ?></th>
                    <td class="col-md-7"><?= $this->Number->format($empresa->ativo) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Parent Id') ?></th>
                    <td class="col-md-7"><?= $this->Number->format($empresa->parent_id) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Created') ?></th>
                    <td class="col-md-7"><?= h($empresa->created) ?></td>
                </tr>
                <tr>
                    <th class="col-md-2"><?= __('Modified') ?></th>
                    <td class="col-md-7"><?= h($empresa->modified) ?></td>
                </tr>
            </table>
        </div>
        <?php if (!empty($empresa->setores)): ?>
        <hr>
        <h4><?= __('Relação de Setores') ?></h4>
        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <tr>
                    <th><?= __('Id', 'ID') ?></th>
                    <th><?= __('Nome') ?></th>
                    <th><?= __('Categoria Id') ?></th>
                    <th><?= __('Link') ?></th>
                    <th><?= __('Ativo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($empresa->setores as $empresas): ?>
                <tr>
                    <td><?= h($empresas->id) ?></td>
                    <td><?= h($empresas->nome) ?></td>
                    <td><?= h($empresas->categoria_id) ?></td>
                    <td><?= h($empresas->link) ?></td>
                    <td><?= h($empresas->ativo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Empresas', 'action' => 'view', $empresas->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Empresas', 'action' => 'edit', $empresas->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Empresas', 'action' => 'delete', $empresas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresas->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($empresa->detalhes)): ?>
        <hr>
        <h4><?= __('Related Detalhes') ?></h4>
        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Empresa Id') ?></th>
                    <th><?= __('Titulo') ?></th>
                    <th><?= __('Usuario Id') ?></th>
                    <th><?= __('Ativo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($empresa->detalhes as $detalhes): ?>
                <tr>
                    <td><?= h($detalhes->id) ?></td>
                    <td><?= h($detalhes->empresa_id) ?></td>
                    <td><?= h($detalhes->titulo) ?></td>
                    <td><?= h($detalhes->usuario_id) ?></td>
                    <td><?= h($detalhes->ativo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Detalhes', 'action' => 'view', $detalhes->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Detalhes', 'action' => 'edit', $detalhes->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Detalhes', 'action' => 'delete', $detalhes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalhes->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($empresa->enderecos)): ?>
        <hr>
        <h4><?= __('Related Enderecos') ?></h4>
            <div class="table-responsive">
                <table class="table table-hover table-condensed">
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Empresa Id') ?></th>
                        <th><?= __('Logradouro') ?></th>
                        <th><?= __('Numero') ?></th>
                        <th><?= __('Complemento') ?></th>
                        <th><?= __('Bairro') ?></th>
                        <th><?= __('Cidade') ?></th>
                        <th><?= __('Estado') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($empresa->enderecos as $enderecos): ?>
                    <tr>
                        <td><?= h($enderecos->id) ?></td>
                        <td><?= h($enderecos->empresa_id) ?></td>
                        <td><?= h($enderecos->logradouro) ?></td>
                        <td><?= h($enderecos->numero) ?></td>
                        <td><?= h($enderecos->complemento) ?></td>
                        <td><?= h($enderecos->bairro) ?></td>
                        <td><?= h($enderecos->cidade) ?></td>
                        <td><?= h($enderecos->estado) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Enderecos', 'action' => 'view', $enderecos->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Enderecos', 'action' => 'edit', $enderecos->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enderecos', 'action' => 'delete', $enderecos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enderecos->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        <?php endif; ?>
        <?php if (!empty($empresa->funcionarios)): ?>
        <hr>
        <h4><?= __('Related Funcionarios') ?></h4>
        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Nome') ?></th>
                    <th><?= __('Email') ?></th>
                    <th><?= __('Telefone') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($empresa->funcionarios as $funcionarios): ?>
                <tr>
                    <td><?= h($funcionarios->id) ?></td>
                    <td><?= h($funcionarios->nome) ?></td>
                    <td><?= h($funcionarios->email) ?></td>
                    <td><?= h($funcionarios->telefone) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Funcionarios', 'action' => 'view', $funcionarios->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Funcionarios', 'action' => 'edit', $funcionarios->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Funcionarios', 'action' => 'delete', $funcionarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionarios->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
