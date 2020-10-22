<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
      <title>@yield('titulo')</title>
    </head>
    <body>
       <h1 style="color: #00ff88">@yield('header')</h1>
       @yield('conteudo')
       <div class="menu-rodape">
            <h2>Opções de navegação</h2>
            <a href="{{route('entrada.index')}}">Início</a>
            <br>
            <a href="{{route('equipa.listarEquipas')}}">ver equipas</a>
        </div>
    </body>
</html>