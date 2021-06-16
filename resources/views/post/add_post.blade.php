<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    
    {!! Form::open(array('url' => route('post.store'), 'method' => 'post')) !!}	
            {!! Form::label('title', 'Title :') !!}	   <br>   <br>
			    {!! Form::text('title') !!} <br>   <br>
            {!! Form::label('content', 'Content :') !!}   <br>   <br>
			    {!! Form::textarea('content') !!}   <br>   <br>
            {!! Form::label('category', 'Category :') !!}   <br>   <br>
                {!! Form::select('category_id', $add_post) !!} <br>   <br>
			{!! Form::submit('Add New post') !!}
	{!! Form::close() !!}








</x-app-layout>