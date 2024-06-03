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
            <div class="col-12">
                <img class="round img" src="./assets/img/logo.png" width="100%" alt="">
            </div>
            <input type="hidden" name="pageid" value="questintxfive">
            <div class="col-12">
                <img class="round img" src="./assets/img/Thank_You.jpeg" width="100%" alt="">
            </div>

        </div>
    </div>

    <?php include_once "common/footer.php"; ?>
    <script>
        window.onpageshow = function (event) {
            if (event.persisted || (performance && performance.getEntriesByType("navigation")[0].type === 'back_forward')) {
                window.location.href = '<?php echo base_url('usedqr') ?>';

            }
        };

    </script>


</body>


</html>