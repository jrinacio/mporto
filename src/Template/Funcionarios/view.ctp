<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Funcionario'), ['action' => 'edit', $funcionario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Funcionario'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcionarios view large-9 medium-8 columns content">
    <h3><?= h($funcionario->id) ?></h3>
    <table class="vertical-table">
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
