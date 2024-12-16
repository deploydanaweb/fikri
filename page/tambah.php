<link rel="stylesheet" type="text/css" href="style-form.css">
<div class="page">
<h2>Tambah Data</h2>
     <div class="text">
          <p><strong>Silahkan Isi Data Mahasiswa Pada Form Di Bawah Ini.</strong></p>
      <div class="container">
      <form action="" method="post">
         <?php
         include 'config.php';
         error_reporting(0);
         session_start();

         $query = mysqli_query($conn, "SELECT * FROM id_mahasiswa ORDER BY nim desc");
         $kode = mysqli_fetch_array($query);
         $kd = $kode['nim'];
         $urut = substr($kd,6,5);
           $tambah = (int) $urut+1;
           $t = date('y');
           $m = "1";
           $d = "5";

           if (strlen($tambah)==1){
           $format = $t.$m.$d."00000".$tambah;

        }elseif(strlen($tambah)==2){
          $format = $t.$m.$d."0000".$tambah;

     }else{
     $format = $t.$m.$d."000".$tambah;
}
?>
<div class="row">
    <div class="col-25">
        <label>NIM</label>
    </div>
    <div class="col-75">
        <input type="text" name="nim"  placeholder="Nim" required>
    </div>
</div>
<div class="row">
    <div class="col-25">
        <label>Nama Lengkap</label>
    </div>
    <div class="col-75">
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label>Tanggal Lahir</label>
    </div>
    <div class="col-75">
         <input type="date" name="tanggal_lahir" required>
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label>Gender</label>
    </div>
    <div class="col-75">
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan<br>
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label>Alamat</label>
    </div>
    <div class="col-75">
        <textarea name="alamat" placeholder="Alamat" style="height:80px" required></textarea>
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label>Nomor Telepon</label>
    </div>
    <div class="col-75">
        <input type="text" name="nomor_telepon" placeholder="Nomor Telepon" required>
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label>Fakultas</label>
    </div>
    <div class="col-75">
        <select name="fakultas" required>
            <option value="Fakultas Dan Teknik Ilmu Komputer">Fakultas Dan Teknik Ilmu Komputer</option>
        </select>
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label>Program Studi</label>
    </div>
    <div class="col-75">
        <select name="program_studi" required>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi SI-S1">Sistem Informasi SI-S1</option>
            <option value="Sistem Informasi SI-D3">Sistem Informasi SI-D3</option>
            <option value="Rekayasa Sistem Komputer">Rekayasa Sistem Komputer</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Ilmu Komputer (S2)">Ilmu Komputer (S2)</option>
        </select>
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label>Semester</label>
    </div>
    <div class="col-75">
        <select name="semester" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label>Kelas</label>
    </div>
    <div class="col-75">
        <select name="kelas" required>
            <option value="A Pagi">A Pagi</option>
            <option value="B Pagi">B Pagi</option>
            <option value="C Pagi">C Pagi</option>
            <option value="D Pagi">D Pagi</option>
            <option value="A Siang">A siang</option>
            <option value="B Siang">B siang</option>
            <option value="C Siang">C siang</option>
            <option value="D Siang">D Siang</option>
            <option value="A Malam">A Malam</option>
            <option value="B Malam">B Malam</option>
            <option value="C Malam">C Malam</option>
            <option value="D Malam">D Malam</option>
        </select>
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label for="mata_kuliah">Mata Kuliah</label>
    </div>
    <div class="col-75">
        <input type="checkbox" name="mata_kuliah[]" value="Pengantar RPL">
        Pengantar RPL<br>
        <input type="checkbox" name="mata_kuliah[]" value="Pemrograman Dasar">
        Pemrograman Dasar<br>
        <input type="checkbox" name="mata_kuliah[]" value="Pemrograman Web">
        Pemrograman Web<br>
        <input type="checkbox" name="mata_kuliah[]" value="Pancasila Dan Kewarganegaraan">
        Pancasila Dan Kewarganegaraan<br>
        <input type="checkbox" name="mata_kuliah[]" value="Aljabar Linier">
        Aljabar Linier<br>
        <input type="checkbox" name="mata_kuliah[]" value="Agama I">
        Agama I<br>
        <input type="checkbox" name="mata_kuliah[]" value="English I">
        English I<br>
        <input type="checkbox" name="mata_kuliah[]" value="Pengantar Teknologi Informasi">
        Pengantar Teknologi Informasi<br>
    </div>
</div>
<br>
<div class="row">
    <a onclick="return confirm('Apakah Anda Ingin Simpan Data Ini?')">
    <input type="submit" name="simpan" value="Simpan"></a>
    <input type="reset" value="Batal">
</div>
</form>
</div>
</div>
</div>

<?php
if (isset($_POST['simpan'])) {
        $nim=$_POST['nim'];
        $nama_lengkap=$_POST['nama_lengkap'];
        $tanggal_lahir=$_POST['tanggal_lahir'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
        $alamat=$_POST['alamat'];
        $nomor_telepon=$_POST['nomor_telepon'];
        $fakultas=$_POST['fakultas'];
        $program_studi=$_POST['program_studi'];
        $semester=$_POST['semester'];
        $kelas=$_POST['kelas'];
        $mata_kuliah=implode(",", $_POST['mata_kuliah']);

        $query = mysqli_query($conn, "INSERT INTO id_mahasiswa (nim,nama_lengkap,tanggal_lahir,
        jenis_kelamin,nomor_telepon,fakultas,program_studi,semester,kelas,mata_kuliah) VALUES 
        ('$nim','$nama_lengkap','$tanggal_lahir','$jenis_kelamin','$nomor_telepon','$fakultas',
        '$program_studi','$semester','$kelas','$mata_kuliah')");
        if ($query) {
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?page=tampil">';
        }else {
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?page=tambah">';
        }
    }
?>   