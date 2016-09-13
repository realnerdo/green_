<div class="topbar">
    <a href="#" class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Green Store" />
    </a>
    <div class="search">
        {!! Form::open(['url' => 'foo/bar', 'class' => 'search-form']) !!}
            {!! Form::text('search', null, ['class' => 'query', 'placeholder' => 'Buscar...']) !!}
        {!! Form::close() !!}
    </div>
    <a href="#" class="button">Vender</a>
</div>
