<!DOCTYPE html>
<html lang="en">
<?php include_once "common/header.php"; ?>

<body>
    <div class="wrapper">

        <div class="container-fluid">
            <div class="bg-border">
                <form class="row p-4 needs-validation" method="post"
                    action="<?php echo base_url(); ?>welcome/submit_form" enctype="multipart/form-data" novalidate>

                    <div class="hide">
                        <div class="col-12 mt-3 mx-auto w-75">
                            <img class="round img mx-auto" src="<?php echo base_url(); ?>assets/img/logo.png"
                                width="100%" alt="">
                        </div>
                        <div class="col-12 mt-3">
                            <label for="name">Name:</label><br>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="Number">Number:</label><br>
                            <input type="tel" class="form-control" id="Number" name="number" placeholder="Number"
                                required>
                            <div class="invalid-feedback">
                                Please choose a Number.
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="designation">Designation:</label><br>
                            <select id="designation" class="form-control" name="designation" required>
                                <option value="">select Designation</option>
                                <option value="ABM ">ABM </option>
                                <option value="RBM">RBM</option>
                                <option value="Sales Officer">Sales Officer</option>
                                <option value="Others">Others</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a Designation.
                            </div>
                        </div>

                        <div class="form-group col-12 mt-3">
                            <label for="inputState">State:</label>
                            <select class="form-control" name="state" id="inputState">
                                <option value="">Select State</option>
                                <option value="Andra Pradesh">Andra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madya Pradesh">Madya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttaranchal">Uttaranchal</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
                                <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadeep">Lakshadeep</option>
                                <option value="Pondicherry">Pondicherry</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a State.
                            </div>
                        </div>
                        <div class="w-100 col-12 mt-3 mt-3">


                            <input type="submit" class="btn w-100" id="button" value="Submit">
                        </div>
                    </div>
                    <div class="show" style="display: none;">
                        <p class="color-black">Hey @⁨anuj
                            Can we pls time the question answering to 40 second - incase if the person doesn’t answer in
                            40 seconds - it moves ahead</p>
                        <br>
                        <div class="w-100 col-12 mt-3 mt-3">


                            <input type="submit" class="btn w-100" value="next">
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <?php include_once "common/footer.php"; ?>
        <script>

            document.addEventListener('DOMContentLoaded', function () {
                const button = document.getElementById('button');
                const showDiv = document.querySelector('.show');
                const hideDiv = document.querySelector('.hide');
                button.addEventListener('click', function () {
                    // Show the div

                    hideDiv.style.display = 'none';
                    showDiv.style.display = 'block';
                });
            });
        </script>
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
</body>


</html>