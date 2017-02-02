<div class="row">
    <?php foreach ($funcionarios as $funcionario): ?>
    <div class="col-md-4 text-center">
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
                <p></p>
                <?= (__('<i class="fa fa-at fa-2"></i>' . $funcionario->email, [
                    'escape' => false
                ])) ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>