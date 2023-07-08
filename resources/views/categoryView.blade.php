<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{route('category.store')}}" method="post">
    @csrf
    <div class="group">
        <label for="name">Category Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Category Name">
    </div>
    <div>
        <input type="submit"  class="btn btn-primary">
    </div>
</form>
</body>
</html>
