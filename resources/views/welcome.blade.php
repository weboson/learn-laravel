{{--подключает еще один blade--}}
@extends('layout')
{{--секция main - которую подключается через yield('main)--}}
@section('main')
    <h1>Hello, World!</h1>

{{--    подключение component--}}
{{--    <x-layout/>--}}
@endsection
