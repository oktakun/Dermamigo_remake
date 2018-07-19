@extends('admin.layout.home')
@section('title', "Dashboard Admin Deramigo")
@section('content')


<div style="width:50%;">
    {!! $chartjs->render() !!}
</div>


@stop