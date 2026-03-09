<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Customer</title>
</head>
<body>
    <h1>Tambah Data Customer</h1>

    <form action="/customer/store" method="POST">
        @csrf

        <div>
            <label>Kode Customer</label><br>
            <input type="text" name="customer_code" placeholder="CUS001" required>
        </div>

        <div>
            <label>Nama Customer</label><br>
            <input type="text" name="customer_name" placeholder="Nama Lengkap" required>
        </div>

        <div>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="contoh@mail.com" required>
        </div>

        <div>
            <label>Phone</label><br>
            <input type="text" name="phone" placeholder="08xxxxxxx" required>
        </div>

        <div>
            <label>Address</label><br>
            <textarea name="address" rows="3" required></textarea>
        </div>

        <div>
            <label>City</label><br>
            <input type="text" name="city" placeholder="Kota" required>
        </div>

        <div>
            <label>Province</label><br>
            <input type="text" name="province" placeholder="Provinsi" required>
        </div>

        <div>
            <label>Postal Code</label><br>
            <input type="text" name="postal_code" placeholder="Kode Pos" required>
        </div>

        <div>
            <label>Status</label><br>
            <select name="status">
                <option value="1">Aktif</option>
                <option value="0">Non-Aktif</option>
            </select>
        </div>

        <br>
        <button type="submit">Simpan Data</button>
        <a href="/customer"><button>Batal</button></a>
    </form>
</body>
</html>
