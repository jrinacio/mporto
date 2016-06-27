<!-- carousel partners -->
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">
            Nossos Parceiros
        </h2>
    </div>
    <div class="col-md-12">
        <div class="carousel slide" id="partners">
            <div class="carousel-inner">
                <?php $m = 1; ?>
                <?php foreach ($parceiros as $parceiro): ?>
                <div class="item<?= $m === 1 ? ' active' : null; ?>">
                    <div class="col-md-2">
                        <?= $this->Html->image('/img/empresas/filename/' .
                                $parceiro->dir . '/' .
                                $parceiro->filename, [
                                    'class' => 'img-responsive img-thumbnail',
                                    'alt' => $parceiro->nome,
                                    'url' => 'http://' . $parceiro->link,
                                    'target' => '_blank'
                                ]) ?>
                    </div>
                </div>
                <?php 
                    $m++;
                    endforeach; 
                ?>
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