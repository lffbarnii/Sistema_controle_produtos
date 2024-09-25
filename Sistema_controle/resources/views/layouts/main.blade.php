<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    @php
        $classeBotao = "header-links-item-desabilitado";

        if($logado&&$adm){
            $classeBotao = "header-links-item-habilitado";
        }

    @endphp
    <header class="header">
        <p class="header-sigla">SSC</p>
        <p class="header-nome">Style System Control</p>
        <div class="header-links">
            <div class="header-links-item-ativo"><a href="/catalogo">Catalogo</a></div>
            <div class="header-links-item-ativo"><a href="/contato">Contato</a></div>
            <div class={{$classeBotao}}><a href="/adm">Administrar</a></div>
            @if($logado)
                <div class="header-links-item-ativo"><a href="/conta">Conta</a></div>
            
            @elseif($logado == false)
                <div class="header-links-item-ativo"><a href="/login">login</a></div>
            
            @endif
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer><h1>teste footer</h1></footer>
</body>
</html>