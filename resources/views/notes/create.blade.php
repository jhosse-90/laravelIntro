@extends('notes.layout')

@section('content-notes')
    <div class="">
        <h2>Add New Note</h2>
        <a href="{{ route('notes.index') }}">
            back
        </a>
        
<form action="{{ route('notes.store') }}" method="POST" class="max-w-sm mx-auto">
  @csrf
    <div class="mb-5">
    <label for="inputName" class="block mb-2 text-sm font-medium ">
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
    <label for="inputContent" class="block mb-2 text-sm font-medium text-gray-900">
        Content: 
    </label>
    <textarea 
    type="text" id="inputContent" 
    class="" name="content"
      required>
    </textarea>
        @error('content')
        <div>{{$message}}</div>
        @enderror
  </div>
  
  <button type="submit" class="text-white bg-black rounded-lg p-1">Submit</button>
</form>

    </div>
@endsection