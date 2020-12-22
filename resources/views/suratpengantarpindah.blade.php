<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>

     
        <table border="" align="center " style="margin-top: -20px ;margin_left:50px; margin-right:50px; padding-left:40px" >
            <tr style="padding-bottom: 0px">
                <td style="margin-right: 20px"> <img src="https://1.bp.blogspot.com/-9QN4hDujIgY/VzRwd4x7tBI/AAAAAAAAA0k/alfSqysJjpwf0qexK4WrbXBpOAk9VUcSgCLcB/s320/logo%2Bslmn34.jpg" alt="" width="90" height="90">
                </td>
                <td style="margin-top: 0;margin-bottom:0px; margin-left:50px;padding-left:20px;padding-bottom:0px:">
                    <center>
                        <font  align="center " size="4" style="font-weight: bold"></font>
           
                        <font size="3">PEMERINTAH KABUPATEN SLEMAN</font> <br>

                        <font size="3">KECAMATAN NGEMPLAK</font> <br>

                        <font size="4">PEMERINTAH DESA UMBULMARTANI</font><br>
                        <font size="2">Grogolan, Umbulmartani, Ngemplak, Sleman, DIY</font>
                    </center>
                </td>
            </tr>
            <tr>
            </tr>
        
        </table>
        <hr style="border: solid 1px;margin-top: 0;">

        <table align="center" style="margin-top: 30px">
            <tr>
                <td>
                    <center>
                        <b>SURAT PENGANTAR PINDAH </b>    
                    </center>
                </td>
            </tr>
            <tr><td><center><b>ANTAR KABUPATEN / KOTA ATAU ANTAR PROVINSI</b></center></td></tr>
            <tr><td><center>No.{{ $pengajuan->nomer_surat }}</center></td></tr>
        </table>
    
        <table style="margin-top:20px">
            <tr>
                <td>Yang bertanda tangan di bawah ini, menerangkan Permohonan Pindah Penduduk WNI dengan data sebagai berikut</td>
            </tr>
        </table>
    <table>
        <tr>
            <td style="width: 200px">1.NIK</td>
            <td id="data">:{{ $pengajuan->nik }}</td>
        </tr>
        <tr>
            <td style="">2.Nama Lengkap</td>
            <td colspan="" id="data">: {{ $pengajuan->nama }}</td>
        </tr>
         <tr>
            <td style="" >3.Tempat Tanggal Lahir</td>
            <td id="data">: {{ $pengajuan->tempat_lahir }}</td>
            <td>{{ $pengajuan->tgl_lahir }}</td>
        </tr>
         <tr>
            <td>4.Nomor Kartu Keluarga</td>
            <td>: {{ $pengajuan->no_kk }}</td>
        </tr>
        <tr>
            <td>5.Nama Kartu Keluarga</td>
            <td>: {{ $pengajuan->nama_kk }}</td>
        </tr>
    </table>
    <table style="margin-left: 205px">
        <tr>
            <td>Desa/Kelurahan</td>
            <td>:{{ $pengajuan->desa }}</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>{{ $pengajuan->kecamatan }}</td>

        </tr>
        
    </table>
     <table>
        <tr>
            <td style="width: 200px" >7. Alamat tujuan Pindah</td>
            <td id="data">: {{ $pengajuan->tujuan_alamat }}</td>
        </tr>
    </table>
       <table style="margin-left: 205px">
        <tr>
            <td>Desa/Kelurahan</td>
            <td>:{{ $pengajuan->tujuan_desa }}</td>
        </tr>
        <tr>
            <td>Kecamatan</td>
            <td>:{{ $pengajuan->tujuan_kecamatan }}</td>
        </tr>
        <tr>
            <td>Kabupaten/Kota</td>
            <td>:{{ $pengajuan->tujuan_kabupaten }}</td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>:{{ $pengajuan->tujuan_provinsi }}</td>
        </tr>

        
    </table>
    
    <table>
        <tr>
            <td style="width: 150px" >8.Jumlah keluarga yang pindah</td>
            <td id="data">:{{ $pengajuan->jumlah_pindah }}</td>
        </tr>
    </table>
    <table style="margin-top: 20px">
        <tr>
            <td  >Adapun Permohonan Pindah Penduduk WNI yang bersangkutan sebagaimana terlampir.</td>
        </tr>
    </table>
    <table align="center" style="margi-top:10px">
        <tr>
            <td style >Demikian Surat Pengantar Pindah ini dibuat agar digunakan sebagaimana mestinya</td>
        </tr>
    </table>

   
    <table align="left" border="" style=" margin-top:30px;padding-top:0px; ">
    <tr><td height=""></td></tr>
    <tr align="CENTER" style="">
        <td> Mengetahui</td>
    </tr>
    <tr style="">
        <td>CAMAT NGEMPLAK</td>
    </tr>
    <tr ><td height="50"></td></tr>
    <tr align="center">
        <td><b>sUGIO</b></td>
    </tr>
   <table align="right" border="" style="margin_left:400px ">
    <tr><td height=""></td></tr>
    <tr style="">
        <td>Umbulmartani, {{ tgl_indo(Carbon\Carbon::parse(now())->format('Y-m-d')) }}</td>
    </tr>
    <tr align="center">
        <td>a.n KEPALA DESA UMBULMARTANI</td>
    </tr>
    <tr ><td height="">u.b. Sekretaris Desa</td></tr>
    <tr><td>Kepala Urusan Tata Usaha Dan Umum</td></tr>
    <tr >
        <td height="50px"></td>
    </tr>
    <tr align="center">
        <td><b>Rahmat edi</b></td>
    </tr>

</table>
    
   
</body>
</html>