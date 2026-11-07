@extends('layouts.app')

@section('content')

    <h2 class="fw-bold text-dark mb-4">
        ☀️ Dashboard Overview
    </h2>

    <div class="row g-4">

        <div class="col-md-6">
            <x-stat_card
                title="Total Users"
                value="{{$usersCount}}"
            />
        </div>

        <div class="col-md-6">
            <x-stat_card
                title="Total Orders"
                :value="$ordersCount"
                 {{-- this is another way to put php variable in view using " :" --}}
            />
        </div>

    </div>

@endsection
