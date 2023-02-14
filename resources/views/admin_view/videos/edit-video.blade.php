@extends('admin_view.admin_master')

@section('admins')

<!-- <div class="content-body"> -->

<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3 class="title">Elements <span>/ Media Player </span></h3>
        </div>
    </div><!-- Page Heading End -->

</div><!-- Page Headings End -->

<div class="row">

    <!--HTML5 Video Start-->
    <div class="col-md-6 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">HTML5 Video (Plyr) </h4>
            </div>
            <div class="box-body">
                <div tabindex="0"
                    class="plyr plyr--full-ui plyr--video plyr--html5 plyr--pip-supported plyr--fullscreen-enabled plyr--paused plyr__tab-focus">
                    <div class="plyr__controls"><button type="button" class="plyr__control" data-plyr="play"
                            aria-label="Play"><svg class="icon--pressed" role="presentation" focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-pause"></use>
                            </svg><svg class="icon--not-pressed" role="presentation" focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-play"></use>
                            </svg><span class="label--pressed plyr__sr-only">Pause</span><span
                                class="label--not-pressed plyr__sr-only">Play</span></button>
                        <div class="plyr__progress"><input data-plyr="seek" type="range" min="0" max="100" step="0.01"
                                value="0" autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0"
                                aria-valuemax="12.012" aria-valuenow="12.012" id="plyr-seek-884"
                                aria-valuetext="00:12 of 00:12" seek-value="60.644986204713014"
                                style="--value:100%;"><progress class="plyr__progress__buffer" min="0" max="100"
                                value="100" role="progressbar" aria-hidden="true">% buffered</progress><span
                                class="plyr__tooltip" style="left: 62.0924%;">00:07</span></div>
                        <div class="plyr__time plyr__time--current" aria-label="Current time">00:00</div>
                        <div class="plyr__volume"><button type="button" class="plyr__control" data-plyr="mute"><svg
                                    class="icon--pressed" role="presentation" focusable="false">
                                    <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-muted">
                                    </use>
                                </svg><svg class="icon--not-pressed" role="presentation" focusable="false">
                                    <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-volume">
                                    </use>
                                </svg><span class="label--pressed plyr__sr-only">Unmute</span><span
                                    class="label--not-pressed plyr__sr-only">Mute</span></button><input
                                data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off"
                                role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100"
                                aria-valuenow="100" id="plyr-volume-884" aria-valuetext="100.0%" style="--value:100%;">
                        </div><button type="button" class="plyr__control" data-plyr="captions"><svg
                                class="icon--pressed" role="presentation" focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-captions-on">
                                </use>
                            </svg><svg class="icon--not-pressed" role="presentation" focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-captions-off">
                                </use>
                            </svg><span class="label--pressed plyr__sr-only">Disable captions</span><span
                                class="label--not-pressed plyr__sr-only">Enable captions</span></button>
                        <div class="plyr__menu"><button aria-haspopup="true" aria-controls="plyr-settings-884"
                                aria-expanded="false" type="button" class="plyr__control" data-plyr="settings"><svg
                                    role="presentation" focusable="false">
                                    <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-settings">
                                    </use>
                                </svg><span class="plyr__sr-only">Settings</span></button>
                            <div class="plyr__menu__container" id="plyr-settings-884" hidden="">
                                <div>
                                    <div id="plyr-settings-884-home">
                                        <div role="menu"><button data-plyr="settings" type="button"
                                                class="plyr__control plyr__control--forward" role="menuitem"
                                                aria-haspopup="true" hidden=""><span>Captions<span
                                                        class="plyr__menu__value">Disabled</span></span></button><button
                                                data-plyr="settings" type="button"
                                                class="plyr__control plyr__control--forward" role="menuitem"
                                                aria-haspopup="true"><span>Quality<span
                                                        class="plyr__menu__value">576p</span></span></button><button
                                                data-plyr="settings" type="button"
                                                class="plyr__control plyr__control--forward" role="menuitem"
                                                aria-haspopup="true"><span>Speed<span
                                                        class="plyr__menu__value">Normal</span></span></button>
                                        </div>
                                    </div>
                                    <div id="plyr-settings-884-captions" hidden=""><button type="button"
                                            class="plyr__control plyr__control--back"><span
                                                aria-hidden="true">Captions</span><span class="plyr__sr-only">Go
                                                back to previous menu</span></button>
                                        <div role="menu"></div>
                                    </div>
                                    <div id="plyr-settings-884-quality" hidden=""><button type="button"
                                            class="plyr__control plyr__control--back"><span
                                                aria-hidden="true">Quality</span><span class="plyr__sr-only">Go back
                                                to previous menu</span></button>
                                        <div role="menu"><button data-plyr="quality" type="button" role="menuitemradio"
                                                class="plyr__control" aria-checked="false" value="1080"><span>1080p<span
                                                        class="plyr__menu__value"><span
                                                            class="plyr__badge">HD</span></span></span></button><button
                                                data-plyr="quality" type="button" role="menuitemradio"
                                                class="plyr__control" aria-checked="false" value="720"><span>720p<span
                                                        class="plyr__menu__value"><span
                                                            class="plyr__badge">HD</span></span></span></button><button
                                                data-plyr="quality" type="button" role="menuitemradio"
                                                class="plyr__control" aria-checked="true" value="576"><span>576p<span
                                                        class="plyr__menu__value"><span
                                                            class="plyr__badge">SD</span></span></span></button>
                                        </div>
                                    </div>
                                    <div id="plyr-settings-884-speed" hidden=""><button type="button"
                                            class="plyr__control plyr__control--back"><span
                                                aria-hidden="true">Speed</span><span class="plyr__sr-only">Go back
                                                to previous menu</span></button>
                                        <div role="menu"><button data-plyr="speed" type="button" role="menuitemradio"
                                                class="plyr__control" aria-checked="false"
                                                value="0.5"><span>0.5×</span></button><button data-plyr="speed"
                                                type="button" role="menuitemradio" class="plyr__control"
                                                aria-checked="false" value="0.75"><span>0.75×</span></button><button
                                                data-plyr="speed" type="button" role="menuitemradio"
                                                class="plyr__control" aria-checked="true"
                                                value="1"><span>Normal</span></button><button data-plyr="speed"
                                                type="button" role="menuitemradio" class="plyr__control"
                                                aria-checked="false" value="1.25"><span>1.25×</span></button><button
                                                data-plyr="speed" type="button" role="menuitemradio"
                                                class="plyr__control" aria-checked="false"
                                                value="1.5"><span>1.5×</span></button><button data-plyr="speed"
                                                type="button" role="menuitemradio" class="plyr__control"
                                                aria-checked="false" value="1.75"><span>1.75×</span></button><button
                                                data-plyr="speed" type="button" role="menuitemradio"
                                                class="plyr__control" aria-checked="false"
                                                value="2"><span>2×</span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div><button type="button" class="plyr__control" data-plyr="pip"><svg role="presentation"
                                focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-pip"></use>
                            </svg><span class="plyr__sr-only">PIP</span></button><button type="button"
                            class="plyr__control" data-plyr="fullscreen"><svg class="icon--pressed" role="presentation"
                                focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-exit-fullscreen">
                                </use>
                            </svg><svg class="icon--not-pressed" role="presentation" focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-enter-fullscreen">
                                </use>
                            </svg><span class="label--pressed plyr__sr-only">Exit fullscreen</span><span
                                class="label--not-pressed plyr__sr-only">Enter fullscreen</span></button>
                    </div>
                    <div class="plyr__video-wrapper"><video poster="assets/images/bg/video-1-poster.jpg"
                            class="plyr-video" playsinline="" src="assets/media/video-1-576p.mp4">
                            <source src="assets/media/video-1-576p.mp4" type="video/mp4" data-res="576">
                            <source src="assets/media/video-1-720p.mp4" type="video/mp4" data-res="720">
                            <source src="assets/media/video-1-1080p.mp4" type="video/mp4" data-res="1080">
                        </video>
                        <div class="plyr__poster"></div>
                    </div>
                    <div class="plyr__captions"></div><button type="button"
                        class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play"><svg
                            role="presentation" focusable="false">
                            <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-play"></use>
                        </svg><span class="plyr__sr-only">Play</span></button>
                </div>
            </div>
        </div>
    </div>
    <!--HTML5 Video Start-->

    <!--HTML5 Audio Start-->
    <div class="col-md-6 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">HTML5 Audio (Plyr) </h4>
            </div>
            <div class="box-body">
                <div tabindex="0" class="plyr plyr--full-ui plyr--audio plyr--html5 plyr--paused plyr--stopped">
                    <div class="plyr__controls"><button type="button" class="plyr__control" data-plyr="play"
                            aria-label="Play"><svg class="icon--pressed" role="presentation" focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-pause"></use>
                            </svg><svg class="icon--not-pressed" role="presentation" focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-play"></use>
                            </svg><span class="label--pressed plyr__sr-only">Pause</span><span
                                class="label--not-pressed plyr__sr-only">Play</span></button>
                        <div class="plyr__progress"><input data-plyr="seek" type="range" min="0" max="100" step="0.01"
                                value="0" autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0"
                                aria-valuemax="100" aria-valuenow="0" id="plyr-seek-1310"
                                seek-value="0.9784810610404006" style="--value:0%;"><progress
                                class="plyr__progress__buffer" min="0" max="100" value="0" role="progressbar"
                                aria-hidden="true">% buffered</progress><span class="plyr__tooltip"
                                style="left: 0%;">00:00</span></div>
                        <div class="plyr__time plyr__time--current" aria-label="Current time">-02:34</div>
                        <div class="plyr__volume"><button type="button" class="plyr__control" data-plyr="mute"><svg
                                    class="icon--pressed" role="presentation" focusable="false">
                                    <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-muted">
                                    </use>
                                </svg><svg class="icon--not-pressed" role="presentation" focusable="false">
                                    <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-volume">
                                    </use>
                                </svg><span class="label--pressed plyr__sr-only">Unmute</span><span
                                    class="label--not-pressed plyr__sr-only">Mute</span></button><input
                                data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off"
                                role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100"
                                aria-valuenow="85" id="plyr-volume-1310" aria-valuetext="85.0%" style="--value:85%;">
                        </div><button type="button" class="plyr__control" data-plyr="captions"><svg
                                class="icon--pressed" role="presentation" focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-captions-on">
                                </use>
                            </svg><svg class="icon--not-pressed" role="presentation" focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-captions-off">
                                </use>
                            </svg><span class="label--pressed plyr__sr-only">Disable captions</span><span
                                class="label--not-pressed plyr__sr-only">Enable captions</span></button>
                        <div class="plyr__menu"><button aria-haspopup="true" aria-controls="plyr-settings-1310"
                                aria-expanded="false" type="button" class="plyr__control" data-plyr="settings"><svg
                                    role="presentation" focusable="false">
                                    <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-settings">
                                    </use>
                                </svg><span class="plyr__sr-only">Settings</span></button>
                            <div class="plyr__menu__container" id="plyr-settings-1310" hidden="">
                                <div>
                                    <div id="plyr-settings-1310-home">
                                        <div role="menu"><button data-plyr="settings" type="button"
                                                class="plyr__control plyr__control--forward" role="menuitem"
                                                aria-haspopup="true" hidden=""><span>Captions<span
                                                        class="plyr__menu__value">Disabled</span></span></button><button
                                                data-plyr="settings" type="button"
                                                class="plyr__control plyr__control--forward" role="menuitem"
                                                aria-haspopup="true" hidden=""><span>Quality<span
                                                        class="plyr__menu__value">undefined</span></span></button><button
                                                data-plyr="settings" type="button"
                                                class="plyr__control plyr__control--forward" role="menuitem"
                                                aria-haspopup="true"><span>Speed<span
                                                        class="plyr__menu__value">Normal</span></span></button>
                                        </div>
                                    </div>
                                    <div id="plyr-settings-1310-captions" hidden=""><button type="button"
                                            class="plyr__control plyr__control--back"><span
                                                aria-hidden="true">Captions</span><span class="plyr__sr-only">Go
                                                back to previous menu</span></button>
                                        <div role="menu"></div>
                                    </div>
                                    <div id="plyr-settings-1310-quality" hidden=""><button type="button"
                                            class="plyr__control plyr__control--back"><span
                                                aria-hidden="true">Quality</span><span class="plyr__sr-only">Go back
                                                to previous menu</span></button>
                                        <div role="menu"></div>
                                    </div>
                                    <div id="plyr-settings-1310-speed" hidden=""><button type="button"
                                            class="plyr__control plyr__control--back"><span
                                                aria-hidden="true">Speed</span><span class="plyr__sr-only">Go back
                                                to previous menu</span></button>
                                        <div role="menu"><button data-plyr="speed" type="button" role="menuitemradio"
                                                class="plyr__control" aria-checked="false"
                                                value="0.5"><span>0.5×</span></button><button data-plyr="speed"
                                                type="button" role="menuitemradio" class="plyr__control"
                                                aria-checked="false" value="0.75"><span>0.75×</span></button><button
                                                data-plyr="speed" type="button" role="menuitemradio"
                                                class="plyr__control" aria-checked="true"
                                                value="1"><span>Normal</span></button><button data-plyr="speed"
                                                type="button" role="menuitemradio" class="plyr__control"
                                                aria-checked="false" value="1.25"><span>1.25×</span></button><button
                                                data-plyr="speed" type="button" role="menuitemradio"
                                                class="plyr__control" aria-checked="false"
                                                value="1.5"><span>1.5×</span></button><button data-plyr="speed"
                                                type="button" role="menuitemradio" class="plyr__control"
                                                aria-checked="false" value="1.75"><span>1.75×</span></button><button
                                                data-plyr="speed" type="button" role="menuitemradio"
                                                class="plyr__control" aria-checked="false"
                                                value="2"><span>2×</span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div><button type="button" class="plyr__control" data-plyr="pip"><svg role="presentation"
                                focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-pip"></use>
                            </svg><span class="plyr__sr-only">PIP</span></button><button type="button"
                            class="plyr__control" data-plyr="fullscreen"><svg class="icon--pressed" role="presentation"
                                focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-exit-fullscreen">
                                </use>
                            </svg><svg class="icon--not-pressed" role="presentation" focusable="false">
                                <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-enter-fullscreen">
                                </use>
                            </svg><span class="label--pressed plyr__sr-only">Exit fullscreen</span><span
                                class="label--not-pressed plyr__sr-only">Enter fullscreen</span></button>
                    </div><audio class="plyr-audio">
                        <source src="assets/media/audio-1.mp3" type="audio/mp3">
                    </audio><button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play"
                        aria-label="Play"><svg role="presentation" focusable="false">
                            <use xlink:href="../../../../../../../cdn.plyr.io/3.5.2/plyr.svg#plyr-play"></use>
                        </svg><span class="plyr__sr-only">Play</span></button>
                </div>
            </div>
        </div>
    </div>
    <!--HTML5 Audio Start-->

    <!--Youtube Video Start-->
    <div class="col-md-6 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">Youtube Video (Plyr) </h4>
            </div>
            <div class="box-body">
                <div class="">
                    <iframe src="../../../www.youtube.com/embed/bTqVqk7FSmY_539366f3.html" allowfullscreen=""
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--Youtube Video Start-->

    <!--Vimeo Video Start-->
    <div class="col-md-6 col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">Vimeo Video (Plyr) </h4>
            </div>
            <div class="box-body">
                <div class="">
                    <iframe src="../../../player.vimeo.com/video/76979871_fd893a43.html" allowfullscreen=""
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--Vimeo Video Start-->

    <!--How To Use Start-->
    <div class="col-12">
        <div class="box">
            <div class="box-head">
                <h4 class="title">How To Use </h4>
            </div>
            <div class="box-body">
                <h6>Basic Use HTML </h6>
                <code>
                            &lt;video ______="______/______/__/_____-1-______.___" class="plyr-video" playsinline controls&gt; <br>&nbsp;&nbsp;&nbsp; &lt;source src="assets/media/video-1-576p.mp4" type="video/mp4" ____="576" /&gt; <br>&nbsp;&nbsp;&nbsp; &lt;source src="assets/media/video-1-720p.mp4" type="video/mp4" ____="720" /&gt; <br>&nbsp;&nbsp;&nbsp; &lt;source src="assets/media/video-1-1080p.mp4" type="video/mp4" ____="1080" /&gt; <br>&lt;/video&gt;
                         </code>
                <h6 class="mt-15">Js Activation </h6>
                <code>
                            const _________ = new Plyr('.plyr-video');
                         </code>
                <p class="mt-15">For more Information please ______ the <a class="text-primary"
                        href="https://github.com/sampotts/plyr">Official Documentation </a></p>
            </div>
        </div>
    </div>
    <!--How To Use End-->

</div>

<!--  </div> -->
@endsection