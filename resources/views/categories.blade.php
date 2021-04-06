@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end">
    <a href="{{ route('categories.create') }}" class="btn btn-success mb-1">Add Category</a>
</div>
<div class="card card-default">
    <div class="card-header">Categories</div>
    <div class="card-body">
    <table class="table table-striped">
        <thead>
                <tr>
                    <th scope="col">
                        Name
                    </th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($categories as $category)
                <tr scope="row">
                    <td>
                        {{$category->name}}
                    </td>
                </tr> 
                @endforeach
            </tbody>
    </table>
    </div>
</div> 


@endsection
{{-- <table>
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
</table> --}}