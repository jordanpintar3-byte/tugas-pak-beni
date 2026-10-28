<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang - Toko MVC</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 20px; }
        .container { max-width: 500px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); margin: auto; }
        h2 { text-align: center; color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="number"], select { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        .btn-container { display: flex; gap: 10px; }
        button { padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
        button[type="submit"] { background-color: #28a745; color: white; flex: 1; }
        button[type="reset"] { background-color: #dc3545; color: white; flex: 1; }
        button:hover { opacity: 0.9; }
        .alert { padding: 10px; margin-bottom: 15px; border-radius: 4px; text-align: center; }
        .alert.success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert.error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Tambah Data Barang</h2>

    <?php if(!empty($pesan)): ?>
        <div class="alert <?= $status; ?>">
            <?= htmlspecialchars($pesan); ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="kode_barang">Kode Barang:</label>
            <input type="text" id="kode_barang" name="kode_barang" placeholder="Contoh: BRG001" required>
        </div>

        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" placeholder="Contoh: Keyboard USB" required>
        </div>

        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <input type="text" id="kategori" name="kategori" placeholder="Contoh: Elektronik" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga (Rp):</label>
            <input type="number" step="0.01" id="harga" name="harga" placeholder="Contoh: 150000" required>
        </div>

        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" placeholder="Contoh: 20" required>
        </div>

        <div class="btn-container">
            <button type="submit" name="submit">Simpan</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</div>

</body>
</html>