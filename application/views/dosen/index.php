  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('dashboard') ?>">FORM KAMPUS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="<?= base_url('mahasiswa') ?>">Mahasiswa</a>
                <a class="nav-item nav-link active" href="#">Dosen</a>
                <a class="nav-item nav-link" href="<?= base_url('matakuliah') ?>">Mata Kuliah</a>
                </div>
            </div>
        </div>
    </nav>
    <h2 class="container text-center mt-5 pt-5">INPUT DATA DOSEN</h2>
    <!-- Form Mahasiswa -->
    <form class="container" method="POST" action="<?= base_url('dosen/tampil_dosen') ?>">
        <div class="form-group">
            <label>NID</label> <br>
            <input type="text" name="nid" class="form-custom" placeholder="" size="8" maxlength="10">
        </div>
        <div class="form-group">
            <label>Nama</label> <br>
            <input type="text" name="nama" class="form-custom" placeholder="" size="38" maxlength="35">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Pendidikan</label>
            <select class="form-custom" name="pendidikan" id="exampleFormControlSelect1">
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
            </select>
        </div>
        <div class="form-group">
            <label>No. Handphone</label> <br>
            <input type="text" name="no_hp" class="form-custom" placeholder="" size="12" maxlength="13">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control col-5" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

