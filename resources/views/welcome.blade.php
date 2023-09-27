@extends('layouts.layout')
@section("content")
      <p> my name is {{$name}} with the email {{$email}}</p>
     @if($age === 20)
     <p> Your age is {{$age}}</p>
     @else
     <p>helo sam</p>
     @endif
  @endsection
 