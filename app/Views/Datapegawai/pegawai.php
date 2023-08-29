<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pegawai</h1>


    <!-- <?php if (session()->get('message')) : ?>
        <div class="alert alert-succes alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data Berhasil <strong><?= session()->getFlashdata('message'); ?></strong>
        </div>
    <?php endif; ?> -->

    <div class="swal" data-swal="<?= session()->get('message'); ?>"></div>


    <div class="row">
        <div class="col-md-6">
            <?php
            if (session()->get('err')) {
                echo "<div class='alert alert-danger' role='alert'>" . session()->get('err') . "</div>";
                session()->remove('err');
            }
            ?>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                        <i class="fa fa-plus"> Tambah Data</i>
                </div>
                <!-- Topbar Search -->
                <div class="col-start">
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." name="keyword" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="submit" name="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md">
                    <button onclick="window.print()" class="btn btn-outline-secondary shadow float-right ml-2">Print<i class="fa fa-print"></i></button>
                    <a href="/masterdata/excel" class="btn btn-outline-success shadow float-right">Excel<i class="fa fa-file-excel"></i></a>
                </div>
            </div>
            </button>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>No</th>
                        <th>PIC</th>
                        <th>ID</th>
                        <th>Divis</th>
                        <th>Jabatan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pegawai->getResultArray() as $row) : ?>
                        <tr>
                            <td scope="row"><?= $i;    ?></td>
                            <td><?= $row['PIC']; ?></td>
                            <td><?= $row['id_pegawai']; ?></td>
                            <td><?= $row['divisi']; ?></td>
                            <td><?= $row['jabatan']; ?></td>
                            <td>
                                <button type="button" data-toggle="modal" data-target="#modalUbah" id="btn-edit" class="btn btn-sm btn-warning" data-id="<?= $row['id']; ?>" data-aset="<?= $row['aset']; ?>" data-nama="<?= $row['nama']; ?>" data-tipe="<?= $row['tipe']; ?>" data-vendor="<?= $row['vendor']; ?>" data-lokasi="<?= $row['lokasi']; ?>" data-unit_pemakai="<?= $row['unit_pemakai']; ?>"><i class="fa fa-edit"></i></button>
                                <!-- <button type="button" data-toggle="modal" data-target="#modalHapus" class="btn btn-sm btn-danger"> <i class="fa fa-trash-alt"></i></button> -->
                                <a href="/masterdata/hapus/<?= $row['id']; ?>" class="btn btn-sm btn-danger btn-hapus"> <i class="fa fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal Ubah Data Assets-->
<div class="modal fade" id="modalUbah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/datapegawai/ubah'); ?>" method="post">
                    <input type="hidden" name="id" id="id-asset">
                    <div class="form-group mb-0">
                        <label for="PIC">PIC</label>
                        <input type="text" name="PIC" id="PIC" class="form-control" placeholder="Masukkan Nama PIC" value="<?= $row['PIC']; ?>">
                    </div>
                    <div class="form-group mb-0">
                        <label for="divisi">Divisi</label>
                        <input type="text" name="divisi" id="divisi" class="form-control" placeholder="Masukkan Divisi" value="<?= $row['divisi']; ?>">
                    </div>
                    <div class="form-group mb-0">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan Jabatan" value="<?= $row['jabatan']; ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Tambah Data Assets-->
<div class="modal fade" id="modalTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/datapegawai/tambah'); ?>" method="post">
                    <div class="form-group mb-0">
                        <div class="form-group mb-0">
                            <label for="nama">PIC</label>
                            <input type="text" name="PIC" id="PIC" class="form-control" placeholder="Masukkan Nama PIC">
                        </div>
                        <label for="nama">Divisi</label>
                        <input type="text" name="divisi" id="divisi" class="form-control" placeholder="Masukkan Divisi">
                    </div>
                    <div class="form-group mb-0">
                        <label for="tipe">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan Jabatan">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hapus Data Assets-->
<div class="modal fade" id="modalHapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/datapegawai/hapus/<?= $row['id_pegawai']; ?>" class="btn btn-primary">Yakin</a>
            </div>
        </div>
    </div>
</div>