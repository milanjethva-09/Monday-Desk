@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Total Products</h5>
                <p class="card-text display-4">{{ $totalProducts }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Total Orders</h5>
                <p class="card-text display-4">{{ $totalOrders }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
