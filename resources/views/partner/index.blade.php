@extends('template.template')
@section('content')
<div class="card-header">
    <div class="d-flex">
        <div class="p-2 flex-grow-1"><h5>Socios</h5></div>
        <div class="p-2"><a href="{{ route('partner.create')}}">Crear Socios</a></div>
        <div class="p-2"><a href="{{ route('bokings') }}">Atras</a></div>
    </div>
</div>
<div class="card-body">
    <ul class="list-group list-group-flush">


    </ul>
</div>
@endsection
