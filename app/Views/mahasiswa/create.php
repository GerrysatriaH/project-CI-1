<div class="card card-primary rounded-0">
    <div class="card-header">
        <h4 class="text-muted"><i class="far fa-plus-square"></i> Add New Mahasiswa Data</h4>
    </div>
    <div class="card-body">
        <div class="contianer-fluid">
            <form action="<?= base_url('main/save_mhs') ?>" method="POST" id="create-form">
                <input type="hidden" name="id">
 
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="nim" class="control-label">Nim</label>
                    <input type="text" class="form-control" id="nim" name="nim" required="required" value="<?= !empty($request->getPost('nim')) ? $request->getPost('nim') : '' ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="nama" class="control-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required="required" value="<?= !empty($request->getPost('nama')) ? $request->getPost('nama') : '' ?>">
                </div>
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="jk" class="control-label">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-select form-select-border">
                        <option <?= !empty($request->getPost('jk')) && $request->getPost('jk') == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                        <option <?= !empty($request->getPost('jk')) && $request->getPost('jk') == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="jp" class="control-label">Jenjang Pendidikan</label>
                    <select name="jp" id="jp" class="form-select form-select-border">
                        <option value="">Pilih Jenjang Pendidikan</option>
                        <?php foreach($jp as $jps){?>
                            <option value="<?php echo $jps->id; ?>"><?php echo $jps->jp; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="tempat_lahir" class="control-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required="required" value="<?= !empty($request->getPost('tempat_lahir')) ? $request->getPost('tempat_lahir') : '' ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required="required" value="<?= !empty($request->getPost('tanggal_lahir')) ? $request->getPost('tanggal_lahir') : '' ?>">
                </div>
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="no_tlp" class="control-label">No HP</label>
                    <input type="text" class="form-control" id="no_tlp" name="no_tlp" required="required" value="<?= !empty($request->getPost('no_tlp')) ? $request->getPost('no_tlp') : '' ?>">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="address" class="control-label">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="10" required="required" class="form-control" value="<?= !empty($request->getPost('alamat')) ? $request->getPost('alamat') : '' ?>"></textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer text-center">
        <button class="btn btn-primary" form="create-form" type="submit"><i class="fa fa-save"></i> Save Details</button>
        <button class="btn btn-secondary" form="create-form" type="reset"><i class="fa fa-times"></i> Reset</button>
    </div>
</div>