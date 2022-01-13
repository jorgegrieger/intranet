@include('dashboard.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Agenda Positiva BO PAPER</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Pagina Inicial</a></li>
              <li class="breadcrumb-item active">Adicionar Agenda Positiva</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @csrf
    <!-- Main content -->        <form method="post" action="{{route('adm.salvar')}}" enctype="multipart/form-data">
    @csrf
    <section class="content">
      <div class="container-fluid">
          <div class="row">
        <div class="col-md-5">
        <br>
        <label for="exampleInputEmail1">Nome do Arquivo:</label>
      <input type="text" class="form-control form-control-border" name="nome" id="exampleInputBorder" placeholder="Titulo do Arquivo">
      <br>
      <input type="hidden" id="custId" name="tipo" value="Agenda">
</div>
</div>
<br>
<div class="row">

<div class="col-md-5">
<label for="">Selecionar Arquivo:</label>
<br>
<input type="file"  name="arquivos" id="">
</div>
</div>
<br>
<button type="submit" class="btn btn-info">Salvar</button>
</div>
</form>

<div class="col-md-12">
      <div class="card-body">
      <h1 class="m-0">Histórico de arquivos</h1>
      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Data</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($arq as $arquivo)
                                <tr>
                                    <th scope="row">{{ $arquivo->id }}</th>
                                    <td>{{ $arquivo->nome}}</td>
                                    <td data-order="{{$arquivo->created_at}}">{{ $arquivo->created_at->format('d/m/Y')}}</td>  
                                    <td><a class="btn bg-gradient-danger"  href="javascript: (confirm('Deseja deletar o arquivo : {{$arquivo->nome}}?') ? window.location.href='{{route('deletar',$arquivo->id)}}' : false )">Deletar</a></td>                              
                                               
                                </tr>
                                @endforeach
                            </tbody>
                        </tbody>
                    </table>
                
                </div>
</div>

@if (Session::has('success'))
    <div class="col-md-6">
    <div class="alert alert-success alert-dismissable" id="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ Session::get('success') }}
    </div>
    </div>
@endif
</div>
      </div>
      
    </section>
</div>






  @include('dashboard.footer')