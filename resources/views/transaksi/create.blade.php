@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Obat
                    </div>
                    <div class="card-body">
                        <form action="{{ route('transaksi.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">UUID</label>
                                <input type="text" class="form-control  @error('uuid') is-invalid @enderror" name="uuid">
                                @error('uuid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Product </label>
                                <select name="text" class="form-control @error('id_product') is-invalid @enderror"
                                    id="">
                                    @foreach ($product as $data)
                                        <option value="{{ $data->id }}">{{ $data->name}}</option>
                                    @endforeach
                                </select>
                                @error('id_product')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">User</label>
                                <select name="text" class="form-control @error('id_user') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                                @error('id_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Amount</label>
                                <input type="number" class="form-control  @error('amount') is-invalid @enderror" name="amount">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="mb-3">
                                <label class="form-label">Tax</label>
                                <input type="number" class="form-control  @error('tax') is-invalid @enderror" name="tax">
                                @error('tax')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Admin Fre</label>
                                <input type="number" class="form-control  @error('admin_fre') is-invalid @enderror" name="admin_fre">
                                @error('admin_fre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection