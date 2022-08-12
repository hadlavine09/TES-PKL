
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data product
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">UUID</label>
                                <input type="text" class="form-control  @error('uuid') is-invalid @enderror"
                                name="uuid" value="{{ $product->uuid }}">
                                @error('uuid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">User</label>
                                <input type="text" class="form-control  @error('id_user') is-invalid @enderror"
                                name="id_user" value="{{ $product->id_user }}">
                                @error('id_user')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Product</label>
                                <input type="text" class="form-control  @error('id_product') is-invalid @enderror"
                                id_product="id_product" value="{{ $product->id_product }}">
                                @error('id_product')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Amount</label>
                                <input type="number" class="form-control  @error('amount') is-invalid @enderror"
                                name="amount" value="{{ $product->amount }}">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tax</label>
                                <input type="number" class="form-control  @error('tax') is-invalid @enderror"
                                name="tax" value="{{ $product->tax }}">
                                @error('tax')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Admin Fre</label>
                                <input type="number" class="form-control  @error('admin_fre') is-invalid @enderror"
                                name="admin_fre" value="{{ $product->admin_fre }}">
                                @error('admin_fre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
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