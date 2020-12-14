@component('mail::message')


<p style="text-align:center;" class="mb-0" >
                <img class="aligncenter " style="height: 300px ; width:300px; border:none" src=" {{asset('img/n.png')}}"  alt="">

</p>
Pengajuan Surat <b>{{ $pengajuan->kategori->nama }}</b> Anda Telah Jadi Silahkan Di Ambil Di Kelurahan.
<br>
Kepada <b>{{ $pengajuan->nama_pemesan }}</b> 
{{--  @component('mail::button', ['url' => ''])
Button Text
@endcomponent  --}}

Thanks,<br>
Desa Maju Mundur
@endcomponent
