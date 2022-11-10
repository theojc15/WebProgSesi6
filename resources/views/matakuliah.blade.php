{{-- EXTEND --}}
@extends('home')

@php
    $x = 0;
@endphp
{{-- SECTION --}}
@section('konten')
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <h3 style="color: white">Daftar Matakuliah</h3>
                <div class="table100">
                    <table>
                        <thead>
                        <tr class="table100-head">
                            <th class="column3">Kode Matakuliah</th>
                            <th class="column3">Nama Matakuliah</th>
                        </tr>
                        </thead>
                        <tbody>
                            {{-- FOR ELSE --}}
                            @forelse($matkul as $i)
                                <tr>
                                    <td class="column3">{{ $i[0] }}</td>
                                    <td class="column3">{{ $i[1] }}</td>
                                </tr>
                            @empty
                                <li class="column3">No User</li>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="wrap-table100">
                <h3 style="color: white">Jumlah Mahasiswa Dalam Matakuliah</h3>
                <div class="table100">
                    <table>
                        <thead>
                        <tr class="table100-head">
                            <th class="column3">Kode Matakuliah</th>
                            <th class="column3">Jumlah Mahasiswa</th>
                        </tr>
                        </thead>
                        <tbody>
                            {{-- WHILE--}}
                            @while($x < count($matkul))
                                <tr>
                                    <td class="column3">{{ $matkul[$x][0] }}</td>
                                    <td class="column3">{{ $matkul[$x][2] }}</td>
                                </tr>
                                @php $x++; @endphp
                            @endwhile
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
