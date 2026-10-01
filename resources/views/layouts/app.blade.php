<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Blog Ayu')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f5f5f5;
            color: #333;
        }

        nav {
            background: #333;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .button {
            display: inline-block;
            padding: 8px 12px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .button-danger {
            background: #b00020;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        textarea {
            min-height: 150px;
        }
    </style>
</head>

<body>

    <nav>
        <a href="{{ route('posts.index') }}">Blog</a>
        <a href="{{ route('posts.create') }}">Tambah Post</a>
    </nav>

    <main class="container">
        @yield('content')
    </main>

</body>
</html>
