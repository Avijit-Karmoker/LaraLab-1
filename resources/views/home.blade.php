@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('todolist/insert') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">List Name</label>
                            <input type="text" class="form-control" name="list_name" id="" placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" id="" placeholder="">
                        </div>

                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
