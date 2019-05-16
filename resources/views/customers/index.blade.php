@extends('layouts.myapp')
@section('title')
Customers
@endsection
@section('content')
<div class="row">


    <h1 class="pr-5">Customers List</h1>
    <p><a href="customers/create">Add Customers</a> </p>

</div>

        @foreach($customers as $customer)

            <div class="row">
                <div class="col-md-2">
                    ID:{{  $customer->id  }}
                </div>
                <div class="col-md-4"><a href="/customers/{{  $customer->id  }}">{{  $customer->name  }}</a> </div>
                <div class="col-md-4">{{  $customer->company->name  }}</div>
                <div class="col-md-2">{{  $customer->active  }}</div>
            </div>
            @endforeach



@endsection
