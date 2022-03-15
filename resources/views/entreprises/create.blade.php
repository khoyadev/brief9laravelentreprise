<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ASC</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">entreprise</a>
              </li>

              <li class="nav-item">
                <a class="nav-link disabled">Ajout Entreprise</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="col-6 m-5">
        <form method="POST" action="{{route('entreprises.store')}}" >
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom de l'entreprise</label>
              <input type="text" class="form-control" id="nometreprise" name="nom" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Siege de l'entreprise</label>
                <input type="text" class="form-control" id="siegeetreprise" name="siege" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="Telephoneetreprise" name="telephone" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">date de Creation</label>
                <input type="date" class="form-control" id="siegeetreprise" name="dateCreation" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Registre</label>
                <input type="text" class="form-control" id="siegeetreprise"  name="registre" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NINEA</label>
                <input type="text" class="form-control" id="siegeetreprise"  name="ninea" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SiteWEB</label>
                <input type="text"  class="form-control" id="siegeetreprise" name="suteWeb" aria-describedby="emailHelp">
              </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" name="dispositifFormation" id="dispositifFormation">
              <label class="form-check-label" for="exampleCheck1">Avez-vous un Dispositif de formation ?</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="organigramme" id="organigramme">
                <label class="form-check-label" for="exampleCheck1">Avez-vous un organigramme ?</label>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="contrat" id="contrat">
                <label class="form-check-label" for="exampleCheck1">Avez-vous des contrat ?</label>
              </div>
              <select class="form-select" name="quartier_id" aria-label="Default select example">
                <option selected>Selectionner un quartier</option>
                @foreach ($quartier as $q)
                <option value="{{ $q->id }}">{{ $q->nom }}</option>
                @endforeach                
              </select>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
</body>
</html>