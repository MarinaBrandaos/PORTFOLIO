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

            <a href="https://wa.me/5575991150851?text=Olá! Vi seu portfólio e quero conversar" class="whatsapp-float" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24" height="24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.272-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004c-1.905 0-3.71-.474-5.338-1.36l-.383-.214-3.957.604.615-3.884-.25-.4A8.963 8.963 0 012.839 2c2.592 0 5.02.928 6.873 2.619.522.493.996 1.035 1.412 1.619 1.892 2.419 2.368 5.603 1.27 8.643-.587 1.638-1.583 3.102-2.832 4.27L3.5 21l3.074-1.024c1.494.863 3.235 1.32 5.04 1.32 4.495 0 8.15-3.545 8.15-7.906 0-2.108-.793-4.088-2.23-5.624-1.396-1.506-3.23-2.33-5.203-2.33z"/>
                </svg>
            </a>
        </footer>
            <a href="https://wa.me/5575991150851?text=Olá! Vi seu portfólio e quero saber mais sobre um orçamento" 
   class="whatsapp-float" target="_blank" aria-label="Falar no WhatsApp">
    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp" style="width: 28px; filter: invert(1);">
</a>
    </body>
</html>