<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
<div class="container-fluid">
    <div class="row pt-5">
        <div class="col-md-4 offset-md-4">
    <form action="process_form.php" method="Post">

<div class="row">
    <div class="col-md-12">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" >
    </div>
    <div class="col-md-12">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" >
    </div>
    <div class="col-md-12">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" class="form-control" >
    </div>
    </div>
  
       <div class="row pt-3">
        <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
       </div>
    </form>
   
    </div>
    </div>
    </div>
</body>
</html>
