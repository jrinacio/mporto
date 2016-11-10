<?= $this->start('vws'); ?>    
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-pencil"></i>&nbsp;Editar Categoria</a></li>
    <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir Categoria'),
            ['controller' => 'categorias', 'action' => 'delete', $categoria->id],
            ['confirm' => __('Você tem certeza que deseja excluir a categoria # {0}?', $categoria->id),
             'escape' => false, 'class' => 'btn btn-danger']); ?>
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Categorias'), 
            ['controller' => 'categorias', 'action' => 'index'],
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Categoria'), 
            ['controller' => 'categorias', 'action' => 'add'], 
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end() ?>

<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Categorias') ?>
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Editar categoria</li>
    </ol>

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

