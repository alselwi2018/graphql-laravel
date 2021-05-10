@extends('welcome')

@section('contents')
<div class="container text-center pt-4">
@if(Session::has('success'))
    <div class="alert alert-success" role= "alert">
        <strong>Saved </strong>
            {!! session('success') !!}
    </div>
@endif

<form action="{{ route('breed.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <div id="emailHelp" class="form-text">Click on button to Save breeds to database</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <div>

  </div>
</div>
@endsection
