@extends('shared._layout')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
crossorigin=""></script>
<style>
        #map { height: 180px; }
        .fullwidth{
            width: 100vw;
        }
        .tron{            
            height: 40vh;
            background-color: black;
            background-image: url('img/bg.jpg');
            background-size: cover;
        }
        .titleText{
            font-size: 2.8em;
            -webkit-text-stroke: .8px black;
        }
        .strPoints{
            background-color: rgb(185, 67, 24);
            height:25vh;
            display: flex;
            justify-content: center;
            padding: 3vh;
            overflow-x: auto;
            box-shadow: inset 0 0 10px #111111;
        }
        .strPoint{      
            text-align: center;
            width: 200px;
            margin: 0 20px;
        }
        .strPoint img{
            display: inline-block;
            height: 20%;
        }

        .strPoint p{
            font-size: .8em;
            margin: 0;
            color: white;
        }
        .noselect {
        -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Old versions of Firefox */
                -ms-user-select: none; /* Internet Explorer/Edge */
                    user-select: none; /* Non-prefixed version, currently
                                        supported by Chrome, Edge, Opera and Firefox */
        }

        .katList{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 0 120px
        }

        .customCard{
            padding: 10px;
            background-color: #9c9c9c;
            width: 170px;
            text-align: center;
            margin: 10px;
            border-radius: 5px
        }

        .customCard p {
            margin: 0;
            color: white;
        }
        .partners{
            box-shadow: inset 0 0 10px #111111;
        }
        .partList{
            display: flex;
            justify-content: space-evenly;
            padding: 0 200px;
        }
        
        
        .partner img{
            height: 75px;
        }

        @media only screen and (max-width: 600px) {
            .titleText{
                font-size: 1.8em;
            }
            .strPoints{
                justify-content: left;
            }
            .strPoint{      
                width: 100vw;
            }
            .katList{
                padding: 0;
                max-height: 400px;
                overflow: auto
            }
            .customCard{
                padding: 5px;
                width: 40%;
            }
            .partList{
                padding: 0;
            }
            
            .partner img{
                height: 45px;
            }
        }
    </style>
    <div class="tron fullwidth">
        <div class="tronTitle" style="padding-top:15vh;">
            <h1 class="text-white text-center titleText noselect"><b>DISTRIBUTOR MATERIAL<br>
                KONSTRUKSI DAN INDUSTRI</b></h1>
        </div>
    </div>
    <div class="strPoints fullwidth">
        <div class="strPoint noselect">
            <img src="img/icon1.png" alt="str-point">
            <p><b>LAYANAN 24 JAM</b></p>
            <p>kami siap melayani anda 24 jam
                pemesanan dapat dilakukan
                melalui whatsapp atau
                nomor telepon</p>
        </div>
        <div class="strPoint noselect">
            <img src="img/icon2.png" alt="str-point">
            <p><b>BERKUALITAS</b></p>
            <p>bekerjasama dengan pabrikan
                terkemuka dengan kualitas SNI dan
                internasional</p>
        </div>
        <div class="strPoint noselect">
            <img src="img/icon3.png" alt="str-point">
            <p><b>BERPENGALAMAN</b></p>
            <p>Berdiri Sejak 1995 dan dipercaya
                sebagai salah satu distributor
                bahan konstruksi dan industri
                terlengkap</p>
        </div>
        <div class="strPoint noselect">
            <img src="img/icon4.png" alt="str-point">
            <p><b>GRATIS ONGKOS KIRIM</b></p>
            <p>untuk anda yang berlokasi di
                jabodetabek kami menyediakan 
                layanan pengiriman tanpa biaya</p>
        </div>
    </div>
    <div class="katalog p-3 pb-4 bg-dark">
        <h3 class="text-center  text-white"><b>KATALOG</b></h3>
        <div class="katList text-white mb-4">
            @foreach ( $katalog as $k)
            <div class="customCard" onclick="detailModal('{{ $k->detailref }}', this)">
                <img src="img/katalog/{{ $k->image }}" alt="pic" width="150" height="150">
                <p>{{ $k->content }}</p>
            </div>
            @endforeach

            {{-- <div class="customCard">
                <img src="img/katalog/Besi-Assental.jpg" alt="pic" width="150" height="150">
                <p>Besi Assental</p>
            </div> --}}
        </div>
    </div>
    <div class="partners p-3 pt-4" style="background-color: #dddddd">
        <h3 class="text-center"><b>PARTNER KAMI</b></h3>
        <div class="partList pt-4 mb-4">
            <div class="partner">
                <img src="img/partner/ks.png" alt="ks">
            </div>
            <div class="partner">
                <img src="img/partner/gg.png" alt="gg">
            </div>
            <div class="partner">
                <img src="img/partner/sas-logo.png" alt="sas">
            </div>
            <div class="partner">
                <img src="img/partner/spindo.png" alt="spindo">
            </div>
        </div>
    </div>
    <div class="hubungiKami bg-dark row p-4">
        <h3 class="text-center  text-white mb-4"><b>HUBUNGI KAMI</b></h3>
        <div class="col-md-4 text-center mb-2">
            <img class="m-1" src="img/logoMBL.png" alt="" style="width:20%">
            <p class="text-white m-1"><b>PT. Mandiri Baja Lestari</b></p>
            <p class="text-white m-0">Jl. Margomulyo Indah C27 Surabaya, East Java - Indonesia</p>
        </div>
        <div class="col-md-4 text-center mb-2">
            <p class="m-2 text-white"><i class="bi bi-telephone"></i> Telephone : 0121239231</p>
            <p class="m-2 text-white"><i class="bi bi-whatsapp"></i> Whatsapp : 0121239231</p>
            <p class="m-2 text-white"><i class="bi bi-envelope-at"></i> Email : Ini.Budi92@mandiribajalestari.com</p>
            <button type="button" class="btn btn-info m-2" onclick="openGmaps()">Google Maps</button>
        </div>
        <div class="col-md-4 text-center mb-2">
            <div id="map"></div>
        </div>
    </div>

    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header p-2">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <span id="itemName">Besi</span>
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <div class="row align-items-start">
                                        <div class="col-lg-3 col-md-6 text-center">
                                            <img src="http://127.0.0.1:8000/img/katalog/CNP.jpg" alt="" width="100%" style="max-height: 150px; max-width:200px">
                                        </div>
                                        <div class="col-lg-9 col-md-6 pd-2" id="descItem">
                                            blank
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Tabel Ukuran
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var map = L.map('map').setView([-6.3611514,106.8241031], 16);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 20,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        function openGmaps() { 
            window.open("https://www.google.co.id/maps/@-6.3611514,106.8241031,16.42z"); 
        }

        function detailModal(ref, el) {
            let modal = document.getElementById('detailModal')
            let detailModal = new bootstrap.Modal(modal)
            detailModal.show()
            let img = el.getElementsByTagName('img')[0].src
            modal.querySelector(".modal-body").getElementsByTagName("img")[0].src = img
            let itemName = el.getElementsByTagName('p')[0].innerHTML
            document.querySelector("#itemName").innerHTML = itemName

            fetch(`/desc/${ref}`)
            .then((response) => response.json())
            .then((data) => {
                document.querySelector("#descItem").innerHTML = data.content
            });

        }

    </script>
@endsection