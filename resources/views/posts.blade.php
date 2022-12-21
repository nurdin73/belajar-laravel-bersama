<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <a href="{{ url('post-create') }}">Add</a>
  <table border='1'>
    <thead>
      <tr>
        <th>NO</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
          $no = 1;
      @endphp
      @foreach ($posts as $post)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $post->judul }}</td>
          <td>{{ $post->isi }}</td>
          <td>
            <a href="{{ url("post-update/{$post->id}") }}">Edit</a>
            <form action="{{ url("post-delete/{$post->id}") }}" method="post">
              @method('DELETE')
              @csrf
              <button type="submit">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>