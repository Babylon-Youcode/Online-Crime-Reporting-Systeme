<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>annonces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <div class="container"> 
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">discription</th>
                    <th scope="col">date</th>
                    <th scope="col">image</th>
        
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
        
        
                @foreach ($ans as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->title}}</td>
                        <td>{{$item->discription}}</td>
                        <td>{{$item->date}}</td>
                        <td> <img src="{{asset('img/'.$item->image)}}" height="50px"> </td>
                        <td>
                          <a class="btn btn-warning" href="{{ route('dash.annonces.edit',$item->id) }}"> edit</a>
                          <a class="btn btn-danger"href="{{ route('dash.annonces.delete',$item->id) }}">delete</a>
                        </td>        
                    </tr>
                @endforeach
        
            </tbody>
        </table>
    </div>
  
</body>

