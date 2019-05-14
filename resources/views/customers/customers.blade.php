@extends('layouts.myapp')
@section('content')
<h1>Customers</h1>
<form action="customers" method="POST" class="pb-5">
    <div class="input-group">
<input type="text" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @csrf
</form>
<ul>
    @foreach ($customers as $customers)
<li> {{ $customers->name }}</li>

    @endforeach
</ul>

@endsection
