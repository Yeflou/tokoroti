<?php
header("Content-Type: application/json");
include 'koneksi.php';

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

// 🔹 GET DATA (pegawai & customer)
if ($aksi == "" || $aksi == "get") {
    $query = mysqli_query($koneksi, "SELECT * FROM produk");
    $data = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }

    echo json_encode($data);
}

// 🔹 TAMBAH DATA (admin)
elseif ($aksi == "tambah") {
    $nama = $_POST['nama_produk'];
    $stok = $_POST['stok'];
    $harga = isset($_POST['harga']) ? $_POST['harga'] : 0;

    mysqli_query($koneksi, "INSERT INTO produk (nama_produk, stok, harga) VALUES ('$nama', '$stok', '$harga')");

    echo json_encode(["pesan" => "Data berhasil ditambahkan"]);
}

// 🔹 HAPUS (biar makin keren 😄)
elseif ($aksi == "hapus") {
    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM produk WHERE id=$id");

    echo json_encode(["pesan" => "Data dihapus"]);
}

// 🔹 KURANGI STOK (Penjualan)
elseif ($aksi == "kurangi_stok") {
    $id = $_POST['id'];
    $jumlah = $_POST['jumlah'];

    $query = mysqli_query($koneksi, "SELECT stok FROM produk WHERE id=$id");
    $data = mysqli_fetch_assoc($query);
    
    if ($data) {
        $stok_sekarang = $data['stok'];
        if ($stok_sekarang >= $jumlah) {
            $stok_baru = $stok_sekarang - $jumlah;
            mysqli_query($koneksi, "UPDATE produk SET stok=$stok_baru WHERE id=$id");
            echo json_encode(["sukses" => true, "pesan" => "Stok berhasil dikurangi"]);
        } else {
            echo json_encode(["sukses" => false, "pesan" => "Stok tidak mencukupi!"]);
        }
    } else {
        echo json_encode(["sukses" => false, "pesan" => "Produk tidak ditemukan"]);
    }
}
?>