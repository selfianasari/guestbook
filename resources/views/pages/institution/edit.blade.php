@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Update - Institution
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
            <form action="{{ route('admin.institution.update', $institution->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-2">
                <label for="name" class="form-label">Institution Name</label>
                <input type="text" name="name" id="name" value="{{ $institution->name }}" class="form-control" />
            </div>

             <button type="submit" class="btn btn-primary">Simpan</button>

            <a href="{{ route('admin.institution.index') }}" class="btn btn-secondary">Batal</a>
        </form>
            </div>
        </div>
@endsection