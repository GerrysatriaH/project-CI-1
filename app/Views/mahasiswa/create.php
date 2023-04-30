<div class="card card-primary rounded-2">
    <div class="card-header">
        <h4 class="text-muted"><i class="far fa-plus-square"></i> Add New Mahasiswa Data</h4>
    </div>
    <div class="card-body">
        <div class="contianer-fluid">
            <form action="<?= base_url('main/save_mhs') ?>" method="POST" id="create-form">
                <input type="hidden" name="id">

                <!-- Nim Mahasiswa -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="nim" class="control-label fw-bold pb-2">Nim</label>
                    <input type="text" class="form-control mb-2" id="nim" name="nim" required="required" value="<?= !empty($request->getPost('nim')) ? $request->getPost('nim') : '' ?>">
                </div>
                <!-- Nama Mahasiswa -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="nama" class="control-label fw-bold pb-2">Nama</label>
                    <input type="text" class="form-control mb-2" id="nama" name="nama" required="required" value="<?= !empty($request->getPost('nama')) ? $request->getPost('nama') : '' ?>">
                </div>
                <!-- Jenis Kelamin Mahasiswa -->
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="jk" class="control-label fw-bold pb-2">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-select form-select-border mb-2">
                        <option <?= !empty($request->getPost('jk')) && $request->getPost('jk') == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                        <option <?= !empty($request->getPost('jk')) && $request->getPost('jk') == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>
                <!-- Jenjang Pendidikan Mahasiswa -->
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="jp" class="control-label fw-bold pb-2">Jenjang Pendidikan</label>
                    <select name="jp" id="jp" class="form-select form-select-border mb-2">
                        <option value="">Pilih Jenjang Pendidikan</option>
                        <?php foreach($jp as $jps){?>
                            <option value="<?php echo $jps->id; ?>"><?php echo $jps->jp; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <!-- Status Perkawinan Mahasiswa -->
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <p class="fw-bold">Status Perkawinan</p>
                    <?php foreach($status_kawin as $sk) { ?>
                        <input class="form-check-input" type="radio" name="status_perkawinan" value="<?= $sk->id?> ">
                        <label class="form-check-label me-2"><?= $sk->status_perkawinan?></label>
                    <?php } ?>
                </div>
                <!-- Tempat Lahir Mahasiswa -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="tempat_lahir" class="control-label fw-bold pb-2">Tempat Lahir</label>
                    <input type="text" class="form-control mb-2" id="tempat_lahir" name="tempat_lahir" required="required" value="<?= !empty($request->getPost('tempat_lahir')) ? $request->getPost('tempat_lahir') : '' ?>">
                </div>
                <!-- Tanggal Lahir Mahasiswa -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="tanggal_lahir" class="control-label fw-bold pb-2">Tanggal Lahir</label>
                    <input type="date" class="form-control mb-2" id="tanggal_lahir" name="tanggal_lahir" required="required" value="<?= !empty($request->getPost('tanggal_lahir')) ? $request->getPost('tanggal_lahir') : '' ?>">
                </div>
                <!-- No Hp Mahasiswa -->
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="no_tlp" class="control-label fw-bold pb-2">No HP</label>
                    <input type="text" class="form-control mb-2" id="no_tlp" name="no_tlp" required="required" value="<?= !empty($request->getPost('no_tlp')) ? $request->getPost('no_tlp') : '' ?>">
                </div>
                <!-- Alamat Mahasiswa -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="address" class="control-label fw-bold pb-2">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="10" required="required" class="form-control mb-2" value="<?= !empty($request->getPost('alamat')) ? $request->getPost('alamat') : '' ?>"></textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer text-center">
        <button class="btn btn-primary" form="create-form" type="submit"><i class="fa fa-save"></i> Save Details</button>
        <button class="btn btn-secondary" form="create-form" type="reset"><i class="fa fa-times"></i> Reset</button>
    </div>
</div>