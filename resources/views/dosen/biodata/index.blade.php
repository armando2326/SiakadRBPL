@extends('dashboard.layouts.main')

@section('container')


<div class="container justify-content-center">
    {{-- Content --}}
    <main>

        <div class="content">

            <div class="row mb-4">
                <h2 class="fw-bold text-center mt-5">Biodata</h2>
            </div>
            <div class="row mb-4">
                <div class=" text-center">
                    <div class="d-flex align-items-center justify-content-center">
                         <form class="col-lg-5  justify-content-center ">
                        @csrf
                        <div class="input-group form-floating mb-3">
                            <input type="text" id="nama" name="nama" class="form-control" value="{{auth()->user()->name}}" disabled>
                            <label for="nama" class="form-label">Nama Lengkap</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="email" id="email" name="email" class="form-control" value="{{auth()->user()->email}}" disabled>
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="email" id="alamat" name="alamat" class="form-control" value="{{auth()->user()->address}}" disabled>
                            <label for="alamat" class="form-label">Alamat</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="email" id="angkatan" name="angkatan" class="form-control" value="{{auth()->user()->generation}}" disabled>
                            <label for="angkatan" class="form-label">Angkatan</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="email" id="departemen" name="departemen" class="form-control" value="{{auth()->user()->major->nama_jurusan}}" disabled>
                            <label for="departemen" class="form-label">Departemen</label>
                        </div>
                        <div class=" d-flex justify-content-center">
                            <a class="btn btn-info " href={{url('dosen/biodata/'.$user->id.'/edit')}}>Update</a>
                        </div>
                    </form>
                    
                    </div>
  
                    <div class="mt-4">
                        {{-- <a href="/dosen/biodata">
                            <button class="btn btn-warning">
                                <i class="bi bi-pencil-square fs-5"></i><span class="fs-5 ms-2">Kembali</span>
                            </button>
                        </a> --}}
                    </div>
                    
                </div>
                
            </div>
        </div>
    </main>
</div>


@endsection