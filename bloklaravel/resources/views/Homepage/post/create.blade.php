<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Add Post</title>
</head>

<body>

    <h1 style="text-align : center">Add Post</h1>
    <br>
    <br>
    <br>
    <div class="container">
    <form action="{{ route('post.store') }}" method="post" class="form" enctype="multipart/form-data">
    @csrf
            <input class="form-control" type="text" name="title" placeholder="Title" required>
            <input type="file" name="image" class="form-control-file mt-2" required>
            <textarea class="form-control" name="content" rows="6" placeholder="Content" required></textarea>

            <br>

            <input type="submit" value="Kirim" name="kirim" class="btn btn-primary">
        </form>
    </div>
</body>

</html>