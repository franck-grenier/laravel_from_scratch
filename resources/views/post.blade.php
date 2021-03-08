@extends('layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="justify-center pt-8 sm:justify-start sm:pt-0">
            <h1>My blog posts</h1>
        </div>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="p-6">
                <h2>{{ $post->title }}</h2>
                <p>
                    {{ $post->body }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
