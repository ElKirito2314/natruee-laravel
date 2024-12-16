 <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <div class="logo-site">
            <a href="{{ route('site.index') }}"><img src="{{ asset('media/logo.png') }}" alt="Logo"></a>
          </div>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('site.sobre-nos') }}">Sobre-nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('site.contato') }}">Contato</a>
              </li>
            </ul>
        </div>
        </div>
  </nav>