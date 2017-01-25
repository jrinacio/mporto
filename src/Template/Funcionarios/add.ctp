<?= $this->start('func'); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseSeven" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-users icone"></i>Funcionários</a>
            </h4>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse in">
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
                                ['controller' => 'funcionarios', 'action' => 'index'],
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
        <?= __('Funcionários') ?>
        <small>Adicionar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Adicionar Funcionário</li>
    </ol>
    <?= $this->Form->create($funcionario, ['id' => 'upload', 'type' => 'file']) ?>
        <?php
            echo $this->Form->input('nome', ['label' => 'Nome']);
            echo $this->Form->input('file', [
                    'label' => 'Foto',
                'type' => 'file',
                'id' => 'file',
                'label' => 'Adicionar foto'
                ]);
            echo $this->Form->input('email', [
                'type' => 'email',
                'placeholder' => 'Informe o e-mail...',
                'label' => 'E-mail'
            ]);
            echo $this->Form->input('telefone', ['label' => 'Telefone']);
            echo $this->Form->input('empresa_id', [
                'options' => $empresas, 
                'empty' => 'Selecione a empresa...',
                'label' => 'Empresa']);
            echo $this->Form->input('ds_cargo', ['label' => 'Cargo']);
            echo $this->Form->input('ic_ativo', [
                'options' => [1 => 'Sim', 0 => 'Não'],
                'default' => 1,
                'label' => 'Ativo'
            ]);
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
