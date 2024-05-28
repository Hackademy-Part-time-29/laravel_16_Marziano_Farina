<x-layout>

    <h3>Ecco i nostri generi</h3>  
    
    <div class="row">
        @foreach ($animes as $anime)
            <div class="col-3 p-3">            
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$anime['title_en']}}</h5>
                        <p class="card-text">Descrizione : {{Str::limit($anime['synopsis'],100)}}</p>
                    </div>
                </div>            
            </div>
        @endforeach
    </div>    

</x-layout>