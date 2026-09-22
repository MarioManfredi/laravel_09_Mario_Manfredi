<x-layout>
    <header class="container-fluid h-custom">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Videogioco</h1>
            </div>
        </div>
    </header>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach ($videogames as $videogame)
            <div class="col-12 col-md-4 d-flex justify-content-center mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$videogame->name}}</h5>
                        <h4 class="card-text">{{$videogame->genere}}</h4>
                        <h4 class="card-text">{{$videogame->produttore}}</h4>
                        <p class="card-text lead">{{$videogame->messaggio}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</x-layout>