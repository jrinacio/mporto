<?= $this->start('vws'); ?>    
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-pencil"></i>&nbsp;Editar Usuário</a></li>
    <li><?= $this->Form->postLink(__('<i class="fa fa-trash-o"></i> Excluir Usuário'),
            ['controller' => 'usuários', 'action' => 'delete', $usuario->id],
            ['confirm' => __('Você tem certeza que deseja excluir o usuário # {0}?', $usuario->id),
             'escape' => false, 'class' => 'btn btn-danger']); ?>
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Usuários'), 
            ['controller' => 'usuários', 'action' => 'index'],
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Usuário'), 
            ['controller' => 'usuarios', 'action' => 'add'], 
            ['escape' => false, 'class' => 'btn btn-primary']) ?>
    </li>
<?= $this->end() ?>

<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Usuário') ?>
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Editar dados do Usuário<li>
    </ol>
    <?= $this->Form->create($usuario) ?>
    <?php
        echo $this->Form->input('nome', ['label' => 'Nome']);
        echo $this->Form->input('email', ['label' => 'E-mail']);
//            echo $this->Form->input('senha', ['label' => 'Senha']);
        $optPerfis = [1 => 'Administrador', 2 => 'Padrão'];
        echo $this->Form->input('perfil', [
            'label' => 'perfil',
            'options' => $optPerfis]);
        $optAtivos = [1 => 'Sim', 0 => 'Não'];
        echo $this->Form->input('ativo', [
            'label' => 'perfil',
            'options' => $optAtivos]);
    ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
