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
                <a class="nav-item nav-link" href="<?= base_url('dosen') ?>">Dosen</a>
                <a class="nav-item nav-link active" href="#">Mata Kuliah</a>
                </div>
            </div>
        </div>
    </nav>
    <h2 class="text-center mt-5 pt-5">INPUT DATA MATA KULIAH</h2>
    <!-- Form Mahasiswa -->
    <form class="container" method="POST" action="<?= base_url('matakuliah/tampil_matkul') ?>">
        <div class="form-group">
            <label>Kode Mata Kuliah</label> <br>
            <input type="text" name="kd_matkul" class="form-custom" placeholder="" size="8" maxlength="10">
        </div>
        <div class="form-group">
            <label>Nama Mata Kuliah</label> <br>
            <input type="text" name="nama_matkul" class="form-custom" placeholder="" size="38" maxlength="35">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jumlah SKS</label>
            <select class="form-custom" name="jml_sks" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Semester</label>
            <select class="form-custom" name="semester" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
            </select>
        </div>
        <div class="form-group">
            <label>Dosen Pengajar</label> <br>
            <input type="text" name="nm_dosen" class="form-custom" placeholder="" size="38" maxlength="35">
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

