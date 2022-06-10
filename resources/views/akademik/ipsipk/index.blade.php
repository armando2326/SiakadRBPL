@extends('dashboard.layouts.main')

@section('container')
{{-- <style>
    h1{
        margin-top: 15px;
    }
    .table{
    background-color:white;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #d2d2d2;
    border-right-color: #d2d2d2;
    border-bottom-color: #d2d2d2;
    border-left-color: #d2d2d2;

    padding-top: 16px;
    padding-right: 11px;
    padding-bottom: 13px;
    padding-left: 14px;
    margin-bottom: 15px;
    display: inline-block;
    position: relative;
    border-collapse: collapse;
}

</style> --}}


<div class="container">
    <div class="row">
        <div class="col-10 text-center mx-auto">
            <h1>IPS / IPK</h1>
            <br>
            <h5>Nama :
                {{$user->name}}
            </h5>
            <h5>NRP  :
                {{$user->nrp}}
            </h5>
        </div>
    </div>
    <br>
    <div class=" flex-col mx-6 col-3 mt-6 mb-3 d-flex justify-content-center mx-auto">
        <form class="form " method="get" @if (auth()->user()->type=='admin')
            action='/adminsearchips'
        @elseif (auth()->user()->type=='dosen')
            action='/dosensearchips'
        @else
            action="/search/ips"
        @endif>
          <select class="form-select mb-2" aria-label="Default select example" id="search" name="search" onchange="this.form.submit()">
            <option selected>Pilih Semester</option>
            <option value='all'>Semua</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
        </form>
      </div>
    <div class="row d-flex justify-content-center">
        <div class="col-7">
          <table class="table align-items-center justify-content-center mb-0 table-bordered">

            <thead class="text-center">
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode MK</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Semester</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mata Kuliah</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">Nilai</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">SKS</th>
              </tr>
            </thead>
            <tbody>
            {{-- @if ($scores->count()) --}}
            {{-- @foreach ($user->classrooms as $classroom) --}}
              <tr>
                @foreach ($scores as $score)
                      
                <td>
                    <div class="mx-auto">
                        <p class="text-sm font-weight-bold mb-0 text-center">
                            {{-- semester --}}
                            {{ $score->classroom->course->kode_mk }}
                        </p>
                    </div>
                </td>
                <td>
                  
                    <div class="mx-auto">
                        <p class="text-sm font-weight-bold mb-0 text-center">
                            {{-- semester --}}
                            {{ $score->semester }}
                        </p>
                    </div>
                </td>
                <td>
                    <div class="mx-5">
                        <p class="text-sm font-weight-bold mb-0">
                            {{-- mata kuliah --}}
                            {{ $score->classroom->course->nama_mata_kuliah }}
                        </p>
                    </div>
                </td>
                <td>
                  <div class="mx-5">
                      <p class="text-sm font-weight-bold mb-0">
                          {{-- mata kuliah --}}
                          {{ $score->classroom->kelas }}
                      </p>
                  </div>
              </td>
                <td>
                    <div class="mx-3">
                        <p class="text-sm font-weight-bold mb-0">
                        {{-- nilai --}}
                        {{ $score->nilai_angka }}
                        </p>
                    </div>
                </td>
                <td>
                    <div class="mx-3">
                        <p class="text-sm font-weight-bold mb-0">
                        {{-- nilai --}}
                        {{ $score->classroom->course->sks }}
                        </p>
                    </div>
                </td>
                {{-- <td>
                    <a class="btn btn-info " href={{url('dosen/transkrip/'.$user->id.'/edit')}}>Update</a>
                </td> --}}
              </tr>
              @endforeach
              {{-- @endforeach --}}
              {{-- @endif --}}
            </tbody>

          </table>
          
            <div class="card d-flex justify-content-center mt-5 mb-5">
            <div class="card-body d-flex justify-content-center">
                <div class="">
                    <h6>Total SKS: {{$sks}}</h6>
                    <h6>IPK      : {{$ipk}}</h6>
                    <h6>IPS      : {{$ips}}</h6>
                </div>
                
            </div>
          </div>
          
          
          
        </div>
    </div>


</div>
@endsection
