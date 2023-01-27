<x-layouts.app :title="$post->title" :meta-description="$post->body">
    <h1>Edit Form</h1>

    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf @method('PATCH')
        <label for="">
             Title<br>
         <input name="title" type="text" value="{{old('title', $post->title)}}">
         @error('title')
         <br>
             <small style="color:red">{{$message}}</small>
         @enderror
        </label><br>
        <label for="">
             Body<br>
         <textarea name="body"  cols="30" rows="10"  >{{old('body', $post->body)}}</textarea>
         @error('body')
         <br>
             <small style="color:red">{{$message}}</small>
         @enderror
        </label><br>
        <button type="submit">Send</button>
    </form>

    <a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>
