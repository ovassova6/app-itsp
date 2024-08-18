@extends('layouts.content')

@section('title')
    Detail Jenis Pohon {{ $jenispohon->nama_lokal }} / <i>{{ $jenispohon->nama_ilmiah }}</i>
@endsection

@section('content')
<style>
    .card {
        padding: 20px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed; /* Pastikan kolom memiliki lebar tetap */
    }

    .table th, .table td {
        padding: 10px;
        vertical-align: top;
        overflow-wrap: break-word; /* Tangani kata-kata panjang */
        word-wrap: break-word;
        text-align: left; /* Rata kiri teks untuk konsistensi */
    }

    .table th {
        background-color: #f8f9fa;
        font-weight: bold;
        width: 200px; /* Sesuaikan lebar untuk memastikan ruang yang cukup */
    }

    .table td {
        max-width: 300px; /* Batasi lebar sel untuk mencegah meluber */
    }

    .btn {
        margin-top: 20px;
    }

    /* Penyesuaian responsif */
    @media (max-width: 768px) {
        .table th, .table td {
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        .table th {
            text-align: left;
        }
    }
</style>


<div class="card">
    <table class="table table-bordered">
        <tr>
            <th>Nama Lokal</th>
            <td>{{ $jenispohon->nama_lokal }}</td>
        </tr>
        <tr>
            <th>Nama Ilmiah</th>
            <td><i>{{ $jenispohon->nama_ilmiah }}</i></td>
        </tr>
        <tr>
            <th>Kategori Pohon</th>
            <td>{{ $jenispohon->kategori_pohon->nama }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $jenispohon->deskripsi }}</td>
        </tr>
    </table>
</div>
<a href="{{ route('jenispohons.index') }}" class="btn btn-secondary btn-sm">
    <i class="fas fa-arrow-left"></i>
    <span class="text">Kembali</span>
</a>
@endsection
