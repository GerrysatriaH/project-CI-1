<div class="card card-outline card-primary rounded-0">
    <div class="card-header">
        <div class="h4 mb-0">Mahasiswa Details</div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <dl>          
                <dt class="text-muted">Nim</dt>
                <dd class="ps-4"><?= isset($data['nim']) ? $data['nim'] : '' ?></dd>
                <dt class="text-muted">Nama</dt>
                <dd class="ps-4"><?= isset($data['nama']) ? $data['nama'] : '' ?></dd>
                <dt class="text-muted">Jenis Kelamin</dt>
                <dd class="ps-4"><?= isset($data['jk']) ? $data['jk'] : '' ?></dd>
                <dt class="text-muted">Jenjang Pendidikan</dt>
                <dd class="ps-4"><?= isset($data['jp']) ? $data['jp'] : '' ?></dd>
                <dt class="text-muted">Tempat Lahir</dt>
                <dd class="ps-4"><?= isset($data['tempat_lahir']) ? $data['tempat_lahir'] : '' ?></dd>
                <dt class="text-muted">Tanggal Lahir</dt>
                <dd class="ps-4"><?= isset($data['tanggal_lahir']) ? $data['tanggal_lahir'] : '' ?></dd>
                <dt class="text-muted">Alamat</dt>
                <dd class="ps-4"><?= isset($data['alamat']) ? $data['alamat'] : '' ?></dd>
                <dt class="text-muted">No HP</dt>
                <dd class="ps-4"><?= isset($data['no_tlp']) ? $data['no_tlp'] : '' ?></dd>
                
            </dl>
        </div>
    </div>
    <div class="card-footer text-center">
            <a href="<?= base_url('main/edit_mhs/'.(isset($data['id']) ? $data['id'] : '')) ?>" class="btn btn btn-primary btn-sm rounded-0"><i class="fa fa-edit"></i> Edit</a>
            <a href="<?= base_url('main/delete_mhs/'.(isset($data['id']) ? $data['id'] : '')) ?>" class="btn btn btn-danger btn-sm rounded-0" onclick="if(confirm('Are you sure to delete this mahasiswa data?') === false) event.preventDefault()"><i class="fa fa-trash"></i> Delete</a>
            <a href="<?= base_url('main/list_mhs') ?>" class="btn btn btn-light bg-gradient-light border btn-sm rounded-0"><i class="fa fa-angle-left"></i> Back to List</a>
    </div>
</div>