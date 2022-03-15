<form action="{{route('admin.posts.store')}}">
    @csrf 

    <label for="title">Oggetto del post</label>
    <input type="text" name="title" id="" placeholder="inserirsci oggetto post">

    <label for="description">Corpo del post</label>
    <input type="text" name="description" id="" placeholder="cosa vorresti scrivere?">
</form>