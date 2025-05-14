<h1>Welcome to Login Page</h1>

{{"Basic login"}}<br>
{{"<h1>This is a page</h1>"}} <!-- this will not be rendered as HTML -->
{!!"<h1>This is a page</h1>"!!} <!-- this will be rendered as HTML -->

@php
    $name=["Rahat", "Doe", "Smith"];
@endphp
@foreach ($name as $nm)
@if ($nm=="Rahat")
    <h1>Welcome {{$nm}}</h1>

    
@endif
 
    
@endforeach