@extends('layout.main')

@section('container')
    <div class="main-section">
            <div class="section">
                <div class="section-header">
                    <h3>Create Surat</h3>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Masukan data</h4>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12">
                                    <form action="{{ route('surat.simpan-surat') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama_surat">Nama Surat</label>
                                            <input name="nama_surat" type="text" class="form-control" id="nama_surat">
                                        </div>
                                        <div class="form-group">
                                            <label for="pengirim_surat">Pengirim Surat</label>
                                            <input name="pengirim_surat" type="text" class="form-control" id="pengirim_surat">
                                        </div>
                                        <div class="form-group">
                                            <label>File Surat</label>
                                            <input name="file" type="file" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button href="{{ route('surat.simpan-surat') }}" type="submit" class="btn btn-primary mb-4">Submit</button>
                                        </div>
                                    </form>                                   
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>       
        </div>
    </div>
@endsection