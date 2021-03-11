@component('mail::message')
Kepada {{ $pengajuan->nama_pemesan }}
<p style="text-align:center;" class="mb-0" >
    <img class="aligncenter " style="height: 300px ; width:300px; border:none" src=" {{asset('img/n.png')}}"  alt="">

</p>

Pengajuan Surat <b>{{ $pengajuan->kategori->nama }}</b> Pengajuan surat Anda ditolak.
dengan alasan <b>{{ $pengajuan->pesanan->alasan_tolak }}</b> 
{{--  @component('mail::button', ['url' => ''])
Button Text
@endcomponent  --}}

Terimakasih,<br>
Desa Umbulmartani
@endcomponent
