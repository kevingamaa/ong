@extends('layouts.dash')
@section('css')
    <style rel="stylesheet">
        
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="com-md-12 w-100" style='background: url("{{ asset('dash/img/img_3115.jpg') }}") no-repeat center center; background-size: cover; height: 400px'>
            <form action="" method="POST" enctype="multipart/form-data" style="" id="cover">
                @csrf
                @method('PATCH')
                <label for="file" class="btn btn-warning  shadow-lg" >
                    Trocar capa
                </label>
                
                <input id="file" name="file" type="file"  hidden>
            </form>
        </div>
    </div>
  



    <div class="row mt-4 shadow-lg">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('parceirosCreate.admin') }}" class=" btn btn-primary btn-lg float-right">
                    <i class="tim-icons icon-simple-add"></i> &nbsp; Adicionar 
                </a>
                <h2 class="card-title">Listando parceiros</h2>
                <br>
                <hr>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($parceiros as $p)
                    <div class="col-md-3 text-center">
                        <div class="card shadow p-3">
                            <h3 class="card-title">{{ $p->nome }}</h3>
                            <img src=" {{ asset('storage/'.$p->logo) }}" style="width: 200px; height:129px" class="ml-auto mr-auto">
                            <div class="card-body ">
                                web site <a href="{{ $p->referencia }}"> @php $link = explode('//', $p->referencia); echo $link[1] @endphp </a>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('parceirosEdit.admin', $p->id) }}" class="btn btn-sm btn-outline-primary">
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
    <script type="text/javascript" src="{{ asset('dash/js/plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dash/js/plugins/bootstrap-fileinput/js/locales/pt.js') }}"></script>
    <script type="text/javascript">
        $("#input-b5").fileinput({
            showCaption: false, 
            dropZoneEnabled: false,
            showUpload: false,
            showPreview: true,
            allowedFileExtensions: ["jpg", "png", "gif"],
        }); 
        // $('.file-input.file-input-new').find('.btn-file').find('span').html('Procurar')
        $('#file').change(()=>{
            $("#cover").submit()
        })
    </script>
@endsection