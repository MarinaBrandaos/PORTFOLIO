@extends('layouts.default')
@section('content')
@if ($errors->any())

    @foreach ($errors->all() as $error)
    
    {{ $error }}

    @endforeach

@endif

<section class="container">

    <div class="main">
        <h1> Olá, me chamo </h1>
        <h1 class = "name"> Marina Brandão :) </h1>
        <h2> Desenvolvedora Full-stack | PHP | JavaScript | CSS | Banco de dados </h2>
    
        <!-- <p class= "frase"> Bem-vindo ao meu portfólio! </p>
        <p class="autor"> Desde 2024 </p> -->
    </div>
    
    <div class="social">
        <h2> ME ENCONTRE NAS REDES SOCIAIS, OU ENTRE EM CONTATO </h2>
        <ul>
            <li><a href="https://www.linkedin.com/in/marina-brand%C3%A3o-475281221/"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://github.com/MarinaBrandaos"><i class="fa-brands fa-github"></i></a></li>
            <!-- <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li> --> 
            <li><a href="https://www.instagram.com/m.brandaos/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa-solid fa-at"></i></a></li>
        </ul>
    </div>

<div class="cta-orcamento">
    <p class="cta-tag">Disponível para novos projetos</p>
    <h2>Tem uma ideia? Eu coloco no ar.</h2>
    <p class="cta-texto">
        Sites rápidos, funcionais e feitos sob medida para o seu negócio.
        Vamos conversar sobre o seu projeto?
    </p>
    <div class="cta-botoes">
        <a href="https://wa.me/5575991150851?text=Olá! Vi seu portfólio e quero saber mais sobre um orçamento" class="btn-primario">Solicitar orçamento</a>
        <a href="#projetos" class="btn-secundario">Ver projetos</a>
    </div>
</div>
    
    
    <div class="projects">
        @php 
        use App\Models\Post;
        $post = Post::all();
        @endphp
        <h2>PROJETOS</h2>
        <div class="posts">
            <ul>
                @foreach($post as $post)
                <li>
                    <a href=" {{$post->category}}"> {{$post->title }}</a>
                    <p>{{ $post->description }}</p>
                    <p class="date">{{ $post->date }}</p>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Imagem do Post">
                </li>
                @endforeach
            </ul>
    
        </div>
    
</div>

</section>

@endsection

