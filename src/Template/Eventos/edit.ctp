<?= $this->start('vws'); ?>    
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-pencil"></i>&nbsp;Editar Evento</a></li>
    <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir Evento'),
            ['controller' => 'arquivos', 'action' => 'delete', $evento->id],
            ['confirm' => __('Você tem certeza que deseja excluir o evento # {0}?', $evento->id),
             'escape' => false, 'class' => 'btn btn-danger']); ?>
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Eventos'), 
            ['controller' => 'eventos', 'action' => 'index'],
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Evento'), 
            ['controller' => 'eventos', 'action' => 'add'], 
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end() ?>

<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Evento') ?>
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Editar dados da imagem<li>
    </ol>

    <?= $this->Form->create($evento) ?>
    <?php
        echo $this->Form->input('titulo', ['label' => 'Título']);
        echo $this->Form->input('descricao', [
            'type' => 'textarea', 
            'label' => 'Descrição']);
        echo $this->Form->input('categoria_id', [
            'label' => 'Categoria',
            'options' => $categorias]);
        echo $this->Form->input('dataEvento', ['empty' => true]);
        echo $this->Form->input('ativo', ['Ativo']);
        echo $this->Form->input('usuario_id', [
            'label' => 'Usuários',
            'options' => $usuarios]);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
