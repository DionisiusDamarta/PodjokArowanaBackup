@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            {{-- <x-jet-welcome /> --}}
                            @livewire('kasir.index')
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection
