<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="jumbotron-fluid">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('tugas1/bcg.jpeg') }}" alt="Background Pizza" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('tugas1/gambar1.jpg') }}" alt="Gambar 1" width="75px" height="75px">
            </div>

            <div class="col-3">
                <img src="{{ asset('tugas1/gambar2.jpg') }}" alt="Gambar 2" width="75px" height="75px">
            </div>

            <div class="col-3">
                <img src="{{ asset('tugas1/gambar3.jpg') }}" alt="Gambar 3" width="75px" height="75px">
            </div>

            <div class="col-3">
                <img src="{{ asset('tugas1/gambar4.jpg') }}" alt="Gambar 4" width="75px" height="75px">
            </div>
        </div>

        <div class="row">
            <div class="col-9 mt-1">
                <div style="color: white; font-size: 20px;">Pepperoni pizza</div>
            </div>

            <div class="col-3 mt-2">
                <div style="color: white; font-size: 10px;">⭐4.5 Star</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div style="font-size: 28px;" class="text-danger my-0">$10.00</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <p style="color: white;">A traditional Neapolitan pizza topped with tomato sauce, fresh mozzarella cheese, basil leaves, and
                    drizzled with oil.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p style="color: white;">Size</p>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <button class="btn btn-dark btn-block text-white" style="border: 1px solid rgb(141, 141, 141);">S</button>
            </div>
            <div class="col-2">
                <button class="btn btn-danger btn-block text-white"style="border: 1px solid rgb(141, 141, 141);">M</button>
            </div>
            <div class="col-2">
                <button class="btn btn-dark btn-block text-white"style="border: 1px solid rgb(141, 141, 141);">L</button>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <p style="color: white;">Ingredients</p>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <button class="btn btn-dark" style="border: 1px solid rgb(141, 141, 141);">
                    <img src="{{ asset('tugas1/tomato.png') }}" width="40px" height="40px">
                </button>
            </div>
            <div class="col-2">
                <button class="btn btn-dark"style="border: 1px solid rgb(141, 141, 141);">
                    <img src="{{ asset('tugas1/basil.png') }}" width="40px" height="40px">
                </button>
            </div>
            <div class="col-2">
                <button class="btn btn-dark"style="border: 1px solid rgb(141, 141, 141);">
                    <img src="{{ asset('tugas1/onion.png') }}" width="40px" height="40px">
                </button>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-2 mt-4">
                <button class="btn btn-secondary" style="border: 1px solid rgb(141, 141, 141); height: 100%;">
                    <img src="{{ asset('tugas1/bag.png') }}" width="40px" height="40px">
                </button>
            </div>
            <div class="col-10 mt-4">
                <button class="btn btn-info" style="border: 1px solid rgb(141, 141, 141); display: flex; align-items: center; justify-content: center; height: 100%; width: 100%;">Order Now</button>
            </div>
        </div>

    </div>

</body>
</html>

