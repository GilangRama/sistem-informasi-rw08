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
    <div class="section-body">
        <div class="card-body">
            <div class="tab-content tab-bordered" id="myTab3Content">
                <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab2">
                    <div class="card">
                        <div class="card-header">
                            <h4>Keyword Untuk Chatbot</h4>
                        </div>
                        <div class="card-body">
                            <h5>greet</h5>
                            <h5>goodbye</h5>
                            <h5>affirm</h5>
                            <h5>deny</h5>
                            <h5>thank</h5>
                            <h5>ketua_rw</h5>
                            <h5>rw08</h5>
                            <h5>surat_step</h5>
                            <h5>surat</h5>
                            <h5>proker</h5>
                            <h5>surat_kk</h5>
                            <h5>surat_guna</h5>
                            <h5>surat_kematian</h5>
                            <h5>surat_dompersh</h5>
                            <h5>surat_skm</h5>
                            <h5>surat_waris</h5>
                            <h5>surat_sktm</h5>
                            <h5>surat_baik</h5>
                            <h5>surat_nikah</h5>
                            <h5>surat_layan</h5>
                            <h5>surat_lahir</h5>
                            <h5>surat_tinggal</h5>
                            <h5>surat_pindah</h5>
                            <h5>pengurus</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
            Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis iaculis tellus. Etiam ac vehicula eros, pharetra consectetur dui. Aliquam convallis neque eget tellus efficitur, eget maximus massa imperdiet. Morbi a mattis velit. Donec hendrerit venenatis justo, eget scelerisque tellus pharetra a.
            </div>
            <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
            Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa, gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem interdum molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor. Nam malesuada orci non ornare vulputate. Ut ut sollicitudin magna. Vestibulum eget ligula ut ipsum venenatis ultrices. Proin bibendum bibendum augue ut luctus.
            </div>
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