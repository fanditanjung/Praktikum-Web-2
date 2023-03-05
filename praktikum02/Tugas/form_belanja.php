<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BELANJA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

    <h3>BELANJA ONLINE</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-md-5">
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">CUSTOMER</label>
                        <div class="col-8">
                            <input id="customer" name="customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">PILIH PRODUK</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilih" id="pilih_0" type="radio" class="custom-control-input" value="TV" checked>
                                <label for="pilih_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilih" id="pilih_1" type="radio" class="custom-control-input" value="KULKAS">
                                <label for="pilih_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilih" id="pilih_2" type="radio" class="custom-control-input" value="MESIN CUCI">
                                <label for="pilih_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">JUMLAH</label>
                        <div class="col-8">
                            <select id="jumlah" name="jumlah" class="custom-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-3 mt-md-5 ">
            </div>
            <div class="col-md-3 mt-md-5 ">
                <table border="1" class="border-radius">
                    <tr style="background-color:skyblue;">
                        <td>DAFTAR HARGA</td>
                    </tr>
                    <tr>
                        <td>TV : 4.200.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas : 3.100.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci : 3.800.000</td>
                    </tr>
                    <tr style="background-color:skyblue;">
                        <td>Harga Dapat Berubah Setiap Saat</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST["submit"])) {

        // variabel untuk menyimpan value

        $customer = $_POST["customer"];
        $pilih = $_POST["pilih"];
        $jumlah = $_POST["jumlah"];

        if ($pilih == "TV") {
            $harga = 4200000;
        } elseif ($pilih == "KULKAS") {
            $harga = 3100000;
        } elseif ($pilih == "MESIN CUCI") {
            $harga = 3800000;
        }




        $total = $jumlah * $harga;


        echo "CUSTOMER : " . $customer . "<br>";
        echo "PRODUK : " . $pilih . "<br>";
        echo "JUMLAH : " . $jumlah . "<br>";
        echo "TOTAL HARGA :" . $total;
    }





    ?>
</body>

</html>