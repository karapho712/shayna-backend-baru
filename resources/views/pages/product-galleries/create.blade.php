@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{route('product-galleries.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang </label>
                    <select name="product_id" class="form-control @error('product_id') is-invalid @enderror">
                    @foreach ($products as $product)
                        <option value="{{$product->id}}">{{$product -> name}}</option>
                    @endforeach
                    </select>
                    @error('products_id') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                
                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto Barang </label>
                    <input type="file" name="photo" value="{{old('photo') }}" accept="image/*" class="form-control" @error('photo') is-invalid @enderror/>
                    @error('photo') <div class="text-muted">{{$message}}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="is_default" class="form-control-label">Jadikan Default </label>
                    <br>
                    
                        <div class="custom-control custom-radio">
                            <input type="radio" id="is_default" name="is_default" value="1" class="custom-control-input form-control @error('is_default')is-invalid @enderror">
                            <label class="custom-control-label" for="is_default">Ya</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="is_default2" name="is_default" value="0" class="custom-control-input form-control @error('is_default')is-invalid @enderror">
                            <label class="custom-control-label" for="is_default2">Tidak</label>
                        </div>

                        {{-- <label>
                            <input type="radio" name="is_default" value="1" class="form-control @error('is_default')is-invalid @enderror"/>Ya
                        </label> --}}
                    
                        {{-- &nbsp; --}}
                    
                        {{-- <label>
                            <input type="radio" name="is_default" value="0" class="form-control @error('is_default') is-invalid @enderror"/>Tidak
                        </label> --}}

                    @error('is_default') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah Foto Barang
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

