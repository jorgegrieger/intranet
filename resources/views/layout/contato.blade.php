@include('layout.header')
			
			<!-- Main -->
            <section id="main">
					<div class="container">
						<div class="row gtr-200">

						<div id="about" class="col-12">

<!-- Features -->
<section  class="box features">
										<h2 class="major"><span>Fale Conosco</span></h2>
										<div>
                                        <div class="row">
                        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('inicio')}}">Página Inicial</a></li>
    <li class="breadcrumb-item active" aria-current="page">Fale Conosco</li>
  </ol>
</nav>
</div>
                                            <div class="row">
                                                <div class="col-3 col-6-medium col-12-small">
                                                </div>
												<div class="col-6 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
                                                        <form method="POST" action="{{route('contact.store')}}">

    @csrf
    @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
    <p>Caso não queira se identificar basta <b>não</b> preencher os campos Nome, Email e Telefone.</p>
    <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" placeholder="Digite seu nome.." name="name" id="name">

        <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" placeholder="Digite seu email.." name="email" id="email">

        @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" placeholder="Digite seu telefone.." name="phone" id="phone">

        @if ($errors->has('phone'))
        <br>
        <div class="error">
            {{ $errors->first('phone') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Assunto</label>
        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }} " placeholder="Digite o assunto" name="subject"
            id="subject">

        @if ($errors->has('subject'))
        <div class="alerta alert-danger">
            {{ $errors->first('subject') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Mensagem</label>
        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" placeholder="Escreva sua mensagem" name="message" id="message"
            rows="6"></textarea>

        @if ($errors->has('message'))
        <div class="alerta alert-danger">
            {{ $errors->first('message') }}
        </div>
        @endif
    </div>
    <p><b>Os dados pessoais ora coletados observarão o disposto no Aviso de Privacidade disponível em nosso <a href="https://www.portalprivacidade.com.br/bopaper" target="__blank">Portal de Privacidade - BO PAPER</a></p></b>
    <br>
    <input type="submit" name="send" value="Enviar" class="btn btn-dark btn-block">
</form>
				    </section>

												</div>
                                                <div class="col-3 col-6-medium col-12-small">
                                                </div>
											</div>
										</div>
									</section>
           
</div>
</div>
</div>
</div>
@include('layout.footer')