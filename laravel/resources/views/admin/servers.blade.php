@extends('layouts.admin')

@section('content')
            <!-- Breadcrumb-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">Servers</li>
            </ol>
            <div class="container-fluid">
                <servers-component></servers-component>
            </div>

@endsection
