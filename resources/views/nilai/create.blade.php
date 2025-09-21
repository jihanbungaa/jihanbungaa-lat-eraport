@extends('layout.main')
@section('name')
    <h3>Tambahkan Nilai</h3>
@endsection
@section('content')

<h3>Create Nilai</h3>
@if (session('error'))
<p class="text-danger">{{ session('error') }}</p>
@endif

<form class="form" action="/nilai-raport/store" method="POST">
    @csrf
    <table>
        <tr class="position">
            <td>
                <label for="siswa_id">Nama Siswa</label>
            </td>
            <td>
                <select name="siswa_id" id="siswa_id" required>
                    <option value="">Pilih Siswa</option>
                    @foreach ($siswa as $each)
                        <option value="{{ $each->id }}">{{ $each->nama_siswa}}</option>
                    @endforeach
                </select>
            </td>
        </tr>

       <tr class="position">
            <td>
                <label for="matematika">Matematika</label>
            </td>
            <td>
                <input type="number" name="matematika" id="matematika" min="0" max="100" step="0.01" required>
            </td>
       </tr>

       <tr class="position">
            <td>
                <label for="indonesia">Indonesia</label>
            </td>
            <td>
                <input type="number" name="indonesia" id="indonesia" min="0" max="100" step="0.01" required>
            </td>
       </tr>

       <tr class="position">
            <td>
                <label for="inggris">Inggris</label>
            </td>
            <td>
                <input type="number" name="inggris" id="inggris" min="0" max="100" step="0.01" required>
            </td>
       </tr>

       <tr class="position">
            <td>
                <label for="kejuruan">Kejuruan</label>
            </td>
            <td>
                <input type="number" name="kejuruan" id="kejuruan" min="0" max="100" step="0.01" required>
            </td>
       </tr>

       <tr class="position">
            <td>
                <label for="pilihan">Pilihan</label>
            </td>
            <td>
                <input type="number" name="pilihan" id="pilihan" min="0" max="100" step="0.01" required>
            </td>
       </tr>
    </table>
    <button class="button-submit" type="submit">Simpan</button>
</form>
@endsection
