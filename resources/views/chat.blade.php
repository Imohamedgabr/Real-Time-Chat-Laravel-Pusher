<!DOCTYPE html>
<html>
<head>
	<title>Chat room</title>
	 <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
   {{-- the css folder in the assets  --}}
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

</head>
<body>
	<div id="app">
		<h1>Chatroom</h1>
		

		{{-- <chat-message></chat-message> --}}
		<chat-log :messages="messages"></chat-log> {{-- bind messages array --}}
		<chat-composer v-on:messagesent="addMessage"></chat-composer>

	</div>
	
	<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>