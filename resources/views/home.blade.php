@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-[90vh]">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-800 text-white text-center py-4 rounded-t-lg">{{ __('Hello') }}</div>

                <div class="p-6">
                    @if (session('status'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="text-gray-700">{{ __('You are logged in!') }}</p>
                </div>
            </div>
        </div>
</div>
@endsection