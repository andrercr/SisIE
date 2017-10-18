@include('template.header')

<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('/painel/img/users/'.session('usuario')->id_usuario.'.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ session('usuario')->nome_display }}</p>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="header">MENU PRINCIPAL</li>

      <!-- MENU CONSULTOR -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i>
      <span>Consultor</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/consultor/precontratos">         Pré-Contrato</a></li>
          <li><a href="/consultor/comissoes">            Comissões</a></li>
          <li><a href="/consultor/direitoimagem">        Direito de Imagem</a></li>
        </ul>
      </li>

      <!-- MENU PEDAGÓGICO -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>Pedagógico</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/pedagogico/cursos">               Cursos</a></li>
          <li><a href="/pedagogico/turmas">               Turmas</a></li>
        </ul>
      </li>

      <!-- MENU CATÁLOGO -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-shopping-cart"></i>
          <span>Catálogo</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/catalogo/produtos">             Produtos</a></li>
          <li><a href="/catalogo/servicos">             Serviços</a></li>
          <li><a href="/catalogo/categorias">           Categorias</a></li>
        </ul>
      </li>

<!-- MENU FINANCEIRO -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-stack-overflow"></i>
          <span>Financeiro</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/catalogo/produtos">             Produtos</a></li>
          <li><a href="/catalogo/servicos">             Serviços</a></li>
          <li><a href="/catalogo/categorias">           Categorias</a></li>
        </ul>
      </li>

      <!-- MENU GERENCIAMENTO -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-gears"></i>
          <span>Gerenciamento</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/gerenciamento/dashboard">       Dashboard</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>

<div class="content-wrapper">

  @yield('content-header') @yield('content')

</div>

@include('template.footer')
