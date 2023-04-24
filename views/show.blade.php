<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>show</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Главная</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Категории
                    </a>

                    <ul class="dropdown-menu">

                            @foreach($categories as $category)
                            <form action="{{route('category',$category)}}">
                            <button class="dropdown-item" type="submit"name="{{$category}}">{{$category}}</button>
                            </form>
                          @endforeach


                    </ul>

                </li>
                <li class="nav-item">
                    @if(Auth::check())
                    <a  href="{{route('home')}}" class="nav-link">Личный кабинет</a>

                    @else
                    <a  href="{{route('register')}}" class="nav-link">Авторизация</a>


                    @endif
                </li>

            </ul>
            <form class="d-flex" role="search" method="get" action="{{route('search')}}" >
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
        <div style="display: flex;flex-direction: row; flex-wrap: wrap">
        @foreach($posts as $post)
            <div class="container" style="margin-bottom:20px ; ">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->description}}</p>
                        <p class="card-text">{{$post->price}}р</p>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>

        @endforeach
        </div>

</body>
</html>
