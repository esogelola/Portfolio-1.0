<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<?php echo form_open('', 'enctype="multipart/form-data" class="email" role="form" method="post" id="contactForm" data-toggle="validator" action="" data-aos="fade-right" data-aos-duration="750"') ?>
<div class="container" id='home'>
    <div class="row " data-aos="fade-right" data-aos-duration="750">
        <!-- Section Titile -->
        <div class="col-md-12">
            <h1>Create a Project</h1>
        </div>
    </div>
    <div class="row " data-aos="fade-right" data-aos-duration="750">
        <div class="col-md-6 col-sm-6 mt-3">
            <div class="showcase-left form-submit">
                <label class="control-label" for="project_images[]">Showcase images*:</label>
                <input type="file" multiple="" name="project_images[]" required>

                <img src="<?= base_url() ?>/static/img/notebook-man.svg">
                <div class="alert alert-danger" role="alert">
                    <?= \Config\Services::validation()->listErrors(); ?>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-s  m-6 ">

            <div class="form-group label-floating">
                <label class="control-label" for="project_name">Project Name*</label>
                <input class="form-control" id="project_name" type="text" name="project_name" value="<?= $request->getPost('project_name') ?>" required >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="project_subtitle">Project Subtitle*</label>
                <input class="form-control" id="project_subtitle" type="text" name="project_subtitle" value="<?= $request->getPost('project_subtitle') ?>" required >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="project_type">Project Type*</label>
                <input class="form-control" id="project_type" type="text" name="project_type" value="<?= $request->getPost('project_type') ?>" required >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="project_github">Github Link</label>
                <input class="form-control" id="github_link" type="text" name="github_link" value="<?= $request->getPost('github_link') ?>" >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="github_zip_link">Github Zip Link</label>
                <input class="form-control" id="github_zip_link" type="text" name="github_zip_link" value="<?= $request->getPost('github_zip_link') ?>" >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="github_tarball_link">Github tarball Link</label>
                <input class="form-control" id="github_tarball_link" type="text" name="github_tarball_link" value="<?= $request->getPost('github_tarball_link') ?>" >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="project_exec">EXECUTABLE</label>
                <input id="project_exec" type="file" name="project_executable" value="" >
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="webapp_link">WEB APP LINK</label>
                <input class="form-control" id="webapp_link" type="text" name="webapp_link" value="<?= $request->getPost('webapp_link') ?>" >
            </div>
            <div class="form-group label-floating">
                <label for="project_status" class="control-label">Project Status*:</label>
                <select class="form-control" name="project_status">
                    <option value="0">In progress</option>
                    <option value="1">complete</option>
                    <option value="2">cancelled</option>
                </select> </div>
            <div class="form-group label-floating">
                <label for="project_description" class="control-label">Project Description*</label>
                <input type="file" name="project_description" value="<?= $request->getPost('project_description') ?>" required>
            </div>

            <div class="form-submit mt-5">
                <button class="btn" type="submit" name="createSubmit" id="form-submit" value="submit"><i class="ti-angle-double-right"></i> Create</button>
                <div class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>