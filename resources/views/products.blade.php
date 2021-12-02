@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DATA FROM SECOND DATABASE</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
        <tr>
            <th>Product ID</th>
            <th>Product NAME</th>
        </tr>
        @foreach ($data as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->productname }}</td>
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
