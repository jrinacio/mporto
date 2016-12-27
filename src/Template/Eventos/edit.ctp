<?= $this->start('even'); ?>
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
                            <a href="#"><i class="fa fa-pencil icone"></i>Editar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o icone"></i>Excluir'),
                                ['controller' => 'eventos', 'action' => 'delete', $evento->id],
                                ['confirm' => __('Você tem certeza que deseja excluir o evento # {0}?', $evento->id),
                                 'escape' => false]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'eventos', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'eventos', 'action' => 'add'], 
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
        <?= __('Evento') ?>
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Editar dados da imagem<li>
    </ol>

    <?= $this->Form->create($evento) ?>
    <?php
        echo $this->Form->input('titulo', ['label' => 'Título']);
        echo $this->Form->input('descricao', [
            'type' => 'textarea', 
            'label' => 'Descrição']);
        echo $this->Form->input('categoria_id', [
            'label' => 'Categoria',
            'options' => $categorias]);
        echo $this->Form->input('dataEvento', ['empty' => true]);
        echo $this->Form->input('ativo', ['Ativo']);
        echo $this->Form->input('usuario_id', [
            'label' => 'Usuários',
            'options' => $usuarios]);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
