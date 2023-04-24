@extends('layouts.website')
@section('content')
    <div class="about-section">
        <h1>Hakkımızda</h1>
        <p></p>
        <p></p>
    </div>

    <h2 style="text-align:center">Takımımız</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="bc.png" alt="Hatice" style="width:30%">
                <div class="container">
                    <h2>Hatice Sezgin</h2>
                    <p class="title">Frontend Developer</p>
                    <p>Fırat Üniversitesi Yazılım Mühendisliği öürencisi </p>
                    <p>111111@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="ccb.png" alt="Bushra" style="width:60%">
                <div class="container">
                    <h2>Bushra Rakıa</h2>
                    <p class="title">Backend developer</p>
                    <p>Fırat Üniversitesi Yazılım Mühendisliği Öğrencisi </p>
                    <p>2222222@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

    </div>
@endsection
