<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha256-MBffSnbbXwHCuZtgPYiwMQbfE7z+GOZ7fBPCNB06Z98="
          crossorigin="anonymous">
    <title>Laravel CRUD</title>
</head>
<body>
<h1>Todos</h1>
<hr>
<h2>Add new Tasks</h2>
<form action="{{route('tasks.store')}}" method="POST">
    @csrf
    <input type="text" class="form-control" name="title" placeholder="Add new task">
    <button class="btn btn-primary" type="submit">Store</button>
</form>
<hr>

<h2>Tasks</h2>
<ul class="list-group">
    @foreach( $tasks as $task )
        <li class="list-group-item">{{ $task->title }}</li>
    @endforeach

</ul>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha256-gvZPYrsDwbwYJLD5yeBfcNujPhRoGOY831wwbIzz3t0="
        crossorigin="anonymous"></script>


</body>
</html>
