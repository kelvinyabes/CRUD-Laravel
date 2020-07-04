@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">

  <h1>Data Jawaban</h1>

<table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Pertanyaan</th>
      </tr>
    </thead>
    
    <tbody>
      @foreach ($pertanyaan as $key => $p)
      <tr>
        <td> {{ $key+1 }} </td>
        <td> {{ $p ->name }} </td>
        <td> {{ $p ->pertanyaan }} </td>
      </tr>  
      @endforeach
    </tbody>
  </table>
  
  <a href="/jawaban/{{ $data->pertanyaan_id }}" class="btn btn-primary mb-3">
    Jawaban
</a>
  </div>

@endsection