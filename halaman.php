<?php include("inc_header.php") ?>
<?php
$sukses = "";
$katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "select foto from cookie where id = '$id'";
    $q1   = mysqli_query($koneksi, $sql1);
    $r1   = mysqli_fetch_array($q1);
    @unlink("../gambar/".$r1['foto']);

    $sql1 = "delete from cookie where id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    }
}
?>
<h1>Halaman Admin cookie</h1>
<p>
    <a href="cookie_input.php">
        <input type="button" class="btn btn-primary" value="Tambah cookie Baru" />
    </a>
</p>
<?php
if ($sukses) {
    ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
    <?php
}
?>
<form class="row g-3" method="get">
    <div class="col-auto">
        <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" name="katakunci"
            value="<?php echo $katakunci ?>" />
    </div>
    <div class="col-auto">
        <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary" />
    </div>
</form>
<table class="table table-stripped">
    <thead>
        <tr>
            <th class="col-1">#</th>
            <th class="col-2">Foto</th>
            <th>Nama</th>
            <th class="col-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sqltambahan = "";
        $per_halaman = 3;
        if ($katakunci != '') {
            $array_katakunci = explode(" ", $katakunci);
            for ($x = 0; $x < count($array_katakunci); $x++) {
                $sqlcari[] = "(nama like '%" . $array_katakunci[$x] . "%' or isi like '%" . $array_katakunci[$x] . "%')";
            }
            $sqltambahan = " where " . implode(" or ", $sqlcari);
        }
        $sql1  = "select * from cookie $sqltambahan";
        $page  = isset($_GET['page'])?(int)$_GET['page']:1;
        $mulai = ($page > 1) ? ($page * $per_halaman) - $per_halaman : 0;
        $q1    = mysqli_query($koneksi, $sql1);
        $total = mysqli_num_rows($q1);
        $pages = ceil($total / $per_halaman);
        $nomor = $mulai + 1;
        $sql1  = $sql1." order by id desc limit $mulai,$per_halaman";

        $q1 = mysqli_query(mysql: $koneksi, query: $sql1);

        while ($r1 = mysqli_fetch_array(result: $q1)) {
            ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><img src="../gambar/<?php echo cookie_foto($r1['id'])?>" style="max-height:100px;max-width:100px"/></td>
                <td><?php echo $r1['nama'] ?></td>
                <td>
                    <a href="cookie_input.php?id=<?php echo $r1['id']?>">
                        <span class="badge bg-warning text-dark">Edit</span>
                    </a>
                    
                    <a href="cookie.php?op=delete&id=<?php echo $r1['id'] ?>"
                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')">
                        <span class="badge bg-danger">Delete</span>
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<nav aria-label="Page Navigation Example">
    <ul class="pagination">
        <?php 
        $cari = (isset($_GET['cari']))? $_GET['cari'] : "";
            for($i = 1; $i <= $pages; $i++){
                ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?katakunci=<?php echo $katakunci?>&cari=<?php echo $cari?>&page=<?php echo $i?>"><?php echo $i ?></a>
                </li>
                <?php
            }
        ?>
    </ul>
</nav>
<?php include("inc_footer.php") ?>