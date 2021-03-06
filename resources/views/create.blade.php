@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card card-header">Create category</div>
    <div class="card card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                        <li class="list-group-item text-danger">
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form action="{{route('categories.store')}}" method="POST">
            @csrf
            <div class="form form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name">
                <div>
                    <div class="form-group">
                        <button class="btn btn-success mt-2" type="submit">Add category</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection