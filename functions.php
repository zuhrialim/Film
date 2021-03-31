<?php 

    $db = mysqli_connect("localhost", "root","", 'film');

    function film($tampil){
        global $db;

        $baris = [];
        $hasil = mysqli_query($db,$tampil);
        while ($bagian = mysqli_fetch_assoc($hasil)){
            $baris[] = $bagian;
        }
            return $baris;
    }

?>