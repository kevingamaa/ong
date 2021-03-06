@extends('layouts.dash')
@section('css')
    <style rel="stylesheet">
        
    </style>
@endsection
@section('content')
   

    <div class="row mt-4 shadow-lg">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('prejetoscreate.admin') }}" class=" btn btn-primary btn-lg float-right">
                    <i class="tim-icons icon-simple-add"></i> &nbsp; Adicionar 
                </a>
                <h2 class="card-title">Listando projetos</h2>
                <br>
                <hr>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($projetos as $p)
                    <div class="col-md-3 text-center">
                        <div class="card shadow p-3">
                            <h3 class="card-title text-truncate" style="max-width: 200px; ">{{ $p->title }}</h3>
                            <img src=" {{ asset('storage/'.$p->photo) }}" style="width: 200px; height:129px" class="ml-auto mr-auto">
                            <div class="card-body text-truncate" style="max-width: 400px; height: 100px">
                                @php
                                    echo $p->description 
                                @endphp
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('projetosedit.admin', $p->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="tim-icons icon-pencil"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{-- <script type="text/javascript" src="{{ asset('dash/js/plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('dash/js/plugins/bootstrap-fileinput/js/locales/pt.js') }}"></script> --}}
    <script type="text/javascript">
        // $("#input-b5").fileinput({
        //     showCaption: false, 
        //     dropZoneEnabled: false,
        //     showUpload: false,
        //     showPreview: true,
        //     allowedFileExtensions: ["jpg", "png", "gif"],
        // }); 
        // $('.file-input.file-input-new').find('.btn-file').find('span').html('Procurar')
        // $('#file').change(()=>{
        //     $("#cover").submit()
        // })
    </script>
@endsection