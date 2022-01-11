@extends('layout.main')

@section('container')
<div class="section-header">
    <h1>Dashboard</h1>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-calendar-week"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Jumlah Kegiatan</h4>
                </div>
                <div class="card-body">
                    {{ $kegiatanCount }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Jumlah Surat Masuk</h4>
                </div>
                <div class="card-body">
                    {{ $suratMasukCount }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Jumlah Template Surat</h4>
                </div>
                <div class="card-body">
                    {{ $templateCount }}
                </div>
            </div>
        </div>
        
    </div>
    
@endsection

@section('aditionalScripts')    
    <script>!(function() {
        let e = document.createElement("script"),
            t = document.head || document.getElementsByTagName("head")[0];
        (e.src =
            "https://cdn.jsdelivr.net/npm/rasa-webchat/lib/index.js"),
        // Replace 1.x.x with the version that you want
        (e.async = !0),
        (e.onload = () => {
            window.WebChat.default({
                    initPayload: '/greet',
                    customData: {
                        language: "in"
                    },
                    socketUrl: "http://34.101.68.223/",
                    socketPath: "/socket.io/",
                    title: 'Chatbot RW 08',
                    subtitle: 'Selamat Datang! Sapa aku untuk memulai obrolan!'
                    // add other props here
                },
                null
            );
        }),
        t.insertBefore(e, t.firstChild);
    })();
</script>
@endsection