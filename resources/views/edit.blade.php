@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Форма редактирования товара</div>

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

					<button type="submit" class="btn btn-default btn-block">Cохранить изменения</button>
					</form>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection