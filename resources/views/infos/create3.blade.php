@extends('layout1')

@section('header')
@endsection
@section('main')
    <main id="root">
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                    <div class="form-group">
                        <form id="form1">
                            <section id="_FORM_LOGIN" class="py-4">
                                <label for="login">login</label>
                                    <input type="submit" name="login" id="login">
                            </section>        
                        </form>
                        <form id="form2">
                            <section id="_FORM_SENHA" class="py-4" >
                                <label for="senha">senha</label>
                                    <input type="submit" name="senha" id="senha"></form>
                            </section>
                        <form id="form3">
                            <section id="_FORM_IDENTIDADE" class="py-4" >
                                <label for="id">id</label>
                                    <input type="text" name="id" id="id">
                                <button class="btn btn-primary">finalizar</button>
                            </section>
                        </form>
                    </div>
            </div>
        </div>
    </main>
    <footer>
        <h1>footer</h1>
    </footer>
@endsection
