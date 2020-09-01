@extends('layout.main')
@section('content')
<div class="container">

@if($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
{{$error}}
</div>
@endforeach
@endif


<h1>Create new</h1>
<!-- Default form register -->
<form class="text-center border border-light p-5" action="{{route('store')}}" method="POST">

    {{csrf_field()}} <!-- required for insertion -->

    <p class="h4 mb-4">Add Student</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="fname">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="lname">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="phone">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
    </small>
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Add data</button>

</form>
</div>

<!-- Default form register -->
@endsection
