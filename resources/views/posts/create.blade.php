<x-layouts.app title="Blog" meta-description="Blog meta description">

    <h1>Create a new Post</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="">
             Title<br>
         <input name="title" type="text">
        </label><br>
        <label for="">
             Body<br>
         <textarea name="body"  cols="30" rows="10"></textarea>
        </label><br>
        <button type="submit">Send</button>
        




    </form>





    <a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>