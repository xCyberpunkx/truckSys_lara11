@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show camion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>marque:</strong>
                {{ $camion->marque }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>couleur:</strong>
                {{ $camion->couleur }}
            </div>
        </div>
    </div>
</div>
@endsection
