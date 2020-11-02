@extends('layouts.app')
 
 @section('content')
 
  <head> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
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
      <tr>
        <td></td>
        <td>{{ $virus->Country }}</td>
        <td>{{ $virus->Total_cases }}</td>
        <td>{{ $virus->New_cases }}</td>
        <td>{{ $virus->Total_deaths }}</td>
            <td>{{ $virus->New_deaths }}</td>
            <td>{{ $virus->Total_Recovered }}</td>
      </tr>
      </tbody>
    </table>
    </div>
</body>
