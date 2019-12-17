@extends('base')
@section('jobs','active')
@section('content')

<form action="{{route('jobs.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label>Nama Jobs</label>
    <input type="text" name="name" class="form-control" placeholder="...">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection