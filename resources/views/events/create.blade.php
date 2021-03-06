@extends('layouts.admin')

@section('addevents')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/admin') }}">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
              <a href="{{ route('events.index') }}">Events</a>
          </li> 
          <li class="breadcrumb-item active">Add Event</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            Add Event
        </div>
          <div class="card-body">
            <div>
            {{-- Using the Laravel HTML Form Collective to create our form --}}
            {{ Form::open(array('route' => 'events.store', 'enctype' => 'multipart/form-data')) }}

            <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('category', 'Category') }}  
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
            <br>

            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('date', 'Date') }}
            {{ Form::text('date', null, array('class' => 'form-control', 'id' => 'datepicker')) }}
            <br>

            {{Form::file('image')}}
            <br> 
            <br> 

            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }} 
            {{ Form::close() }}
            </div>
          </div>
        </div>

      </div>
@endsection