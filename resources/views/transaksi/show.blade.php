
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">UUID</label>
                            <input type="text" class="form-control" name="uuid" value="{{ $product->uuid }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product</label>
                            <input type="text" class="form-control" name="id_name" value="{{ $product->id_name }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <input type="number" class="form-control" name="amount" value="{{ $product->amount }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">User</label>
                            <input type="text" class="form-control" name="id_user" value="{{ $product->id_user }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tax</label>
                            <input type="text" class="form-control" name="tax" value="{{ $product->tax }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Admin Free</label>
                            <input type="text" class="form-control" name="admin_fre" value="{{ $product->admin_fre }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('product.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection