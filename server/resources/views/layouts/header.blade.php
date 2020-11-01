<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand logo" href="/">めしナビ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
            <a class="nav-link" href="{{ route('restaurants.index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('restaurants.index') }}">
            {{-- URLに含めて検索する事ができるGETがいい・アクションはそれを経て行うアクションへの誘導 --}}
            <input class="form-control mr-sm-2" type="search" placeholder="カテゴリー" name="category"> 
            <input class="form-control mr-sm-2" type="search" placeholder="お店の名前" name="name">

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>