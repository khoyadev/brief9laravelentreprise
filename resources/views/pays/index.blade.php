<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>

     <div class="container">
         <h2>Liste des pays</h2>
         <div class="row">
             <div class="col">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                    <th scope="col">Indicatif</th>
                      <th scope="col">Voir les regions</th>
                    </tr>
                  </thead>
                    <tbody>
                        @foreach ($pays as $p)
                        <tr>
                          <th scope="row">{{ $p->id }}</th>
                          <td>{{ $p->nom }}</td>
                          <td>{{ $p->indicatif }}</td>
                            <td><a href="/regions/{{ $p->id }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-success">régions</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
         </div>
     </div>
    </body>
</html>