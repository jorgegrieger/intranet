@include('dashboard.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="col-md-12">
    @if(\App\Comunicado::count())
												
														<article class="box post">
																<header>
																	<h4><a href="#">{{$arq->titulo}}</a></h4>
																	<ul class="meta">
																		<li class="">{{date("d/m/Y H:m:s", strtotime($arq->created_at))}}</li>
																	</ul>
																</header>
																<p>
																{!! $arq->trixRichText->first()->content !!}
																</p>
													
															</article>
	
															@endif
                              </div>
</div>
      </div>

    </section>
</div>
@include('dashboard.footer')