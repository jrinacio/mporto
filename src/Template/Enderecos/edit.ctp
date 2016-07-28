<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Endereço') ?>
            <small>Editar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
            <li class="active">Editar enderço</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="list-group">
            <ul class="nav nav-stacked">
                <li><a href="#" class="btn btn-primary active"><i class="fa fa-edit"></i>&nbsp;Editar endereço</a></li>
                <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir endereço'),
                        ['action' => 'delete', $endereco->id],
                        ['confirm' => __('Certeza que deseja excluir o endereço de código # {0}?', $endereco->id),
                         'escape' => false, 'class' => 'btn btn-danger'])?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar enderecos'), 
                        ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar empresas'), 
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
                echo $this->Form->input('empresa_id', ['options' => $empresas]);
                echo $this->Form->input('logradouro');
                echo $this->Form->input('numero');
                echo $this->Form->input('complemento');
                echo $this->Form->input('bairro');
                echo $this->Form->input('cidade');
                echo $this->Form->input('estado');
            ?>
        
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
