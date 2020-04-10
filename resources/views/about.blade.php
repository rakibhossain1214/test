@extends('master')

@section('sidebar')
<p>This is sidebar</p>
@parent

@endsection

@section('component')

@php
 $name = "Anup";
 echo $name;
@endphp

@endsection