<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Moto  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Modifier une fiche</h2><br  />
        <form method="post" action="{{action('PassportController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="marque">Marque:</label>
            <input type="text" class="form-control" name="marque" value="{{$passport->marque}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="cylindree">Cylindrée</label>
              <input type="integer" class="form-control" name="cylindree" value="{{$passport->cylindree}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="modele">Modele:</label>
              <input type="text" class="form-control" name="modele" value="{{$passport->modele}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="annee">Année</label>
              <input type="integer" class="form-control" name="annee" value="{{$passport->cylindree}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>Catégorie</lable>
                <select name="categorie">
                  <option value="Routiere"  @if($passport->categorie=="Routiere") selected @endif>Routière</option>
                  <option value="Trail"  @if($passport->categorie=="Trail") selected @endif>Trail</option>
                  <option value="Enduro" @if($passport->categorie=="Enduro") selected @endif>Enduro</option>
                  <option value="Cross" @if($passport->categorie=="Cross") selected @endif>Cross</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="filename" value="{{$passport->filename}}">
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            <a class="btn btn-success pull-right" href="{{url('/passports')}}">Menu moto</a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
