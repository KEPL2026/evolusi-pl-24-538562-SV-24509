<!DOCTYPE html>
<html>
<head>
    <title>Inventaris Barang</title>
</head>
<body style="font-family: Arial; padding: 50px;">
    <h2>Manajemen Inventaris</h2>
    
    <form action="/items" method="POST" style="margin-bottom: 20px;">
        @csrf
        <input type="text" name="name" placeholder="Nama Barang" required>
        <input type="number" name="stock" placeholder="Jumlah Stok" required>
        <button type="submit">Tambah Barang</button>
    </form>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Stok</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->stock }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>