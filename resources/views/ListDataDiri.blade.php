{{-- Mewarisi kerangka dari berkas datadiri.blade.php --}}
@extends('datadiri')

{{-- Mengisi bagian yield 'konten' --}}
@section('konten')
    <h3>Daftar Data Diri (Halaman Anak / Extends)</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $index => $mhs)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mhs['nim'] }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['prodi'] }}</td>
                <td>{{ $mhs['status'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection