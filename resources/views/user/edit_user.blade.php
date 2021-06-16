<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    {!! Form::open(array('url' => route('user.update', ['user' => $user->id]), 'method' => 'put')) !!}	

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif	
            {!! Form::label('name', 'Name :') !!} <br> <br>
			{!! Form::text('name', $user->name) !!} <br> <br>

            {!! Form::label('email', 'Email :') !!} <br> <br>
			{!! Form::text('email', $user->email) !!}<br> <br>

            {!! Form::label('password', 'Password :') !!} <br> <br>
			{!! Form::password('password') !!}<br> <br>
			{!! Form::submit('Edit') !!}
	{!! Form::close() !!}

</x-app-layout>