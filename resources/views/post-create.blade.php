<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{ url('post-create') }}" method="post">
    @csrf
    <input type="text" name="judul"><br>
    <textarea name="isi" id="" cols="30" rows="10"></textarea><br>
    <button type="submit">Simpan</button>
  </form>
</body>
</html>