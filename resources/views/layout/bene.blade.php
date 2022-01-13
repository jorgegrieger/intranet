
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
										<h2 class="major"><span>Administração de Pessoas</span></h2>
										<div>
                                            <div class="row">
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{route('getfile', $medAssist->arquivo)}}" data-toggle="modal" data-target="#modal-unimed" class="image featured"><img src="{{asset('app-assets/assets/images/assist.png')}}" alt="" /></a>
															<h3><a href="{{route('getfile', $medAssist->arquivo)}}" data-toggle="modal" data-target="#modal-unimed">Assistência Médica</a></h3>
															<p>
																Verifique as informações necessárias sobre o plano de sáude da BO PAPER em parceria com a UNIMED.
															</p>
										
														</section>

												</div>
                                                <div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="https://painelgp.bopaper.com.br/hcm/" target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/painelgp.png')}}" alt="" /></a>
															<h3><a href="https://painelgp.bopaper.com.br/hcm/" target="_blank" >Painel Gestão de Pessoas</a></h3>
															<p>
																Caso tenha dúvidas clique <a href="{{asset('app-assets\assets\arquivos\Manual_Acesso_Painel.pdf')}}" target="_blank"><font color="black"><b>aqui</b></font></a> e acesse o manual.
															</p>
										
														</section>

												</div>
                                                <div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="http://regponto:7070/rh/" target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/ponto.png')}}" alt="" /></a>
															<h3><a href="http://regponto:7070/rh/"target="_blank"  >Registre seu Ponto</a></h3>
															<p>
																Registre seu ponto de forma online.
																<br>
																Para gestão do seu ponto confira o manual clicando <a href="{{asset('app-assets\assets\arquivos\manualponto.pdf')}}" target="_blank"><font color="black"><b>aqui</b></font></a>.
															</p>
										
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{route('getfile', $calendario->arquivo)}}" target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/feriados.png')}}" alt="" /></a>
															<h3><a href="{{route('getfile', $calendario->arquivo)}}" target="_blank" >Calendário Anual de Feriados</a></h3>
															<p>
																Confira o calendário de feriados referente as 3 unidades (Arapoti, Jaguariaíva e Escritório Comercial Curitiba)
															</p>
														
														</section>

												</div>
												
                                                <div class="row">
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
														<a href="" data-toggle="modal" data-target="#modal-form5"   class="image featured"><img src="{{asset('app-assets/assets/images/escturno.png')}}" alt="" /></a>
														<h3><a href=""data-toggle="modal" data-target="#modal-form5" >Escala de Turno</a></h3>
												
															<p>
																Confira a escala de turno de Arapoti e Pisa.
															</p>
										
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{route('getfile', $itnAra->arquivo)}}" target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/bus.png')}}" alt="" /></a>
															<h3><a href="{{route('getfile', $itnAra->arquivo)}}"target="_blank" >Itinerário - Arapoti</a></h3>
															<p>
															Confira os pontos, horários que o onibus passa em Arapoti.
															</p>
												
														</section>

												</div>
													<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{route('getfile', $itnPis->arquivo)}}" target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/bus.png')}}" alt="" /></a>
															<h3><a href="{{route('getfile', $itnPis->arquivo)}}"target="_blank" >Itinerário - PISA</a></h3>
															<p>
                                                            Confira os pontos, horários que o onibus passa em Jaguariaíva.
															</p>
												
														</section>


														
												</div>
										
												<div class="col-3 col-6-medium col-12-small">

<!-- Feature -->
	<section class="box feature">
		<a href="" data-toggle="modal" data-target="#modal-form"  class="image featured"><img src="{{asset('app-assets/assets/images/cardapio.png')}}" alt="" /></a>
		<h3><a href="" data-toggle="modal" data-target="#modal-form"  >Alimentação</a></h3>
		<p>
		Confira os cardápios das nossas unidades.
		</p>

	</section>

</div>
<div class="row">
<div class="col-3 col-6-medium col-12-small">

<!-- Feature -->
	<section class="box feature">
		<a href="" data-toggle="modal" data-target="#modal-form1"   class="image featured"><img src="{{asset('app-assets/assets/images/acordo.png')}}" alt="" /></a>
		<h3><a href=""data-toggle="modal" data-target="#modal-form1" >Acordos PLR / PPR</a></h3>
		<p>
		Veja mais informações sobre os nossos acordos.
		</p>

	</section>

