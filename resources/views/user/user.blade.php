<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
                <a style="background-color:green; color:white; padding:10px; text-decoration:none; border-radius:10px; position:absolute; top:150px; right:430px;"href="{{route('user.create')}} ">Add New User</a>
                
                @if(count($user))
                    @foreach ($user as $item)
                        <ul>
                            <li>Id : {{$item->id}}<li>
                            <li>Name : {{$item->name}}<li>
                            <li>Email : {{$item->email}}<li>
                            <li>{!! Form::open(array('url'=> route('user.edit', ['user'=> $item->id]), 'method' => 'get')) !!}
                                    {!! Form::submit('Edit', array('style' => 'padding:5px; background-color:grey; color:white; border-radius:10px;')) !!}
                                    {!! Form::close() !!}

                                {!! Form::open(array('url'=> route('user.destroy', ['user'=> $item->id]), 'method' => 'delete')) !!}
                                    {!! Form::submit('Delete',array('style' => 'padding:5px; background-color:red; color:white; border-radius:10px;')) !!}
                                    {!! Form::close() !!}</li>
                            <br><hr><br>
                        </ul>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>