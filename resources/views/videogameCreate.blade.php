<x-layout>
    <header class="container-fluid h-custom">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Videogame</h1>
            </div>
        </div>
    </header>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="text-center">Parlami del tuo Videogioco preferito!</h4>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="rounded-3 shadow bg-success p-3" method="POST" action="{{route('videogioco.submit')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" value="{{old('name')}}" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="genere" class="form-label">Genere</label>
                        <input name="genere" type="text" value="{{old('genere')}}" class="form-control" id="genere">
                    </div>
                    <div class="mb-3">
                        <label for="produttore" class="form-label">Casa produttrice</label>
                        <input name="produttore" type="text" value="{{old('produttore')}}" class="form-control" id="produttore">
                    </div>
                    <div class="mb-3">
                        <label for="messaggio" class="form-label">Commento personale</label>
                        <textarea name="messaggio" id="messaggio" cols="30" rows="10" class="form-control">{{old('messaggio')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary">Invia commento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>
