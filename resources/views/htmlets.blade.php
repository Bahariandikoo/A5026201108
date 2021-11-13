<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peserta Vaksinasi</title>

      <!-- Boostrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


      <!-- CSS-->
      <style>
          body{
              padding: 10%;
          }

          td{
              padding: 2%;
          }
      </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p> Baharian Diko <br> Diko <br> 5026201108 </p>
            </div>
        </div>

        <!-- Tabel form -->
        <div class="row">
            <div class="col">
                <h3 style="text-align: center;">Form Input Peserta Vaksinasi</h3> <br>
                <form  name="myForm" action="https://www.pedulilindungi.id/" class="needs-validation" novalidate>
                    @csrf
                    <table align="center" >
                        <tr>
                            <td> <label for="nama"> Nama peserta  </label></td>
                            <td> <input class="form-control" name="nama" type="text" pattern="[A-Z a-z]{10,}" required>
                                <div class="invalid-feedback">
                                   Tidak boleh ada angka
                                   </div></td>
                        </tr>
                        <tr>
                            <td><label for="NIK"> NIK </label></td>
                            <td> <input class="form-control" type="text" minlength="16" maxlength="16" pattern="\d*" required>
                                <div class="invalid-feedback">
                                    16 Digit angka
                                   </div> </td>

                        </tr>
                        <tr>
                            <td> <label for="vaksin">Jenis vaksin </label></td>
                            <td> <select name="vaksin" class="form-select" id="vaksin"  required>
                                <option selected disabled value="">Pilih jenis vaksin</option>
                                <option value="astrazeneca">AZ</option>
                                <option value="Sinovac">Sinovac</option>
                                <option value="moderna">Moderna</option>
                            </select>
                            <div class="invalid-feedback">
                                Pilih vaksin
                               </div></td>
                        </tr>
                        <tr>
                            <td>  <label for="nb">No Batch </label> </td>
                            <td>  <input  class="form-control" type="text" name="nobatch" pattern="[a-zA-Z0-9/s]{1,}" required>
                                <div class="invalid-feedback">
                                    Tidak boleh ada tanda baca dan spasi
                                   </div></td>
                        </tr>
                    </table>
                    <br>
                    <div class="row" >
                        <div class="col" style="text-align: center;" >
                            <button class="btn btn-primary" type="submit">Send</button>
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>

            // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
    .forEach(function (form) {
    form.addEventListener('submit', function (event) {


    if (!form.checkValidity()) {
    event.preventDefault()
    event.stopPropagation()
    }

    form.classList.add('was-validated')
    }, false)
    })
    })()



    </script>

        <!-- Jquery -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </div>
</body>
</html>
