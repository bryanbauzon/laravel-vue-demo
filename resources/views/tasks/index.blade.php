@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tasks
                        <a href="{{ route('task.create') }}"
                           class="btn btn-primary btn-sm float-right"
                           id="cancel">
                            New Task
                        </a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <task-list></task-list>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection