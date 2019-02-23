@extends('layouts.dash')

@section('content')
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="card">
                <div class="card-body">
                    <form class="inline-form" action="{{ route('projetosdestroy.admin', $projeto->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="clos btn btn-danger btn-sm">
                            excluir <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </form>
                    <form method="post" action="{{ route('prejetosupdate.admin', $projeto->id ) }}" enctype="multipart/form-data" >
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-12 text-danger text-center mb-4">
                                @if (session('error'))
                                    {{ session('error') }}
                                @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src='{{ asset('storage/'.$projeto->photo) }}' class="file-preview-image" style="width:100px"><hr>
                                <label class="control-label">Selecionar Foto</label>
                                <input id="input-b5" name="file" type="file">
                            </div>

                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Nome do parceiro</label>
                                    <input type="text" name="title" class="form-control" value="{{ $projeto->title }}" required>
                                </div>
                            </div>
                            <div class="col-md-12 px-md-1">
                               <div class="form-group">
                                    <label>Descrição do projeto</label>
                                    <textarea name="description" class="form-control" id="" cols="5" rows="3">{{ $projeto->description }}</textarea>
                                </div>
                            </div>
                        </div>
                      
                        <hr>
                       
                        <div class="col-12">
                            <button type="submit" class="btn btn-info float-left">
                                Atualizar
                            </button>
                            <a href="{{ route('projetos.admin') }}" class="btn btn-secondary float-right">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('dash/js/plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('dash/js/plugins/bootstrap-fileinput/js/locales/pt.js') }}"></script>
    <script type="text/javascript">
     
        $(document).ready(()=>{
          $("#input-b5").fileinput({
                showCaption: false, 
                dropZoneEnabled: false,
                showUpload: false,
                showPreview: false,
                showUploadedThumbs: true,
                allowedFileExtensions: ["jpg", "png", "gif"],
            }); 

            $('.file-input.file-input-new').find('.btn-file').find('span').html('Procurar')
            $("#input-b5").change(()=>{
                $('.file-preview-image').hide('slow')
            })
            $('button.fileinput-remove-button').click(()=>{
                $('.file-preview-image').show('3000')
            })
        })
    </script>
@endsection