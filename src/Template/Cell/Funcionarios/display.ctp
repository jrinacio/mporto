<div class="row">
    <?php foreach ($funcionarios as $funcionario): ?>
    <div class="col-md-3 text-center">
        <div class="thumbnail">
            <?= $this->Html->image('/funcImgs/funcionarios/file/' . $funcionario->dir . '/' . $funcionario->foto, [
                'alt' => $funcionario->nome,
                'escape' => false
            ]) ?>
            <div class="caption">
                <h4>
                    <?= $funcionario->nome ?><br>
                    <small><?= $funcionario->ds_cargo ?></small>
                </h4>
                <button class=" btn btn-primary">
                    <?= (__('<i class="fa fa-envelope-o fa-2"></i>', [
                        'class' => 'btn-primary',
                        'escape' => false
                    ])) ?>
                </button>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>