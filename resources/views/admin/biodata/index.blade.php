@extends('admin.adminDashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Biodata</h1>
</div>

<div class="container">
    @if($students->count())
    @foreach ($students as $student)
        <article class="container mb-5 border-bottom">
                <p>Nama: {{$student->name}}</p>
                <p>NRP : {{$student->nrp}}</p>
        </article>
    @endforeach
    @endif
</div>
@endsection