<?= $this->start('vws'); ?>    
<li><a href="#" class="btn btn-primary active"><i class="fa fa-pencil"></i>&nbsp;Edita Serviço</a></li>
    <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir Serviço'),
            ['controller' => 'servicos', 'action' => 'delete', $servico->id],
            ['confirm' => __('Você tem certeza que deseja excluir o arquivo # {0}?', $servico->id),
             'escape' => false, 'class' => 'btn btn-danger']); ?>
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Serviços'), 
            ['controller' => 'servicos', 'action' => 'index'],
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Servico'), 
            ['controller' => 'servicos', 'action' => 'add'], 
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end() ?>

<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Serviço') ?>
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Editar dados do Serviço<li>
    </ol>
    <?= $this->Form->create($servico) ?>
    <?php
        echo $this->Form->input('nome');
        echo $this->Form->input('descricao');
        echo $this->Form->input('usuario_id', ['options' => $usuarios, 'empty' => true]);
        echo $this->Form->input('categoria_id', ['options' => $categorias, 'empty' => true]);
        echo $this->Form->input('ativo');
        echo $this->Form->input('exibir', ['label' => 'Exibir na Homepage']);
    ?>
    
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
