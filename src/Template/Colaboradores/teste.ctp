<?
<div class="row">
    <div class="col-md-12">
        <div class="carousel slide" id="partners">
            <div class="carousel-inner">
                <?php foreach ($colaboradores as $colaborador): ?>
           
                <div class="item">
                    <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                        <?= $this->Html->image('/img/colaboradores/filename/' . 
                                        $colaborador->dir . '/portrait_' .
                                        $colaborador->filename);
//                            $this->Html->link(
//                                $this->Html->image('/img/colaboradores/filename/' . 
//                                        $parceiro->dir . '/portrait_' .
//                                        $parceiro->filename, [
//                                            'alt' => $parceiro->nome,
//                                            'escape' => 'false'
//                                        ]),
//                                $parceiro->link);
                        ?>
                    </div>
                    <div class="carousel-inner">
                <?php foreach ($colaboradores as $colaborador): ?>
           
                <div class="item">
                    <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                        <?= $this->Html->image('/img/colaboradores/filename/' . 
                                        $colaborador->dir . '/portrait_' .
                                        $colaborador->filename);
//                            $this->Html->link(
//                                $this->Html->image('/img/colaboradores/filename/' . 
//                                        $parceiro->dir . '/portrait_' .
//                                        $parceiro->filename, [
//                                            'alt' => $parceiro->nome,
//                                            'escape' => 'false'
//                                        ]),
//                                $parceiro->link);
                        ?>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
                <?php endforeach; ?>
                </div>
            </div>
            <a class="left carousel-control" href="#partners" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
            </a>
            <a class="right carousel-control" href="#partners" data-slide="next">
                <i class="fa fa-chevron-right"></i>
            </a>
        </div>
    </div>
</div>

