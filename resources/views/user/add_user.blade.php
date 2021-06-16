<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <!-- {!! Form::open(array('url' => route('user.store'), 'method' => 'post')) !!}		
			{!! Form::text('name') !!}
			{!! Form::email('email') !!}
			{!! Form::password('password'); !!}
			{!! Form::submit('Add New User') !!}
	
	{!! Form::close() !!} -->

<!-- </x-app-layout>


<x-guest-layout> -->
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        {!! Form::open(array('url' => route('user.store'), 'method' => 'post')) !!}		

            <!-- Name -->
            <div class="mt-4">
                {!! Form::label('name', 'Name :') !!} <br>
                {!! Form::text('name') !!}
            </div>

            <!-- Email Address -->
            <div class="mt-4">
            {!! Form::label('email', 'Email :') !!} <br>
                {!! Form::email('email') !!}
            </div>

            <!-- Password -->
            <div class="mt-4">
            {!! Form::label('password', 'Password :') !!} <br>
                <x-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
            {!! Form::label('comfirm_password', 'Comfirm Password :') !!} <br>
                <x-input id="password_confirmation"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
