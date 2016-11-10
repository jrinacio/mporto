<?= $this->start('vws'); ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-plus"></i>&nbsp;Nova Categoria</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Categorias'), 
            ['controller' => 'categorias', 'action' => 'index'],
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end(); ?>

<div class="col-md-10 divisoria">
        <h1 class="page-header">
            <?= __('Categorias') ?>
            <small>Adicionar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        </ol>
        <div>
            <?= $this->Form->create($categoria) ?>
            <fieldset>
                <legend><?= __('Add Categoria') ?></legend>
                <?php
                    echo $this->Form->input('nome', ['label' => 'Nome']);
                    echo $this->Form->input('descricao', ['label' => 'Descrição']);
                    $optAtivos = [0 => 'Não', 1 => 'Sim'];
                    echo $this->Form->input('ativo', [
                        'label' => 'Ativo',
                        'options' => $optAtivos,
                        'default' => 1
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
</div>


