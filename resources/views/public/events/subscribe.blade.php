<x-guest-layout>
    <div class="container">
        <div class="card">
        <div class="card-header text-center">
            Informação do Participante
        </div>
            
        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
            <div class="position-relative m-4">
                <div class="progress" style="height: 1px;">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                    <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                    <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                    <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
            </div>
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
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="document_number" value="{{ Auth::user()->document_number }}" disabled>
                        </div>
                    </div>  

                    <div class="mb-3 row">
                        <label for="document_number" class="col-sm-5 col-form-label">Forma de Pagamento</label>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check btn-danger" name="btnradio" id="pix" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="pix"><i class="fi-xnsuxl-pix"></i>Pix</label>

                            <input type="radio" class="btn-check btn-danger" name="btnradio" id="cartao" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="cartao"><i class="bi bi-credit-card-2-back-fill"></i> Cartão</label>

                            <input type="radio" class="btn-check btn-danger" name="btnradio" id="boleto" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="boleto"><i class="bi bi-upc"></i> Boleto</label>

                            <input type="radio" class="btn-check btn-danger" name="btnradio" id="manual" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="manual"><i class="bi bi-cash"></i> Manual</label>
                        </div>
                        
                        <div class="d-flex justify-content-end mt-3">
                            <a href="#" class="btn btn-danger">Continuar</a>
                        </div>                 
                    </div>
                </form>
            </div>
            
        </div>
        
        
        </div>
        
    </div>

</x-guest-layout>