<link rel="stylesheet" href="{{asset('css/app.css')}}">
<form action="{{route('store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Название</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Описание</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Цена</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="price">
    </div>
    <input type="text" style="display: none" value="{{$user->email}}" name="username_login">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Выберете категорию</label>
        <select class="form-control" id="exampleFormControlSelect1" name="category">
            <option>Машины</option>
            <option>Хобби и отдых</option>
            <option>Товары для дома</option>
            <option>Животные</option>
            <option>Недвижимость</option>
        </select>
    </div>
    @foreach ($errors->all() as $error)
        <li style="color: red">{{ $error }}</li>
    @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
