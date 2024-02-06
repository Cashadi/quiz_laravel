<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- css link --}}
    <link rel="stylesheet" href="todolist.css">
</head>

<body>
    <div class="container">
        <div class="col-12 flex-column justify-content-center align-items-center gap-3 form--content">
            <h4>All Tasks</h4>
            <form id="form" class="d-flex flex-column gap-3">
                <input id="tittleTask" type="text" class="form-control col-lg-12" placeholder="Add new stack" />
                <button type="button" class="btn btn-outline-danger">
                    Save
                </button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
