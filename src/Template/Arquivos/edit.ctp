<?= $this->start('vws'); ?>    
<li><a href="#" class="btn btn-primary active"><i class="fa fa-pencil"></i>&nbsp;Editar</a></li>
    <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir Arquivo'),
            ['controller' => 'arquivos', 'action' => 'delete', $arquivo->id],
            ['confirm' => __('Você tem certeza que deseja excluir o arquivo # {0}?', $arquivo->id),
             'escape' => false, 'class' => 'btn btn-danger']); ?>
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Arquivos'), 
            ['controller' => 'arquivos', 'action' => 'index'],
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

    <?= $this->Form->create($arquivo) ?>

    <?= $this->Form->input('evento_id', [
            'options' => $eventos,
            'empty' => 'Selecione um serviço...']) ?>
    <?= $this->Form->input('servico_id', [
        'options' => $servicos,
        'empty' => 'Selecione um serviço...']) ?>

    <?php
        echo $this->Form->input('name', [
            'label' => 'Nome do arquivo',
            'disabled' => 'disabled']);
        echo $this->Form->input('titulo', ['label' => 'Título']);
        echo $this->Form->input('descricao', ['label' => 'Descrição']);
        $atv = [0 => 'Não', 1 => 'Sim'];
        echo $this->Form->input('ativo', ['options' => $atv]);
        echo $this->Form->input('carousel', ['label' => 'Exibir no topo rotativo']);
        echo $this->Form->input('acervo', ['label' => 'Exiber item do acervo na home']);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>



