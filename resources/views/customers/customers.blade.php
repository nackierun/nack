@extends('layouts.myapp')
@section('title')
Customers
@endsection
@section('content')
<div class="row col-10">


<h1 class="pr-5">Customers</h1>
<div class="row">


<form action="customers" method="POST" class="pb-5">
    <div class="form-group col-md-6">
        <p>Name</p>
    <input type="text" name="name" value="{{ old('name') }}"><!--ไม่รีเซทฟิลด์ -->
    </div>

<div class="form-group col-md-6">
    <p>Email</p>
    <input type="email" name="email" value="{{ old('email') }}"><!--ไม่รีเซทฟิลด์ -->
</div>


  <div class="form-group col-md-6">
    <label for="active">Status</label>
    <select class="form-group" name="active" id="active">
          <option value="" aria-disabled="true">Select one</option>
          <option value="1">Active</option>
          <option value="0">Inactive</option>
      </select>
  </div>

  <div class="form-group col-md-6">
    <label for="company_id">company</label>
    <select class="form-group" name="company_id" id="company_id">
          @foreach ($companies as $company)
    <option value="{{ $company->id }}">{{ $company->name }}</option>

          @endforeach
      </select>
  </div>

    <div>
        <button type="submit" class="btn btn-primary col-md-6">บันทึก</button>
        @csrf
    </div>

    <!-- แจ้งเตือนฟิลว่าง -->
    {{ $errors->first('name') }}
    {{ $errors->first('email') }}
    {{ $errors->first('active') }}

</form>
</div>
<div class="row col-sm-6">



<!-- -->
<div class="col-6">
<ul>
    <h2>Active Users</h2>
    @foreach ($activecustomers as $activecustomers)
<li> {{ $activecustomers->name }}  <span class="text-muted">({{ $activecustomers->company->name }})</span></li>

    @endforeach
</ul>
</div>
<div class="col-6">
<ul>
    <!-- -->
    <h2>Inactive Users</h2>
    @foreach ($inactivecustomers as $inactivecustomers)
<li> {{ $inactivecustomers->name }}  <span class="text-muted">({{ $inactivecustomers->company->name }})</span></li>

    @endforeach



</ul>
<ul>
    <div class = "col-md-6">
            @foreach ($companies as $company)

        <h3>{{ $company->name }}</h3>
        @foreach ($company->customers as $customer)
        <li>{{ $customer->name }}</li>

        @endforeach

            @endforeach

    </div>
</ul>
</div>

</div>
</div>

@endsection
