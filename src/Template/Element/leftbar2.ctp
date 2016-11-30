
<div class="col-sm-2 col-md-2">
    <div class="panel-group" id="accordion">
        <?= $this->fetch('vws') ?>
        <?php if ($this->request['controller'] != 'Arquivos'): ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                            <i class="fa fa-archive icone"></i>Arquivos</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
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
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Categorias'): ?>
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="#collapseTwo" data-toggle="collapse" data-parent="#accordion">
                        <i class="fa fa-ellipsis-v icone"></i>Categorias</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <?= $this->html->link(__('<i class="fa fa-list icone"></i>Listar'),
                                    ['controller' => 'categorias', 'action' => 'index'],
                                    ['escape' => false]) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Nova'), 
                                    ['controller' => 'categorias', 'action' => 'add'], 
                                    ['escape' => false]) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Detalhes'): ?>
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="#collapseThree" data-toggle="collapse" data-parent="#accordion">
                            <i class="fa fa-file-word-o icone"></i>Contextos</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'),
                                    ['controller' => 'detalhes', 'action' => 'index'],
                                    ['escape' => false]) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'),
                                    ['controller' => 'detalhes', 'action' => 'index'],
                                    ['escape' => false]) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Empresas'): ?>
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                     <a href="#collapseFour" data-toggle="collapse" data-parent="#accordion">
                            <i class="fa fa-building icone"></i>Empresas</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <?= $this->html->link(__('<i class="fa fa-list icone"></i>Listar'),
                                    ['controller' => 'empresas', 'action' => 'index'],
                                    ['escape' => false]) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Empresa'), 
                                    ['controller' => 'empresas', 'action' => 'add'], 
                                    ['escape' => false]) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Enderecos'): ?>
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                     <a href="#collapseFive" data-toggle="collapse" data-parent="#accordion">
                            <i class="fa fa-map-marker icone"></i>Endereços</a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <?= $this->html->link(__('<i class="fa fa-list icone"></i>Listar'),
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
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Eventos'): ?>
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                     <a href="#collapseSix" data-toggle="collapse" data-parent="#accordion">
                            <i class="fa fa-calendar icone"></i>Eventos</a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <?= $this->html->link(__('<i class="fa fa-list icone"></i>Listar'),
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
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Servicos'): ?>
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                     <a href="#collapseSeven" data-toggle="collapse" data-parent="#accordion">
                            <i class="fa fa-cogs icone"></i>Serviços</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <?= $this->html->link(__('<i class="fa fa-list icone"></i>Listar'),
                                    ['controller' => 'servicos', 'action' => 'index'],
                                    ['escape' => false]) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                    ['controller' => 'servicos', 'action' => 'add'], 
                                    ['escape' => false]) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Usuarios'): ?>
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                     <a href="#collapseEight" data-toggle="collapse" data-parent="#accordion">
                            <i class="fa fa-users icone"></i>Usuários</a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <?= $this->html->link(__('<i class="fa fa-list icone"></i>Listar'),
                                    ['controller' => 'usuarios', 'action' => 'index'],
                                    ['escape' => false]) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                    ['controller' => 'usuarios', 'action' => 'add'], 
                                    ['escape' => false]) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
        


