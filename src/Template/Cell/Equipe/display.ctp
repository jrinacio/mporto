<!-- Equipe -->
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Equipe
        </h2>
    </div>
    <?php foreach ($equipe->arquivos as $arquivo): ?>
        <div class="col-md-4 img-portfolio">
            <?= $this->Html->image('/imgs/arquivos/file/' . $arquivo->dir . '/' . $arquivo->name, [
                'class' => 'img-responsive img-thumbnail',
                'alt' => $arquivo->titulo,
                'escape' => false
            ]); ?>
            <h3><?= $arquivo->titulo ?></h3>
            <p><?= $arquivo->descricao ?></p>
        </div>
    <?php endforeach; ?>

 
</div>