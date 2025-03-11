@extends('notes.layout')

@section('content-notes')
    <div class="card">
        <h2>Add New Note</h2>
        <div class="card-body">
            <div class="volver">
                <a href="{{ route('notes.index') }}">
                    back
                </a>
            </div>
<form action="{{ route('notes.store') }}" method="POST" class="max-w-sm mx-auto">
  @csrf
    <div class="mb-5">
    <label for="inputName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Title: 
    </label>
    <input 
    type="text" id="inputName" placeholder="Title"
    class="" name="title"
      required />
        @error('name')
        <div>{{$message}}</div>
        @enderror
  </div>
  <div class="mb-5">
    <label for="inputContent" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Content: 
    </label>
    <textarea 
    type="text" id="inputContent" placeholder="Content"
    class="" name="content"
      required>
    </textarea>
        @error('content')
        <div>{{$message}}</div>
        @enderror
  </div>
  
  <button type="submit" class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

        </div>
    </div>
@endsection