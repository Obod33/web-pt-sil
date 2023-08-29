<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Penggunaan Aset</h1>

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
                <div class="col-md">
                    <!-- Button trigger modal -->
                    <a class="btn btn-primary" role="button" href="/assetusage/pengajuan">Pengajuan</a>
                    <a class="btn btn-primary" role="button" href="/pengajuan">Persetujuan</a>
                    <a class="btn btn-primary" role="button" href="/pengajuan">Riwayat</a>
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
                        <th>Kode Aset</th>
                        <th>Aset</th>
                        <th>Merk</th>
                        <th>Kategori</th>
                        <th>PIC</th>
                        <th>Penanggung jawab</th>
                        <th>Tahun Perolehan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($masterdata->getResultArray() as $row) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= $row['aset']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['tipe']; ?></td>
                            <td><?= $row['vendor']; ?></td>
                            <td><?= $row['lokasi']; ?></td>
                            <td><?= $row['unit_pemakai']; ?></td>
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
                <h5 class="modal-title">Ubah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/masterdata/ubah'); ?>" method="post">
                    <input type="hidden" name="id" id="id-asset">
                    <div class="form-group mb-0">
                        <label for="nama">Aset</label>
                        <input type="text" name="aset" id="aset" class="form-control" placeholder="Masukkan Nama Asset" value="<?= $row['aset']; ?>">
                    </div>
                    <div class="form-group mb-0">
                        <label for="nama">Merk</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Merk" value="<?= $row['nama']; ?>">
                    </div>
                    <div class="form-group mb-0">
                        <label for="tipe">Kategori</label>
                        <input type="text" name="tipe" id="tipe" class="form-control" placeholder="Masukkan Kategori" value="<?= $row['tipe']; ?>">
                    </div>
                    <div class="form-group mb-0">
                        <label for="vendor">PIC</label>
                        <input type="text" name="vendor" id="vendor" class="form-control" placeholder="Masukkan Nama PIC" value="<?= $row['vendor']; ?>">
                    </div>
                    <div class="form-group mb-0">
                        <label for="lokasi">Penanggung Jawab</label>
                        <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Masukkan Penanggung Jawab" value="<?= $row['lokasi']; ?>">
                    </div>
                    <div class="form-group mb-0">
                        <label for="unit_pemakai">Tahun Perolehan</label>
                        <input type="date" name="unit_pemakai" id="unit_pemakai" class="form-control" placeholder="Masukkan Tahun Perolehan" value="<?= $row['unit_pemakai']; ?>">
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
                <h5 class="modal-title">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/masterdata/tambah'); ?>" method="post">
                    <div class="form-group mb-0">
                        <div class="form-group mb-0">
                            <label for="nama">Aset</label>
                            <input type="text" name="aset" id="aset" class="form-control" placeholder="Masukkan Nama Asset">
                        </div>
                        <label for="nama">Merk</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Merk">
                    </div>
                    <div class="form-group mb-0">
                        <label for="tipe">Kategori</label>
                        <input type="text" name="tipe" id="tipe" class="form-control" placeholder="Masukkan Kategori Asset">
                    </div>
                    <div class="form-group mb-0">
                        <label for="vendor">PIC</label>
                        <input type="text" name="vendor" id="vendor" class="form-control" placeholder="Masukkan Nama PIC">
                    </div>
                    <div class="form-group mb-0">
                        <label for="lokasi">Penanggung Jawab</label>
                        <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Masukkan Penanggung jawab">
                    </div>
                    <div class="form-group mb-0">
                        <label for="unit_pemakai">Tahun Perolehan</label>
                        <input type="date" name="unit_pemakai" id="unit_pemakai" class="form-control" placeholder="Masukkan tahun perolehan">
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
                <a href="/masterdata/hapus/<?= $row['id']; ?>" class="btn btn-primary">Yakin</a>
            </div>
        </div>
    </div>
</div>