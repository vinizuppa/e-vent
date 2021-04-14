<x-guest-layout>
    <div class="container">
        <div class="card">
        <div class="card-header text-center">
            Informação do Participante
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <form class="g-2 ms-3 me-3">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="{{ Auth::user()->name  }}" disabled>
                        </div>
                    </div>    
                    <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email" value="{{ Auth::user()->email }}" disabled>
                        </div>
                    </div>  

                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Usuário</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="{{ Auth::user()->username  }}" disabled>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-2 col-form-label">Telefone</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="phone" value="{{ Auth::user()->phone }}" disabled>
                        </div>
                    </div>    

                    <div class="mb-3 row">
                    <label for="document_name" class="col-sm-2 col-form-label">Documento</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="document_name" value="{{ Auth::user()->document_name }}" disabled>
                        </div>

                    <label for="document_number" class="col-sm-1 col-form-label">Nº</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="document_number" value="{{ Auth::user()->document_number }}" disabled>
                        </div>
                    </div>  

                    <div class="mb-3 row">
                        <label for="document_number" class="col-sm-5 col-form-label">Forma de Pagamento</label>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check btn-danger" name="pix" id="pix" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="pix">Pix</label>

                            <input type="radio" class="btn-check btn-danger" name="cartao" id="cartao" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="cartao">Cartão</label>

                            <input type="radio" class="btn-check btn-danger" name="boleto" id="boleto" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="boleto">Boleto</label>

                            <input type="radio" class="btn-check btn-danger" name="manual" id="manual" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="manual">Manual</label>
                        </div>                    
                    </div>
                </form>
            </div>
            <div class="col-md-1">
            <img src="https://gravatar.com/avatar/{{ md5(trim(strtolower(Auth::user()->email))) }}?s=150&d=https://ui-avatars.com/api/{{ trim(str_replace(' ', '+', Auth::user()->name)) }}/150/dc3545/fff/1" alt="Foto {{Auth::user()->name}}" class="rounded-circle mx-auto d-block" />
            </div>
        </div>
        
        
        
        
        
        
        
        
        </div>
        
    </div>


</x-guest-layout>