<div>
    <table class="table table-striped">
        <thead class="table table-striped bg-info">
            <tr>
                <th>ID</th>
                <th>Store Name</th>
                <th>Product</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gym as $gm)
                <tr>
                    <td>{{ $gm->id }}</td>
                    <td>{{ $gm->firstname }}</td>
                    <td>{{ $gm->lastname }}</td>
                    <td>{{ $gm->address }}</td>
                    <td>
                        <a href="{{ url('edit', ['gm' => $gm->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['gm' => $gm->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

