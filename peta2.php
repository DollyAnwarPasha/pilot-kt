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
    <link rel="stylesheet" href="css/filter.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
      
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
    <script src="js/tailDT.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/wNumb.js"></script>
    <script src="data/shp_panjang_wetan_1.js"></script>
    <script src="data/BugisanIP4T_2.js"></script>
    <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-6.8817188471352875,109.65934448315454],[-6.855265267451269,109.70764951684586]]);
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
        function pop_shp_panjang_wetan_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker.link(feature.properties['KDPPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature.properties['NAMOBJ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker.link(feature.properties['REMARK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker.link(feature.properties['KDPBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker.link(feature.properties['FCODE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker.link(feature.properties['LUASWH'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(feature.properties['UUPP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker.link(feature.properties['SRS_ID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LCODE'] !== null ? autolinker.link(feature.properties['LCODE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker.link(feature.properties['METADATA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker.link(feature.properties['KDEBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker.link(feature.properties['KDEPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker.link(feature.properties['KDCBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker.link(feature.properties['KDCPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker.link(feature.properties['KDBBPS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KDBPUM'] !== null ? autolinker.link(feature.properties['KDBPUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker.link(feature.properties['WADMKD'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker.link(feature.properties['WIADKD'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker.link(feature.properties['WADMKC'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker.link(feature.properties['WIADKC'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker.link(feature.properties['WADMKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker.link(feature.properties['WIADKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature.properties['WADMPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker.link(feature.properties['WIADPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker.link(feature.properties['TIPADM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Leng'] !== null ? autolinker.link(feature.properties['SHAPE_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Area'] !== null ? autolinker.link(feature.properties['SHAPE_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_shp_panjang_wetan_1_0() {
            return {
                pane: 'pane_shp_panjang_wetan_1',
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
        map.createPane('pane_shp_panjang_wetan_1');
        map.getPane('pane_shp_panjang_wetan_1').style.zIndex = 401;
        map.getPane('pane_shp_panjang_wetan_1').style['mix-blend-mode'] = 'normal';
        var layer_shp_panjang_wetan_1 = new L.geoJson(json_shp_panjang_wetan_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_shp_panjang_wetan_1',
            layerName: 'layer_shp_panjang_wetan_1',
            pane: 'pane_shp_panjang_wetan_1',
            onEachFeature: pop_shp_panjang_wetan_1,
            style: style_shp_panjang_wetan_1_0,
        });
        bounds_group.addLayer(layer_shp_panjang_wetan_1);
        map.addLayer(layer_shp_panjang_wetan_1);
        function pop_BugisanIP4T_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Layer_1'] !== null ? autolinker.link(feature.properties['Layer_1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Text'] !== null ? autolinker.link(feature.properties['Text'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">NUB</th>\
                        <td>' + (feature.properties['NUB'] !== null ? autolinker.link(feature.properties['NUB'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama'] !== null ? autolinker.link(feature.properties['Nama'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NIK'] !== null ? autolinker.link(feature.properties['NIK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Tempat_Lah'] !== null ? autolinker.link(feature.properties['Tempat_Lah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Tanggal_La'] !== null ? autolinker.link(feature.properties['Tanggal_La'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Alamat'] !== null ? autolinker.link(feature.properties['Alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Foto_KTP_K'] !== null ? autolinker.link(feature.properties['Foto_KTP_K'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Letak_Tana'] !== null ? autolinker.link(feature.properties['Letak_Tana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RT_RW'] !== null ? autolinker.link(feature.properties['RT_RW'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Foto_Objek'] !== null ? autolinker.link(feature.properties['Foto_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Lintang'] !== null ? autolinker.link(feature.properties['Lintang'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Bujur'] !== null ? autolinker.link(feature.properties['Bujur'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Foto_Koord'] !== null ? autolinker.link(feature.properties['Foto_Koord'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Penguasaan'] !== null ? autolinker.link(feature.properties['Penguasaan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Status_Sen'] !== null ? autolinker.link(feature.properties['Status_Sen'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Status_Tan'] !== null ? autolinker.link(feature.properties['Status_Tan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Jenis_Hak'] !== null ? autolinker.link(feature.properties['Jenis_Hak'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nomor_Hak'] !== null ? autolinker.link(feature.properties['Nomor_Hak'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Atas_Nama'] !== null ? autolinker.link(feature.properties['Atas_Nama'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Luas'] !== null ? autolinker.link(feature.properties['Luas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Foto_Serti'] !== null ? autolinker.link(feature.properties['Foto_Serti'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Jenis_Hak1'] !== null ? autolinker.link(feature.properties['Jenis_Hak1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nomor_Hak1'] !== null ? autolinker.link(feature.properties['Nomor_Hak1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Atas_Nama1'] !== null ? autolinker.link(feature.properties['Atas_Nama1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Luas1'] !== null ? autolinker.link(feature.properties['Luas1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Foto_Alas_'] !== null ? autolinker.link(feature.properties['Foto_Alas_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NOP'] !== null ? autolinker.link(feature.properties['NOP'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NJOP_tanah'] !== null ? autolinker.link(feature.properties['NJOP_tanah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NJOP_bangu'] !== null ? autolinker.link(feature.properties['NJOP_bangu'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Perkiraan_'] !== null ? autolinker.link(feature.properties['Perkiraan_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Foto_SPPT_'] !== null ? autolinker.link(feature.properties['Foto_SPPT_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Jenis_Kela'] !== null ? autolinker.link(feature.properties['Jenis_Kela'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Mata_Penca'] !== null ? autolinker.link(feature.properties['Mata_Penca'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Status_Per'] !== null ? autolinker.link(feature.properties['Status_Per'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Jml_Anggot'] !== null ? autolinker.link(feature.properties['Jml_Anggot'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Pdpt_Perbl'] !== null ? autolinker.link(feature.properties['Pdpt_Perbl'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Pengeluara'] !== null ? autolinker.link(feature.properties['Pengeluara'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Pdd_terakh'] !== null ? autolinker.link(feature.properties['Pdd_terakh'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Agama_Kepe'] !== null ? autolinker.link(feature.properties['Agama_Kepe'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kondisi_Fi'] !== null ? autolinker.link(feature.properties['Kondisi_Fi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Potensi_Be'] !== null ? autolinker.link(feature.properties['Potensi_Be'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Non_Pertan'] !== null ? autolinker.link(feature.properties['Non_Pertan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Pertanian'] !== null ? autolinker.link(feature.properties['Pertanian'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Taman'] !== null ? autolinker.link(feature.properties['Taman'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Perairan'] !== null ? autolinker.link(feature.properties['Perairan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Tanah_Peru'] !== null ? autolinker.link(feature.properties['Tanah_Peru'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Industri'] !== null ? autolinker.link(feature.properties['Industri'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Keterangan'] !== null ? autolinker.link(feature.properties['Keterangan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Diagunkan'] !== null ? autolinker.link(feature.properties['Diagunkan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Pendamping'] !== null ? autolinker.link(feature.properties['Pendamping'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama_Kelom'] !== null ? autolinker.link(feature.properties['Nama_Kelom'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Akses_Usah'] !== null ? autolinker.link(feature.properties['Akses_Usah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nama_Petug'] !== null ? autolinker.link(feature.properties['Nama_Petug'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Tanggal_Su'] !== null ? autolinker.link(feature.properties['Tanggal_Su'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Ltk_Ft_Lap'] !== null ? autolinker.link(feature.properties['Ltk_Ft_Lap'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Nm_Ft_Lap'] !== null ? autolinker.link(feature.properties['Nm_Ft_Lap'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['FOTO_LAP_1'] !== null ? autolinker.link(feature.properties['FOTO_LAP_1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RTRW'] !== null ? autolinker.link(feature.properties['RTRW'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NOZONE'] !== null ? autolinker.link(feature.properties['NOZONE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RPBULAT'] !== null ? autolinker.link(feature.properties['RPBULAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Leng'] !== null ? autolinker.link(feature.properties['Shape_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Area'] !== null ? autolinker.link(feature.properties['Shape_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['luas_blok'] !== null ? autolinker.link(feature.properties['luas_blok'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_BugisanIP4T_2_0() {
            return {
                pane: 'pane_BugisanIP4T_2',
                opacity: 1,
                color: 'rgba(255,0,4,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_BugisanIP4T_2');
        map.getPane('pane_BugisanIP4T_2').style.zIndex = 402;
        map.getPane('pane_BugisanIP4T_2').style['mix-blend-mode'] = 'normal';
        var layer_BugisanIP4T_2 = new L.geoJson(json_BugisanIP4T_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_BugisanIP4T_2',
            layerName: 'layer_BugisanIP4T_2',
            pane: 'pane_BugisanIP4T_2',
            onEachFeature: pop_BugisanIP4T_2,
            style: style_BugisanIP4T_2_0,
        });
        bounds_group.addLayer(layer_BugisanIP4T_2);
        map.addLayer(layer_BugisanIP4T_2);
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
        L.control.layers(baseMaps,{'<img src="legend/BugisanIP4T_2.png" /> BugisanIP4T': layer_BugisanIP4T_2,'<img src="legend/shp_panjang_wetan_1.png" /> shp_panjang_wetan': layer_shp_panjang_wetan_1,"Google Satellite Hybrid": layer_GoogleSatelliteHybrid_0,}).addTo(map);
        setBounds();
        var mapDiv = document.getElementById('map');
        var row = document.createElement('div');
        row.className="row";
        row.id="all";
        row.style.height = "100%";
        var col1 = document.createElement('div');
        col1.className="col9";
        col1.id = "mapWindow";
        col1.style.height = "99%";
        col1.style.width = "80%";
        col1.style.display = "inline-block";
        var col2 = document.createElement('div');
        col2.className="col3";
        col2.id = "menu";
        col2.style.display = "inline-block";
        mapDiv.parentNode.insertBefore(row, mapDiv);
        document.getElementById("all").appendChild(col1);
        document.getElementById("all").appendChild(col2);
        col1.appendChild(mapDiv)
        var Filters = {"RTRW": "str"};
        function filterFunc() {
          map.eachLayer(function(lyr){
          if ("options" in lyr && "dataVar" in lyr["options"]){
            features = this[lyr["options"]["dataVar"]].features.slice(0);
            try{
              for (key in Filters){
                keyS = key.replace(/[^a-zA-Z0-9_]/g, "")
                if (Filters[key] == "str" || Filters[key] == "bool"){
                  var selection = [];
                  var options = document.getElementById("sel_" + keyS).options
                  for (var i=0; i < options.length; i++) {
                    if (options[i].selected) selection.push(options[i].value);
                  }
                    try{
                      if (key in features[0].properties){
                        for (i = features.length - 1;
                          i >= 0; --i){
                          if (selection.indexOf(
                          features[i].properties[key])<0
                          && selection.length>0) {
                          features.splice(i,1);
                          }
                        }
                      }
                    } catch(err){
                  }
                }
                if (Filters[key] == "int"){
                  sliderVals =  document.getElementById(
                    "div_" + keyS).noUiSlider.get();
                  try{
                    if (key in features[0].properties){
                    for (i = features.length - 1; i >= 0; --i){
                      if (parseInt(features[i].properties[key])
                          < sliderVals[0]
                          || parseInt(features[i].properties[key])
                          > sliderVals[1]){
                            features.splice(i,1);
                          }
                        }
                      }
                    } catch(err){
                    }
                  }
                if (Filters[key] == "real"){
                  sliderVals =  document.getElementById(
                    "div_" + keyS).noUiSlider.get();
                  try{
                    if (key in features[0].properties){
                    for (i = features.length - 1; i >= 0; --i){
                      if (features[i].properties[key]
                          < sliderVals[0]
                          || features[i].properties[key]
                          > sliderVals[1]){
                            features.splice(i,1);
                          }
                        }
                      }
                    } catch(err){
                    }
                  }
                if (Filters[key] == "date"
                  || Filters[key] == "datetime"
                  || Filters[key] == "time"){
                  try{
                    if (key in features[0].properties){
                      HTMLkey = key.replace(/[&\/\\#,+()$~%.'":*?<>{} ]/g, '');
                      startdate = document.getElementById("dat_" +
                        HTMLkey + "_date1").value.replace(" ", "T");
                      enddate = document.getElementById("dat_" +
                        HTMLkey + "_date2").value.replace(" ", "T");
                      for (i = features.length - 1; i >= 0; --i){
                        if (features[i].properties[key] < startdate
                          || features[i].properties[key] > enddate){
                          features.splice(i,1);
                        }
                      }
                    }
                  } catch(err){
                  }
                }
              }
            } catch(err){
            }
          this[lyr["options"]["layerName"]].clearLayers();
          this[lyr["options"]["layerName"]].addData(features);
          }
          })
        }
            document.getElementById("menu").appendChild(
                document.createElement("div"));
            var div_RTRW = document.createElement('div');
            div_RTRW.id = "div_RTRW";
            div_RTRW.className= "filterselect";
            document.getElementById("menu").appendChild(div_RTRW);
            sel_RTRW = document.createElement('select');
            sel_RTRW.multiple = true;
            sel_RTRW.size = 6;
            sel_RTRW.id = "sel_RTRW";
            var RTRW_options_str = "<option value='' unselected></option>";
            sel_RTRW.onchange = function(){filterFunc()};
            RTRW_options_str  += '<option value="NULL">NULL</option>';
            RTRW_options_str  += '<option value="01/01">01/01</option>';
            RTRW_options_str  += '<option value="02/01">02/01</option>';
            RTRW_options_str  += '<option value="03/01">03/01</option>';
            RTRW_options_str  += '<option value="04/01">04/01</option>';
            RTRW_options_str  += '<option value="05/01">05/01</option>';
            sel_RTRW.innerHTML = RTRW_options_str;
            div_RTRW.appendChild(sel_RTRW);
            var lab_RTRW = document.createElement('div');
            lab_RTRW.innerHTML = 'RTRW';
            lab_RTRW.className = 'filterlabel';
            div_RTRW.appendChild(lab_RTRW);
            var reset_RTRW = document.createElement('div');
            reset_RTRW.innerHTML = 'clear filter';
            reset_RTRW.className = 'filterlabel';
            reset_RTRW.onclick = function() {
                var options = document.getElementById("sel_RTRW").options;
                for (var i=0; i < options.length; i++) {
                    options[i].selected = false;
                }
                filterFunc();
            };
            div_RTRW.appendChild(reset_RTRW);
        </script>
</body>
</html>
