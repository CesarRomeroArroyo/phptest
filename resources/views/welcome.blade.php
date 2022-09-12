@extends('template.template')
@section('content')
<div class="card-header">
    <div class="d-flex">
        <div class="p-2 flex-grow-1">Sistema de reserva</div>
        <div class="p-2"><a href="{{ route('partners') }}">Socio</a></div>
        <div class="p-2"><a href="{{ route('boking.index') }}">Reservas</a></div>
        <div class="p-2"><a href="{{ route('seat.create') }}">Butacas</a></div>
    </div>
</div>
<div class="card-body">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('partner.index') }}" method="get">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="dni" checked>
                            <label class="form-check-label" for="inlineRadio1">Dni</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="name">
                            <label class="form-check-label" for="inlineRadio2">Nombre</label>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="search" placeholder="Buscar socio por dni" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="d-flex flex-wrap">

    </div>
</div>
@endsection
