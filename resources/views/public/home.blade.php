<x-guest-layout>
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <img src="https://lh3.googleusercontent.com/proxy/1E57FpHBA-km_bo3pQ-H4MYliaGJizAQ4EZY7cc4VQ9bkF5AyDlmgxjLaz7BqZCrE3fauuPSFMOkBRyRPGO4mPspKymy8lVKFlDy3QMysMH-6Y6jCaYWPbCJwlyw" alt="" width="100%">
                    Evento em destaque
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body" heigth="50%">
                    <img src="https://agenciabrasilia.df.gov.br/wp-conteudo/uploads/2019/05/31.05.2019-Festas-juninas-animam-os-brasilienses-nos-meses-de-junho-e-julho-mas-%C3%A9-preciso-ter-cuidado-com-os-fogos-de-artif%C3%ADcio.-Foto-Pedro-Ventura-Ag%C3%AAncia-Bras%C3%ADlia.jpeg" alt="" width="100%">
                    Evento teste
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body" heigth="50%">
                    <img src="https://media.gazetadopovo.com.br/2020/05/10154557/festa-660x372.jpg" alt="" width="100%">
                    Evento teste
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body" heigth="50%">
                    <img src="https://faro.edu.br/wp-content/uploads/2018/09/229307-x-dicas-para-economizar-durante-a-faculdade-para-a-festa-de-formatura.jpg" alt="" width="100%">
                    Evento teste
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body" heigth="50%">
                    <img src="https://www.jurere.com.br/wp-content/uploads/2020/01/festas-em-floripa-carnaval.jpg" alt="" width="100%">
                    Evento teste
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
