<div class="card card-outline card-primary rounded-2 mt-5">
    <div class="card-body">
        <div class="container-fluid">
            <h1 class="text-center">Welcome to CI4 Simple CRUD Application</h1>
        </div>
    </div>
</div>

<div class="card card-outline card-primary rounded-2 my-3">
    <div class="card-header">
        <h4 class="mb-0">List Of Mahasiswa</h4>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-striped table-hover">
                <colgroup>
                    <col width="10%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                </colgroup>
                <thead>
                    <tr class="text-light bg-secondary bg-gradient">
                        <th class="py-1 text-center">#</th>
                        <th class="py-1 text-center">Nim</th>
                        <th class="py-1 text-center">Nama</th>
                        <th class="py-1 text-center">Jenis Kelamin</th>
                        <th class="py-1 text-center">No Telp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($list_mhs) > 0): ?>
                        <?php $i = 1; ?>
                        <?php foreach($list_mhs as $row): ?>
                            <tr>
                            <th class="py-1 align-middle text-center"><?= $i++ ?></th>
                                <td class="py-1 text-center"><?= $row->nim ?></td>
                                <td class="py-1 text-center"><?= $row->nama ?></td>
                                <td class="py-1 text-center"><?= $row->jk ?></td>
                                <td class="py-1 text-center"><?= $row->no_tlp ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card card-outline card-primary rounded-2 my-3">
    <div class="card-header">
        <h4 class="mb-0">List Of Contact</h4>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-striped table-hover">
                <colgroup>
                    <col width="10%">
                    <col width="30%">
                    <col width="10%">
                    <col width="30%">
                </colgroup>
                <thead>
                    <tr class="bg-gradient bg-secondary text-light">
                        <th class="py-1 text-center">#</th>
                        <th class="py-1 text-center">Name</th>
                        <th class="py-1 text-center">Gender</th>
                        <th class="py-1 text-center">Contact</th>
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
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
 
        </div>
    </div>
</div>