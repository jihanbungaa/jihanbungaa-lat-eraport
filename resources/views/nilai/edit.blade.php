@extends('layout.main')
@section('name')
    <h3>Edit Nilai {{ $siswa->nama_siswa}}</h3>
@endsection
@section('content')
    @if (session('error'))
    <p class="text-danger">{{ session('error') }}</p>
    @endif

    <center>
    <form action="/nilai-raport/update/{{ $nilai->id}}" method="POST">
    @method('PUT')
    @csrf

        <table>
            <tr class="position">
                <td>
                    <label for="siswa_id">Nama Siswa </label><br><br>
                </td>
                <td>
                    <input value="{{ $siswa->id}}" type="hidden" name="siswa_id" id="siswa_id" step="0.01" required>
                    <input value="{{ $siswa->nama_siswa }}" type="text" step="0.01" readonly><br><br>
                </td>
            </tr>

            <tr class="position">
                <td>
                    <label for="matematika">Matematika</label><br><br>
                </td>
                <td>
                    <input value="{{ $nilai->matematika }}" type="number" name="matematika" step="0.01" required><br><br>
                </td>
            </tr>

            <tr class="position">
                <td>
                    <label for="indonesia">Indonesia</label><br><br>
                </td>
                <td>
                    <input value="{{ $nilai->indonesia }}" type="number" name="indonesia" step="0.01" required><br><br>
                </td>
            </tr>

            <tr class="position">
                <td>
                    <label for="inggris">Inggris</label><br><br>
                </td>
                <td>
                    <input value="{{ $nilai->inggris }}" type="number" name="inggris" step="0.01" required><br><br>
                </td>
            </tr>

            <tr class="position">
                <td>
                    <label for="kejuruan">Kejuruan</label><br><br>
                </td>
                <td>
                    <input value="{{ $nilai->kejuruan }}" type="number" name="kejuruan" step="0.01" required><br><br>
                </td>
            </tr>

            <tr class="position">
                <td>
                    <label for="pilihan">pilihan</label><br><br>
                </td>
                <td>
                    <input value="{{ $nilai->pilihan }}" type="number" name="pilihan" step="0.01" required><br><br>
                </td>
            </tr>
        </table>
        <button class="button-submit" type="submit">Simpan</button>
    </form>
    </center>
@endsection
