
<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<h1>Users</h1>

<table class="table table-hover table-striped table-responsive-sm table-sm tab">
    <thead>
        <a class="btn" href="<?php echo site_url('admin/users/create/?test=1'); ?>">
            <b>+</b> New User
        </a>
        <tr>
            <th >ID</th>
            <th >NAME</th>
            <th class="text-center " colspan="4"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user):?>
        <tr>
            
            <td><?=  $user['user_id']?></td>
            <td><?=  $user['user_name']?></td>
            <td>
                <span class="pull-right">
                    <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/projects/edit/' .  $project['id']); ?>">
                        <i class=" mx-2 ti-settings"></i>
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