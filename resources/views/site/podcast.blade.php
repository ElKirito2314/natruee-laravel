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
        <video class="d-block w-100" controls>
          <source src="{{ asset('media/podcast1.mp4') }}" type="video/mp4">
          Seu navegador não suporta a tag de vídeo.
        </video>
        <div class="carousel-caption d-none d-md-block">
          <h5>Boas praticas de gestão e reciclagem de equipamentos de informática</h5>
          <p>A gestão e reciclagem adequadas de equipamentos de informática são essenciais para a preservação do meio ambiente e a sustentabilidade</p>
        </div>
      </div>
      <div class="carousel-item">
        <video class="d-block w-100" controls>
          <source src="{{ asset('media/podcast2.mp4') }}" type="video/mp4">
          Seu navegador não suporta a tag de vídeo.
        </video>
        <div class="carousel-caption d-none d-md-block">
          <h5>Conexão Sustentável</h5>
          <p>Como o descarte inadequado de lixo eletrônico contamina o meio ambiente e desperdiça recursos valiosos</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-flex justify-content-center">
            <video class="d-block" style="max-width: 100%;" controls>
                <source src="{{ asset('media/podcast3.mp4') }}" type="video/mp4">
                Seu navegador não suporta a tag de vídeo.
            </video>
        </div>
        <div class="carousel-caption d-none d-md-block" style="bottom: 60px;">
            <h5>Vozes do Meio Ambiente</h5>
            <p>Neste podcast, exploramos o conceito de racismo ambiental e suas implicações na sociedade contemporânea</p>
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