</div>
<!-- Modal  - Escala de Turno -->
<div class="modal" id="modal-form5">
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
					<ul><h4>Escala de Turno Arapoti</h4>
					
					<h6><li><a href="{{route('getfile', $escAra->arquivo)}}" target="_blank" class="x">Arapoti 2021</a></li></h6>
					<h6><li><a href="{{asset('app-assets\assets\arquivos\Escala Turno Revezamento 2022 - BO Paper Arapoti.pdf')}}" target="_blank" class="x">Arapoti 2022</a></li></h6>
					</ul>
					<ul><h4>Escala de Turno PISA</h4>
					
					<h6><li><a href="{{route('getfile', $escPis->arquivo)}}" target="_blank" class="x">PISA 2021</a></li></h6>
					<h6><li><a href="{{asset('app-assets\assets\arquivos\Escala Turno Revezamento 2022 - BO Paper Pisa.pdf')}}" target="_blank" class="x">PISA 2022</a></li></h6>
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
<!-- Modal -->
<div class="modal" id="modal-form1">
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
					<ul>
					
					<li><a href="{{route('getfile', $pprA->arquivo)}}" target="_blank" class="x"><h5>Acordo PPR Arapoti 2021</h5></a></li>	
					<li><a href="{{route('getfile', $pprP->arquivo)}}" target="_blank" class="x"><h5>Acordo PPR Pisa 2021</h5></a></li>
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
<!-- Modal -->
<div class="modal fade" id="modal-form">
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
					<ul>
					
					<li><a href="{{route('getfile', $cardC->arquivo)}}" target="_blank" class="x"><h5>Cardápio Ceia</h5></a></li>	
					<li><a href="{{route('getfile', $cardM->arquivo)}}" target="_blank" class="x"><h5>Cardápio Almoço</h5></a></li>
					<li><a href="{{route('getfile', $cardL->arquivo)}}" target="_blank" class="x"><h5>Lanche Pisa</h5></a></li>
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

<div class="col-3 col-6-medium col-12-small">

<!-- Feature -->
	<section class="box feature">
	<section class="box feature">
		<a href=""  data-toggle="modal" data-target="#modal-forms" class="image featured"><img height="297px"src="{{asset('app-assets/assets/images/prev.jpeg')}}" alt="" /></a>
		<h3><a href="" data-toggle="modal" data-target="#modal-forms">Previdência Privada BO PAPER</a></h3>
		<p>
			Confira informações gerais sobre a BO PAPER PREV
		</p>
	</section>





	</section>

</div>
</div>											</div>
											</div>
										</div>
									</section>

</div>

<!-- Modal -->
<div class="modal fade" id="modal-unimed">
	   <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="
padding-left: 5px;
padding-right: 5px;
padding-top: 1px;
padding-bottom: 1px;
"><span>×</span></button>
								<p class="modal-title"><h6>Plano de Saúde - BO Paper</h6></p>
					</div>
						<div class="modal-body">
					<ul>
					<li><a href="{{route('getfile', $medAssist->arquivo)}}" target="_blank" ><h5>Assistência Médica</h5></a></li>
					<li><a href="{{asset('app-assets\assets\arquivos\APP UNIMED - LGDP.PDF')}}" target="_blank" ><h5>Cadastro de Dependentes</h5></a></li>
					<li><a href="{{asset('app-assets\assets\arquivos\App  (LGPD).PDF')}}" target="_blank"><h5>APP Unimed Cliente PR</h5></a></li>	
					
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

	<!-- Modal -->
	<div class="modal fade" id="modal-forms">
	   <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" style="
padding-left: 5px;
padding-right: 5px;
padding-top: 1px;
padding-bottom: 1px;
"><span>×</span></button>
								<p class="modal-title"><h6>BO Paper Prev</h6></p>
					</div>
						<div class="modal-body">
					<ul>
					
					<li><a href="{{asset('app-assets\assets\arquivos\Apresentacao novos participantes.pdf')}}" target="_blank" ><h5>Apresentação BO Paper Prev</h5></a></li>
					<li><a href="{{asset('app-assets\assets\arquivos\MaterialExplicativo_BO Paper_2021.pdf')}}" target="_blank" class="x"><h5>Material Explicativo BO Paper Prev</h5></a></li>	
					<li><a href="{{asset('app-assets\assets\arquivos\BO PAPER Prev - Regulamento - rev_03.2021.pdf')}}" target="_blank" class="x"><h5>Regulamento BO Paper Prev</h5></a></li>
					<li><a href="{{asset('app-assets\assets\arquivos\Estatuto IFM - rev.2015.pdf')}}" target="_blank" class="x"><h5>Estatuto BO Paper Prev</h5></a></li>	
					<li><a href="{{asset('app-assets\assets\arquivos\Recuperação de Senha e Acesso ao site IFM.pdf')}}" target="_blank" class="x"><h5>Acesso ao site e recuperação de senha</h5></a></li>
					<li><a href="{{asset('app-assets\assets\arquivos\Formulário de Adesão - BO PAPER PREV (Arapoti)_2022.pdf')}}" target="_blank" class="x"><h5>Formulário de Adesão - BO Paper Arapoti</h5></a></li>
					<li><a href="{{asset('app-assets\assets\arquivos\Formulário de Adesão - BO PAPER PREV (Pisa - admitidos a partir de 04.2021)_2022.pdf')}}" target="_blank" class="x"><h5>Formulário de Adesão - BO Paper Pisa - Admitidos a partir de 04/2021 (Abril)</h5></a></li>
					<li><a href="{{asset('app-assets\assets\arquivos\Formulário de Opção - BO PAPER PREV (Pisa - admitidos até 03.2021)_2022.pdf')}}" target="_blank" class="x"><h5>Formulário de Opção - BO Paper Pisa - Admitidos até 03/2021 (Março)</h5></a></li>
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