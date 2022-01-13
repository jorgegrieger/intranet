<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BO PAPER - ADMIN BOARD</title>
  @trixassets

  <!-- testes -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link  href="{{asset('app-assets/dashboard/dist/css/adminlte.min.css')}}" rel="stylesheet">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/toastr/toastr.min.css')}}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('app-assets/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('index')}}" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('inicio')}}" class="nav-link">Intranet</a>
      </li>
    </ul>





    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

      
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">

      <span class="brand-text font-weight-light">BO PAPER BRASIL</span>
      <br>

    </a>




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
               <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-users"></i>
              <p>
                Gestão de Pessoas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
                <a href="{{route('comunicado')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Comunicado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('escala')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Escala de Turno</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('itinerario')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Itinerário</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('medassist')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assistência Médica</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('qualidade')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Programa Qualidade de Vida</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('respsocial')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Responsabilidade Social</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('jornal')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Informativo Interno</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('feriados')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calendário Anual Feriados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('agenda')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agenda Positiva</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('cardapios')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cardapios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('acordos')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Acordos PLR PPR</p>
                </a>
              </li>
            </ul>
          </li>
           
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-users"></i>
              <p>
                SGI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
                <a href="{{route('sgiadmin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Indicadores</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-users"></i>
              <p>
                SSMA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
            <!-- <li class="nav-item">
                <a href="{{route('sgiadmin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Regras Pela Vida</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{route('cipa')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CIPA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('brigada')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Brigada de Emergência</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('escalamed')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Escala Médico do Trabalho</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{route('sgiadmin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video</p>
                </a>
              </li> -->
            </ul>
          </li>
            </ul>
          </li>
          
        
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  