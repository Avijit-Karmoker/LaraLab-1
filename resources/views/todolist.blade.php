@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="text-center text-success fw-bold fs-1">To-Do List</h5>
    <table class="table table-bordered bg-dark text-white">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Date</th>
                <th>Created</th>
                <th>Last Update</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todolists as $todolist)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $todolist->list_name }}</td>
                    <td>{{ $todolist->date }}</td>
                    <td>{{ $todolist->created_at->diffForHumans() }}</td>
                    <td>
                        @if ($todolist->updated_at == NULL)

                        @else
                            {{ $todolist->updated_at->format('d/m/Y h:i:s') }}
                        @endif
                    </td>
                    <td>
                        @if ($todolist->status == NULL)
                            <a href="{{ url('todolist/edit/post') }}/{{ $todolist->id }}" class="btn btn-warning btn-sm text-white">Done</a>
                        @else
                            <p class="badge bg-success mb-0 p-2">Done😊</p>
                        @endif
                    </td>
                </tr>
            @endforeach
            @if ($todolists->count() == 0)
                <td colspan="50" class="text-danger fw-bold text-center">No data found!</td>
            @endif
        </tbody>
    </table>

</div>

@endsection
