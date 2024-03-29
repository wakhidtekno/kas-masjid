@extends('layouts.default')
@section('title','Tambah Pemasukan')
@section('header-title','Tambah Pemasukan')

@section('content')
<div class="card shadow mb-4 col-lg-6">
    <div class="card-body">
        <form action="{{route('transaksi.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="jumlah">jumlah</label>
                <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{old('jumlah')}}">
                @error('jumlah')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <input type="hidden" name="kategori" value="pemasukan">
            <div class="form-group">
                <label for="">Tanggal</label>
                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{old('tanggal')}}">
                @error('tanggal')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="perincian">Perincian</label>
                <textarea name="perincian" rows="3" id="perincian" class="form-control @error('perincian') is-invalid @enderror">{{old('perincian')}}</textarea>
                @error('perincian')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Kirim</button>
        </form>

    </div>
</div>
@endsection

@push('after-script')
@include('sweetalert::alert')
@endpush
