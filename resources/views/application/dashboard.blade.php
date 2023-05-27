@extends('layouts.app')

@section('content')
   <!-- Main content -->
    <section class="content">
        <div class="main-container">
            <section>
                <div class="d-flex justify-content-start">
                    <div class="title">
                        <br>
                        <h3>Selamat Datang {{ auth()->user()->name}}</h3>
                    </div>
                </div>
            </section>
            <br>
            <section class="section">
                <div class="card">
                    <div class="card-title p-3">
                        <h4>Dashboard</h4>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection