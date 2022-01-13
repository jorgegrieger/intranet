

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
										<h2 class="major"><span>Comunicação Corporativa</span></h2>
										<div>
                                            <div class="row">
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{route('getfile', $qualidade->arquivo)}}"target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/qualidade.png')}}" alt="" /></a>
															<h3><a href="{{route('getfile', $qualidade->arquivo)}}"target="_blank" >Bem-Estar</a></h3>
															<p>
																Conheça nossas campanhas em prol da qualidade de vida de nossos colaboradores e da nossa comunidade.
															</p>
										
														</section>

												</div>
                                                <div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{route('getfile', $respsocial->arquivo)}}" target="_blank"  class="image featured"><img height="241px" src="{{asset('app-assets/assets/images/soli.png')}}" alt="" /></a>
															<h3><a href="{{route('getfile', $respsocial->arquivo)}}" target="_blank" >Responsabilidade Social</a></h3>
															<p>
																Ações de soliedariede da BO PAPER na nossa comunidade.
															</p>
										
														</section>

												</div>
                                                <div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{route('getfile', $jornal->arquivo)}}" target="_blank"  class="image featured"><img height="241px" src="{{asset('app-assets/assets/images/jornal.png')}}" alt="" /></a>
															<h3><a href="{{route('getfile', $jornal->arquivo)}}"target="_blank"  >Informativo Interno</a></h3>
															<p>
																Fique ligado no nosso informativo interno da BO PAPER
															</p>
										
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">


														<section class="box feature">
															<a href="#" target="_blank"  class="image featured"><img height="241px" src="{{asset('app-assets/assets/images/fotos.png')}}" alt="" /></a>
															<h3><a href="#" target="_blank" >Fotos e Videos</a></h3>
															<p>
																Acesse nossa galeria de fotos e vídeos.
															</p>
														
														</section>

											

														
												</div> 
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="" data-toggle="modal" data-target="#modal-form-sipat"   class="image featured"><img src="{{asset('app-assets/assets/images/cipa.jpg')}}" alt="" /></a>
															<h3><a href=""data-toggle="modal" data-target="#modal-form-sipat" >SIPAT 2021</a></h3>
															<p>
																Clique e confira informações referente a SIPAT 2021.
															</p>
										
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">

											<!-- Feature -->
												<section class="box feature">
												<a href="{{asset('app-assets\assets\arquivos\ALMANAQUE_COALIZAO (2).pdf')}}" target="_blank"  class="image featured"><img height="258px" width="160px" src="{{asset('app-assets/assets/images/coalizao.jpg')}}" alt="" /></a>
												<h3><a href="{{asset('app-assets\assets\arquivos\ALMANAQUE_COALIZAO (2).pdf')}}"target="_blank"  >Coalizão Pelo Fim da Violência Contra as Mulheres</a></h3>
													<p>
														Acesse para maiores informações.
													</p>

												</section>

											</div>
																						<!-- </div>
										<div class="row">
											<div class="col-3 col-6-medium col-12-small">

														<section class="box feature">
															<a href="#" target="_blank"  class="image featured"><img height="241px" src="{{asset('app-assets/assets/images/tc.png')}}" alt="" /></a>
															<h3><a href="#" target="_blank" >TV Corporativa</a></h3>
															<p>
																Acesse nossa galeria de fotos e vídeos.
															</p>
														
														</section>



														
											</div>
										</div> -->
										</div>
									</section>

</div>
<!-- Modal  - SIPAT -->
<div class="modal" id="modal-form-sipat">
	   <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="
padding-left: 5px;
padding-right: 5px;
padding-top: 1px;
padding-bottom: 1px;
"><span>×</span></button>
					</div>
						<div class="modal-body">
					<ul><h4>SIPAT 2021</h4>
					
					<h6><li><a href="{{asset('app-assets\assets\arquivos\sipat\Concurso de Paródias 2021.pdf')}}" target="_blank" class="x">Concurso de Paródias</a></li></h6>
					<h6><li><a href="{{asset('app-assets\assets\arquivos\sipat\Programação e Acessos.pdf')}}" target="_blank" class="x">Programação e Acessos</a></li></h6>
					<h6><li><a href="{{asset('app-assets\assets\arquivos\sipat\Ficha de Inscrição.pdf')}}" target="_blank" class="x">Ficha de Inscrição</a></li></h6>
					<h6><li><a href="https://web.microsoftstream.com/channel/77c5d924-cb26-4a40-aaf7-a50b1d849df0" target="_blank" class="x">Palestras Gravadas - SIPAT 2021</a></li></h6>
					</ul>
			
					</div>
						<div class="modal-footer">
							<button type="button" class="button x" data-dismiss="modal"style="
padding-left: 20px;
padding-right: 20px;
padding-top: 10px;
padding-bottom: 10px;
">Fechar</button>
							</div>
						</div>
					</div>
				</div>
<!--End Modal -->
@include('layout.footer')