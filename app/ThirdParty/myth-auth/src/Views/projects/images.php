<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<style>
    .zoom {
        transition: transform .2s;
        /* Animation */
        width: 200px;
        height: 200px;
        margin: 0 auto;
    }

    .zoom:hover {
        transform: scale(1.5);
    }
</style>
<h1>Images</h1>
<?php echo form_open('', 'enctype="multipart/form-data" class="form" role="form" method="post" action=""') ?>
<div class="form-group label-floating">
    <label for="addImages[]" class="control-label">+ Add Image(s): </label>
    <input type="file" multiple="" name="addImages[]">
</div>

<div class="card-deck">
    <?php foreach ($images as $image) : ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $image['image_path'] ?>" class="card-img-top" alt="...">
            <div class="card-body">

                <h5 class="card-title"><?= $image['image_id']  . ' ' . $image['image_name'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $image['image_type'] ?> file</h6>


            </div>
            <div class="card-footer">


                <a href="<?php echo base_url('admin/projects/delImage/' . $image['image_id']  . '_' . $image['image_name'])    ?>" class="card-link">Delete</a>


            </div>
        </div>
    <?php endforeach ?>
</div>
<input class="form-control" type="submit" name="save" value="save">
</form>
<?= $this->endSection() ?>