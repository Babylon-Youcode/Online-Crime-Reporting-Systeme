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

    <form action="{{ route('raport.store')}}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> </label>
          <select name="crime_type" id="cars">
            <option value="Terrorisme">Terrorisme</option>
            <option value="Burglary and Robber">Burglary and Robbery</option>
            <option value="Murder">Murder</option>
            <option value="kidnapping">kidnapping</option>
            <option value="child abuse">child abuse</option>
            <option value="arson">arson</option>
            <option value="other">other, write in the decription</option>
           </select>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlFile1">victim name</label>
          <input type="title" name="victim_name" class="form-control-file" id="exampleFormControlFile1">
          </div>
        
        <div class="mb-3">
        <label for="exampleFormControlFile1">victim adresse</label>
        <input type="title" name="victim_adresse" class="form-control-file" id="exampleFormControlFile1">
        <div class="mb-3">
          <label for="exampleFormControlFile1">description</label>
          <textarea type="text" name="discription" class="form-control-file" id="exampleFormControlFile1"> </textarea>
          </div>
        

        <div class="mb-3">
            <label for="exampleFormControlFile1">crime date</label>
            <input type="date" name="date" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlFile1">add image</label>
              <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
              </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
</body>
</html>