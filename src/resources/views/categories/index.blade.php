<h1>Kategóriák</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<ul>
    @foreach($categories as $category)
    <li>
        <a>{{ $category->id}} - {{ $category->name }}</a>
    </li>
    @endforeach
</ul>