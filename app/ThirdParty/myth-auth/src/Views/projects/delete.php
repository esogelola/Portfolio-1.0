<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<div class="container">
    <h1>Are you sure you want to delete <?= $project['project_name'] ?></h1>
    <hr>
<div class="row">
    <div class="col mx-auto text-center">
    <?php echo form_open('', ' role="form" method="post" id="contactForm" data-toggle="validator" action="" data-aos="fade-right" data-aos-duration="750"') ?>
      <input type="submit" name="choice" value="Yes">
  </form>
    </div>
    <div class="col mx-auto text-center">
      <form action=<?= site_url("admin/projects/")?> method="post">
  
      <input type="submit" value="No">
  </form>
    </div>
  </div>
  
</div>
<?= $this->endSection() ?>