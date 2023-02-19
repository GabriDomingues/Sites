@extends('layouts.app')

@section('content')

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 900px">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#dashboard"></use></svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ url('admin/pedidos') }}" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#pedidos"></use></svg>
                    Pedidos
                </a>
            </li>
            <li>
                <a href="{{ url('admin/produtos') }}" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#produtos"></use></svg>
                    Produtos
                </a>
            </li>
            <li>
                <a href="{{ url('admin/clientes') }}" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#clientes"></use></svg>
                    Clientes
                </a>
            </li>
        </ul>
        <hr>
    </div>

@endsection
