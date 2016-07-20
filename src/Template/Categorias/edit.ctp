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
    <div class="col-md-3">
        <div class="list-group">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-edit"></i><?= __(' Editar') ?></a></li>
                <li><?= $this->Form->postLink(
                        __('<i class="fa fa-trash-o"></i> Excluir categoria'),
                        ['action' => 'delete', $categoria->id],
                        ['confirm' => __('Certeza que deseja excluir a categoria # {0}?', $categoria->id),
                            'escape' => false]
                    )?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Categorias'), 
                        ['action' => 'index'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Usuarios'), 
                        ['controller' => 'Usuarios', 'action' => 'index'],
                        ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Usuário'), 
                        ['controller' => 'Usuarios', 'action' => 'add'],
                        ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Eventos'), 
                        ['controller' => 'Eventos', 'action' => 'index'],
                        ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Evento'), 
                        ['controller' => 'Eventos', 'action' => 'add'],
                        ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Serviços'), 
                        ['controller' => 'Servicos', 'action' => 'index'],
                        ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Serviço'), 
                        ['controller' => 'Servicos', 'action' => 'add'],
                        ['escape' => false]) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
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
