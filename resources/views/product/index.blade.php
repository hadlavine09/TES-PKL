<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data product
                        <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>uuid</th>
                                        <th>nama product</th>
                                        <th>type</th>
                                        <th>price</th>
                                        <th>quantity</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($product as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->uuid }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->type }}</td>
                                        <td>{{ $data->price }}</td>
                                        <td>{{ $data->quantity }}</td>
                                        <td>
                                            <form action="{{ route('product.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('product.edit', $data->id) }}"
                                                    class="btn btn-sm btn-outline-success">
                                                    Edit
                                                </a> |
                                                <a href="{{ route('product.show', $data->id) }}"
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

</body>

</html>