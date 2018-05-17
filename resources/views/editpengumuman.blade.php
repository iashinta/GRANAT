@extends('layouts.adm-app')

@section('Title')
	Pengumuman GrAnaT&reg;
@endsection

@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                 <h2>GrAnaT&reg; 2018</h2>   
                   
                </div>
            </div>
             <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <h3 style="padding:10px">Edit Pengumuman</h3>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('pengumuman.update', $pengumumans->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                    <label>Edit Judul</label>
                                    <input class="form-control" name="judul" value="{{$pengumumans->judul}}" style="width:500px"/>
                            </div>
                            <div class="form-group">
                                <label>Edit Gambar</label>
                                <input type="file" class="form-control" name="gambar" value="{{$pengumumans->gambar}}" style="width:500px"/>
                            </div>
                            <div class="form-group">
                                    <label>Edit Isi</label>
                                    <textarea class="form-control" name="isi" rows="5" id="isi" style="width:500px"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            @if (count($errors)>0)
                                <div class="isa_error" align="center">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                            @endif
                        </form>

                     </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("isi").value = "{{$pengumumans->isi}}";
    </script> 



@endsection 