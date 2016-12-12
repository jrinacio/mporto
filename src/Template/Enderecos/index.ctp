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
                        <a href="#"><i class="fa fa-list icone"></i>Endereços</a>
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
        <?= __('Endereços') ?>
        <small>Listagem</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Lista de endereços</li>
    </ol>
    <div class="table-responsive">
        <table class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                    <th class="col-md-2"><?= $this->Paginator->sort('empresa_id') ?></th>
                    <th class="col-md-3"><?= $this->Paginator->sort('logradouro') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('complemento') ?></th>
                    <th><?= $this->Paginator->sort('bairro') ?></th>
                    <th><?= $this->Paginator->sort('cidade') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th class=""><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enderecos as $endereco): ?>
                        <tr>
                            <td><?= $this->Number->format($endereco->id) ?></td>
                            <td><?= $endereco->has('empresa') ? $this->Html->link($endereco->empresa->nome, ['controller' => 'Empresas', 'action' => 'view', $endereco->empresa->id]) : '' ?></td>
                            <td><?= h($endereco->logradouro) ?></td>
                            <td><?= h($endereco->numero) ?></td>
                            <td><?= h($endereco->complemento) ?></td>
                            <td><?= h($endereco->bairro) ?></td>
                            <td><?= h($endereco->cidade) ?></td>
                            <td><?= h($endereco->estado) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                        ['action' => 'view', $endereco->id],
                                        ['escape' => false, 'class' => 'btn btn-primary']) ?>
                                <?= $this->Html->link(__('<i class="fa fa-edit fa-lg"></i>'), 
                                        ['action' => 'edit', $endereco->id],
                                        ['escape' => false, 'class' => 'btn btn-primary']) ?>
                                <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                        ['action' => 'delete', $endereco->id], 
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id),
                                         'escape' => false, 'class' => 'btn btn-danger']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>    
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>


