@extends('site.layouts.basic')

@section('titulo', $titulo)

@section('bloco_conteudo')

<div class="plano-fundo">
    <!-- <h2>
        
        <br><small class="text-body-secondary">Estamos aqui para te ensinar tudo sobre racismo ambiental</small>
    </h2> -->
      
    <div class="parallax">
        <div class="parallax-text"> <h1>Bem-vindo ao <p class="neon">NATRUEE</p></h1> </div>
        
    </div>
    <!-- <img src="{{ asset('media/wallpaper-blur.png') }}" alt="Plano de fundo"> -->
</div>

<div class="container-fluid py-5 w-50">
        <div class="texto-resumo text-center">
            <h2><strong>Somos um projeto que visa falar sobre os problemas ambientais</strong></h2>
            <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum
                Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum
            </p>
        </div>
</div>

<div class="container-fluid py-5">
    <div class="row d-flex justify-content-center">
        <div class="card text-center mb-3 me-3" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Artigos</h5>
              <p class="card-text">Fique por dentro das pesquisas acadêmicas realizadas.</p>
              <a href="#" class="btn btn-success">Acessar</a>
            </div>
          </div>
          <div class="card text-center mb-3 me-3" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Podcasts</h5>
              <p class="card-text">Conheça as produções de podcasts da nossa brilhante equipe.</p>
              <a href="{{ route('site.podcast') }}" class="btn btn-success">Acessar</a>
            </div>
        </div>
        <div class="card text-center mb-3 me-3" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Termos</h5>
              <p class="card-text">Conheça alguns termos técnicos da área em diversas línguas.</p>
              <a href="#" class="btn btn-success">Acessar</a>
            </div>
        </div>
    </div>
</div>

@endsection