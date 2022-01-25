
<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="<?= assets_url("assets/bundles/libscripts.bundle.js"); ?>"></script>
<script src="<?= assets_url("assets/bundles/vendorscripts.bundle.js");?>"></script>

<script src="<?= assets_url("assets/bundles/vendorscripts.bundle.js") ;?>"></script>

<script src="<?= assets_url('assets/bundles/knob.bundle.js'); ?>"></script> <!-- Jquery Knob-->
<script src="<?= assets_url('assets/bundles/flotscripts.bundle.js'); ?>"></script> <!-- flot charts Plugin Js -->
<script src="<?= assets_url('assets/vendor/toastr/toastr.js'); ?>"></script>
<script src="<?= assets_url('assets/vendor/flot-charts/jquery.flot.selection.js'); ?>"></script>

<script src="<?= assets_url('assets/bundles/mainscripts.bundle.js'); ?>"></script>

<script>
$(function () {
    $('.knob').knob({
        draw: function () {
        }
    });
});
</script>
<?php 
if(getPageUrl() == "doctor-profile.php"){
?>
<script src="<?= assets_url('assets/js/dr-profile.js'); ?>"></script>
<?php
}
?>

</body>
</html>