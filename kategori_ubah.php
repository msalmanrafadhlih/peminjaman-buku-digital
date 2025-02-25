<h1 class="mt-4">Ubah Kategori Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post" id="formUbah"> 
                <?php
                    if (!$koneksi) {
                        die("Koneksi database gagal: " . mysqli_connect_error());
                    }

                    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

                    if ($id <= 0) {
                        die("ID tidak valid atau tidak ada.");
                    }

                    $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori = $id");
                    if (!$query || mysqli_num_rows($query) == 0) {
                        die("Data tidak ditemukan untuk ID: $id");
                    }
                    $data = mysqli_fetch_array($query);

                    if (isset($_POST['submit'])) {
                        $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']); 

                        if (empty($kategori)) {
                            echo '<script>alert("Nama kategori tidak boleh kosong.");</script>';
                        } else {
                            
                            $update = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori = '$kategori' WHERE id_kategori = $id");

                            if ($update) {
                                echo '<script>alert("Data berhasil diubah."); window.location.href="?page=kategori";</script>';
                            } else {
                                echo '<script>alert("Gagal mengubah data. Kesalahan: ' . mysqli_error($koneksi) . '");</script>';
                            }
                        }
                    }
                ?>
                    <div class="row">
                        <div class="col-md-2">Nama Kategori</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="<?php echo $data['nama_kategori']; ?>" name="kategori" id="inputKategori">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="button" class="btn btn-secondary" id="resetButton">Reset</button>
                            <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>

<script>
    const originalValue = "<?php echo $data['nama_kategori']; ?>"; 
    const inputKategori = document.getElementById('inputKategori'); 
    const resetButton = document.getElementById('resetButton'); 

    resetButton.addEventListener('click', function () {
        inputKategori.value = originalValue; 
    });
</script>
