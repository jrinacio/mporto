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
                <?php foreach ($colaboradores as $colaborador): ?>
                <div class="item<?= $m === 1 ? ' active' : null; ?>">
                    <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
                        <a href="<?= $colaborador->link ?>">
                            <?= $this->Html->image('/img/colaboradores/filename/' . 
                                    $colaborador->dir . '/square_' .
                                    $colaborador->filename, [
                                        'class' => 'img-responsive'
                                    ]) ?>
                            
                        </a>
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