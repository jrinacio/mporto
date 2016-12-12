<?= $this->start('empr') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-building icone"></i>Empresa</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'empresas', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#"><i class="fa fa-plus icone"></i>Nova</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<?= $this->end() ?>
<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Empresas & Setores') ?>
        <small>Adicionar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Adicionar empresa</li>
    </ol>
    <div>
        <?= $this->Form->create($empresa, ['id' => 'upload', 'type' => 'file']) ?>
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
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

