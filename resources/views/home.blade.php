@extends('dashboard.layouts.app')

@section('title','Dashboard GrAnaT&reg;')

@section('page-title','Dashboard Band Audition GrAnaT&reg; 2018')

@section('dashboard-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2><b>Selamat datang di GrAnaT&reg; 2018, {{ Auth::user()->name }}!</b></h2>
                        <p>
                            <br>Silahkan melakukan pembayaran untuk bisa melengkapi berkas persyaratan.
                            <br>Pembayaran ditransfer via Bank BRI sejumlah Rp.50.000,-
                            <br>No. Rek <b>0248-01-024417-50-2</b> a.n. I Dewa Gede Wedrayana Kembar Suputra.
                            <br>Konfirmasi dan sertakan bukti pembayaran ke CP <b>082247819997</b>.
                        </p>
                </div>
            </div>
        </div>
    </div>
    
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <p>
                            Siapkan berkas-berkas persyaratan pendaftaran setelah melakukan pembayaran. Berkas yang diperlukan:
                            <br>1. Riwayat manggung dalam bentuk .pdf (max. 10mb)
                            <br>2. Profile band dalam bentuk .pdf (max. 10mb)
                            <br>3. Minimal 2 lagu di dalam file .zip (max. 10mb)
                            <br>4. Link video band di upload via youtube (Jika Ada)
                            <br>5. Logo Band dalam bentuk .png/.jpg (max. 5mb)
                            
                        </p>
                </div>
            </div>
        </div>
    </div>
@endsection
