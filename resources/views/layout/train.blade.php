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
										<h2 class="major"><span>Desenvolvimento Humano</span></h2>
										<div>
                                            <div class="row">
												<div class="col-4 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{asset('app-assets\assets\arquivos\DESENVOLVER PARA CRESCER.pdf')}}"target="_blank"  class="image featured"><img height="251px" src="{{asset('app-assets/assets/images/treina.jpeg')}}" alt="" /></a>
															<h3><a href="{{asset('app-assets\assets\arquivos\DESENVOLVER PARA CRESCER.pdf')}}"target="_blank" >Desenvolver para Crescer</a></h3>
															<p>
                                                            Nosso Programa de Desenvolvimento de Líderes foi criado pensando no futuro e na
															importância de termos líderes cada vez mais capacitados para inspirar e desenvolver pessoas.
															</p>
										
														</section>

												</div>
                                                <div class="col-4 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{asset('app-assets\assets\arquivos\APRENDER PARA CRESCER.pdf')}}" target="_blank"  class="image featured"><img height="251px" src="{{asset('app-assets/assets/images/treina.jpeg')}}" alt="" /></a>
															<h3><a href="{{asset('app-assets\assets\arquivos\APRENDER PARA CRESCER.pdf')}}" target="_blank" >Aprender para Crescer</a></h3>
															<p>
                                                            <b>APRENDER PARA CRESCER</b> é o nome do programa de desenvolvimento, criado
																para cuidar do desenvolvimento e crescimento dos nossos profissionais, tendo
																como base os quatro Pilares Estratégicos da companhia e Modelo de
																Competências dos profissionais <b>BO PAPER</b>
															</p>
										
														</section>

												</div>
                                                <div class="col-4 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{asset('app-assets\assets\arquivos\COMPARTILHAR PARA CRESCER.pdf')}}" target="_blank"  class="image featured"><img height="251px" src="{{asset('app-assets/assets/images/treina.jpeg')}}" alt="" /></a>
															<h3><a href="{{asset('app-assets\assets\arquivos\COMPARTILHAR PARA CRESCER.pdf')}}"target="_blank"  >Compartilhar para Crescer</a></h3>
															<p>
                                                            Pensando no futuro e no fortalecimento
															da <b>cultura BO PAPER</b>, o programa
															<b>Compartilhar para Crescer</b> veio para
															proporcionar aprendizado, interação e
															compartilhamento de conhecimentos
															internamente!
															</p>
										
														</section>

												</div>
												
												</div>
												<div class="row">
												<div class="col-4 col-6-medium col-12-small">

													<!-- Feature -->
													<section class="box feature">
														<a href="{{route('getfile', $agenda->arquivo)}}"  class="image featured"><img height="281px" src="{{asset('app-assets/assets/images/AP_intranet.jpg')}}" alt="" /></a>
														<h3><a href="{{route('getfile', $agenda->arquivo)}}"  >Agenda Positiva</a></h3>
														<p>
															Confira nossa agenda positiva!
														</p>

													</section>

												</div>
												<!--<div class="col-4 col-6-medium col-12-small">

												 Feature 

													<section class="box feature">
															<a href="#" class="image featured"><img height="281px" src="{{asset('app-assets/assets/images/opor.png')}}" alt="" /></a>
															<h3><a href="#" >Oportunidades / Trabalhe Conosco</a></h3>
															<p>
                                                            Pensando no futuro e no fortalecimento
															da <b>cultura BO PAPER</b>, o programa
															<b>Compartilhar para Crescer</b> veio para
															proporcionar aprendizado, interação e
															compartilhamento de conhecimentos
															internamente!
															</p>
										
														</section>

												</div> -->
												
                                               
											
										</div>
									</section>

</div>

@include('layout.footer')