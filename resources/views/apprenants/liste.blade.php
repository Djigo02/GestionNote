@include('header')
    <div class="card mt-5 col-8 offset-2">
        <div class="card-header h2 text-center text-primary">Liste des apprenants </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Matricule</th>
                    <th scope="col">Telephone</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($apprenants as $apprenant)
                        <tr>
                            <th scope="row">{{$apprenant->id}}</th>
                            <td>{{$apprenant->prenom}}</td>
                            <td>{{$apprenant->nom}}</td>
                            <td>{{$apprenant->matricule}}</td>
                            <td>{{$apprenant->telephone}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    
    </div>
@include('footer')