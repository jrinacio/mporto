<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Detalhes/Contexto') ?>
            <small>Adicionar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
            <li class="active">Adicinar contexto</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="list-group">
            <ul class="nav nav-stacked">
                <li><a href="#" class="btn btn-primary active"><i class="fa fa-plus"></i>&nbsp;Adicionar contexto</a></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Detalhes'), 
                        ['action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Empresas'), 
                        ['controller' => 'Empresas', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Empresa'), 
                        ['controller' => 'Empresas', 'action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Usuários'), 
                        ['controller' => 'Usuarios', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Novo Usuário'), 
                        ['controller' => 'Usuarios', 'action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <?= $this->Form->create($detalhe) ?>
        <fieldset>
        <legend><?= __('Adicionar Contexto') ?></legend>
        <?php
            echo $this->Form->input('empresa_id', [
                'options' => $empresas, 'empty' => true, 'label' => 'Empresa']);
            echo $this->Form->input('titulo', ['label' => 'Título']);
        ?>
        <?= $this->TinyMCE->editor(['theme' => 'simple', 'mode' => 'textareas']) ?>
        <?php
            echo $this->Form->input('descricao', [
                'label' => 'Contexto',
                'type' => 'textarea',
                'id' => 'editor'
                ]);
        ?>
        <?php
//            echo $this->Form->input('usuario_id', ['options' => $usuarios, 'empty' => true]);
            $atv = [0 => 'Não', 1 => 'Sim'];
            echo $this->Form->input('ativo', [
                'label' => 'Ativo',
                'options' => $atv,
                'default' => 1
            ]);
        ?>
    </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
