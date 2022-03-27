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

</head>
<body>
    <div>
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
    </div>
    @yield('header')
    @yield('main')
    @yield('footer')
</body>
</html>