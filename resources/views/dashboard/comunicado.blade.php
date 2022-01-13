@include('dashboard.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Adicionar Comunicados</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
              <li class="breadcrumb-item active">Adicionar Comunicado</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @csrf
    <!-- Main content -->        <form method="post" action="{{route('comunicado.salvar')}}">
    @csrf
    <section class="content">
      <div class="container-fluid">
          <div class="row">
        <div class="col-md-5">
      <input type="text" class="form-control form-control-border" name="titulo" id="exampleInputBorder" placeholder="Titulo do Comunicado">
      <br>
</div>

</div>


</div>
<div class="row">
        <div class="col-md-8">
     

            @csrf
            <div class="col-12">
            <span>Mensagem</span>
            
            @trix(\App\Comunicado::class, 'content')
              <br>

              <button type="submit" class="btn btn-success">
                  Cadastrar
                </button>
            </div>
        </form>
      <br>
</div>

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
                                    <td>{{ $arquivo->titulo}}</td>
                                    <td>{{ $arquivo->local}}</td>
                                    <td data-order="{{$arquivo->created_at}}">{{ $arquivo->created_at->format('d/m/Y')}}</td>  
                                    <td>
                                    <a class="btn bg-gradient-primary"  href="{{route('visualizar',$arquivo->id)}}">Visualizar</a>
                                    <a class="btn bg-gradient-danger"  href="javascript: (confirm('Deseja deletar o arquivo : {{$arquivo->titulo}}?') ? window.location.href='{{route('comuDel',$arquivo->id)}}' : false )">Deletar</a>                     
                                    </td>                              
                                    <div >
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


    <!-- medium modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                    <p>
  <span id="modal_p_id"></span>
  <span id="modal_p_name"></span>
  <span id="modal_p_age"></span>
</p>
                    </div>
                </div>
            </div>
        </div>
    </div>









  @include('dashboard.footer')
  <script>

    $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var id       = button.data('id');    // Extract info from data-* attributes
        var age      = button.data('age');
        var name     = button.data('name');
        // Update the modal's content
        var modal = $(this);
        modal.find('.modal-title').text('Information for Passenger ' + name);
        modal.find('#modal_p_id').text(id);
        modal.find('#modal_p_name').text(name);
        modal.find('#modal_p_age').text(age);
    });
</script>