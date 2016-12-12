<?= $this->start('cate'); ?>    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseTwo" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-ellipsis-v icone"></i>Categorias</a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in">
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
                                ['controller' => 'categorias', 'action' => 'delete', $categoria->id],
                                ['confirm' => __('Você tem certeza que deseja excluir a categoria # {0}?', $categoria->id),
                                 'escape' => false]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'categorias', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'categorias', 'action' => 'add'], 
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
        <?= __('Categorias') ?>
        <small>Editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Editar categoria</li>
    </ol>

    <?= $this->Form->create($categoria) ?>
    <?php
        echo $this->Form->input('nome', ['label' => 'Nome', 'empty' => 'Nome da categoria...']);
        echo $this->Form->input('descricao', ['label' => 'Descrição']);
//                echo $this->Form->input('usuario_id', ['options' => $usuarios]);
        $atv = [0 => 'Não', 1 => 'Sim'];
        echo $this->Form->input('ativo', ['label' => 'Ativo', 
            'options' => $atv]);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

