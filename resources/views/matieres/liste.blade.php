@include('header')
    <div class="card mt-5 col-8 offset-2">
        <div class="card-header h2 text-center text-primary">Liste des apprenants </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Coeficient</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($matieres as $matiere)
                        <tr>
                            <th scope="row">{{$matiere->id}}</th>
                            <td>{{$matiere->nom}}</td>
                            <td>{{$matiere->coef}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    
    </div>
@include('footer')