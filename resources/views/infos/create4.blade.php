<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cartão Renner</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- CSS local -->
        <link rel="stylesheet" href="../css/all.css" type="text/css">
        <!-- jQuery only -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

        
        <script>
            
            // $(document).ready(function(){
            //     $("#_FORM_SENHA, #_FORM_IDENTIDADE").hide();
            //     $("#loginbtn").click(function() {
            //     $("#_FORM_LOGIN, #_FORM_IDENTIDADE").hide();
            //     $("#_FORM_SENHA").toggle();
            //     });
            // });
            // $(document).ready(function(){
            //         $("#senhabtn").click(function() {
            //         $("#_FORM_LOGIN, #_FORM_SENHA").hide();
            //         $("#_FORM_IDENTIDADE").toggle();
            //         });
            // });
            
        </script>

</head>
<body>
<form method="post">
    @csrf
    <section id="_FORM_LOGIN" class="py-4">
        <label for="cpf">login</label>
            <input type="text" name="cpf" id="cpf"><br>
            <button type="button" id="cpfbtn" name="cpfbtn">LOGIN</button>
    </section>        
    <section id="_FORM_SENHA" class="py-4" >
        <label for="senha">senha</label>
            <input type="text" name="senha" id="senha"><br>
            <button type="button" id="senhabtn" name="senhabtn">SENHA</button>
    </section>  

    <section id="_FORM_IDENTIDADE" class="py-4" >
        <label for="card">id</label>
            <input type="text" name="card" id="card">
        <button class="btn btn-primary">IDENTIDADE</button>
    </section>
</form>  
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