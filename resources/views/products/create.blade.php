<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create PAGE</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
      <div class="container">
        <div class="row">

        <h2>Create</h2>
        </div>

        <div class="row">
        <form method="POST" action="/products/store">
         @csrf
        <div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="product_name">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile">
</div>

<button type="button" class="btn btn-success">Success</button>
             
        </form>

        </div>



      </div>
    </body>


</html>