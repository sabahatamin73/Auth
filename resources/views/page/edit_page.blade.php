<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page') }}
        </h2>
    </x-slot>

    {!! Form::open(array('url' => route('page.update', ['page' => $page->id]), 'method' => 'put')) !!}	

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif	

        {!! Form::label('title', 'Title :') !!}	   <br>   <br>
		{!! Form::text('title', $page->title) !!}   <br>   <br>
        {!! Form::label('content', 'Content :') !!}   <br>   <br>
		{!! Form::textarea('content', $page->content) !!}   <br>   <br>
		{!! Form::submit('Edit') !!}

	{!! Form::close() !!}

</x-app-layout>