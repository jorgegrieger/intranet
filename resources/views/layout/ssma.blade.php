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
										<h2 class="major"><span>Saúde, Segurança e Meio Ambiente</span></h2>
										<div>
                                            <div class="row">
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{asset('app-assets\assets\arquivos\bopaper_integracao_v1.0.4\index.html')}}"target="_blank"  class="image featured"><img height="171px" src="{{asset('app-assets/assets/images/integracao.png')}}" alt="" /></a>
															<h3><a href="{{asset('app-assets\assets\arquivos\bopaper_integracao_v1.0.4\index.html')}}"target="_blank" >Integração SSMA</a></h3>
															<p>
																Realize através deste link a nossa integração em saúde, segurança e meio ambiente.
															</p>
										
														</section>

												</div>
                                                <div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{asset('app-assets\assets\arquivos\Regras pela vida CORP SST 001 Rev. 00.pdf')}}" target="_blank"  class="image featured"><img height="171px" src="{{asset('app-assets/assets/images/regras.jpg')}}" alt="" /></a>
															<h3><a href="{{asset('app-assets\assets\arquivos\Regras pela vida CORP SST 001 Rev. 00.pdf')}}" target="_blank" >Regras pela Vida</a></h3>
															<p>
																Confira nossas normas <b>Regras pela Vida</b>, fique sempre atento pois o não cumprimento pode levar a aplicação de medidas disciplinares.
															</p>
										
														</section>

												</div>
                                                <div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{route('getfile', $cipAra->arquivo)}}" target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/cipa.jpg')}}" alt="" /></a>
															<h3><a href="{{route('getfile', $cipAra->arquivo)}}" target="_blank"  >CIPA BO PAPER Arapoti</a></h3>
															<p>
																Confira a composição da CIPA da BO PAPER Arapoti.
															</p>
										
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{route('getfile', $cipPis->arquivo)}}" target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/cipa.jpg')}}" alt="" /></a>
															<h3><a href="{{route('getfile', $cipPis->arquivo)}}" target="_blank" >CIPA BO PAPER Pisa</a></h3>
															<p>
                                                            Confira a composição da CIPA da BO PAPER Pisa.
															</p>
														
														</section>

												</div>
												
                                                <div class="row">
	
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{route('getfile', $brigada->arquivo)}}"  target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/brigada.png')}}" alt="" /></a>
															<h3><a href="{{route('getfile', $brigada->arquivo)}}"target="_blank"  >Brigada de Emergência</a></h3>
															<p>
                                                            Confira a composição e informações sobre a Brigada de Emergência.
															</p>
										
														</section>

												</div>
												
												<!-- <div class="col-4 col-6-medium col-12-small">

													
														<section class="box feature">
															<a href="#" target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/video.jpg')}}" alt="" /></a>
															<h3><a href="#"target="_blank" >Videos</a></h3>
															<p>
                                                            Acesse e confira a galeria de vídeos.
															</p>
												
														</section>

												</div> -->
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{route('getfile', $escMed->arquivo)}}" target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/medico.png')}}" alt="" /></a>
															<h3><a href="{{route('getfile', $escMed->arquivo)}}" target="_blank" >Escala Médico do Trabalho</a></h3>
															<p>
															Verifique com atecedência a escala e os horários dos médicos de ambas as nossas duas unidades.
															</p>
												
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">
												</div>
												<div class="col-3 col-6-medium col-12-small">
												</div>	
											</div>
										</div>
									</section>

</div>

@include('layout.footer')