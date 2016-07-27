<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Categorias') ?>
            <small>Editar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
            <li class="active">Editar categoria</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="list-group">
            <ul class="nav nav-stacked">
                <li><a href="#" class="btn btn-primary active"><i class="fa fa-edit"></i><?= __(' Editar categoria') ?></a></li>
                <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir categoria'),
                        ['action' => 'delete', $categoria->id],
                        ['confirm' => __('Certeza que deseja excluir a categoria # {0}?', $categoria->id),
                            'escape' => false, 'class' => 'btn btn-danger'])?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar categorias'), 
                        ['action' => 'index'], 
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar eventos'), 
                        ['controller' => 'Eventos', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo evento'), 
                        ['controller' => 'Eventos', 'action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar serviços'), 
                        ['controller' => 'Servicos', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo serviço'), 
                        ['controller' => 'Servicos', 'action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar usuarios'), 
                        ['controller' => 'Usuarios', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo usuário'), 
                        ['controller' => 'Usuarios', 'action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div>
            <h3><?= __('Editar categoria') ?></h3>
        </div>
            <?= $this->Form->create($categoria) ?>
            <?php
                echo $this->Form->input('nome', ['label' => 'Nome', 'empty' => 'Nome da categoria...']);
                echo $this->Form->input('descricao', ['label' => 'Descrição']);
//                echo $this->Form->input('usuario_id', ['options' => $usuarios]);
                $atv = [0 => 'Não', 1 => 'Sim'];
                echo $this->Form->input('ativo', ['label' => 'Ativo', 
                    'options' => $atv]);
            ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
    </div>
</div>
