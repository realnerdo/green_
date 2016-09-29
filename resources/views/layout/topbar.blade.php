<div class="topbar">
    <div class="wrapper">
        <div class="col-6">
            <a href="#" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Green Store" />
            </a>
            <div class="search">
                {!! Form::open(['url' => 'foo/bar', 'class' => 'search-form']) !!}
                    {!! Form::text('search', null, ['class' => 'query', 'placeholder' => 'Buscar...']) !!}
                {!! Form::close() !!}
            </div>
        </div><!-- end col-6 -->
        <div class="col-6">
            <a href="#" class="sell_button button">Vender</a>
        </div><!-- end col-6 -->
    </div><!-- end wrapper -->
    <div class="top_links">
        <div class="wrapper">
            <div class="col-12">
                <ul class="links">
                    <li class="item">
                        <a href="#" class="link">Lo nuevo</a>
                    </li>
                    <li class="item">
                        <a href="#" class="link">Regalos</a>
                    </li>
                    <li class="item">
                        <a href="#" class="link">Muebles</a>
                    </li>
                    <li class="item">
                        <a href="#" class="link">Ropa</a>
                    </li>
                    <li class="item">
                        <a href="#" class="link">Jardín</a>
                    </li>
                    <li class="item">
                        <a href="#" class="link">Mascotas</a>
                    </li>
                    <li class="item">
                        <a href="#" class="link">Reciclados</a>
                    </li>
                    <li class="item">
                        <a href="#" class="link">Promociones</a>
                    </li>
                </ul>
            </div><!-- end col-12 -->
        </div><!-- end wrapper -->
    </div><!-- end top_links -->
</div>
