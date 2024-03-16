@extends('layouts.main')
@section('title', 'Post')
@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        enabled
                    </th>
                    <th scope="col" class="px-6 py-3">
                        published_at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User
                    </th>

                    <th scope="col" class="px-6 py-3">
                        body
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $post->id }}
                    </th>
                    <td class="px-6 py-4">
                        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $post->enabled }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $post->published_at }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $post->user->name }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $post->body }}
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
@endsection
