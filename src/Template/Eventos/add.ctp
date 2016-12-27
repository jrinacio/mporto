<?= $this->start('even') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-calendar icone"></i>Eventos</a>
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
                                ['controller' => 'eventos', 'action' => 'index'],
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
    <?= __('Eventos') ?>
    <small>Adicionar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Adicionar arquivo</li>
    </ol>
    <?= $this->Form->create($evento) ?>
    <?php
            echo $this->Form->input('titulo', ['label' => 'Título']);
            echo $this->Form->input('descricao', ['label' => 'Descrição']);
            echo $this->Form->input('categoria_id', [
                'options' => $categorias, 
                'label' => 'Categorias', 
                'empty' => 'Selecione uma categoria...']);
            echo $this->Form->input('dataEvento', [
                'type' => 'text',
                'label' => 'Data do Evento',
                'empty' => 'Informe a data...']);
            echo $this->Form->input('ativo', ['label' => 'Ativo']);
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
