<!DOCTYPE html>

<head>
    <!-- Bootstrap, CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>


    <div class="container-fluid">
        <div class="row" style="margin: 10px">

            {{-- left side container, provide text field for record bug details to be inserted by client --}}
            <div class="col-md-6">
                <form action="{{route('bugs.create')}}" method="post">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Bug Name:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Description:</label>
                            <input type="text" name="description" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Date Faced Problem:</label>
                            <input type="date" name="date_faced_problem" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success" style="margin-top: 2%; float: right; width: 150px">Create</button>
                        </div>
                    </div>

                </form>
            </div>

            {{-- right side container, provide list of bug reported by client --}}
            <div class="col-md-6">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Date Faced Problem</th>
                    </tr>
                    @foreach ($bug as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->date_faced_problem}}</td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</body>

</html>
