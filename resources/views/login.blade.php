<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Tela de Login</title>
</head>
<body>
    <form action="/login/" method="POST">
        @csrf
        <div class="login-form-border">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" name="email" id="email" placeholder="Informe o email do usuário">
                @error('email')
                    <div class="invalid-feedback">
                        @foreach($errors->get('email') as $error)
                            <span>{{$error}}</span>
                        @endforeach
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" minlength="1" name="password" id="password" placeholder="Informe sua senha">
                @error('password')
                <div class="invalid-feedback">
                    @foreach($errors->get('password') as $error)
                        <span>{{$error}}</span><br>
                    @endforeach
                </div>
                @enderror
            </div>
            <div class="mb-3 button-div">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>

