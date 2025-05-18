<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku dan Penulis</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Nama Penulis</th>
                <th>Email Penulis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->author->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
