﻿<script src="assets/js/jssor.slider-28.1.0.min.js"></script>

<script>
    window.jssor_1_slider_init = function() {

        var jssor_1_SlideoTransitions = [
          [{b:500,d:1000,x:0,e:{x:6}}],
          [{b:-1,d:1,x:100,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
          [{b:-1,d:1,x:200,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
          [{b:-1,d:1,rX:20,rY:90},{b:0,d:4000,rX:0,e:{rX:1}}],
          [{b:-1,d:1,rY:-20},{b:0,d:4000,rY:-90,e:{rY:7}}],
          [{b:-1,d:1,sX:2,sY:2},{b:1000,d:3000,sX:1,sY:1,e:{sX:1,sY:1}}],
          [{b:-1,d:1,sX:2,sY:2},{b:1000,d:5000,sX:1,sY:1,e:{sX:3,sY:3}}],
          [{b:-1,d:1,tZ:300},{b:0,d:2000,o:1},{b:3500,d:3500,tZ:0,e:{tZ:1}}],
          [{b:-1,d:1,x:20,p:{x:{o:33,r:0.5}}},{b:0,d:1000,x:0,o:0.5,e:{x:3,o:1},p:{x:{dl:0.05,o:33},o:{dl:0.02,o:68,rd:2}}},{b:1000,d:1000,o:1,e:{o:1},p:{o:{dl:0.05,o:68,rd:2}}}],
          [{b:-1,d:1,da:[0,700]},{b:0,d:600,da:[700,700],e:{da:1}}],
          [{b:600,d:1000,o:0.4}],
          [{b:-1,d:1,da:[0,400]},{b:200,d:600,da:[400,400],e:{da:1}}],
          [{b:800,d:1000,o:0.4}],
          [{b:-1,d:1,sX:1.1,sY:1.1},{b:0,d:1600,o:1},{b:1600,d:5000,sX:0.9,sY:0.9,e:{sX:1,sY:1}}],
          [{b:0,d:1000,o:1,p:{o:{o:4}}}],
          [{b:1000,d:1000,o:1,p:{o:{o:4}}}]
        ];

        var jssor_1_options = {
          $AutoPlay: 1,
          $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$,
            $SpacingX: 16,
            $SpacingY: 16
          }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);


        var MAX_WIDTH = 1500;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    };
</script>

<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin-ext,cyrillic-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css"/>

<style>
    .jssorl-004-double-tail-spin img {
        animation-name: jssorl-004-double-tail-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }
    @keyframes jssorl-004-double-tail-spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .jssorb031 {position:absolute;}
    .jssorb031 .i {position:absolute;cursor:pointer;}
    .jssorb031 .i .b {fill:#000;fill-opacity:0.6;stroke:#fff;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.8;}
    .jssorb031 .i:hover .b {fill:#fff;fill-opacity:1;stroke:#000;stroke-opacity:1;}
    .jssorb031 .iav .b {fill:#fff;stroke:#000;stroke-width:1600;fill-opacity:.6;}
    .jssorb031 .i.idn {opacity:.3;}
    .jssora051 {display:block;position:absolute;cursor:pointer;}
    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
    .jssora051.jssora051dn {opacity:.5;}
    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
    </div>
  
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
        <div style="background-color:#000000;">
            <img data-u="image" style="opacity:0.5;" src="pic/1.jpg" />
            <div data-ts="flat" data-p="320" style="left:144px;top:230px;width:550px;height:90px;position:absolute;overflow:hidden;">
                <div data-to="50% 50%" data-ts="preserve-3d" data-t="0" style="left:550px;top:0px;width:550px;height:90px;position:absolute;overflow:hidden;">
                    <div  data-to="50% 50%" data-ts="preserve-3d" data-arr="1" style="left:20px;top:18px;width:300px;height:20px;position:absolute;color:#edf1f2;font-size:16px;font-weight:700;line-height:1.2;">Chapra Kashiram Alim Madrasha</div>
                    <div  data-to="50% 50%" data-ts="preserve-3d" data-arr="2" style="left:19px;top:36px;width:600px;height:30px;position:absolute;color:#edf1f2;font-size:24px;line-height:1.2;"><span style="font-weight:900;color:#e04338;">Veiw</span> Madrasha Building...</div>
                </div>
            </div>
        </div>
        <div>
            <img data-u="image" src="pic/2.jpg" />
            <div data-ts="flat" data-p="2720" data-po="50% 48%" style="left:0px;top:100px;width:980px;height:380px;position:absolute;">
                <div data-to="50% 50%" data-ts="preserve-3d" data-t="3" style="left:400px;top:-30px;width:500px;height:400px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="4" style="left:0px;top:0px;width:500px;height:400px;position:absolute;">
                        <div data-to="50% 50%" data-ts="preserve-3d" data-t="5" style="left:0px;top:0px;width:500px;height:400px;position:absolute;">
                            <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:0px;top:0px;width:500px;height:400px;position:absolute;">
                               <div data-to="50% 50%" data-t="7" style="left:-10px;top:175px;width:300px;height:38px;position:absolute;opacity:0;color:#00a186;font-size:32px;font-weight:700;line-height:1.2;text-align:center;">Fulfil your Dream</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color:#000000;">
            <img data-u="image" style="opacity:0.5;" src="pic/3.jpg" />
            <div data-ts="flat" data-p="1800" data-po="50% -100%" style="left:120px;top:90px;width:600px;height:300px;position:absolute;">
                <!-- <svg viewbox="0 0 200 200" width="200" height="200" data-t="10" style="left:66px;top:21px;display:block;position:absolute;opacity:0.6;overflow:visible;">
                    <path stroke-dasharray="0,700" fill="none" stroke="#ffffff" d="M0,100C0,44.77152 44.77152,0 100,0C155.22848,0 200,44.77152 200,100C200,155.22848 155.22848,200 100,200C44.77152,200 0,155.22848 0,100Z" data-t="9"></path>
                </svg>
                <svg viewbox="0 0 80 80" width="80" height="80" data-t="12" style="left:3px;top:124px;display:block;position:absolute;opacity:0.6;overflow:visible;">
                    <path stroke-dasharray="0,400" fill="none" stroke="#ffffff" shape-rendering="crispEdges" d="M80,80L0,80L0,0L80,0Z" data-t="11"></path>
                </svg> -->
                <svg viewbox="0 0 500 200" data-to="50% 50%" width="500" height="200" data-t="13" style="left:50px;top:50px;display:block;position:absolute;opacity:0;overflow:visible;">
                    <g>
                        <text fill="#ffffff" x="17" y="110" style="position:absolute;font-family:Montserrat,sans-serif;font-size:32px;font-weight:300;overflow:visible;"> It always
                        </text>
                        <text fill="#ffffff" x="188" y="110" style="position:absolute;font-family:Montserrat,sans-serif;font-size:32px;font-weight:500;letter-spacing:0.1em;overflow:visible;">Seems IMPOSSIBLE
                        </text>
                        <text fill="#ff3700" x="218" y="130" style="position:absolute;font-family:Montserrat,sans-serif;font-size:16px;font-weight:900;letter-spacing:0.1em;overflow:visible;"> Until 
                        </text>
                        <text fill="#ff3700" x="333" y="130" style="position:absolute;opacity:0.8;font-family:Montserrat,sans-serif;font-size:16px;font-weight:700;letter-spacing:0.1em;overflow:visible;"> It’s DONE.
                        </text>
                    </g>
                </svg>
            </div>
        </div>
        <div>
            <img data-u="image" src="pic/4.jpg" />
            <div data-ts="flat" data-p="500" style="left:160px;top:200px;width:800px;height:200px;position:absolute;">
                <div data-arr="14" style="left:0px;top:36px;width:800px;height:70px;position:absolute;opacity:0;color:#199494;font-family:'Roboto Condensed',sans-serif;        font-size:32px;font-weight:400;line-height:1.2;letter-spacing:-0.05em;text-align:center;text-shadow:2px 1px #d9d99a;">Strive for &nbsp;&nbsp;<span  style="font-size:2em;">  PROGRESS,</span>&nbsp; NOT&nbsp; for&nbsp;&nbsp;<span style="font-size:1.6em;">PERFECTION</span>
                </div>
            </div>
        </div>
    </div><a data-scale="0" href="" style="display:none;position:absolute;">slider html</a>
 
</div>

<script>jssor_1_slider_init()</script>

