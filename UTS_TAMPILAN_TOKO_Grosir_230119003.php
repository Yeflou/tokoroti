<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Grosir</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bg-color: #f3f4f6;
            --surface-color: #ffffff;
            --primary-color: #4f46e5;
            --primary-hover: #4338ca;
            --danger-color: #ef4444;
            --danger-hover: #dc2626;
            --text-main: #111827;
            --text-muted: #6b7280;
            --border-color: #e5e7eb;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-full: 9999px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem 1rem;
        }

        .container {
            width: 100%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .header {
            text-align: center;
            margin-bottom: 1rem;
        }

        .header h1 {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }

        .header h1 i {
            color: var(--primary-color);
        }

        .header p {
            color: var(--text-muted);
            font-size: 1rem;
        }

        .nav-tabs {
            display: flex;
            background: var(--surface-color);
            padding: 0.5rem;
            border-radius: var(--radius-full);
            box-shadow: var(--shadow-sm);
            gap: 0.5rem;
            justify-content: space-between;
        }

        .nav-tabs button {
            flex: 1;
            padding: 0.75rem 1.5rem;
            border: none;
            background: transparent;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 0.95rem;
            border-radius: var(--radius-full);
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .nav-tabs button:hover {
            color: var(--text-main);
            background: var(--bg-color);
        }

        .nav-tabs button.active {
            background: var(--primary-color);
            color: white;
            box-shadow: var(--shadow-md);
        }

        .section {
            display: none;
            background: var(--surface-color);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-md);
            animation: fadeIn 0.3s ease-out;
        }

        .section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Forms */
        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-group label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--text-main);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            background-color: var(--surface-color);
            color: var(--text-main);
            transition: all 0.2s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
        }

        .btn-danger {
            background-color: var(--danger-color);
            color: white;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }

        .btn-danger:hover {
            background-color: var(--danger-hover);
        }

        /* Product List */
        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
        }

        .product-card {
            background: var(--surface-color);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 1.25rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .product-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .product-icon {
            width: 40px;
            height: 40px;
            background: rgba(79, 70, 229, 0.1);
            color: var(--primary-color);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .product-name {
            font-weight: 600;
            font-size: 1.1rem;
        }

        .product-stock {
            color: var(--text-muted);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .badge {
            background: rgba(79, 70, 229, 0.1);
            color: var(--primary-color);
            padding: 0.25rem 0.75rem;
            border-radius: var(--radius-full);
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* List for Pegawai */
        .data-list {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .data-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            background: #fafafa;
        }
        
        .data-item-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .data-item-details h4 {
            font-size: 1rem;
            margin-bottom: 0.25rem;
        }

        .data-item-details p {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        /* Loading state */
        .loading {
            text-align: center;
            padding: 2rem;
            color: var(--text-muted);
            grid-column: 1/-1;
        }

        .loading i {
            animation: spin 1s linear infinite;
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        @keyframes spin {
            100% { transform: rotate(360deg); }
        }

        @media (max-width: 640px) {
            .nav-tabs {
                flex-direction: column;
                border-radius: var(--radius-md);
            }
            .nav-tabs button {
                border-radius: var(--radius-md);
            }
            .data-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            .btn-danger {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <header class="header">
        <h1><i class="fas fa-store"></i> Toko Grosir</h1>
        <p>Sistem penjualan dan inventaris modern</p>
    </header>

    <div class="nav-tabs">
        <button onclick="show('customer')" class="active"><i class="fas fa-users"></i> Customer</button>
        <button onclick="show('admin')"><i class="fas fa-user-shield"></i> Admin</button>
        <button onclick="show('pegawai')"><i class="fas fa-user-tie"></i> Pegawai</button>
    </div>

    <!-- CUSTOMER -->
    <div id="customer" class="section active">
        <h2 class="section-title"><i class="fas fa-box-open"></i> Katalog Produk</h2>
        <div id="dataCustomer" class="product-list">
            <div class="loading"><i class="fas fa-circle-notch"></i><br>Memuat data produk...</div>
        </div>
    </div>

    <!-- ADMIN -->
    <div id="admin" class="section">
        <h2 class="section-title"><i class="fas fa-plus-circle"></i> Tambah Produk Baru</h2>
        <div class="form-group">
            <label for="nama"><i class="fas fa-tag"></i> Nama Produk</label>
            <input type="text" id="nama" class="form-control" placeholder="Masukkan nama produk..." autocomplete="off">
        </div>
        <div class="form-group">
            <label for="stok"><i class="fas fa-cubes"></i> Stok Awal</label>
            <input type="number" id="stok" class="form-control" placeholder="0" min="0">
        </div>
        <button onclick="tambah()" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Produk</button>
    </div>

    <!-- PEGAWAI -->
    <div id="pegawai" class="section">
        <h2 class="section-title"><i class="fas fa-tasks"></i> Kelola Inventaris</h2>
        <div id="dataPegawai" class="data-list">
            <div class="loading"><i class="fas fa-circle-notch"></i><br>Memuat data produk...</div>
        </div>
    </div>
</div>

<script>
const url = "http://localhost/tokoroti/UTS_TOKO_Grosir_230119003.php";

function show(role) {
    document.querySelectorAll('.section').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.nav-tabs button').forEach(btn => btn.classList.remove('active'));
    
    document.getElementById(role).classList.add('active');
    document.querySelector(`.nav-tabs button[onclick="show('${role}')"]`).classList.add('active');

    if (role === 'customer') loadCustomer();
    if (role === 'pegawai') loadPegawai();
}

function loadCustomer() {
    const container = document.getElementById("dataCustomer");
    container.innerHTML = '<div class="loading"><i class="fas fa-circle-notch"></i><br>Memuat data...</div>';
    
    fetch(url)
    .then(res => res.json())
    .then(data => {
        if(!data || data.length === 0) {
            container.innerHTML = '<div style="grid-column: 1/-1; text-align: center; padding: 2rem; color: #6b7280;">Tidak ada produk tersedia.</div>';
            return;
        }
        
        let output = "";
        data.forEach(item => {
            output += `
                <div class="product-card">
                    <div class="product-icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="product-name">${item.nama_produk}</div>
                    <div class="product-stock">
                        <i class="fas fa-layer-group"></i> Stok Tersedia: <span class="badge">${item.stok}</span>
                    </div>
                </div>
            `;
        });
        container.innerHTML = output;
    })
    .catch(err => {
        container.innerHTML = '<div style="grid-column: 1/-1; text-align: center; color: #ef4444;">Gagal memuat data produk.</div>';
    });
}

function tambah() {
    let nama = document.getElementById("nama").value.trim();
    let stok = document.getElementById("stok").value;

    if (!nama || !stok) {
        alert("Mohon lengkapi nama produk dan stok!");
        return;
    }

    fetch(url + "?aksi=tambah", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `nama_produk=${encodeURIComponent(nama)}&stok=${stok}`
    })
    .then(res => res.json())
    .then(res => {
        alert(res.pesan);
        
        // Reset form
        document.getElementById("nama").value = "";
        document.getElementById("stok").value = "";
        
        // Refresh data in background
        loadCustomer();
        loadPegawai();
    })
    .catch(err => {
        alert("Terjadi kesalahan saat menambah produk.");
    });
}

function loadPegawai() {
    const container = document.getElementById("dataPegawai");
    container.innerHTML = '<div class="loading"><i class="fas fa-circle-notch"></i><br>Memuat data...</div>';

    fetch(url)
    .then(res => res.json())
    .then(data => {
        if(!data || data.length === 0) {
            container.innerHTML = '<div style="text-align: center; padding: 2rem; color: #6b7280;">Tidak ada produk dalam inventaris.</div>';
            return;
        }

        let output = "";
        data.forEach(item => {
            output += `
                <div class="data-item">
                    <div class="data-item-info">
                        <div class="product-icon" style="margin-bottom:0; width: 36px; height: 36px;">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="data-item-details">
                            <h4>${item.nama_produk}</h4>
                            <p>Total Stok: <strong>${item.stok}</strong></p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 0.5rem; align-items: center; flex-wrap: wrap; margin-top: 0.5rem;">
                        <input type="number" id="kurangi-${item.id}" placeholder="Jml" min="1" max="${item.stok}" style="width: 80px; padding: 0.5rem; border: 1px solid var(--border-color); border-radius: var(--radius-md);">
                        <button onclick="kurangiStok(${item.id})" class="btn btn-primary" style="padding: 0.5rem 1rem; width: auto; font-size: 0.875rem;"><i class="fas fa-shopping-cart"></i> Jual</button>
                        <button onclick="hapus(${item.id})" class="btn btn-danger" style="width: auto;"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </div>
                </div>
            `;
        });
        container.innerHTML = output;
    })
    .catch(err => {
        container.innerHTML = '<div style="text-align: center; color: #ef4444;">Gagal memuat inventaris.</div>';
    });
}

function kurangiStok(id) {
    let inputEl = document.getElementById("kurangi-" + id);
    let jumlah = inputEl.value;

    if (!jumlah || jumlah <= 0) {
        alert("Masukkan jumlah produk yang terjual/dikurangi!");
        return;
    }

    fetch(url + "?aksi=kurangi_stok", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `id=${id}&jumlah=${jumlah}`
    })
    .then(res => res.json())
    .then(res => {
        if (!res.sukses && res.pesan) {
            alert(res.pesan);
        } else {
            // update data di background
            loadCustomer();
            loadPegawai();
        }
    })
    .catch(err => {
        alert("Terjadi kesalahan sistem saat mengurangi stok.");
    });
}

function hapus(id) {
    if(confirm("Apakah Anda yakin ingin menghapus produk ini?")) {
        fetch(url + "?aksi=hapus&id=" + id)
        .then(() => loadPegawai())
        .catch(() => alert("Gagal menghapus produk."));
    }
}

// Load initial data
window.addEventListener('DOMContentLoaded', function() {
    loadCustomer();
});
</script>

</body>
</html>