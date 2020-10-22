<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"/>
      <title>@yield('titulo')</title>
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body>
       <h1 style="color: #00ff88">@yield('header')</h1>
       @yield('conteudo')
       <div class="menu-rodape">
            <h2>Opções de navegação</h2>
            <a href="{{route('entrada.index')}}"><i class="far fa-arrow-alt-circle-right"></i>Início</a>
            <br>
            <a href="{{route('equipa.listarEquipas')}}"><i class="far fa-arrow-alt-circle-right"></i>ver equipas</a>
            <br>
            <a href="{{route('contacto.index')}}"><i class="far fa-arrow-alt-circle-right"></i>Contacto</a>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
    </body>
</html>