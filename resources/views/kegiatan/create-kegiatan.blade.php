@extends('layout.main')

@section('container')
    <div class="main-section">
            <div class="section">
                <div class="section-header">
                    <h3>Create Kegiatan</h3>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Masukan data</h4>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12">
                                    <form action="{{ route('kegiatan.simpan-kegiatan') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama_kegiatan">Nama Kegiatan</label>
                                            <input name="nama_kegiatan" type="text" class="form-control" id="nama_kegiatan">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kegiatan</label>
                                            <input name="tanggal_kegiatan" type="text" class="form-control datetimepicker">
                                        </div>
                                        <div class="form-group">
                                            <label for="penanggung_jawab">Penanggung Jawab</label>
                                            <input name="penanggung_jawab" type="text" class="form-control" id="penanggung_jawab">
                                        </div>
                                        <div class="form-group">
                                            <label for="izin">Izin</label>
                                            <input name="izin" type="text" class="form-control" id="izin">
                                        </div>
                                        <div class="form-group">
                                            <label for="detail">Detail</label>
                                            <input name="detail" type="text" class="form-control" id="detail">
                                        </div>
                                        <div class="form-group">
                                            <label for="daerah_RT">Daerah RT</label>
                                            <input name="daerah_RT" type="text" class="form-control" id="daerah_RT">
                                        </div>
                                        <div class="form-group">
                                            <label>Surat Masuk</label>
                                            <select name="surat_masuks_id" class="form-control select2">
                                                <option value="">-Pilih Surat-</option>
                                                @foreach ($suratMasuk as $suratMasuk )
                                                    <option value="{{ $suratMasuk->id }}">{{ $suratMasuk->nama_surat }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button href="{{ route('kegiatan.simpan-kegiatan') }}" type="submit" class="btn btn-primary mb-4">Submit</button>
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