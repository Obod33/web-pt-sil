<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Aset</h1>


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
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                        <i class="fa fa-plus">Tambah Data</i> -->
                </div>
                <!-- Topbar Search -->
                <div class="col-start">
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-md">
                    <button onclick="window.print()" class="btn btn-outline-secondary shadow float-right ml-2">Print<i class="fa fa-print"></i></button>
                    <a href="/masterdata/excel" class="btn btn-outline-success shadow float-right">Excel<i class="fa fa-file-excel"></i></a>
                </div> -->
            </div>
            </button>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>No</th>
                        <th>Kode Aset</th>
                        <th>Aset</th>
                        <th>Merk</th>
                        <th>Kategori</th>
                        <th>Tahun Perolehan</th>
                        <th>Qr Code</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($masterdata->getResultArray() as $row) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['aset']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['tipe']; ?></td>
                            <td><?= $row['unit_pemakai']; ?></td>
                            <td>
                            <a href="<?= base_url('/user/qrcode/'. $row ['id']);  ?>" class="btn btn-warning" >Qrcode</a>
                            </td>
                            <td>
                                <a href="/user/detail/<?= $row['id']; ?>" data-target="#modalDetail" data-id="<?= $row['id']; ?>" data-aset="<?= $row['aset']; ?>" data-nama="<?= $row['nama']; ?>" data-tipe="<?= $row['tipe']; ?>" data-vendor="<?= $row['vendor']; ?>" data-lokasi="<?= $row['lokasi']; ?>" data-unit_pemakai="<?= $row['unit_pemakai']; ?>" class="btn btn-sm btn-warning btn-detail">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


 <!-- Modal QrCode Data Assets-->




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->