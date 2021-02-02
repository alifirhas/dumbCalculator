<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendor/components/jquery/jquery.js"></script>
</head>
<body>
   <p></p>
   <div class="container-fluid">

        <div class="row">
            <div class="col-2"></div>
            <div class="col">

                <h1>Calculator V 0.1</h1>
                <form class="form-inline">
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" id="num1" placeholder="angka 1">
                        </div>
                        <div class="col">
                            <select id="operator" class="form-control">
                                <option value="">...</option>
                                <option value="tambah">+</option>
                                <option value="kurang">-</option>
                                <option value="kali">*</option>
                                <option value="bagi">/</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="num2" placeholder="angka 2">
                        </div>
                        <div class="col">
                            <button type="button" id="hitung" class="btn btn-primary mb-2">Hitung</button>
                        </div>
                    </div>
                </form>

                <div id="tempatHasil">
                    <input type="number" name="hasil" id="hasil" class="form-control" disabled>
                </div>

            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <script src="assets/js/index.js"></script>

</body>
</html>
