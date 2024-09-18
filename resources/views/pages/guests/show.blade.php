@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-people"></span>
            Show - Guest
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                
            <table class="table table-striped table-primary">
                <tr>
                    <td>ID</td>
                    <td>{{ $guests->id }}</td>
                </tr>
         <tr>
            <td>Guests Name</td>
            <td>{{ $guests->fullname }}</td>
         </tr>
         <tr>
            <td>From</td>
            <td>{{ $guests->from}}</td>
         </tr>
         <tr>
            <td>Phone Number</td>
            <td>{{ $guests->phonenumber}}</td>
         </tr>
         <tr>
            <td>Email</td>
            <td>{{ $guests->email}}</td>
         </tr>
         <tr>
            <td>Note</td>
            <td>{{ $guests->note}}</td>
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
              <a href="{{ route('admin.guests.index') }}" class="btn btn-sm btn-primary mb-3">
              <span class="bi bi-arrow-left"></span>
              Kembali</a>
            </td>
        </div>
        </div>
    </section>
</div>
@endsection