@extends('dashboard.layouts.app')

@section('title','Upload Berkas')

@section('page-title','Upload Berkas Band Audition')

@section('dashboard-content')
    @if($user->status=="Sudah Lunas")
        @if($user->riwayat==NULL && $user->profil==NULL && $user->lagu==NULL && $user->link==NULL && $user->logo==NULL)
            <form class="form-horizontal" method="POST" action="#" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('riwayat') ? ' has-error' : '' }}">
                    <label for="riwayat" class="col-md-5 control-label">Riwayat</label>

                    <div class="col-md-5">
                        <input  id="riwayat" type="file" class="form-control" name="riwayat" value="{{ old('riwayat') }}" required>

                        @if ($errors->has('riwayat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('riwayat') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('profil') ? ' has-error' : '' }}">
                    <label for="profil" class="col-md-5 control-label">Profil</label>

                    <div class="col-md-5">
                        <input  id="profil" type="file" class="form-control" name="profil" value="{{ old('profil') }}" required>

                        @if ($errors->has('profil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('profil') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('lagu') ? ' has-error' : '' }}">
                    <label for="lagu" class="col-md-5 control-label">Lagu</label>

                    <div class="col-md-5">
                        <input  id="lagu" type="file" class="form-control" name="lagu" value="{{ old('lagu') }}" required>

                        @if ($errors->has('lagu'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lagu') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                    <label for="link" class="col-md-5 control-label">Link</label>

                    <div class="col-md-5">
                        <input  id="link" type="text" class="form-control" name="link" value="{{ old('link') }}" required>

                        @if ($errors->has('link'))
                            <span class="help-block">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                    <label for="logo" class="col-md-5 control-label">Logo</label>

                    <div class="col-md-5">
                        <input  id="logo" type="file" class="form-control" name="logo" value="{{ old('logo') }}" required>

                        @if ($errors->has('logo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('logo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Upload
                        </button>
                    </div>
                </div>
            </form>
        @else
            Terima Kasih, Berkas Anda Sudah Di-upload. 
        @endif
    @else
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <b>Anda belum melakukan pembayaran.</b>
                            <br>Silahkan melakukan pembayaran melalui transfer ke Bank BRI sejumlah Rp.50.000,-
                            <br>No. Rek <b>0248-01-024417-50-2</b> a.n. I Dewa Gede Wedrayana Kembar Suputra.
                            <br>Konfirmasi dan sertakan bukti pembayaran ke CP <b>082247819997</b>.
                            <br><br>Setelah admin melakukan validasi pembayaran maka upload berkas dapat dilakukan.
                        
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    
@endsection
