@extends('admin.main')

@section('content')
<br>
<div class="container">
<div class="row card text-white bg-dark">
    <h4 class="card-header">Ajout d'une nouvelle d'une série</h4>
    <div class="card-body">
        <form action="{{ route('series.store') }}" method="post">
            @csrf
            @method('POST')



        <div style="font-size; 50px; display:block">
        <button type="submit" class="btn btn-secondary">Ajouter</button>
        </div>
            <div style="display:inline-block">


                <div class="form-group">
                    <label class="label">user_id</label>
                    <input type="number" min="1" class="form-control  @error('user_id') is-invalid @enderror" name="user_id" id="user_id" placeholder="Votre identifiant sur le site" value="">
                    @error('user_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">le (s) Producteur(s)-Realisateur(s) dela serie</label>
                    <input type="text" class="form-control  @error('serie_maker') is-invalid @enderror" name="serie_maker" id="serie_maker" placeholder="Nom du Producteurs" value="">
                    @error('serie_maker')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">Titre</label>
                    <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title" id="title" placeholder="Titre de la serie" value="">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">L'url pour l'image de couverture</label>
                    <input type="text" class="form-control  @error('image') is-invalid @enderror" name="image" id="image" placeholder="image de couverture" value="">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">L'url pour la video de la Bande Annonce</label>
                    <input type="text" class="form-control  @error('movie') is-invalid @enderror" name="movie" id="movie" placeholder=" Video Bande Annonce" value="">
                    @error('movie')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


            </div>

            <div style="font-size; 50px; display:inline-block">

                <div class="form-group">
                    <label class="label">Description</label>
                    <textarea class="form-control  @error('content') is-invalid @enderror" name="content" id="content" placeholder="Description de serie"></textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">Acteurs</label>
                    <input type="text" class="form-control  @error('actors') is-invalid @enderror" name="actors" id="actors" placeholder="Titre du serie" value="">
                    @error('actors')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">Categorie : Appuie sur CTRL pour selection multiple</label>
                    <select list="categories" min="1" max="3" type="text" class="form-control  @error('category') is-invalid @enderror" name="category" id="category" placeholder="Categories" value="" multiple>
                        <option value="Comédie">Comédie</option>
                        <option value="Drame">Drame</option>
                        <option value="Animation">Animation</option>
                        <option value="Documentaire">Documentaire</option>
                        <option value="Mini-série">Mini-série</option>
                        <option value="Policier">Policier</option>
                        <option value="Romance">Romance</option>
                        <option value="Travail">Travail</option>
                        <option value="Fantastique">Fantastique</option>
                        <option value="Jeunesse">Jeunesse</option>
                        <option value="Science-fiction">Science-fiction</option>
                        <option value="Thriller">Thriller</option>
                        <option value="Aventure">Aventure</option>
                        <option value="Historique">Historique</option>
                        <option value="Sport">Sport</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="Épouvante-horreur">Épouvante-horreur</option>
                        <option value="Télé-réalité">Télé-réalité</option>
                        <option value="Musique">Musique</option>
                        <option value="Comédie">Comédie</option>
                        <option value="dramatique">dramatique</option>
                    </select>


                    @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="label">Date de sortie</label>
                    <input type="datetime" class="form-control  @error('year') is-invalid @enderror" name="year" id="year" placeholder="Date de sortie" value="">
                    @error('year')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
        </form>


        <div class="container">

            <h3 class="jumbotron">Laravel Multiple File Upload</h3>
        <form method="post" action="{{url('file')}}" enctype="multipart/form-data">
          {{csrf_field()}}

                <div class="input-group control-group increment" >
                  <input type="file" name="filename[]" class="form-control">
                  <div class="input-group-btn">
                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                  </div>
                </div>
                <div class="clone hide">
                  <div class="control-group input-group" style="margin-top:10px">
                    <input type="file" name="filename[]" class="form-control">
                    <div class="input-group-btn">
                      <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

          </form>
          </div>


        <script type="text/javascript">

            $(document).ready(function() {

              $(".btn-success").click(function(){
                  var html = $(".clone").html();
                  $(".increment").after(html);
              });

              $("body").on("click",".btn-danger",function(){
                  $(this).parents(".control-group").remove();
              });

            });

        </script>
    </div>
</div>
</div>
@endsection
