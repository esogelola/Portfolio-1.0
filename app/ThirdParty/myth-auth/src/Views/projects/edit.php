
<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
  <?php echo form_open('', 'enctype="multipart/form-data" class="email" role="form" method="post" id="contactForm" data-toggle="validator" action="" data-aos="fade-right" data-aos-duration="750"') ?>
<div class="container" id='home' style="margin-top:8vw;">
    <div class="row " data-aos="fade-right" data-aos-duration="750">
        <!-- Section Titile -->
        <div class="col-md-12">
            <h1>Edit a Project</h1>

        </div>
    </div>
    <div class="row " data-aos="fade-right" data-aos-duration="750">
        <div class="col-md-6 col-sm-6 mt-3">
            <div class="showcase-left form-submit">
            <img src="<?=  base_url() ?>/static/img/folder-man.svg">
            </div>
            
        </div>
        <div class="col-md-6 col-s  m-6 ">

            <div class="form-group label-floating">
                <label class="control-label" for="project_name">Project Name*</label>
                <input class="form-control" id="project_name" type="text" name="project_name" value="<?= $project['project_name'] ?>" required >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="project_subtitle">Project Subtitle*</label>
                <input class="form-control" id="project_subtitle" type="text" name="project_subtitle" value="<?= $project['project_subtitle'] ?>" required >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="project_type">Project Type*</label>
                <input class="form-control" id="project_type" type="text" name="project_type" value="<?= $project['project_type'] ?>" required >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="project_github">Github Link</label>
                <input class="form-control" id="github_link" type="text" name="github_link" value="<?= $project['github_link'] ?>" >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="github_zip_link">Github Zip Link</label>
                <input class="form-control" id="github_zip_link" type="text" name="github_zip_link" value="<?= $project['github_zip_link'] ?>" >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="github_tarball_link">Github tarball Link</label>
                <input class="form-control" id="github_tarball_link" type="text" name="github_tarball_link" value="<?= $project['github_tarball_link'] ?>" >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="project_exec">Upload a new EXECUTABLE</label>
                <br>
                <input id="project_exec" type="file" name="project_executable" value="" >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="webapp_link">WEB APP LINK</label>
                <input class="form-control" id="webapp_link" type="text" name="webapp_link" value="<?= $project['webapp_link'] ?>" >
            </div>
            <div class="form-group label-floating">
                <label for="project_status" class="control-label">Project Status*:</label>
                <select class="form-control" name="project_status">

                    <option value="0"<?= $project['project_status'] == 0 ? 'selected' : ''?>>In progress</option>
                    <option value="1"<?= $project['project_status'] == 1 ? 'selected' : ''?>>complete</option>
                    <option value="2"<?= $project['project_status'] == 2 ? 'selected' : ''?>>cancelled</option>
                </select> 
            </div>
            <div class="form-group label-floating">
                <label for="project_description" class="control-label">Upload a new Project Description</label>
                <br>
                <input type="file" name="project_description"  >
            </div>
            
            <div class="form-submit mt-5">
                <button class="btn" type="submit" name="submit" id="form-submit" value="submit"><i class="ti-angle-right"></i>Save</button>
                <div class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>