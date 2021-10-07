@extends('layouts.master')

@section('content')
<h2 class="text-bold">{{ __("Deneme2") }}</h2>

<ul class="nav nav-tabs" role="tablist" style="margin-bottom: 15px;">
    <li class="nav-item">
        <a class="nav-link active" onclick="getHostname()" href="#hostname" data-toggle="tab">
            <i class="fas fa-server"></i> {{ __("Hostname") }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" onclick="guzzeleTest()" href="#guzzleTest" data-toggle="tab">
            <i class="fas fa-server"></i> {{ __("Guzzele Test") }}
        </a>
    </li>
</ul>

<div class="tab-content">
    <div id="hostname" class="tab-pane active">
        @include('hostname.main')
    </div>
    <div id="guzzleTest" class="tab-pane">
        <!--burada oluşturmuş olduğum view'i ekledim-->
        @include('guzzleTest.main')
    </div>
</div>
@endsection