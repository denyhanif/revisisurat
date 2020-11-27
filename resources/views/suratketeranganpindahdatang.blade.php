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
    
      
     
        <table border="" align="center " style="margin-top: -20px ;margin_left:50px; margin-right:50px" >
            <tr style="padding-bottom: 0px">
                <td style="margin-right: 20px"> <img src="'public/img/kabupaten.jpg'" alt="" width="90" height="90">
                </td>
                <td style="margin-top: 0;margin-bottom:0px; margin-left:30px;padding-left:20px;padding-bottom:0px:">
                    <center>
                        <font  align="center " size="4" style="font-weight: bold"></font>
           
                        <font size="4">DINAS KEPENDUDUKAN DAN PENCATAN SIPIL</font> <br>

                        <font size="2">Jalan KRT Pringgodiningrat No. 3 Beran, Tridadi, Sleman ,DIY, 55511</font> <br>

                        <font size="2">Telepon ( 0247)868262, Faksimile( 0247) 868945</font><br>
                        <font size="2">website: www.slemankab.go.id, Email : dukcapil@slemankab.go.id</font>
                    </center>
                </td>
            </tr>
            <tr>
                <hr style="border: solid 1px;margin-top: 0;">
            </tr>
        
        </table>
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

    </table>
    
        <table align="center">
            <tr>
                <td>
                    <center>
                        <b><font size="2">SURAT KETERANGAN PINDAH DATANG WNI</font> </b>    
                    </center>
                </td>
            </tr>
            <tr><td><center><b><font size="1">Antar Kecamatan Dalam Satu Kabupaten/Kota</font></b></center></td></tr>
            <tr><td><center><font size="1">No.</font></center></td></tr>
        </table>
    
    <table style="margin-top: 10px;margin-bottom:10px">
        <tr><td> <b>DATA DAERAH ASAL</b> </td> </tr>
    </table>
    <table style="font-size: 12px">
        <tr>
            <td style="width: 200px">1.Nomor Kartu Keluarga</td>
            <td id="data">:{{ $pengajuan->no_kk }}</td>
        </tr>
         <tr>
            <td style="">2.Nama Kepala Keluarga</td>
            <td colspan="" id="data">:{{ $pengajuan->nama_kk }}</td>
        </tr>
        <tr>
            <td style="" >3.Alamat</td>
            <td id="data">:{{ $pengajuan->alamat }}</td>
        </tr>
    </table>
    <table style="margin-left:210px; font-size: 12px; ">
        <tr>
            <td>Desa/Kelurahan</td>
            <td>:{{ $pengajuan->desa }}</td>
            <td style="margin-left: 50px">Kabupaten</td>
            <td>:{{ $pengajuan->kabupaten }}</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:{{ $pengajuan->kecamatan }}</td>
            <td style="margin-left: 50px">Provinsi</td>
            <td>:{{ $pengajuan->provinsi }}</td>
        </tr>
        
    </table>
    <table style="font-size: 12px">
        <tr>
            <td style="width: 200px" >4.NIK Pemohon</td>
            <td id="data">:{{ $pengajuan->nik_pemohon }}</td>
        </tr>
          <tr>
            <td style="width: 150px" >5.Tempat/Tanggal lahir</td>
            <td id="data">:{{ $pengajuan->tmpt_lahir }}</td>
            <td>:{{ $pengajuan->tgl_lahir }}</td>
        </tr>
        <tr>
            <td style="width: 200px" >6. Nama Lengkap Pemohon</td>
            <td id="data">:{{ $pengajuan->nama }}</td>
        </tr>
    </table>
    <table style="margin-top: 10px">
        <tr>
            <td><b> DATA DAERAH TUJUAN </b></td>
        </tr>
    </table>
    <table style="font-size: 12px">
        <tr>
            <td style="width: 200px">1.Status KK bagi yang pindah</td>
            <td id="data">:{{ $pengajuan->tujuan_kk }}</td>
        </tr>
        <tr>
            <td style="width: 150px">2.Nomor Kartu Keluarga</td>
            <td colspan="" id="data">:{{ $pengajuan->no_kk }}</td>
        </tr>
        <tr>
            <td style="width: 150px" >3.NIK pemohon</td>
            <td id="data">:{{ $pengajuan->nik_pemohon  }}</td>
        </tr>
        <tr>
            <td style="width: 150px" >4.Nama Kepala Keluarga</td>
            <td id="data">:{{ $pengajuan->tujuan_nama_kk }}</td>
        </tr>
        <tr>
            <td style="width: 150px" >5.Tanggal Kedatangan</td>
            <td id="data">:{{ $pengajuan->tgl_datang }}</td>
        </tr>
        <tr>
            <td style="width: 150px" >6. Alamat yang Dituju</td>
            <td id="data">:{{ $pengajuan->tujuan_alamat }}</td>
        </tr>
    </table>

    <table style="margin-left:210px;font-size:12px">
        <tr>
            <td>Desa/Kelurahan</td>
            <td>:{{ $pengajuan->tujuan_desa }}</td>
            <td style="margin-left: 100px">Kabupaten</td>
            <td>:{{ $pengajuan->tujuan_kabupaten }}</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:{{ $pengajuan->tujuan_kecamatan }}</td>
            <td style="margin-left: 100px">Provinsi</td>
            <td>:{{ $pengajuan->tujuan_provinsi }}</td>
        </tr>
          <tr>
            <td>Kode pos</td>
            <td>:{{ $pengajuan->tujuan_kodepos }}</td>
            <td style="margin-left: 100px">Telepon</td>
            <td>:</td>
        </tr>
        
    </table>
     <table>
        <tr>
            <td style="width: 150px ; font-size:12px" >7. Keluarga yang Datang</td>
            <td id="data">:</td>
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
     <table align="left" border="" style=" margin-top:0px;padding-top:0px; ">
    <tr><td height=""></td></tr>
    <tr style="">
        <td> Menegtahui</td>
    </tr>
    <tr style="">
        <td>a.n KEPALA DESA UMBULMARTANI</td>
    </tr>
    <tr ><td height="50"></td></tr>
    <tr align="center">
        <td><b>sUGIO</b></td>
    </tr>
   <table align="right" border="" style="margin_left:500px ">
    <tr><td height=""></td></tr>
    <tr style="">
        <td>Umbulmartani, 20/Desember/2020 </td>
    </tr>
    <tr align="center">
        <td>pelapor</td>
    </tr>
    <tr ><td height="50"></td></tr>
    <tr align="center">
        <td><b>Rahmat edi</b></td>
    </tr>

</table>
    
   
</body>
</html>