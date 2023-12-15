@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }} <span>{{Auth::user()->name}}</span> <span>{{Auth::user()->surname}}</span>
    </h2>
    
    <div class="row">
        <div class="col">
            {{-- PULSANTE APPARTAMENTI --}}
            <a href=" " class="btn btn-primary">
                I miei appartamenti
            </a>
        </div>

        <div class="col">
            {{-- PULSANTE AGGIUNGI APPARTAMENTO - Rotta alla Create --}}
            <a href=" " class="btn btn-success">
                Aggiungi un appartamento
            </a>
        </div>
    </div>
</div>
@endsection
