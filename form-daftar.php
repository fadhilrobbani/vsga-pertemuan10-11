<!DOCTYPE html>
<html>

<head>
   <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
   <header>
      <h3>Formulir Pendaftaran Siswa Baru</h3>
   </header>

   <form action="proses-pendaftaran-2.php" method="POST">

      <fieldset>

         <p>
            <label for="nama">Nama: </label>
            <input type="text" id="nama" name="nama" placeholder="nama lengkap" />
         </p>
         <p>
            <label for="alamat">Alamat: </label>
            <textarea id="alamat" name="alamat"></textarea>
         </p>
         <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
         </p>
         <p>
            <label for="agama">Agama: </label>
            <select id="agama" name="agama">
               <option value="Islam">Islam</option>
               <option value="Kristen">Kristen</option>
               <option value="Hindu">Hindu</option>
               <option value="Budha">Budha</option>
               <option value="Atheis">Atheis</option>
            </select>
         </p>
         <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" id="sekolah_asal" name="sekolah_asal" placeholder="nama sekolah" />
         </p>
         <p>
            <input type="submit" value="Daftar" name="daftar" />
         </p>

      </fieldset>

   </form>

</body>

</html>