@extends('backend.layouts.app')
@section('main')
<div class="section-content-right">
    @include('backend.partials.topbar')
    <div class="main-content">
        <div class="main-content-inner">
            @yield('main-content')
        </div>
        <div class="bottom-page">
            <div class="body-text">Copyright © 2024 SurfsideMedia</div>
        </div>
    </div>
</div>
@endsection