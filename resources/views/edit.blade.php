@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">����� �������������� ������</div>

                <div class="panel-body">
				<form method='POST' action='home' enctype='multipart/form-data'>
					{{csrf_field()}}
						  <div class="form-group">
							<label for="exampleInputName1">��������</label>
							<input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="������� �������� ������">
						  </div>
						  <div class="form-group">
							  <label for="exampleInputCost1">���������</label>
								<div class="input-group">
								  <input type="text" class="form-control" id="exampleInputCost" name="cost" placeholder="������� ��������� ������">
								  <div class="input-group-addon">$</div>
								</div>
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">��������</label>
							<textarea class="form-control" name="description" rows="3"></textarea>
						  </div>
						  <div class="form-group">
						    <label for="category">���������</label>
							<select class="form-control" name="category">
							  <option value=1>������� ������</option>
							  <option value=2>������ ������</option>
							  <option value=3>������</option>
							  <option value=4>����������</option>
							  <option value=5>�������� �����</option>
							</select>
						  </div>
						  <div class="form-group">
							<label for="exampleInputFile">�������� ����</label>
							<input type="file" name="picture1" id="exampleInputFile">
						  </div>
						  <div class="checkbox">
							<label>
								<input type="checkbox" name="checkbox" id="checkbox">���������� �����
							</label>
						  </div>

					<button type="submit" class="btn btn-default btn-block">C�������� ���������</button>
					</form>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection