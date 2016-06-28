<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Endereco'), ['action' => 'edit', $endereco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Endereco'), ['action' => 'delete', $endereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Enderecos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Endereco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enderecos view large-9 medium-8 columns content">
    <h3><?= h($endereco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $endereco->has('empresa') ? $this->Html->link($endereco->empresa->nome, ['controller' => 'Empresas', 'action' => 'view', $endereco->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Logradouro') ?></th>
            <td><?= h($endereco->logradouro) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero') ?></th>
            <td><?= h($endereco->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Complemento') ?></th>
            <td><?= h($endereco->complemento) ?></td>
        </tr>
        <tr>
            <th><?= __('Bairro') ?></th>
            <td><?= h($endereco->bairro) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= h($endereco->cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($endereco->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($endereco->id) ?></td>
        </tr>
    </table>
</div>
