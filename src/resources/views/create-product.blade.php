<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>

    <link href="../css/app.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">AVALON SOLUTION</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/create">Create</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
            class="text-center rounded-3 border border-secondary p-5">
            @csrf
            <p class="h4 mb-4">Create Product</p>
            <input type="text" name="title" id="title"
                class="form-control @error('title') is-invalid @enderror" placeholder="Title">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <textarea name="description" id="description" class="form-control mt-2 @error('description') is-invalid @enderror"
                placeholder="Description">
            </textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="input-group mt-2">
                <div class="custom-file">
                    <input type="file" name="img" id="img"
                        class="custom-file-input @error('img') is-invalid @enderror">
                    @error('img')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <br>
            <button class="btn btn-info btn-block my-4" type="submit">Create</button>
        </form>
    </div>
    {{-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="text-center rounded-3 border border-secondary p-5">
            @csrf
            <p class="h4 mb-4">Create Product</p>
            <input type="text" name="title" id="title" class="form-control mb-4" placeholder="Title">
            <textarea name="description" id="description" class="form-control mb-4" placeholder="Description"></textarea>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="img" id="img" class="custom-file-input">
                </div>
            </div>
            <br>
            <button class="btn btn-info btn-block my-4" type="submit">Create</button>
        </form>
    </div>     --}}
    {{-- <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
            <br>
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
            <br>
            <label for="img">Image:</label>
            <input type="file" name="img" id="img">
            <br>
            <input type="submit" value="Create Product">
        </form> --}}

</body>

</html>
