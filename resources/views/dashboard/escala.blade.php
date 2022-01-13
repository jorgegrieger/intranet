@include('dashboard.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Escalas de Turno - BO PAPER Arapoti e Pisa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Pagina Inicial</a></li>
              <li class="breadcrumb-item active">Adicionar Escala de Turno</li>
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
      <input type="hidden" id="custId" name="tipo" value="Escala">
      <label for="exampleInputEmail1">Escolha uma unidade:</label>
      <select class="custom-select form-control-border" name="local" id="exampleSelectBorder">
                    <option value="Arapoti">BO PAPER ARAPOTI</option>
                    <option value="Pisa">BO PAPER PISA</option>
                  </select>
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
                                    <th>Local</th>
                                    <th>Data</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($arq as $arquivo)
                                <tr>
                                    <th scope="row">{{ $arquivo->id }}</th>
                                    <td>{{ $arquivo->nome}}</td>
                                    <td>{{ $arquivo->local}}</td>
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

<script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 5000);
 
});
</script>





  @include('dashboard.footer')