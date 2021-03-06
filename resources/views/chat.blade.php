@extends('layouts.app')

@section('content')

    <div class="container">
    	<div class="row">
	    	<div class="col col-md-8 col-offset-2">
				<div id="app">


					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">Chatroom</h3>
					  </div>
					  <div class="panel-body">

					   {{-- <chat-message></chat-message> --}}
						<chat-log :messages="messages"></chat-log> {{-- bind messages array --}}
						<chat-composer v-on:messagesent="addMessage"></chat-composer>

					  </div>
					</div>

				</div>
			</div>
		</div>
	</div>
	
@endsection

