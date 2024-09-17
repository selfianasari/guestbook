@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Show - Institution
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                
            <table class="table table-striped table-primary">
         <tr>
            <td>Institution Name</td>
            <td>{{ $institution->name }}</td>
         </tr>
         <tr>
                <td>Created at</td>
                <td>{{ Carbon\Carbon::parse( $institution->created )->isoformat('DD MMMM Y HH:mm')}}</td>
            </tr>
            <tr>
                <td>Update at</td>
                <td>{{ Carbon\Carbon::parse ($institution->update )->isoformat('DD MMMM Y HH:mm') }}</td>
            </tr>
            </table>

            <td>
              <a href="{{ route('admin.institution.index') }}" class="btn btn-sm btn-primary mb-3">
              <span class="bi bi-arrow-left"></span>
              Kembali</a>
            </td>
        </div>
        </div>
    </section>
</div>
@endsection