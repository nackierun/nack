@extends('layouts.myapp')
@section('title')

@endsection
@section('content')


    <form action="/company" method="post">
        <div class="form-group">
            <label for="companies">Add companies</label>
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

    </form>



@endsection
