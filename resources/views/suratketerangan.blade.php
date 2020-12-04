<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{--  <style>
        body{font-size: 12px;
            margin-left: 20px;
            margin-right: 20px;
        };
        .kop{margin-right: 10px};
        table.saksi{
            width: 50%;
        };
        td.header{
            border: solid 1px;
        }
        
    </style>  --}}
</head>
<body>
     
        <table border="" align="center " style="margin-top: -20px ;margin_left:50px; margin-right:50px;margin-bottom:10px" >
            <tr style="padding-bottom: 0px">
                <td style="margin-right: 20px"> <img src="public/img/kabupaten.jpg" alt="" width="90" height="90">
                </td>
                <td style="margin-top: 0;margin-bottom:0px; margin-left:30px;padding-left:20px;padding-bottom:0px:">
                    <table>
                        <tr>
                            <td>PEMERINTAH DESA</td>
                            <td>: BIMOMARTANI</td>
                        </tr>
                        <tr>
                            <td>KECAMATAN</td>
                            <td>: NGEMPLAK</td>
                        </tr>
                        <tr>
                            <td>KABUPATEN</td>
                            <TD>: SLEMAN</TD>
                        </tr>
                        <TR>
                            <td>PROVINSI</td>
                            <TD>: DAERAH ISTIMEWA YOGYAKARTA</TD>
                        </TR>
                    </table>
                </td>
            </tr> 
        </table>

        <hr style="border: solid 1px;margin-top: 0;">
        <table align="center" style=" margin-top:20px">
            <tr align="center">
                <td>
                        <b><font size="2">SURAT KETERANGAN </font> </b> 
                </td>
            </tr>
            <tr align="center"><td>Nomor: {{ $pengajuan->nomer_surat }}</td></tr>
        </table>
    
    <table style="margin-top: 10px;margin-bottom:10px">
        <tr style=""> 
            <td>Saya, yang bertanda tangan di bawah ini:</td> 
        </tr>
    </table>
    <table>
        <tr>
            <td style="width: 150px">a. Nama</td>
            <td>: bapak sugiono</td>
        </tr>
        <tr>
            <td style="width: 150px">b. Jabatan</td>
            <td>: Kepala</td>
        </tr>
    </table>
    <table style="margin-top:10px;margin-bottom:10px">
        <tr>
            <td style="">dengan ini menerangkan bahwa:</td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width: 150px" >a. Nama</td>
            <td> : {{ $pengajuan->nama }}</td>

        </tr>
        <tr>
            <td style="width: 150px">b. NIK</td>
            
            <td>:  {{ $pengajuan->nik }}</td>
        </tr>
        <tr>
            <td style="width: 150px">c. Tempat,tgl. lahir</td>
            <td>: {{ $pengajuan->tempat_lahir }} / {{ $pengajuan->tgl_lahir }}</td>
        </tr>
        <tr>
            <td style="width: 150px">d. Jenis kelamin</td>
            <td>: {{ $pengajuan->jk }}</td>
        </tr>
        <tr>
            <td style="width: 150px">e. Agama</td>
            <td>: {{ $pengajuan->agama }}</td>
        </tr>
        <tr>
            <td style="width: 150px">f. Status Perkawinan</td>
            <td>: {{ $pengajuan->status_kawin }}</td>
        </tr>
        <tr>
            <td style="width: 150px">g. Pekerjaan</td>
            <td>: {{ $pengajuan->pekerjaan }}</td>
        </tr><tr>
            <td style="width: 150px">h. Alamat</td>
            <td>: {{ $pengajuan->alamat }}</td>
        </tr>
        <tr>
            <td style="width: 150px">i. Tujuan ke</td>
            <td>: {{ $pengajuan->tujuan }}</td>
        </tr><tr>
            <td style="width: 150px">j. Keperluan</td>
            <td>: {{ $pengajuan->keperluan }}</td>
        </tr>
    </table>
    <table style="margin-top:30px">
        <tr>
            <td>Berhubungan dengan keperluan yang bersangkutan, dimohon agar yang berwenang dapat memeberikan bantuan serta fasilitas seperlunya</td>      
        </tr>
    </table>
   
    <table style="margin-top: 30px">
        <tr>
            <td>Demikian surat keterangan ini dibuat untuk dipergunakan seperlunya.</td>
        </tr>
    </table>
     
    <table align="right" border="" style=" margin-top:30px;padding-top:0px; ">
        <tr>
            <td height=""> Sleman,{{ tgl_indo(Carbon\Carbon::parse(now())->format('Y-m-d')) }} </td>
        </tr>
         <tr style="">
            <td> Kepala Desa,</td>
        </tr>
        <tr style="">
            <td>.......</td>
        </tr>
    </table>
   

   
</body>
</html>