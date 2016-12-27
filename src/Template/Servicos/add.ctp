<?= $this->start('serv') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-cogs icone"></i>Serviços</a>
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
                                ['controller' => 'servicos', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
               </table>
            </div>
        </div>
    </div>
<?= $this->end() ?>

<div class="col-md-10">
    <h1 class="page-header">
        <?= __('Serviços') ?>
        <small>Adicionar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Adicionar arquivo</li>
    </ol>
    <?= $this->Form->create($servico) ?>
    <?php
        echo $this->Form->input('nome', ['label' => 'Nome']);
        echo $this->Form->input('descricao', ['Descrição']);
//            echo $this->Form->input('usuario_id', ['options' => $usuarios, 'empty' => true]);
        echo $this->Form->input('categoria_id', [
            'options' => $categorias,
            'empty' => 'Selecione...']);
        echo $this->Form->input('empresa_id', [
            'options' => $empresas,
            'empty' => 'Selecione...'
        ]);
        $optAtivos = [0 => 'Não', 1 => 'Sim'];
        echo $this->Form->input('ativo', [
            'label' => 'Ativo',
            'options' => $optAtivos,
            'default' => 1
        ]);
        echo $this->Form->input('exibir', ['label' => 'Exibir na Homepage']);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>        

