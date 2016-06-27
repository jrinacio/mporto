<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Empresas & Setores') ?>
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
            <ul>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-list"></i> Empresas'), [
                        'action' => 'index'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-list"></i> Categorias'), [
                        'controller' => 'Categorias', 'action' => 'index'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Categoria'), [
                        'controller' => 'Categorias', 'action' => 'add'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-list"></i> Usuários'), [
                        'controller' => 'Usuarios', 'action' => 'index'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Usuário'), [
                        'controller' => 'Usuarios', 'action' => 'add'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-list"></i> Empresas'), [
                        'controller' => 'Empresas', 'action' => 'index'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-list"></i> Nova Empresa'), [
                        'controller' => 'Empresas', 'action' => 'add'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-list"></i> Detalhes'), [
                        'controller' => 'Detalhes', 'action' => 'index'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Detalhe'), [
                        'controller' => 'Detalhes', 'action' => 'add'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-list"></I> Endereços'), [
                        'controller' => 'Enderecos', 'action' => 'index'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-plus"></I> Novo Endereço'), [
                        'controller' => 'Enderecos', 'action' => 'add'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-list"></i> Colaboradores'), [
                        'controller' => 'Funcionarios', 'action' => 'index'], ['escape' => false]) ?>
                </li>
                <li class="list-group-item">
                    <?= $this->Html->link(__('<i class="fa fa-list"></i> Novo Colaborador'), [
                        'controller' => 'Funcionarios', 'action' => 'add'], ['escape' => false]) ?>
                </li>
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

