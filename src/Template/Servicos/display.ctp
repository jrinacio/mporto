<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Nossos Serviços
        </h1>
    </div>
    <?php foreach ($servicos as $servico) : ?>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-check"></i><?= $servico->nome ?></h4>
            </div>
            <div class="panel-body">
                <p><?= $servico->descricao ?></p>
                <?= $this->Html->link('Saiba mais', ['class' => 'btn btn-default']) ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="row">
            <?= $this->Form->create($servico) ?>
        <fieldset>
            <legend><i class="fa fa-fw fa-check"></i><?= __('Add Servico') ?></legend>
            <?php
                echo $this->Form->input('nome', ['label' => 'Nome']);
            ?>
            <select>
                <option><span class="icon">&#xf015;</span></option>
            </select>
            <?php
                $icones = [
                    '&#xf00c; Ok',
                    '&#xf102; Critical'
                ];
                echo $this->Form->input('icone', [
                    'label' => 'Ícone', 
                    'options' => $icones,
                    'class' => 'fa-select',
                    'escape' => false
                ]);
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
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    
</div>
