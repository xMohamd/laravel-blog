@extends('layouts.app')
@section('title', 'Post')
@section('content')
    <form class="max-w-sm mx-auto">
        <div class="mb-5">
            <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">id</label>
            <input type="id" id="id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $post->id }}" required />
        </div>
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">title</label>
            <input type="title" id="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $post->title }}" required />
        </div>
        <div class="mb-5">
            <label for="enabled" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">enabled</label>
            <input type="enabled" id="enabled"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $post->enabled }}" required />
        </div>

        <div class="mb-5">
            <label for="published_at"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">published_at</label>
            <input type="published_at" id="published_at"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $post->published_at }}" required />
        </div>

        <div class="mb-5">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">body</label>
            <input type="body" id="body"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $post->body }}" required />
        </div>

        {{-- <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> --}}
    </form>
@endsection
