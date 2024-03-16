@extends('layouts.main')
@section('title', 'Add Post')
@section('content')
    <form class="max-w-sm mx-auto" action="{{ route('posts.store') }}" method="post">
        @csrf
        {{-- <div class="mb-5">
            <label for="id" class="block mb-2 text-sm font-medium text-gray-900">id</label>
            <input type="id" id="id" name='id' value="{{ old('id') }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        </div> --}}
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">title</label>
            <input type="title" id="title" name='title' value="{{ old('title') }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        </div>
        <div class="mb-5">
            <label for="enabled" class="block mb-2 text-sm font-medium text-gray-900">Enabled</label>
            <div class="relative">
                <select id="enabled" name="enabled"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="1" {{ old('enabled') === '1' ? 'selected' : '' }}>1</option>
                    <option value="0" {{ old('enabled') === '0' ? 'selected' : '' }}>0</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="mb-5">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900">body</label>
            <input type="body" id="body" name='body' value="{{ old('body') }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>

@endsection
