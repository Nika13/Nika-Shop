@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Форма добавления товара</div>

                <div class="panel-body">
				
					<form method='POST' action='home' enctype='multipart/form-data'>
					{{csrf_field()}}
						  <div class="form-group">
							<label for="exampleInputName1">Название</label>
							<input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Введите название товара">
						  </div>
						  <div class="form-group">
							  <label for="exampleInputCost1">Стоимость</label>
								<div class="input-group">
								  <input type="text" class="form-control" id="exampleInputCost" name="cost" placeholder="Введите стоимость товара">
								  <div class="input-group-addon">$</div>
								</div>
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">Описание</label>
							<textarea class="form-control" name="description" rows="3"></textarea>
						  </div>
						  <div class="form-group">
						    <label for="category">Категория</label>
							<select class="form-control" name="category">
							  <option value=1>Верхняя одежда</option>
							  <option value=2>Нижняя одежда</option>
							  <option value=3>Платья</option>
							  <option value=4>Аксессуары</option>
							  <option value=5>Головные уборы</option>
							</select>
						  </div>
						  <div class="form-group">
							<label for="exampleInputFile">Выберите файл</label>
							<input type="file" name="picture1" id="exampleInputFile">
						  </div>
						  <div class="checkbox">
							<label>
								<input type="checkbox" name="checkbox" id="checkbox">Показывать товар
							</label>
						  </div>
						  <button type="submit" class="btn btn-success">Добавить</button>
						</form>
						<div class='goods'>
							@foreach ($all as $one)
							<div class="each_good">
								<div class='menu'>			
									<a href="{{asset('/home/edit/'.$one->id)}}" class='btn btn-block btn-default'>Редактировать</a>
									<a href="{{asset('home/delete/'.$one->id)}}" class='btn btn-block btn-default'>Удалить</a>
								</div>
								<div class='home'>
									{{$one->name}}
								</div>
								<div class='picture'>
									@if($one->picture == '-')
										<img src="{{asset('media/photos/1.jpg')}}">
									@else
										<img src="{{asset('media/photos/s_'.$one->picture)}}">
									@endif
								</div>
							<br style='clear:both'/>	
							</div>
							@endforeach
							</div>
							{!!$all->links()!!}
						</div>	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
