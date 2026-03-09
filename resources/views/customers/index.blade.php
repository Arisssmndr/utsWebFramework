<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <h1>Ini halaman Produk</h1> <br>

    @session('success')
    {{ session('success') }}
    @endsession

    @session('erorr')
    {{ session('erorr') }}
    @endsession <br>

    <a href="/customer/create">Tambah Kategori</a>

    <form action="" method="GET">
        <input type="text" name="customer_name" placeholder="customer_name">
        <input type="text" name="address" placeholder="address" value="" >
        <button>Cari Data</button>
    </form>

    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Customer</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Province</th>
                    <th>Postal Code</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->customer_code }}</td>
                        <td>{{ $item->customer_name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->province }}</td>
                        <td>{{ $item->postal_code }}</td>
                        <td>{{ $item->status == 1 ? 'Aktif' : 'Non-Aktif' }}</td>
                        <td style="display: flex; gap: 5px;">
                            <button> <a href="/customer/update/{{ $item->id }}">Edit</a></button>
                            <form action="/customer/delete/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure delete this data')" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
