
@extends('welcome')
@section('contents')
<div class="container ">
    <div class="col-12">

        <div class="text-center">
        <div class="card" style="width: 18rem;">
            <img src="{{$random->message}}" class="card-img-top" alt="...">
          </div>
        </div>
    </div>
</div>
@endsection
