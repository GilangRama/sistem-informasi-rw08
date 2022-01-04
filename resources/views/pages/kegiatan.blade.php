@extends('layout.main')

@section('container')
    <div class="col-lg-12">
            @if($errors->any())
            @foreach($errors->getMessages() as $this_error)
            <div class="alert alert-danger" role="alert">
                <i class="fas fa-exclamation-triangle  mr-3"></i> {{$this_error[0]}}
            </div> 
            @endforeach
            @endif 
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
            <i class="fas fa-check mr-3"></i> {{ Session('success') }} 
            </div>        
            @endif
        <div class="card">
            <div class="card-header">
                <h4>Daftar Kegiatan</h4>
            </div>
            <div class="col-12">
                <div class="button">
                    <a href="{{ route('kegiatan.create-kegiatan') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                            <th>id</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Penanggung Jawab</th>
                            <th>Izin</th>
                            <th>Detail</th>
                            <th>Daerah RT</th>
                            <th>Surat Masuk</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($dataKegiatan as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_kegiatan }}</td>
                            <td>{{ $item->tanggal_pelaksanaan }}</td>
                            <td>{{ $item->penanggung_jawab }}</td>
                            <td>{{ $item->izin }}</td>
                            <td>{{ $item->detail }}</td>
                            <td>{{ $item->daerah_RT }}</td>
                            <td>{{ $item->surat_masuks->nama_surat }}</td>
                            <td>
                                <a href="{{ url("edit-kegiatan",$item->id) }}"  class="btn btn-sm btn-info"> Edit </a> 
                                |
                                <form action="{{ route('kegiatan.delete-kegiatan', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger text-light delete-button"> Delete </button>
                                    
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                        {{ $dataKegiatan->links() }}                                                                      
                </div>
                <canvas id="myChart" height="158"></canvas>
            </div>
        </div>
    </div>
@endsection

@section('aditionalScripts')
    <script src="{{ asset('modules/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        $('.delete-button').click(function(event) {
            var form =  $(this).closest("form");
            event.preventDefault();
            swal({
                title: `Hapus Data?`,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
            });
        });
    </script>
@endsection