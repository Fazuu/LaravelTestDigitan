@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ONE TO MANY RELATIONSHIP WITH USERDETAILS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach ($data as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>

                </form>
            </td>
        </tr>
        @endforeach
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
