@extends('layouts.main')
@section('title', 'Posts')
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
                        actions
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
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
                        @if ($post->user_id == Auth::id())
                            <td class="px-6 py-4">
                                <div class="flex">
                                    <form action="{{ route('posts.edit', $post->id) }}" method="GET">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                            type="submit">Edit</button>
                                    </form>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="ml-2">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                            type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        @endif

                    </tr>
                @endforeach
                {{ $posts->links() }}
            </tbody>
        </table>
    </div>
@endsection
