<?php 
function url_dasar(){
    $url_dasar = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);

    return $url_dasar;
}

function dapatkan_id(){
    $id   = "";
    if(isset($_SERVER['PATH_INFO'])){
        $id  = dirname($_SERVER['PATH_INFO']);
        $id  = preg_replace("/[^0-9]/","",$id);
    }
    return $id;
}
function cookie_foto($id){
    global $koneksi;
    $sql1   = "select * from cookie where id ='$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $foto   = $r1['foto'];

    if($foto){
        return $foto;
    } else {
        return 'cookie_default_picture.jpeg';
    }
}
function link_cookie($id){
    global $koneksi;
    $sql1   = "select * from cookie where id ='$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $nama  = bersihkan_judul($r1['nama']);
    
    return url_dasar()."/cookie.php/$id/$nama";
}
function set_isi($isi){
    $isi    = str_replace("../gambar/", url_dasar()."/gambar/", $isi);
    return $isi;
}
function bersihkan_judul($judul){
    $judul_baru  = strtolower($judul);
    $judul_baru  = preg_replace("/[^a-zA-Z0-9\s]/",",", $judul_baru);
    $judul_baru  = str_replace(" ","-", $judul_baru);

    return $judul_baru;
}

function maximum_kata($isi, $maximum){
    $isi = trim($isi);

    $newline_pos = strpos($isi, "\n");

    if ($newline_pos !== false) {
        $isi = substr($isi, 0, $newline_pos);
    } else {
        $array_isi = explode(" ", $isi);
        $array_isi = array_slice($array_isi, 0, $maximum);
        $isi = implode(" ", $array_isi);
    }
    return $isi;
}


?>
