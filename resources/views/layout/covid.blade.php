@include('layout.header')

			<!-- Banner -->
   		
			<!-- Main -->
            <section id="main">
					<div class="container">
						<div class="row gtr-200">
						<div id="about" class="col-12">
						

<!-- Features -->
        <section  class="box features">
			<h2 class="major"><span>Covid-19</span></h2>
				<div>
                    <div class="row">
                    <div class="col-4 col-6-medium col-12-small">
                                            	<!-- Feature -->
						<section class="box feature">
							<a href=""  id="eficiencia" data-toggle="modal" class="image featured"><img src="{{asset('app-assets/assets/images/videoscovid.png')}}" alt="" /></a>
							<h3><span>Enfrentamento COVID 19 - BO PAPER</span></h3>
							<p>
								Veja nossos esforços para conter a pandemia da Covid 19.
							</p>

    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" class="button" data-toggle="modal">Assistir Vídeo</a>
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="
    padding-left: 5px;
    padding-right: 5px;
    padding-top: 1px;
    padding-bottom: 1px;
    
">&times;</button>
                    <h4 class="modal-title">Enfrentamento Covid 19 - BO PAPER</h4>
                </div>
                <div class="modal-body">
                <video width="700" height="466" controls>
  <source id="cartoonVideo" src="{{asset('app-assets/assets/videos/BO FINAL CORRIGIDO TEXTO.mp4')}}" type="video/mp4">

                </div>
            </div>
        </div>
    </div>

  

    					</section>

                                            </div>
                                           <div class="col-4 col-6-medium col-12-small">
                                            	<!-- Feature -->
						<section class="box feature">
							<a href=""  id="eficiencia" data-toggle="modal" class="image featured"><img src="{{asset('app-assets/assets/images/videoscovid.png')}}" alt="" /></a>
							<h3><span>Enfrentamento Covid 19 em casa - BO PAPER</span></h3>
							<p>
								Faça sua parte em sua casa também, espalhe os cuidados para os familiares e juntos vamos vencer a COVID 19.
							</p>

    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal1" class="button" data-toggle="modal">Assistir Vídeo</a>
    
    <!-- Modal HTML -->
    <div id="myModal1" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="
    padding-left: 5px;
    padding-right: 5px;
    padding-top: 1px;
    padding-bottom: 1px;
    
    
">&times;</button>
                    <h4 class="modal-title">Enfrentamento Covid 19 em casa - BO PAPER</h4>
                </div>
                <div class="modal-body">
                <video width="700" height="466" controls>
  <source id="cartoonVideo" src="{{asset('app-assets/assets/videos/BO - CRIANÇAS TODAS JUNTAS.mp4')}}" type="video/mp4">

                </div>
            </div>
        </div>
    </div>

  

    					</section>
										</div>
                                        <div class="col-4 col-6-medium col-12-small">
                                            	<!-- Feature -->
						<section class="box feature">
							<a href=""  id="eficiencia" data-toggle="modal" class="image featured"><img src="{{asset('app-assets/assets/images/videoscovid.png')}}" alt="" /></a>
							<h3><span>Corrida da Prevenção</span></h3>
							<p>
								Confira nosso vídeo da Corrida da Prevenção.
							</p>

    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal2" class="button" data-toggle="modal">Assistir Vídeo</a>
    
    <!-- Modal HTML -->
    <div id="myModal2" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="
    padding-left: 5px;
    padding-right: 5px;
    padding-top: 1px;
    padding-bottom: 1px;
    
">&times;</button>
                    <h4 class="modal-title">Corrida da Prevenção</h4>
                </div>
                <div class="modal-body">
                <video width="700" height="466" controls>
  <source id="cartoonVideo" src="{{asset('app-assets/assets/videos/Video Corrida da Prevenção.mp4')}}" type="video/mp4">

                </div>
            </div>
        </div>
    </div>

  

    					</section>


                                    </div>
                                    <div class="row">
                                    <div class="col-3 col-6-medium col-12-small"></div> 
                                    <div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{asset('app-assets/assets/arquivos/Cartilha Retomada Parcial.pdf')}}"target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/informativo.png')}}" alt="" /></a>
															<h3><a href="{{asset('app-assets/assets/arquivos/Cartilha Retomada Parcial.pdf')}}" target="_blank" >Cartilha de Retomada Parcial</a></h3>
															<p>
																Confira nossas orientações na retomada parcial de trabalho.
															</p>
										
														</section>

												</div>
                                    <div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="{{asset('app-assets/assets/arquivos/Cartilha Recomendações Viagens a Trabalho.pdf')}}"target="_blank"  class="image featured"><img src="{{asset('app-assets/assets/images/informativo.png')}}" alt="" /></a>
															<h3><a href="{{asset('app-assets/assets/arquivos/Cartilha Recomendações Viagens a Trabalho.pdf')}}  "target="_blank" >Recomendações viagens a trabalho</a></h3>
															<p>
																Sempre que necessário viajar a trabalho, fique atento em nossas recomendações.
															</p>
										
														</section>

												</div>
                                                <div class="col-3 col-6-medium col-12-small"></div>
</div>
</section>
</div>

<script>
$('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
    </script>
@include('layout.footer')
