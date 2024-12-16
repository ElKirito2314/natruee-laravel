@extends('site.layouts.basic')

@section('titulo', $titulo)

@section('bloco_conteudo')

<div class="conteudo-pagina py-5">
    <div class="container">
        <div class="titulo-pagina text-center mb-4">
            <h1>Entre em contato conosco</h1>
        </div>
        <div class="informacao-pagina">
            <div class="contato-principal">
                <form action="{{ route('site.contato') }}" method="POST" class="p-4 border rounded">
                    @csrf
                    <div class="mb-3">
                        <input name="nome" value="{{ old('nome') }}" type="text" class="form-control" placeholder="Nome">
                        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                    </div>
                    <div class="mb-3">
                        <input name="telefone" value="{{ old('telefone') }}" type="text" id="telefone" maxlength="13" class="form-control" placeholder="Telefone">
                        <script>
                            function mascaraTelefone(telefone) {
                                telefone = telefone.replace(/\D/g, "");
                                telefone = telefone.replace(/^(\d{2})(\d)/g, "($1)$2");
                                return telefone;
                            }
                
                            var inputTelefone = document.getElementById("telefone");
                            inputTelefone.addEventListener("input", function(event) {
                                event.target.value = mascaraTelefone(event.target.value);
                            });
                        </script>
                        {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
                    </div>
                    <div class="mb-3">
                        <input name="email" value="{{ old('email') }}" type="text" class="form-control" placeholder="E-mail">
                        {{ $errors->has('email') ? $errors->first('email') : '' }}
                    </div>
                    <div class="mb-3">
                        <select name="motivo_contato" class="form-control">
                            <option value="">Motivo do contato</option>
                            <option value="duvida" {{ old('motivo_contato') == 'duvida' ? 'selected' : '' }}>Dúvida</option>
                            <option value="sugestao" {{ old('motivo_contato') == 'sugestao' ? 'selected' : '' }}>Sugestão</option>
                            <option value="reclamacao" {{ old('motivo_contato') == 'reclamacao' ? 'selected' : '' }}>Reclamação</option>
                        </select>
                        {{ $errors->has('motivo_contato') ? $errors->first('motivo_contato') : '' }}
                    </div>
                    <div class="mb-3">
                        @php
                            $mensagem = old('mensagem') ?? '';
                        @endphp
                        <textarea name="mensagem" class="form-control" placeholder="Preencha aqui sua mensagem">{{ $mensagem }}</textarea>
                        {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
