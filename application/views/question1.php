<!DOCTYPE html>
<html lang="en">
<?php include_once "common/header.php"; ?>
<style>
    body {
        overflow: scroll;
    }

    .plan-content {
        display: flex;
        justify-content: space-between;
    }

    .btn-next {
        display: none;
        padding: 10px 20px;
        background-color: #45a049;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<body>
    <div class="container">
        <div class="plans bg-border">

            <form action="<?php echo base_url('Welcome/questionone') ?>" method="post" enctype="multipart/form-data"
                id="quizForm">
                <div class="col-12 d-flex justify-content-center">
                    <img class="round img" src="./assets/img/logo.png" width="70%" alt="">
                </div>
                <input type="hidden" name="pageid" value="1">
                <h1 class="title" id="timer">40 secound</h1>
                <div class="title">Q1. A dealership's area has total 100 mapped villages out of which 200 enquiries are
                    generated from 20 villages and 50 deliveries from 10 villages. What is the "delivery village
                    coverage?"
                    <input type="hidden" name="question" value="Q1. A dealership's area has total 100 mapped villages out of which 200 enquiries are generated from 20 villages and 50 deliveries from 10 villages. What is the 
                        delivery village coverage?">
                </div>
                <label class=" plan basic-plan" for="lower">
                    <input type="radio" name="plan" value="A.20%" id="lower">

                    <div class="plan-content">

                        <div class="plan-details">
                            <span>A.20%</span>

                        </div>
                    </div>
                </label>

                <label class="plan complete-plan" for="limits">
                    <input type="radio" id="limits" name="plan" value="B.25%">
                    <div class="plan-content">
                        <div class="plan-details">
                            <span>B. 25%</span>
                        </div>
                    </div>
                </label>
                <label class="plan complete-plan" for="complete">

                    <input type="radio" id="complete" name="plan" value="C.10%">
                    <div class="plan-content">
                        <div class="plan-details">

                            <span>C. 10%</span>
                        </div>
                    </div>
                </label>
                <label class="plan complete-plan" for="All">
                    <input type="radio" id="All" name="plan" value="D.33.3%">
                    <div class="plan-content">

                        <div class="plan-details">
                            <span>D. 33.3%</span>
                        </div>
                    </div>
                </label>

                <div class="w-100 col-12 mt-3 mt-3">


                    <input type="submit" class="btn w-100 btn-next" id="nextButton" value="Next">
                </div>
            </form>
        </div>
    </div>

    <?php include_once "common/footer.php"; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var seconds = 40; // Total seconds for the countdown
            var timerDisplay = document.getElementById("timer");

            // Function to update the timer display
            function updateTimerDisplay() {
                timerDisplay.textContent = seconds + 'seconds';
            }

            // Function to start the countdown timer
            function startTimer() {
                var timer = setInterval(function () {
                    seconds--; // Decrement the seconds
                    updateTimerDisplay(); // Update the timer display

                    if (seconds <= 0) {
                        clearInterval(timer); // Clear the timer when it reaches zero
                        window.location.href = "<?php echo base_url('question2'); ?>"; // Redirect to thanks page
                    }
                }, 1000); // Update timer every 1 second
            }

            // Start the timer when the document is fully loaded
            startTimer();
        });
    </script>
    <script>
        const form = document.getElementById('quizForm');
        const nextButton = document.getElementById('nextButton');

        // // Handle radio button click
        form.addEventListener('change', function (event) {
            const clickedRadioButton = event.target;
            if (clickedRadioButton.type === 'radio') {
                const radioButtons = form.querySelectorAll('input[type="radio"]');
                // radioButtons.forEach(function (radioButton) {
                //    // radioButton.checked = false;
                //     radioButton.disabled = true;
                // });
                //clickedRadioButton.checked = true;
                nextButton.style.display = 'block';
            }
        });

    </script>


</body>


</html>