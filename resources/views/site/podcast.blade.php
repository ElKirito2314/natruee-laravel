@extends('site.layouts.basic')

@section('titulo', $titulo)

@section('bloco_conteudo')

<div class="container py-5 mx-auto">
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('media/podcast-1.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Boas praticas de gestão e reciclagem de equipamentos de informática</h5>
          <p>A gestão e reciclagem adequadas de equipamentos de informática são essenciais para a preservação do meio ambiente e a sustentabilidade</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('media/podcast-2.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Descarte inadequado do <i>Lixo Eletrônico</i></h5>
          <p>Como o descarte inadequado de lixo eletrônico contamina o meio ambiente e desperdiça recursos valiosos</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('media/podcast-3.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Impactos socias e ambientais dos resíduos eletrônicos</h5>
          <p>Os resíduos eletrônicos causam graves impactos sociais e ambientais, contaminando o meio ambiente e prejudicando a saúde humana</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

@endsection