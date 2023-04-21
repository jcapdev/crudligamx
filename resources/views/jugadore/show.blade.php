@extends('layouts.app')

@section('template_title')
    {{ $jugadore->name ?? "{{ __('Show') Jugadore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Jugadore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('jugadores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $jugadore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Appepat:</strong>
                            {{ $jugadore->appepat }}
                        </div>
                        <div class="form-group">
                            <strong>Appmat:</strong>
                            {{ $jugadore->appmat }}
                        </div>
                        <div class="form-group">
                            <strong>Posicion:</strong>
                            {{ $jugadore->posicion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
