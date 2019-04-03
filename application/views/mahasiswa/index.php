
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('dashboard') ?>">FORM KAMPUS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="#">Mahasiswa</a>
                <a class="nav-item nav-link" href="<?= base_url('dosen') ?>">Dosen</a>
                <a class="nav-item nav-link" href="<?= base_url('matakuliah') ?>">Mata Kuliah</a>
                </div>
            </div>
        </div>
    </nav>
    <h2 class="container text-center mt-5 pt-5">INPUT DATA MAHASISWA</h2>
    <!-- Form Mahasiswa -->
    <form class="container" method="POST" action="<?= base_url('mahasiswa/tambah_mhs') ?>">
        <div class="form-group">
            <label>NIM</label> <br>
            <input type="text" name="nim" class="form-custom" placeholder="" size="8" maxlength="10">
        </div>
        <div class="form-group">
            <label>Nama</label> <br>
            <input type="text" name="nama" class="form-custom" placeholder="" size="38" maxlength="35">
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
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jurusan</label> <br>
            <input type="text" name="jurusan" class="form-custom" placeholder="" size="25" maxlength="25">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control col-5" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

