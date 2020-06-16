@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Transaksi</strong> <br>
            <small>{{$item->uuid}}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{route('transaction.update', $item->id)}}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Pemesan </label>
                    <input type="text" name="name" value="{{old('name') ? old('name') : $item->name  }}" class="form-control" @error('name') is-invalid @enderror/>
                    @error('name') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="email" name="email" value="{{old('email') ? old('email') : $item->email }}" class="form-control @error('type') is-invalid @enderror"/>
                    @error('email') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="number" class="form-control-label">Nomor Hp </label>
                    <input type="number" name="number_hp" value="{{old('number_hp') ? old('number_hp') : $item->number_hp }}" class="form-control @error('number_hp') is-invalid @enderror" />
                    @error('number_hp') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="address" class="form-control-label">Alamat Pemesanan </label>
                    <input type="text" name="address" value="{{old('address') ? old('address') : $item->address }}" class="form-control" @error('address') is-invalid @enderror/>
                    @error('address') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Transaksi
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection