<?= $this->extend('enduser/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Header Content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Absensi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="btn btn-primary">
                            <i class="fas fa-clock"></i>
                            <div id="time" class="d-inline"></div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-2 col-12">
                                    <img src="https://icon-library.com/images/icon-avatar/icon-avatar-6.jpg"
                                        alt="Avatar" class="img-fluid mx-auto my-auto d-block" width="200px">
                                </div>
                                <div class="col-lg-6 col-12 my-auto">
                                    <div class="container">
                                        <h2>Gede Agus Mahendra</h2>
                                        <h5>Universitas Pendidikan Ganesha</h5>
                                        <small>Banjar Di nas Abasan Desa Sangsit Kecamatan Sawan Kabupaten Buleleng
                                            Bali</small>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-12">
                                    <form action="" method="POST">
                                        <div class="container">
                                            <button type="submit" class="btn btn-success btn-circle btn-xl ">
                                                <h5>Absen</h5>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Kehadiran</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Waktu Masuk</th>
                                            <th>Waktu Pulang</th>
                                            <th>Status Kehadiran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Loop Data Tables -->
                                            <td>09/07/2022</td>
                                            <td>07.00</td>
                                            <td>16.00</td>
                                            <td>
                                                <p class="btn btn-xs btn-success">Hadir</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- Loop Data Tables -->
                                            <td>11/07/2022</td>
                                            <td>00.00</td>
                                            <td>00.00</td>
                                            <td>
                                                <p class="btn btn-xs btn-info">Sakit</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- Loop Data Tables -->
                                            <td>12/07/2022</td>
                                            <td>00.00</td>
                                            <td>00.00</td>
                                            <td>
                                                <p class="btn btn-xs btn-warning">Izin</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <!-- Loop Data Tables -->
                                            <td>09/07/2022</td>
                                            <td>00.00</td>
                                            <td>00.00</td>
                                            <td>
                                                <p class="btn btn-xs btn-danger">Tanpa Keterangan</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
    setTimeout(startTime, 1000);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }; // add zero in front of numbers < 10
    return i;
}
</script>
<?= $this->endSection(); ?>