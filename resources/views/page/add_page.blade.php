<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>

    
    {!! Form::open(array('url' => route('page.store'), 'method' => 'post')) !!}	
            {!! Form::label('title', 'Title :') !!}	   <br>   <br>
			    {!! Form::text('title') !!} <br>   <br>
            {!! Form::label('content', 'Content :') !!}   <br>   <br>
			    {!! Form::textarea('content') !!}   <br>   <br>
			{!! Form::submit('Add New page') !!}
	{!! Form::close() !!}

</x-app-layout>