<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <button type="button" class="btn btn-success mx-3 " ><a style="text-decoration: none"  class="text-light" href="{{url('/afficher')}}">afficher</a></button>
    <div class="m-3 col-4" style="margin: auto 10px">
        <form action="{{route('ajouter')}}" method="post">
          @csrf
          <label for="nom">First name:</label><br>
          <input type="text" id="nom" name="nom" class="w-100"><br>
          <label for="prenom">Last name:</label><br>
          <input type="text" id="prenom" name="prenom" class="w-100"><br>
          <label for="age">age</label><br>
          <input type="text" id="age" name="age" class="w-100"><br><br>
          <input type="submit" value="Submit" class="btn btn-success">
        </form> 
      </div>
</body>
</html>




