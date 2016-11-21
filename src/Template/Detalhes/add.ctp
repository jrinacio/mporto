<?= $this->start('vws'); ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-plus"></i>&nbsp;Novo Contexto</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Contextos'), 
            ['controller' => 'detalhes', 'action' => 'index'],
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end(); ?>

<div class="col-md-10">
    <h1 class="page-header">
        <?= __('Detalhes/Contexto') ?>
        <small>Adicionar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Adicinar contexto</li>
    </ol>
    <?= $this->Form->create($detalhe) ?>

    <?php
        echo $this->Form->input('empresa_id', [
            'options' => $empresas, 'empty' => true, 'label' => 'Empresa']);
        echo $this->Form->input('titulo', ['label' => 'Título']);
    ?>

    <?= $this->TinyMCE->editor(['selector' => 'textarea']) ?>
    <?php
        echo $this->Form->input('descricao', [
            'label' => 'Contexto',
            'type' => 'textarea',
        ]);
    ?>
    <?php
        $atv = [0 => 'Não', 1 => 'Sim'];
        echo $this->Form->input('ativo', [
            'label' => 'Ativo',
            'options' => $atv,
            'default' => 1
        ]);
    ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
