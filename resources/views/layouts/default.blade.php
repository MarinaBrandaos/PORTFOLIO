<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('includes.footer')
        </footer>
            <a href="https://wa.me/5575991150851?text=Olá! Vi seu portfólio e quero saber mais sobre um orçamento" 
   class="whatsapp-float" target="_blank" aria-label="Falar no WhatsApp">
    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp" style="width: 28px; filter: invert(1);">
</a>
    </body>
</html>