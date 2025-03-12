@extends('notes.layout')

@section('content-notes')

<div class="flex justify-center items-center flex-col m-auto" style="width: 80%">
<div class="py-4">
    <h2 class=" font-medium">Laravel CRUD Example</h2>
</div>
 
@if(session('success'))
    <div class="" role="alert">{{ session('success') }}
        
    </div>
@endif

<div class="my-4">
    <a class="bg-black text-white rounded-lg p-2" href="{{ route('notes.create') }}"> 
        Create New Note
    </a>
</div>

        

<div class="w-1/2 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Content
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="">Action</span>
                </th>
            </tr>
        </thead>
        <tbody>
             @forelse ($notes as $note)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                    {{ ++$i }}
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $note->title }}
                </th>
                <td class="px-6 py-4">
                    {{ $note->content }}
                </td>
                <td class="px-6 py-4 text-right">
                    <form action="{{ route('notes.destroy',$note->id) }}" method="POST">
                        <a href="{{ route('notes.show',$note->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                        <a href="{{ route('notes.edit',$note->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
                <tr class="w-full bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td colspan="4" class="px-6 py-4 text-white">
                        No Data Found
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {!! $notes->links() !!}
</div>

{{--  
<table class="table table-bordered table-striped mt-4">
    <thead>
        <tr>
            <th width="80px">No</th>
            <th>Title</th>
            <th>content</th>
            <th width="250px">Action</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($notes as $note)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $note->title }}</td>
                <td>{{ $note->content }}</td>
                <td>
                    <form action="{{ route('notes.destroy',$note->id) }}" method="POST">
                        <a class="" href="{{ route('notes.show',$note->id) }}"><i class=""></i> Show</a>
                        <a class="" href="{{ route('notes.edit',$note->id) }}"><i class=""></i> Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=""><i class=""></i> Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">There are no data.</td>
            </tr>
        @endforelse
    </tbody>
</table> 
        {!! $notes->links() !!}
    </div>
</div> --}} 

@endsection