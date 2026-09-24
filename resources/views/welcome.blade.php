<x-layout>
    <header class="container-fluid h-custom">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Homepage</h1>
            </div>
        </div>
    </header>
    
    @if (session('message'))
    <script>
        alert("{{ session('message') }}")
    </script>
    @endif
</x-layout>