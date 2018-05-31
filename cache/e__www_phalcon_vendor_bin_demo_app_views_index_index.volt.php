<?php $v41173255521iterated = false; ?><?php $v41173255521iterator = $produk; $v41173255521incr = 0; $v41173255521loop = new stdClass(); $v41173255521loop->self = &$v41173255521loop; $v41173255521loop->length = count($v41173255521iterator); $v41173255521loop->index = 1; $v41173255521loop->index0 = 1; $v41173255521loop->revindex = $v41173255521loop->length; $v41173255521loop->revindex0 = $v41173255521loop->length - 1; ?><?php foreach ($v41173255521iterator as $value) { ?><?php $v41173255521loop->first = ($v41173255521incr == 0); $v41173255521loop->index = $v41173255521incr + 1; $v41173255521loop->index0 = $v41173255521incr; $v41173255521loop->revindex = $v41173255521loop->length - $v41173255521incr; $v41173255521loop->revindex0 = $v41173255521loop->length - ($v41173255521incr + 1); $v41173255521loop->last = ($v41173255521incr == ($v41173255521loop->length - 1)); ?><?php $v41173255521iterated = true; ?>
    <?php if ($v41173255521loop->first) { ?>
        <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
    <?php } ?>

    <tr>
        <td>
            <?= $value->id ?>
        </td>

        <td>
            <?= $value->nama ?>
        </td>

        <td>
            <?= $value->deskripsi ?>
        </td>


        <td width="7%">
            <?= $this->tag->linkTo(['edit/' . $value->id, 'Edit']) ?> | <?= $this->tag->linkTo(['delete/' . $value->id, 'Delete']) ?>
        </td>

    </tr>

    <?php if ($v41173255521loop->last) { ?>
        </tbody>
        </table>
    <?php } ?>
<?php $v41173255521incr++; } if (!$v41173255521iterated) { ?>
    No products are recorded
<?php } ?>