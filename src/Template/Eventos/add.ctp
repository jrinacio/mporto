<?= $this->start('vws') ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-plus"></i>&nbsp;Novo Evento</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Eventos'), 
            ['controller' => 'eventos', 'action' => 'index'],
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end() ?>

<div class="col-md-10 divisoria">
    <h1 class="page-header">
    <?= __('Eventos') ?>
    <small>Adicionar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Adicionar arquivo</li>
    </ol>
    <?= $this->Form->create($evento) ?>
    <?php
            echo $this->Form->input('titulo', ['label' => 'Título']);
            echo $this->Form->input('descricao', ['label' => 'Descrição']);
            echo $this->Form->input('categoria_id', [
                'options' => $categorias, 
                'label' => 'Categorias', 
                'empty' => 'Selecione uma categoria...']);
            echo $this->Form->input('dataEvento', [
                'type' => 'text',
                'label' => 'Data do Evento',
                'empty' => 'Informe a data...']);
            echo $this->Form->input('ativo', ['label' => 'Ativo']);
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
