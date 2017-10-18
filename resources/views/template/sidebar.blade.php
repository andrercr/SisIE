<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/painel/img/users/{{ session('usuario')->id or '00'}}.jpg" class="img-circle" alt="User Image" />
     </div>
     <div class="pull-left info">
        <p>{{ session('usuario')->nome_display or 'Usuário' }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
     </div>
  </div>

  <form action="#" method="get" class="sidebar-form">
   <div class="input-group">
     <input type="text" name="q" class="form-control" placeholder="Search..."/>
     <span class="input-group-btn">
       <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
    </span>
 </div>
</form>

<ul class="sidebar-menu">
   <li class="header">HEADER</li>
   <li class="active"><a href="#"><span>Link</span></a></li>
   <li><a href="#"><span>Another Link</span></a></li>
   <li class="treeview">
     <a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
     <ul class="treeview-menu">
       <li><a href="#">Link in level 1</a></li>
       <li><a href="#">Link in level 2</a></li>
    </ul>
 </li>
 <li class="treeview">
  <a href="#"><span>Consultor</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="/consultor/cursos">               Cursos</a></li>
    <li><a href="/consultor/precontrato">          Pré-Contrato</a></li>
    <li><a href="/consultor/direitoimagem">        Direito de Imagem</a></li>
 </ul>
</li>
<li class="treeview">
  <a href="#"><span>Catálogo</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="/catalogo/produtos">             Produtos</a></li>
    <li><a href="/catalogo/servicos">             Serviços</a></li>
    <li><a href="/catalogo/categorias">           Categorias</a></li>
 </ul>
</li>
<li class="treeview">
  <a href="#"><span>Pessoas</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="/pessoas/alunos">                Alunos</a></li>
    <li><a href="/pessoas/modelos">               Modelos</a></li>
    <li><a href="/pessoas/clientes">              Clientes</a></li>
    <li><a href="/pessoas/fornecedores">          Fornecedores</a></li>
    <li><a href="/pessoas/colaboradores">         Colaboradores</a></li>
 </ul>
</li>
<li class="treeview">
  <a href="#"><span>Lançamentos</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="/lancamentos/lanc_receitas">     Lançar Entradas</a></li>
    <li><a href="/lancamentos/lanc_despesas">     Lançar Saídas</a></li>
 </ul>
</li>
<li class="treeview">
  <a href="#"><span>Gerenciamento</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="/gerenciamento/empresa">         Identidade Organizacional</a></li>
    <li><a href="/gerenciamento/planodecontas">   Plano de Contas</a></li>
    <li><a href="/gerenciamento/usuarios">        Usuários</a></li>
    <li><a href="/gerenciamento/perfildeacesso">  Perfil de Acesso</a></li>
    <li><a href="/gerenciamento/reunioes">        Reuniões</a></li>
 </ul>
</li>
</ul>
</section>
</aside>
<div class="content-wrapper">
