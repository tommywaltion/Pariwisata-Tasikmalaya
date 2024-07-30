@extends('layout.Master')
@section('titles','Home')
@section('stylesheet')
    @parent
    <style>
        .container {
            padding: 0 0 !important;
            margin: 0 0 !important;
        }

        .top_title {
            min-height: 500px;
            justify-content: center;
            text-align: center;
            color: white;
            align-items: center;
            display: flex;
            background-image: url('{{ asset('Asset/img/Wisata-di-Gunung-Galunggung 1.png') }}');
            background-size: cover;
            background-position: center;
            flex-direction: column;


        }

        .Subtext {
            width: 60%;
        }

        @media (max-width: 768px) {

            .dokter-list {
                padding: 20px 0 !important;
                justify-content: center !important;
            }

            .dokter-list>ul {
                justify-content: space-around !important;
            }

            .template-artikel-image-wrapper>img {
                transform: translate(-50%, 0) !important;
            }
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
<div class="body">
    <div class="container w-full h-[500px]">
        <div class="top_title">
            <h1 class="font-bold font-weight-bold text-5xl tracking-tight">Explore Tasikmalaya tourism with a smile</h1>
            <br>
            <div class="Subtext">Temukan keindahan alam dan kekayaan budaya Tasikmalaya, sebuah permata di provinsi Jawab Barat. Dikelilingi oleh Pegunungan yang menakjubkan, pantai yang indah dan masih banyak lagi</div>
            <br><br>
            <div class="relative block w-[75%]">
                <span class="sr-only">Search</span>
                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <img class="h-5 w-5 fill-slate-300" viewbox="0 0 20 20" src="{{ asset('Asset/img/carbon_location-filled.png') }}" alt="">
                </span>
                <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search"/>
              </div>
        </div>
    </div>
    <div class="container w-full h-[750px] flex justify-center items-center">
        <div class="w-[50%] h-full">
            <img class="absolute w-[23%] h-[80%] top-[600px] left-[50px]" src="{{ asset('Asset/img/448410725_340374312263742_5278460482871720871_n 2.png') }}" alt="">
            <img class="absolute w-[18%] h-[60%] top-[750px] left-[230px]" src="{{ asset('Asset/img/448721964_835706167993545_2460616316365667864_n 1.png') }}" alt="">
            <img class="absolute w-[18%] h-[60%] top-[580px] left-[400px]" src="{{ asset('Asset/img/437869864_1429329694620147_7048652453393773567_n 1.png') }}" alt="">
        </div>
        <div class="w-[50%] h-[40%] justify-between flex flex-col">
            <h3 class="font-bold text-3xl">Wisata Kabupaten Tasikmalaya</h3>
            <div class="text-1xl">Tasikmalaya, Sebuah kota di provinsi Jawa Barat, Indonesia, memiliki pesona wisata yang memukau dengan kekayaan alam, budaya, dan kerajinan tangan yang khas. Kota ini dikelilingi oleh pegunungan dan menawarkan pemandangan alam yang menakjubkan.</div>
            <div class="flex flex-col w-[50%]">
                <div class="flex justify-between">
                    <div>
                        <div class="font-bold text-3xl">100+</div>
                        <div>Pengunjung</div>
                    </div>
                    <div>
                        <div class="font-bold text-3xl">15</div>
                        <div>Wisata</div>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div>
                        <div class="font-bold text-3xl">50</div>
                        <div>Penginapan</div>
                    </div>
                    <div>
                        <div class="font-bold text-3xl">80</div>
                        <div>Kuliner</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container w-full h-[750px] flex justify-center items-center">
        <div id="map" class="w-full h-full"></div>
    </div>
    <div class="continer w-full h-[2000px] flex justify-center">
        <div class="flex flex-wrap justify-evenly [&>.child-of-light]:px-[10px] [&>.child-of-light]:py-[10px] [&>.child-of-light]:m-[10px] [&>.child-of-light]:bg-white [&>.child-of-light]:rounded-[10px] [&>.child-of-light]:shadow-2xl">
            @foreach ($mapData as $map)
            <div class="child-of-light flex flex-col justify-between w-[25%] m-4 p-4 ">
                <img src="{{ asset('Asset/img/').'/'.$map['image'] }}" alt="">
                <div class="py-2">{{ $map["nama"] }}</div>
                <div class="flex justify-between">
                    <div>
                        Rp.50.000,00/orang
                    </div>
                    <a class="flex" href="{{ route('Detail', $loop->index) }}">
                        <img class="py-1" src="{{ asset('Asset/img/Arrow-Selengkapnya.png') }}" alt="">
                        <div>Selengkapnya</div>
                    </a>
                </div>
            </div>
            @endforeach
            {{-- <div class="flex justify-evenly w-full [&>.child-of-light]:px-[10px] [&>.child-of-light]:py-[10px] [&>.child-of-light]:m-[10px] [&>.child-of-light]:bg-white [&>.child-of-light]:rounded-[10px] [&>.child-of-light]:shadow-2xl">
                <div class="child-of-light flex flex-col justify-between">
                    <img src="{{ asset('Asset/img/Taufiq-Fadhilah-superadventure-com 1.png') }}" alt="">
                    <div class="py-2">Gunung Gelanggung</div>
                    <div class="flex justify-between">
                        <div>
                            Rp.50.000,00/orang
                        </div>
                        <a class="flex" href="#">
                            <img class="py-1" src="{{ asset('Asset/img/Arrow-Selengkapnya.png') }}" alt="">
                            <div>Selengkapnya</div>
                        </a>
                    </div>
                </div>
                <div class="child-of-light flex flex-col justify-between">
                    <img src="{{ asset('Asset/img/Pantai-Karang-Tawulan-1729837558 1.png') }}" alt="">
                    <div class="py-2">Pantai Karang Tawulan</div>
                    <div class="flex justify-between">
                        <div>
                            Rp.50.000,00/orang
                        </div>
                        <a class="flex" href="#">
                            <img class="py-1" src="{{ asset('Asset/img/Arrow-Selengkapnya.png') }}" alt="">
                            <div>Selengkapnya</div>
                        </a>
                    </div>
                </div>
                <div class="child-of-light flex flex-col justify-between">
                    <img src="{{ asset('Asset/img/6434203e3b20c 1.png') }}" alt="">
                    <div class="py-2">Kebuh Teh Taraju</div>
                    <div class="flex justify-between">
                        <div>
                            Rp.50.000,00/orang
                        </div>
                        <a class="flex" href="#">
                            <img class="py-1" src="{{ asset('Asset/img/Arrow-Selengkapnya.png') }}" alt="">
                            <div>Selengkapnya</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex justify-evenly w-full [&>.child-of-light]:px-[10px] [&>.child-of-light]:py-[10px] [&>.child-of-light]:m-[10px] [&>.child-of-light]:bg-white [&>.child-of-light]:rounded-[10px] [&>.child-of-light]:shadow-2xl">
                <div class="child-of-light flex flex-col justify-between">
                    <img src="{{ asset('Asset/img/20160714kampung_naga.jpg 1.png') }}" alt="">
                    <div class="py-2">Kampung Naga</div>
                    <div class="flex justify-between">
                        <div>
                            Rp.50.000,00/orang
                        </div>
                        <a class="flex" href="#">
                            <img class="py-1" src="{{ asset('Asset/img/Arrow-Selengkapnya.png') }}" alt="">
                            <div>Selengkapnya</div>
                        </a>
                    </div>
                </div>
                <div class="child-of-light flex flex-col justify-between">
                    <img src="{{ asset('Asset/img/landmark-situ-sanghyang 1.png') }}" alt="">
                    <div class="py-2">Situ Sanghiyang</div>
                    <div class="flex justify-between">
                        <div>
                            Rp.50.000,00/orang
                        </div>
                        <a class="flex" href="#">
                            <img class="py-1" src="{{ asset('Asset/img/Arrow-Selengkapnya.png') }}" alt="">
                            <div>Selengkapnya</div>
                        </a>
                    </div>
                </div>
                <div class="child-of-light flex flex-col justify-between">
                    <img src="{{ asset('Asset/img/Alun-alun-Singaparna-di-Kabupaten-Tasikmalaya-kini-memiliki-wajah-baru-setelah-Pemdaprov-Jabar-setelah-dilakukan-revitalisasi 1.png') }}" alt="">
                    <div class="py-2">Alun-alun Singaparna</div>
                    <div class="flex justify-between">
                        <div>
                            Rp.50.000,00/orang
                        </div>
                        <a class="flex" href="#">
                            <img class="py-1" src="{{ asset('Asset/img/Arrow-Selengkapnya.png') }}" alt="">
                            <div>Selengkapnya</div>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
@section("script")
<script>
    var map = L.map('map', { scrollWheelZoom: false }).setView([-7.319563, 108.202972], 6);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        minZoom:5,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    @foreach ($mapData as $maps)
        var marker = L.marker([ {{ $maps['latitude'] }} , {{ $maps['longtitude']}}]).addTo(map);
        var popup = L.popup([{{$maps['latitude']}}, {{$maps['longtitude']}}], { content: '<a href={{ route('Detail', $loop->index) }}>{{ $maps["nama"] }}</a><img src="{{ asset("Asset/img/Taufiq-Fadhilah-superadventure-com 1.png") }}" alt=""><p>{{ $maps["deskripsi"] }}</p>'});
        marker.bindPopup(popup);
    @endforeach

    // var marker = L.marker([-7.747730793936072, 108.01046689999998]).addTo(map);
    // var popup = L.popup([-7.747730793936072, 108.01046689999998], {content: '' });
    // marker.bindPopup(popup);
    // var marker = L.marker([-7.764294801470705, 108.05997416931922]).addTo(map);
    // marker.bindPopup("Pantai Sindangkerta");
    // var marker = L.marker([-7.7715607182505915, 108.0863278]).addTo(map);
    // marker.bindPopup("Pantai Pamayangsari");
    // var marker = L.marker([-7.813173932260589, 108.29975275355454]).addTo(map);
    // marker.bindPopup("Pantai Karang Tawulan");
    // var marker = L.marker([-7.266070081079858, 108.07149460202706]).addTo(map);
    // marker.bindPopup("Gunung Galunggung");
    // var marker = L.marker([-7.265709146317561, 108.09448841812403]).addTo(map);
    // marker.bindPopup("Cipanas Gunung Galunggung");
    // var marker = L.marker([-7.272541480956916, 108.09220976577905]).addTo(map);
    // marker.bindPopup("Citiis Galunggung");
    // var marker = L.marker([-7.303812395545981, 108.06539401074126]).addTo(map);
    // marker.bindPopup("Batu Mahpar Galunggung");
    // var marker = L.marker([-7.143423049427282, 108.16990042172397]).addTo(map);
    // marker.bindPopup("Cipanas Cipacing");
    // var marker = L.marker([-7.401410711189457, 108.15057537134628]).addTo(map);
    // marker.bindPopup("Situ Sanghiyang");
    // var marker = L.marker([-7.36095214207572, 107.99235720532943]).addTo(map);
    // marker.bindPopup("Kampung Naga");
    // var marker = L.marker([-7.466750175720626, 107.9477703]).addTo(map);
    // marker.bindPopup("Kebun Teh Taraju");
    // var marker = L.marker([-7.311574679201504, 108.23942157116488]).addTo(map);
    // marker.bindPopup("Taman Karang Resik");
    // var marker = L.marker([-7.5711745881966035, 108.074214]).addTo(map);
    // marker.bindPopup("Goa Safarwadi Pamijahan");
    // var marker = L.marker([-7.349906401965165, 108.11059378256738]).addTo(map);
    // marker.bindPopup("Alun-alun Singaparna");
</script>
@endsection