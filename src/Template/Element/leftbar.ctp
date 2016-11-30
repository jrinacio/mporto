<div class="col-md-2 leftbar">
    <ul class="nav navbar-nav list-group">
        <!--<li class="active"><a href=""><i class="fa fa-list"></i>&nbsp;Arquivos</a></li>-->
        <?= $this->fetch('vws') ?>
        <?php if ($this->request['controller'] != 'Arquivos'): ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Arquivos</a>
                <ul class="dropdown-menu">
                    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Arquivos'), 
                        ['controller' => 'arquivos', 'action' => 'index'],
                        ['escape' => false]) ?>
                    </li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo arquivo'), 
                            ['controller' => 'arquivos', 'action' => 'add'], 
                            ['escape' => false]) ?>
                    </li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Categorias'): ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle btn-block" data-toggle="dropdown">Categorias</a>
                <ul class="dropdown-menu">
                    <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Categorias'),
                    ['controller' => 'categorias', 'action' => 'index'],
                    ['escape' => false]) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Categoria'), 
                            ['controller' => 'categorias', 'action' => 'add'], 
                            ['escape' => false]) ?></li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Detalhes'): ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle btn" data-toggle="dropdown">Contextos</a>
                <ul class="dropdown-menu">
                    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar Contextos'),
                        ['controller' => 'detalhes', 'action' => 'index'],
                        ['escape' => false]) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Contexto'),
                        ['controller' => 'detalhes', 'action' => 'index'],
                        ['escape' => false]) ?></li>
                </ul>
            </li>
        <?php endif;?>
        <?php if ($this->request['controller'] != 'Empresas'): ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle btn" data-toggle="dropdown">Empresas</a>
                <ul class="dropdown-menu">
                    <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Empresas'),
                        ['controller' => 'empresas', 'action' => 'index'],
                        ['escape' => false]) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Empresa'), 
                        ['controller' => 'empresas', 'action' => 'add'], 
                        ['escape' => false]) ?></li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Enderecos'): ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle btn" data-toggle="dropdown">Endereços</a>
                <ul class="dropdown-menu">
                    <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Endereços'),
                        ['controller' => 'enderecos', 'action' => 'index'],
                        ['escape' => false]) ?></li>
                    <li class="divider"></li>
                    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Endereco'), 
                        ['controller' => 'controller', 'action' => 'add'], 
                        ['escape' => false]) ?></li>
                </ul>
            </li>
            
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Eventos'): ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle btn" data-toggle="dropdown">Eventos</a>
                <ul class="dropdown-menu">
                    <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Eventos'),
                        ['controller' => 'eventos', 'action' => 'index'],
                        ['escape' => false]) ?></li>
                    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Evento'), 
                        ['controller' => 'eventos', 'action' => 'add'],
                        ['escape' => false]) ?></li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Servicos'): ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle btn" data-toggle="dropdown">Serviços</a>
                <ul class="dropdown-menu">
                    <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Serviços'),
                        ['controller' => 'servicos', 'action' => 'index'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Serviço'), 
                        ['controller' => 'Servicos', 'action' => 'add'],
                        ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if ($this->request['controller'] != 'Usuarios'): ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle btn" data-toggle="dropdown">Usuários</a>
                <ul class="dropdown-menu">
                    <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Usuários'),
                        ['controller' => 'usuarios', 'action' => 'index'],
                        ['escape' => false]) ?></li>
                    <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Usuário'), 
                        ['controller' => 'Usuarios', 'action' => 'add'],
                        ['escape' => false]) ?></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</div>
