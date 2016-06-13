<?php // debug($arquivo) ?>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Arquivo') ?>
            <small>Detalhe</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?>
            <li class="active">Detalhe do arquivo</li>    
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <ul>
                <li class="list-group-item"><?= $this->Html->link(__('Editar Arquivo'), ['action' => 'edit', $arquivo->id]) ?> </li>
                <li class="list-group-item"><?= $this->Form->postLink(__('Excluir Arquivo'), ['action' => 'delete', $arquivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arquivo->id)]) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Listar Arquivos'), ['action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Arquivo'), ['action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Listar Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Listar Serviços'), ['controller' => 'Servicos', 'action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Serviço'), ['controller' => 'Servicos', 'action' => 'add']) ?> </li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
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
</div>

