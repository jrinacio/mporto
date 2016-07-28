<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Endereços') ?>
            <small>Adicionar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
            <li class="active">Adicionar endereço</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="list-group">
            <ul class="nav nav-stacked">
                <li><a href="#" class="btn btn-primary active"><i class="fa fa-plus"></i>&nbsp;Adicionar endereço</a></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar enderecos'), 
                        ['action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Empresas'), 
                        ['controller' => 'Empresas', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova empresa'), 
                        ['controller' => 'Empresas', 'action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <?= $this->Form->create($endereco) ?>
        <?php
            echo $this->Form->input('empresa_id', ['options' => $empresas, 'empty' => 'Selecione a empresa...']);
            echo $this->Form->input('logradouro', ['label' => 'Logradouro']);
            echo $this->Form->input('numero', ['1abel' => 'Número']);
            echo $this->Form->input('complemento', ['label' => 'Complemento']);
            echo $this->Form->input('bairro', ['label' => 'Bairro']);
            echo $this->Form->input('cidade', ['label' => 'Cidade']);
            echo $this->Form->input('estado', ['label' => 'Estado']);
        ?>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

