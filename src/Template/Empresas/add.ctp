<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Empresas & Setores') ?>
            <small>Adicionar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
            <li class="active">Adicionar empresa</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="list-group">
            <ul class="nav nav-stacked">
                <li><a href="#" class="btn btn-primary active"><i class="fa fa-plus"></i>&nbsp;Adicionar empresa</a></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar empresas'), 
                        ['action' => 'index'], 
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar categorias'), 
                        ['controller' => 'Categorias', 'action' => 'index'], 
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova categoria'), 
                        ['controller' => 'Categorias', 'action' => 'add'], 
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar usuários'), 
                        ['controller' => 'Usuarios', 'action' => 'index'], 
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo usuário'), 
                        ['controller' => 'Usuarios', 'action' => 'add'], 
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Detalhes empresa'), [
                        'controller' => 'Detalhes', 'action' => 'index'], 
                        ['escape' => false, 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo detalhe'), 
                        ['controller' => 'Detalhes', 'action' => 'add'], 
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></I> Listar endereços'), 
                        ['controller' => 'Enderecos', 'action' => 'index'], 
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></I> Novo endereço'), 
                        ['controller' => 'Enderecos', 'action' => 'add'], 
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Colaboradores'), 
                        ['controller' => 'Funcionarios', 'action' => 'index'], 
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Novo colaborador'), 
                        ['controller' => 'Funcionarios', 'action' => 'add'], 
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div>
            <?= $this->Form->create($empresa, ['id' => 'upload', 'type' => 'file']) ?>
            <fieldset>
            <legend><?= __('Add Empresa') ?></legend>
            <?php
                echo $this->Form->input('nome', [
                    'label' => 'Nome do Parceiro', 'empty' => 'Nome do parceiro...'
                ]);
                echo $this->Form->input('categoria_id', [
                    'label' => 'Categorias', 'options' => $categorias, 'empty' => true]);
                echo $this->Form->input('link', ['label' => 'Website']);
                echo $this->Form->input('email', ['label' => 'E-mail']);
                echo $this->Form->input('telefone', ['label' => 'Telefone']);
    //            echo $this->Form->input('dir');
                echo $this->Form->input('filename', [
                    'type' => 'file',
                    'id' => 'file',
                    'label' => 'Nome do arquivo'
                ]);
                $atv = [0 => 'Não', 1 => 'Sim'];
                echo $this->Form->input('ativo', [
                    'options' => $atv,
                    'default' => 1
                ]);
    //            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
                echo $this->Form->input('parent_id', [
                    'options' => $setores,
                    'empty' => true,
                    'label' => 'Empresa/Setor'
                ]);
            ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    
</div>
</div>

