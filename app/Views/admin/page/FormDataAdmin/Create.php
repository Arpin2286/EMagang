<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Header Content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Formulir Data Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nama</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Nama Admin" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Username</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">@</div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="username">
                                    </div>
                                    <small class="form-text text-muted mx-1">Tanpa spasi</small>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Instansi</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <!-- Loop -->
                                            <option value="1">Dinas Kominfosanti</option>
                                            <option value="1">Dinas Pendidikan</option>
                                            <option value="1">Dinas Perlindungan Anak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Sebagai</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <!-- Loop -->
                                            <option value="admin">Admin</option>
                                            <option value="kadis">Kepala Dinas</option>
                                            <option value="operator">Operator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Passowor"> Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="*******">
                                    <small class="form-text text-muted mx-1">Terdiri dari huruf besar, huruf kecil,
                                        angka, dan karakter.</small>
                                </div>
                                <div class="form-group">
                                    <label for="Passowor">Konfirmasi Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="*********">
                                </div>
                                <div class="form-group">
                                    <a href="/DataAdmin" class="btn btn-secondary">Batal</a>
                                    <input type="submit" value="Simpan" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
<?= $this->endSection(); ?>