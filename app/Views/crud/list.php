<div class="card card-outline card-primary rounded-2">
    <div class="card-header">
        <h4 class="mb-0">List Of Contact</h4>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <a class="btn btn-success my-2" href="<?= base_url('main/create')?>"><i class="fa-solid fa-user-plus"></i> Add Data </a>
            <table class="table table-striped table-hover">
                <colgroup>
                    <col width="10%">
                    <col width="30%">
                    <col width="10%">
                    <col width="30%">
                    <col width="20%">
                </colgroup>
                <thead>
                    <tr class="bg-gradient bg-secondary text-light">
                        <th class="py-1 text-center">#</th>
                        <th class="py-1 text-center">Name</th>
                        <th class="py-1 text-center">Gender</th>
                        <th class="py-1 text-center">Contact</th>
                        <th class="py-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($list) > 0): ?>
                        <?php $i = 1; ?>
                        <?php foreach($list as $row): ?>
                            <tr>
                            <th class="p-1 align-middle text-center"><?= $i++ ?></th>
                                <td class="p-1 text-center align-middle"><?= $row->lastname.", ".$row->firstname.(!empty($row->middlename)? " ".$row->middlename:'') ?></td>
                                <td class="p-1 text-center align-middle"><?= $row->gender ?></td>
                                <td class="p-1 text-center align-middle"><?= $row->contact ?></td>
                                <td class="p-1 text-center align-middle text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="<?= base_url('main/view_details/'.$row->id) ?>" class="btn btn-primary text-light rounded-left" title="View Contact"><i class="fa fa-eye"></i></a>
                                        <a href="<?= base_url('main/edit/'.$row->id) ?>" class="btn btn-warning rounded-0" title="Edit Contact"><i class="fa fa-edit"></i></a>
                                        <a href="<?= base_url('main/delete/'.$row->id) ?>" onclick="if(confirm('Are you sure to delete this contact details?') === false) event.preventDefault()" class="btn btn-danger rounded-right" title="Delete Contact"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
 
        </div>
    </div>
</div>