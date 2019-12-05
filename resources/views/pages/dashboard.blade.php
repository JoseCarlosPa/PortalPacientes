@extends('layouts.app', [
    'parentSection' => 'dashboards',
    'elementName' => 'dashboard'
])

@section('content')
    @component('layouts.headers.auth')
        @component('layouts.headers.breadcrumbs')
            @slot('title')
                {{ __('Inicio') }}
            @endslot

            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Inicio') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Inicio') }}</li>
        @endcomponent

    @endcomponent


@endsection

