	<!-- Footer -->
    <footer id="footer">
					<div class="container">
						<div class="row gtr-200">
						<div class="col-12">

								<!-- Contact -->
									<section>
										<h2 class="major"><span>Siga-nos nas redes</span></h2>
										<ul class="contact">
											<li><a class="icon brands fa-linkedin-in" href="https://br.linkedin.com/company/bo-paper"><span class="label">LinkedIn</span></a></li>
											<li><a class="icon brands fa-product-hunt" href="https://www.pegai.info/"><span class="label">Pegai Leitura Grátis</span></a></li>
											<li><a class="icon brands fab fa-tumblr" href="https://tissueonline.com.br/bo-paper/"><span class="label">Tissue Online</span></a></li>
											<li><a class="icon brands fa-stripe-s" href="https://www.sinpacel.org.br/"><span class="label">Sinpacel</span></a></li>
											<li><a class="icon brands fa-pagelines" href="https://iba.org/"><span class="label">Ibá</span></a></li>
											
											
										</ul>
										
									</section>

							</div>
						</div>

						<!-- Copyright -->
							<div id="copyright">
								<ul class="menu">
									<li>&copy; Todos os direitos reservados. BO PAPER - <a href="{{route('index')}}">Painel Administrativo</a></li>
								</ul>
							</div>

					</div>
				</footer>

		</div>

        <!-- Scripts -->
		<script>
					$("#eficiencia").click(function(){
    				$("#modal-mensagem").modal('');
					});
</script>




		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

			<script src="{{asset('app-assets/assets/js/jquery.min.js')}}"></script>
			<script src="{{asset('app-assets/assets/js/jquery.dropotron.min.js')}}"></script>
			<script src="{{asset('app-assets/assets/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('app-assets/assets/js/browser.min.js')}}"></script>
			<script src="{{asset('app-assets/assets/js/breakpoints.min.js')}}"></script>
			<script src="{{asset('app-assets/assets/js/util.js')}}"></script>
			<script src="{{asset('app-assets/assets/js/main.js')}}"></script>
			
			<!-- DataTables  & Plugins -->
<script src="{{asset('app-assets/dashboard/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('app-assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('app-assets/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('app-assets/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('app-assets/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('app-assets/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('app-assets/dashboard/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('app-assets/dashboard/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('app-assets/dashboard/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('app-assets/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('app-assets/dashboard/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('app-assets/dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "language":{
        "search": "Buscar:",
        "info": "Página _PAGE_ de _PAGES_",
        "first": "Primeira",
		"infoFiltered": "(filtrado de _MAX_ entrada)",
		"loadingRecords": "Carregando...",
    	"processing":     "Processando...",
		"infoEmpty":      "Nenhum dado foi encontrado!",
        "zeroRecords": "Nenhum dado foi encontrado!",
        "paginate": {
				            "previous": "Anterior",
                    "next": "Próxima"
				    },
            "buttons": {
				            "copy": "Copiar",
                    "csv": "Exportar para csv",
                    "print":"Imprimir",
                    "colvis": "Filtrar Colunas"

				    }
      }
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    }
    );
  });
</script>

	</body>
</html>