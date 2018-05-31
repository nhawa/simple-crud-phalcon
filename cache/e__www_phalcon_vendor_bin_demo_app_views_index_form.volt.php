
<div id="messages"><?= $this->flashSession->output() ?></div>

<div id="messages"><?= $this->flash2->output() ?></div>
<?= $this->tag->form([$action, 'method' => 'post']) ?>


<div class="form-group">
    <label for="nama">Nama</label>

    <?php if (isset($produk)) { ?>
        <?= $this->tag->textField(['nama', 'class' => 'form-control', 'value' => $produk->nama]) ?>
    <?php } else { ?>
        <?= $this->tag->textField(['nama', 'class' => 'form-control']) ?>
    <?php } ?>
</div>
<div class="form-group">
    <label for="deskripsi">Deskripsi</label>

    <?php if (isset($produk)) { ?>
        <?= $this->tag->textField(['deskripsi', 'class' => 'form-control', 'value' => $produk->deskripsi]) ?>
    <?php } else { ?>
        <?= $this->tag->textField(['deskripsi', 'class' => 'form-control']) ?>
    <?php } ?>
</div>


    <?= $this->tag->submitButton(['Submit', 'class' => 'btn btn-primary']) ?>

<?= $this->tag->endForm() ?>