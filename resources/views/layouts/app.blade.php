<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PainelQR | @yield('title')</title>
  <link rel="icon" type="image/png" href="assets/images/favicon2.png" />
  <!-- Prevent the demo from appearing in search engines -->
  <meta name="robots" content="noindex">

  <!-- Simplebar -->
  <link type="text/css" href="assets/vendor/simplebar.min.css" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/app.css" rel="stylesheet">
  <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

  <!-- Material Design Icons -->
  <link type="text/css" href="assets/css/vendor-material-icons.css" rel="stylesheet">
  <link type="text/css" href="assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

  <!-- Font Awesome FREE Icons -->
  <link type="text/css" href="assets/css/vendor-fontawesome-free.css" rel="stylesheet">
  <link type="text/css" href="assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">



  <!-- Flatpickr -->
  <link type="text/css" href="assets/css/vendor-flatpickr.css" rel="stylesheet">
  <link type="text/css" href="assets/css/vendor-flatpickr.rtl.css" rel="stylesheet">
  <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
  <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet">

  <!-- Vector Maps -->
  <link type="text/css" href="assets/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">

  <link type="text/css" href="assets/css/vendor-select2.css" rel="stylesheet">
  <link type="text/css" href="assets/css/vendor-select2.rtl.css" rel="stylesheet">
  <link type="text/css" href="assets/vendor/select2/select2.min.css" rel="stylesheet">


</head>

<body class="layout-fluid layout-sticky-subnav">












  <div class="preloader"></div>

  <!-- Header Layout -->
  <div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->

    <div id="header" class="mdk-header bg-dark js-mdk-header m-0" data-fixed>
      <div class="mdk-header__content">

        <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark pr-0 pr-0" id="navbar" data-primary>
          <div class="container-fluid p-0">


            <!-- Navbar Brand -->
            <a href="/" class="navbar-brand ">
              <img class="navbar-brand-icon" src="assets/images/logo-white.png" width="180">
            </a>



            <ul class="nav navbar-nav ml-auto d-none d-md-flex">
              <li class="nav-item">
                <a href="" data-toggle="modal" data-target="#ajuda-modal" class="nav-link">
                  <i class="material-icons">help_outline</i> Ajuda
                </a>
              </li>
            </ul>

            <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
              <li class="nav-item dropdown">
                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                  <img src="https://identicons.github.com/jcazevedo.png" class="rounded-circle" width="32" alt="Frontted">
                  <span class="ml-1 d-flex-inline">
                    <span class="text-light">{{Auth::User()->name}}</span>
                  </span>
                </a>
                <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-item-text dropdown-item-text--lh">
                    <div><strong>{{Auth::User()->name}}</strong></div>
                    <div>{{Auth::User()->email}}</div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="painel">Painel</a>
                  <a class="dropdown-item" href="perfil">Meu perfil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="sair">Sair</a>
                </div>
              </li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content page">




      <div class="page__header">
        <div class="container-fluid page__heading-container">
          <div class="page__heading d-flex align-items-center">
            <div class="flex">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                </ol>
              </nav>
              <h1 class="m-0">@yield('title')</h1>
            </div>
            @if (Request::is('clientes'))
                <a href="" class="btn btn-warning ml-3" data-toggle="modal" data-target="#criar-modal">Novo Cliente</a>
            @endif
          </div>
        </div>
      </div> <!-- // END page__header -->


      <div class="page__header page__header-nav">
        <div class="container-fluid page__container">
          <div class="navbar navbar-secondary navbar-light navbar-expand-sm p-0">
            <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarsExample03" type="button">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarsExample03">
              <ul class="nav navbar-nav">
                <li class="nav-item">
                  <a href="painel" class="nav-link">Painel</a>
                </li>
                <li class="nav-item">
                  <a href="clientes" class="nav-link">Clientes</a>
                </li>
                <li class="nav-item">
                  <a href="utilizadores" class="nav-link">Utilizadores</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid page__container">
        @yield('content')

      </div>

    </div>
  </div>
</div>
@yield('modals')
<div id="ajuda-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body text-center p-4">
                <i class="material-icons icon-40pt text-info mb-2">info_outline</i>
                <h4>Ajuda</h4>
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt eaque explicabo, itaque iusto unde quas magni non, quae expedita eveniet, incidunt molestiae tempora maiores odit hic perspiciatis. Eveniet, porro illo.</p>
                <button type="button" class="btn btn-info my-2" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap.min.js"></script>

<!-- Simplebar -->
<script src="assets/vendor/simplebar.min.js"></script>

<!-- DOM Factory -->
<script src="assets/vendor/dom-factory.js"></script>

<!-- MDK -->
<script src="assets/vendor/material-design-kit.js"></script>

<!-- App -->
<script src="assets/js/toggle-check-all.js"></script>
<script src="assets/js/check-selected-row.js"></script>
<script src="assets/js/dropdown.js"></script>
<script src="assets/js/sidebar-mini.js"></script>
<script src="assets/js/app.js"></script>

<!-- App Settings (safe to remove) -->
<script src="assets/js/app-settings.js"></script>



<!-- Flatpickr -->
<script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="assets/js/flatpickr.js"></script>

<!-- Global Settings -->
<script src="assets/js/settings.js"></script>

<!-- Chart.js -->
<script src="assets/vendor/Chart.min.js"></script>

<!-- App Charts JS -->
<script src="assets/js/charts.js"></script>

<!-- Chart Samples -->
<script src="assets/js/page.dashboard.js"></script>

<!-- Vector Maps -->
<script src="assets/vendor/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="assets/js/vector-maps.js"></script>

<script src="assets/vendor/select2/select2.min.js"></script>
<script src="assets/js/select2.js"></script>
<script type="text/javascript">
$('.abrir').click(function(){
  var id = $(this).attr('data-id');
  var client = $(this).attr('data-filtre');
  var morada = $(this).attr('data-dir');
  var codpostal = $(this).attr('data-draggable');
  var local = $(this).attr('data-dropzone');
  $('input[name="id"]').attr('value',id);
  $('#editar-modal #data').text("Está a editar o cliente "+client+" ao concluir clique em salvar.\nEm caso de exclusão clique no botão apagar e espere o registro ser apagado no sistema.");
  $('#editar-modal #cliente').val(client);
  $('#editar-modal #morada').val(morada);
  $('#editar-modal #codpostal').val(codpostal);
  $('#editar-modal #local').val(local);
});

$('.abrir2').click(function(){
  var id = $(this).attr('data-id');
  var name = $(this).attr('data-filtre');
  var email = $(this).attr('data-dir');
  $('input[name="id"]').attr('value',id);
  $('#editar-modal #data').text("Está a editar o cliente "+name+" ao concluir clique em salvar.\nEm caso de exclusão clique no botão apagar e espere o registro ser apagado no sistema.");
  $('#editar-modal #name').val(name);
  $('#editar-modal #email').val(email);
});

</script>
</body>

</html>
