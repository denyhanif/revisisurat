@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Formulir Permohonan Pindah Datang</h1>
    </div>

    <div class="row">
        <div class="col-md-12 card shadow mb-4">
            <form class="mt-3 mb-2" action="{{ route('send.verifikasi') }}" method="POST" enctype="multipart/form-data">
                @csrf                    
                    <input hidden value="{{ $data->pengajuan_id }}" name="id_pengaju" >
                    <input hidden value="{{ $data->pesanan_id }}" name="id_pesanan" >
                    <input hidden value="{{ $data->halaman }}" name="kat" >
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Pemesan Surat</label>
                        <input class="form-control" type="text" name="nama_pemesan" value="{{ $data->nama_pemesan }}">
                    </div>    
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Daerah Asal</h1>
                    <div class="form-group col-md-8">
                        <label for="inputState">Nomor Kartu Keluarga</label>
                        <input class="form-control" type="text" name="no_kk" value="{{ $data->no_kk }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Kepala Keluarga</label>
                        <input class="form-control" type="text" name="nama_kk" value="{{ $data->nama_kk }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="alamat" value="{{ $data->alamat }}">
                    </div>     
                    <div class="form-group col-md-8">
                        <label for="inputState">Desa / Kelurahan</label>
                        <input class="form-control" type="text" name="desa" value="{{ $data->desa }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Kecamatan</label>
                        <input class="form-control" type="text" name="kecamatan" value="{{ $data->kecamatan }}">
                    </div>    
                    <div class="form-group col-md-8">
                        <label for="inputState">Kab / Kota</label>
                        <input class="form-control" type="text" name="kab" value="{{ $data->kabupaten }}">
                    </div>         
                    <div class="form-group col-md-8">
                        <label for="inputState">Provinsi</label>
                        <input class="form-control" type="text" name="provinsi" value="{{ $data->provinsi }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Kodepos</label>
                        <input class="form-control" type="text" name="kodepos" value="{{ $data->kodepos }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">NIK Pemohon</label>
                        <input class="form-control" type="text" name="nik_pemohon" value="{{ $data->nik_pemohon }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" value="{{ $data->tmpt_lahir }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="text" name="tgl_lahir" value="{{ $data->tgl_lahir }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" value="{{ $data->nama }}">
                    </div>
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Kepindahan</h1>
                    <div class="form-group col-md-8">
                        <label for="inputState">Status KK</label>
                        <select name="tujuan_kk" class="form-control">
                            <option selected>-- Pilih --</option>
                            <option value="Numpang">Numpang</option>
                            <option value="Membuat KK Baru">Membuat Kk Baru</option>
                            <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                        </select>
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Nomor Kartu Keluarga</label>
                        <input class="form-control" type="text" name="tujuan_no_kk" value="{{ $data->tujuan_no_kk }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Kepala Keluarga</label>
                        <input class="form-control" type="text" name="tujuan_nama_kk" value="{{ $data->tujuan_nama_kk }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Tanggal Kedatangan</label>
                        <input class="form-control" type="text" name="tgl_datang" value="{{ $data->tgl_datang }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Alamat yang Dituju</label>
                        <input class="form-control" type="text" name="tujuan_alamat" value="{{ $data->tujuan_alamat }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Desa / Kelurahan</label>
                        <input class="form-control" type="text" name="tujuan_desa" value="{{ $data->tujuan_desa }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Kecamatan</label>
                        <input class="form-control" type="text" name="tujuan_kecamatan" value="{{ $data->tujuan_kecamatan }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Kabupaten</label>
                        <input class="form-control" type="text" name="tujuan_kabupaten" value="{{ $data->tujuan_kabupaten }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Provinsi</label>
                        <input class="form-control" type="text" name="tujuan_provinsi" value="{{ $data->tujuan_provinsi }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Kodepos</label>
                        <input class="form-control" type="text" name="tujuan_kodepos" value="{{ $data->tujuan_kodepos }}">
                    </div>
                    <div class="text-left mt-4 mb-4">
                        <button type="submit" class="btn btn-primary">Verifikasi</button>
                    </div>
            </form>
            <form class="mt-3 mb-2" action="{{ route('tolak') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input hidden value="{{ $data->halaman }}" name="kat" >
                <input hidden value="{{ $data->pesanan_id }}" name="idpesantolak" >
                <div class="text-left mb-4">
                    <button type="submit" class="btn btn-danger">Tolak</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
@endsection
  