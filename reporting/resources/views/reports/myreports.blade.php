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
                    <th scope="col">crime type</th>
                    <th scope="col">victim name</th>
                    <th scope="col">victim adress</th>
                    <th scope="col">description</th>
                    <th scope="col">victm image</th>
                    <th scope="col">crime date</th>
                    <th scope="col">status</th>
                </tr>
            </thead>
            <tbody>
        
        
                @foreach ($reps as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->crime_type}}</td>
                        <td>{{$item->victim_name}}</td>
                        <td>{{$item->victim_adresse}}</td>
                        <td>{{$item->discription}}</td>
                        <td> <img src="{{asset('img/crimeimages/'.$item->victim_image)}}"></td>
                        <td>{{$item->crime_date}}</td>
                        <td>{{$item->reports_status}} </td>

                    </tr>
                @endforeach
        
            </tbody>
        </table>
    </div>
  
</body>

