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
        <form action="/product/{{$product_in_view->id}}" method="POST">
            <input type="hidden" name="id" value="$product_in_view -> id}}">
            @method('PUT')
            {{csrf_field()}}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{$product_in_view -> name}}">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" value="{{$product_in_view -> price}}">
            </div>
            <div class="form-group">
                <label>CategoryId</label>
                <select name="categoryId" class="form-control">
                    <option value="1" {{$product_in_view -> categoryId == 1 ? 'selected' : ''}}>Món Việt</option>
                    <option value="2" {{$product_in_view -> categoryId == 2 ? 'selected' : ''}}>Món Tàu</option>
                    <option value="3" {{$product_in_view -> categoryId == 3 ? 'selected' : ''}}>Món Âu</option>
                    <option value="4" {{$product_in_view -> categoryId == 4 ? 'selected' : ''}}>Món Á</option>
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" value="{{$product_in_view -> description}}"3
                >
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="text" name="image" class="form-control" value="{{$product_in_view -> image}}">
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
