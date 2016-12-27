<?= $this->start('user'); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-users icone"></i>Usuários</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="#"><i class="fa fa-plus icone"></i>Novo</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'usuarios', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
               </table>
            </div>
        </div>
    </div>
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
