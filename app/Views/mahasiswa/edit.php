<div class="card card-primary rounded-2">
    <div class="card-header">
        <h4 class="text-muted"><i class="far fa-edit"></i> Edit Mahasiswa Details</h4>
    </div>
    <div class="card-body">
        <div class="contianer-fluid">
            <form action="<?= base_url('main/save_mhs') ?>" method="POST" id="create-form">
                <input type="hidden" name="id" value="<?= isset($data['id']) ? $data['id'] : '' ?>">
                
                <!-- Nim Mahasiswa -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="nim" class="control-label fw-bold pb-2">Nim</label>
                    <input type="text" class="form-control mb-2" id="nim" name="nim" required="required" value="<?= isset($data['nim']) ? $data['nim'] : '' ?>">
                </div>
                <!-- Nama Mahasiswa -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="nama" class="control-label fw-bold pb-2">Nama</label>
                    <input type="text" class="form-control mb-2" id="nama" name="nama" required="required" value="<?= isset($data['nama']) ? $data['nama'] : '' ?>">
                </div>
                <!-- Jenis Kelamin Mahasiswa -->
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="jk" class="control-label fw-bold pb-2">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-select form-select-border mb-2">
                        <option <?= isset($data['jk']) && $data['jk'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                        <option <?= isset($data['jk']) && $data['jk'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>
                <!-- Jenjang Pendidikan Mahasiswa -->
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="jp" class="control-label fw-bold pb-2">Jenjang Pendidikan</label>
                    <select name="jp" id="jp" class="form-select form-select-border mb-2">
                        <?php foreach ($jp as $key => $value) : ?>
                            <option value="<?= $value->id; ?>" <?= isset($data['id_jp']) && $data['id_jp'] == $value->id ? 'selected' : ''; ?>><?= $value->jp ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- Status Perkawinan Mahasiswa -->
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <p class="fw-bold pb-2">Status Perkawinan</p>
                    <?php foreach($status_kawin as $key => $value) : ?>
                        <input class="form-check-input" type="radio" name="status_perkawinan" id="status_perkawinan" value="<?= $value->id; ?>" <?= isset($data['id_status_kawin']) && $data['id_status_kawin'] == $value->id ? 'checked' : ''; ?>>
                        <label class="form-check-label me-2"><?= $value->status_perkawinan?></label>
                    <?php endforeach; ?>
                </div>
                <!-- Tempat Lahir Mahasiswa -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="tempat_lahir" class="control-label fw-bold pb-2">Tempat Lahir</label>
                    <input type="text" class="form-control mb-2" id="tempat_lahir" name="tempat_lahir" required="required" value="<?= isset($data['tempat_lahir']) ? $data['tempat_lahir'] : '' ?>">
                </div>
                <!-- Tanggal Lahir Mahasiswa -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="tanggal_lahir" class="control-label fw-bold pb-2">Tanggal Lahir</label>
                    <input type="date" class="form-control mb-2" id="tanggal_lahir" name="tanggal_lahir" required="required" value="<?= isset($data['tanggal_lahir']) ? $data['tanggal_lahir'] : '' ?>">
                </div>
                <!-- No Handphone Mahasiswa -->
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="no_tlp" class="control-label fw-bold pb-2">No HP</label>
                    <input type="text" class="form-control mb-2" id="no_tlp" name="no_tlp" required="required" value="<?= isset($data['no_tlp']) ? $data['no_tlp'] : '' ?>">
                </div>
                <!-- Alamat Mahasiswa -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="address" class="control-label fw-bold pb-2">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="10" required="required" class="form-control mb-2"><?= isset($data['alamat']) ? $data['alamat'] : '' ?></textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer text-center">
        <button class="btn btn-primary" form="create-form" type="submit"><i class="fa fa-save"></i> Save Details</button>
        <a class="btn btn-secondary" href="<?= base_url('main/view_details_mhs/'.(isset($data['id']) ? $data['id'] : '')) ?>"><i class="fa fa-times"></i> Cancel</a>
    </div>
</div>