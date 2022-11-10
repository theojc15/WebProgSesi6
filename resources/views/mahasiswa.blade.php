@include('home')
<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <h3 style="color: white">Daftar Mahasiswa</h3>
            <div class="table100">
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column3">NIM</th>
                        <th class="column3">Nama</th>
                        <th class="column3">Jurusan</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{-- FOR EACH--}}
                        @foreach($mahasiswa as $i)
                            <tr>
                                <td>{{ $i[0] }}</td>
                                <td>{{ $i[1] }}</td>
                                @if($i[2] == "IS")
                                    <td class="column3">Intelligence System</td>
                                @elseif($i[2] == "GT")
                                    <td class="column3">Game Technology</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="wrap-table100">
            <h3 style="color: white">Daftar IPK Mahasiswa</h3>
            <div class="table100">
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column3">NIM</th>
                        <th class="column3">IPK</th>
                        <th class="column3">Grade</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{-- FOR --}}
                        @for($i = 0; $i < count($mahasiswa); $i++)
                            <tr>
                                <td class="column3">{{ $mahasiswa[$i][0] }}</td>
                                <td class="column3">{{ $mahasiswa[$i][3] }}</td>
                                @if($mahasiswa[$i][3] < 3.7)
                                    <td class="column3">B+</td>
                                @elseif($mahasiswa[$i][3] < 3.9)
                                    <td class="column3">A-</td>
                                @elseif($mahasiswa[$i][3] >= 3.9)
                                    <td>A</td>
                                @endif
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


