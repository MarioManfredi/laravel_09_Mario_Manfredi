<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($videogame->img)}}" class="card-img-top img-fluid" alt="Videogioco {{$videogame->name}}">
    <div class="card-body">
        <h5 class="card-title">{{$videogame->name}}</h5>
        <h4 class="card-text">{{$videogame->genere}}</h4>
        <h4 class="card-text">{{$videogame->produttore}}</h4>
        <p class="card-text lead">{{$videogame->messaggio}}</p>
    </div>
</div>