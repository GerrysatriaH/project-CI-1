<div class="card card-outline card-primary rounded-2">
    <div class="card-header">
        <h4 class="mb-0">List Of Mahasiswa</h4>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <a class="btn btn-success my-2" href="<?= base_url('main/create_mhs')?>"><i class="fa-solid fa-user-plus"></i> Add Data </a>
            <table class="table table-striped table-hover">
                <colgroup>
                    <col width="10%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="5%">
                </colgroup>
                <thead>
                    <tr class="text-light bg-secondary bg-gradient">
                        <th class="py-1 text-center">#</th>
                        <th class="py-1 text-center">Nim</th>
                        <th class="py-1 text-center">Nama</th>
                        <th class="py-1 text-center">Jenis Kelamin</th>
                        <th class="py-1 text-center">No Telp</th>
                        <th class="py-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($list) > 0): ?>
                        <?php $i = 1; ?>
                        <?php foreach($list as $row): ?>
                            <tr>
                            <th class="py-1 align-middle text-center"><?= $i++ ?></th>
                                <td class="py-1 text-center"><?= $row->nim ?></td>
                                <td class="py-1 text-center"><?= $row->nama ?></td>
                                <td class="py-1 text-center"><?= $row->jk ?></td>
                                <td class="py-1 text-center"><?= $row->no_tlp ?></td>
                                <td class="py-1 align-middle text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="<?= base_url('main/view_details_mhs/'.$row->id) ?>" class="btn btn-primary text-light rounded-left" title="View Data"><i class="fa fa-eye"></i></a>
                                        <a href="<?= base_url('main/edit_mhs/'.$row->id) ?>" class="btn btn-warning text-light rounded-0" title="Edit Data"><i class="fa fa-edit"></i></a>
                                        <a href="<?= base_url('main/delete_mhs/'.$row->id) ?>" onclick="if(confirm('Are you sure to delete this data?') === false) event.preventDefault()" class="btn btn-danger rounded-right" title="Delete Data"><i class="fa fa-trash"></i></a>
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