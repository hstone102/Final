@extends('supervisorLayout')

@section('content')

<h2 class="textlarge m-l-lg"> Contacts </h2>

<ul>
  @foreach ($client->contacts as $item)
  <li class="textsmall m-l-xl"> <a href="/supervisorContactOutput/{{$item->id}}"> {{$item->date }} </a> </li>
  @endforeach
</ul>


<h2 class="textlarge m-l-lg"> Logs </h2>

<ul>
  @foreach ($client->logs as $one)
  <li class="textsmall m-l-xl"> <a href="/supervisorLogOutput/{{$one->id}}"> {{$one->date }}</a> </li>
  @endforeach
</ul>





@endsection
