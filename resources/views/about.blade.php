<!-- <h1> {{$name}} </h1> -->
<!-- <h2> {{rand()}} </h2> -->

@if($name=="Teachers")
<h2>This is your  {{$name}} </h2>
@elseif($name=="Rahatul")
<h2>This is Rahatul</h2>
@else
<h2>This is not Rahat</h2>
@endif

@foreach($users as $user)
<h2> {{$user}} </h2>
@endforeach