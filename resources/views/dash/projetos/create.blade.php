@extends('layouts.dash')

@section('content')
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('prejetosstore.admin') }}" enctype="multipart/form-data" class="dropzone dz-clickable" id="my-awesome-dropzone">
                        @csrf
                        <div class="row">
                            <div class="col-12 text-danger text-center mb-4">
                                @if (session('error'))
                                    {{ session('error') }}
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                            
                                <label class="control-label">Selecionar foto</label>
                                <input id="input-b5" name="file" type="file" multiple required>
                            </div>

                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Nome do projeto</label>
                                    <input type="text" name="title" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descrição do projeto</label>
                                    <textarea name="description" id="editor" required>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                      
                        <hr>
                       
                        <div class="col-12">
                            <button type="submit" class="btn btn-info float-left">
                                Adicionar
                            </button>
                            <a href="#" class="btn btn-secondary float-right">
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
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>   
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
                allowedFileExtensions: ["jpg", "png", "gif"]
            }); 
           
            $('.file-input.file-input-new').find('.btn-file').find('span').html('Procurar')
        })

        ClassicEditor
            .create( document.querySelector( '#editor' ), { 
                language: 'pt-br',
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                        ]
                    }
            })
            .then( editor => {
                // console.log( editor);
            } )
            .catch( error => {
                console.error( error );
            } );

    </script>
@endsection