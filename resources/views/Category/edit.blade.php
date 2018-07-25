<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Product Form</h1>
    </div>
    <div class="row">
        <form action="/Category/update" method="post">
            <input type="hidden" name="id" value="$product_in_view -> id}}">
            {{csrf_field()}}
            <div class="form-group">
                <label>Tiêu Đề</label>
                <input type="text" name="name" class="form-control" value="{{$obj -> name}}">
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="text" name="image" class="form-control" value="{{$obj -> description}}"3
                >
            </div>

            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" name="description" class="form-control" value="{{$obj -> image}}">
            </div>

            <div class="form-group">[
                <input type="submit" value="save" class="btn btn-primary">
                <input type="reset" value="reset" class="btn btn-dark">
            </div>
        </form>
    </div>
</div>
</body>
</html>
