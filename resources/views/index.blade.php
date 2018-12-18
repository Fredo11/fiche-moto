<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Menu moto</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br>
    <a class="btn btn-success " href="{{ url('/passports/create') }}">Ajouter</a>
    <a class="btn btn-success pull-right" href="{{url('/')}}">Retour</a>
    <br><br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Marque</th>
        <th>Cylindrée</th>
        <th>Modèle</th>
        <th>Année</th>
        <th>Catégorie</th>
        <th>Photo</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($passports as $passport)

      <tr>
        <td>{{$passport['id']}}</td>
        <td>{{$passport['marque']}}</td>
        <td>{{$passport['cylindree']}}</td>
        <td>{{$passport['modele']}}</td>
        <td>{{$passport['annee']}}</td>
        <td>{{$passport['categorie']}}</td>

        <td><img class="img-responsive" width=50px; alt="" src="/images/{{ $passport['filename'] }}" /></td>
        <td><a href="{{action('PassportController@edit', $passport['id'])}}" class="btn btn-warning">Modifier</a></td>
        <td><a href="{{action('PassportController@show', $passport['id'])}}" class="btn btn-primary">Détails</a></td>
        <td>
          <form action="{{action('PassportController@destroy', $passport['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Effacer</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  {!! $passports->links() !!}
  </body>
</html>
