@extends('layouts.myapp')
@section('title','Detail for ' . $customer->name)

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>detail for {{  $customer->name  }}</h1>
        </div>
    </div>

@endsection
