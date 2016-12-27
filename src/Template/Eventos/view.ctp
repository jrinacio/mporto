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
                            <a href="#"><i class="fa fa-search icone"></i>Detalhe</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Editar'), 
                                ['controller' => 'eventos', 'action' => 'edit', $evento->id],
                                ['escape' => false]) ?>
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
<?= $this->end('even'); ?>

<div class="col-md-10 divisoria">
    <h1 class="page-header">
    <?= __('Arquivo') ?>
    <small>Detalhe</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?>
        <li class="active">Detalhe do arquivo</li>    
    </ol>
    
    <h3><?= h($evento->id) ?></h3>
    <div class="table-responsive">
        <table class="table tablenoborder">
            <tr>
                <th class="col-md-2"><?= __('Titulo') ?></th>
                <td><?= h($evento->titulo) ?></td>
            </tr>
            <tr>
                <th><?= __('Categoria') ?></th>
                <td><?= $evento->has('categoria') ? $this->Html->link($evento->categoria->id, 
                        ['controller' => 'Categorias', 'action' => 'view', $evento->categoria->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Usuario') ?></th>
                <td><?= $evento->has('usuario') ? $this->Html->link($evento->usuario->email, 
                        ['controller' => 'Usuarios', 'action' => 'view', $evento->usuario->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($evento->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Ativo') ?></th>
                <td><?= $this->Number->format($evento->ativo) ?></td>
            </tr>
            <tr>
                <th><?= __('DataEvento') ?></th>
                <td><?= h($evento->dataEvento) ?></td>
            </tr>
            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($evento->created) ?></td>
            </tr>
            <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($evento->modified) ?></td>
            </tr>
            <tr>
                <th><?= __('Descricao') ?></th>
                <td><?= $this->Text->autoParagraph(h($evento->descricao)); ?></td>
            </tr>
        </table>
        
        <div class="related">
        
        <?php if (!empty($evento->arquivos)): ?>
            <h4><?= __('Relação de Arquivos') ?></h4>
            <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Evento Id') ?></th>
                <th><?= __('Servico Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Titulo') ?></th>
                <th><?= __('Size') ?></th>
                <th><?= __('Type') ?></th>
                <th><?= __('Dir') ?></th>
                <th><?= __('Ativo') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($evento->arquivos as $arquivos): ?>
            <tr>
                <td><?= h($arquivos->id) ?></td>
                <td><?= h($arquivos->usuario_id) ?></td>
                <td><?= h($arquivos->evento_id) ?></td>
                <td><?= h($arquivos->servico_id) ?></td>
                <td><?= h($arquivos->name) ?></td>
                <td><?= h($arquivos->titulo) ?></td>
                <td><?= h($arquivos->size) ?></td>
                <td><?= h($arquivos->type) ?></td>
                <td><?= h($arquivos->dir) ?></td>
                <td><?= h($arquivos->ativo) ?></td>
                <td><?= h($arquivos->created) ?></td>
                <td><?= h($arquivos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Arquivos', 'action' => 'view', $arquivos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Arquivos', 'action' => 'edit', $arquivos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Arquivos', 'action' => 'delete', $arquivos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arquivos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    </div>

</div>
