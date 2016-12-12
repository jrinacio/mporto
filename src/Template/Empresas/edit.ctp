<?= $this->start('empr') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-building icone"></i>Empresas</a>
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
                                ['controller' => 'empresas', 'action' => 'delete', $empresa->id],
                                ['confirm' => __('Você tem certeza que deseja excluir a empresa # {0}?', $empresa->id),
                                 'escape' => false]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'empresas', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'empresas', 'action' => 'add'], 
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
            <?= __('Empresas e Setores') ?>
            <small>Editar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
            <li class="active">Editar dados da empresa / setor</li>
        </ol>
       
        <?= $this->Form->create($empresa, ['id' => 'upload', 'type' => 'file']) ?>
        <?php 
            echo $this->Form->input('nome', ['label' => 'Nome', 'empty' => 'Nome da empresa parceira']);
            echo $this->Form->input('categoria_id', ['label' => 'Categoria', 'options' => $categorias, 'empty' => true]);
            echo $this->Form->input('link', ['label' => 'Website', ]);
            echo $this->Form->input('email', ['label' => 'E-mail']);
            echo $this->Form->input('telefone', ['label' => 'Telefone']);
//            echo $this->Form->input('dir');
//            echo $this->Form->input('filename', [
//                'type' => 'file',
//                'id' => 'file',
//                'label' => 'Nome do arquivo de logotipo']);
            $atv = [0 => 'Não', 1 => 'Sim'];
            echo $this->Form->input('ativo', [
                'label' => 'Ativo',
                'options' => $atv,
                'default' => 1
            ]);
//            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
            echo $this->Form->input('parent_id', [
                'label' => 'Empresa',
                'options' => $empresas,
                'empty' => true]);
        ?>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
