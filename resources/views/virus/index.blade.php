@extends('layouts.app')
 
 @section('content')
 


<div class="container">
  <h2>Corona Virus And Cases Table </h2>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Country</th>
        <th>Total Cases</th>
        <th>New Cases</th>
        <th>Total_deaths</th>
            <th>New_deaths</th>
            <th>Total_Recovered</th>
      </tr>
    </thead>
    <tbody>
         @foreach($virus as $details)
      <tr>
        <td></td>
        <td>{{ $details->Country }}</td>
        <td>{{ $details->Total_cases }}</td>
        <td>{{ $details->New_cases }}</td>
        <td>{{ $details->Total_deaths }}</td>
        <td>{{ $details->New_deaths }}</td>
        <td>{{ $details->Total_Recovered }}</td>
      </tr>
      
      @endforeach
      </tbody>
    </table>
    </div>
    
    @endsection
