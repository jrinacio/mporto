<?= $this->start('serv'); ?>
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
                            <a href="#"><i class="fa fa-pencil icone"></i>Editar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o icone"></i>Excluir'),
                                ['controller' => 'servicos', 'action' => 'delete', $servico->id],
                                ['confirm' => __('Você tem certeza que deseja excluir o serviço # {0}?', $servico->id),
                                 'escape' => false]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'servicos', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'servicos', 'action' => 'add'], 
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
        <?= __('Serviço') ?>
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Editar dados do Serviço<li>
    </ol>
    <?= $this->Form->create($servico) ?>
    <?php
        echo $this->Form->input('nome');
        echo $this->Form->input('descricao');
        echo $this->Form->input('usuario_id', [
            'label' => 'Usuário',
            'options' => $usuarios, 
            'empty' => true]);
        echo $this->Form->input('categoria_id', [
            'label' => 'Categoria',
            'options' => $categorias, 
            'empty' => true]);
        echo $this->Form->input('empresa_id', [
            'label' => 'Empresa', 
            'options' => $empresas,
            'empty' => true]);
        echo $this->Form->input('ativo');
        echo $this->Form->input('exibir', ['label' => 'Exibir na Homepage']);
    ?>
    
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
