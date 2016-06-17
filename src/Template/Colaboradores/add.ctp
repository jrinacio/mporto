<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Colaborares') ?>
            <small>Adicionar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
            <li class="active">Adicionar colaborar</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <ul class="side-nav">
                <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-list"></i> Colaboradores'), [
                    'action' => 'index'], ['escape' => false]) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('<i class=""fa fa-list"></i> List Usuarios'), [
                    'controller' => 'Usuarios', 'action' => 'index'], ['escape' => false]) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Usuario'), [
                    'controller' => 'Usuarios', 'action' => 'add'], ['escape' => false]) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div>
            <?= $this->Form->create($colaborador, ['id' => 'upload', 'type' => 'file']) ?>
            <?php
                echo $this->Form->input('nome', [
                    'label' => 'Nome', 'empty' => 'Nome do colaborador...']);
                echo $this->Form->input('link', [
                    'label' => 'Endereço web do colaborador']);
                echo $this->Form->input('contato', [
                    'label' => 'Nome do contato']);
                echo $this->Form->input('email', [
                    'label' => 'E-mail']);
                echo $this->Form->input('fone', [
                    'label' => 'Telefone do contato'
                ]);
//                    echo $this->Form->input('dir', [
//                        'label' => 'Diretório']);
//                    echo $this->Form->input('filename', [
//                        'label' => 'Nome do arquivo']);
                $atv = [0 => 'Não', 1 => 'Sim'];
                echo $this->Form->input('ativo', [
                    'options' => $atv,
                    'default' => 1,
                ]);
//                    echo $this->Form->input('usuario_id', ['options' => $usuarios]);
            ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
