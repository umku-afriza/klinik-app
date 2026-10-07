@extends('layouts.app')
@section('title', 'Pasien')
@section('content')
 <div class="app-content-header">
          <div class="container-fluid">
            <h1 class="mb-0 fs-3">Pasien</h1>
          </div>
        </div>
        <div class="app-content">
          <div class="container-fluid">
            <div class="card">
               <table border="1">
                  @forelse ($patients as $patient)
                  <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $patient->medical_record_number }}</td>
                  <td>{{ $patient->name }}</td>
                  <td>{{ $patient->address }}</td>
                  </tr>
                  @empty
                  <tr>
                  <td colspan="4">Belum ada data pasien.</td>
                  </tr>
                  @endforelse
               </table>
            </div>
          </div>
        </div>



@endsection
