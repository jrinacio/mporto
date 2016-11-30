<?= $this->start('vws'); ?>
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
                            <a href="#"><i class="fa fa-plus icone"></i>Nova</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'categorias', 'action' => 'index'],
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
            <?= __('Categorias') ?>
            <small>Adicionar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        </ol>
        <div>
            <?= $this->Form->create($categoria) ?>
            <fieldset>
                <legend><?= __('Add Categoria') ?></legend>
                <?php
                    echo $this->Form->input('nome', ['label' => 'Nome']);
                    echo $this->Form->input('descricao', ['label' => 'Descrição']);
                    $optAtivos = [0 => 'Não', 1 => 'Sim'];
                    echo $this->Form->input('ativo', [
                        'label' => 'Ativo',
                        'options' => $optAtivos,
                        'default' => 1
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
</div>


