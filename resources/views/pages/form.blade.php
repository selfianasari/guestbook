<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Form</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
    
    <link rel="stylesheet" href="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

</head>
<body>
    <div class="container mp-4">
    <div class="row justify-content-center">
    <div class="col-md-9">
    <div class="card shadow">
    <div class="card-header">
        Guest Form
    </div>
    <div class="card-body">
    <p>Silahkan tambahkan data kamu sebagai tamu pada form dibawah :</p>

    @if (Session::has('success'))
    <div class="alert alert-success">
    {{ Session::get('success') }}
    </div>
    @endif

    <form action="{{ route('form.store') }}" method="POST">
    @csrf
    <div class="form-group mb-3">
    <label for="fullname">Nama Lengkap</label>
    <input type="text"  id="fullname" name="fullname" value="{{old('fullname')}}" class="form-control @error('fullname') is-invalid @enderror" required/>
    @error('fullname')
    <div class="invalid-feedback d-block">
    {{ $message }}
    </div>
    @enderror
    </div>

    <div class="row">
    <div class="col-md-4">
    <div class="form-group mb-3">
    <label for="institution_id">Instansi</label>
    <select name="institution_id" id="institution_id" class="form-select @error('institution_id') is-invalid @enderror" required >
    @foreach ($institutions as $item)
    <option value="{{$item->id}}" @if(old('institution_id')==$item->id) selected @endif>{{$item->name}}</option>
    @endforeach
    </select>
    @error('institution_id')
    <div class="invalid-feedback d-block">
    {{ $message }}
    </div>
    @enderror
    </div>
    </div>
    <div class="col-md-8">
    <div class="form-group mb-3">
    <label for="from"> Asal </label>
    <input type="text" id="from" name="from" value="{{old('from')}}" class="form-control @error('from') is-invalid @enderror" required/>
    @error('from')
    <div class="invalid-feedback d-block">
    {{ $message }}
    </div>
    @enderror
    </div>
    </div>
    </div>

    <div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="text"  id="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" required/>
    @error('email')
    <div class="invalid-feedback d-block">
    {{ $message }}
    </div>
    @enderror
    </div>

    <div class="form-group mb-3">
    <label for="phonenumber">Nomor Telepon</label>
    <input type="text" id="phonenumber" name="phonenumber" value="{{old('phonenumber')}}" class="form-control @error('phonenumber') is-invalid @enderror" required/>
    @error('phonenumber')
    <div class="invalid-feedback d-block">
    {{ $message }}
    </div>
    @enderror
    </div>

    <div class="form-group mb-3">
    <label for="note">Alasan Kunjungan</label>
    <textarea type="text"  id="note" name="note" value="{{old('note')}}" class="form-control @error('note') is-invalid @enderror" required></textarea>
    @error('note')
    <div class="invalid-feedback d-block">
    {{ $message }}
    </div>
    @enderror
    </div>

    <button type="submit" class="btn btn-info">submit
    <span class="bi bi-send ms-2"></span>
    </button>

    </div>
    </div>
    </div>
    </div>
    </div>
    
    <script src="{{asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/js/mazer.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
</body>
</html>