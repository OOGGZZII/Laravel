<h1>Új Kategória</h1>

<from action="{{ route('categories.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="name">Kategória Neve</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <button type="submit">Ok</button>
</from>