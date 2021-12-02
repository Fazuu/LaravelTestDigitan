@extends('layouts.app')

@section('content')

<center>
<form action="{{ url('emailsent') }}" method="post" style="width: max-content;">
    @csrf
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="email" name="user_email" id="exampleInputEmail" class="form-control">
    </div>
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
@endsection