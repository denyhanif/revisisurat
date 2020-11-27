@extends('layouts.master')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Verifikasi Surat Keterangan Kelahiran</h1>
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
                    <div class="form-group col-md-8">
                        <label for="inputState">Nomor Surat</label>
                        <input class="form-control" type="text" name="nama_pemesan" value="{{ $data->nomer_surat }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Nomor Kartu Keluarga</label>
                        <input class="form-control" type="text" name="no_kk" value="{{ $data->no_kk }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Kepala Keluarga</label>
                        <input class="form-control" type="text" name="nm_kk" value="{{ $data->nama_kk }}">
                    </div>
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Bayi / Anak</h1>
                    <div class="form-group col-md-8">
                        <label for="inputState">NIK (Kosongkan Jika Tidak Ada)</label>
                        <input class="form-control" type="text" name="nik" value="{{ $data->nik }}">
                    </div>     
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama_bayi" value="{{ $data->nama}}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                            @if ( $data->jk == "L")
                            <option value="L">Laki - Laki</option>
                            @else
                            <option value="P">perempuan</option>
                            @endif
                        </select>
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Tempat Dilahirkan</label>
                        <input class="form-control" type="text" name="tmpt_lahiran" value="{{ $data->tmpt_lahiran }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Tempat Kelahiran</label>
                        <input class="form-control" type="text" name="tmpt_lahir" value="{{ $data->tmpt_lahir }}">
                    </div>    
                    <div class="form-group col-md-8">
                        <label for="inputState">Tanggal Lahir & Jam Lahir</label>
                        <input class="form-control" type="text" name="tgl_lahir" value="{{ $data->tgl_lahir }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">Jam Lahir</label>
                        <input class="form-control" type="text" name="jam_lahir" value="{{ $data->jam_lahir }}">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="inputState">hari Lahir</label>
                        <input class="form-control" type="text" name="hari_lahir" value="{{ $data->hari_lahir }}">
                    </div>      
                    <div class="form-group col-md-8">
                        <label for="inputState">Jenis Kelahiran</label>
                        <input class="form-control" type="text" name="jns_lahiran" value="{{ $data->jenis_kelahiran }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Kelahiran Ke (dengan huruf)</label>
                        <input class="form-control" type="text" name="kelahiran_ke" value="{{ $data->kelahiran_ke }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Penolong Kelahiran</label>
                        <input class="form-control" type="text" name="pnlg_kelahiran" value="{{ $data->penolong_lahir }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Berat Bayi (Dalam kg)</label>
                        <input class="form-control" type="number" name="berat" value="{{ $data->berat }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Panjang Bayi (Dalam cm)</label>
                        <input class="form-control" type="number" name="panjang" value="{{ $data->panjang }}">
                    </div>
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Ibu</h1>
                    <div class="form-group col-md-8">
                        <label for="inputState">NIK</label>
                        <input class="form-control" type="text" name="ibu_nik" value="{{ $data->ibu_nik }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="ibu_nm" value="{{ $data->ibu_nama }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Tempat Lahir</label>
                        <input class="form-control" type="text" name="ibu_tmpt_lahir" value="{{ $data->ibu_tmpt_lahir }}" >
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="text" name="ibu_tgl_lahir" value="{{ $data->ibu_tgl_lahir }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Pekerjaan</label>
                        <input class="form-control" type="text" name="ibu_pekerjaan" value="{{ $data->ibu_pekerjaan }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="ibu_almt" value="{{ $data->ibu_alamat }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Kewarganegaraan</label>
                        <input class="form-control" type="text" name="ibu_warganegara" value="{{ $data->ibu_kewarganegaraan }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Tanggal Pencatatan Perkawinan</label>
                        <input class="form-control" type="text" name="ibu_tgl_kawin" value="{{ $data->ibu_tgl_kawin }}">
                    </div> 
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Ayah</h1>
                    <div class="form-group col-md-8">
                        <label for="inputState">NIK</label>
                        <input class="form-control" type="text" name="ayah_nik" value="{{ $data->ayah_nik }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="ayah_nm" value="{{ $data->ayah_nama }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Tempat Lahir</label>
                        <input class="form-control" type="text" name="ayah_tmpt_lahir" value="{{ $data->ayah_tmpt_lahir }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="text" name="ayah_tgl_lahir" value="{{ $data->ayah_tgl_lahir }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Pekerjaan</label>
                        <input class="form-control" type="text" name="ayah_pekerjaan" value="{{ $data->ayah_pekerjaan }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="ayah_almt" value="{{ $data->ayah_alamat }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Kewarganegaraan</label>
                        <input class="form-control" type="text" name="ayah_warganegara" value="{{ $data->ayah_kewarganegaraan }}">
                    </div> 
                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Pelapor</h1>
                    <div class="form-group col-md-8">
                        <label for="inputState">NIK</label>
                        <input class="form-control" type="text" name="pelapor_nik" value="{{ $data->pelapor_nik }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="pelapor_nm" value="{{ $data->pelapor_nama }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Tempat Lahir</label>
                        <input class="form-control" type="text" name="pelapor_tmpt_lahir" value="{{ $data->pelapor_tmp_lahir }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Tanggal Lahir</label>
                        <input class="form-control" type="text" name="pelapor_tgl_lahir" value="{{ $data->pelapor_tgl_lahir }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Umur</label>
                        <input class="form-control" type="number" name="pelapor_umur" value="{{ $data->pelapor_umur }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Pekerjaan</label>
                        <input class="form-control" type="text" name="pelapor_pekerjaan" value="{{ $data->pelapor_kerja }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="pelapor_almt" value="{{ $data->pelapor_alamat }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Tanggal Lapor</label>
                        <input class="form-control" type="text" name="tgl_lapor" value="{{ $data->tgl_lapor }}">
                    </div> 

                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Saksi 1</h1>
                    <div class="form-group col-md-8">
                        <label for="inputState">NIK</label>
                        <input class="form-control" type="text" name="saksi1_nik" value="{{ $data->saksi_nik }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="saksi1_nm" value="{{ $data->saksi_nama }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Umur</label>
                        <input class="form-control" type="number" name="saksi1_umur" value="{{ $data->saksi_umur }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="saksi1_almt" value="{{ $data->saksi_alamat }}">
                    </div> 

                    <hr/>
                    <h1 class="h3 mb-0 text-gray-800">Data Saksi 2</h1>
                    <div class="form-group col-md-8">
                        <label for="inputState">NIK</label>
                        <input class="form-control" type="text" name="saksi2_nik" value="{{ $data->saksi_2_nik }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Nama Lengkap</label>
                        <input class="form-control" type="text" name="saksi2_nm" value="{{ $data->saksi_2_nama }}">
                    </div>  
                    <div class="form-group col-md-8">
                        <label for="inputState">Umur</label>
                        <input class="form-control" type="number" name="saksi2_umur" value="{{ $data->saksi_2_umur }}">
                    </div> 
                    <div class="form-group col-md-8">
                        <label for="inputState">Alamat</label>
                        <input class="form-control" type="text" name="saksi2_almt" value="{{ $data->saksi_2_alamat }}">
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
  