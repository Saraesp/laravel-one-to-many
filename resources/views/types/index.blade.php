@extends('layouts.admin');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div class="d-flex justify-content-between">
                 <div>
                    <h2>Elenco Tipologie</h2>
                </div>
                <div>
                    <a href="{{route('admin.types.create')}}" class="btn btn-sm btn-primary">Aggiungi Post</a>
                </div>
            </div>
        </div>
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Slug</th>
                    <th>Azioni</th>
                </thead>

                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 