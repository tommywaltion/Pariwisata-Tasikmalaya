@extends('layout.Master')
@section('titles', 'Detail')
@section('stylesheet')
    @parent
    <style>
        .Top-Image {
            background-size: cover;
            background-image: url('{{ asset('Asset/img/').'/'.$data['background'] }}');
        }

        .Top-Image>p {
            font-size: 60px;
        }

        .Margining {
            margin-top: 100px;
            margin-bottom: 100px;
        }
    </style>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
         integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
         crossorigin=""></script>
@endsection
@section('content')
<div class="w-full h-[500px] flex text-center items-center justify-center Top-Image bg-center">
    <p class="text-white font-semibold">{{ $data["nama"] }}</p>
</div>
<div class="w-full h-[750px] flex flex-col">
    <div class="flex w-full items-center justify-center Margining">
        <div>
            <img src="{{ asset('Asset/img/').'/'.$data['image'] }}" alt="">
        </div>
        <div class="w-[50%] flex flex-col justify-evenly" style="margin-left:50px; height:75%">
            <h5 class="font-semibold text-3xl">{{ $data["nama"] }}</h5>
            <p>{{ $data["deskripsi"] }}</p>
        </div>
    </div>
    <div class="flex justify-evenly">
        <div class="bg-green-400 rounded-xl p-4 w-[15%]">
            <p>Harga</p>
            <h5 class="font-semibold text-2xl">50k/orang</h5>
        </div>
        <div class="bg-green-400 rounded-xl p-4 w-[15%]">
            <p>Penginapan</p>
            <h5 class="font-semibold text-2xl">10</h5>
        </div>
        <div class="bg-green-400 rounded-xl p-4 w-[15%]">
            <p>Kuliner</p>
            <h5 class="font-semibold text-2xl">5</h5>
        </div>
    </div>
</div>
<div class="container w-full h-[750px] flex justify-center items-center">
    <div id="map" class="w-full h-full"></div>
</div>
@endsection
@section("script")
<script>
    var map = L.map('map', { scrollWheelZoom: false }).setView([ {{ $data['latitude'] }} , {{ $data['longtitude']}}], 6);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        minZoom:5,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    var marker = L.marker([ {{ $data['latitude'] }} , {{ $data['longtitude']}}]).addTo(map);
    var popup = L.popup([{{$data['latitude']}}, {{$data['longtitude']}}], { content: '<p>{{ $data["nama"] }}</p><img src="{{ asset("Asset/img/")."/".$data["image"] }}" alt=""><p>{{ $data["deskripsi"] }}</p>'});
    marker.bindPopup(popup);
</script>
@endsection