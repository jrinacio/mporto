<?= $this->start('arqu'); ?>    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-archive icone"></i>Arquivos</a>
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
                                ['controller' => 'arquivos', 'action' => 'delete', $arquivo->id],
                                ['confirm' => __('Você tem certeza que deseja excluir o arquivo # {0}?', $arquivo->id),
                                 'escape' => false]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'arquivos', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'arquivos', 'action' => 'add'], 
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
        <?= __('Arquivos') ?>
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Editar dados da imagem<li>
    </ol>

    <?= $this->Form->create($arquivo) ?>

    <?= $this->Form->input('evento_id', [
            'options' => $eventos,
            'empty' => 'Selecione um serviço...']) ?>
    <?= $this->Form->input('servico_id', [
        'options' => $servicos,
        'empty' => 'Selecione um serviço...']) ?>

    <?php
        echo $this->Form->input('name', [
            'label' => 'Nome do arquivo',
            'disabled' => 'disabled']);
        echo $this->Form->input('titulo', ['label' => 'Título']);
        echo $this->Form->input('descricao', ['label' => 'Descrição']);
        $atv = [0 => 'Não', 1 => 'Sim'];
        echo $this->Form->input('ativo', ['options' => $atv]);
        echo $this->Form->input('carousel', ['label' => 'Exibir no topo rotativo']);
        echo $this->Form->input('acervo', ['label' => 'Exibir item do acervo na home']);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>



