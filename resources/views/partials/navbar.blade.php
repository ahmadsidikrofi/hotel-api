<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel Aja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        nav {
            height: 100px;
        }
    </style>
</head>

<body>
    <nav class="navbar shadow">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="navbar-brand" href="#">
                        <div class="row mt-3">
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ed1d30" class="bi bi-hospital-fill" viewBox="0 0 16 16">
                                    <path d="M6 0a1 1 0 0 0-1 1v1a1 1 0 0 0-1 1v4H1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h6v-2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5V16h6a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-3V3a1 1 0 0 0-1-1V1a1 1 0 0 0-1-1H6Zm2.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM2.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 9.75v-.5A.25.25 0 0 1 2.25 9Zm0 2h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5ZM13.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25Z"/>
                                </svg>
                            </div>
                            <div class="col me-5">
                                <p class="fw-bolder fs-3 text-danger ">TravelAja</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mt-3">
                    <form action="/show/hotel/all" class="d-flex" role="search">
                        <input class="form-control me-2 rounded-5 shadow" id="search-input"
                            style="width: 500px; height:40px;" type="search" name="search"
                            placeholder="Cari Hotel, Kota, atau Fasilitas" aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script>
    $(document).ready(function() {
        $('#search-input').on('input', function() {
            var searchValue = $(this).val();
            if (searchValue.length >= 3) {
                $.ajax({
                    url: window.location.href,
                    type: 'GET',
                    data: {
                        search: searchValue
                    },
                    beforeSend: function() {
                        // Tampilkan loading spinner atau indikator lainnya
                    },
                    success: function(response) {
                        $('#hotel-list').html(response);
                    },
                    error: function(xhr, status, error) {
                        // Tangani kesalahan jika ada
                    },
                    complete: function() {
                        // Sembunyikan loading spinner atau indikator lainnya
                    }
                });
            } else {
                // Kosongkan tampilan hasil pencarian jika input kurang dari 3 karakter
                $('#hotel-list').empty();
            }
        });
    });
</script> --}}
</html>
