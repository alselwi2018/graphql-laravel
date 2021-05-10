
@extends('welcome')
@section('contents')
<div class="container">
    <div class="row">
        @foreach ($breeds->message as $k)
        <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{$k}}" class="card-img-top" alt="...">
          </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
