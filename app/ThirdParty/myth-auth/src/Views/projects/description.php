<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<?= form_open('', 'role="form" method="post" id="contactForm"  action="" ') ?>

<textarea name="description">
    <?= $description ?>
  </textarea>
<input class="d-none" type="submit" name="submitbtn" value="">
</form>

<script>
    tinymce.init({
        selector: 'textarea',
        content_css: ['<?= base_url() . '/static/css/cayman.css' ?>', '<?= base_url() . '/static/css/normalize.css' ?>'],
        height: '100vh',
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'table emoticons template paste help save'
        ],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullpage | ' +
            'forecolor backcolor emoticons | help | save',
        menu: {
            favs: {
                title: 'My Favorites',
                items: 'code visualaid | searchreplace | spellchecker | emoticons'
            }
        },
        menubar: 'favs file edit view insert format tools table help',

    });
</script>

<?= $this->endSection() ?>