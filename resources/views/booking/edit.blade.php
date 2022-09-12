@extends('template.template')
@section('content')
<div class="card-header">
    <div class="d-flex">
        <div class="p-2 flex-grow-1">Editar reserva</div>
        <div class="p-2"><a href="{{ route('boking.index') }}">atras</a></div>
    </div>

</div>
<div class="card-body">
    <div class="card">
        <div class="card-body">
            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('errors'))
            <div class="alert alert-danger alert-dismissible m-2" role="alert">
                {{ session('errors') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

        </div>
    </div>
    <div class="d-flex flex-wrap">
        @foreach($seats as $seat)
            <a href=" {{ route('bokingseat.save', [$booking, $seat]) }}" class="badge bg-secondary p-4 m-3 fs-3" role='button' type="submit">{{ $seat->position_x }}-{{ $seat->position_y }}</a>
        @endforeach
    </div>
</div>
@endsection
