@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Option List</div>
    <div class="card-body">
        @can('create-product')
            <a href="{{ route('options.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Option</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">Name</th>




                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($options as $option)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $option->name }}</td>

                    <td>
                        <form action="{{ route('options.destroy', $option->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('options.show', $option->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                            @can('edit-product')
                                <a href="{{ route('options.edit', $option->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-product')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="4">
                        <span class="text-danger">
                            <strong>No Option Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $options->links() }}

    </div>
</div>
@endsection
