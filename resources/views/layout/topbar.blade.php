<div class="topbar">
    <div class="wrapper">
        <div class="left col-6">
            <a href="#" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Green Store" />
            </a>
            <div class="search">
                {!! Form::open(['url' => 'foo/bar', 'class' => 'search-form']) !!}
                    {!! Form::text('search', null, ['class' => 'query', 'placeholder' => 'Buscar...']) !!}
                    {!! Form::select('categories', ['Todas las categorías', 'Muebles', 'Ropa', 'Jardín'], null, ['class' => 'select-category']) !!}
                    <button class="submit" type="submit">
                        <img src="{{ asset('img/search.svg') }}" alt="" class="img">
                    </button>
                {!! Form::close() !!}
            </div>
        </div><!-- end col-6 -->
        <div class="right col-6">
            <ul class="tools">
                <li class="tool">
                    <a href="#" class="sell_button button">Vender</a>
                </li>
                <li class="tool">
                    <a href="#">
                        <img src="{{ asset('img/notification.svg') }}" alt="" class="icon">
                    </a>
                </li>
                <li class="tool">
                    <a href="#">
                        <img src="{{ asset('img/shopping-cart.svg') }}" alt="" class="icon">
                    </a>
                </li>
                <li class="tool">
                    <div class="profile">
                        <div class="round">
                            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="" class="photo">
                        </div><!-- end round -->
                        <img src="{{ asset('img/expand.svg') }}" alt="" class="expand">
                    </div><!-- end profile -->
                </li>
            </ul><!-- end tools -->
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
