<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inbox') }}
        </h2>
    </x-slot>

    
    {!! Form::open(array('url' => route('inbox.store'), 'method' => 'post')) !!}	
            {!! Form::label('sendTo', 'Send To :') !!}	   <br>   <br>
			    {!! Form::select('sendTo', $add_user) !!} <br>   <br>
            {!! Form::label('sender', 'From :') !!}	   <br>   <br>
			    {!! Form::text('sender', Auth::user()->email) !!} <br>   <br>
            {!! Form::label('subject', 'Subject :') !!}	   <br>   <br>
			    {!! Form::text('subject') !!} <br>   <br>
            {!! Form::label('message', 'Message :') !!}   <br>   <br>
			    {!! Form::textarea('message') !!}   <br>   <br>
			{!! Form::submit('Add New inbox') !!}
	{!! Form::close() !!}

</x-app-layout>