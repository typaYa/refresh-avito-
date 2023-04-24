

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{$user->name}} </p>
                <p class="card-text">{{$user->email}} </p>
            </div>
        </div>
    </div>
    <div class="container">
        <button class="btn btn-primary" style="margin-top: 20px"><p><h4><a href="{{route('create')}}" style="text-decoration: none;list-style: none;color: black">Создать обьявление</a></h4></p></button>
    </div>
    <div class="container">
        <p><h3>Мои обьявления:</h3></p>
        @foreach($datas as $post)
            <div class="container" style="margin-bottom:20px ; ">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->description}}</p>
                        <p class="card-text">{{$post->price}}</p>
                        <form action="{{route('delete',$post->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Удалить">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

