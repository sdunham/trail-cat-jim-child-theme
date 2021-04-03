<?php
$map_image = get_stylesheet_directory_uri() . '/img/major-peak-map-cascades-olympic-mountains.jpg';
$icon_image = get_stylesheet_directory_uri() . '/img/icon.svg';
?>

<div class="interactiveMapContent" id=content> <!-- necessary for the nav menu to work -->

   <?php /*<div class=menubar>
      <a class="menuItem ourlink" href="http://trailcatjim.com">HOME</a>
      <a class="menuItem ourlink" href="http://trailcatjim.com/climbs-hikes">CLIMBS & HIKES</a>
      <a class="menuItem ourlink" href="http://trailcatjim.com/major-peaks">MAJOR PEAKS</a>
      <a class="menuItem ourlink" href="http://trailcatjim.com/ski-snowshoe">SKI & SNOWSHOE</a>
      <a class="menuItem ourlink" href="http://trailcatjim.com/types-of-trips">TYPES OF TRIPS</a>
      <a class="menuItem ourlink" href="http://trailcatjim.com/mtn-goodies">MOUNTAIN GOODIES</a>
   </div>
   <br>
   <!-- EILEEN Remove image ???
   <div class=PageTitle>
      <img class=banner src="http://trailcatjim.com/map/MajorPeaksLogo.jpg" alt="">
   </div>  -->
   */ ?>

   <div class=row> <!-- header and extra box row -->
   <header>
        <!-- br  DO YOU WANT THIS? -->
        <!-- <h1 class=center>Interactive Major Peaks Constellation Map</h1> -->
        <h6 class=center>
            <span class=nophone>
               Washington Cascades
               <img src="<?php echo $icon_image; ?>" alt="" class=mtnBullet> Canadian Cascades
               <img src="<?php echo $icon_image; ?>" alt="" class=mtnBullet> Olympic Mountains
            </span>
            <span class=phone>
               <img src="<?php echo $icon_image; ?>" alt="" class=mtnBullet> Washington Cascades<br>               
               <img src="<?php echo $icon_image; ?>" alt="" class=mtnBullet> Canadian Cascades<br>
               <img src="<?php echo $icon_image; ?>" alt="" class=mtnBullet> Olympic Mountains
            </span>
        </h6>
        <div class="indent">
          <p>
            Major Peaks are determined on the basis of six criteria:  Elevation, Projection, Prominence, Isolation, Visual Appeal, and Classic Status.
            Using these criteria, there are 222 Major Peaks in the Cascades and Olympic Mountains of Washington and British Columbia.
          </p>
          <ul>
            <!-- img src="icon.svg" alt="" class=mtnBullet> -->
            <li class=explain>
                  For more information regarding peak selection and groups, refer to the synopsis and lists contained in
                  <a target="_blank" href="http://trailcatjim.com/wp-content/uploads/2017/08/MPCO.SynopsisLists.2018-09-10.pdf">
                     <i>Major Peaks of the Cascades &#38; Olympics: Fraser River -- Nicola River to Columbia River</i></a>
            </li>
          </ul>
          <p>
            Major peaks are arranged in various groupings, depending on their attributes.
          </p>
          <ul>
            <li>
              <!-- img src="icon.svg" alt="" class=mtnBullet-->
              <i> Special Groups:</i>
              The cream of the crop; first-ballot mountain peaks that are rich in specific attributes.
            </li>
            <li>
              <!-- img src="icon.svg" alt="" class=mtnBullet-->
              <i> Geographic Groups:</i>
              The 34 principal geographic mountain subregions in the Cascades and Olympic Mountains.
            </li>
            <li>
              <!-- img src="icon.svg" alt="" class=mtnBullet-->
              <i> Wild-Card Groups:</i>
              Alpine gems that don't fit into any of the geographic or special groups.
            </li>
          </ul>
          <h5>How to use the Interactive Major Peaks Constellation Map</h5>
          <ul style="font-size: 0.85em;">
             <li><strong>Hover over a constellation or peak name</strong> to see a list of associated peaks.</li>
             <li><strong>Click on a Major Peak constellation</strong> in the map to view all climbing trip reports for that group.</li>
             <li><strong>Click on a Major Peak group name</strong> in the sidebar to highlight the constellation on the map
                  and display the individual peaks.</li>
          </ul>
        </div> <!-- end indented div -->
      </header>
      <?php /*
      <header class=left>
        <!-- br  DO YOU WANT THIS? -->
        <!-- <h1 class=center>Interactive Major Peaks Constellation Map</h1> -->
        <h6 class=center>
            <span class=nophone>
               Washington Cascades
               <img src="<?php echo $icon_image; ?>" alt="" class=mtnBullet> Canadian Cascades
               <img src="<?php echo $icon_image; ?>" alt="" class=mtnBullet> Olympic Mountains
            </span>
            <span class=phone>
               <img src="<?php echo $icon_image; ?>" alt="" class=mtnBullet> Washington Cascades<br>               
               <img src="<?php echo $icon_image; ?>" alt="" class=mtnBullet> Canadian Cascades<br>
               <img src="<?php echo $icon_image; ?>" alt="" class=mtnBullet> Olympic Mountains
            </span>
        </h6>
        <div class="indent">
          <p>
            Major Peaks are determined on the basis of six criteria:  Elevation, Projection, Prominence, Isolation, Visual Appeal, and Classic Status.
            Using these criteria, there are 222 Major Peaks in the Cascades and Olympic Mountains of Washington and British Columbia.
          </p>
          <ul>
            <!-- img src="icon.svg" alt="" class=mtnBullet> -->
            <li class=explain>
                  For more information regarding peak selection and groups, refer to the synopsis and lists contained in
                  <a target="_blank" href="http://trailcatjim.com/wp-content/uploads/2017/08/MPCO.SynopsisLists.2018-09-10.pdf">
                     <i>Major Peaks of the Cascades &#38; Olympics: Fraser River -- Nicola River to Columbia River</i></a>
            </li>
          </ul>
          <p>
            Major peaks are arranged in various groupings, depending on their attributes.
          </p>
          <ul>
            <li>
              <!-- img src="icon.svg" alt="" class=mtnBullet-->
              <i> Special Groups:</i>
              The cream of the crop; first-ballot mountain peaks that are rich in specific attributes.
            </li>
            <li>
              <!-- img src="icon.svg" alt="" class=mtnBullet-->
              <i> Geographic Groups:</i>
              The 34 principal geographic mountain subregions in the Cascades and Olympic Mountains.
            </li>
            <li>
              <!-- img src="icon.svg" alt="" class=mtnBullet-->
              <i> Wild-Card Groups:</i>
              Alpine gems that don't fit into any of the geographic or special groups.
            </li>
          </ul>
          <h5>How to use the Interactive Major Peaks Constellation Map</h5>
          <ul style="font-size: 0.85em;">
             <li><strong>Hover over a constellation or peak name</strong> to see a list of associated peaks.</li>
             <li><strong>Click on a Major Peak constellation</strong> in the map to view all climbing trip reports for that group.</li>
             <li><strong>Click on a Major Peak group name</strong> in the sidebar to highlight the constellation on the map
                  and display the individual peaks.</li>
          </ul>
        </div> <!-- end indented div -->
      </header>
   
      <aside class=rightphone>
         <!-- extra side box, reserved for future use -->
      </aside>
      */?>
   </div> <!-- end of header/extra box -->

   <!-- - - - - - - - - -  THE MAP - - - - - - - - - - - -->

   <div class=row> <!-- map and sidebar -->
      <div class=left> <!-- the map -->
        <!-- STEVE: Took this out: xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" -->
        <svg viewBox="0 0 1350 3202" style="border-bottom: 1px solid black; border-right: 0px solid black;" >
          <image height="3202" width="1350" transform="translate(-1.28 -1.16)" xlink:href="<?php echo $map_image; ?>"/>

           <!-- Major Peak Groups Start Here -->
           <a target="_blank" href="http://trailcatjim.com/major-peaks/canadian-cascades-groups/coquihalla-seven/">
              <path id="CoquihallaPath" class=click-blue
                onmouseover="javascript:hoveron('Coquihalla')"
                onmouseout="javascript:hoveroff('Coquihalla')"
                d="m 642.75,78.25 c 0,0 88.5,-10 88.25,-10.25 -0.25,-0.25 59.25,52.75 59,52.5 -0.25,-0.25 14.25,96.75 14,96.5
                -0.25,-0.25 -79.25,24.25 -79.5,24 -0.25,-0.25 -92.25,-33.75 -92.5,-34 -0.25,-0.25 -29.25,-72.75 -29.5,-73
                -0.25,-0.25 40.25,-55.75 40.25,-55.75 z" />
              <title>The Coquihalla Seven&#10;------------------------&#10;Coquihalla Mountain&#10;Gemse Peak&#10;Ibex Peak&#10;Needle Peak&#10;Steinbok Peak&#10;Vicuna Peak&#10;Yak Peak</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/canadian-cascades-groups/cheam-six/">
              <path id="CheamPath" class=click-blue
                onmouseover="javascript:hoveron('Cheam')"
                onmouseout="javascript:hoveroff('Cheam')"
                d="m 427.33141,467.07899 -38.52988,41.33206 55.34292,39.23042 h 55.34292 l 17.51358,-37.82934 -25.21956,-38.52988 z" />
              <title>The Cheam Six&#10;-----------------&#10;Baby Munday Peak&#10;Cheam Peak&#10;Foley Peak&#10;Lady Peak&#10;Stewart Peak&#10;Welch Peak</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/canadian-cascades-groups/the-sumallo-three/">
              <path id="SumalloPath" class=click-blue
                onmouseover="javascript:hoveron('Sumallo')"
                onmouseout="javascript:hoveroff('Sumallo')"
                d="m 636.09331,467.77954 -14.01087,56.744 44.13423,32.92554 147.11409,1.40108 -4.9038,-39.23042 -81.96357,-49.73857 z" />
                <title>The Sumallo Three&#10;----------------------&#10;Mt Payne&#10;Mt Rideout&#10;Silvertip Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/canadian-cascades-groups/canadian-chilliwack-three/">
              <path id="CanChilliwackPath" class=click-blue
                onmouseover="javascript:hoveron('CanChilliwack')"
                onmouseout="javascript:hoveroff('CanChilliwack')"
                d="m 424.52924,592.47618 7.70598,35.72771 28.02173,35.72771 102.97987,2.10163 62.34835,-67.25216 z" />
                <title>The Canadian Chilliwack Three&#10;----------------------------------&#10;Mt Lindeman&#10;Mt Rexford&#10;Slesse Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-similkameen-three/">
              <path id="SimilkameenPath" class=click-blue
                onmouseover="javascript:hoveron('Similkameen')"
                onmouseout="javascript:hoveroff('Similkameen')"
                d="m 1191.6242,602.98433 3.5027,76.35922 32.225,75.65868 84.7657,12.60978 2.8022,-165.32822 z" />
                <title>The Similkameen Three&#10;--------------------------&#10;Cathedral Peak&#10;Mt Grimface&#10;Remmel Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-nooksack-six/">
              <path id="NooksackPath" class=click-blue
                onmouseover="javascript:hoveron('Nooksack')"
                onmouseout="javascript:hoveroff('Nooksack')"
                d="m 433.43906,647.9294 -64.89202,98.08106 32.69369,37.15192 40.61943,18.82364 15.85148,53.49876 92.13676,-0.99071 -5.44894,-29.22618
                -50.52661,-7.92574 1.98143,-76.28528 z" />
                <title>The Nooksack Six&#10;---------------------&#10;American Border Peak&#10;Canadian Border Peak&#10;Mt Larrabee&#10;Mt Sefrit&#10;Mt Shuksan&#10;Tomyhoi Peak</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-american-chilliwack-six/">
              <path id="AmChilliwackPath" class=click-blue
                onmouseover="javascript:hoveron('AmChilliwack')"
                onmouseout="javascript:hoveroff('AmChilliwack')"
                d="m 669.2299,665.26696 -113.93255,29.22617 -6.93502,64.39666 90.65068,22.29116 88.66925,-19.319 -14.86077,-61.42451 z" />
                <title>The American Chilliwack Six&#10;-------------------------------&#10;Bear Mountain&#10;Mt Custer&#10;Mt Redoubt&#10;Mt Spickard&#10;Northwest Mox Peak&#10;Southeast Mox Peak</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-picket-twelve/">
              <path id="PicketPath" class=click-blue
                onmouseover="javascript:hoveron('Picket')"
                onmouseout="javascript:hoveroff('Picket')"
                d="m 602.85181,808.92105 -3.96287,36.1612 26.74938,31.20761 29.72153,11.39325 80.24815,-3.96287 -2.97215,-53.99412 -59.44307,-14.86077
                -47.55446,-11.39325 z" />
                <title>The Picket Twelve&#10;---------------------&#10;Crooked Thumb Peak&#10;East McMillan Spire&#10;Inspiration Peak&#10;Luna Peak&#10;Mt Challenger&#10;Mt Degenhardt&#10;Mt Fury: east peak&#10;Mt Fury: west peak&#10;Mt Terror&#10;Phantom Peak&#10;West McMillan Spire&#10;West Twin Needle</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-upper-skagit-five/">
              <path id="UpperSkagitPath" class=click-blue
                onmouseover="javascript:hoveron('UpperSkagit')"
                onmouseout="javascript:hoveroff('UpperSkagit')"
                d="M 790.09748,684.0906 831.21227,918.89073 950.09841,894.61814 939.69588,666.75303 Z" />
                <title>The Upper Skagit Five&#10;------------------------&#10;Castle Peak&#10;Crater Mountain&#10;Hozomeen Mountain: north peak&#10;Hozomeen Mountain: south peak&#10;Jack Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-pasayten-eleven/">
              <path id="PasaytenPath" class=click-blue
                onmouseover="javascript:hoveron('Pasayten')"
                onmouseout="javascript:hoveroff('Pasayten')"
                d="m 1059.0774,778.70415 -14.3654,145.14017 29.2261,7.92574 180.3107,-42.60087 -15.3561,-77.27599 z" />
                <title>The Pasayten Eleven&#10;------------------------&#10;Big Craggy Peak&#10;Blackcap Mountain&#10;Lake Mountain&#10;Lost Peak&#10;Monument Peak&#10;Mt Carru&#10;Mt Lago&#10;Osceola Peak&#10;Ptarmigan Peak&#10;Robinson Mountain&#10;West Craggy Peak</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-mazama-three/">
              <path id="MazamaPath" class=click-blue
                onmouseover="javascript:hoveron('Mazama')"
                onmouseout="javascript:hoveroff('Mazama')"
                d="m 1056.6006,1047.684 -7.9258,31.703 74.3039,51.022 74.7992,-11.8886 -8.4211,-69.8456 z" />
                <title>The Mazama Three&#10;------------------------&#10;Gardner Mountain&#10;North Gardner Mountain&#10;Silver Star Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-upper-methow-six/">
              <path id="UpperMethowPath" class=click-blue
                onmouseover="javascript:hoveron('UpperMethow')"
                onmouseout="javascript:hoveroff('UpperMethow')"
                d="m 948.61234,944.15403 1.98143,106.50217 41.11479,48.5452 19.31904,-12.384 4.9536,-53.9941 27.2447,-13.8701 3.9629,-54.48945 z" />
                <title>The Upper Methow Six&#10;--------------------------&#10;Azurite Peak&#10;Cutthroat Peak&#10;Golden Horn&#10;Mt Ballard&#10;Mt Hardy&#10;Tower Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-washington-pass-three/">
              <path id="WashingtonPassPath" class=click-blue
                onmouseover="javascript:hoveron('WashingtonPass')"
                onmouseout="javascript:hoveroff('WashingtonPass')"
                d="m 953.07057,1119.0157 0.49536,20.8051 54.48947,20.3097 40.6194,-0.4953 50.5266,-22.2912 -7.4303,-14.3654 -76.2853,-29.2262 z" />
                <title>The Washington Pass Three&#10;------------------------------&#10;Liberty Bell Mountain&#10;North Early Winters Spire&#10;South Early Winters Spire</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-lower-skagit-five/">
              <path id="LowerSkagitPath" class=click-blue
                onmouseover="javascript:hoveron('LowerSkagit')"
                onmouseout="javascript:hoveroff('LowerSkagit')"
                d="m 529.53869,884.71096 -20.80508,44.5823 -6.93502,47.0591 69.35025,13.87005 47.0591,-19.81436 12.87933,-39.62871 -27.7401,-28.73082 z" />
                <title>The Lower Skagit Five&#10;------------------------&#10;Bacon Peak&#10;Mt Blum&#10;Mt Despair&#10;Mt Hagan&#10;Mt Triumph</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-mcallister-five/">
              <path id="McAllisterPath" class=click-blue
                onmouseover="javascript:hoveron('McAllister')"
                onmouseout="javascript:hoveroff('McAllister')"
                d="m 765.69383,1075.1505 14.01087,-37.479 -27.32119,-81.61334 -23.81847,-0.35027 -77.41004,67.95271 3.50272,24.1687 93.52253,16.1125
                8.05625,12.2595 z" />
                <title>The McAllister Five&#10;---------------------&#10;Austera Peak&#10;Colonial Peak&#10;Klawatti Peak&#10;Primus Peak&#10;Snowfield Peak</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-thunder-eight/">
              <path id="ThunderPath" class=click-blue
                onmouseover="javascript:hoveron('Thunder')"
                onmouseout="javascript:hoveroff('Thunder')"
                d="m 767.09492,1083.2068 -24.16874,-9.1071 -88.969,11.9092 1.05081,16.1125 102.6296,3.853 74.95813,52.1905 76.00895,-1.7514
                -5.95462,-17.8638 -24.86929,-19.9655 -23.11793,-53.2413 -78.46085,1.7514 z" />
                <title>The Thunder Eight&#10;---------------------&#10;Boston Peak&#10;Eldorado Peak&#10;Forbidden Peak&#10;Mt Buckner&#10;Mt Goode&#10;Mt Logan&#10;Sahale Peak&#10;Storm King Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-ragged-seven/">
              <path id="RaggedPath" class=click-blue
                onmouseover="javascript:hoveron('Ragged')"
                onmouseout="javascript:hoveroff('Ragged')"
                d="m 874.27805,1096.342 1.75136,14.5362 4.02812,1.9265 76.88463,-1.5762 -1.40109,-17.8639 -37.30393,-45.0099 15.23682,-15.7622
                0.35027,-28.5471 -87.56792,-0.5254 8.23139,41.8574 44.4845,38.705 z" />
                <title>The Ragged Seven&#10;---------------------&#10;Black Peak&#10;Corteo Peak&#10;Cosho Peak&#10;Katsuk Peak&#10;Kimtah Peak&#10;Mesahchie Peak&#10;Mt Arriva</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-twin-sisters-two/">
              <path id="TwinSistersPath" class=click-blue
                onmouseover="javascript:hoveron('TwinSisters')"
                onmouseout="javascript:hoveroff('TwinSisters')"
                d="m 212.26462,919.62991 -49.73857,44.83477 63.04889,41.33202 84.0652,-41.33202 -50.43912,-49.73858 z" />
                <title>The Twin Sisters Two&#10;------------------------&#10;North Twin Sister&#10;South Twin Sister</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-suiattle-five/">
              <path id="SuiattlePath" class=click-blue
                onmouseover="javascript:hoveron('Suiattle')"
                onmouseout="javascript:hoveroff('Suiattle')"
                d="m 636.04086,1177.9634 -33.18905,69.3503 31.20761,33.6844 h 76.28527 l 46.06838,-47.0591 -49.04053,-34.6751 z" />
                <title>The Suiattle Five&#10;-------------------&#10;Mt Bruseth&#10;Mt Buckindy&#10;Mt Chaval&#10;Mt Misch&#10;Snowking Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-ptarmigan-pten/">
              <path id="PtarmiganPath" class=click-blue
                onmouseover="javascript:hoveron('Ptarmigan')"
                onmouseout="javascript:hoveroff('Ptarmigan')"
                d="m 756.41307,1130.409 -2.47679,37.6473 20.80507,66.8734 -15.35612,42.6009 -30.71225,9.4118 -1.48608,20.8051 105.51145,-1.4861
                75.78991,-86.1924 z" />
                <title>The Ptarmigan Pten&#10;------------------------&#10;Agnes Mountain&#10;Dome Peak&#10;Johannesburg Mountain&#10;Main Gunsight Peak&#10;Mt Formidable&#10;Old Guard Peak&#10;Sentinel Peak&#10;Sinister Peak&#10;Spider Mountain&#10;Spire Point</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-stehekin-seven/">
              <path id="StehekinPath" class=click-blue
                onmouseover="javascript:hoveron('Stehekin')"
                onmouseout="javascript:hoveroff('Stehekin')"
                d="m 960.00559,1269.6048 -33.6844,41.1148 -99.07179,3.9629 1.98144,31.703 158.51485,25.2633 70.83631,-59.9384 c 0,0
                -3.4675,-28.7309 -5.9443,-28.7309 -2.4768,0 -92.63211,-13.3747 -92.63211,-13.3747 z" />
                <title>The Stehekin Seven&#10;----------------------&#10;Bonanza Peak&#10;Devore Peak&#10;Flora Mountain&#10;Main Riddle Peak&#10;Martin Peak&#10;Tupshin Peak&#10;Wy’East Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-chiwawa-four/">
              <path id="ChiwawaPath" class=click-blue
                onmouseover="javascript:hoveron('Chiwawa')"
                onmouseout="javascript:hoveroff('Chiwawa')"
                d="m 821.80045,1361.2462 94.1182,5.449 0.99072,29.7215 -31.70298,25.7587 7.43039,54.4895 -29.72154,0.9907 z" />
                <title>The Chiwawa Four&#10;------------------------&#10;Buck Mountain&#10;Chiwawa Mountain&#10;Dumbell Mountain&#10;Fortress Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-entiat-five/">
              <path id="EntiatPath" class=click-blue
                onmouseover="javascript:hoveron('Entiat')"
                onmouseout="javascript:hoveroff('Entiat')"
                d="m 942.17267,1383.5374 -16.34684,9.9072 -16.84221,40.124 15.35613,55.4802 63.40594,-4.9535 -4.45823,-46.0684 z" />
                <title>The Entiat Five&#10;-------------------&#10;Copper Peak&#10;Mt Fernow&#10;Mt Maude&#10;Seven-Fingered Jack&#10;South Spectacle Butte</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-sawtooth-six/">
              <path id="SawtoothPath" class=click-blue
                onmouseover="javascript:hoveron('Sawtooth')"
                onmouseout="javascript:hoveroff('Sawtooth')"
                d="m 1047.1888,1246.8183 149.5984,157.5242 55.4802,-106.9976 -18.3283,-25.2633 -170.4035,-40.124 z" />
                <title>The Sawtooth Six&#10;--------------------&#10;Corax Peak&#10;Martin Peak&#10;Mt Bigelow&#10;Oval Peak&#10;Reynolds Peak&#10;Star Peak</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-chelan-four/">
              <path id="ChelanPath" class=click-blue
                onmouseover="javascript:hoveron('Chelan')"
                onmouseout="javascript:hoveroff('Chelan')"
                d="m 1000.1297,1422.1754 5.9443,38.1426 45.0776,15.3562 68.3596,-18.3283 -5.449,-43.0963 z" />
                <title>The Chelan Four&#10;-------------------&#10;Cardinal Peak&#10;Emerald Peak&#10;Pinnacle Mountain&#10;Saska Peak</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-sauk-seven/">
              <path id="SaukPath" class=click-blue
                onmouseover="javascript:hoveron('Sauk')"
                onmouseout="javascript:hoveroff('Sauk')"
                d="m 414.61542,1347.3762 -16.84221,61.9199 226.87439,125.8211 79.25743,-5.4489 -2.4768,-63.9013 -126.31652,-119.8769 z" />
                <title>The Sauk Seven&#10;-------------------&#10;Black Mountain&#10;Mt Pugh&#10;Sloan Peak&#10;Three Fingers: north peak&#10;Three Fingers: south peak&#10;White Chuck Mountain&#10;Whitehorse Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-monte-cristo-seven/">
              <path id="MonteCristoPath" class=click-blue
                onmouseover="javascript:hoveron('MonteCristo')"
                onmouseout="javascript:hoveroff('MonteCristo')"
                d="m 591.95391,1528.1822 -58.45235,18.8236 -7.43038,85.6971 125.82116,-1.9814 -14.36541,-83.2203 z" />
                <title>The Monte Cristo Seven&#10;--------------------------&#10;Cadet Peak&#10;Columbia Peak&#10;Del Campo Peak&#10;Foggy Peak&#10;Kyes Peak&#10;Monte Cristo Peak&#10;South Gemini Peak</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-dakobed-four/">
              <path id="DaKobedPath" class=click-blue
                onmouseover="javascript:hoveron('DaKobed')"
                onmouseout="javascript:hoveroff('DaKobed')"
                d="m 801.49074,1470.7206 -44.08695,25.7586 6.43967,38.638 97.09035,-1.9814 -5.44895,-43.5916 z" />
                <title>The DaKobed Four&#10;----------------------&#10;Chalangin Peak&#10;Clark Mountain&#10;Luahna Peak&#10;Tenpeak Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-skykomish-three/">
              <path id="SkykomishPath" class=click-blue
                onmouseover="javascript:hoveron('Skykomish')"
                onmouseout="javascript:hoveroff('Skykomish')"
                d="m 577.41799,1650.658 -41.32635,45.7525 c 0,0 -7.87168,73.9078 -7.87168,76.7233 0,2.8156 11.02036,20.4126 11.02036,20.4126 l 86.98211,-2.8155 -27.15731,-140.0729 z" />
                <title>The Skykomish Three&#10;------------------------&#10;Gunn Peak&#10;Mt Baring&#10;Spire Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/central-cascades-groups/the-chiwaukum-two/">
              <path id="ChiwaukumPath" class=click-blue
                onmouseover="javascript:hoveron('Chiwaukum')"
                onmouseout="javascript:hoveroff('Chiwaukum')"
                d="m 816.13295,1751.8754 h 102.97987 l -4.20326,84.0652 -82.66411,-4.2033 z" />
                <title>The Chiwaukum Two&#10;------------------------&#10;Big Chiwaukum Peak&#10;Snowgrass Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/central-cascades-groups/the-snoqualmie-twelve/">
              <path id="SnoqualmiePath" class=click-blue
                onmouseover="javascript:hoveron('Snoqualmie')"
                onmouseout="javascript:hoveroff('Snoqualmie')"
                d="m 693.50249,1907.1318 -86.19245,83.7156 -79.75279,16.8422 13.37469,69.3503 99.07179,-1.4861 38.14264,-51.5173 53.49876,-105.0161 z" />
                <title>The Snoqualmie Twelve&#10;---------------------------&#10;Bears Breast Mountain&#10;Chair Peak&#10;Chikamin Peak&#10;Chimney Rock&#10;Hibox Peak&#10;Kaleetan Peak&#10;Lemah Mountain&#10;Mt Daniel&#10;Mt Hinman&#10;Mt Thomson&#10;Summit Chief Mountain&#10;Three Queens Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/central-cascades-groups/the-icicle-eight/">
              <path id="IciclePath" class=click-blue
                onmouseover="javascript:hoveron('Icicle')"
                onmouseout="javascript:hoveroff('Icicle')"
                d="m 846.32072,1990.1044 44.08694,27.4924 110.71274,-11.6409 1.2384,-61.6722 -102.787,-32.9414 -29.47385,63.1583 -22.53883,-0.2477 z" />
                <title>The Icicle Eight&#10;--------------------&#10;Argonaut Peak&#10;Cannon Mountain&#10;Cashmere Mountain&#10;Colchuck Peak&#10;Dragontail Peak&#10;McClellan Peak&#10;Mt Stuart&#10;Sherpa Peak</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/southern-cascades-groups/the-goat-rocks-three/">
              <path id="GoatRocksPath" class=click-blue
                onmouseover="javascript:hoveron('GoatRocks')"
                onmouseout="javascript:hoveroff('GoatRocks')"
                d="m 452.55098,2816.7012 2.80217,51.1396 147.11409,5.6044 -10.50815,-66.5516 z" />
                <title>The Goat Rocks Three&#10;------------------------&#10;Ives Peak&#10;Mt Curtis Gilbert&#10;Old Snowy Mountain</title>
           </a>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/olympic-mountains-groups/the-olympic-thirteen/">
              <path id="OlympicPath" class=click-blue
                onmouseover="javascript:hoveron('Olympic')"
                onmouseout="javascript:hoveroff('Olympic')"
                d="m 914.20901,2390.0703 37.1288,219.9706 208.06139,120.4935 107.8836,-173.7348 -38.5298,-102.9799 -207.3609,-163.9271 z" />
                <title>The Olympic Thirteen&#10;------------------------&#10;Mt Anderson: east peak&#10;Mt Anderson: west peak&#10;Mt Angeles&#10;Mt Carrie&#10;Mt Christie&#10;Mt Constance: inner peak&#10;Mt Constance: outer peak&#10;Mt Deception&#10;Mt Meany&#10;Mt Mystery&#10;Mt Stone&#10;Mt Washington&#10;The Brothers: south peak</title>
           </a>
           <!-- Regal Six -->
           <g id=RegalPath class=click-yellow onmouseover="javascript:hoveron('Regal')" onmouseout="javascript:hoveroff('Regal')">
              <title>The Regal Six&#10;----------------&#10;Glacier Peak&#10;Mt Adams&#10;Mt Baker&#10;Mt Olympus&#10;Mt Rainier&#10;Mt St Helens</title>
                <a target="_blank" href="http://trailcatjim.com/major-peaks/special-groups/the-regal-six/">
                   <path
                     d="m 281.36387,806.69193 -0.49536,38.39032 49.78357,32.69368 -6.43967,22.29116 37.64728,-2.4768 49.5359,-55.4802 -0.24768,-32.44601 z" />
                      <!-- title>Mt Baker </title -->
                   <path
                     d="m 38.529882,3000.2435 -1.401087,37.8294 66.551615,58.1451 50.43912,-2.8022 71.45541,-60.9473 0.70055,-31.5244 z" />
                      <!-- title>St Helens </title -->
                   <path
                     d="m 458.15532,3027.5647 0.70055,25.2196 45.53531,63.7494 49.03803,-3.5027 49.03803,-54.6424 v -33.6261 z" />
                      <!-- title>Mt Adams </title -->
                   <path
                     d="m 752.38351,2415.2899 v 32.9255 l 121.19399,60.2467 41.33206,-2.8021 7.70597,-35.7278 -18.91466,-56.744 z" />
                      <!-- title>Mt Olympus </title -->
                   <path
                     d="m 211.51826,2504.0393 -0.49536,47.5544 189.22711,11.3933 -4.45823,-26.7494 13.87005,-12.8793 -28.73082,-20.8051 z" />
                      <!-- title>Mt Rainier </title -->
                   <path
                     d="m 701.24385,1346.9613 28.372,127.8492 52.89102,-3.853 23.11793,-121.8945 z" />
                      <!-- title>Glacier Peak </title -->
                </a>
           </g>
   
           <!-- Satellite Three -->
           <a target="_blank" href="http://trailcatjim.com/major-peaks/wild-card-groups/the-satellite-three/">
                <g id=SatellitePath class=click-blue onmouseover="javascript:hoveron('Satellite')" onmouseout="javascript:hoveroff('Satellite')">
                   <title>The Satellite Three&#10;--------------------&#10;Colfax Peak&#10;Lincoln Peak&#10;Little Tahoma Peak</title>
                   <path 
                     d="m 180.55833,866.7542 v 19.44283 l 130.65091,10.65022 16.09917,-11.14557 1.36224,-5.57279 -21.30044,-14.48925 z" />
                   <path
                     d="m 415.59732,2526.8514 -14.88655,6.6551 1.9265,12.2596 130.47619,0.8756 0.17513,-20.1406 z" />
                </g>
           </a>
        
           <!-- Outlier Twelve --> <!-- NEED TO ADD MT INDEX -->
           <a target="_blank" href="http://trailcatjim.com/major-peaks/wild-card-groups/the-outlier-twelve/">
           <g id=OutlierPath class=click-blue onmouseover="javascript:hoveron('Outlier')" onmouseout="javascript:hoveroff('Outlier')">  
              <title>The Outlier Twelve&#10;------------------------&#10;Big Four Mountain&#10;Davis Peak&#10;North Ingalls Peak&#10;McGregor Mountain&#10;Mt David&#10;Mt Garfield&#10;Mt Index&#10;Mt Outram&#10;Mt Prophet&#10;Sluiskin Mountain&#10;The Cradle&#10;Whatcom Peak</title>
              <path 
                d="m 332.38584,2435.6797 4.45823,28.7309 113.43719,0.9907 1.48608,-32.1983 z" />
              <path
                d="m 455.23485,1923.974 -1.98144,25.2633 106.00681,1.9814 -0.49536,-23.7772 z" />
              <path 
                d="m 766.81561,1896.7292 7.43039,34.6752 71.82704,-0.9908 -1.48608,-37.6472 z" />
              <path 
                d="m 727.68226,1987.8753 0.99072,24.7679 137.21442,-1.486 -10.40254,-12.384 -19.319,-9.4118 z" />
              <path 
                d="m 817.34222,1568.3063 0.49536,25.2633 88.66925,-2.4768 -3.96287,-25.7587 z" />
              <path  
                d="m 390.83819,1484.0953 -0.99072,26.7493 135.23299,-1.9814 -8.4211,-22.2911 z" />
              <path  
                d="m 925.33047,1182.917 -0.99072,19.8144 h 145.63555 l -1.4861,-20.8051 z" />
              <path  
                d="m 688.5489,904.02996 0.49536,21.30043 89.65997,-1.98143 -1.48608,-18.82364 z" />
              <path  
                d="m 508.94471,785.12559 0.70055,18.21413 105.08149,-2.10163 -1.40108,-14.01087 z" />
              <path  
                d="m 718.75743,785.82614 4.90381,30.12336 h 18.21412 l 55.69319,-14.71141 -0.35027,-16.1125 z" />
             <path 
                d="m 725.76287,415.23873 0.35027,19.96548 91.77117,0.70054 -1.05081,-18.21412 z" />
              <path
                d="m 491.08086,1729.8082 -88.26846,-2.1016 -1.75136,21.7169 h 91.4209 z" />
           </g>
           </a>
   
           <!-- Landmark Twelve -->
         <a target="_blank" href="http://trailcatjim.com/major-peaks/special-groups/the-landmark-twelve/">
            <g id=LandmarkPath class=click-yellow onmouseover="javascript:hoveron('Landmark')" onmouseout="javascript:hoveroff('Landmark')">
              <title>The Landmark Twelve&#10;------------------------&#10;Black Peak&#10;Bonanza Peak&#10;Eldorado Peak&#10;Dome Peak&#10;Jack Mountain&#10;Mt Goode&#10;Mt Redoubt&#10;Mt Shuksan&#10;Mt Stuart&#10;Silver Star Mountain&#10;Silvertip Mountain&#10;Sloan Peak</title>
              <path  
                d="m 851.52199,1977.4727 -2.97216,11.1456 8.42111,3.7152 23.03419,15.6038 12.13629,-15.6038 22.29115,-1.9814 v -12.384 z" />
              <path  
                d="m 621.42777,1526.6961 h 66.62577 l -1.23839,-11.6409 -57.70932,-3.2198 -8.91646,-11.8887 -12.87933,6.9351 -2.22912,9.4118 z" />
              <path  
                d="m 832.69835,1321.1222 0.49536,14.3654 50.27893,1.9814 8.66878,14.1177 11.64093,-2.7244 0.49536,-12.384 10.8979,-1.4861 c
                0,0 -0.24768,-14.8607 -1.48608,-14.8607 -1.23839,0 -80.99118,0.9907 -80.99118,0.9907 z" />
              <path  
                d="m 738.82783,1287.9331 0.24768,13.8701 h 66.13042 l 12.13629,-19.8144 -11.64093,-6.192 -8.91646,10.8979 z" />
              <path  
                d="m 840.62409,1140.8115 -0.24768,13.127 H 903.287 l -1.48608,-11.1455 -30.46457,-19.8144 -12.1363,13.3747 z" />
              <path  
                d="m 876.72995,1097.3928 0.70054,12.0843 3.32758,1.4011 59.37105,-0.5254 -4.90381,-26.9709 -13.31032,2.1016 -2.10163,11.559 z" />
              <path  
                d="m 659.9118,1086.3592 v 13.4855 l 84.5906,-0.3503 14.186,-15.9374 -9.63247,-5.9546 -7.70598,2.6271 -9.45733,6.48 z" />
              <path  
                d="m 1060.6226,1053.4337 -3.6779,26.7958 11.9093,4.9038 10.8584,-16.1125 107.008,-0.8757 -1.5763,-14.7114 z" />
              <path  
                d="m 832.94599,868.49025 v 17.51358 l 110.33557,-3.15245 -1.40108,-17.16331 z" />
              <path  
                d="m 459.55641,818.75167 3.85299,30.47363 78.11058,-0.70054 -1.75136,-13.66059 -56.39374,-0.70055 -3.50271,-17.16331 z" />
              <path  
                d="m 567.79035,694.40523 0.35027,15.06168 62.69863,0.35028 12.60978,14.36113 14.01086,-8.75679 -17.16331,-22.06711 z" />
              <path  
                d="m 685.8319,517.86832 2.4519,34.32662 112.78747,-0.70054 -1.40109,-17.51358 -92.12144,0.70054 -7.00543,-19.61521 z" />
           </g>
         </a>
   
           <!-- Super Eight -->
         <a target="_blank" href="http://trailcatjim.com/major-peaks/special-groups/the-super-eight/">
            <g id=SuperPath class=click-circle
               onmouseover="javascript:hoveronCircle('Super')" onmouseout="javascript:hoveroffCircle('Super')">           
                <title>The Super Eight&#10;-------------------&#10;Agnes Mountain&#10;American Border Peak&#10;Chimney Rock&#10;Hozomeen Mountain: north peak&#10;Hozomeen Mountain: south peak&#10;Mt Triumph&#10;Slesse Mountain&#10;Whitehorse Mountain</title>
                <circle cx="651.14929" cy="1970.7853" r="6" /> <!-- <title>ChimneyRock</title> -->
                <circle cx="425.186" cy="1363.249" r="6" /> <!-- <title>White Horse</title> -->
                <circle cx="838.92035" cy="1271.1316" r="6" /> <!-- <title>Agnes</title> -->
                <circle cx="614.37646" cy="939.86432" r="6" /> <!-- <title>Triumph</title> -->
                <circle cx="811.45978" cy="701.73773" r="6" /> <!-- <title>North Hozomeen</title> -->
                <circle cx="817.77563" cy="712.07837" r="6" />  <!-- <title>South Hozomeen</title> -->
                <circle cx="432.44083" cy="680.16089" r="6" /> <!-- <title>American Border</title> -->
                <circle cx="474.50256" cy="653.02936" r="6" /> <!-- <title>Slesse</title> -->
           </g>
         </a>
   
           <!-- Tall Twelve -->
           <a target="_blank" href="http://trailcatjim.com/major-peaks/special-groups/the-tall-twelve/">
           <g id=TallPath class=click-circle
               onmouseover="javascript:hoveronCircle('Tall')" onmouseout="javascript:hoveroffCircle('Tall')">
              <title>The Tall Twelve&#10;------------------&#10;Black Peak&#10;Boston Peak&#10;Copper Peak&#10;Dome Peak&#10;Dragontail Peak&#10;Eldorado Peak&#10;Forbidden Peak&#10;Gardner Mountain&#10;Mt Redoubt&#10;Mt Spickard&#10;North Gardner Mountain&#10;Silver Star Mountain&#10;</title>
              <circle cx="680" cy="702" r="6"/> <!-- <title>Spickard</title> -->
              <circle cx="644" cy="714" r="6" /> <!-- <title>Redoubt</title> -->
              <circle cx="929.66486" cy="1091.7091" r="6" /> <!-- <title>Black Peak</title> -->
              <circle cx="936.5163" cy="1398.0709" r="6"  />  <!-- <title>Copper Peak</title> -->
              <circle cx="1113.2263"  cy="1104.4956" r="6" /> <!-- <title>North Gardner Mountain</title> -->
              <circle cx="1122.6135" cy="1112.4353" r="6" /> <!-- <title>Gardner Mountain</title> -->
              <circle cx="807" cy="1285" r="6" /> <!-- <title>Dome Peak</title> -->
              <circle cx="802.341" cy="1117.2706" r="6" /> <!-- <title>Boston Peak</title> -->
              <circle cx="1065" cy="1075" r="6" /> <!-- <title>Silver Star</title> -->
              <circle  cx="748" cy="1084" r="6" /> <!-- <title>Eldorado Peak</title> -->
              <circle cx="789.79688" cy="1107.0253" r="6" /> <!-- <title>Forbidden Peak</title> -->
              <circle cx="920.71741"  cy="1996.6368" r="6" /> <!-- <title>Dragontail Peak</title> -->
           </g>
           </a>
   
           <!-- Big Ten -->
           <a target="_blank" href="http://trailcatjim.com/major-peaks/special-groups/the-big-ten/">
            <g id=BigPath class=click-circle
               onmouseover="javascript:hoveronCircle('Big')" onmouseout="javascript:hoveroffCircle('Big')">
              <title>The Big 10&#10;-------------&#10;Bonanza Peak&#10;Jack Mountain&#10;Mt Buckner&#10;Mt Fernow&#10;Mt Goode&#10;Mt Logan&#10;Mt Maude&#10;Mt Shuksan&#10;Mt Stuart&#10;Seven-Fingered Jack</title>
              <circle cx="895.55707" cy="1343" r="6" /> <!-- <title>Bonanza Peak</title> -->
              <circle cx="879" cy="1999.6488"  r="6" /> <!-- <title>Stuart</title> -->
              <circle cx="933.5658" cy="1408.3363" r="6" /> <!-- <title>Fernow</title> -->
              <circle cx="928.79797" cy="1417.9338" r="6" /> <!-- <title>Seven-Fingered Jack </title> -->
              <circle cx="933.68964" cy="1429.2343"  r="6" /> <!-- <title>Maude</title> -->
              <circle cx="871.76978" cy="1132.2976" r="6" /> <!-- <title>Goode</title> -->
              <circle cx="471" cy="825" r="6" /> <!-- <title>Shuksan</title> -->
              <circle cx="822.3418" cy="1120.3107" r="6" /> <!-- <title>Buckner</title> -->
              <circle cx="852.0943" cy="1085.0632" r="6" /> <!-- <title>Logan</title> -->
              <circle cx="841.74658" cy="877" r="6" /> <!-- <title>Jack Mountain</title> -->
           </g>
           </a>
        </svg>
      </div>
      
      
      <!-- Side Bar -->
      <aside class="right interactiveMapSidebar">  
        <!-- Special Groups -->      
        <h3 class=interactiveMapSidebar>Special Groups</h3>
           <div id='Regal' class=expand onclick="javascript:PeakGroup('Regal')" onmouseover="javascript:hoveron('Regal')"
             onmouseout="javascript:hoveroff('Regal')">Regal Six</div>
           <div style="display: none;" class=expandList id="RegalMore">
              Glacier Peak (10,541')<br>
              Mt Adams (12,276')<br>
              Mt Baker (10,781')<br>
              Mt Olympus (7969')<br>
              Mt Rainier (14,411')<br>
              Mt St Helens (9677/8365')<br>
              <a target="_blank" href="http://trailcatjim.com/major-peaks/special-groups/the-regal-six/">View Trip Reports</a>
           </div>      
           <div id='Landmark' class=expand onclick="javascript:PeakGroup('Landmark')" onmouseover="javascript:hoveron('Landmark')"
             onmouseout="javascript:hoveroff('Landmark')">Landmark Twelve</div>
           <div style="display: none;" class=expandList id="LandmarkMore" >
              Black Peak (8970')<br>
              Bonanza Peak (9511')<br> 
              Eldorado Peak (8868')<br>
              Dome Peak (8920')<br>
              Jack Mountain (9066')<br>
              Mt Goode (9235')<br>
              Mt Redoubt (8969')<br>
              Mt Shuksan (9131')<br>
              Mt Stuart (9415')<br>
              Silver Star Mountain (8876')<br>
              Silvertip Mountain (8517')<br>
              Sloan Peak (7835')<br>
              <a target="_blank" href="http://trailcatjim.com/major-peaks/special-groups/the-landmark-twelve/">View Trip Reports</a>
           </div>
           <div id='Super' class=expand onclick="javascript:CircleGroup('Super')" onmouseover="javascript:hoveronCircle('Super')"
             onmouseout="javascript:hoveroffCircle('Super')">Super Eight</div>
           <div style="display: none;" class=expandList id="SuperMore" >
              Agnes Mountain (8115')<br>
              American Border Peak (7994')<br>
              Chimney Rock (7727')<br>
              Hozomeen Mtn: north peak (8066')<br>
              Hozomeen Mtn: south peak (8003')<br>
              Mt Triumph (7270')<br>
              Slesse Mountain (8002')<br>
              Whitehorse Mountain (6852')<br>
              <a target="_blank" href="http://trailcatjim.com/major-peaks/special-groups/the-super-eight/">View Trip Reports</a>
           </div>
           <div id='Big' class=expand onclick="javascript:CircleGroup('Big')" onmouseover="javascript:hoveronCircle('Big')"
             onmouseout="javascript:hoveroffCircle('Big')">Big Ten</div>
           <div style="display: none;" class=expandList id="BigMore" >
              Bonanza Peak (9511')<br>
              Jack Mountain (9066')<br>
              Mt Buckner (9114')<br>
              Mt Fernow (9249')<br>
              Mt Goode (9235')<br>
              Mt Logan (9087')<br>
              Mt Maude (9082')<br>
              Mt Shuksan (9131')<br>
              Mt Stuart (9415')<br>
              Seven-Fingered Jack (9100')<br>
              <a target="_blank" href="http://trailcatjim.com/major-peaks/special-groups/the-big-ten/">View Trip Reports</a>
           </div>      
           <div id='Tall' class=expand onclick="javascript:CircleGroup('Tall')" onmouseover="javascript:hoveronCircle('Tall')"
             onmouseout="javascript:hoveroffCircle('Tall')">Tall Twelve</div>
           <div style="display: none;" class=expandList id="TallMore" >
              Black Peak (8970')<br>
              Boston Peak (8894')<br>
              Copper Peak (8964')<br>
              Dome Peak (8920')<br>
              Dragontail Peak (8840')<br>
              Eldorado Peak (8868')<br>
              Forbidden Peak (8815')<br>
              Gardner Mountain (8898')<br>
              Mt Redoubt (8969')<br>
              Mt Spickard (8979')<br>
              North Gardner Mountain (8956')<br>
              Silver Star Mountain (8876')<br>
              <a target="_blank" href="http://trailcatjim.com/major-peaks/special-groups/the-tall-twelve/">View Trip Reports</a>
           </div>
           
        <!-- Geographic Groups -->
        <h3 class=interactiveMapSidebar>Geographic Groups<br>North to South</h3>  <!-- EILEEN - NEED TO BACK THIS WRAP IN LINE -->
        <div id='Coquihalla' class=expand 
             onclick="javascript:PeakGroup('Coquihalla')" onmouseover="javascript:hoveron('Coquihalla')"
             onmouseout="javascript:hoveroff('Coquihalla')">Coquihalla Seven</div>
        <div style="display: none;" class=expandList id="CoquihallaMore" >
           Coquihalla Mountain (7077')<br>  
           Gemse Peak (6201')<br>
           Ibex Peak (6690')<br> 
           Needle Peak (6857')<br>
           Steinbok Peak (6601')<br>
           Vicuna Peak (6975')<br>
           Yak Peak (6690')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/canadian-cascades-groups/coquihalla-seven/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/BFSN">View Constellation in CalTopo</a>
        </div>
        <div id='Cheam' class=expand onclick="javascript:PeakGroup('Cheam')" onmouseover="javascript:hoveron('Cheam')"
             onmouseout="javascript:hoveroff('Cheam')">Cheam Six</div>
        <div style="display: none;" class=expandList id="CheamMore" >
           Baby Munday Peak (7382')<br>
           Cheam Peak (6929')<br> 
           Foley Peak (7572')<br>
           Lady Peak (7182')<br> 
           Stewart Peak (7343')<br>
           Welch Peak (7999')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/canadian-cascades-groups/cheam-six/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/JK4P">View Constellation in CalTopo</a>
        </div>
        <div id='Sumallo' class=expand onclick="javascript:PeakGroup('Sumallo')" onmouseover="javascript:hoveron('Sumallo')"
             onmouseout="javascript:hoveroff('Sumallo')">Sumallo Three</div>
        <div style="display: none;" class=expandList id="SumalloMore" >
           Mt Payne (8097')<br> 
           Mt Rideout (8029')<br>
           Silvertip Mountain (8517')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/canadian-cascades-groups/the-sumallo-three/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/87S8">View Constellation in CalTopo</a>
        </div>
        <div id='CanChilliwack' class=expand onclick="javascript:PeakGroup('CanChilliwack')" onmouseover="javascript:hoveron('CanChilliwack')"
             onmouseout="javascript:hoveroff('CanChilliwack')">Canadian Chilliwack Three</div>
        <div style="display: none;" class=expandList id="CanChilliwackMore" >        
           Mt Lindeman (7578')<br>  
           Mt Rexford (7641')<br>
           Slesse Mountain (8002')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/canadian-cascades-groups/canadian-chilliwack-three/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/J2PN">View Constellation in CalTopo</a>
        </div>
        <div id='Nooksack' class=expand onclick="javascript:PeakGroup('Nooksack')" onmouseover="javascript:hoveron('Nooksack')"
             onmouseout="javascript:hoveroff('Nooksack')">Nooksack Six</div>
        <div style="display: none;" class=expandList id="NooksackMore" >
           American Border Peak (7994')<br> 
           Canadian Border Peak (7516')<br> 
           Mt Larrabee (7861')<br>
           Mt Sefrit (7191')<br>
           Mt Shuksan (9131')<br>
           Tomyhoi Peak (7435')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-nooksack-six/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/4K0C">View Constellation in CalTopo</a>
        </div>
        <div id='AmChilliwack' class=expand onclick="javascript:PeakGroup('AmChilliwack')" onmouseover="javascript:hoveron('AmChilliwack')"
             onmouseout="javascript:hoveroff('AmChilliwack')">American Chilliwack Six</div>
        <div style="display: none;" class=expandList id="AmChilliwackMore" >
           Bear Mountain (7931')<br> 
           Mt Custer (8630')<br>
           Mt Redoubt (8969')<br>
           Mt Spickard (8979')<br>
           Northwest Mox Peak (8407')<br>
           Southeast Mox Peak (8504')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-american-chilliwack-six/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/MA8N">View Constellation in CalTopo</a>
        </div>
        <div id='Similkameen' class=expand onclick="javascript:PeakGroup('Similkameen')" onmouseover="javascript:hoveron('Similkameen')"
             onmouseout="javascript:hoveroff('Similkameen')">Similkameen Three</div>
        <div style="display: none;" class=expandList id="SimilkameenMore" >
           Cathedral Peak (8601')<br> 
           Mt Grimface (8645')<br> 
           Remmel Mountain (8685')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-similkameen-three/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/S734">View Constellation in CalTopo</a>
        </div>
        <div id='Picket' class=expand onclick="javascript:PeakGroup('Picket')" onmouseover="javascript:hoveron('Picket')"
             onmouseout="javascript:hoveroff('Picket')">Picket Twelve</div>
        <div style="display: none;" class=expandList id="PicketMore" >
           Crooked Thumb Peak (8124')<br>
           East McMillan Spire (7992')<br> 
           Inspiration Peak (7880')<br> 
           Luna Peak (8311')<br>
           Mt Challenger (8207')<br>
           Mt Degenhardt (8000')<br>
           Mt Fury: east peak (8288')<br>
           Mt Fury: west peak (8292')<br> 
           Mt Terror (8151')<br>
           Phantom Peak (8045')<br>
           West McMillan Spire (8000')<br>
           West Twin Needle (7936')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-picket-twelve/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/2KT1">View Constellation in CalTopo</a>
        </div>
        <div id='UpperSkagit' class=expand onclick="javascript:PeakGroup('UpperSkagit')" onmouseover="javascript:hoveron('UpperSkagit')"
             onmouseout="javascript:hoveroff('UpperSkagit')">Upper Skagit Five</div>
        <div style="display: none;" class=expandList id="UpperSkagitMore" >
           Castle Peak (8306')<br>
           Crater Mountain (8128')<br>
           Hozomeen Mtn: north peak (8066')<br>
           Hozomeen Mtn: south peak (8003')<br>
           Jack Mountain (9066')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-upper-skagit-five/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/MM7D">View Constellation in CalTopo</a>
        </div>
        <div id='Pasayten' class=expand onclick="javascript:PeakGroup('Pasayten')" onmouseover="javascript:hoveron('Pasayten')"
             onmouseout="javascript:hoveroff('Pasayten')">Pasayten Eleven</div>
        <div style="display: none;" class=expandList id="PasaytenMore" >   
           Big Craggy Peak (8470')<br>
           Blackcap Mountain (8397')<br>
           Lake Mountain (8371')<br>
           Lost Peak (8464')<br>
           Monument Peak (8592')<br>
           Mt Carru (8595')<br>
           Mt Lago (8745')<br>
           Osceola Peak (8587')<br>
           Ptarmigan Peak (8614')<br>
           Robinson Mountain (8726')<br>
           West Craggy Peak (8366')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-pasayten-eleven/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/E9UT">View Constellation in CalTopo</a>
        </div>
        <div id='TwinSisters' class=expand onclick="javascript:PeakGroup('TwinSisters')" onmouseover="javascript:hoveron('TwinSisters')"
             onmouseout="javascript:hoveroff('TwinSisters')">Twin Sisters Two</div>
        <div style="display: none;" class=expandList id="TwinSistersMore" >
           North Twin Sister (6640')<br>
           South Twin Sister (7000')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-twin-sisters-two/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/FQAH">View Constellation in CalTopo</a>
        </div>
        <div id='LowerSkagit' class=expand onclick="javascript:PeakGroup('LowerSkagit')" onmouseover="javascript:hoveron('LowerSkagit')"
             onmouseout="javascript:hoveroff('LowerSkagit')">Lower Skagit Five</div>
        <div style="display: none;" class=expandList id="LowerSkagitMore" >
           Bacon Peak (7061')<br>
           Mt Blum (7680')<br>
           Mt Despair (7292')<br>
           Mt Hagan (7080')<br>
           Mt Triumph (7270')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-lower-skagit-five/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/US0D">View Constellation in CalTopo</a>
        </div>
        <div id='McAllister' class=expand onclick="javascript:PeakGroup('McAllister')" onmouseover="javascript:hoveron('McAllister')"
             onmouseout="javascript:hoveroff('McAllister')">McAllister Five</div>
        <div style="display: none;" class=expandList id="McAllisterMore" >
           Austera Peak (8334')<br>
           Colonial Peak (7771')<br>
           Klawatti Peak (8485')<br>
           Primus Peak (8508')<br>
           Snowfield Peak (8347')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-mcallister-five/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/48H0">View Constellation in CalTopo</a>
        </div>
        <div id='Ragged' class=expand onclick="javascript:PeakGroup('Ragged')" onmouseover="javascript:hoveron('Ragged')"
             onmouseout="javascript:hoveroff('Ragged')">Ragged Seven</div>
        <div style="display: none;" class=expandList id="RaggedMore" >
           Black Peak (8970')<br>
           Corteo Peak (8080')<br>
           Cosho Peak (8332')<br>
           Katsuk Peak (8680')<br>
           Kimtah Peak (8600')<br>
           Mesahchie Peak (8795')<br>
           Mt Arriva (8215')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-ragged-seven/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/GLP5">View Constellation in CalTopo</a>
        </div>  
        <div id='UpperMethow' class=expand onclick="javascript:PeakGroup('UpperMethow')" onmouseover="javascript:hoveron('UpperMethow')"
             onmouseout="javascript:hoveroff('UpperMethow')">Upper Methow Six</div>
        <div style="display: none;" class=expandList id="UpperMethowMore" >
           Azurite Peak (8400')<br>
           Cutthroat Peak (8050')<br>
           Golden Horn (8366')<br>
           Mt Ballard (8340')<br>
           Mt Hardy (8080')<br>
           Tower Mountain (8444')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-upper-methow-six/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/RDBS">View Constellation in CalTopo</a>
        </div>
        <div id='Thunder' class=expand onclick="javascript:PeakGroup('Thunder')" onmouseover="javascript:hoveron('Thunder')"
             onmouseout="javascript:hoveroff('Thunder')">Thunder Eight</div>
        <div style="display: none;" class=expandList id="ThunderMore" >
           Boston Peak (8894')<br>
           Eldorado Peak (8868')<br>
           Forbidden Peak (8815')<br>
           Mt Buckner (9114')<br>
           Mt Goode (9235')<br>
           Mt Logan (9087')<br>
           Sahale Peak (8680')<br>
           Storm King Mountain (8520')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northwestern-cascades-groups/the-thunder-eight/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/DQ82">View Constellation in CalTopo</a>
        </div>
        <div id='WashingtonPass' class=expand onclick="javascript:PeakGroup('WashingtonPass')" onmouseover="javascript:hoveron('WashingtonPass')"
             onmouseout="javascript:hoveroff('WashingtonPass')">Washington Pass Three</div>
        <div style="display: none;" class=expandList id="WashingtonPassMore" >
           Liberty Bell Mountain (7720')<br>
           North Early Winters Spire (7760')<br>
           South Early Winters Spire (7807')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-washington-pass-three/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/GUC1">View Constellation in CalTopo</a>
        </div>
        <div id='Mazama' class=expand onclick="javascript:PeakGroup('Mazama')" onmouseover="javascript:hoveron('Mazama')"
             onmouseout="javascript:hoveroff('Mazama')">Mazama Three</div>
        <div style="display: none;" class=expandList id="MazamaMore" >
           Gardner Mountain (8898')<br>
           North Gardner Mountain (8956')<br>
           Silver Star Mountain (8876')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/northeastern-cascades-groups/the-mazama-three/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/VUG5">View Constellation in CalTopo</a>
        </div>
        <div id='Suiattle' class=expand onclick="javascript:PeakGroup('Suiattle')" onmouseover="javascript:hoveron('Suiattle')"
             onmouseout="javascript:hoveroff('Suiattle')">Suiattle Five</div>
        <div style="display: none;" class=expandList id="SuiattleMore" >
           Mt Bruseth (7220')<br>
           Mt Buckindy (7320')<br>
           Mt Chaval (7127')<br>
           Mt Misch (7435')<br>
           Snowking Mountain (7433')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-suiattle-five/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/A569">View Constellation in CalTopo</a>
        </div>
        <div id='Ptarmigan' class=expand onclick="javascript:PeakGroup('Ptarmigan')" onmouseover="javascript:hoveron('Ptarmigan')"
             onmouseout="javascript:hoveroff('Ptarmigan')">Ptarmigan Pten</div>
        <div style="display: none;" class=expandList id="PtarmiganMore" >
           Agnes Mountain (8115')<br>
           Dome Peak (8920')<br>
           Johannesburg Mountain (8200')<br>
           Main Gunsight Peak (8198')<br>
           Mt Formidable (8325')<br>
           Old Guard Peak (8240')<br>
           Sentinel Peak (8261')<br>
           Sinister Peak (8440')<br>
           Spider Mountain (8300')<br>
           Spire Point (8264')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-ptarmigan-pten/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/BRMB">View Constellation in CalTopo</a>
        </div>
        <div id='Stehekin' class=expand onclick="javascript:PeakGroup('Stehekin')" onmouseover="javascript:hoveron('Stehekin')"
             onmouseout="javascript:hoveroff('Stehekin')">Stehekin Seven</div>
        <div style="display: none;" class=expandList id="StehekinMore" >
           Bonanza Peak (9511')<br> 
           Devore Peak (8360')<br>
           Flora Mountain (8320')<br>
           Main Riddle Peak (8232')<br>
           Martin Peak (8511')<br>
           Tupshin Peak (8320')<br>
           Wy’East Mountain (8280')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-stehekin-seven/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/CGVG">View Constellation in CalTopo</a>
        </div>
        <div id='Sawtooth' class=expand onclick="javascript:PeakGroup('Sawtooth')" onmouseover="javascript:hoveron('Sawtooth')"
             onmouseout="javascript:hoveroff('Sawtooth')">Sawtooth Six</div>
        <div style="display: none;" class=expandList id="SawtoothMore" >
           Corax Peak (8572')<br>
           Martin Peak (8375')<br>
           Mt Bigelow (8440')<br>
           Oval Peak (8795')<br>
           Reynolds Peak (8512')<br>
           Star Peak (8690')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-sawtooth-six/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/VB47">View Constellation in CalTopo</a>
        </div>
        <div id='Sauk' class=expand onclick="javascript:PeakGroup('Sauk')" onmouseover="javascript:hoveron('Sauk')"
             onmouseout="javascript:hoveroff('Sauk')">Sauk Seven</div>
        <div style="display: none;" class=expandList id="SaukMore" >
           Black Mountain (7262')<br> 
           Mt Pugh (7201')<br>
           Sloan Peak (7835')<br>
           Three Fingers: north peak (6870')<br>
           Three Fingers: south peak (6850')<br>
           White Chuck Mountain (6989')<br>
           Whitehorse Mountain (6852')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-sauk-seven/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/00QD">View Constellation in CalTopo</a>
        </div>
        <div id='DaKobed' class=expand onclick="javascript:PeakGroup('DaKobed')" onmouseover="javascript:hoveron('DaKobed')"
             onmouseout="javascript:hoveroff('DaKobed')">DaKobed Four</div>
        <div style="display: none;" class=expandList id="DaKobedMore" >
           Chalangin Peak (8320')<br>
           Clark Mountain (8602')<br>
           Luahna Peak (8400')<br>
           Tenpeak Mountain (8281')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-dakobed-four/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/T88T">View Constellation in CalTopo</a>
        </div>
        <div id='Chiwawa' class=expand onclick="javascript:PeakGroup('Chiwawa')" onmouseover="javascript:hoveron('Chiwawa')"
             onmouseout="javascript:hoveroff('Chiwawa')">Chiwawa Four</div>
        <div style="display: none;" class=expandList id="ChiwawaMore" >
           Buck Mountain (8528')<br> 
           Chiwawa Mountain (8459')<br>
           Dumbell Mountain (8421')<br>
           Fortress Mountain (8760')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-chiwawa-four/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/CH12">View Constellation in CalTopo</a>
        </div>
        <div id='Entiat' class=expand onclick="javascript:PeakGroup('Entiat')" onmouseover="javascript:hoveron('Entiat')"
             onmouseout="javascript:hoveroff('Entiat')">Entiat Five</div>
        <div style="display: none;" class=expandList id="EntiatMore" >
           Copper Peak (8964')<br>
           Mt Fernow (9249')<br>
           Mt Maude (9082')<br>
           Seven-Fingered Jack (9100')<br>
           South Spectacle Butte (8392')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-entiat-five/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/JM55">View Constellation in CalTopo</a>
        </div>
        <div id='Chelan' class=expand onclick="javascript:PeakGroup('Chelan')" onmouseover="javascript:hoveron('Chelan')"
             onmouseout="javascript:hoveroff('Chelan')">Chelan Four</div>
        <div style="display: none;" class=expandList id="ChelanMore" >
           Cardinal Peak (8590')<br> 
           Emerald Peak (8422')<br>
           Pinnacle Mountain (8402')<br>
           Saska Peak (8404')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-chelan-four/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/GP2H">View Constellation in CalTopo</a>
        </div>
        <div id='MonteCristo' class=expand onclick="javascript:PeakGroup('MonteCristo')" onmouseover="javascript:hoveron('MonteCristo')"
             onmouseout="javascript:hoveroff('MonteCristo')">Monte Cristo Seven</div>
        <div style="display: none;" class=expandList id="MonteCristoMore" >
           Cadet Peak (7186')<br>
           Columbia Peak (7172')<br>
           Del Campo Peak (6610')<br>
           Foggy Peak (6810')<br>
           Kyes Peak (7280')<br>
           Monte Cristo Peak (7136')<br>
           South Gemini Peak (6799')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-monte-cristo-seven/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/8T54">View Constellation in CalTopo</a>
        </div>
        <div id='Skykomish' class=expand onclick="javascript:PeakGroup('Skykomish')" onmouseover="javascript:hoveron('Skykomish')"
             onmouseout="javascript:hoveroff('Skykomish')">Skykomish Three</div>
        <div style="display: none;" class=expandList id="SkykomishMore" >
           Gunn Peak (6240')<br>
           Mt Baring (6125')<br>
           Spire Mountain (6213')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/north-central-cascades-groups/the-skykomish-three/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/7HKD">View Constellation in CalTopo</a>
        </div>
        <div id='Chiwaukum' class=expand onclick="javascript:PeakGroup('Chiwaukum')" onmouseover="javascript:hoveron('Chiwaukum')"
             onmouseout="javascript:hoveroff('Chiwaukum')">Chiwaukum Two</div>
        <div style="display: none;" class=expandList id="ChiwaukumMore" >
           Big Chiwaukum Peak (8081')<br> 
           Snowgrass Mountain (7993')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/central-cascades-groups/the-chiwaukum-two/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/UJ3S">View Constellation in CalTopo</a>
        </div>
        <div id='Snoqualmie' class=expand onclick="javascript:PeakGroup('Snoqualmie')" onmouseover="javascript:hoveron('Snoqualmie')"
             onmouseout="javascript:hoveroff('Snoqualmie')">Snoqualmie Twelve</div>
        <div style="display: none;" class=expandList id="SnoqualmieMore" >
           Bears Breast Mountain (7197')<br>
           Chair Peak (6238')<br>
           Chikamin Peak (7000')<br>
           Chimney Rock (7727')<br>
           Hibox Peak (6547')<br>
           Kaleetan Peak (6259')<br>
           Lemah Mountain (7480')<br>
           Mt Daniel (7986')<br>
           Mt Hinman (7492')<br>
           Mt Thomson (6554')<br>
           Summit Chief Mountain (7464')<br>
           Three Queens Mountain (6687')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/central-cascades-groups/the-snoqualmie-twelve/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/HL0S">View Constellation in CalTopo</a>
        </div>
        <div id='Icicle' class=expand onclick="javascript:PeakGroup('Icicle')" onmouseover="javascript:hoveron('Icicle')"
             onmouseout="javascript:hoveroff('Icicle')">Icicle Eight</div>
        <div style="display: none;" class=expandList id="IcicleMore" >
           Argonaut Peak (8453')<br>
           Cannon Mountain (8638')<br>
           Cashmere Mountain (8501')<br>
           Colchuck Peak (8705')<br>
           Dragontail Peak (8840')<br>
           McClellan Peak (8364')<br>
           Mt Stuart (9415')<br>
           Sherpa Peak (8605')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/central-cascades-groups/the-icicle-eight/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/4EV2">View Constellation in CalTopo</a>
        </div>
        <div id='Olympic' class=expand onclick="javascript:PeakGroup('Olympic')" onmouseover="javascript:hoveron('Olympic')"
             onmouseout="javascript:hoveroff('Olympic')">Olympic Thirteen</div>
        <div style="display: none;" class=expandList id="OlympicMore" >
           Mt Anderson: east peak (7321')<br>
           Mt Anderson: west peak (7365')<br>
           Mt Angeles (6454')<br>
           Mt Carrie (6995')<br>
           Mt Christie (6177')<br> 
           Mt Constance: inner peak (7667')<br>
           Mt Constance: outer peak (7756')<br>
           Mt Deception (7788')<br>
           Mt Meany (6695')<br> 
           Mt Mystery (7639')<br>
           Mt Stone (6612')<br>
           Mt Washington (6255')<br> 
           The Brothers: south peak (6842')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/olympic-mountains-groups/the-olympic-thirteen/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/AP52">View Constellation in CalTopo</a>
        </div>
        <div id='GoatRocks' class=expand onclick="javascript:PeakGroup('GoatRocks')" onmouseover="javascript:hoveron('GoatRocks')"
             onmouseout="javascript:hoveroff('GoatRocks')">Goat Rocks Three</div>
        <div style="display: none;" class=expandList id="GoatRocksMore" >
           Ives Peak (7932')<br> 
           Mt Curtis Gilbert (8184')<br>
           Old Snowy Mountain (7930')<br>
           <a target="_blank" href="http://trailcatjim.com/major-peaks/southern-cascades-groups/the-goat-rocks-three/">View Trip Reports</a><br>
           <a target="_blank" href="https://caltopo.com/m/1F61">View Constellation in CalTopo</a>
        </div>
              <!-- Wild Card Group -->   
        <h3 class=interactiveMapSidebar>Wild Card Groups</h3>
        <div id='Outlier' class=expand onclick="javascript:PeakGroup('Outlier')" onmouseover="javascript:hoveron('Outlier')"
             onmouseout="javascript:hoveroff('Outlier')">Outlier Twelve</div>
        <div style="display: none;" class=expandList id="OutlierMore" >
           Big Four Mountain (6160')<br> 
           Davis Peak (7051')<br>
           North Ingalls Peak (7662')<br>
           McGregor Mountain (8122')<br>
           Mt David (7420')<br>
           Mt Garfield (5519')<br>
           Mt Index (5991')<br>
           Mt Outram (8074')<br>
           Mt Prophet (7640')<br>
           Sluiskin Mountain (7026')<br>
           The Cradle (7467')<br>
           Whatcom Peak (7574')<br>
           <a target="_blank" href=http://trailcatjim.com/major-peaks/wild-card-groups/the-outlier-twelve/>View Trip Reports</a>
        </div>
        <div id='Satellite' class=expand onclick="javascript:PeakGroup('Satellite')" onmouseover="javascript:hoveron('Satellite')"
             onmouseout="javascript:hoveroff('Satellite')">Satellite Three</div>
        <div style="display: none;" class=expandList id="SatelliteMore" >
           Colfax Peak (9443')<br>  
           Lincoln Peak (9096')<br> 
           Little Tahoma Peak (11,138')<br>
           <a target="_blank" href=http://trailcatjim.com/major-peaks/wild-card-groups/the-satellite-three/>View Trip Reports</a><br>
        </div>

      </aside>
      
   </div> <!-- end of map/sidebar row -->
   
   <!-- Buttons above Footer  -->   
   <div class=row> 
      <div class="left button-column">
        <br>
        <a class="button" target="_blank" href="http://trailcatjim.com/wp-content/uploads/2018/06/MPCO.ConstellationMap.2017-11-21.4000dpi.pdf">
            Major Peaks Constellation Map PDF
        </a>
        <a class="button" target="_blank" href="http://trailcatjim.com/wp-content/uploads/2017/08/MPCO.SynopsisLists.2018-09-10.pdf">
            Major Peaks Synopsis and Group Lists PDF
        </a>
        <a class="button" target="_blank" href="http://trailcatjim.com/major-peaks-a-z/">
            Interactive List of Major Peaks A-Z
        </a>
        <br>
      </div>
      <div class="rightphone">
        <!-- extra box, reserved for future use -->
      </div>
   </div>  <!-- end of buttons -->
   
   <!-- Footer -->
   <footer class="fullwidth">
      <figure>
         <img src="http://trailcatjim.com/wp-content/uploads/2019/07/TrailCatJim-e1587595478416.jpg" alt="Meet Trailcat Jim">
      </figure>
      <figcaption>
         <p> 
           Jim Brisbine has been climbing Washington peaks for 40+ years,
           documenting hundreds of summits and thousands of trail miles in words and pictures.
         </p>
         <p>
           As the creator of "<a target="_blank" href="http://trailcatjim.com/wp-content/uploads/2017/08/MPCO.SynopsisLists.2018-09-10.pdf">Major Peaks of the Cascades &#38; Olympics: Fraser River -- Nicola River to Columbia River,</a>"
           he is an avid outdoorsman and lifelong trailcat who only occasionally ventures beyond the Pacific Northwest.
         </p>
      </figcaption>
   </footer>

</div> <!-- end of "content" div -->
<!-- - - - - - - - JAVASCRIPT - -  - - - - - - - - - -->
<script>
   /* --- user clicks on a peak group --- */
   function PeakGroup(id) { 
      hilight(id);
      ShowHide(id);
   }
   /* --- hovering mouse over a peak group in sidebar --- */
   function hoveron(id) {
      var IDpath = document.getElementById(id + 'Path'); /* append "Path" to the id so we can alter that id */
      if (IDpath.style.fillOpacity == .0) { 
        IDpath.style.fillOpacity = .24;  /* note this is close, but not the same as below "highlight" function */
        IDpath.style.strokeOpacity = .7;
      }
   } 
   function hoveroff(id) {
      var IDpath = document.getElementById(id + 'Path'); /* append "Path" to the id so we can alter that id */
      if (IDpath.style.fillOpacity == .24) {
        IDpath.style.fillOpacity = 0;
        IDpath.style.strokeOpacity = 0; /* make sure these numbers match the path CSS file */
      }
   }
   /* when clicking on a group */
   function hilight(id) { 
      var IDpath = document.getElementById(id + 'Path'); /* append "Path" to the id so we can alter that id */
      if (  (IDpath.style.fillOpacity == .24) || (IDpath.style.fillOpacity == 0 ) || (IDpath.style.fillOpacity == null)  ) { /* it's null at first */
        IDpath.style.fillOpacity = .25; /* clicked color */
        IDpath.style.strokeOpacity= .7;
      } else if (IDpath.style.fillOpacity == .25) {
        IDpath.style.fillOpacity= 0;    /* not-clicked and not-hovered color */
        IDpath.style.strokeOpacity = 0;    
      } else {
        IDpath.style.fillOpacity= .24;   /* hovered color */
        IDpath.style.strokeOpacity = .7; 
      }
   }
   /* --- highlight a peak group on the map --- */
   function hilightCircle(id) {
      var IDpath = document.getElementById(id + 'Path'); /* append "Path" to the id so we can alter that id */
      if (  (IDpath.style.fillOpacity == .99) || (IDpath.style.fillOpacity == 0 ) || (IDpath.style.fillOpacity == null)  ) { /* it's null at first */
        IDpath.style.fillOpacity = 1;
        IDpath.style.strokeOpacity= .5;
      } else if (IDpath.style.fillOpacity == 1){ /* if you are clicking, you are also hovering, so set back to hovering value */
        IDpath.style.fillOpacity= 0;
        IDpath.style.strokeOpacity = ''; /* make sure these numbers match the path CSS file */
      } else { /* if you are clicking, you are also hovering, so set back to hovering value */
        IDpath.style.fillOpacity= .99;
        IDpath.style.strokeOpacity = .5; /* make sure these numbers match the path CSS file */
      } 
   }
   /* --- Show or hide an id --- */
   function ShowHide(id) {
      var IDmore = document.getElementById(id + 'More');
      if (IDmore.style.display == 'none') {
        IDmore.style.display = 'block';
        /* id.style.cursor = "zoom-out"; doesn't work */
      } else {
        IDmore.style.display = 'none';
        /* id.style.cursor = "zoom-in";  doesn't work */
      }
   }
   function CircleGroup(id) { 
      hilightCircle(id);
      ShowHide(id);
   }
   function hoveronCircle(id) {
      var IDpath = document.getElementById(id + 'Path'); /* append "Path" to the id so we can alter that id */
      if (IDpath.style.fillOpacity == .0) { 
        IDpath.style.fillOpacity = .99;  /* note this is close, but not the same as below "highlight" function */
        IDpath.style.strokeOpacity = .5;
      }
   } 
   function hoveroffCircle(id) {
      var IDpath = document.getElementById(id + 'Path'); /* append "Path" to the id so we can alter that id */
      if (IDpath.style.fillOpacity == .99) {
        IDpath.style.fillOpacity = 0;
        IDpath.style.strokeOpacity = 0; /* make sure these numbers match the path CSS file */
      }
   }
</script>