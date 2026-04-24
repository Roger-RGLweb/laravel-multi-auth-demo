@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow p-4" style="width: 400px;">
        <h3 class="text-center mb-4">Login</h3>

        <form method="POST" action="/login">
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label>Senha</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button class="btn btn-primary w-100">Entrar</button>
        </form>

        <hr>

        <small class="text-muted">
            Admin: admin@test.com <br>
            Cliente: cliente@test.com <br>
            Vendor: vendor@test.com <br>
            Senha: 123456
        </small>
    </div>

</div>
@endsection