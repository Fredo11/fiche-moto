<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Moto  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Création fiche moto</h2><br/>
      <form method="post" action="{{url('passports')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Marque">Marque:</label>
            <input type="text" class="form-control" name="marque">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Cylindree">Cylindrée:</label>
              <input type="integer" class="form-control" name="cylindree">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Modele">Modèle:</label>
              <input type="text" class="form-control" name="modele">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Annee">Année:</label>
              <input type="integer" class="form-control" name="annee">
            </div>
          </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Catégorie</lable>
                <select name="categorie">
                  <option value="Routière">Routière</option>
                  <option value="Trail">trail</option>
                  <option value="Enduro">Enduro</option>
                  <option value="Cross">Cross</option>
                  <option value="Trial">Trial</option>
                  <option value="Supermotard">Supermotard</option>
                  <option value="Scooter">Scooter</option>
                  <option value="Mobylette">Mobylette</option>
                  <option value="Quad">Quad</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="filename">
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
            <a class="btn btn-success" href="{{url('/passports')}}">Retour</a>
          </div>
        </div>
      </form>
    </div>

  </body>
</html>
