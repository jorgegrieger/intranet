@include('layout.header')

<!-- Main -->
<section id="main">
					<div class="container">
						<div class="row gtr-200">
						<div id="about" class="col-12">
						

<!-- Features -->
<section  class="box features">
										<h2 class="major"><span>Arquivo de Comunicados</span></h2>
										
      <table id="example1" class="table table table-striped">
                        <thead>
                                <tr>
                                    
                                    <th>Nome</th>
                                    <th>Data</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($arq as $arquivo)
                                <tr>
                                    <td>{{ $arquivo->titulo}}</td>
                                    <td data-order="{{$arquivo->created_at}}">{{ $arquivo->created_at->format('d/m/Y')}}</td>  
                                    <td>
                                
                                    <a class="button alt"  href="{{route('comu',$arquivo->id)}}">Visualizar</a>
                                  
                                    </td>                              
                                    <div >
          <h1 id="title"></h1>
          <p id="description"></p>
        </h1>       
                                </tr>
                                @endforeach
                            </tbody>
                        </tbody>
                    </table>

												</div>
											</div>
										</div>
									</section>


@include('layout.footer')