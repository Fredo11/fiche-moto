<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Menu moto</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}

  </head>
  <body>
    <div class="container">
    <br>
    <a class="btn btn-success " href="{{ url('/passports/create') }}">Ajouter</a>
    <a class="btn btn-success " href="{{ url('/listemarque') }}">Liste marques</a>
    <a class="btn btn-success " href="{{ url('/logo-moto') }}">Logos marques</a>
    <a class="btn btn-primary pull-right" href="{{url('/')}}">Retour</a>
    <li class="btn pull-right">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sélection de tri
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{action('TrierController@triermarque')}}">Marque</a>
          <a class="dropdown-item" href="{{action('TrierController@triercylindree')}}">Cylindrée</a>
          <a class="dropdown-item" href="{{action('TrierController@triercategorie')}}">Catégorie</a>
          <a class="dropdown-item" href="{{action('TrierController@trierannee')}}">Année</a>

        </div>
      </li>
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
        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$passport['id']}}">Supprimer</button></td>
      </tr>
<!--/////////////////////////////////  Modal ////////////////////////////////////////////-->

                <div class="modal fade" id="exampleModal{{$passport['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Voulez vous vraiment supprimer cette fiche ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>
                        {{--<button type="submit" class="btn btn-danger" >Supprimer</button>--}}

                        <form action="{{action('PassportController@destroy', $passport['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Effacer</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>

      @endforeach
    </tbody>
  </table>
  </div>
   {!! $passports->links() !!}   <!--// lien pour la pagination /// -->
  </body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
