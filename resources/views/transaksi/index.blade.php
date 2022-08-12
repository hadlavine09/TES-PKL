@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                    Data obat
                    <a href="{{ route('transaksi.create') }}" class="btn btn-sm btn-primary" style="float: right">
                        Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Uuid</th>
                                    <th>Nama Product</th>
                                    <th>Id User</th>
                                    <th>amount</th>
                                    <th>tax</th>
                                    <th>admin fre</th>
                                    <th>total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($transaksi as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->uuid }}</td>
                                    <td>{{ $data->product->name }}</td>
                                    <td>{{ $data->id_user}}</td>
                                    <td>{{ $data->amount }}</td>
                                    <td>{{ $data->tax}}</td>
                                    <td>{{ $data->admin_fre }}</td>
                                    <td>{{ $data->total }}</td>
                                    <td>
                                        <form action="{{ route('transaksi.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('transaksi.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">
                                                Edit
                                            </a> |
                                            <a href="{{ route('transaksi.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-warning">
                                                Show
                                            </a> |
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection