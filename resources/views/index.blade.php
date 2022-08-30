<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/payment", method="GET">
        <h1>Data Diri</h1>
        <div class="formcontainer">
            <hr />
            <div class="container">
                <label for="uname"><strong>Nama</strong></label>
                <input type="text" placeholder="Masukkan nama" name="uname" required>
                <label for="psw"><strong>Password</strong></label>
                <input type="text" placeholder="Masukkan email" name="email" required>
                <label for="psw"><strong>Nomor</strong></label>
                <input type="text" placeholder="Masukkan email" name="number" required>
            </div>
            <button type="submit">Login</button>
    </form>

    @if (session('alert-success'))
        <script>
            alert("{{ session('alert-success') }}")
        </script>
    @elseif (session('alert-failed'))
        <script>
            alert("{{ session('alert-failed') }}")
        </script>
    @endif
</body>

</html>
