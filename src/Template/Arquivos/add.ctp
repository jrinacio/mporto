<?= $this->start('vws'); ?>
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
                            <a href="#"><i class="fa fa-plus icone"></i>Novo</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'arquivos', 'action' => 'index'],
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

    <?= $this->Form->create($arquivo, ['id' => 'upload', 'type' => 'file']) ?>

    <?php
//            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
        echo $this->Form->input('evento_id', [
            'options' => $eventos,
            'empty' => 'Selecione um evento...']);
        echo $this->Form->input('servico_id', [
            'options' => $servicos,
            'empty' => 'Selecione um serviço...']);
        echo $this->Form->input('file', [
            'type' => 'file',
            'id' => 'file',
            'label' => 'Adicionar arquivo'
        ]);
        echo $this->Form->input('titulo', [
            'label' => 'Título',
            'placeholder' => 'Insira um título para imagem']);
        echo $this->Form->input('descricao', [
            'label' => 'Descrição',
            'placeholder' => 'Insira um descrição para a imagem...',
            'type' => 'textarea',
            'rows' => 2]);
        $atv = [0 => 'Não', 1 => 'Sim'];
        echo $this->Form->input('ativo', [
            'options' => $atv,
            'default' => 1,
            'class' => 'imputpequeno'
        ]);
    ?>
    <?= $this->Form->button(__('Gravar')) ?>
    <?= $this->Form->button(__('Limpar'), ['type' => 'reset']) ?>
    <?= $this->Form->end() ?>
</div>


