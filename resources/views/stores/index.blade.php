@extends('base')

@section('content')
    <div class="container m-5">
        <div class="row">
            <div class="col-sm-4">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <livewire:stores.create/>
            </div>
            <div class="col-md-8">
                <livewire:stores.index/>
            </div>
        </div>
    </div>

@endsection
