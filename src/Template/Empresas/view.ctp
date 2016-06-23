<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Detalhes'), ['controller' => 'Detalhes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalhe'), ['controller' => 'Detalhes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Enderecos'), ['controller' => 'Enderecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Endereco'), ['controller' => 'Enderecos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">
    <h3><?= h($empresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($empresa->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Categoria') ?></th>
            <td><?= $empresa->has('categoria') ? $this->Html->link($empresa->categoria->nome, ['controller' => 'Categorias', 'action' => 'view', $empresa->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Link') ?></th>
            <td><?= h($empresa->link) ?></td>
        </tr>
        <tr>
            <th><?= __('Dir') ?></th>
            <td><?= h($empresa->dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Filename') ?></th>
            <td><?= h($empresa->filename) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $empresa->has('usuario') ? $this->Html->link($empresa->usuario->email, ['controller' => 'Usuarios', 'action' => 'view', $empresa->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($empresa->ativo) ?></td>
        </tr>
        <tr>
            <th><?= __('Empresa Id') ?></th>
            <td><?= $this->Number->format($empresa->empresa_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($empresa->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($empresa->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Empresas') ?></h4>
        <?php if (!empty($empresa->empresas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Categoria Id') ?></th>
                <th><?= __('Link') ?></th>
                <th><?= __('Dir') ?></th>
                <th><?= __('Filename') ?></th>
                <th><?= __('Ativo') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Empresa Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->empresas as $empresas): ?>
            <tr>
                <td><?= h($empresas->id) ?></td>
                <td><?= h($empresas->nome) ?></td>
                <td><?= h($empresas->categoria_id) ?></td>
                <td><?= h($empresas->link) ?></td>
                <td><?= h($empresas->dir) ?></td>
                <td><?= h($empresas->filename) ?></td>
                <td><?= h($empresas->ativo) ?></td>
                <td><?= h($empresas->usuario_id) ?></td>
                <td><?= h($empresas->empresa_id) ?></td>
                <td><?= h($empresas->created) ?></td>
                <td><?= h($empresas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Empresas', 'action' => 'view', $empresas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Empresas', 'action' => 'edit', $empresas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Empresas', 'action' => 'delete', $empresas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Detalhes') ?></h4>
        <?php if (!empty($empresa->detalhes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Empresa Id') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Ativo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->detalhes as $detalhes): ?>
            <tr>
                <td><?= h($detalhes->id) ?></td>
                <td><?= h($detalhes->empresa_id) ?></td>
                <td><?= h($detalhes->titulo) ?></td>
                <td><?= h($detalhes->descricao) ?></td>
                <td><?= h($detalhes->usuario_id) ?></td>
                <td><?= h($detalhes->created) ?></td>
                <td><?= h($detalhes->modified) ?></td>
                <td><?= h($detalhes->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Detalhes', 'action' => 'view', $detalhes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Detalhes', 'action' => 'edit', $detalhes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Detalhes', 'action' => 'delete', $detalhes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalhes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Enderecos') ?></h4>
        <?php if (!empty($empresa->enderecos)): ?>
        <table cellpadding="0" cellspacing="0">
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
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Funcionarios') ?></h4>
        <?php if (!empty($empresa->funcionarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Telefone') ?></th>
                <th><?= __('Empresa Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->funcionarios as $funcionarios): ?>
            <tr>
                <td><?= h($funcionarios->id) ?></td>
                <td><?= h($funcionarios->nome) ?></td>
                <td><?= h($funcionarios->email) ?></td>
                <td><?= h($funcionarios->telefone) ?></td>
                <td><?= h($funcionarios->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Funcionarios', 'action' => 'view', $funcionarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Funcionarios', 'action' => 'edit', $funcionarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Funcionarios', 'action' => 'delete', $funcionarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
