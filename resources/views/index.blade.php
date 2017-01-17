<!-- НАУЧИТЕСЬ ЗАКРЫВАТЬ ТЕГИ!!!! -->


@extends('layouts.app')
@section('styles')
@parent
<link rel="stylesheet" href="{{asset('media/css/index.css')}}"/>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 main_block">
            <div class="panel panel-default">
                <div class="panel-heading top_title">Добро пожаловать на сайт :)</div>

                <div class="panel-body">
				<center> <h2>Список товаров</h2> </center>
				
					@foreach($all as $one)
						<div  class="goods_items" >
						<h3  class="name" >{{$one->name}}</h3>
					
					<div class="img_d">	
						@if($one->picture == '-')
							<img src="{{asset('media/photos/1.jpg')}}">
						@else
							<img src="{{asset('media/photos/s_'.$one->picture)}}">
						
						@endif
						
						<div class="description" >{{$one->description}}</div>
						
						</div>
						
							<div class="cost" >{{$one->cost}} $</div>
						</div>
					@endforeach
					
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
