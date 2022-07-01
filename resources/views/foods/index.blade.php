<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <style>
        .hidden{
            display: none;
        }
        .imgFood{
            width: 100%;
        }
    </style>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Linhh restaurant</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('foods.create') }}"> Create Food</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>S.No</th>
                <th>Food Name</th>
                <th>Food Image</th>
                <th>Food price</th>
                <th>Food sub</th>
                <th>Food category</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($foods as $food)
            <tr>
                <td>{{ $food->id }}</td>
                <td>{{ $food->name }}</td>
                <td><img class="imgFood" src="{{ $food->img }}" alt="food"></td>
                <td>{{ $food->price }}</td>
                <td>{{ $food->sub }}</td>
                <td>{{ $food->category }}</td>
                <td>
                    
                    <form action="{{ route('foods.destroy',$food->id) }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    
        {{ $foods->links() }}
</body>

</html>