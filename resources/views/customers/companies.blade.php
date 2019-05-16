@extends('layouts.myapp')
@section('title')

@endsection
@section('content')


<form action="companies" method="post">
    <div class="form-group">
        <label for="companies">+companies</label>
        <p>company name</p>
        <input type="text" name="name" id="name" class="form-control" placeholder="" value="{{ old('name') }}">
        <p>phone</p>
        <input type="text" name="phone" id="phone" class="form-control" placeholder="" value="{{ old('phone') }}">
    </div>

    <div>
        <button type="submit" class="btn btn-primary col-md-6">บันทึก</button>
        {{ $errors->first('name') }}
        {{ $errors->first('phone') }}
        @csrf
    </div>
    <div class="col-sm-1-12">
        <h2>company</h2>
        @foreach ($companies as $company)
        <li>{{ $company->id }}: {{ $company->name }} phone: {{ $company->phone }}</li>

        @endforeach

    </div>
</div>
</form>



@endsection
