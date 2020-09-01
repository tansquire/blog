@extends('layout.main')
@section('content')
<div class="container">
<h1>Home Page</h1>
@if(session('successMsg'))
<div class="alert alert-success" role="alert">
    {{session('successMsg')}}
  </div>
@endif
<table class="table">
    <thead class="black white-text">
      <tr>
        <th scope="col">#</th>
        <th scope="col">FirstName</th>
        <th scope="col">LastName</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($students as $x)
        <tr>
        <th scope="row">{{$x->id}}</th>
        <td>{{$x->fname}}</td>
        <td>{{$x->lname}}</td>
        <td>{{$x->email}}</td>
        <td>{{$x->phone}}</td>
        <td><a class="fas fa-edit btn btn-primary btn-sm" href="{{route('edit',$x->id)}}"></a>
        <a class="fas fa-trash-alt btn btn-danger btn-sm" href="{{route('delete',$x->id)}}"></a>
        {{-- <form action="{{route('delete', $x->id)}}" method="POST" id="delete-form-{{$x->id}}" style="display: none;">
        {{csrf_field()}}
        {{method_field('delete')}}
        </form>
        <button onclick="if(confirm('Do you want to delete?'))
        {
            event.preventDefault();
            document.getElementById('delete-form-{{$x->id}}').submit();
        }
        else
        event.preventDefault();"
        class="btn btn-raised btn-danger btn-sm" href=" ">
        <i class="fas fa-trash-alt btn btn-danger btn-sm" arial-hidden="true"></i>

        </button> --}}
        </td>

        </tr>
        @endforeach

    </tbody>
  </table>
</div>
@endsection
