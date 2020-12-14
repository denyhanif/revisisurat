@component('mail::message')

<p style="text-align:center;" class="mb-0" >
    <img class="aligncenter " style="height: 300px ; width:300px; border:none" src=" {{asset('img/n.png')}}"  alt="">

</p>
Kepada {{ $pengajuan->nama_pemesan }}
Pengajuan Surat <b>{{ $pengajuan->kategori->nama }}</b> Pengajuan surat Anda ditolak.

{{--  @component('mail::button', ['url' => ''])
Button Text
@endcomponent  --}}

Thanks,<br>
Desa Maju Mundur
@endcomponent
