<?php
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $id_kategori = $_POST['id_kategori'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $deskripsi = $_POST['deskripsi'];

    
    $kategori_check = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori = '$id_kategori'");
    if (mysqli_num_rows($kategori_check) > 0) {
        $query = mysqli_query($koneksi, "UPDATE buku SET id_kategori='$id_kategori',judul='$judul',penulis='$penulis',penerbit='$penerbit',tahun_terbit='$tahun_terbit',deskripsi='$deskripsi' WHERE id_buku=$id");

        if($query){
            echo '<script>alert("Ubah Data Berhasil.");</script>';
        }else{
            echo '<script>alert("Ubah Data Gagal.");</script>';
        }
    } else {
        echo '<script>alert("Kategori tidak valid. Pilih kategori yang ada.");</script>';
    }
}

$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku=$id");
$data = mysqli_fetch_array($query);
?>

<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <div class="row">
                        <div class="col-md-2">Kategori</div>
                        <div class="col-md-8">
                            <select name="id_kategori" class="form-control">
                                <?php
                                    $kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                                    while($kategori = mysqli_fetch_array($kat)) {
                                        ?>
                                        <option <?php if($kategori['id_kategori'] == $data['id_kategori']) echo 'selected'; ?> value="<?php echo $kategori['id_kategori'];?>"> <?php echo $kategori['nama_kategori'];?> </option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">Judul</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['judul'];?>" class="form-control" name="judul"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">Penulis</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['penulis'];?>" class="form-control" name="penulis"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">Penerbit</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['penerbit'];?>" class="form-control" name="penerbit"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">Tahun Terbit</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['tahun_terbit'];?>" class="form-control" name="tahun_terbit"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Deskripsi</div>
                        <div class="col-md-8">
                            <textarea name="deskripsi" rows="5" class="form-control"><?php echo $data['deskripsi'];?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="?page=buku" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>
