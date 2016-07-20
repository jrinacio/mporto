<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Categorias') ?>
            <small>Adicionar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-plus"></i><?= __(' Adicionar') ?></a></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Categorias'), [
                    'action' => 'index'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Usuários'), 
                        ['controller' => 'Usuarios', 'action' => 'index'], 
                        ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Usuario'), 
                        ['controller' => 'Usuarios', 'action' => 'add'],
                        ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Eventos'), 
                        ['controller' => 'Eventos', 'action' => 'index'],
                        ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Evento'), 
                        ['controller' => 'Eventos', 'action' => 'add'],
                        ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Serviços'), 
                        ['controller' => 'Servicos', 'action' => 'index'],
                        ['escape' => false]) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Serviço'), 
                        ['controller' => 'Servicos', 'action' => 'add'],
                        ['escape' => false]) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
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
    </div>


