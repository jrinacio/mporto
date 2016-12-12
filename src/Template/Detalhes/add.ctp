<?= $this->start('cont'); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseThree" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-file-word-o icone"></i>Contextos</a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse in">
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
                                ['controller' => 'detalhes', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
               </table>
            </div>
        </div>
    </div>
<?= $this->end(); ?>

<div class="col-md-10">
    <h1 class="page-header">
        <?= __('Detalhes/Contexto') ?>
        <small>Adicionar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Adicinar contexto</li>
    </ol>
    <?= $this->Form->create($detalhe) ?>

    <?php
        echo $this->Form->input('empresa_id', [
            'options' => $empresas, 'empty' => true, 'label' => 'Empresa']);
        echo $this->Form->input('titulo', ['label' => 'Título']);
    ?>

    <?= $this->TinyMCE->editor(['selector' => 'textarea']) ?>
    <?php
        echo $this->Form->input('descricao', [
            'label' => 'Contexto',
            'type' => 'textarea',
        ]);
    ?>
    <?php
        $atv = [0 => 'Não', 1 => 'Sim'];
        echo $this->Form->input('ativo', [
            'label' => 'Ativo',
            'options' => $atv,
            'default' => 1
        ]);
    ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
