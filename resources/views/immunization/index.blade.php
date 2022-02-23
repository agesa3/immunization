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
   
    <!-- <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Child Name</th>
            <th>Age</th>
            <th>Vaccine Type</th>
            <th>Doctor</th>
            <th>Date</th>
            <th>Mother Name</th>
            <th>Next Date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($immunizations as $immunization)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $immunization->child_name }}</td>
            <td>{{ $immunization->age }}</td>
            <td>{{ $immunization->vaccine_type }}</td>
            <td>{{ $immunization->doctor }}</td>
            <td>{{ $immunization->date }}</td>
            <td>{{ $immunization->mother_name }}</td>
            <td>{{ $immunization->next_date }}</td>
            <td>
                <form action="{{ route('immunization.destroy',$vaccination->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('immunization.show',$vaccination->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('immunization.edit',$vaccination->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table> -->
<!--       
     {!! $immunizations->links() !!} -->
     