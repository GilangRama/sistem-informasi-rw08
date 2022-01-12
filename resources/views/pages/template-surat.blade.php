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
                <h4>Daftar Surat Template</h4>
            </div>
            <div class="col-12">
                <div class="button">
                    <a href="{{ route('template-surat.create-template-surat') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                            <th>id</th>
                            <th>Nama Surat</th>
                            <th>File Surat</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($dataTemplateSurat as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_surat_template }}</td>
                            <td>{{ $item->file_surat }}</td>
                            <td>
                                <a href="{{ url("edit-template-surat",$item->id) }}"  class="btn btn-sm btn-info"> Edit </a> 
                                |
                                <form action="{{ route('template-surat.delete-template-surat', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger text-light delete-button"> Delete </button>
                                    
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                        {{ $dataTemplateSurat->links() }}                                                                      
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