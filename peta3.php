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
    <script src="data/Batas_RT_Bansir_Laut_1.js"></script>
    <script src="data/MENDAWAI_AR_2.js"></script>
    <script src="data/PETA_BIDANG_125_3.js"></script>
    <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-0.057235881595769374,109.33321888554137],[-0.03368976107486743,109.37590625382994]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_GoogleSatelliteHybrid_0');
        map.getPane('pane_GoogleSatelliteHybrid_0').style.zIndex = 400;
        var layer_GoogleSatelliteHybrid_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleSatelliteHybrid_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_GoogleSatelliteHybrid_0;
        map.addLayer(layer_GoogleSatelliteHybrid_0);
        function pop_Batas_RT_Bansir_Laut_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama_RT'] !== null ? autolinker.link(feature.properties['Nama_RT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['luas'] !== null ? autolinker.link(feature.properties['luas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Batas_RT_Bansir_Laut_1_0() {
            return {
                pane: 'pane_Batas_RT_Bansir_Laut_1',
                opacity: 1,
                color: 'rgba(0,248,37,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_Batas_RT_Bansir_Laut_1');
        map.getPane('pane_Batas_RT_Bansir_Laut_1').style.zIndex = 401;
        map.getPane('pane_Batas_RT_Bansir_Laut_1').style['mix-blend-mode'] = 'normal';
        var layer_Batas_RT_Bansir_Laut_1 = new L.geoJson(json_Batas_RT_Bansir_Laut_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Batas_RT_Bansir_Laut_1',
            layerName: 'layer_Batas_RT_Bansir_Laut_1',
            pane: 'pane_Batas_RT_Bansir_Laut_1',
            onEachFeature: pop_Batas_RT_Bansir_Laut_1,
            style: style_Batas_RT_Bansir_Laut_1_0,
        });
        bounds_group.addLayer(layer_Batas_RT_Bansir_Laut_1);
        map.addLayer(layer_Batas_RT_Bansir_Laut_1);
        function pop_MENDAWAI_AR_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Luas_ha'] !== null ? autolinker.link(feature.properties['Luas_ha'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_MENDAWAI_AR_2_0() {
            return {
                pane: 'pane_MENDAWAI_AR_2',
                opacity: 1,
                color: 'rgba(255,255,0,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_MENDAWAI_AR_2');
        map.getPane('pane_MENDAWAI_AR_2').style.zIndex = 402;
        map.getPane('pane_MENDAWAI_AR_2').style['mix-blend-mode'] = 'normal';
        var layer_MENDAWAI_AR_2 = new L.geoJson(json_MENDAWAI_AR_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_MENDAWAI_AR_2',
            layerName: 'layer_MENDAWAI_AR_2',
            pane: 'pane_MENDAWAI_AR_2',
            onEachFeature: pop_MENDAWAI_AR_2,
            style: style_MENDAWAI_AR_2_0,
        });
        bounds_group.addLayer(layer_MENDAWAI_AR_2);
        map.addLayer(layer_MENDAWAI_AR_2);
        function pop_PETA_BIDANG_125_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Join_Count'] !== null ? autolinker.link(feature.properties['Join_Count'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TARGET_FID'] !== null ? autolinker.link(feature.properties['TARGET_FID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Entity'] !== null ? autolinker.link(feature.properties['Entity'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Handle'] !== null ? autolinker.link(feature.properties['Handle'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Owner'] !== null ? autolinker.link(feature.properties['Owner'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Layer'] !== null ? autolinker.link(feature.properties['Layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LyrFrzn'] !== null ? autolinker.link(feature.properties['LyrFrzn'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LyrLock'] !== null ? autolinker.link(feature.properties['LyrLock'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LyrOn'] !== null ? autolinker.link(feature.properties['LyrOn'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LyrVPFrzn'] !== null ? autolinker.link(feature.properties['LyrVPFrzn'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LyrHandle'] !== null ? autolinker.link(feature.properties['LyrHandle'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Color'] !== null ? autolinker.link(feature.properties['Color'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['EntColor'] !== null ? autolinker.link(feature.properties['EntColor'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LyrColor'] !== null ? autolinker.link(feature.properties['LyrColor'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['BlkColor'] !== null ? autolinker.link(feature.properties['BlkColor'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Linetype'] !== null ? autolinker.link(feature.properties['Linetype'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['EntLinetyp'] !== null ? autolinker.link(feature.properties['EntLinetyp'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LyrLnType'] !== null ? autolinker.link(feature.properties['LyrLnType'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['BlkLinetyp'] !== null ? autolinker.link(feature.properties['BlkLinetyp'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Elevation'] !== null ? autolinker.link(feature.properties['Elevation'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Thickness'] !== null ? autolinker.link(feature.properties['Thickness'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LineWt'] !== null ? autolinker.link(feature.properties['LineWt'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['EntLineWt'] !== null ? autolinker.link(feature.properties['EntLineWt'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LyrLineWt'] !== null ? autolinker.link(feature.properties['LyrLineWt'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['BlkLineWt'] !== null ? autolinker.link(feature.properties['BlkLineWt'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RefName'] !== null ? autolinker.link(feature.properties['RefName'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LTScale'] !== null ? autolinker.link(feature.properties['LTScale'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ExtX'] !== null ? autolinker.link(feature.properties['ExtX'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ExtY'] !== null ? autolinker.link(feature.properties['ExtY'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ExtZ'] !== null ? autolinker.link(feature.properties['ExtZ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['DocName'] !== null ? autolinker.link(feature.properties['DocName'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['DocPath'] !== null ? autolinker.link(feature.properties['DocPath'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['DocType'] !== null ? autolinker.link(feature.properties['DocType'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['DocVer'] !== null ? autolinker.link(feature.properties['DocVer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ScaleX'] !== null ? autolinker.link(feature.properties['ScaleX'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ScaleY'] !== null ? autolinker.link(feature.properties['ScaleY'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ScaleZ'] !== null ? autolinker.link(feature.properties['ScaleZ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Style'] !== null ? autolinker.link(feature.properties['Style'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['FontID'] !== null ? autolinker.link(feature.properties['FontID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Text'] !== null ? autolinker.link(feature.properties['Text'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Height'] !== null ? autolinker.link(feature.properties['Height'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtAngle'] !== null ? autolinker.link(feature.properties['TxtAngle'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtWidth'] !== null ? autolinker.link(feature.properties['TxtWidth'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtOblique'] !== null ? autolinker.link(feature.properties['TxtOblique'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtGenType'] !== null ? autolinker.link(feature.properties['TxtGenType'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtJust'] !== null ? autolinker.link(feature.properties['TxtJust'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['VertAlign'] !== null ? autolinker.link(feature.properties['VertAlign'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtFont'] !== null ? autolinker.link(feature.properties['TxtFont'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtBoxHt'] !== null ? autolinker.link(feature.properties['TxtBoxHt'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtBoxWd'] !== null ? autolinker.link(feature.properties['TxtBoxWd'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtRefWd'] !== null ? autolinker.link(feature.properties['TxtRefWd'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtAttach'] !== null ? autolinker.link(feature.properties['TxtAttach'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtDir'] !== null ? autolinker.link(feature.properties['TxtDir'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LnSpace'] !== null ? autolinker.link(feature.properties['LnSpace'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SpaceFct'] !== null ? autolinker.link(feature.properties['SpaceFct'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TxtMemo'] !== null ? autolinker.link(feature.properties['TxtMemo'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Leng'] !== null ? autolinker.link(feature.properties['Shape_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Area'] !== null ? autolinker.link(feature.properties['Shape_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_PETA_BIDANG_125_3_0() {
            return {
                pane: 'pane_PETA_BIDANG_125_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,0,4,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PETA_BIDANG_125_3');
        map.getPane('pane_PETA_BIDANG_125_3').style.zIndex = 403;
        map.getPane('pane_PETA_BIDANG_125_3').style['mix-blend-mode'] = 'normal';
        var layer_PETA_BIDANG_125_3 = new L.geoJson(json_PETA_BIDANG_125_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PETA_BIDANG_125_3',
            layerName: 'layer_PETA_BIDANG_125_3',
            pane: 'pane_PETA_BIDANG_125_3',
            onEachFeature: pop_PETA_BIDANG_125_3,
            style: style_PETA_BIDANG_125_3_0,
        });
        bounds_group.addLayer(layer_PETA_BIDANG_125_3);
        map.addLayer(layer_PETA_BIDANG_125_3);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
        .title += 'Search for a place';
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/PETA_BIDANG_125_3.png" /> PETA_BIDANG_125': layer_PETA_BIDANG_125_3,'<img src="legend/MENDAWAI_AR_2.png" /> MENDAWAI_AR': layer_MENDAWAI_AR_2,'<img src="legend/Batas_RT_Bansir_Laut_1.png" /> Batas_RT_Bansir_Laut': layer_Batas_RT_Bansir_Laut_1,"Google Satellite Hybrid": layer_GoogleSatelliteHybrid_0,}).addTo(map);
        setBounds();
    </script>
</body>
</html>
