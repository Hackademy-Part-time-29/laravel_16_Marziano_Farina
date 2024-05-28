<x-layout>

    <h3>Ecco i nostri generi</h3>  
    
    <div class="row">
        @foreach ($genres as $genre)
            <div class="col-3 p-3">            
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$genre['name']}}</h5>
                        <p class="card-text">Numero Anime : {{$genre['count']}}</p>
                        <a href="{{route('animeByGenre',['id'=>$genre['mal_id']])}}" class="btn btn-primary">Filtra</a>
                    </div>
                </div>            
            </div>
        @endforeach
    </div>    

</x-layout>