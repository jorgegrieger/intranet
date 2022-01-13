@include('layout.header')
<div id="gerais" class="col-12">

<!-- Features -->
	<section class="box features">
    <br>
		<h2 class="major"><span>{{$arq->titulo}}</span></h2>
            <ul class="meta">
			    <li class="major">{{date("d/m/Y H:m:s", strtotime($arq->created_at))}}</li>
			</ul>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('inicio')}}">Pagina Inicial</a></li>
              <li class="breadcrumb-item active">{{$arq->titulo}} </li>
            </ol>
		<div>
			<div class="row">
            <div class="col-3 col-6-medium col-12-small">
			</div>
			<div class="col-6 col-6-medium col-12-small">
            {!! $arq->trixRichText->first()->content !!}
			</div>
            <div class="col-3 col-6-medium col-12-small">
			</div>

				</div>
				</section>

		</div>


@include('layout.footer')