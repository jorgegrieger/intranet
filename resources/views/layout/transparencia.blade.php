@include('layout.header')

			<!-- Banner -->
            @include('layouts.banner')			
			<!-- Main -->
            <section id="main">
					<div class="container">
						<div class="row gtr-200">
						<div id="about" class="col-12">
						

<!-- Features -->
<section  class="box features">
										<h2 class="major"><span>Transparência</span></h2>
										<div>
                                            <div class="row">
                                            <div class="col-4 col-6-medium col-12-small">

<!-- Feature -->
    <section class="box feature">
        <a href="{{url('/contato')}}" class="image featured"><img src="{{asset('app-assets/assets/images/falco.jpg')}}" alt="" /></a>
        <h3><a href="{{url('/contato')}}">Fale Conosco</a></h3>
        <p>
            Mande um email para nossa equipe e venha conversar com nós.
        </p>

    </section>

</div>

<div class="col-4 col-6-medium col-12-small">

<!-- Feature -->
    <section class="box feature">
        <a href="https://app.codigoconduta.com/bopaper" class="image featured"><img src="{{asset('app-assets/assets/images/condut.png')}}" alt="" /></a>
        <h3><a href="https://app.codigoconduta.com/bopaper">Código de Conduta - Portal de Integridade da BO PAPER</a></h3>
        <p>
        Como parte dos Documentos de Direção e Código de Conduta, é do interesse da BO PAPER que todos os empregados e terceiros, 
        incluindo as pessoas que agem em nome da empresa, cumpram com os regulamentos aplicáveis atuando de forma ética e legal para atender
         os propósitos do negócio, com todos os públicos de interesse.
        Por essa razão a BO PAPER incentiva os relatos de violação da lei,
        violações de nossos Documentos de Direção, Código de Conduta e Canal de Reclamação,
        Sugestão e Denúncia através do Portal de Integridade da BO PAPER.
        </p>

    </section>

</div>
										</div>
									</section>

</div>
</div>
@include('layout.footer')