<x-layouts.app title="Blog" meta-description="Blog meta description">

    

    <h1>Blog</h1>
    <a href="{{ route('posts.create') }}">Crear nuevo Post</a>
    @foreach ($posts as $post)
        <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>

        <a href="{{route('posts.edit', $post)}}">Edit</a>
        
        <form method="POST" action="{{route('posts.destroy', $post)}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach
</x-layouts.app>
