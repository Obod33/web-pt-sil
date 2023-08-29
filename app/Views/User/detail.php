<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Aset</h1>


    

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
        <div class="card-body ">
            <div class="row">

                <div class="col-2">
                    <dl class="fw-bold">
                        <p class="fw-bold">Kode Aset</p>
                        <p class="fw-bold">Aset</p>
                        <p class="fw-bold">Merk</p>
                        <p class="fw-bold">Kategori</p>
                        <p class="fw-bold">PIC</p>
                        <p class="fw-bold">Penanggung Jawab</p>
                        <p class="fw-bold">Tahun Perolehan</p>
                    </dl>
                </div>
                <div class="col-0">
                    <dl>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                    </dl>
                </div>
                <div class="col-5">
                    <?php foreach ($asset as $a) : ?>
                        <p>

                            <?php echo ($a); ?>
                        <dl class="">
                        <?php endforeach; ?>
                        </p>
                        </dl>
                </div>
            </div>
                    
        </div>

    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->