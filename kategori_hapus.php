<?php
    $id = intval($_GET['id']);
    $query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori=$id");
?>
<script>
    location.href = "index.php?page=kategori";
</script>

