<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>

    <form action="{{ route('dash.annonces.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> title</label>
          <input type="title" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label"> write a discription here</label>
          <textarea type="text" name="discription" class="form-control" id="exampleInputPassword1"></textarea>
        </div>
        
        <div class="mb-3">
        <label for="exampleFormControlFile1">Add image</label>
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlFile1">date</label>
            <input type="date" name="date" class="form-control-file" id="exampleFormControlFile1">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
</body>
</html>