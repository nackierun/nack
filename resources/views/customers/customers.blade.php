@extends('layouts.myapp')
@section('title')
Customers
@endsection
@section('content')
<h1>Customers</h1>
<form action="customers" method="POST" class="pb-5">
    <div class="input-group"><p>Name</p>
    <input type="text" name="name" value="{{ old('name') }}">
    </div>
<div class=" input-group"><p>Email</p><input type="email" name="email" value="{{ old('email') }}"></div>
    <div><button type="submit" class="btn btn-primary">Submit</button>
    @csrf</div>


    {{ $errors->first('name') }}
    {{ $errors->first('email') }}

</form>
<ul>
    @foreach ($customers as $customers)
<li> {{ $customers->name }}  <span class="text-muted">{{ $customers->email }}</span></li>

    @endforeach
</ul>

@endsection
