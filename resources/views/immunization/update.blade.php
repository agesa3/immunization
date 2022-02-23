@extends('immunization.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Immunization</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('immunization.create') }}"> Create New Immunization</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<form action="{{ route('immunization.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Child Name:</strong>
                <input type="text" name="child_name" value="{{ $product->child_name }}" class="form-control" placeholder="Child Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Age:</strong>
                <input type="text" name="age" value="{{ $product->age }}" class="form-control" placeholder="Age">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vaccine Type:</strong>
                <input type="text" name="vaccine_type" value="{{ $product->vaccine_type }}" class="form-control" placeholder="Vaccine Type">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Doctor:</strong>
                <input type="text" name="doctor" value="{{ $product->doctor }}" class="form-control" placeholder="Doctor">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="date" value="{{ $product->date }}" class="form-control" placeholder="Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mother Name:</strong>
                <input type="text" name="mother_name" value="{{ $product->mother_name }}" class="form-control" placeholder="Mother Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Next Date:</strong>
                <input type="date" name="next_date" value="{{ $product->next_date }}" class="form-control" placeholder="Next Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection

