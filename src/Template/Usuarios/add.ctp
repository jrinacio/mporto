<?= $this->start('vws'); ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-plus"></i>&nbsp;Novo Usuário</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Usuários'), 
            ['controller' => 'usuarios', 'action' => 'index'],
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end(); ?>
<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Arquivos') ?>
        <small>Adicionar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Adicionar arquivo</li>
    </ol>
    <?= $this->Form->create($usuario) ?>
        <?php
            echo $this->Form->input('nome', ['label' => 'Nome']);
            echo $this->Form->input('email', ['label' => 'E-mail']);
            echo $this->Form->input('senha', [
                'label' => 'Senha',
                'type' => 'password']);
            $optPerfis = [1 => 'Administrador', 2 => 'Padrão'];
            echo $this->Form->input('perfil', [
                'label' => 'Perfil',
                'options' => $optPerfis,
                'default' => 2]);
            $optAtivos = [1 => 'Sim', 0 => 'Não'];
            echo $this->Form->input('ativo', [
                'label' => 'Ativo',
                'options' => $optAtivos,
                'default' => 1
                ]);
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
