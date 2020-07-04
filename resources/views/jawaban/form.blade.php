@extends('adminlte.master')


@section('content')
<h5>Form Jawaban</h5>
<div class="ml-3 mt-3">
    <form action="/jawaban" method="post">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nama:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
        </div>
     
        <div class="form-group row">
            <label for="jawaban" class="col-sm-2 col-form-label">Jawaban:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jawaban" name="jawaban" placeholder="Enter Jawaban">
            </div>
        </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection