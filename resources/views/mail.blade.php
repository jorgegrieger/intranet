<h2>BO Paper - Fale Conosco</h2> <br><br>

@if ($name == null) 
<h3>Você recebeu um email de : Usuário Anônimo </h3><br><br>
@else
<h3>Você recebeu um email de : {{$name}} </h3><br><br>
@endif


Detalhes: <br><br>
@if ($name == null and $email == null and $phone == null) 
Assunto: {{ $subject }} <br>
Mensagem: {{ $user_query }} <br><br>
@else
Nome: {{ $name }} <br>
Email: {{ $email }} <br>
Telefone: {{ $phone }} <br>
Assunto: {{ $subject }} <br>
Mensagem: {{ $user_query }} <br><br>
@endif
<br>