<div>
<b>TODO: list daftar kategori di view ini</b>
</div>

<div>
Nama Kategori: {{$daftar_kategori[0]->name}}
</div>

<div>
{{ $kalimat }}
</div>

@extends("layouts.app")

@section("content")
    <ul>
        @foreach($daftar_kategori as $kategori)
            <li>{{ $kategori->name }}</li>
            <br/>
        @endforeach
    </ul>

    <hr>
    <!-- kode menampilkan pagination -->
    {{$daftar_kategori->links()}}
@endsection