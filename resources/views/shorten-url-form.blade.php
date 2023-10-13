@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/shorten-form.css">
@endpush
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endpush
<x-app-layout>
    @stack('css')
    @stack('script')
    <form action="/shorten/" method="POST" class="d-flex justify-content-center">
        @csrf
        <div class="shorten-form-border w-50">
            <div class="mb-3">
                <label for="url" class="form-label">Url Original</label>
                <input type="url" class="form-control @if($errors->has('url')) is-invalid @endif" name="url" id="url" placeholder="Digite a url que será encurtada">
                @error('url')
                <div class="invalid-feedback">
                    @foreach($errors->get('url') as $error)
                        <span>{{$error}}</span>
                    @endforeach
                </div>
                @enderror
            </div>
            <div class="mb-3 button-div">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</x-app-layout>

