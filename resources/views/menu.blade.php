<div class="list-group">
    <a class="list-group-item active">Categorias</a>
    @foreach ($categories as $key => $category)
        <a href="/category/{{ $key }}" class="list-group-item">{{ $category }}</a>
    @endforeach
</div>