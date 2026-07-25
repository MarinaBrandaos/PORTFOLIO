@extends('layouts.default')
@section('content')
@if ($errors->any())

    @foreach ($errors->all() as $error)
    
    {{ $error }}

    @endforeach

@endif
<section class= "About">
    <div class="divA">
        <h1> Sobre mim </h1>
        <p> Sou desenvolvedora full-stack com foco em back-end, apaixonada por transformar ideias em soluções digitais funcionais. Trabalho principalmente com PHP, Laravel Herd, MySql e JavaScript. Estou sempre buscando escrever códigos limpos, escaláveis e com atenção aos detalhes. Além da parte técnica, gosto de entender o problema por trás de cada projeto — afinal, uma boa solução nasce de boas perguntas. Estudante do ensino médio e, nas horas vagas, atleta.</p>
    </div>
    <div class="img">
        <a><img src="{{asset('storage/images/imagem.png')}}" alt="Logo"></img></a>
    </div>


</section>


@endsection