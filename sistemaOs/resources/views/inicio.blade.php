@extends('layouts.main')

@section('title','Início')

@section('navbar')
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/clientes/cadastrar">Cadastrar clientes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
@endsection


@section('content')

@endsection

