<?= $this->start('vws'); ?>    
<li><a href="#" class="btn btn-primary active"><i class="fa fa-pencil"></i>&nbsp;Editar Contexto</a></li>
    <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir Contexto'),
            ['controller' => 'detalhes', 'action' => 'delete', $detalhe->id],
            ['confirm' => __('Você tem certeza que deseja excluir o contexto # {0}?', $detalhe->id),
             'escape' => false, 'class' => 'btn btn-danger']); ?>
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Contextos'), 
            ['controller' => 'detalhes', 'action' => 'index'],
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Contexto'), 
            ['controller' => 'detalhes', 'action' => 'add'], 
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end() ?>
<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Arquivos') ?>
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Editar dados da imagem<li>
    </ol>
    <?= $this->Form->create($detalhe) ?>
    <?php
        echo $this->Form->input('empresa_id', ['options' => $empresas, 'empty' => true]);
        echo $this->Form->input('titulo');
        echo $this->TinyMCE->editor(['selector' => 'textarea']);
        echo $this->Form->input('descricao');
        echo $this->Form->input('usuario_id', ['options' => $usuarios, 'empty' => true]);
        echo $this->Form->input('ativo');
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
