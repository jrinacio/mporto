<?= $this->start('vws') ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-plus"></i>&nbsp;Novo Serviço</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Serviços'), 
            ['controller' => 'servicos', 'action' => 'index'],
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end() ?>

<div class="col-md-10">
    <h1 class="page-header">
        <?= __('Serviços') ?>
        <small>Adicionar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Adicionar arquivo</li>
    </ol>
    <?= $this->Form->create($servico) ?>
    <?php
        echo $this->Form->input('nome', ['label' => 'Nome']);
        echo $this->Form->input('descricao', ['Descrição']);
//            echo $this->Form->input('usuario_id', ['options' => $usuarios, 'empty' => true]);
        echo $this->Form->input('categoria_id', [
            'options' => $categorias,
            'empty' => 'Selecione...']);
        $optAtivos = [0 => 'Não', 1 => 'Sim'];
        echo $this->Form->input('ativo', [
            'label' => 'Ativo',
            'options' => $optAtivos,
            'default' => 1
        ]);
        echo $this->Form->input('exibir', ['label' => 'Exibir na Homepage']);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>        

