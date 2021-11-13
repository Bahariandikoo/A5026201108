<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

    <!-- CSS -->
    <style>
        input{
            margin-bottom: 10px;
        }

        select{
            margin-bottom: 10px;
        }

        .invalid-feedback{
          margin-bottom: 3%;
        }
    </style>
</head>
<body class="container">
    <div class="row justify-content-md-center">
        <div style="padding: 5%;" class="col-md-auto">
            <h1> Registration Form</h1>
            <br>
            <form name="myForm" action="https://www.linkedin.com/in/bahariandiko/" class="row g-3 needs-validation" novalidate>
                
              <div class="row">
                  <label for="Name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="validationCustom01" name="name" pattern="[A-Z a-z]{1,}" required>
                  <div class="invalid-feedback">
                    Tidak boleh ada angka
                  </div>
                </div>

                <div class="row">
                  <label for="Address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="validationCustom02" name="address" required>
                  <div class="invalid-feedback">
                    Tidak boleh kosong
                  </div>
                </div>

                <div class="row">
                  <label for="Email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="validationCustom03" name="email" required>
                  <div class="invalid-feedback">
                    Isi Format Email dengan benar.
                  </div>
                </div>

                <div class="row">
                  <label for="Password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="validationCustom04" name="password" minlength="8" maxlength="16" required>
                  <div class="invalid-feedback">
                    Minimal password 8 digit
                   </div>
                </div>

                <div class="row">
                  <label for="Telephone" class="form-label">Telephone</label>
                  <input type="tel" class="form-control" id="validationCustom05" name="telephone" pattern="\d*" minlength="7" maxlength="12" required>
                  <div class="invalid-feedback">
                    Tidak boleh ada karakter selain angka dan minimal 7 digit
                  </div>
                </div>

                <div class="row">
                  <label for="Course" class="form-label">SELECT YOUR COURSE</label>
                  <select class="form-select" id="validationCustom06" name="course"  required>
                    <option selected disabled value="">Choose...</option>
                    <option value="BTECH">BTECH</option>
                    <option value="BBA" >BBA</option>
                    <option value="BCA">BCA</option>
                    <option value="GEEKS" >GEEKFORGEEKS</option>
                  </select>
                  <div class="invalid-feedback">
                   Pilih course terlebih dahulu
                  </div>
                </div>

                <div class="row">
                  <label for="Code Zip" class="form-label"> Code Zip</label>
                  <input  class="form-control" name="zip" id="validationCustom07"  type="text" pattern="\d*" minlength="6" maxlength="6" required>
                  <div class="invalid-feedback">
                   Code zip harus angka dan 6 Digit
                   </div>
                  
                </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <button class="btn btn-danger" type="reset">Reset</button>
                </div>
                
              </form>

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
        </div>
      </div>
    

      
    
    <!-- Jquery -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>  

    </body>
</html>