<?php
include "koneksi.php";

 function query($query){
    global $koneksi;
     $result = mysqli_query($koneksi, $query);
     $rows = [] ;
     while  ( $row = mysqli_fetch_assoc($result)){
         $rows [] = $row;

     }
     return $rows;
 }

 function cari($keyword){

    $query = "SELECT * FROM pu WHERE  unit = '$keyword' OR alamat = '$keyword' OR jenis = '$keyword' OR rlk = '$keyword'  OR mulai = '$keyword' OR sampai = '$keyword' OR tahun = '$keyword' OR rek = '$keyword' OR lab = '$keyword'";
    return query($query);
}

function cari2($keyword){
    
    $query = "SELECT * FROM bima WHERE  unit = '$keyword' OR alamat = '$keyword' OR jenis = '$keyword' OR rlk = '$keyword'  OR mulai = '$keyword' OR sampai = '$keyword' OR tahun = '$keyword' OR rek = '$keyword' OR lab = '$keyword'";
    return query($query);
}


function cari3($keyword){
    
    $query = "SELECT * FROM dompu WHERE  unit = '$keyword' OR alamat = '$keyword' OR jenis = '$keyword' OR rlk = '$keyword'  OR mulai = '$keyword' OR sampai = '$keyword' OR tahun = '$keyword' OR rek = '$keyword' OR lab = '$keyword'";
    return query($query);
}

function cari4($keyword){
    
    $query = "SELECT * FROM sumbawa WHERE  unit = '$keyword' OR alamat = '$keyword' OR jenis = '$keyword' OR rlk = '$keyword'  OR mulai = '$keyword' OR sampai = '$keyword' OR tahun = '$keyword' OR rek = '$keyword' OR lab = '$keyword'";
    return query($query);
}
function cari5($keyword){
    
    $query = "SELECT * FROM lout WHERE  unit = '$keyword' OR alamat = '$keyword' OR jenis = '$keyword' OR rlk = '$keyword'  OR mulai = '$keyword' OR sampai = '$keyword' OR tahun = '$keyword' OR rek = '$keyword' OR lab = '$keyword'";
    return query($query);
}
 
function cari6($keyword){
    
    $query = "SELECT * FROM loteng WHERE  unit = '$keyword' OR alamat = '$keyword' OR jenis = '$keyword' OR rlk = '$keyword'  OR mulai = '$keyword' OR sampai = '$keyword' OR tahun = '$keyword' OR rek = '$keyword' OR lab = '$keyword'";
    return query($query);
}

function cari7($keyword){
    
    $query = "SELECT * FROM lotim WHERE  unit = '$keyword' OR alamat = '$keyword' OR jenis = '$keyword' OR rlk = '$keyword'  OR mulai = '$keyword' OR sampai = '$keyword' OR tahun = '$keyword'  OR rek = '$keyword' OR lab = '$keyword'";
    return query($query);
}

function cari8($keyword){
    
    $query = "SELECT * FROM ksb WHERE  unit = '$keyword' OR alamat = '$keyword' OR jenis = '$keyword' OR rlk = '$keyword'  OR mulai = '$keyword' OR sampai = '$keyword' OR tahun = '$keyword'  OR rek = '$keyword' OR lab = '$keyword'";
    return query($query);
}

function cari9($keyword){
    
    $query = "SELECT * FROM mataram WHERE  unit = '$keyword' OR alamat = '$keyword' OR jenis = '$keyword' OR rlk = '$keyword'  OR mulai = '$keyword' OR sampai = '$keyword' OR tahun = '$keyword'  OR rek = '$keyword' OR lab = '$keyword'";
    return query($query);
}

function cari10($keyword){
    
    $query = "SELECT * FROM kotabima WHERE  unit = '$keyword' OR alamat = '$keyword' OR jenis = '$keyword' OR rlk = '$keyword'  OR mulai = '$keyword' OR sampai = '$keyword' OR tahun = '$keyword'  OR rek = '$keyword' OR lab = '$keyword'";
    return query($query);
}


 ?>