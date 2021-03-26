@extends('layouts.master')


@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-0">
  <h1 class="h3 mb-0 text-gray-800">Informasi Surat</h1>
</div>
<div class="row">
    <div class="col-md-12 m-1 pl-4 pr-4 pb-2">
        <div class="row">
        <div class="card col-md-12 shadow ml-2 mr-2 mb-2">
              <a href="#kematian" class="d-block card-header py-3" data-toggle="collapse"
                  role="" aria-expanded="true" aria-controls="kematian">
                  <h6 class="m-0 font-weight-bold text-primary">Surat Keterangan Kematian</h6>
              </a>
              <div class="collapse show" id="kematian">
                  <div class="card-body p-2">
                      <p class="m-0" style="font-size: 15px; text-align:justify" >
                        surat yang dibuat dan diterbitakn oleh Dinas Kependudukan dan Catatan Sipil yang membuktikan kematian seseorang. Data penduduk yang telah meninggal akan terhapus dari daftar kependudukan, seperti Kartu Keluarga dan Nomor Induk Kependudukan (NIK). 
                        Setelah penduduk yang dilaporkan kematiannya, nanti akan diterbitkan Kartu Keluarga baru dan Surat Kematian yang telah diatur dalam Peraturan Presiden Indonesia Nomor 25 Tahun 2008
                      </p>
                      <p class="m-0">Syarat</p>
                      <ol class="m-0">
                        <li>Fotokopi KTP Almarhum/Almarhumah</li>
                        <li>Fotokopi KTP Pelapor</li>
                        <li>Fotokopi KTP saksi</li>
                        <li>Fotokopi Akta Kelahiran dan Akta Perkawinan (apabila sudah menikah)</li>
                        <li>Surat keterangan dari rumah sakit</li>
                        <li>Surat pengantar kematian dari kelurahan</li>
                      </ol>
                    
                  </div>
              </div>
        </div>
          
        <div class="card col-md-12 shadow ml-2 mr-2 mb-2 ">
              <a href="#kelahiaran" class="d-block card-header py-3" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="kelahiran">
                  <h6 class="m-0 font-weight-bold text-primary">Surat Keterangan Kelahiran</h6>
              </a>
              <div class="collapse show kelahiran" id="kelahiaran">
                  <div class="card-body">
                      <p class="m-0" style="font-size: 15px; text-align:justify" >
                            surat yang dibuat dan diterbitakn oleh Dinas Kependudukan dan Catatan Sipil yang membuktikan kematian seseorang. Data penduduk yang telah meninggal akan terhapus dari daftar kependudukan, seperti Kartu Keluarga dan Nomor Induk Kependudukan (NIK). 
                            Setelah penduduk yang dilaporkan kematiannya, nanti akan diterbitkan Kartu Keluarga baru dan Surat Kematian yang telah diatur dalam Peraturan Presiden Indonesia Nomor 25 Tahun 2008
                          </p>
                      <p class="m-0">Syarat</p>
                      <ol class="m-0">
                        <li>Fotokopi KTP Almarhum/Almarhumah</li>
                        <li>Fotokopi KTP Pelapor</li>
                        <li>Fotokopi KTP saksi</li>
                        <li>Fotokopi Akta Kelahiran dan Akta Perkawinan (apabila sudah menikah)</li>
                        <li>Surat keterangan dari rumah sakit</li>
                        <li>Surat pengantar kematian dari kelurahan</li>
                      </ol>                  
                    </div>
              </div>
        </div>

        <div class="card col-md-12 shadow ml-2 mr-2 mb-2 shadow m-1">
              <a href="#keterangan" class="d-block card-header py-3" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="keterangan">
                  <h6 class="m-0 font-weight-bold text-primary">Surat Keterangan </h6>
              </a>
              <div class="collapse show keterangan" id="keterangan">
                  <div class="card-body">
                      <p class="m-0" style="font-size: 15px; text-align:justify" >
                            Surat Keterangan umum meliputi keterangan sesuai yang dibutuhkan masyarakat untuk pengajuan pelayanan.</p>
                      <p class="m-0"> Syarat keterangan umum :</p>
                      <ol class="m-0">
                        <li>Surat Pengantar dari RT/RW.</li>
                        <li>Fotocopy Kartu Tanda Penduduk Elektronik (KTP-el).</li>
                        <li>Fotocopy Kartu Keluarga (KK).</li>
                        <li>Data dukung lainnya</li>
                      </ol>                   </div>
              </div>
        </div>

        <div class="card col-md-12 shadow ml-2 mr-2 mb-2 shadow m-1">
              <a href="#pengantarpindah" class="d-block card-header py-3" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="pengantarpindah">
                  <h6 class="m-0 font-weight-bold text-primary">Surat Pengantar Pindah</h6>
              </a>
              <div class="collapse show pengantarpindah" id="pengantarpindah">
                  <div class="card-body">
                    <p>Minta surat pengantar dari RT/RW di tempat yang akan Anda tinggalkan.
                    Setelah mendapatkan surat pengantar dari RT/RW, Anda harus ke Kelurahan untuk mengisi beberapa formulir seperti formulir F-1.01 (formulir biodata), F-1.15 (formulir KK baru), dan F-1.16 (Formulir perubahan KK).
                    Setelah mendapat surat keterangan dari Kelurahan, datang ke Kecamatan untuk meminta tanda tangan di surat tersebut.
                    Selanjutnya Anda harus mendatangi Disdukcapil di tempat tinggal lama untuk meminta penerbitan Surat Keterangan Pindah Warga Negara Indonesia (SKPWNI) dengan beberapa syarat yang Anda siapkan sebelumnya.
                    Biasanya pada proses ini e-KTP lama Anda akan ditarik untuk menghindari dobel identitas.
                    SKPWNI dari Disdukcapil tersebut selanjutnya Anda bawa ke alamat domisili baru untuk mengurus surat keterangan pindah datang.</p>
                  </div>
              </div>
        </div>

        <div class="card col-md-12 shadow ml-2 mr-2 mb-2 shadow m-1">
              <a href="#fpp" class="d-block card-header py-3" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="fpp">
                  <h6 class="m-0 font-weight-bold text-primary">Formulir Permohonan Pindah </h6>
              </a>
              <div class="collapse show kelahiran" id="fpp">
                  <div class="card-body">
                      <p>Syarat Formulir Permohonan Pindah :</p>
                    <p>
                        <ol>
                            <li>Surat Keterangan Pindah WNI dan Biodata Penduduk WNI dari Dinas Pendudukan dan Pencatatan Sipil Daerah Asal.</li>
                            <li>Surat Pengantar dari RT dan RW Yang dituju.</li>
                            <li>Formulir Permohonan Pindah Datang WNI dari Kelurahan (F1.38).</li>
                            <li>Formulir Permohonan Pindah Datang WNI dari Kecamatan (F1.39).</li>
                            <li>Yang Pindah Usia dibawah Umur 17 Tahun Lampirkan :
                                <ul>
                                    <li>Potocopy KTP Orang Tua</li>
                                    <li>Potocopy KTP Yang Dikuasai</li>
                                    <li>Potocopy KK Yang Ditumpangi </li>
                                    <li>Surat Kuasa dari Orang Tua Bermaterai Rp.6000</li>
                                </ul>
                            </li>
                        </ol>
                    </p>
                  </div>
              </div>
        </div>

        <div class="card col-md-12 shadow ml-2 mr-2 mb-2 shadow m-1">
              <a href="#skp" class="d-block card-header py-3" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="skp">
                  <h6 class="m-0 font-weight-bold text-primary">Surat Keterangan Pindah Datang</h6>
              </a>
              <div class="collapse show kelahiran" id="skp">
                  <div class="card-body">
                      <p>Syarat yang harus dipenuhi:</p>
                      <ul>
                          <li>Surat Pengantar RT/RW</li>
                          <li>Formulir permohonan KK</li>
                          <li>Formulir Permohonan KTP-el</li>
                          <li>Formulir Permohonan KIA bagi yang tidak wajib KTP</li>
                          <li>Surat Keterangan Pindag Datang dari Kantor DIsdukcapil Derah Pindah Datang</li>
                          <li>Surat Keterangan Pindah dari daerah asal</li>
                          <li>Surat Keterangan Biodata dari daerah asal</li>
                          <li>KK yang ditumpangi bagi yang akan menumpang</li>
                          

                      </ul>
                </div>
              </div>
        </div>

          
        <div class="card col-md-12 shadow ml-2 mr-2 mb-2 shadow m-1">
              <a href="#fppd" class="d-block card-header py-3" data-toggle="collapse"
                  role="button" aria-expanded="true" aria-controls="fppd">
                  <h6 class="m-0 font-weight-bold text-primary">Formulir Permohonan Pindah Datang </h6>
              </a>
              <div class="collapse show kelahiran" id="fppd">
                  <div class="card-body">
                      <p>Syarat yang harus dipenuhi:</p>
                      <ul>
                          <li>Surat Pengantar RT/RW</li>
                          <li>Formulir permohonan KK</li>
                          <li>Formulir Permohonan KTP-el</li>
                          <li>Formulir Permohonan KIA bagi yang tidak wajib KTP</li>
                          <li>Surat Keterangan Pindag Datang dari Kantor DIsdukcapil Derah Pindah Datang</li>
                          <li>Surat Keterangan Pindah dari daerah asal</li>
                          <li>Surat Keterangan Biodata dari daerah asal</li>
                          <li>KK yang ditumpangi bagi yang akan menumpang</li>
                          

                      </ul>                  </div>
              </div>
        </div>
        
          
        </div>
    </div>
</div>
@endsection
