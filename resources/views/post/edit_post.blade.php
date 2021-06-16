<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    {!! Form::open(array('url' => route('post.update', ['post' => $post->id,  'edit_post' => $edit_post]), 'method' => 'put')) !!}	
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
		    {!! Form::text('title', $post->title) !!}   <br>   <br>
        {!! Form::label('content', 'Content :') !!}   <br>   <br>
		    {!! Form::textarea('content', $post->content) !!}   <br>   <br>
        {!! Form::label('category_id', 'Category :') !!}   <br>   <br>
            {!! Form::select('category_id', $edit_post) !!} <br>   <br>
		{!! Form::submit('Edit') !!}

	{!! Form::close() !!}

</x-app-layout>