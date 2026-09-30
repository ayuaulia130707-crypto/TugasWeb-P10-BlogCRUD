<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
</head>
<body>

    <h1>Selamat Datang, {{ $nama }}!</h1>

    <h2>Daftar Mata Kuliah</h2>

    <ul>
        @foreach ($mataKuliah as $matkul)
            <li>{{ $matkul }}</li>
        @endforeach
    </ul>

</body>
</html>
