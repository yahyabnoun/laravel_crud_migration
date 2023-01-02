<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="{{ asset('/style.css') }}" rel="stylesheet"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div class="main">

    @if (session()->has('success_ajouté'))
        <div class="alert alert-success" role="alert">
              {{session('success_ajouté')}}
        </div>
    @endif
    @if (session()->has('success_update'))
    <div class="alert alert-success" role="alert">
          {{session('success_update')}}
    </div>
  @endif
  @if (session()->has('success_destroy'))
    <div class="alert alert-warning" role="alert">
          {{session('success_destroy')}}
    </div>
  @endif
    <a style="text-decoration: none" class="text-light btn btn-success my-4 mx-3" href="{{url('/')}}">ajouter</a>
    <table class="table">
      <thead>
        <tr>
          <th >id</th>
          <th >nom</th>
          <th >prenom</th>
          <th >age</th>
          <th >action</th>
        </tr>
      </thead>
      <tbody>
    @foreach ($stagiaires as $stagiaire)
        <tr>
        
            <td>{{$stagiaire->id}}</td>
            <td>{{$stagiaire->nom}}</td>
            <td>{{$stagiaire->prenom }}</td>
            <td>{{$stagiaire->age }}</td>
            <td>
                <a class="text-light btn btn-success" style="text-decoration: none" href ='{{route('edit',$stagiaire->id)}}'>modifier</a>  
              <form action="delete/{{ $stagiaire->id }}" method="POST">
                  @method('delete')
                <a class="text-light btn-danger btn" style="text-decoration: none" href = '{{route('destroy',$stagiaire->id)}}'>Delete</a>
              </form>
            </td>
          </tr>

    @endforeach
</tbody>

  </table>

</div>

</body>
</html>