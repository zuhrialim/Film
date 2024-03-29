<?php 

    $db = mysqli_connect("localhost", "root","", 'film');

    function film($tampil)
    {
        global $db;

        $baris = [];
        $hasil = mysqli_query($db,$tampil);
        while ($bagian = mysqli_fetch_assoc($hasil))
        {
            $baris[] = $bagian;
        }
            return $baris;
    }

    function hapus($id)
    {
        global $db;
        mysqli_query($db, "DELETE FROM movie WHERE id = $id");

        return mysqli_affected_rows($db);
    }
    
    function tambah($data)
    {
        global $db;

        $nama = $data["nama"];
        $genre = $data["genre"];
        $negara = $data["negara"];
        $gambar = $data["gambar"];

        $query =  "INSERT INTO movie
        VALUES
        ('','$nama','$genre','$negara','$gambar')

        ";

        mysqli_query($db, $query);

        return mysqli_affected_rows($db);
    }

    function uploadgambar(){

        //ambil isi $_FILE gambar lewat var dump
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
    
        //cek apakah tidak ada gambar yang diupload
        if( $error === 4) {
            echo "<script>
                    alert('Pilih gambar!');
                </script>";
                return false;
    
        }
    
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
    
        if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
                echo "<script>
                    alert('yang anda upload bukan gambar!');
                </script>";
                return false;
        }
    
        //cek jika ukuran file terlalu besar
        if( $ukuranFile > 10000000) {
                echo "<script>
                    alert('yang anda upload bukan gambar!');
                </script>";
                return false;
        }
    
        //jika lolos pengecekan 
        //generate nama gambar baru agar nama file tidak sama
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
    
        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    
        return $namaFileBaru;
    }
?>