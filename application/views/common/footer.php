<!--   Core JS Files   -->

<script src="<?php echo base_url(''); ?>assets/script.js"></script>



<script>
    window.onpageshow = function (event) {
        if (event.persisted || (performance && performance.getEntriesByType("navigation")[0].type === 'back_forward')) {
            window.location.href = '<?php echo base_url('usedqr') ?>';

        }
    };
</script>