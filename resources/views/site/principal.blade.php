@extends('site.layouts.basic')

@section('titulo', $titulo)

@section('bloco_conteudo')

<div class="plano-fundo">
    <!-- <h2>

        <br><small class="text-body-secondary">Estamos aqui para te ensinar tudo sobre racismo ambiental</small>
    </h2> -->

    <div class="parallax">
        <div class="parallax-text"> <h1 class="showUpText">Bem-vindo ao <p class="showUpText neon">NATRUEE</p></h1>
            <div class="arrow">
                <svg class="first" xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="white" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67"/>
                </svg>
                <svg class="second" xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="white" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67"/>
                </svg>
                <svg class="third" xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="white" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67"/>
                </svg>
            </div>
        </div>

        <script>
            document.querySelector('.first').classList.add('showUpArrow');
            // document.querySelector('.second').classList.add('showUpArrow');

            setTimeout(() => {
                document.querySelector('.second').classList.add('showUpArrow');
                setTimeout(() => {
                    document.querySelector('.third').classList.add('showUpArrow');
                }, 300);
            }, 300);
        </script>

    </div>
    <!-- <img src="{{ asset('media/wallpaper-blur.png') }}" alt="Plano de fundo"> -->
</div>

<div class="container-fluid py-5 w-50">
        <div class="texto-resumo text-center">
            <h2><strong>Somos um projeto que visa falar sobre o racismo ambiental</strong></h2>
            <p>Nosso trabalho investiga como a mineração, a agricultura e a energia, especialmente eólica e solar, impactam diretamente as comunidades 
                quilombolas na região de Seabra, Chapada Diamantina, Bahia. Analisamos como a expansão desses setores, frequentemente vista como "desenvolvimento", 
                se alinha ao racismo ambiental, tratando as comunidades negras como "não-cidadãos" ou "entraves" ao progresso.
            </p>
            <p>
                Nosso objetivo é evidenciar como essas práticas refletem o racismo ambiental, exacerbando a desigualdade e a marginalização histórica dessas comunidades,
                 e promover a conscientização e a luta por justiça ambiental e social.
            </p>
        </div>
</div>

<div class="container-fluid py-5">
    <div class="row d-flex justify-content-center">
        <div class="card text-center mb-3 me-3" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Artigos</h5>
              <p class="card-text">Fique por dentro das pesquisas acadêmicas realizadas.</p>
              <a href="{{ route('site.artigo') }}" class="btn btn-success">Acessar</a>
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
              <a href="{{ route('site.termo') }}" class="btn btn-success">Acessar</a>
            </div>
        </div>
    </div>
</div>

@endsection
