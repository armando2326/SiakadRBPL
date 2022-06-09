@extends('dashboard.layouts.main')

@section('container')


<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="text-center">Transkrip</h1>
</div>

<div class="container text-center d-flex justify-content-center">
  <div class="col-7">
    <table class="table table-bordered align-items-center justify-content-center mb-0">
    <thead>
      <tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mata Kuliah</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nilai</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SKS</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Semester</th>

      </tr>
    </thead>
    <tbody>
    @if ($score->count())
    @foreach ($score as $nilai)
      <tr>
        <td>
          <div class="d-flex px-2">
            <div class="my-auto">
              <h6 class="mb-0 text-sm">{{ $nilai->classroom->course->nama_mata_kuliah}}</h6>
            </div>
          </div>
        </td>
        <td>
          <p class="text-sm font-weight-bold mb-0">{{ $nilai->nilai_angka }}</p>
        </td>
        <td>
          <span class="text-xs font-weight-bold">{{ $nilai->classroom->course->sks }}</span>
        </td>
        <td>
          <span class="text-xs font-weight-bold">{{ $nilai->classroom->course->semester }}</span>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
</div>

</div>

  @endsection
