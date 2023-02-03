<!DOCTYPE html>
<html lang="en">
<?php
    include "_partials/head.php";
?>
    <!-- Leaflet -->
    <link rel="stylesheet" href="css/leaflet.css">
    <script src="js/leaflet.js"></script>
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css">
    <link rel="stylesheet" href="css/leaflet-measure.css">
    <style>
        #map {
            width: 1024px;
            height: 580px;
        }
        </style>
<body>
<?php
    include "_partials/nav.php";

?>
<div class="container-fluid col-lg-12 p-0">
    <div class="d-flex justify-content-center">
        <div id="map">
        </div>
    </div>
</div>
<?php
    include "_partials/footer.php";
?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-info btn-lg-square rounded-circle back-to-top text-white"><i class="fas fa-angle-double-up"></i></a>

<?php
    include "_partials/js_php.php";
?>
    <script src="js/qgis2web_expressions.js"></script>
    <script src="js/leaflet.rotatedMarker.js"></script>
    <script src="js/leaflet.pattern.js"></script>
    <script src="js/leaflet-hash.js"></script>
    <script src="js/Autolinker.min.js"></script>
    <script src="js/rbush.min.js"></script>
    <script src="js/labelgun.min.js"></script>
    <script src="js/labels.js"></script>
    <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
    <script src="js/leaflet-measure.js"></script>
    <?php
        include "webgis/w; $_GET[s];.php";
    ?>
</body>
</html>
