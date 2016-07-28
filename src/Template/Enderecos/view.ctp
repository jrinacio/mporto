<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Endereço') ?>
            <small>Detalhe</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
            <li class="active">Detalhe do endereço</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="list-group">
            <ul class="nav nav-stacked">
                <li><a href="#" class="btn btn-primary active"><i class="fa fa-search"></i>&nbsp;Detalhe endereço</a></li>
                <li><?= $this->Html->link(__('<i class="fa fa-edit"></i> Editar endereço'), 
                        ['action' => 'edit', $endereco->id],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?> </li>
                <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir endereco'), 
                        ['action' => 'delete', $endereco->id], 
                        ['confirm' => __('Certeza que deseja escluir o endereço código # {0}?', $endereco->id),
                         'escape' => false, 'class' => 'btn btn-danger']) ?> </li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar endereços'), 
                        ['action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?> </li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo endereço'), 
                        ['action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?> </li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar empresas'), 
                        ['controller' => 'Empresas', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?> </li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova empresa'), 
                        ['controller' => 'Empresas', 'action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?> </li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <h3><?= h($endereco->id) ?></h3>
        <div class="table-responsive">
            <table class="table table-hover tablenoborder">
        <tr>
            <th class="col-md-2"><?= __('Empresa') ?></th>
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
</div>
</div>
