<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
  border-collapse:collapse;
    }
    </style>
</head>
<body>
    
    <table align="right" style="border: 1px solid black">
        <tr>
            <td><b>F.1-34</b></td>
        </tr>
    </table>
    <br><br>
      
     
        
    <table border="" width="50%" style="font-size:11px; margin-top: 10px">

        
        <tr>
            <td style="margin-top: 0">
            PROVINSI
            </td>
            <td>:</td>

            <td>
                <table style=" border: 1px solid black;">
                    <tr>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                </table>
                
            </td>
            <td></td>
            <td  style="margin-top: 0">
                <table style=" border: 1px solid black;">
                    <tr><td><b> DI YOGYAKARTA</b></td></tr>
                </table>           
            </td>
        </tr>
        <tr>
            <td style="margin-top: 0">
            KABUPATEN/KOTA
            </td>
            <td>:</td>

            <td>
                <table width="100%" style=" border: 1px solid black;">
                    <tr>
                        <td>0</td>
                        <td>4</td>
                    </tr>
                </table>
                
            </td>
            <td></td>
            <td  style="margin-top: 0">
                <table style=" border: 1px solid black;">
                    <tr><td><b> SLEMAN</b></td></tr>
                </table>           
            </td>
        </tr>
        <tr>
            <td style="margin-top: 0">
            KECAMATAN
            </td>
            <td>:</td>

            <td>
                <table style=" border: 1px solid black;">
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                </table>
                
            </td>
            <td></td>
            <td  style="margin-top: 0">
                <table style=" border: 1px solid black;">
                    <tr><td><b> NGEMPLAK</b></td></tr>
                </table>           
            </td>
        </tr>
        <tr>
            <td style="margin-top: 0">
            DESA/KELURAHAN
            </td>
            <td>:</td>

            <td>
                <table style=" border: 1px solid black;">
                    <tr>
                        <td>2</td>
                        <td>0</td>
                        <TD>0</TD>
                    </tr>
                </table>
                
            </td>
            <td></td>
            <td  style="margin-top: 0">
                <table  style=" border: 1px solid black;">
                    <tr ><td><b> UMBULMARTANI</b></td></tr>
                </table>           
            </td>
        </tr>
        <tr>
            <td style="margin-top: 0">
            DUSUN/DUKUH/KAMPUNG
            </td>
            <td>:</td>

            <td>
                <table style=" border: 1px solid black;">
                    <tr>
                        <td>Lodadi</td>
                    </tr>
                </table>
                
            </td>
            
        </tr>
    </table>
    
        <table align="center">
            <tr>
                <td>
                    <center>
                        <b><font size="2">FORMULIR PERMOHONAN PINDAH WNI</font> </b>    
                    </center>
                </td>
            </tr>
            <tr><td><center><b><font size="1">Antar Kabupaten / kota atau Provinsi</font></b></center></td></tr>
            <tr><td><center><font size="1">No.</font></center></td></tr>
        </table>
    
    <table style="margin-top: 10px;margin-bottom:10px">
        <tr><font size="3"> <b>DATA DAERAH ASAL</b> </font></tr>
    </table>
    <table style="font-size: 12px">
        <tr>
            <td style="width: 200px">1.Nomor Kartu Keluarga</td>
            <td >:{{ $pengajuan->no_kk }}</td>
        </tr>
        <tr>
            <td>2.Nama Kepala Keluarga</td>
            <td>:{{ $pengajuan->nama_kk }}</td>
        </tr>
        <tr>
            <td>3.Alamat</td>
            <td>:{{ $pengajuan->alamat }}</td>
        </tr>
    </table>
    <table style="margin-left:210px; font-size: 12px; ">
        <tr>
            <td style="width: 150px">Dusun/Dukuh/Kampung</td>
            <td colspan="" id="data">:{{ $pengajuan->desa }}</td>
        </tr>
        <tr>
            <td style="width:150px">a.Desa/Kelurahan</td>
            <td style="width:150px;">:{{ $pengajuan->desa }}</td>
            <td>c.Kab/Kota</td>
            <td>: sleman</td>
        </tr>
        <tr>
            <td style="width:150px">b.Kecamatan</td>
            <td style="width:150px">:{{ $pengajuan->kecamatan }}</td>
            <td>d.Provinsi/Kota</td>
            <td>: {{ $pengajuan->provinsi }}</td>
        </tr>
        <tr>
            <td style="width: 150px">Kodepos</td>
            <td style="width: 150px">:{{ $pengajuan->kodepos }}</td>
            <td>telephone</td>
            <td>:</td>
        </tr>
    </table>
    <table style=" font-size:12px">
        <tr>
            <td style="width: 200px" >4.NIK Pemohon</td>
            <td id="data">:{{ $pengajuan->nik_pemohon }}</td>
        </tr>
        <tr>
            <td style="width: 150px">5.Tempat/Tanggal Lahir</td>
            <td>:{{ $pengajuan->tempat_lahir }}/{{ $pengajuan->tgl_lahir }}</td>
        </tr>
        <tr style="width: 150px">
            <td> 6.Nama Lengkap</td>
            <td>:{{ $pengajuan->nama }}</td>
        </tr>
    </table>
   
    <table style="margin-top: 10px">
        <tr><td> <b>DATA DAERAH KEPINDAHAN</b></td> </tr>
    </table>
    <table style=" font-size:12px">
        <tr>
            <td style="width: 200px">1.Alasan Pindah</td>
            <td id="data">:{{ $pengajuan->alasan_pindah }}</td>
        </tr>
        <tr>
            <td>2.Alamat tujuan</td>
            <td>:{{ $pengajuan->tujuan_alamat_pindah }}</td>
        </tr>
    </table>
     <table style="margin-left:210px;font-size:12px ">
        <tr>
            <td style="width: 150px">Dusun/Dukuh/Kampung</td>
            <td colspan="" id="data">:</td>
        </tr>
        <tr>
            <td style="width:150px">a.Desa/Kelurahan</td>
            <td style="width:150px;">:{{ $pengajuan->tujuan_desa }}</td>
            <td>c.Kab/Kota</td>
            <td>: {{ $pengajuan->tujuan_kab }}</td>
        </tr>
        <tr>
            <td style="width:150px">b.Kecamatan</td>
            <td style="width:150px">:{{ $pengajuan->tujuan_kecamatan }}</td>
            <td>d.Provinsi/Kota</td>
            <td>: {{ $pengajuan->tujuan_prov }}</td>
        </tr>
        <tr>
            <td style="width: 150px">Kodepos</td>
            <td style="width: 150px">:{{ $pengajuan->tujuan_kodepos }}</td>
            <td>telephone</td>
            <td>:</td>
        </tr>
    </table>
    <table style=" font-size:12px">
        <tr>
            <td>3.jenis kepindahan</td>
            <td>:{{ $pengajuan->jenis_pindah }}</td> 
        </tr>
        <tr>
            <td>4.Status KK bagi yang tidak pindah</td>
            <td>:{{ $pengajuan->status_kk }}</td>
        </tr>
        <tr>
            <td>5.Status nomer kk bagi yang pindah</td>
            <td>:{{ $pengajuan->status_no_kk_pindah }}</td>
        </tr>
        <tr>
            <td>6.kluarga Yang Pindah</td>
        </tr>
    </table>
    <table align="" border=" "  style="width: 100% ;border: 1px solid black" >
        <tr style="border: 1px solid black">
            <th style="border: 1px solid black">NO</th>
            <th style="border: 1px solid black">NIK</th>
            <th style="border: 1px solid black">NAma</th>
            <th style="border: 1px solid black">MAsa berlaku ktp</th>
            <th style="border: 1px solid black">SHDk</th>
        </tr>
        @foreach ($data_kel as $item)
        <tr style="border: 1px solid black">
            <td style="border: 1px solid black"></td>
            <td style="border: 1px solid black">{{ $item->nik }}</td>
            <td style="border: 1px solid black">{{ $item->nama}}</td>
            <td style="border: 1px solid black">{{ $item->masa_berlaku }}</td>
            <td style="border: 1px solid black">{{ $item->shdk }}</td>
        </tr>
            
        @endforeach
    </table>


    </table>
     <table align="left" border="" style=" margin-top:100px;padding-top:0px; ">
    <tr><td height=""></td></tr>
    <tr style="">
        <td>Petugas Registrasi</td>
    </tr>
    <tr ><td height="50"></td></tr>
    <tr align="center">
    </tr>

    <table align="left" border="" style="margin_left:170px ">
    <tr><td height=""></td></tr>
    <tr style="">
        <td>a.n KEPALA DESA UMBUL MARTANI </td>
    </tr>
    <tr ><td height="70"></td></tr>
    <tr align="center">
        <td><b>Sugiyo</b></td>
    </tr>

    </table>
   <table align="right" border="" style=" ">
    <tr><td height=""></td></tr>
    <tr style="">
        <td>Umbulmartani, 20/Desember/2020 </td>
    </tr>
    <tr align="center">
        <td>Pemohon</td>
    </tr>
    <tr ><td height="50"></td></tr>
    <tr align="center">
        <td><b>{{ $pengajuan->nama }}</b></td>
    </tr>

    </table>
    
   
</body>
</html>