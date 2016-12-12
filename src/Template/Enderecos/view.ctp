<?= $this->start('ende') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-map-marker icone"></i>Endereços</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="#"><i class="fa fa-search icone"></i>Detalhe</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-pencil icone"></i>Editar'), 
                                ['controller' => 'enderecos', 'action' => 'edit', $endereco->id],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Form->postLink(__('<i class="fa fa-trash-o icone"></i>Excluir'),
                                ['controller' => 'enderecos', 'action' => 'delete', $endereco->id],
                                ['confirm' => __('Você tem certeza que deseja excluir o endereco # {0}?', $endereco->id),
                                 'escape' => false]); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'enderecos', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'enderecos', 'action' => 'add'], 
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
        <?= __('Endereço') ?>
        <small>Detalhe</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Detalhe do endereço</li>
    </ol>
    <h3><?= h($endereco->id) ?></h3>
    <div class="table-responsive">
        <table class="table table-hover tablenoborder">
            <tr>
                <th class="col-md-2"><?= __('Empresa') ?></th>
                <td><?= $endereco->has('empresa') ? $this->Html->link($endereco->empresa->nome, ['controller' => 'Empresas', 'action' => 'view', $endereco->empresa->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Logradouro') ?></th>
                <td><?= h($endereco->logradouro) ?></td>
            </tr>
            <tr>
                <th><?= __('Numero') ?></th>
                <td><?= h($endereco->numero) ?></td>
            </tr>
            <tr>
                <th><?= __('Complemento') ?></th>
                <td><?= h($endereco->complemento) ?></td>
            </tr>
            <tr>
                <th><?= __('Bairro') ?></th>
                <td><?= h($endereco->bairro) ?></td>
            </tr>
            <tr>
                <th><?= __('Cidade') ?></th>
                <td><?= h($endereco->cidade) ?></td>
            </tr>
            <tr>
                <th><?= __('Estado') ?></th>
                <td><?= h($endereco->estado) ?></td>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($endereco->id) ?></td>
            </tr>
        </table>
    </div>
</div>
