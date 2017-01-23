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
                            <a href="#"><i class="fa fa-pencil icone"></i>Editar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o icone"></i>Excluir'),
                                ['controller' => 'detalhes', 'action' => 'delete', $detalhe->id],
                                ['confirm' => __('Você tem certeza que deseja excluir o contexto # {0}?', $detalhe->id),
                                 'escape' => false]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'detalhes', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'detalhes', 'action' => 'add'], 
                                ['escape' => false]) ?>
                        </td>
                    </tr>
               </table>
            </div>
        </div>
    </div>
<?= $this->end() ?>
<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Contexto') ?>
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Editar dados da imagem<li>
    </ol>
    <?= $this->Form->create($detalhe) ?>
    <?php
        echo $this->Form->input('empresa_id', ['options' => $empresas, 'empty' => true]);
        echo $this->Form->input('servico_id', ['options' => $servicos, 'empty' => true]);
        echo $this->Form->input('titulo');
        echo $this->TinyMCE->editor(['selector' => 'textarea']);
        echo $this->Form->input('descricao');
        echo $this->Form->input('usuario_id', ['options' => $usuarios, 'empty' => true]);
        echo $this->Form->input('ativo');
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
