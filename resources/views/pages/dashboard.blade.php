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
        <div class="card">
            <div class="card-header">
                <h4>Informasi Chatbot</h4>
            </div>
            <div class="card-body">
                <p>
                    - Ketua RW08
                    <br>
                    - Informasi mengenai RW08 Kelurahan Sadang Serang
                    <br>
                    - Kepengurusan RW08
                    <br>
                    - Prgram Kerja
                    <br>
                    - Proses pengajuan surat menyurat
                    <br>
                    - Persyaratan surat surat :
                    <br>
                    - Permohonan Kartu Keluarga
                    <br>
                    - Permohonan surat keterangan / serba guna
                    <br>
                    - Permohonan surat kematian
                    <br>
                    - Permohonan pembuatan domisisli perusahaan
                    <br>
                    - Permohonan pembuatan SKM Rumah Sakit
                    <br>
                    - Permohonan pembuatan surat ahli waris
                    <br>
                    - Permohonan pembuatan SKTM (Surat Keterangan Tidak Mampu)
                    <br>
                    - Permohonan pembuatan surat berkelakuan baik
                    <br>
                    - Permohonan pembuatan surat nikah
                    <br>
                    - Pelayanan umum (pensiunan, legalisir, yang berhubungan dengan bank, keterangan harga jual tanah dan bangunan dan lain lain)
                    <br>
                    - Permohonan pembuatan surat kelahiran
                    <br>
                    - Permohonan pembuatan surat ijin tinggal
                    <br>
                    - Permohonan pembuatan surat pindah
                </p>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Keyword Yang Digunakan</h4>
            </div>
            <div class="card-body">
                <p>
                    greet
                    <br>
                    goodbye
                    <br>
                    affirm
                    <br>
                    deny
                    <br>
                    thank
                    <br>
                    ketua_rw
                    <br>
                    rw08
                    <br>
                    surat_step
                    <br>
                    surat
                    <br>
                    proker
                    <br>
                    surat_kk
                    <br>
                    surat_guna
                    <br>
                    surat_kematian
                    <br>
                    surat_dompersh
                    <br>
                    surat_skm
                    <br>
                    surat_waris
                    <br>
                    surat_sktm
                    <br>
                    surat_baik
                    <br>
                    surat_nikah
                    <br>
                    surat_layan
                    <br>
                    surat_lahir
                    <br>
                    surat_tinggal
                    <br>
                    surat_pindah
                    <br>
                    pengurus        
                </p>
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



            {{-- <div class="card">


              <div class="card-footer bg-whitesmoke">
                This is card footer
              </div>
            </div>


                            <div class="section-body">
        <div class="row">
            <div class="card-header">
                <h4>Keyword Yang Digunakan</h4>
            </div>
            <div class="card-body">
                <p>
                
                </p>
            </div>
        </div>        
    </div>


                         --}}