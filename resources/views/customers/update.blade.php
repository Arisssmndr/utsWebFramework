<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Customer</title>
</head>

<body>
    <h1>Tambah Data Customer</h1>

    <form action="/customer/edit/{{ $customers->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Kode Customer</label><br>
            <input type="text" name="customer_code" placeholder="CUS001" value="{{ $customers->customer_code }}"
                required>
        </div>

        <div>
            <label>Nama Customer</label><br>
            <input type="text" name="customer_name" placeholder="Nama Lengkap"
                value="{{ $customers->customer_name }}" required>
        </div>

        <div>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="contoh@mail.com" value="{{ $customers->email }}" required>
        </div>

        <div>
            <label>Phone</label><br>
            <input type="text" name="phone" placeholder="08xxxxxxx" value="{{ $customers->phone }}" required>
        </div>

        <div>
            <label>Address</label><br>
            <textarea name="address" rows="3"  required >{{ $customers->address }}"</textarea>
        </div>

        <div>
            <label>City</label><br>
            <input type="text" name="city" placeholder="Kota" value="{{ $customers->city }}" required>
        </div>

        <div>
            <label>Province</label><br>
            <input type="text" name="province" placeholder="Provinsi" value="{{ $customers->province }}" required>
        </div>

        <div>
            <label>Postal Code</label><br>
            <input type="text" name="postal_code" placeholder="Kode Pos" value="{{ $customers->postal_code }}"
                required>
        </div>

        <div>
            <label>Status</label><br>
            <select name="status">
                <option value="1" {{ $customers->status == 1 ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ $customers->status == 0 ? 'selected' : '' }}>Non-Aktif</option>
            </select>
        </div>
        <br>
        <button type="submit">Simpan Data</button>
        <a href="/customer">Batal</a>
    </form>
</body>

</html>
