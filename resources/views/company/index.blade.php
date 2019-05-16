@extends('layouts.myapp')
@section('title')

@endsection
@section('content')

<div class="col-sm-1-12">
    <h2>company</h2>

    <p><a href="company/create" >Add Company</a></p>
    @foreach ($companies as $company)
        <li>{{ $company->id }}: {{ $company->name }} phone: {{ $company->phone }}</li>

    @endforeach

</div>




@endsection
