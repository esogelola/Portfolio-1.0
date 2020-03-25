
<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<h1>Projects</h1>

<table class="table table-hover table-striped table-responsive-sm table-sm tab">
    <thead>
        <a class="btn" href="<?php echo site_url('admin/projects/create'); ?>">
            <b>+</b> New Project
        </a>
        <tr>
            <th >ID</th>
            <th >NAME</th>
            <th >CREATION</th>
            <th >MODIFIED</th>
            <th >STATUS</th>
            <th >TYPE</th>
            <th class="text-center " colspan="4"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($projects as $project):?>
        <tr>
            
            <td><?=  $project['id']?></td>
            <td><?=  $project['project_name']?></td>
            <td><?=  date('d/m/Y h:i:s A' , strtotime($project['creation']) ) ?></td>
            <td><?=  date('d/m/Y h:i:s A' , strtotime($project['modified'])) ?></td>
            <td><?php
            switch ($project['project_status']) {
                case 0:
                    echo 'In progress';
                    break;
                case 1:
                      echo 'complete';
                    break;
                case 2:
                        echo 'cancelled';   
                    break;
            }; ?></td>
            <td><?=  $project['project_type']?></td>
            <td>
                <span class="pull-right">
                    <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/projects/edit/' .  $project['id']); ?>">
                        <i class=" mx-2 ti-settings"></i>
                    </a>
                    <a class="btn btn-sm btn-secondary" href="<?php echo base_url('admin/projects/images' . '/' .   url_title($project['project_name'],'_', TRUE)); ?>">
                        <i class=" mx-2 ti-image"></i>
                    </a>
                    <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/projects/description' . '/' .  url_title($project['project_name'],'_', TRUE)); ?>">
                        <i class=" mx-2 ti-text"></i>
                    </a>
                    <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/projects/delete' . '/' .  $project['id']); ?>">
                        <i class=" mx-2 ti-trash"></i>
                    </a>
                  
                </span>
            </td>
        </tr>
            <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>