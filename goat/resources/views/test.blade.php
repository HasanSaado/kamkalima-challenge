<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Droppable - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="./resources/demos/style.css">
  <style>
  #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );
  </script>
</head>
<body>

<div id="draggable" class="ui-widget-content">
  jdskjkdjk
</div>
 
<div id="droppable" class="ui-widget-header">
  <p>Drop here</p>
</div>
 
 
</body>
</html>


Pitch-sc-1mctasb-0 kppgUD



/* Mixins */
/*
// When a full-width widget is inside a container, this mixin uses viewport width to break it out of that container
// Note that overflow-x: hidden should be applied to to <body>, as the vw calculation does not take into account static scrollbar width
*/
/*
 * Adds hover and focus styles for desktop and up
 * Only provides focus styles for below desktop
 */
/*
 * Applies an ellipsis to text that overflows the width passed into the mixin
 * NB this ONLY works on single lines of text
 */
/*
  This mixin can be used to set the object-fit:
  @include object-fit(contain);
  or object-fit and object-position:
  @include object-fit(cover, top);
  https://github.com/bfred-it/object-fit-images
*/
/* Font */
/* Grid */
/* Colours */
/* Social Media Colours */
/* Nike Ball Hub */
/* Social Feed */
/* Kicks at 10 */
/* inspiring Stories */
/* history */
/* Singapore OTT */
/* visual refresh extra colours */
/********************************   */
/* Breakpoints */
/* classes applied to body */
.u-body-no-scroll {
  position: fixed;
  overflow: hidden;
  width: 100%;
  height: 100%; }

/* hide classes */
.u-hide {
  display: none !important; }

.u-show {
  display: block !important; }

.u-disabled {
  pointer-events: none; }

.u-text-center {
  text-align: center; }

.u-inline {
  display: inline-block !important; }

@media (max-width: 43.75em) {
  .u-hide-mob {
    display: none !important; } }

@media (max-width: 63.9375em) {
  .u-hide-tab {
    display: none !important; } }

.u-show-tab {
  display: none !important; }
  @media (max-width: 63.9375em) {
    .u-show-tab {
      display: block !important; } }

.u-show-mob {
  display: none !important; }
  @media (max-width: 43.75em) {
    .u-show-mob {
      display: block !important; } }

.u-text-right {
  text-align: right; }

.u-margin-right {
  margin-right: 0.5rem !important; }

.u-no-margin {
  margin: 0 !important; }

.u-no-margin-bottom {
  margin-bottom: 0 !important; }

.u-no-margin-top {
  margin-top: 0 !important; }

.u-no-padding {
  padding: 0 !important; }

.u-margin-top {
  margin-top: 3rem; }
  @media (max-width: 43.75em) {
    .u-margin-top {
      margin-top: 1rem; } }

@media (min-width: 63.9375em) {
  .u-margin-top-desktop {
    margin-top: 3rem; } }

.u-margin-top-small {
  margin-top: 1rem; }

.u-margin-bottom {
  margin-bottom: 3rem; }
  @media (max-width: 43.75em) {
    .u-margin-bottom {
      margin-bottom: 1rem; } }

@media (max-width: 43.75em) {
  .u-margin-bottom-mob {
    margin-bottom: 1rem !important; } }

.u-link-reset {
  color: initial;
  text-decoration: none; }

.icn {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  display: block; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn {
      background-size: 748px 697px;
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png"); } }

.icn.add-w-n {
  width: 17px;
  height: 17px;
  background-position: -560px -150px; }

.logo.add-w-n {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 17px;
  height: 17px;
  background-position: -560px -150px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.add-w-n {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.add-w-sm {
  width: 9px;
  height: 9px;
  background-position: -738px -209px; }

.logo.add-w-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 9px;
  height: 9px;
  background-position: -738px -209px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.add-w-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.apprentice {
  width: 30px;
  height: 30px;
  background-position: -703px -377px; }

.logo.apprentice {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 30px;
  height: 30px;
  background-position: -703px -377px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.apprentice {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.arrow-right-pink {
  width: 9px;
  height: 7px;
  background-position: -703px -688px; }

.logo.arrow-right-pink {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 9px;
  height: 7px;
  background-position: -703px -688px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-right-pink {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.audiodesc-g {
  width: 22px;
  height: 16px;
  background-position: -473px -452px; }

.logo.audiodesc-g {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 22px;
  height: 16px;
  background-position: -473px -452px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.audiodesc-g {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.audiodesc-w {
  width: 22px;
  height: 16px;
  background-position: -495px -452px; }

.logo.audiodesc-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 22px;
  height: 16px;
  background-position: -495px -452px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.audiodesc-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.blog-hi {
  width: 15px;
  height: 15px;
  background-position: -265px -605px; }

.logo.blog-hi {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -265px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.blog-hi {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.blog-text {
  width: 20px;
  height: 17px;
  background-position: -477px -468px; }

.logo.blog-text {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 17px;
  background-position: -477px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.blog-text {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.blog-w {
  width: 15px;
  height: 15px;
  background-position: -280px -605px; }

.logo.blog-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -280px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.blog-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.calendar-b {
  width: 22px;
  height: 20px;
  background-position: -703px -654px; }

.logo.calendar-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 22px;
  height: 20px;
  background-position: -703px -654px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.calendar-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.calendar-p {
  width: 22px;
  height: 20px;
  background-position: -724px -633px; }

.logo.calendar-p {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 22px;
  height: 20px;
  background-position: -724px -633px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.calendar-p {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.calendar-w {
  width: 16px;
  height: 16px;
  background-position: -172px -605px; }

.logo.calendar-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 16px;
  height: 16px;
  background-position: -172px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.calendar-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.camera-black {
  width: 21px;
  height: 21px;
  background-position: -703px -633px; }

.logo.camera-black {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 21px;
  height: 21px;
  background-position: -703px -633px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.camera-black {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.camera-blue {
  width: 21px;
  height: 21px;
  background-position: -724px -612px; }

.logo.camera-blue {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 21px;
  height: 21px;
  background-position: -724px -612px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.camera-blue {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.camera-grey {
  width: 21px;
  height: 21px;
  background-position: -724px -591px; }

.logo.camera-grey {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 21px;
  height: 21px;
  background-position: -724px -591px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.camera-grey {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.camera-white {
  width: 21px;
  height: 21px;
  background-position: -703px -591px; }

.logo.camera-white {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 21px;
  height: 21px;
  background-position: -703px -591px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.camera-white {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.car {
  width: 21px;
  height: 13px;
  background-position: -414px -487px; }

.logo.car {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 21px;
  height: 13px;
  background-position: -414px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.car {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.card-red {
  width: 9px;
  height: 15px;
  background-position: -738px -179px; }

.logo.card-red {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 9px;
  height: 15px;
  background-position: -738px -179px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.card-red {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.card-yellow {
  width: 9px;
  height: 15px;
  background-position: -738px -194px; }

.logo.card-yellow {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 9px;
  height: 15px;
  background-position: -738px -194px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.card-yellow {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.card-yellowred {
  width: 12px;
  height: 15px;
  background-position: -376px -605px; }

.logo.card-yellowred {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 15px;
  background-position: -376px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.card-yellowred {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.cause-sm-w {
  width: 19px;
  height: 11px;
  background-position: -531px -487px; }

.logo.cause-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 19px;
  height: 11px;
  background-position: -531px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.cause-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.city-map-pin {
  width: 28px;
  height: 34px;
  background-position: -703px -283px; }

.logo.city-map-pin {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 28px;
  height: 34px;
  background-position: -703px -283px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.city-map-pin {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.close-sm-hi {
  width: 10px;
  height: 10px;
  background-position: -649px -535px; }

.logo.close-sm-hi {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 10px;
  height: 10px;
  background-position: -649px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.close-sm-hi {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.close-sm-w {
  width: 15px;
  height: 15px;
  background-position: -562px -396px; }

.logo.close-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -562px -396px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.close-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.close-w {
  width: 18px;
  height: 18px;
  background-position: -659px -326px; }

.logo.close-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 18px;
  background-position: -659px -326px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.close-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.closedcaptions-g {
  width: 22px;
  height: 16px;
  background-position: -429px -452px; }

.logo.closedcaptions-g {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 22px;
  height: 16px;
  background-position: -429px -452px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.closedcaptions-g {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.closedcaptions-w {
  width: 22px;
  height: 16px;
  background-position: -451px -452px; }

.logo.closedcaptions-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 22px;
  height: 16px;
  background-position: -451px -452px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.closedcaptions-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.club-share {
  width: 12px;
  height: 12px;
  background-position: -436px -605px; }

.logo.club-share {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 12px;
  background-position: -436px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.club-share {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.copy-link-w {
  width: 15px;
  height: 15px;
  background-position: -310px -605px; }

.logo.copy-link-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -310px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.copy-link-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.copylink-grey {
  width: 20px;
  height: 20px;
  background-position: -550px -247px; }

.logo.copylink-grey {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: -550px -247px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.copylink-grey {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.copylink-white {
  width: 20px;
  height: 20px;
  background-position: -544px -420px; }

.logo.copylink-white {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: -544px -420px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.copylink-white {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.corner-flag {
  width: 88px;
  height: 90px;
  background-position: -577px -200px; }

.logo.corner-flag {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 88px;
  height: 90px;
  background-position: -577px -200px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.corner-flag {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.disallowed-d {
  width: 14px;
  height: 14px;
  background-position: -382px -535px; }

.logo.disallowed-d {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -382px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.disallowed-d {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.disallowed-w {
  width: 14px;
  height: 14px;
  background-position: -424px -535px; }

.logo.disallowed-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -424px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.disallowed-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.download {
  width: 18px;
  height: 18px;
  background-position: -659px -308px; }

.logo.download {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 18px;
  background-position: -659px -308px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.download {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.download-d {
  width: 18px;
  height: 18px;
  background-position: -659px -344px; }

.logo.download-d {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 18px;
  background-position: -659px -344px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.download-d {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.download-w {
  width: 18px;
  height: 18px;
  background-position: -338px -487px; }

.logo.download-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 18px;
  background-position: -338px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.download-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.dropdown {
  width: 8px;
  height: 10px;
  background-position: -740px -418px; }

.logo.dropdown {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 8px;
  height: 10px;
  background-position: -740px -418px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.dropdown {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.dropdownpink {
  width: 8px;
  height: 11px;
  background-position: -740px -407px; }

.logo.dropdownpink {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 8px;
  height: 11px;
  background-position: -740px -407px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.dropdownpink {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.expand-w {
  width: 30px;
  height: 30px;
  background-position: -703px -347px; }

.logo.expand-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 30px;
  height: 30px;
  background-position: -703px -347px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.expand-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.fa-cup-n {
  width: 74px;
  height: 35px;
  background-position: -505px -565px; }

.logo.fa-cup-n {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 74px;
  height: 35px;
  background-position: -505px -565px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.fa-cup-n {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.fa-cup-sm {
  width: 53px;
  height: 25px;
  background-position: -380px -630px; }

.logo.fa-cup-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 53px;
  height: 25px;
  background-position: -380px -630px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.fa-cup-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.facilities {
  width: 53px;
  height: 53px;
  background-position: -158px -630px; }

.logo.facilities {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 53px;
  height: 53px;
  background-position: -158px -630px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.facilities {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.fantasy-arrow-down {
  width: 13px;
  height: 24px;
  background-position: -733px -347px; }

.logo.fantasy-arrow-down {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 13px;
  height: 24px;
  background-position: -733px -347px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.fantasy-arrow-down {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.fantasy-arrow-neutral {
  width: 13px;
  height: 24px;
  background-position: -734px -317px; }

.logo.fantasy-arrow-neutral {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 13px;
  height: 24px;
  background-position: -734px -317px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.fantasy-arrow-neutral {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.fantasy-arrow-up {
  width: 13px;
  height: 24px;
  background-position: -733px -377px; }

.logo.fantasy-arrow-up {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 13px;
  height: 24px;
  background-position: -733px -377px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.fantasy-arrow-up {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.fantasy-mob-sm-w {
  width: 14px;
  height: 20px;
  background-position: -733px -495px; }

.logo.fantasy-mob-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 20px;
  background-position: -733px -495px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.fantasy-mob-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.fantasy-sm-p {
  width: 14px;
  height: 20px;
  background-position: -560px -204px; }

.logo.fantasy-sm-p {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 20px;
  background-position: -560px -204px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.fantasy-sm-p {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.fantasy-sm-w {
  width: 12px;
  height: 12px;
  background-position: -424px -605px; }

.logo.fantasy-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 12px;
  background-position: -424px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.fantasy-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.filter-down {
  width: 15px;
  height: 16px;
  background-position: -250px -605px; }

.logo.filter-down {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 16px;
  background-position: -250px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.filter-down {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.filter-down-hi {
  width: 15px;
  height: 16px;
  background-position: -220px -605px; }

.logo.filter-down-hi {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 16px;
  background-position: -220px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.filter-down-hi {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.filter-sm-g {
  width: 18px;
  height: 18px;
  background-position: -659px -290px; }

.logo.filter-sm-g {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 18px;
  background-position: -659px -290px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.filter-sm-g {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.filter-sm-p {
  width: 18px;
  height: 18px;
  background-position: -302px -487px; }

.logo.filter-sm-p {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 18px;
  background-position: -302px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.filter-sm-p {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.filter-sm-w {
  width: 18px;
  height: 18px;
  background-position: -320px -487px; }

.logo.filter-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 18px;
  background-position: -320px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.filter-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.filter-up {
  width: 15px;
  height: 16px;
  background-position: -235px -605px; }

.logo.filter-up {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 16px;
  background-position: -235px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.filter-up {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.filter-up-hi {
  width: 15px;
  height: 16px;
  background-position: -562px -380px; }

.logo.filter-up-hi {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 16px;
  background-position: -562px -380px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.filter-up-hi {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.fixture-info {
  width: 6px;
  height: 16px;
  background-position: -741px -45px; }

.logo.fixture-info {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 6px;
  height: 16px;
  background-position: -741px -45px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.fixture-info {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.follow-w {
  width: 15px;
  height: 15px;
  background-position: -325px -605px; }

.logo.follow-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -325px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.follow-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.footer-shard-mobile {
  width: 180px;
  height: 40px;
  background-position: -350px -227px; }

.logo.footer-shard-mobile {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 180px;
  height: 40px;
  background-position: -350px -227px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.footer-shard-mobile {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.globe {
  width: 52px;
  height: 67px;
  background-position: 0px -630px; }

.logo.globe {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 52px;
  height: 67px;
  background-position: 0px -630px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.globe {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.goal-sec {
  width: 12px;
  height: 12px;
  background-position: -448px -605px; }

.logo.goal-sec {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 12px;
  background-position: -448px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.goal-sec {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.heart-b {
  width: 20px;
  height: 18px;
  background-position: -417px -468px; }

.logo.heart-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -417px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.heart-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.heart-black {
  width: 20px;
  height: 18px;
  background-position: -297px -468px; }

.logo.heart-black {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -297px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.heart-black {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.heart-g {
  width: 20px;
  height: 18px;
  background-position: -397px -468px; }

.logo.heart-g {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -397px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.heart-g {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.heart-outline-b {
  width: 17px;
  height: 16px;
  background-position: -639px -507px; }

.logo.heart-outline-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 17px;
  height: 16px;
  background-position: -639px -507px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.heart-outline-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.heart-outline-w {
  width: 17px;
  height: 16px;
  background-position: -622px -507px; }

.logo.heart-outline-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 17px;
  height: 16px;
  background-position: -622px -507px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.heart-outline-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.heart-w {
  width: 18px;
  height: 17px;
  background-position: -659px -362px; }

.logo.heart-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 17px;
  background-position: -659px -362px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.heart-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.hero-scroll {
  width: 40px;
  height: 40px;
  background-position: -703px -89px; }

.logo.hero-scroll {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 40px;
  height: 40px;
  background-position: -703px -89px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.hero-scroll {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.home-d {
  width: 20px;
  height: 20px;
  background-position: -244px -487px; }

.logo.home-d {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: -244px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.home-d {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.home-grown {
  width: 18px;
  height: 24px;
  background-position: -677px -447px; }

.logo.home-grown {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 24px;
  background-position: -677px -447px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.home-grown {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.home-w {
  width: 20px;
  height: 20px;
  background-position: -725px -654px; }

.logo.home-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: -725px -654px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.home-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.info {
  width: 14px;
  height: 14px;
  background-position: -438px -535px; }

.logo.info {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -438px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.info {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.info-w {
  width: 14px;
  height: 14px;
  background-position: -466px -535px; }

.logo.info-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -466px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.info-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.inspiring-search {
  width: 22px;
  height: 18px;
  background-position: -275px -468px; }

.logo.inspiring-search {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 22px;
  height: 18px;
  background-position: -275px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.inspiring-search {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.kicksLogo-lg {
  width: 350px;
  height: 110px;
  background-position: 0px -160px; }

.logo.kicksLogo-lg {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 350px;
  height: 110px;
  background-position: 0px -160px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.kicksLogo-lg {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.kicksLogo-n {
  width: 200px;
  height: 63px;
  background-position: -306px -270px; }

.logo.kicksLogo-n {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 200px;
  height: 63px;
  background-position: -306px -270px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.kicksLogo-n {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.kicksLogo-sm {
  width: 150px;
  height: 48px;
  background-position: -231px -420px; }

.logo.kicksLogo-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 150px;
  height: 48px;
  background-position: -231px -420px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.kicksLogo-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.lang-sm-w {
  width: 21px;
  height: 21px;
  background-position: -703px -612px; }

.logo.lang-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 21px;
  height: 21px;
  background-position: -703px -612px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.lang-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.list {
  width: 10px;
  height: 10px;
  background-position: -566px -356px; }

.logo.list {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 10px;
  height: 10px;
  background-position: -566px -356px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.list {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.list-w {
  width: 10px;
  height: 10px;
  background-position: -659px -535px; }

.logo.list-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 10px;
  height: 10px;
  background-position: -659px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.list-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.livestream {
  width: 30px;
  height: 25px;
  background-position: -703px -495px; }

.logo.livestream {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 30px;
  height: 25px;
  background-position: -703px -495px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.livestream {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.mail-b {
  width: 15px;
  height: 10px;
  background-position: -581px -535px; }

.logo.mail-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 10px;
  background-position: -581px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.mail-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.mail-w {
  width: 15px;
  height: 10px;
  background-position: -596px -535px; }

.logo.mail-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 10px;
  background-position: -596px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.mail-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.mailprimary {
  width: 24px;
  height: 16px;
  background-position: -381px -452px; }

.logo.mailprimary {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 24px;
  height: 16px;
  background-position: -381px -452px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.mailprimary {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.mailwhite {
  width: 24px;
  height: 16px;
  background-position: -405px -452px; }

.logo.mailwhite {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 24px;
  height: 16px;
  background-position: -405px -452px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.mailwhite {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.manager-award {
  width: 69px;
  height: 33px;
  background-position: -579px -565px; }

.logo.manager-award {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 69px;
  height: 33px;
  background-position: -579px -565px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.manager-award {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.mast-angle {
  width: 59px;
  height: 60px;
  background-position: -113px -565px; }

.logo.mast-angle {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 59px;
  height: 60px;
  background-position: -113px -565px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.mast-angle {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.menu-close {
  width: 17px;
  height: 17px;
  background-position: -560px -167px; }

.logo.menu-close {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 17px;
  height: 17px;
  background-position: -560px -167px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.menu-close {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.menu-more {
  width: 5px;
  height: 19px;
  background-position: -741px -61px; }

.logo.menu-more {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 5px;
  height: 19px;
  background-position: -741px -61px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.menu-more {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.mob-mast-angle {
  width: 28px;
  height: 50px;
  background-position: -703px -129px; }

.logo.mob-mast-angle {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 28px;
  height: 50px;
  background-position: -703px -129px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.mob-mast-angle {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.more-sm {
  width: 4px;
  height: 14px;
  background-position: -743px -103px; }

.logo.more-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 4px;
  height: 14px;
  background-position: -743px -103px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.more-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.more-smwhite {
  width: 4px;
  height: 14px;
  background-position: -743px -89px; }

.logo.more-smwhite {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 4px;
  height: 14px;
  background-position: -743px -89px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.more-smwhite {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.news-grey {
  width: 20px;
  height: 14px;
  background-position: -657px -491px; }

.logo.news-grey {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 14px;
  background-position: -657px -491px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.news-grey {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.news-hi-c {
  width: 20px;
  height: 14px;
  background-position: -537px -468px; }

.logo.news-hi-c {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 14px;
  background-position: -537px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.news-hi-c {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.news-hi-w {
  width: 20px;
  height: 14px;
  background-position: -374px -487px; }

.logo.news-hi-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 14px;
  background-position: -374px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.news-hi-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.news-teal {
  width: 18px;
  height: 14px;
  background-position: -348px -535px; }

.logo.news-teal {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 14px;
  background-position: -348px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.news-teal {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.og-d {
  width: 14px;
  height: 14px;
  background-position: -480px -535px; }

.logo.og-d {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -480px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.og-d {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.og-w {
  width: 14px;
  height: 14px;
  background-position: -410px -535px; }

.logo.og-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -410px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.og-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.opening-hours {
  width: 53px;
  height: 53px;
  background-position: -52px -630px; }

.logo.opening-hours {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 53px;
  height: 53px;
  background-position: -52px -630px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.opening-hours {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.parking {
  width: 22px;
  height: 22px;
  background-position: -703px -569px; }

.logo.parking {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 22px;
  height: 22px;
  background-position: -703px -569px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.parking {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.phone {
  width: 10px;
  height: 10px;
  background-position: -639px -535px; }

.logo.phone {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 10px;
  height: 10px;
  background-position: -639px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.phone {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.photo-grey {
  width: 20px;
  height: 14px;
  background-position: -557px -452px; }

.logo.photo-grey {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 14px;
  background-position: -557px -452px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.photo-grey {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.photo-hi {
  width: 20px;
  height: 14px;
  background-position: -497px -468px; }

.logo.photo-hi {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 14px;
  background-position: -497px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.photo-hi {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.photo-small-w {
  width: 14px;
  height: 10px;
  background-position: -625px -535px; }

.logo.photo-small-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 10px;
  background-position: -625px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.photo-small-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.photo-teal {
  width: 20px;
  height: 14px;
  background-position: -557px -468px; }

.logo.photo-teal {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 14px;
  background-position: -557px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.photo-teal {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.photo-w {
  width: 20px;
  height: 14px;
  background-position: -537px -452px; }

.logo.photo-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 14px;
  background-position: -537px -452px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.photo-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pin-b {
  width: 12px;
  height: 15px;
  background-position: -364px -605px; }

.logo.pin-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 15px;
  background-position: -364px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pin-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pin-post {
  width: 12px;
  height: 12px;
  background-position: -400px -605px; }

.logo.pin-post {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 12px;
  background-position: -400px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pin-post {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pin-post-w {
  width: 12px;
  height: 12px;
  background-position: -736px -270px; }

.logo.pin-post-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 12px;
  background-position: -736px -270px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pin-post-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pin-w {
  width: 12px;
  height: 15px;
  background-position: -564px -420px; }

.logo.pin-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 15px;
  background-position: -564px -420px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pin-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pitch {
  width: 227px;
  height: 131px;
  background-position: -350px 0px; }

.logo.pitch {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 227px;
  height: 131px;
  background-position: -350px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pitch {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pl-cup-normal {
  width: 80px;
  height: 40px;
  background-position: -486px -333px; }

.logo.pl-cup-normal {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 80px;
  height: 40px;
  background-position: -486px -333px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pl-cup-normal {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pl-cup-sm {
  width: 62px;
  height: 31px;
  background-position: -500px -380px; }

.logo.pl-cup-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 62px;
  height: 31px;
  background-position: -500px -380px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pl-cup-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pl-ic-long-normal {
  width: 170px;
  height: 32px;
  background-position: -330px -380px; }

.logo.pl-ic-long-normal {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 170px;
  height: 32px;
  background-position: -330px -380px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pl-ic-long-normal {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pl-ic-long-sm {
  width: 122px;
  height: 26px;
  background-position: -368px -507px; }

.logo.pl-ic-long-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 122px;
  height: 26px;
  background-position: -368px -507px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pl-ic-long-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pl-long-n {
  width: 170px;
  height: 28px;
  background-position: -198px -507px; }

.logo.pl-long-n {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 170px;
  height: 28px;
  background-position: -198px -507px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pl-long-n {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pl-long-sm {
  width: 122px;
  height: 20px;
  background-position: -122px -487px; }

.logo.pl-long-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 122px;
  height: 20px;
  background-position: -122px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pl-long-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pl-long-white {
  width: 163px;
  height: 32px;
  background-position: -381px -420px; }

.logo.pl-long-white {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 163px;
  height: 32px;
  background-position: -381px -420px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pl-long-white {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pl_is_play_button-lg {
  width: 150px;
  height: 150px;
  background-position: 0px -270px; }

.logo.pl_is_play_button-lg {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 150px;
  height: 150px;
  background-position: 0px -270px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pl_is_play_button-lg {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pl_is_play_button-md {
  width: 100px;
  height: 100px;
  background-position: -577px 0px; }

.logo.pl_is_play_button-md {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 100px;
  height: 100px;
  background-position: -577px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pl_is_play_button-md {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.pl_is_play_button-sm {
  width: 50px;
  height: 50px;
  background-position: -211px -630px; }

.logo.pl_is_play_button-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 50px;
  height: 50px;
  background-position: -211px -630px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.pl_is_play_button-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.play-hi {
  width: 10px;
  height: 11px;
  background-position: -566px -333px; }

.logo.play-hi {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 10px;
  height: 11px;
  background-position: -566px -333px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.play-hi {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.play-teal {
  width: 10px;
  height: 11px;
  background-position: -738px -229px; }

.logo.play-teal {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 10px;
  height: 11px;
  background-position: -738px -229px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.play-teal {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.play-w {
  width: 9px;
  height: 10px;
  background-position: -482px -605px; }

.logo.play-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 9px;
  height: 10px;
  background-position: -482px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.play-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.play-xl {
  width: 100px;
  height: 100px;
  background-position: -577px -100px; }

.logo.play-xl {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 100px;
  height: 100px;
  background-position: -577px -100px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.play-xl {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.player-award {
  width: 69px;
  height: 33px;
  background-position: -261px -630px; }

.logo.player-award {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 69px;
  height: 33px;
  background-position: -261px -630px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.player-award {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.player-icn {
  width: 60px;
  height: 62px;
  background-position: -506px -270px; }

.logo.player-icn {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 60px;
  height: 62px;
  background-position: -506px -270px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.player-icn {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.playlarge-w {
  width: 57px;
  height: 65px;
  background-position: 0px -565px; }

.logo.playlarge-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 57px;
  height: 65px;
  background-position: 0px -565px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.playlarge-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.playmed-w {
  width: 35px;
  height: 39px;
  background-position: -703px -179px; }

.logo.playmed-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 35px;
  height: 39px;
  background-position: -703px -179px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.playmed-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.plus-p {
  width: 10px;
  height: 10px;
  background-position: -565px -487px; }

.logo.plus-p {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 10px;
  height: 10px;
  background-position: -565px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.plus-p {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.plus-w {
  width: 10px;
  height: 10px;
  background-position: -738px -240px; }

.logo.plus-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 10px;
  height: 10px;
  background-position: -738px -240px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.plus-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.poll-w {
  width: 18px;
  height: 15px;
  background-position: -656px -507px; }

.logo.poll-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 15px;
  background-position: -656px -507px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.poll-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.premierleague-logo-header {
  width: 156px;
  height: 110px;
  background-position: -150px -270px; }

.logo.premierleague-logo-header {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 156px;
  height: 110px;
  background-position: -150px -270px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.premierleague-logo-header {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.price {
  width: 33px;
  height: 33px;
  background-position: -703px -250px; }

.logo.price {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 33px;
  height: 33px;
  background-position: -703px -250px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.price {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.primary-stars {
  width: 26px;
  height: 30px;
  background-position: -703px -429px; }

.logo.primary-stars {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 26px;
  height: 30px;
  background-position: -703px -429px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.primary-stars {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.promo-arrow {
  width: 9px;
  height: 6px;
  background-position: -734px -341px; }

.logo.promo-arrow {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 9px;
  height: 6px;
  background-position: -734px -341px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.promo-arrow {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.quote-large-blue {
  width: 65px;
  height: 40px;
  background-position: -440px -565px; }

.logo.quote-large-blue {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 65px;
  height: 40px;
  background-position: -440px -565px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.quote-large-blue {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.quote-large-green {
  width: 65px;
  height: 40px;
  background-position: -375px -565px; }

.logo.quote-large-green {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 65px;
  height: 40px;
  background-position: -375px -565px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.quote-large-green {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.quote-large-pink {
  width: 65px;
  height: 40px;
  background-position: -310px -565px; }

.logo.quote-large-pink {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 65px;
  height: 40px;
  background-position: -310px -565px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.quote-large-pink {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.quote-large-white {
  width: 65px;
  height: 40px;
  background-position: -245px -565px; }

.logo.quote-large-white {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 65px;
  height: 40px;
  background-position: -245px -565px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.quote-large-white {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.quote-largest-blue {
  width: 92px;
  height: 56px;
  background-position: -577px -379px; }

.logo.quote-largest-blue {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 92px;
  height: 56px;
  background-position: -577px -379px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.quote-largest-blue {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.quote-largest-green {
  width: 92px;
  height: 56px;
  background-position: -577px -435px; }

.logo.quote-largest-green {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 92px;
  height: 56px;
  background-position: -577px -435px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.quote-largest-green {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.quote-largest-pink {
  width: 92px;
  height: 56px;
  background-position: -106px -507px; }

.logo.quote-largest-pink {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 92px;
  height: 56px;
  background-position: -106px -507px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.quote-largest-pink {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.quote-tiny-purple {
  width: 20px;
  height: 13px;
  background-position: -435px -487px; }

.logo.quote-tiny-purple {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 13px;
  background-position: -435px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.quote-tiny-purple {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.quote-tiny-white {
  width: 20px;
  height: 13px;
  background-position: -455px -487px; }

.logo.quote-tiny-white {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 13px;
  background-position: -455px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.quote-tiny-white {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.remove-w-sm {
  width: 9px;
  height: 2px;
  background-position: -731px -175px; }

.logo.remove-w-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 9px;
  height: 2px;
  background-position: -731px -175px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.remove-w-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.reply-b {
  width: 20px;
  height: 18px;
  background-position: -437px -468px; }

.logo.reply-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -437px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.reply-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.reply-black {
  width: 20px;
  height: 18px;
  background-position: -357px -468px; }

.logo.reply-black {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -357px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.reply-black {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.reply-g {
  width: 20px;
  height: 18px;
  background-position: -377px -468px; }

.logo.reply-g {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -377px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.reply-g {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.reply-w {
  width: 18px;
  height: 18px;
  background-position: -356px -487px; }

.logo.reply-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 18px;
  background-position: -356px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.reply-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.reset-b {
  width: 22px;
  height: 18px;
  background-position: -231px -468px; }

.logo.reset-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 22px;
  height: 18px;
  background-position: -231px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.reset-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.reset-p {
  width: 22px;
  height: 18px;
  background-position: -253px -468px; }

.logo.reset-p {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 22px;
  height: 18px;
  background-position: -253px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.reset-p {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.reset-w {
  width: 15px;
  height: 11px;
  background-position: -550px -487px; }

.logo.reset-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 11px;
  background-position: -550px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.reset-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.retweet-b {
  width: 20px;
  height: 18px;
  background-position: -457px -468px; }

.logo.retweet-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -457px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.retweet-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.retweet-black {
  width: 20px;
  height: 18px;
  background-position: -317px -468px; }

.logo.retweet-black {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -317px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.retweet-black {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.retweet-g {
  width: 20px;
  height: 18px;
  background-position: -337px -468px; }

.logo.retweet-g {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -337px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.retweet-g {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.retweet-w {
  width: 20px;
  height: 14px;
  background-position: -394px -487px; }

.logo.retweet-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 14px;
  background-position: -394px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.retweet-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.school-bag {
  width: 82px;
  height: 89px;
  background-position: -577px -290px; }

.logo.school-bag {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 82px;
  height: 89px;
  background-position: -577px -290px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.school-bag {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.search-sm {
  width: 20px;
  height: 20px;
  background-position: -530px -247px; }

.logo.search-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: -530px -247px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.search-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.search-sm-g {
  width: 20px;
  height: 20px;
  background-position: -550px -227px; }

.logo.search-sm-g {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: -550px -227px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.search-sm-g {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.search-sm-hi {
  width: 20px;
  height: 20px;
  background-position: -530px -227px; }

.logo.search-sm-hi {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: -530px -227px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.search-sm-hi {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.search-sm-hi-h {
  width: 20px;
  height: 20px;
  background-position: -728px -547px; }

.logo.search-sm-hi-h {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: -728px -547px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.search-sm-hi-h {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.search-sm-p {
  width: 20px;
  height: 20px;
  background-position: -677px -537px; }

.logo.search-sm-p {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: -677px -537px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.search-sm-p {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.search-sm-w {
  width: 20px;
  height: 20px;
  background-position: -677px -517px; }

.logo.search-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: -677px -517px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.search-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.search-w {
  width: 21px;
  height: 21px;
  background-position: -725px -569px; }

.logo.search-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 21px;
  height: 21px;
  background-position: -725px -569px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.search-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.shard-thumbnail-blue {
  width: 180px;
  height: 40px;
  background-position: -150px -380px; }

.logo.shard-thumbnail-blue {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 180px;
  height: 40px;
  background-position: -150px -380px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.shard-thumbnail-blue {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.shard-thumbnail-fantasy {
  width: 132px;
  height: 24px;
  background-position: -198px -535px; }

.logo.shard-thumbnail-fantasy {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 132px;
  height: 24px;
  background-position: -198px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.shard-thumbnail-fantasy {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.shard-thumbnail-long {
  width: 26px;
  height: 149px;
  background-position: -677px 0px; }

.logo.shard-thumbnail-long {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 26px;
  height: 149px;
  background-position: -677px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.shard-thumbnail-long {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.shard-thumbnail-long-blue {
  width: 26px;
  height: 149px;
  background-position: -677px -149px; }

.logo.shard-thumbnail-long-blue {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 26px;
  height: 149px;
  background-position: -677px -149px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.shard-thumbnail-long-blue {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.shard-thumbnail-long-primary {
  width: 26px;
  height: 149px;
  background-position: -677px -298px; }

.logo.shard-thumbnail-long-primary {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 26px;
  height: 149px;
  background-position: -677px -298px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.shard-thumbnail-long-primary {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.shard-thumbnail-primary {
  width: 180px;
  height: 40px;
  background-position: -306px -333px; }

.logo.shard-thumbnail-primary {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 180px;
  height: 40px;
  background-position: -306px -333px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.shard-thumbnail-primary {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.shard-thumbnail-white {
  width: 132px;
  height: 24px;
  background-position: -490px -507px; }

.logo.shard-thumbnail-white {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 132px;
  height: 24px;
  background-position: -490px -507px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.shard-thumbnail-white {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.shard_fantasy {
  width: 109px;
  height: 67px;
  background-position: -122px -420px; }

.logo.shard_fantasy {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 109px;
  height: 67px;
  background-position: -122px -420px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.shard_fantasy {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.share-black {
  width: 12px;
  height: 16px;
  background-position: -665px -220px; }

.logo.share-black {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 16px;
  background-position: -665px -220px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.share-black {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.share-grey {
  width: 12px;
  height: 16px;
  background-position: -665px -236px; }

.logo.share-grey {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 16px;
  background-position: -665px -236px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.share-grey {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.share-hi {
  width: 12px;
  height: 16px;
  background-position: -665px -252px; }

.logo.share-hi {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 16px;
  background-position: -665px -252px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.share-hi {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.share-white {
  width: 12px;
  height: 16px;
  background-position: -665px -268px; }

.logo.share-white {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 16px;
  background-position: -665px -268px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.share-white {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.share-whitesmall {
  width: 9px;
  height: 12px;
  background-position: -566px -344px; }

.logo.share-whitesmall {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 9px;
  height: 12px;
  background-position: -566px -344px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.share-whitesmall {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.sharehismall {
  width: 6px;
  height: 8px;
  background-position: -695px -447px; }

.logo.sharehismall {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 6px;
  height: 8px;
  background-position: -695px -447px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sharehismall {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.sharewhitesmall {
  width: 6px;
  height: 8px;
  background-position: -741px -80px; }

.logo.sharewhitesmall {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 6px;
  height: 8px;
  background-position: -741px -80px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sharewhitesmall {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.shield-sm-w {
  width: 11px;
  height: 14px;
  background-position: -566px -300px; }

.logo.shield-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 11px;
  height: 14px;
  background-position: -566px -300px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.shield-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.shirt {
  width: 35px;
  height: 32px;
  background-position: -703px -218px; }

.logo.shirt {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 35px;
  height: 32px;
  background-position: -703px -218px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.shirt {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.slide-show-left {
  width: 21px;
  height: 36px;
  background-position: -703px -459px; }

.logo.slide-show-left {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 21px;
  height: 36px;
  background-position: -703px -459px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.slide-show-left {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.slide-show-right {
  width: 21px;
  height: 36px;
  background-position: -724px -459px; }

.logo.slide-show-right {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 21px;
  height: 36px;
  background-position: -724px -459px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.slide-show-right {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.small-arrow {
  width: 9px;
  height: 5px;
  background-position: -733px -371px; }

.logo.small-arrow {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 9px;
  height: 5px;
  background-position: -733px -371px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.small-arrow {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.small-stadium {
  width: 51px;
  height: 32px;
  background-position: -648px -565px; }

.logo.small-stadium {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 51px;
  height: 32px;
  background-position: -648px -565px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.small-stadium {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.sort {
  width: 19px;
  height: 19px;
  background-position: -283px -487px; }

.logo.sort {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 19px;
  height: 19px;
  background-position: -283px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sort {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.sort-up {
  width: 19px;
  height: 19px;
  background-position: -264px -487px; }

.logo.sort-up {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 19px;
  height: 19px;
  background-position: -264px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sort-up {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.special-offer {
  width: 45px;
  height: 45px;
  background-position: -703px 0px; }

.logo.special-offer {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 45px;
  height: 45px;
  background-position: -703px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.special-offer {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.stadium-b {
  width: 30px;
  height: 14px;
  background-position: -577px -491px; }

.logo.stadium-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 30px;
  height: 14px;
  background-position: -577px -491px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.stadium-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.stadiums {
  width: 30px;
  height: 14px;
  background-position: -703px -674px; }

.logo.stadiums {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 30px;
  height: 14px;
  background-position: -703px -674px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.stadiums {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.star {
  width: 12px;
  height: 12px;
  background-position: -388px -605px; }

.logo.star {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 12px;
  background-position: -388px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.star {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.state-pin {
  width: 10px;
  height: 11px;
  background-position: -738px -218px; }

.logo.state-pin {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 10px;
  height: 11px;
  background-position: -738px -218px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.state-pin {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.stats-ball {
  width: 31px;
  height: 30px;
  background-position: -703px -317px; }

.logo.stats-ball {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 31px;
  height: 30px;
  background-position: -703px -317px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.stats-ball {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.stats-boot {
  width: 50px;
  height: 28px;
  background-position: -330px -630px; }

.logo.stats-boot {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 50px;
  height: 28px;
  background-position: -330px -630px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.stats-boot {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.stats-kicks {
  width: 19px;
  height: 26px;
  background-position: -725px -520px; }

.logo.stats-kicks {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 19px;
  height: 26px;
  background-position: -725px -520px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.stats-kicks {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.stats-mob-sm-w {
  width: 18px;
  height: 15px;
  background-position: -330px -535px; }

.logo.stats-mob-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 15px;
  background-position: -330px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.stats-mob-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.stats-sm-w {
  width: 12px;
  height: 12px;
  background-position: -460px -605px; }

.logo.stats-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 12px;
  background-position: -460px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.stats-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.stats-speed {
  width: 37px;
  height: 22px;
  background-position: -703px -407px; }

.logo.stats-speed {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 37px;
  height: 22px;
  background-position: -703px -407px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.stats-speed {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.stop-watch-n {
  width: 56px;
  height: 65px;
  background-position: -57px -565px; }

.logo.stop-watch-n {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 56px;
  height: 65px;
  background-position: -57px -565px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.stop-watch-n {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.stop-watch-small {
  width: 38px;
  height: 44px;
  background-position: -703px -45px; }

.logo.stop-watch-small {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 38px;
  height: 44px;
  background-position: -703px -45px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.stop-watch-small {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.sub-d {
  width: 14px;
  height: 14px;
  background-position: -494px -535px; }

.logo.sub-d {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -494px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sub-d {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.sub-n {
  width: 16px;
  height: 19px;
  background-position: -560px -131px; }

.logo.sub-n {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 16px;
  height: 19px;
  background-position: -560px -131px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sub-n {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.sub-off {
  width: 14px;
  height: 14px;
  background-position: -396px -535px; }

.logo.sub-off {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -396px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sub-off {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.sub-on {
  width: 14px;
  height: 14px;
  background-position: -452px -535px; }

.logo.sub-on {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -452px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sub-on {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.sub-w {
  width: 15px;
  height: 14px;
  background-position: -733px -674px; }

.logo.sub-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 14px;
  background-position: -733px -674px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sub-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.table-hi {
  width: 16px;
  height: 14px;
  background-position: -731px -303px; }

.logo.table-hi {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 16px;
  height: 14px;
  background-position: -731px -303px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.table-hi {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.table-hi-w {
  width: 16px;
  height: 14px;
  background-position: -366px -535px; }

.logo.table-hi-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 16px;
  height: 14px;
  background-position: -366px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.table-hi-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.tag-close {
  width: 10px;
  height: 10px;
  background-position: -472px -605px; }

.logo.tag-close {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 10px;
  height: 10px;
  background-position: -472px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.tag-close {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.tag-heuer-n {
  width: 25px;
  height: 22px;
  background-position: -703px -547px; }

.logo.tag-heuer-n {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 25px;
  height: 22px;
  background-position: -703px -547px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.tag-heuer-n {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.tag-heuer-sm {
  width: 15px;
  height: 13px;
  background-position: -508px -535px; }

.logo.tag-heuer-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 13px;
  background-position: -508px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.tag-heuer-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.tick-pink {
  width: 14px;
  height: 11px;
  background-position: -567px -535px; }

.logo.tick-pink {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 11px;
  background-position: -567px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.tick-pink {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.tick-w {
  width: 14px;
  height: 10px;
  background-position: -611px -535px; }

.logo.tick-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 10px;
  background-position: -611px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.tick-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.ticket-lrg {
  width: 122px;
  height: 87px;
  background-position: 0px -420px; }

.logo.ticket-lrg {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 122px;
  height: 87px;
  background-position: 0px -420px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.ticket-lrg {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.time-d {
  width: 15px;
  height: 11px;
  background-position: -538px -535px; }

.logo.time-d {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 11px;
  background-position: -538px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.time-d {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.time-full-d {
  width: 11px;
  height: 15px;
  background-position: -566px -270px; }

.logo.time-full-d {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 11px;
  height: 15px;
  background-position: -566px -270px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.time-full-d {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.time-full-sm-w {
  width: 11px;
  height: 15px;
  background-position: -566px -285px; }

.logo.time-full-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 11px;
  height: 15px;
  background-position: -566px -285px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.time-full-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.time-full-w {
  width: 14px;
  height: 20px;
  background-position: -560px -184px; }

.logo.time-full-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 20px;
  background-position: -560px -184px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.time-full-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.time-half-d {
  width: 12px;
  height: 15px;
  background-position: -352px -605px; }

.logo.time-half-d {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 15px;
  background-position: -352px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.time-half-d {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.time-half-sm-w {
  width: 12px;
  height: 15px;
  background-position: -340px -605px; }

.logo.time-half-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 15px;
  background-position: -340px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.time-half-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.time-half-w {
  width: 16px;
  height: 20px;
  background-position: -731px -283px; }

.logo.time-half-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 16px;
  height: 20px;
  background-position: -731px -283px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.time-half-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.time-sm-w {
  width: 15px;
  height: 11px;
  background-position: -562px -440px; }

.logo.time-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 11px;
  background-position: -562px -440px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.time-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.time-w {
  width: 20px;
  height: 15px;
  background-position: -517px -452px; }

.logo.time-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 15px;
  background-position: -517px -452px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.time-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.tipl-logo-n {
  width: 350px;
  height: 160px;
  background-position: 0px 0px; }

.logo.tipl-logo-n {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 350px;
  height: 160px;
  background-position: 0px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.tipl-logo-n {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.tipl-logo-small {
  width: 210px;
  height: 96px;
  background-position: -350px -131px; }

.logo.tipl-logo-small {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 210px;
  height: 96px;
  background-position: -350px -131px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.tipl-logo-small {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.topps_logo {
  width: 106px;
  height: 58px;
  background-position: 0px -507px; }

.logo.topps_logo {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 106px;
  height: 58px;
  background-position: 0px -507px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.topps_logo {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.topps_logo_mob {
  width: 73px;
  height: 40px;
  background-position: -172px -565px; }

.logo.topps_logo_mob {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 73px;
  height: 40px;
  background-position: -172px -565px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.topps_logo_mob {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.tour {
  width: 19px;
  height: 11px;
  background-position: -493px -487px; }

.logo.tour {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 19px;
  height: 11px;
  background-position: -493px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.tour {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.tour-w {
  width: 19px;
  height: 11px;
  background-position: -512px -487px; }

.logo.tour-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 19px;
  height: 11px;
  background-position: -512px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.tour-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.transport {
  width: 17px;
  height: 21px;
  background-position: -731px -154px; }

.logo.transport {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 17px;
  height: 21px;
  background-position: -731px -154px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.transport {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.trophy-sm {
  width: 11px;
  height: 20px;
  background-position: -665px -200px; }

.logo.trophy-sm {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 11px;
  height: 20px;
  background-position: -665px -200px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.trophy-sm {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.trophy-sm-b {
  width: 11px;
  height: 20px;
  background-position: -736px -250px; }

.logo.trophy-sm-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 11px;
  height: 20px;
  background-position: -736px -250px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.trophy-sm-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.tv-d {
  width: 16px;
  height: 16px;
  background-position: -204px -605px; }

.logo.tv-d {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 16px;
  height: 16px;
  background-position: -204px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.tv-d {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.tv-w {
  width: 16px;
  height: 16px;
  background-position: -188px -605px; }

.logo.tv-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 16px;
  height: 16px;
  background-position: -188px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.tv-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.update {
  width: 11px;
  height: 11px;
  background-position: -566px -314px; }

.logo.update {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 11px;
  height: 11px;
  background-position: -566px -314px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.update {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.useful-links {
  width: 53px;
  height: 53px;
  background-position: -105px -630px; }

.logo.useful-links {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 53px;
  height: 53px;
  background-position: -105px -630px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.useful-links {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.user-b {
  width: 18px;
  height: 23px;
  background-position: -677px -471px; }

.logo.user-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 23px;
  background-position: -677px -471px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.user-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.user-sm-b {
  width: 9px;
  height: 11px;
  background-position: -442px -630px; }

.logo.user-sm-b {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 9px;
  height: 11px;
  background-position: -442px -630px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.user-sm-b {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.user-sm-w {
  width: 9px;
  height: 11px;
  background-position: -433px -630px; }

.logo.user-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 9px;
  height: 11px;
  background-position: -433px -630px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.user-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.user-w {
  width: 18px;
  height: 23px;
  background-position: -677px -494px; }

.logo.user-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 23px;
  background-position: -677px -494px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.user-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.video-grey {
  width: 20px;
  height: 14px;
  background-position: -517px -468px; }

.logo.video-grey {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 14px;
  background-position: -517px -468px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.video-grey {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.video-hi {
  width: 20px;
  height: 14px;
  background-position: -637px -491px; }

.logo.video-hi {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 20px;
  height: 14px;
  background-position: -637px -491px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.video-hi {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.video-sm-h {
  width: 12px;
  height: 12px;
  background-position: -412px -605px; }

.logo.video-sm-h {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 12px;
  height: 12px;
  background-position: -412px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.video-sm-h {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.video-sm-teal {
  width: 18px;
  height: 12px;
  background-position: -544px -440px; }

.logo.video-sm-teal {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 12px;
  background-position: -544px -440px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.video-sm-teal {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.video-sm-w {
  width: 18px;
  height: 12px;
  background-position: -475px -487px; }

.logo.video-sm-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 18px;
  height: 12px;
  background-position: -475px -487px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.video-sm-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.warning-w {
  width: 15px;
  height: 15px;
  background-position: -295px -605px; }

.logo.warning-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -295px -605px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.warning-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.website-link {
  width: 14px;
  height: 11px;
  background-position: -553px -535px; }

.logo.website-link {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 14px;
  height: 11px;
  background-position: -553px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.website-link {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.whistle-w {
  width: 15px;
  height: 13px;
  background-position: -523px -535px; }

.logo.whistle-w {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 15px;
  height: 13px;
  background-position: -523px -535px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.whistle-w {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.white-stadium {
  width: 30px;
  height: 14px;
  background-position: -607px -491px; }

.logo.white-stadium {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 30px;
  height: 14px;
  background-position: -607px -491px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.white-stadium {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.year-in-numbers-efl-icn {
  width: 17px;
  height: 25px;
  background-position: -731px -129px; }

.logo.year-in-numbers-efl-icn {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 17px;
  height: 25px;
  background-position: -731px -129px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.year-in-numbers-efl-icn {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.year-in-numbers-nl-icn {
  width: 19px;
  height: 29px;
  background-position: -729px -429px; }

.logo.year-in-numbers-nl-icn {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 19px;
  height: 29px;
  background-position: -729px -429px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.year-in-numbers-nl-icn {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.icn.year-in-numbers-prem-icn {
  width: 22px;
  height: 27px;
  background-position: -703px -520px; }

.logo.year-in-numbers-prem-icn {
  background: url("../pulselive/i/sprites/global-sprite.png") no-repeat;
  width: 22px;
  height: 27px;
  background-position: -703px -520px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.year-in-numbers-prem-icn {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }

.badge-20 {
  background-image: url("../pulselive/i/sprites/badges-20-sprite.png");
  background-repeat: no-repeat;
  width: 20px;
  height: 20px;
  display: block;
  background-position: -140px -140px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .badge-20 {
      background-image: url("../pulselive/i/sprites/badges-20-sprite@x2.png");
      background-size: 480px 460px; } }
  .badge-20.ACM {
    background-position: -20px 0px; }
  .badge-20.ADL {
    background-position: -320px -240px; }
  .badge-20.AEK {
    background-position: 0px -20px; }
  .badge-20.AFW {
    background-position: -20px -20px; }
  .badge-20.AJA {
    background-position: -40px 0px; }
  .badge-20.APO {
    background-position: -40px -20px; }
  .badge-20.ARS {
    background-position: 0px -40px; }
  .badge-20.ASI {
    background-position: -20px -40px; }
  .badge-20.AST {
    background-position: -40px -40px; }
  .badge-20.ASY {
    background-position: -60px 0px; }
  .badge-20.ATA {
    background-position: -60px -20px; }
  .badge-20.ATH {
    background-position: -60px -40px; }
  .badge-20.ATM {
    background-position: 0px -60px; }
  .badge-20.AUS {
    background-position: -20px -60px; }
  .badge-20.AVL {
    background-position: -40px -60px; }
  .badge-20.AZ {
    background-position: -60px -60px; }
  .badge-20.B04 {
    background-position: -80px 0px; }
  .badge-20.BAL {
    background-position: -80px -20px; }
  .badge-20.BAR {
    background-position: -80px -40px; }
  .badge-20.BAT {
    background-position: -80px -60px; }
  .badge-20.BBV {
    background-position: 0px -80px; }
  .badge-20.BCN {
    background-position: -20px -80px; }
  .badge-20.BEF {
    background-position: -40px -80px; }
  .badge-20.BEL {
    background-position: -60px -80px; }
  .badge-20.BHA {
    background-position: -80px -80px; }
  .badge-20.BIR {
    background-position: -100px 0px; }
  .badge-20.BJK {
    background-position: -100px -20px; }
  .badge-20.BLB {
    background-position: -100px -40px; }
  .badge-20.BLP {
    background-position: -100px -60px; }
  .badge-20.BMG {
    background-position: -100px -80px; }
  .badge-20.BOL {
    background-position: 0px -100px; }
  .badge-20.BOR {
    background-position: -20px -100px; }
  .badge-20.BOU {
    background-position: -40px -100px; }
  .badge-20.BRA {
    background-position: -60px -100px; }
  .badge-20.BRE {
    background-position: -80px -100px; }
  .badge-20.BRG {
    background-position: -100px -100px; }
  .badge-20.BRI {
    background-position: -120px 0px; }
  .badge-20.BRR {
    background-position: -120px -20px; }
  .badge-20.BRU {
    background-position: -120px -40px; }
  .badge-20.BRW {
    background-position: -120px -60px; }
  .badge-20.BRY {
    background-position: -120px -80px; }
  .badge-20.BSC {
    background-position: -120px -100px; }
  .badge-20.BSL {
    background-position: 0px -120px; }
  .badge-20.BUR {
    background-position: -20px -120px; }
  .badge-20.BVB {
    background-position: -40px -120px; }
  .badge-20.CAR {
    background-position: -60px -120px; }
  .badge-20.CEL {
    background-position: -80px -120px; }
  .badge-20.CHA {
    background-position: -100px -120px; }
  .badge-20.CHE {
    background-position: -120px -120px; }
  .badge-20.CHF {
    background-position: -140px 0px; }
  .badge-20.CHT {
    background-position: -140px -20px; }
  .badge-20.CLV {
    background-position: -140px -40px; }
  .badge-20.CMU {
    background-position: -140px -60px; }
  .badge-20.COU {
    background-position: -140px -80px; }
  .badge-20.COV {
    background-position: -140px -100px; }
  .badge-20.CPH {
    background-position: -140px -120px; }
  .badge-20.CRE {
    background-position: 0px -140px; }
  .badge-20.CRW {
    background-position: -20px -140px; }
  .badge-20.CRY {
    background-position: -40px -140px; }
  .badge-20.CSK {
    background-position: -60px -140px; }
  .badge-20.CUT {
    background-position: -80px -140px; }
  .badge-20.CZV {
    background-position: -100px -140px; }
  .badge-20.DAG {
    background-position: -120px -140px; }
  .badge-20.DER {
    background-position: -160px 0px; }
  .badge-20.DER-new {
    background-position: -160px -20px; }
  .badge-20.DMK {
    background-position: -160px -40px; }
  .badge-20.DND {
    background-position: -160px -60px; }
  .badge-20.DNR {
    background-position: -160px -80px; }
  .badge-20.DON {
    background-position: -160px -100px; }
  .badge-20.DYK {
    background-position: -160px -120px; }
  .badge-20.DZG {
    background-position: -160px -140px; }
  .badge-20.EAS {
    background-position: 0px -160px; }
  .badge-20.EVE {
    background-position: -20px -160px; }
  .badge-20.EXE {
    background-position: -40px -160px; }
  .badge-20.FCA {
    background-position: -60px -160px; }
  .badge-20.FCB {
    background-position: -80px -160px; }
  .badge-20.FCL {
    background-position: -100px -160px; }
  .badge-20.FCSM {
    background-position: -120px -160px; }
  .badge-20.FEN {
    background-position: -140px -160px; }
  .badge-20.FEY {
    background-position: -160px -160px; }
  .badge-20.FGR {
    background-position: -180px 0px; }
  .badge-20.FIO {
    background-position: -180px -20px; }
  .badge-20.FKQ {
    background-position: -180px -40px; }
  .badge-20.FKV {
    background-position: -180px -60px; }
  .badge-20.FLE {
    background-position: -180px -80px; }
  .badge-20.FUL {
    background-position: -180px -100px; }
  .badge-20.GAL {
    background-position: -180px -120px; }
  .badge-20.GIL {
    background-position: -180px -140px; }
  .badge-20.GRI {
    background-position: -180px -160px; }
  .badge-20.GRO {
    background-position: 0px -180px; }
  .badge-20.HAL {
    background-position: -20px -180px; }
  .badge-20.HBS {
    background-position: -40px -180px; }
  .badge-20.HOF {
    background-position: -60px -180px; }
  .badge-20.HUD {
    background-position: -80px -180px; }
  .badge-20.HUL {
    background-position: -100px -180px; }
  .badge-20.IBA {
    background-position: -120px -180px; }
  .badge-20.IPS {
    background-position: -140px -180px; }
  .badge-20.JUV {
    background-position: -160px -180px; }
  .badge-20.KAA {
    background-position: -180px -180px; }
  .badge-20.KOE {
    background-position: -200px 0px; }
  .badge-20.KRA {
    background-position: -200px -20px; }
  .badge-20.KYS {
    background-position: -200px -40px; }
  .badge-20.LAZ {
    background-position: -200px -60px; }
  .badge-20.LEE {
    background-position: -200px -80px; }
  .badge-20.LEG {
    background-position: -200px -100px; }
  .badge-20.LEI {
    background-position: -200px -120px; }
  .badge-20.LEP {
    background-position: -200px -140px; }
  .badge-20.LIB {
    background-position: -200px -160px; }
  .badge-20.LIN {
    background-position: -200px -180px; }
  .badge-20.LIV {
    background-position: 0px -200px; }
  .badge-20.LKM {
    background-position: -20px -200px; }
  .badge-20.LNO {
    background-position: -40px -200px; }
  .badge-20.LOK {
    background-position: -60px -200px; }
  .badge-20.LUD {
    background-position: -80px -200px; }
  .badge-20.LUT {
    background-position: -100px -200px; }
  .badge-20.LYN {
    background-position: -120px -200px; }
  .badge-20.M05 {
    background-position: -140px -200px; }
  .badge-20.MAN {
    background-position: -160px -200px; }
  .badge-20.MAR {
    background-position: -180px -200px; }
  .badge-20.MCH {
    background-position: -200px -200px; }
  .badge-20.MCI {
    background-position: -220px 0px; }
  .badge-20.MCO {
    background-position: -220px -20px; }
  .badge-20.MFF {
    background-position: -220px -40px; }
  .badge-20.MID {
    background-position: -220px -60px; }
  .badge-20.MIL {
    background-position: -220px -80px; }
  .badge-20.MKD {
    background-position: -220px -100px; }
  .badge-20.MOL {
    background-position: -220px -120px; }
  .badge-20.MOR {
    background-position: -220px -140px; }
  .badge-20.MTA {
    background-position: -220px -160px; }
  .badge-20.MUN {
    background-position: -220px -180px; }
  .badge-20.NAP {
    background-position: -220px -200px; }
  .badge-20.NEW {
    background-position: 0px -220px; }
  .badge-20.NFO {
    background-position: -20px -220px; }
  .badge-20.NHT {
    background-position: -40px -220px; }
  .badge-20.NIC {
    background-position: -60px -220px; }
  .badge-20.NKM {
    background-position: -80px -220px; }
  .badge-20.NOR {
    background-position: -100px -220px; }
  .badge-20.NOT {
    background-position: -120px -220px; }
  .badge-20.NWP {
    background-position: -140px -220px; }
  .badge-20.OFK {
    background-position: -160px -220px; }
  .badge-20.OLD {
    background-position: -180px -220px; }
  .badge-20.OLY {
    background-position: -200px -220px; }
  .badge-20.OSM {
    background-position: -220px -220px; }
  .badge-20.OXF {
    background-position: -240px 0px; }
  .badge-20.PAO {
    background-position: -240px -20px; }
  .badge-20.PBG {
    background-position: -240px -40px; }
  .badge-20.PET {
    background-position: -240px -60px; }
  .badge-20.PLY {
    background-position: -240px -80px; }
  .badge-20.PLZ {
    background-position: -240px -100px; }
  .badge-20.PNE {
    background-position: -240px -120px; }
  .badge-20.POR {
    background-position: -240px -140px; }
  .badge-20.PSG {
    background-position: -240px -160px; }
  .badge-20.PSV {
    background-position: -240px -180px; }
  .badge-20.PTO {
    background-position: -240px -200px; }
  .badge-20.PTV {
    background-position: -240px -220px; }
  .badge-20.QAB {
    background-position: 0px -240px; }
  .badge-20.QPR {
    background-position: -20px -240px; }
  .badge-20.RAP {
    background-position: -40px -240px; }
  .badge-20.RBL {
    background-position: -60px -240px; }
  .badge-20.RDG {
    background-position: -80px -240px; }
  .badge-20.RMA {
    background-position: -100px -240px; }
  .badge-20.RMD {
    background-position: -120px -240px; }
  .badge-20.ROC {
    background-position: -140px -240px; }
  .badge-20.RSB {
    background-position: -160px -240px; }
  .badge-20.RSO {
    background-position: -180px -240px; }
  .badge-20.RSV {
    background-position: -200px -240px; }
  .badge-20.RTH {
    background-position: -220px -240px; }
  .badge-20.RUB {
    background-position: -240px -240px; }
  .badge-20.S04 {
    background-position: -260px 0px; }
  .badge-20.SBR {
    background-position: -260px -20px; }
  .badge-20.SCL {
    background-position: -260px -40px; }
  .badge-20.SCU {
    background-position: -260px -60px; }
  .badge-20.SDK {
    background-position: -260px -80px; }
  .badge-20.SEV {
    background-position: -260px -100px; }
  .badge-20.SHR {
    background-position: -260px -120px; }
  .badge-20.SHU {
    background-position: -260px -140px; }
  .badge-20.SHW {
    background-position: -260px -160px; }
  .badge-20.SIO {
    background-position: -260px -180px; }
  .badge-20.SKE {
    background-position: -260px -200px; }
  .badge-20.SOU {
    background-position: -260px -220px; }
  .badge-20.SPP {
    background-position: -260px -240px; }
  .badge-20.SPR {
    background-position: 0px -260px; }
  .badge-20.SSL {
    background-position: -20px -260px; }
  .badge-20.STE {
    background-position: -40px -260px; }
  .badge-20.STK {
    background-position: -60px -260px; }
  .badge-20.STO {
    background-position: -80px -260px; }
  .badge-20.STU {
    background-position: -100px -260px; }
  .badge-20.STV {
    background-position: -120px -260px; }
  .badge-20.SUN {
    background-position: -140px -260px; }
  .badge-20.SUT {
    background-position: -160px -260px; }
  .badge-20.SWA {
    background-position: -180px -260px; }
  .badge-20.SWI {
    background-position: -200px -260px; }
  .badge-20.TOT {
    background-position: -240px -440px; }
  .badge-20.TOTALT {
    background-position: -260px -440px; }
  .badge-20.VAL {
    background-position: -280px -440px; }
  .badge-20.VIL {
    background-position: -300px -440px; }
  .badge-20.VIT {
    background-position: -320px -440px; }
  .badge-20.VTG {
    background-position: -340px -440px; }
  .badge-20.WAT {
    background-position: -360px -440px; }
  .badge-20.WBA {
    background-position: -380px -440px; }
  .badge-20.WHU {
    background-position: -400px -440px; }
  .badge-20.WIG {
    background-position: -420px -440px; }
  .badge-20.WIM {
    background-position: -440px -440px; }
  .badge-20.WLS {
    background-position: -460px 0px; }
  .badge-20.WOB {
    background-position: -460px -20px; }
  .badge-20.WOL {
    background-position: -460px -40px; }
  .badge-20.WYC {
    background-position: -460px -60px; }
  .badge-20.YEO {
    background-position: -460px -80px; }
  .badge-20.ZLN {
    background-position: -460px -100px; }
  .badge-20.ZNT {
    background-position: -460px -120px; }
  .badge-20.ZRL {
    background-position: -460px -140px; }
  .badge-20.default {
    background-position: -140px -140px; }
  .badge-20.t100 {
    background-position: -220px -260px; }
  .badge-20.t1003 {
    background-position: -240px -260px; }
  .badge-20.t1007 {
    background-position: -260px -260px; }
  .badge-20.t10248 {
    background-position: -280px 0px; }
  .badge-20.t10575 {
    background-position: -280px -20px; }
  .badge-20.t10657 {
    background-position: -280px -40px; }
  .badge-20.t107 {
    background-position: -280px -60px; }
  .badge-20.t109 {
    background-position: -280px -80px; }
  .badge-20.t1098 {
    background-position: -280px -100px; }
  .badge-20.t1099 {
    background-position: -280px -120px; }
  .badge-20.t11206 {
    background-position: -280px -140px; }
  .badge-20.t11371 {
    background-position: -280px -160px; }
  .badge-20.t1169 {
    background-position: -280px -180px; }
  .badge-20.t1170 {
    background-position: -280px -200px; }
  .badge-20.t1185 {
    background-position: -280px -220px; }
  .badge-20.t1189 {
    background-position: -280px -240px; }
  .badge-20.t11936 {
    background-position: -280px -260px; }
  .badge-20.t11937 {
    background-position: 0px -280px; }
  .badge-20.t121 {
    background-position: -20px -280px; }
  .badge-20.t125 {
    background-position: -40px -280px; }
  .badge-20.t127 {
    background-position: -60px -280px; }
  .badge-20.t129 {
    background-position: -80px -280px; }
  .badge-20.t12935 {
    background-position: -100px -280px; }
  .badge-20.t12938 {
    background-position: -120px -280px; }
  .badge-20.t12939 {
    background-position: -140px -280px; }
  .badge-20.t12940 {
    background-position: -160px -280px; }
  .badge-20.t12944 {
    background-position: -180px -280px; }
  .badge-20.t12948 {
    background-position: -200px -280px; }
  .badge-20.t12968 {
    background-position: -220px -280px; }
  .badge-20.t12969 {
    background-position: -240px -280px; }
  .badge-20.t12970 {
    background-position: -260px -280px; }
  .badge-20.t12971 {
    background-position: -280px -280px; }
  .badge-20.t131 {
    background-position: -300px 0px; }
  .badge-20.t13187 {
    background-position: -300px -20px; }
  .badge-20.t135 {
    background-position: -300px -40px; }
  .badge-20.t136 {
    background-position: -300px -60px; }
  .badge-20.t138 {
    background-position: -300px -80px; }
  .badge-20.t1395 {
    background-position: -300px -100px; }
  .badge-20.t140 {
    background-position: -300px -120px; }
  .badge-20.t1400 {
    background-position: -300px -140px; }
  .badge-20.t1405 {
    background-position: -300px -160px; }
  .badge-20.t1409 {
    background-position: -300px -180px; }
  .badge-20.t1414 {
    background-position: -300px -200px; }
  .badge-20.t142 {
    background-position: -300px -220px; }
  .badge-20.t143 {
    background-position: -300px -240px; }
  .badge-20.t1446 {
    background-position: -300px -260px; }
  .badge-20.t1457 {
    background-position: -300px -280px; }
  .badge-20.t146 {
    background-position: 0px -300px; }
  .badge-20.t1462 {
    background-position: -20px -300px; }
  .badge-20.t147 {
    background-position: -40px -300px; }
  .badge-20.t1475 {
    background-position: -60px -300px; }
  .badge-20.t148 {
    background-position: -80px -300px; }
  .badge-20.t1484 {
    background-position: -100px -300px; }
  .badge-20.t1487 {
    background-position: -120px -300px; }
  .badge-20.t1492 {
    background-position: -140px -300px; }
  .badge-20.t1493 {
    background-position: -160px -300px; }
  .badge-20.t1494 {
    background-position: -180px -300px; }
  .badge-20.t150 {
    background-position: -200px -300px; }
  .badge-20.t1508 {
    background-position: -220px -300px; }
  .badge-20.t1510 {
    background-position: -240px -300px; }
  .badge-20.t152 {
    background-position: -260px -300px; }
  .badge-20.t1520 {
    background-position: -280px -300px; }
  .badge-20.t1526 {
    background-position: -300px -300px; }
  .badge-20.t1580 {
    background-position: -320px 0px; }
  .badge-20.t1586 {
    background-position: -320px -20px; }
  .badge-20.t1587 {
    background-position: -320px -40px; }
  .badge-20.t159 {
    background-position: -320px -60px; }
  .badge-20.t160 {
    background-position: -320px -80px; }
  .badge-20.t1615 {
    background-position: -320px -100px; }
  .badge-20.t162 {
    background-position: -320px -120px; }
  .badge-20.t1633 {
    background-position: -320px -140px; }
  .badge-20.t169 {
    background-position: -320px -160px; }
  .badge-20.t171 {
    background-position: -320px -180px; }
  .badge-20.t1712 {
    background-position: -320px -200px; }
  .badge-20.t1716 {
    background-position: -320px -220px; }
  .badge-20.t1747 {
    background-position: 0px 0px; }
  .badge-20.t1748 {
    background-position: -320px -260px; }
  .badge-20.t176 {
    background-position: -320px -280px; }
  .badge-20.t177 {
    background-position: -320px -300px; }
  .badge-20.t1792 {
    background-position: 0px -320px; }
  .badge-20.t182 {
    background-position: -20px -320px; }
  .badge-20.t185 {
    background-position: -40px -320px; }
  .badge-20.t1902 {
    background-position: -60px -320px; }
  .badge-20.t194 {
    background-position: -80px -320px; }
  .badge-20.t1943 {
    background-position: -100px -320px; }
  .badge-20.t195 {
    background-position: -120px -320px; }
  .badge-20.t1951 {
    background-position: -140px -320px; }
  .badge-20.t1963 {
    background-position: -160px -320px; }
  .badge-20.t197 {
    background-position: -180px -320px; }
  .badge-20.t1981 {
    background-position: -200px -320px; }
  .badge-20.t2003 {
    background-position: -220px -320px; }
  .badge-20.t2006 {
    background-position: -240px -320px; }
  .badge-20.t203 {
    background-position: -260px -320px; }
  .badge-20.t2039 {
    background-position: -280px -320px; }
  .badge-20.t2047 {
    background-position: -300px -320px; }
  .badge-20.t205 {
    background-position: -320px -320px; }
  .badge-20.t2050 {
    background-position: -340px 0px; }
  .badge-20.t2051 {
    background-position: -340px -20px; }
  .badge-20.t2052 {
    background-position: -340px -40px; }
  .badge-20.t2057 {
    background-position: -340px -60px; }
  .badge-20.t2058 {
    background-position: -340px -80px; }
  .badge-20.t2059 {
    background-position: -340px -100px; }
  .badge-20.t206 {
    background-position: -340px -120px; }
  .badge-20.t2060 {
    background-position: -340px -140px; }
  .badge-20.t2061 {
    background-position: -340px -160px; }
  .badge-20.t2062 {
    background-position: -340px -180px; }
  .badge-20.t2063 {
    background-position: -340px -200px; }
  .badge-20.t2064 {
    background-position: -340px -220px; }
  .badge-20.t211 {
    background-position: -340px -240px; }
  .badge-20.t2116 {
    background-position: -340px -260px; }
  .badge-20.t212 {
    background-position: -340px -280px; }
  .badge-20.t2133 {
    background-position: -340px -300px; }
  .badge-20.t214 {
    background-position: -340px -320px; }
  .badge-20.t2141 {
    background-position: 0px -340px; }
  .badge-20.t2155 {
    background-position: -20px -340px; }
  .badge-20.t216 {
    background-position: -40px -340px; }
  .badge-20.t2161 {
    background-position: -60px -340px; }
  .badge-20.t217 {
    background-position: -80px -340px; }
  .badge-20.t2182 {
    background-position: -100px -340px; }
  .badge-20.t2246 {
    background-position: -120px -340px; }
  .badge-20.t2273 {
    background-position: -140px -340px; }
  .badge-20.t2278 {
    background-position: -160px -340px; }
  .badge-20.t2279 {
    background-position: -180px -340px; }
  .badge-20.t232 {
    background-position: -200px -340px; }
  .badge-20.t234 {
    background-position: -220px -340px; }
  .badge-20.t2347 {
    background-position: -240px -340px; }
  .badge-20.t2359 {
    background-position: -260px -340px; }
  .badge-20.t237 {
    background-position: -280px -340px; }
  .badge-20.t239 {
    background-position: -300px -340px; }
  .badge-20.t240 {
    background-position: -320px -340px; }
  .badge-20.t243 {
    background-position: -340px -340px; }
  .badge-20.t2447 {
    background-position: -360px 0px; }
  .badge-20.t245 {
    background-position: -360px -20px; }
  .badge-20.t2468 {
    background-position: -360px -40px; }
  .badge-20.t249 {
    background-position: -360px -60px; }
  .badge-20.t2496 {
    background-position: -360px -80px; }
  .badge-20.t2497 {
    background-position: -360px -100px; }
  .badge-20.t250 {
    background-position: -360px -120px; }
  .badge-20.t252 {
    background-position: -360px -140px; }
  .badge-20.t253 {
    background-position: -360px -160px; }
  .badge-20.t2592 {
    background-position: -360px -180px; }
  .badge-20.t2599 {
    background-position: -360px -200px; }
  .badge-20.t260 {
    background-position: -360px -220px; }
  .badge-20.t2623 {
    background-position: -360px -240px; }
  .badge-20.t2625 {
    background-position: -360px -260px; }
  .badge-20.t2627 {
    background-position: -360px -280px; }
  .badge-20.t2628 {
    background-position: -360px -300px; }
  .badge-20.t263 {
    background-position: -360px -320px; }
  .badge-20.t264 {
    background-position: -360px -340px; }
  .badge-20.t2702 {
    background-position: 0px -360px; }
  .badge-20.t2714 {
    background-position: -20px -360px; }
  .badge-20.t273 {
    background-position: -40px -360px; }
  .badge-20.t2733 {
    background-position: -60px -360px; }
  .badge-20.t2751 {
    background-position: -80px -360px; }
  .badge-20.t2753 {
    background-position: -100px -360px; }
  .badge-20.t2759 {
    background-position: -120px -360px; }
  .badge-20.t2760 {
    background-position: -140px -360px; }
  .badge-20.t2794 {
    background-position: -160px -360px; }
  .badge-20.t281 {
    background-position: -180px -360px; }
  .badge-20.t2839 {
    background-position: -200px -360px; }
  .badge-20.t284 {
    background-position: -220px -360px; }
  .badge-20.t2847 {
    background-position: -240px -360px; }
  .badge-20.t287 {
    background-position: -260px -360px; }
  .badge-20.t2870 {
    background-position: -280px -360px; }
  .badge-20.t289 {
    background-position: -300px -360px; }
  .badge-20.t290 {
    background-position: -320px -360px; }
  .badge-20.t291 {
    background-position: -340px -360px; }
  .badge-20.t293 {
    background-position: -360px -360px; }
  .badge-20.t294 {
    background-position: -380px 0px; }
  .badge-20.t295 {
    background-position: -380px -20px; }
  .badge-20.t297 {
    background-position: -380px -40px; }
  .badge-20.t298 {
    background-position: -380px -60px; }
  .badge-20.t2997 {
    background-position: -380px -80px; }
  .badge-20.t300 {
    background-position: -380px -100px; }
  .badge-20.t301 {
    background-position: -380px -120px; }
  .badge-20.t3012 {
    background-position: -380px -140px; }
  .badge-20.t3014 {
    background-position: -380px -160px; }
  .badge-20.t302 {
    background-position: -380px -180px; }
  .badge-20.t3033 {
    background-position: -380px -200px; }
  .badge-20.t3062 {
    background-position: -380px -220px; }
  .badge-20.t3093 {
    background-position: -380px -240px; }
  .badge-20.t3096 {
    background-position: -380px -260px; }
  .badge-20.t3097 {
    background-position: -380px -280px; }
  .badge-20.t310 {
    background-position: -380px -300px; }
  .badge-20.t3107 {
    background-position: -380px -320px; }
  .badge-20.t3120 {
    background-position: -380px -340px; }
  .badge-20.t3121 {
    background-position: -380px -360px; }
  .badge-20.t3139 {
    background-position: 0px -380px; }
  .badge-20.t3140 {
    background-position: -20px -380px; }
  .badge-20.t3141 {
    background-position: -40px -380px; }
  .badge-20.t3150 {
    background-position: -60px -380px; }
  .badge-20.t3151 {
    background-position: -80px -380px; }
  .badge-20.t3153 {
    background-position: -100px -380px; }
  .badge-20.t3155 {
    background-position: -120px -380px; }
  .badge-20.t3156 {
    background-position: -140px -380px; }
  .badge-20.t3159 {
    background-position: -160px -380px; }
  .badge-20.t3160 {
    background-position: -180px -380px; }
  .badge-20.t3161 {
    background-position: -200px -380px; }
  .badge-20.t3162 {
    background-position: -220px -380px; }
  .badge-20.t3163 {
    background-position: -240px -380px; }
  .badge-20.t318 {
    background-position: -260px -380px; }
  .badge-20.t3221 {
    background-position: -280px -380px; }
  .badge-20.t324 {
    background-position: -300px -380px; }
  .badge-20.t3347 {
    background-position: -320px -380px; }
  .badge-20.t3356 {
    background-position: -340px -380px; }
  .badge-20.t3360 {
    background-position: -360px -380px; }
  .badge-20.t3382 {
    background-position: -380px -380px; }
  .badge-20.t3389 {
    background-position: -400px 0px; }
  .badge-20.t3404 {
    background-position: -400px -20px; }
  .badge-20.t3414 {
    background-position: -400px -40px; }
  .badge-20.t3417 {
    background-position: -400px -60px; }
  .badge-20.t3419 {
    background-position: -400px -80px; }
  .badge-20.t3423 {
    background-position: -400px -100px; }
  .badge-20.t3437 {
    background-position: -400px -120px; }
  .badge-20.t3446 {
    background-position: -400px -140px; }
  .badge-20.t3448 {
    background-position: -400px -160px; }
  .badge-20.t3454 {
    background-position: -400px -180px; }
  .badge-20.t3485 {
    background-position: -400px -200px; }
  .badge-20.t3492 {
    background-position: -400px -220px; }
  .badge-20.t3533 {
    background-position: -400px -240px; }
  .badge-20.t373 {
    background-position: -400px -260px; }
  .badge-20.t375 {
    background-position: -400px -280px; }
  .badge-20.t3751 {
    background-position: -400px -300px; }
  .badge-20.t378 {
    background-position: -400px -320px; }
  .badge-20.t383 {
    background-position: -400px -340px; }
  .badge-20.t385 {
    background-position: -400px -360px; }
  .badge-20.t3869 {
    background-position: -400px -380px; }
  .badge-20.t387 {
    background-position: 0px -400px; }
  .badge-20.t394 {
    background-position: -20px -400px; }
  .badge-20.t4004 {
    background-position: -40px -400px; }
  .badge-20.t4007 {
    background-position: -60px -400px; }
  .badge-20.t401 {
    background-position: -80px -400px; }
  .badge-20.t4094 {
    background-position: -100px -400px; }
  .badge-20.t411 {
    background-position: -120px -400px; }
  .badge-20.t4114 {
    background-position: -140px -400px; }
  .badge-20.t413 {
    background-position: -160px -400px; }
  .badge-20.t414 {
    background-position: -180px -400px; }
  .badge-20.t4153 {
    background-position: -200px -400px; }
  .badge-20.t428 {
    background-position: -220px -400px; }
  .badge-20.t429 {
    background-position: -240px -400px; }
  .badge-20.t434 {
    background-position: -260px -400px; }
  .badge-20.t439 {
    background-position: -280px -400px; }
  .badge-20.t440 {
    background-position: -300px -400px; }
  .badge-20.t445 {
    background-position: -320px -400px; }
  .badge-20.t450 {
    background-position: -340px -400px; }
  .badge-20.t452 {
    background-position: -360px -400px; }
  .badge-20.t453 {
    background-position: -380px -400px; }
  .badge-20.t456 {
    background-position: -400px -400px; }
  .badge-20.t457 {
    background-position: -420px 0px; }
  .badge-20.t463 {
    background-position: -420px -20px; }
  .badge-20.t4660 {
    background-position: -420px -40px; }
  .badge-20.t472 {
    background-position: -420px -60px; }
  .badge-20.t476 {
    background-position: -420px -80px; }
  .badge-20.t479 {
    background-position: -420px -100px; }
  .badge-20.t48 {
    background-position: -420px -120px; }
  .badge-20.t482 {
    background-position: -420px -140px; }
  .badge-20.t485 {
    background-position: -420px -160px; }
  .badge-20.t491 {
    background-position: -420px -180px; }
  .badge-20.t5334 {
    background-position: -420px -200px; }
  .badge-20.t5335 {
    background-position: -420px -220px; }
  .badge-20.t5348 {
    background-position: -420px -240px; }
  .badge-20.t5350 {
    background-position: -420px -260px; }
  .badge-20.t5351 {
    background-position: -420px -280px; }
  .badge-20.t545 {
    background-position: -420px -300px; }
  .badge-20.t5576 {
    background-position: -420px -320px; }
  .badge-20.t573 {
    background-position: -420px -340px; }
  .badge-20.t580 {
    background-position: -420px -360px; }
  .badge-20.t581 {
    background-position: -420px -380px; }
  .badge-20.t585 {
    background-position: -420px -400px; }
  .badge-20.t586 {
    background-position: 0px -420px; }
  .badge-20.t59 {
    background-position: -20px -420px; }
  .badge-20.t591 {
    background-position: -40px -420px; }
  .badge-20.t595 {
    background-position: -60px -420px; }
  .badge-20.t6106 {
    background-position: -80px -420px; }
  .badge-20.t6128 {
    background-position: -100px -420px; }
  .badge-20.t6134 {
    background-position: -120px -420px; }
  .badge-20.t6339 {
    background-position: -140px -420px; }
  .badge-20.t6505 {
    background-position: -160px -420px; }
  .badge-20.t657 {
    background-position: -180px -420px; }
  .badge-20.t67 {
    background-position: -200px -420px; }
  .badge-20.t671 {
    background-position: -220px -420px; }
  .badge-20.t6722 {
    background-position: -240px -420px; }
  .badge-20.t6751 {
    background-position: -260px -420px; }
  .badge-20.t678 {
    background-position: -280px -420px; }
  .badge-20.t679 {
    background-position: -300px -420px; }
  .badge-20.t6796 {
    background-position: -320px -420px; }
  .badge-20.t69 {
    background-position: -340px -420px; }
  .badge-20.t70 {
    background-position: -360px -420px; }
  .badge-20.t7063 {
    background-position: -380px -420px; }
  .badge-20.t71 {
    background-position: -400px -420px; }
  .badge-20.t7140 {
    background-position: -420px -420px; }
  .badge-20.t7292 {
    background-position: -440px 0px; }
  .badge-20.t73 {
    background-position: -440px -20px; }
  .badge-20.t740 {
    background-position: -440px -40px; }
  .badge-20.t76 {
    background-position: -440px -60px; }
  .badge-20.t7601 {
    background-position: -440px -80px; }
  .badge-20.t7608 {
    background-position: -440px -100px; }
  .badge-20.t78 {
    background-position: -440px -120px; }
  .badge-20.t79 {
    background-position: -440px -140px; }
  .badge-20.t803 {
    background-position: -440px -160px; }
  .badge-20.t808 {
    background-position: -440px -180px; }
  .badge-20.t810 {
    background-position: -440px -200px; }
  .badge-20.t820 {
    background-position: -440px -220px; }
  .badge-20.t84 {
    background-position: -440px -240px; }
  .badge-20.t855 {
    background-position: -440px -260px; }
  .badge-20.t857 {
    background-position: -440px -280px; }
  .badge-20.t884 {
    background-position: -440px -300px; }
  .badge-20.t886 {
    background-position: -440px -320px; }
  .badge-20.t887 {
    background-position: -440px -340px; }
  .badge-20.t8889 {
    background-position: -440px -360px; }
  .badge-20.t891 {
    background-position: -440px -380px; }
  .badge-20.t8950 {
    background-position: -440px -400px; }
  .badge-20.t8951 {
    background-position: -440px -420px; }
  .badge-20.t8963 {
    background-position: 0px -440px; }
  .badge-20.t8964 {
    background-position: -20px -440px; }
  .badge-20.t935 {
    background-position: -40px -440px; }
  .badge-20.t936 {
    background-position: -60px -440px; }
  .badge-20.t94 {
    background-position: -80px -440px; }
  .badge-20.t943 {
    background-position: -100px -440px; }
  .badge-20.t9449 {
    background-position: -120px -440px; }
  .badge-20.t949 {
    background-position: -140px -440px; }
  .badge-20.t95 {
    background-position: -160px -440px; }
  .badge-20.t96 {
    background-position: -180px -440px; }
  .badge-20.t988 {
    background-position: -200px -440px; }
  .badge-20.t993 {
    background-position: -220px -440px; }

.badge-25 {
  background-image: url("../pulselive/i/sprites/badges-25-sprite.png");
  background-repeat: no-repeat;
  width: 25px;
  height: 25px;
  display: block;
  background-position: -175px -175px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .badge-25 {
      background-image: url("../pulselive/i/sprites/badges-25-sprite@x2.png");
      background-size: 600px 575px; } }
  .badge-25.ACM {
    background-position: -25px 0px; }
  .badge-25.ADL {
    background-position: -400px -325px; }
  .badge-25.AEK {
    background-position: 0px -25px; }
  .badge-25.AFW {
    background-position: -25px -25px; }
  .badge-25.AJA {
    background-position: -50px 0px; }
  .badge-25.APO {
    background-position: -50px -25px; }
  .badge-25.ARS {
    background-position: 0px -50px; }
  .badge-25.ASI {
    background-position: -25px -50px; }
  .badge-25.AST {
    background-position: -50px -50px; }
  .badge-25.ASY {
    background-position: -75px 0px; }
  .badge-25.ATA {
    background-position: -75px -25px; }
  .badge-25.ATH {
    background-position: -75px -50px; }
  .badge-25.ATM {
    background-position: 0px -75px; }
  .badge-25.AUS {
    background-position: -25px -75px; }
  .badge-25.AVL {
    background-position: -50px -75px; }
  .badge-25.AZ {
    background-position: -75px -75px; }
  .badge-25.B04 {
    background-position: -100px 0px; }
  .badge-25.BAL {
    background-position: -100px -25px; }
  .badge-25.BAR {
    background-position: -100px -50px; }
  .badge-25.BAT {
    background-position: -100px -75px; }
  .badge-25.BBV {
    background-position: 0px -100px; }
  .badge-25.BCN {
    background-position: -25px -100px; }
  .badge-25.BEF {
    background-position: -50px -100px; }
  .badge-25.BEL {
    background-position: -75px -100px; }
  .badge-25.BHA {
    background-position: -100px -100px; }
  .badge-25.BIR {
    background-position: -125px 0px; }
  .badge-25.BJK {
    background-position: -125px -25px; }
  .badge-25.BLB {
    background-position: -125px -50px; }
  .badge-25.BLP {
    background-position: -125px -75px; }
  .badge-25.BMG {
    background-position: -125px -100px; }
  .badge-25.BOL {
    background-position: 0px -125px; }
  .badge-25.BOR {
    background-position: -25px -125px; }
  .badge-25.BOU {
    background-position: -50px -125px; }
  .badge-25.BRA {
    background-position: -75px -125px; }
  .badge-25.BRE {
    background-position: -100px -125px; }
  .badge-25.BRG {
    background-position: -125px -125px; }
  .badge-25.BRI {
    background-position: -150px 0px; }
  .badge-25.BRR {
    background-position: -150px -25px; }
  .badge-25.BRU {
    background-position: -150px -50px; }
  .badge-25.BRW {
    background-position: -150px -75px; }
  .badge-25.BRY {
    background-position: -150px -100px; }
  .badge-25.BSC {
    background-position: -150px -125px; }
  .badge-25.BSL {
    background-position: 0px -150px; }
  .badge-25.BUR {
    background-position: -25px -150px; }
  .badge-25.BVB {
    background-position: -50px -150px; }
  .badge-25.CAR {
    background-position: -75px -150px; }
  .badge-25.CEL {
    background-position: -100px -150px; }
  .badge-25.CHA {
    background-position: -125px -150px; }
  .badge-25.CHE {
    background-position: -150px -150px; }
  .badge-25.CHF {
    background-position: -175px 0px; }
  .badge-25.CHT {
    background-position: -175px -25px; }
  .badge-25.CLV {
    background-position: -175px -50px; }
  .badge-25.CMU {
    background-position: -175px -75px; }
  .badge-25.COU {
    background-position: -175px -100px; }
  .badge-25.COV {
    background-position: -175px -125px; }
  .badge-25.CPH {
    background-position: -175px -150px; }
  .badge-25.CRE {
    background-position: 0px -175px; }
  .badge-25.CRW {
    background-position: -25px -175px; }
  .badge-25.CRY {
    background-position: -50px -175px; }
  .badge-25.CSK {
    background-position: -75px -175px; }
  .badge-25.CUT {
    background-position: -100px -175px; }
  .badge-25.CZV {
    background-position: -125px -175px; }
  .badge-25.DAG {
    background-position: -150px -175px; }
  .badge-25.DER {
    background-position: -200px 0px; }
  .badge-25.DER-new {
    background-position: -200px -25px; }
  .badge-25.DMK {
    background-position: -200px -50px; }
  .badge-25.DND {
    background-position: -200px -75px; }
  .badge-25.DNR {
    background-position: -200px -100px; }
  .badge-25.DON {
    background-position: -200px -125px; }
  .badge-25.DYK {
    background-position: -200px -150px; }
  .badge-25.DZG {
    background-position: -200px -175px; }
  .badge-25.EAS {
    background-position: 0px -200px; }
  .badge-25.EVE {
    background-position: -25px -200px; }
  .badge-25.EXE {
    background-position: -50px -200px; }
  .badge-25.FCA {
    background-position: -75px -200px; }
  .badge-25.FCB {
    background-position: -100px -200px; }
  .badge-25.FCL {
    background-position: -125px -200px; }
  .badge-25.FCSM {
    background-position: -150px -200px; }
  .badge-25.FEN {
    background-position: -175px -200px; }
  .badge-25.FEY {
    background-position: -200px -200px; }
  .badge-25.FGR {
    background-position: -225px 0px; }
  .badge-25.FIO {
    background-position: -225px -25px; }
  .badge-25.FKQ {
    background-position: -225px -50px; }
  .badge-25.FKV {
    background-position: -225px -75px; }
  .badge-25.FLE {
    background-position: -225px -100px; }
  .badge-25.FUL {
    background-position: -225px -125px; }
  .badge-25.GAL {
    background-position: -225px -150px; }
  .badge-25.GIL {
    background-position: -225px -175px; }
  .badge-25.GRI {
    background-position: -225px -200px; }
  .badge-25.GRO {
    background-position: 0px -225px; }
  .badge-25.HAL {
    background-position: -25px -225px; }
  .badge-25.HBS {
    background-position: -50px -225px; }
  .badge-25.HOF {
    background-position: -75px -225px; }
  .badge-25.HUD {
    background-position: -100px -225px; }
  .badge-25.HUL {
    background-position: -125px -225px; }
  .badge-25.IBA {
    background-position: -150px -225px; }
  .badge-25.IPS {
    background-position: -175px -225px; }
  .badge-25.JUV {
    background-position: -200px -225px; }
  .badge-25.KAA {
    background-position: -225px -225px; }
  .badge-25.KOE {
    background-position: -250px 0px; }
  .badge-25.KRA {
    background-position: -250px -25px; }
  .badge-25.KYS {
    background-position: -250px -50px; }
  .badge-25.LAZ {
    background-position: -250px -75px; }
  .badge-25.LEE {
    background-position: -250px -100px; }
  .badge-25.LEG {
    background-position: -250px -125px; }
  .badge-25.LEI {
    background-position: -250px -150px; }
  .badge-25.LEP {
    background-position: -250px -175px; }
  .badge-25.LIB {
    background-position: -250px -200px; }
  .badge-25.LIN {
    background-position: -250px -225px; }
  .badge-25.LIV {
    background-position: 0px -250px; }
  .badge-25.LKM {
    background-position: -25px -250px; }
  .badge-25.LNO {
    background-position: -50px -250px; }
  .badge-25.LOK {
    background-position: -75px -250px; }
  .badge-25.LUD {
    background-position: -100px -250px; }
  .badge-25.LUT {
    background-position: -125px -250px; }
  .badge-25.LYN {
    background-position: -150px -250px; }
  .badge-25.M05 {
    background-position: -175px -250px; }
  .badge-25.MAN {
    background-position: -200px -250px; }
  .badge-25.MAR {
    background-position: -225px -250px; }
  .badge-25.MCH {
    background-position: -250px -250px; }
  .badge-25.MCI {
    background-position: -275px 0px; }
  .badge-25.MCO {
    background-position: -275px -25px; }
  .badge-25.MFF {
    background-position: -275px -50px; }
  .badge-25.MID {
    background-position: -275px -75px; }
  .badge-25.MIL {
    background-position: -275px -100px; }
  .badge-25.MKD {
    background-position: -275px -125px; }
  .badge-25.MOL {
    background-position: -275px -150px; }
  .badge-25.MOR {
    background-position: -275px -175px; }
  .badge-25.MTA {
    background-position: -275px -200px; }
  .badge-25.MUN {
    background-position: -275px -225px; }
  .badge-25.NAP {
    background-position: -275px -250px; }
  .badge-25.NEW {
    background-position: 0px -275px; }
  .badge-25.NFO {
    background-position: -25px -275px; }
  .badge-25.NHT {
    background-position: -50px -275px; }
  .badge-25.NIC {
    background-position: -75px -275px; }
  .badge-25.NKM {
    background-position: -100px -275px; }
  .badge-25.NOR {
    background-position: -125px -275px; }
  .badge-25.NOT {
    background-position: -150px -275px; }
  .badge-25.NWP {
    background-position: -175px -275px; }
  .badge-25.OFK {
    background-position: -200px -275px; }
  .badge-25.OLD {
    background-position: -225px -275px; }
  .badge-25.OLY {
    background-position: -250px -275px; }
  .badge-25.OSM {
    background-position: -275px -275px; }
  .badge-25.OXF {
    background-position: -300px 0px; }
  .badge-25.PAO {
    background-position: -300px -25px; }
  .badge-25.PBG {
    background-position: -300px -50px; }
  .badge-25.PET {
    background-position: -300px -75px; }
  .badge-25.PLY {
    background-position: -300px -100px; }
  .badge-25.PLZ {
    background-position: -300px -125px; }
  .badge-25.PNE {
    background-position: -300px -150px; }
  .badge-25.POR {
    background-position: -300px -175px; }
  .badge-25.PSG {
    background-position: -300px -200px; }
  .badge-25.PSV {
    background-position: -300px -225px; }
  .badge-25.PTO {
    background-position: -300px -250px; }
  .badge-25.PTV {
    background-position: -300px -275px; }
  .badge-25.QAB {
    background-position: 0px -300px; }
  .badge-25.QPR {
    background-position: -25px -300px; }
  .badge-25.RAP {
    background-position: -50px -300px; }
  .badge-25.RBL {
    background-position: -75px -300px; }
  .badge-25.RDG {
    background-position: -100px -300px; }
  .badge-25.RMA {
    background-position: -125px -300px; }
  .badge-25.RMD {
    background-position: -150px -300px; }
  .badge-25.ROC {
    background-position: -175px -300px; }
  .badge-25.RSB {
    background-position: -200px -300px; }
  .badge-25.RSO {
    background-position: -225px -300px; }
  .badge-25.RSV {
    background-position: -250px -300px; }
  .badge-25.RTH {
    background-position: -275px -300px; }
  .badge-25.RUB {
    background-position: -300px -300px; }
  .badge-25.S04 {
    background-position: -325px 0px; }
  .badge-25.SBR {
    background-position: -325px -25px; }
  .badge-25.SCL {
    background-position: -325px -50px; }
  .badge-25.SCU {
    background-position: -325px -75px; }
  .badge-25.SDK {
    background-position: -325px -100px; }
  .badge-25.SEV {
    background-position: -325px -125px; }
  .badge-25.SHR {
    background-position: -325px -150px; }
  .badge-25.SHU {
    background-position: -325px -175px; }
  .badge-25.SHW {
    background-position: -325px -200px; }
  .badge-25.SIO {
    background-position: -325px -225px; }
  .badge-25.SKE {
    background-position: -325px -250px; }
  .badge-25.SOU {
    background-position: -325px -275px; }
  .badge-25.SPP {
    background-position: -325px -300px; }
  .badge-25.SPR {
    background-position: 0px -325px; }
  .badge-25.SSL {
    background-position: -25px -325px; }
  .badge-25.STE {
    background-position: -50px -325px; }
  .badge-25.STK {
    background-position: -75px -325px; }
  .badge-25.STO {
    background-position: -100px -325px; }
  .badge-25.STU {
    background-position: -125px -325px; }
  .badge-25.STV {
    background-position: -150px -325px; }
  .badge-25.SUN {
    background-position: -175px -325px; }
  .badge-25.SUT {
    background-position: -200px -325px; }
  .badge-25.SWA {
    background-position: -225px -325px; }
  .badge-25.SWI {
    background-position: -250px -325px; }
  .badge-25.TOT {
    background-position: -300px -550px; }
  .badge-25.TOTALT {
    background-position: -325px -550px; }
  .badge-25.VAL {
    background-position: -350px -550px; }
  .badge-25.VIL {
    background-position: -400px -550px; }
  .badge-25.VIT {
    background-position: -425px -550px; }
  .badge-25.VTG {
    background-position: -450px -550px; }
  .badge-25.Videoton-50x50 {
    background-position: -375px -550px; }
  .badge-25.WAT {
    background-position: -475px -550px; }
  .badge-25.WBA {
    background-position: -500px -550px; }
  .badge-25.WHU {
    background-position: -525px -550px; }
  .badge-25.WIG {
    background-position: -550px -550px; }
  .badge-25.WIM {
    background-position: -575px 0px; }
  .badge-25.WLS {
    background-position: -575px -25px; }
  .badge-25.WOB {
    background-position: -575px -50px; }
  .badge-25.WOL {
    background-position: -575px -75px; }
  .badge-25.WYC {
    background-position: -575px -100px; }
  .badge-25.YEO {
    background-position: -575px -125px; }
  .badge-25.ZLN {
    background-position: -575px -150px; }
  .badge-25.ZNT {
    background-position: -575px -175px; }
  .badge-25.ZRL {
    background-position: -575px -200px; }
  .badge-25.default {
    background-position: -175px -175px; }
  .badge-25.t100 {
    background-position: -275px -325px; }
  .badge-25.t1003 {
    background-position: -300px -325px; }
  .badge-25.t1007 {
    background-position: -325px -325px; }
  .badge-25.t10248 {
    background-position: -350px 0px; }
  .badge-25.t10575 {
    background-position: -350px -25px; }
  .badge-25.t10657 {
    background-position: -350px -50px; }
  .badge-25.t107 {
    background-position: -350px -75px; }
  .badge-25.t109 {
    background-position: -350px -100px; }
  .badge-25.t1098 {
    background-position: -350px -125px; }
  .badge-25.t1099 {
    background-position: -350px -150px; }
  .badge-25.t11206 {
    background-position: -350px -175px; }
  .badge-25.t11371 {
    background-position: -350px -200px; }
  .badge-25.t1169 {
    background-position: -350px -225px; }
  .badge-25.t1170 {
    background-position: -350px -250px; }
  .badge-25.t1185 {
    background-position: -350px -275px; }
  .badge-25.t1189 {
    background-position: -350px -300px; }
  .badge-25.t11936 {
    background-position: -350px -325px; }
  .badge-25.t11937 {
    background-position: 0px -350px; }
  .badge-25.t121 {
    background-position: -25px -350px; }
  .badge-25.t125 {
    background-position: -50px -350px; }
  .badge-25.t127 {
    background-position: -75px -350px; }
  .badge-25.t129 {
    background-position: -100px -350px; }
  .badge-25.t12935 {
    background-position: -125px -350px; }
  .badge-25.t12938 {
    background-position: -150px -350px; }
  .badge-25.t12939 {
    background-position: -175px -350px; }
  .badge-25.t12940 {
    background-position: -200px -350px; }
  .badge-25.t12944 {
    background-position: -225px -350px; }
  .badge-25.t12948 {
    background-position: -250px -350px; }
  .badge-25.t12968 {
    background-position: -275px -350px; }
  .badge-25.t12969 {
    background-position: -300px -350px; }
  .badge-25.t12970 {
    background-position: -325px -350px; }
  .badge-25.t12971 {
    background-position: -350px -350px; }
  .badge-25.t131 {
    background-position: -375px 0px; }
  .badge-25.t13187 {
    background-position: -375px -25px; }
  .badge-25.t135 {
    background-position: -375px -50px; }
  .badge-25.t136 {
    background-position: -375px -75px; }
  .badge-25.t138 {
    background-position: -375px -100px; }
  .badge-25.t1395 {
    background-position: -375px -125px; }
  .badge-25.t140 {
    background-position: -375px -150px; }
  .badge-25.t1400 {
    background-position: -375px -175px; }
  .badge-25.t1405 {
    background-position: -375px -200px; }
  .badge-25.t1409 {
    background-position: -375px -225px; }
  .badge-25.t1414 {
    background-position: -375px -250px; }
  .badge-25.t142 {
    background-position: -375px -275px; }
  .badge-25.t143 {
    background-position: -375px -300px; }
  .badge-25.t1446 {
    background-position: -375px -325px; }
  .badge-25.t1457 {
    background-position: -375px -350px; }
  .badge-25.t146 {
    background-position: 0px -375px; }
  .badge-25.t1462 {
    background-position: -25px -375px; }
  .badge-25.t147 {
    background-position: -50px -375px; }
  .badge-25.t1475 {
    background-position: -75px -375px; }
  .badge-25.t148 {
    background-position: -100px -375px; }
  .badge-25.t1484 {
    background-position: -125px -375px; }
  .badge-25.t1487 {
    background-position: -150px -375px; }
  .badge-25.t1492 {
    background-position: -175px -375px; }
  .badge-25.t1493 {
    background-position: -200px -375px; }
  .badge-25.t1494 {
    background-position: -225px -375px; }
  .badge-25.t150 {
    background-position: -250px -375px; }
  .badge-25.t1508 {
    background-position: -275px -375px; }
  .badge-25.t1510 {
    background-position: -300px -375px; }
  .badge-25.t152 {
    background-position: -325px -375px; }
  .badge-25.t1520 {
    background-position: -350px -375px; }
  .badge-25.t1526 {
    background-position: -375px -375px; }
  .badge-25.t1580 {
    background-position: -400px 0px; }
  .badge-25.t1586 {
    background-position: -400px -25px; }
  .badge-25.t1587 {
    background-position: -400px -50px; }
  .badge-25.t159 {
    background-position: -400px -75px; }
  .badge-25.t160 {
    background-position: -400px -100px; }
  .badge-25.t1615 {
    background-position: -400px -125px; }
  .badge-25.t162 {
    background-position: -400px -150px; }
  .badge-25.t1633 {
    background-position: -400px -175px; }
  .badge-25.t169 {
    background-position: -400px -200px; }
  .badge-25.t171 {
    background-position: -400px -225px; }
  .badge-25.t1712 {
    background-position: -400px -250px; }
  .badge-25.t1716 {
    background-position: -400px -275px; }
  .badge-25.t1747 {
    background-position: -400px -300px; }
  .badge-25.t1748 {
    background-position: 0px 0px; }
  .badge-25.t176 {
    background-position: -400px -350px; }
  .badge-25.t177 {
    background-position: -400px -375px; }
  .badge-25.t1792 {
    background-position: 0px -400px; }
  .badge-25.t182 {
    background-position: -25px -400px; }
  .badge-25.t185 {
    background-position: -50px -400px; }
  .badge-25.t1902 {
    background-position: -75px -400px; }
  .badge-25.t194 {
    background-position: -100px -400px; }
  .badge-25.t1943 {
    background-position: -125px -400px; }
  .badge-25.t195 {
    background-position: -150px -400px; }
  .badge-25.t1951 {
    background-position: -175px -400px; }
  .badge-25.t1963 {
    background-position: -200px -400px; }
  .badge-25.t197 {
    background-position: -225px -400px; }
  .badge-25.t1981 {
    background-position: -250px -400px; }
  .badge-25.t2003 {
    background-position: -275px -400px; }
  .badge-25.t2006 {
    background-position: -300px -400px; }
  .badge-25.t203 {
    background-position: -325px -400px; }
  .badge-25.t2039 {
    background-position: -350px -400px; }
  .badge-25.t2047 {
    background-position: -375px -400px; }
  .badge-25.t205 {
    background-position: -400px -400px; }
  .badge-25.t2050 {
    background-position: -425px 0px; }
  .badge-25.t2051 {
    background-position: -425px -25px; }
  .badge-25.t2052 {
    background-position: -425px -50px; }
  .badge-25.t2057 {
    background-position: -425px -75px; }
  .badge-25.t2058 {
    background-position: -425px -100px; }
  .badge-25.t2059 {
    background-position: -425px -125px; }
  .badge-25.t206 {
    background-position: -425px -150px; }
  .badge-25.t2060 {
    background-position: -425px -175px; }
  .badge-25.t2061 {
    background-position: -425px -200px; }
  .badge-25.t2062 {
    background-position: -425px -225px; }
  .badge-25.t2063 {
    background-position: -425px -250px; }
  .badge-25.t2064 {
    background-position: -425px -275px; }
  .badge-25.t211 {
    background-position: -425px -300px; }
  .badge-25.t2116 {
    background-position: -425px -325px; }
  .badge-25.t212 {
    background-position: -425px -350px; }
  .badge-25.t2133 {
    background-position: -425px -375px; }
  .badge-25.t214 {
    background-position: -425px -400px; }
  .badge-25.t2141 {
    background-position: 0px -425px; }
  .badge-25.t2155 {
    background-position: -25px -425px; }
  .badge-25.t216 {
    background-position: -50px -425px; }
  .badge-25.t2161 {
    background-position: -75px -425px; }
  .badge-25.t217 {
    background-position: -100px -425px; }
  .badge-25.t2182 {
    background-position: -125px -425px; }
  .badge-25.t2246 {
    background-position: -150px -425px; }
  .badge-25.t2273 {
    background-position: -175px -425px; }
  .badge-25.t2278 {
    background-position: -200px -425px; }
  .badge-25.t2279 {
    background-position: -225px -425px; }
  .badge-25.t232 {
    background-position: -250px -425px; }
  .badge-25.t234 {
    background-position: -275px -425px; }
  .badge-25.t2347 {
    background-position: -300px -425px; }
  .badge-25.t2359 {
    background-position: -325px -425px; }
  .badge-25.t237 {
    background-position: -350px -425px; }
  .badge-25.t239 {
    background-position: -375px -425px; }
  .badge-25.t240 {
    background-position: -400px -425px; }
  .badge-25.t243 {
    background-position: -425px -425px; }
  .badge-25.t2447 {
    background-position: -450px 0px; }
  .badge-25.t245 {
    background-position: -450px -25px; }
  .badge-25.t2468 {
    background-position: -450px -50px; }
  .badge-25.t249 {
    background-position: -450px -75px; }
  .badge-25.t2496 {
    background-position: -450px -100px; }
  .badge-25.t2497 {
    background-position: -450px -125px; }
  .badge-25.t250 {
    background-position: -450px -150px; }
  .badge-25.t252 {
    background-position: -450px -175px; }
  .badge-25.t253 {
    background-position: -450px -200px; }
  .badge-25.t2592 {
    background-position: -450px -225px; }
  .badge-25.t2599 {
    background-position: -450px -250px; }
  .badge-25.t260 {
    background-position: -450px -275px; }
  .badge-25.t2623 {
    background-position: -450px -300px; }
  .badge-25.t2625 {
    background-position: -450px -325px; }
  .badge-25.t2627 {
    background-position: -450px -350px; }
  .badge-25.t2628 {
    background-position: -450px -375px; }
  .badge-25.t263 {
    background-position: -450px -400px; }
  .badge-25.t264 {
    background-position: -450px -425px; }
  .badge-25.t2702 {
    background-position: 0px -450px; }
  .badge-25.t2714 {
    background-position: -25px -450px; }
  .badge-25.t273 {
    background-position: -50px -450px; }
  .badge-25.t2733 {
    background-position: -75px -450px; }
  .badge-25.t2751 {
    background-position: -100px -450px; }
  .badge-25.t2753 {
    background-position: -125px -450px; }
  .badge-25.t2759 {
    background-position: -150px -450px; }
  .badge-25.t2760 {
    background-position: -175px -450px; }
  .badge-25.t2794 {
    background-position: -200px -450px; }
  .badge-25.t281 {
    background-position: -225px -450px; }
  .badge-25.t2839 {
    background-position: -250px -450px; }
  .badge-25.t284 {
    background-position: -275px -450px; }
  .badge-25.t2847 {
    background-position: -300px -450px; }
  .badge-25.t287 {
    background-position: -325px -450px; }
  .badge-25.t2870 {
    background-position: -350px -450px; }
  .badge-25.t289 {
    background-position: -375px -450px; }
  .badge-25.t290 {
    background-position: -400px -450px; }
  .badge-25.t291 {
    background-position: -425px -450px; }
  .badge-25.t293 {
    background-position: -450px -450px; }
  .badge-25.t294 {
    background-position: -475px 0px; }
  .badge-25.t295 {
    background-position: -475px -25px; }
  .badge-25.t297 {
    background-position: -475px -50px; }
  .badge-25.t298 {
    background-position: -475px -75px; }
  .badge-25.t2997 {
    background-position: -475px -100px; }
  .badge-25.t300 {
    background-position: -475px -125px; }
  .badge-25.t301 {
    background-position: -475px -150px; }
  .badge-25.t3012 {
    background-position: -475px -175px; }
  .badge-25.t3014 {
    background-position: -475px -200px; }
  .badge-25.t302 {
    background-position: -475px -225px; }
  .badge-25.t3033 {
    background-position: -475px -250px; }
  .badge-25.t3062 {
    background-position: -475px -275px; }
  .badge-25.t3093 {
    background-position: -475px -300px; }
  .badge-25.t3096 {
    background-position: -475px -325px; }
  .badge-25.t3097 {
    background-position: -475px -350px; }
  .badge-25.t310 {
    background-position: -475px -375px; }
  .badge-25.t3107 {
    background-position: -475px -400px; }
  .badge-25.t3120 {
    background-position: -475px -425px; }
  .badge-25.t3121 {
    background-position: -475px -450px; }
  .badge-25.t3139 {
    background-position: 0px -475px; }
  .badge-25.t3140 {
    background-position: -25px -475px; }
  .badge-25.t3141 {
    background-position: -50px -475px; }
  .badge-25.t3150 {
    background-position: -75px -475px; }
  .badge-25.t3151 {
    background-position: -100px -475px; }
  .badge-25.t3153 {
    background-position: -125px -475px; }
  .badge-25.t3155 {
    background-position: -150px -475px; }
  .badge-25.t3156 {
    background-position: -175px -475px; }
  .badge-25.t3159 {
    background-position: -200px -475px; }
  .badge-25.t3160 {
    background-position: -225px -475px; }
  .badge-25.t3161 {
    background-position: -250px -475px; }
  .badge-25.t3162 {
    background-position: -275px -475px; }
  .badge-25.t3163 {
    background-position: -300px -475px; }
  .badge-25.t318 {
    background-position: -325px -475px; }
  .badge-25.t3221 {
    background-position: -350px -475px; }
  .badge-25.t324 {
    background-position: -375px -475px; }
  .badge-25.t3347 {
    background-position: -400px -475px; }
  .badge-25.t3356 {
    background-position: -425px -475px; }
  .badge-25.t3360 {
    background-position: -450px -475px; }
  .badge-25.t3382 {
    background-position: -475px -475px; }
  .badge-25.t3389 {
    background-position: -500px 0px; }
  .badge-25.t3404 {
    background-position: -500px -25px; }
  .badge-25.t3414 {
    background-position: -500px -50px; }
  .badge-25.t3417 {
    background-position: -500px -75px; }
  .badge-25.t3419 {
    background-position: -500px -100px; }
  .badge-25.t3423 {
    background-position: -500px -125px; }
  .badge-25.t3437 {
    background-position: -500px -150px; }
  .badge-25.t3446 {
    background-position: -500px -175px; }
  .badge-25.t3448 {
    background-position: -500px -200px; }
  .badge-25.t3454 {
    background-position: -500px -225px; }
  .badge-25.t3485 {
    background-position: -500px -250px; }
  .badge-25.t3492 {
    background-position: -500px -275px; }
  .badge-25.t3533 {
    background-position: -500px -300px; }
  .badge-25.t373 {
    background-position: -500px -325px; }
  .badge-25.t375 {
    background-position: -500px -350px; }
  .badge-25.t3751 {
    background-position: -500px -375px; }
  .badge-25.t378 {
    background-position: -500px -400px; }
  .badge-25.t383 {
    background-position: -500px -425px; }
  .badge-25.t385 {
    background-position: -500px -450px; }
  .badge-25.t3869 {
    background-position: -500px -475px; }
  .badge-25.t387 {
    background-position: 0px -500px; }
  .badge-25.t394 {
    background-position: -25px -500px; }
  .badge-25.t4004 {
    background-position: -50px -500px; }
  .badge-25.t4007 {
    background-position: -75px -500px; }
  .badge-25.t401 {
    background-position: -100px -500px; }
  .badge-25.t4094 {
    background-position: -125px -500px; }
  .badge-25.t411 {
    background-position: -150px -500px; }
  .badge-25.t4114 {
    background-position: -175px -500px; }
  .badge-25.t413 {
    background-position: -200px -500px; }
  .badge-25.t414 {
    background-position: -225px -500px; }
  .badge-25.t4153 {
    background-position: -250px -500px; }
  .badge-25.t428 {
    background-position: -275px -500px; }
  .badge-25.t429 {
    background-position: -300px -500px; }
  .badge-25.t434 {
    background-position: -325px -500px; }
  .badge-25.t439 {
    background-position: -350px -500px; }
  .badge-25.t440 {
    background-position: -375px -500px; }
  .badge-25.t445 {
    background-position: -400px -500px; }
  .badge-25.t450 {
    background-position: -425px -500px; }
  .badge-25.t452 {
    background-position: -450px -500px; }
  .badge-25.t453 {
    background-position: -475px -500px; }
  .badge-25.t456 {
    background-position: -500px -500px; }
  .badge-25.t457 {
    background-position: -525px 0px; }
  .badge-25.t463 {
    background-position: -525px -25px; }
  .badge-25.t4660 {
    background-position: -525px -50px; }
  .badge-25.t472 {
    background-position: -525px -75px; }
  .badge-25.t476 {
    background-position: -525px -100px; }
  .badge-25.t479 {
    background-position: -525px -125px; }
  .badge-25.t48 {
    background-position: -525px -150px; }
  .badge-25.t482 {
    background-position: -525px -175px; }
  .badge-25.t485 {
    background-position: -525px -200px; }
  .badge-25.t491 {
    background-position: -525px -225px; }
  .badge-25.t5334 {
    background-position: -525px -250px; }
  .badge-25.t5335 {
    background-position: -525px -275px; }
  .badge-25.t5348 {
    background-position: -525px -300px; }
  .badge-25.t5350 {
    background-position: -525px -325px; }
  .badge-25.t5351 {
    background-position: -525px -350px; }
  .badge-25.t545 {
    background-position: -525px -375px; }
  .badge-25.t5576 {
    background-position: -525px -400px; }
  .badge-25.t573 {
    background-position: -525px -425px; }
  .badge-25.t580 {
    background-position: -525px -450px; }
  .badge-25.t581 {
    background-position: -525px -475px; }
  .badge-25.t585 {
    background-position: -525px -500px; }
  .badge-25.t586 {
    background-position: 0px -525px; }
  .badge-25.t59 {
    background-position: -25px -525px; }
  .badge-25.t591 {
    background-position: -50px -525px; }
  .badge-25.t595 {
    background-position: -75px -525px; }
  .badge-25.t6106 {
    background-position: -100px -525px; }
  .badge-25.t6128 {
    background-position: -125px -525px; }
  .badge-25.t6134 {
    background-position: -150px -525px; }
  .badge-25.t6339 {
    background-position: -175px -525px; }
  .badge-25.t6505 {
    background-position: -200px -525px; }
  .badge-25.t657 {
    background-position: -225px -525px; }
  .badge-25.t67 {
    background-position: -250px -525px; }
  .badge-25.t671 {
    background-position: -275px -525px; }
  .badge-25.t6722 {
    background-position: -300px -525px; }
  .badge-25.t6751 {
    background-position: -325px -525px; }
  .badge-25.t678 {
    background-position: -350px -525px; }
  .badge-25.t679 {
    background-position: -375px -525px; }
  .badge-25.t6796 {
    background-position: -400px -525px; }
  .badge-25.t69 {
    background-position: -425px -525px; }
  .badge-25.t70 {
    background-position: -450px -525px; }
  .badge-25.t7063 {
    background-position: -475px -525px; }
  .badge-25.t71 {
    background-position: -500px -525px; }
  .badge-25.t7140 {
    background-position: -525px -525px; }
  .badge-25.t7292 {
    background-position: -550px 0px; }
  .badge-25.t73 {
    background-position: -550px -25px; }
  .badge-25.t740 {
    background-position: -550px -50px; }
  .badge-25.t76 {
    background-position: -550px -75px; }
  .badge-25.t7601 {
    background-position: -550px -100px; }
  .badge-25.t7608 {
    background-position: -550px -125px; }
  .badge-25.t78 {
    background-position: -550px -150px; }
  .badge-25.t79 {
    background-position: -550px -175px; }
  .badge-25.t803 {
    background-position: -550px -200px; }
  .badge-25.t808 {
    background-position: -550px -225px; }
  .badge-25.t810 {
    background-position: -550px -250px; }
  .badge-25.t820 {
    background-position: -550px -275px; }
  .badge-25.t84 {
    background-position: -550px -300px; }
  .badge-25.t855 {
    background-position: -550px -325px; }
  .badge-25.t857 {
    background-position: -550px -350px; }
  .badge-25.t884 {
    background-position: -550px -375px; }
  .badge-25.t886 {
    background-position: -550px -400px; }
  .badge-25.t887 {
    background-position: -550px -425px; }
  .badge-25.t8889 {
    background-position: -550px -450px; }
  .badge-25.t891 {
    background-position: -550px -475px; }
  .badge-25.t8950 {
    background-position: -550px -500px; }
  .badge-25.t8951 {
    background-position: -550px -525px; }
  .badge-25.t8963 {
    background-position: 0px -550px; }
  .badge-25.t8964 {
    background-position: -25px -550px; }
  .badge-25.t935 {
    background-position: -50px -550px; }
  .badge-25.t936 {
    background-position: -75px -550px; }
  .badge-25.t94 {
    background-position: -100px -550px; }
  .badge-25.t943 {
    background-position: -125px -550px; }
  .badge-25.t9449 {
    background-position: -150px -550px; }
  .badge-25.t949 {
    background-position: -175px -550px; }
  .badge-25.t95 {
    background-position: -200px -550px; }
  .badge-25.t96 {
    background-position: -225px -550px; }
  .badge-25.t988 {
    background-position: -250px -550px; }
  .badge-25.t993 {
    background-position: -275px -550px; }

.badge-50 {
  background-image: url("../pulselive/i/sprites/badges-50-sprite.png");
  background-repeat: no-repeat;
  width: 50px;
  height: 50px;
  display: block;
  background-position: -350px -350px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .badge-50 {
      background-image: url("../pulselive/i/sprites/badges-50-sprite@x2.png");
      background-size: 750px 750px; } }
  .badge-50.ACM {
    background-position: -50px 0px; }
  .badge-50.ADL {
    background-position: -500px -300px; }
  .badge-50.AEK {
    background-position: 0px -50px; }
  .badge-50.AFW {
    background-position: -50px -50px; }
  .badge-50.AJA {
    background-position: -100px 0px; }
  .badge-50.APO {
    background-position: -100px -50px; }
  .badge-50.ARS {
    background-position: 0px -100px; }
  .badge-50.ASI {
    background-position: -50px -100px; }
  .badge-50.AST {
    background-position: -100px -100px; }
  .badge-50.ASY {
    background-position: -150px 0px; }
  .badge-50.ATA {
    background-position: -150px -50px; }
  .badge-50.ATH {
    background-position: -150px -100px; }
  .badge-50.ATM {
    background-position: 0px -150px; }
  .badge-50.AUS {
    background-position: -50px -150px; }
  .badge-50.AVL {
    background-position: -100px -150px; }
  .badge-50.AZ {
    background-position: -150px -150px; }
  .badge-50.B04 {
    background-position: -200px 0px; }
  .badge-50.BAL {
    background-position: -200px -50px; }
  .badge-50.BAR {
    background-position: -200px -100px; }
  .badge-50.BAT {
    background-position: -200px -150px; }
  .badge-50.BBV {
    background-position: 0px -200px; }
  .badge-50.BCN {
    background-position: -50px -200px; }
  .badge-50.BEF {
    background-position: -100px -200px; }
  .badge-50.BEL {
    background-position: -150px -200px; }
  .badge-50.BHA {
    background-position: -200px -200px; }
  .badge-50.BIR {
    background-position: -250px 0px; }
  .badge-50.BJK {
    background-position: -250px -50px; }
  .badge-50.BLB {
    background-position: -250px -100px; }
  .badge-50.BLP {
    background-position: -250px -150px; }
  .badge-50.BMG {
    background-position: -250px -200px; }
  .badge-50.BOL {
    background-position: 0px -250px; }
  .badge-50.BOR {
    background-position: -50px -250px; }
  .badge-50.BOU {
    background-position: -100px -250px; }
  .badge-50.BRA {
    background-position: -150px -250px; }
  .badge-50.BRE {
    background-position: -200px -250px; }
  .badge-50.BRG {
    background-position: -250px -250px; }
  .badge-50.BRI {
    background-position: -300px 0px; }
  .badge-50.BRR {
    background-position: -300px -50px; }
  .badge-50.BRU {
    background-position: -300px -100px; }
  .badge-50.BRW {
    background-position: -300px -150px; }
  .badge-50.BRY {
    background-position: -300px -200px; }
  .badge-50.BSC {
    background-position: -300px -250px; }
  .badge-50.BSL {
    background-position: 0px -300px; }
  .badge-50.BUR {
    background-position: -50px -300px; }
  .badge-50.BVB {
    background-position: -100px -300px; }
  .badge-50.CAR {
    background-position: -150px -300px; }
  .badge-50.CEL {
    background-position: -200px -300px; }
  .badge-50.CHA {
    background-position: -250px -300px; }
  .badge-50.CHE {
    background-position: -300px -300px; }
  .badge-50.CHF {
    background-position: -350px 0px; }
  .badge-50.CHT {
    background-position: -350px -50px; }
  .badge-50.CLV {
    background-position: -350px -100px; }
  .badge-50.CMU {
    background-position: -350px -150px; }
  .badge-50.COU {
    background-position: -350px -200px; }
  .badge-50.COV {
    background-position: -350px -250px; }
  .badge-50.CPH {
    background-position: -350px -300px; }
  .badge-50.CRE {
    background-position: 0px -350px; }
  .badge-50.CRW {
    background-position: -50px -350px; }
  .badge-50.CRY {
    background-position: -100px -350px; }
  .badge-50.CSK {
    background-position: -150px -350px; }
  .badge-50.CUT {
    background-position: -200px -350px; }
  .badge-50.CZV {
    background-position: -250px -350px; }
  .badge-50.DAG {
    background-position: -300px -350px; }
  .badge-50.DER {
    background-position: -400px 0px; }
  .badge-50.DER-new {
    background-position: -400px -50px; }
  .badge-50.DMK {
    background-position: -400px -100px; }
  .badge-50.DND {
    background-position: -400px -150px; }
  .badge-50.DNR {
    background-position: -400px -200px; }
  .badge-50.DON {
    background-position: -400px -250px; }
  .badge-50.DYK {
    background-position: -400px -300px; }
  .badge-50.DZG {
    background-position: -400px -350px; }
  .badge-50.EAS {
    background-position: 0px -400px; }
  .badge-50.EVE {
    background-position: -50px -400px; }
  .badge-50.EXE {
    background-position: -100px -400px; }
  .badge-50.FCA {
    background-position: -150px -400px; }
  .badge-50.FCB {
    background-position: -200px -400px; }
  .badge-50.FCL {
    background-position: -250px -400px; }
  .badge-50.FCSM {
    background-position: -300px -400px; }
  .badge-50.FEN {
    background-position: -350px -400px; }
  .badge-50.FEY {
    background-position: -400px -400px; }
  .badge-50.FGR {
    background-position: -450px 0px; }
  .badge-50.FIO {
    background-position: -450px -50px; }
  .badge-50.FKQ {
    background-position: -450px -100px; }
  .badge-50.FKV {
    background-position: -450px -150px; }
  .badge-50.FLE {
    background-position: -450px -200px; }
  .badge-50.FUL {
    background-position: -450px -250px; }
  .badge-50.GAL {
    background-position: -450px -300px; }
  .badge-50.GIL {
    background-position: -450px -350px; }
  .badge-50.GRI {
    background-position: -450px -400px; }
  .badge-50.GRO {
    background-position: 0px -450px; }
  .badge-50.HAL {
    background-position: -50px -450px; }
  .badge-50.HBS {
    background-position: -100px -450px; }
  .badge-50.HOF {
    background-position: -150px -450px; }
  .badge-50.HUD {
    background-position: -200px -450px; }
  .badge-50.HUL {
    background-position: -250px -450px; }
  .badge-50.IBA {
    background-position: -300px -450px; }
  .badge-50.IPS {
    background-position: -350px -450px; }
  .badge-50.JUV {
    background-position: -400px -450px; }
  .badge-50.KAA {
    background-position: -450px -450px; }
  .badge-50.KOE {
    background-position: -500px 0px; }
  .badge-50.KRA {
    background-position: -500px -50px; }
  .badge-50.KYS {
    background-position: -500px -100px; }
  .badge-50.LAZ {
    background-position: -500px -150px; }
  .badge-50.LEE {
    background-position: -500px -200px; }
  .badge-50.LEG {
    background-position: -500px -250px; }
  .badge-50.LEI {
    background-position: 0px 0px; }
  .badge-50.LEP {
    background-position: -500px -350px; }
  .badge-50.LIB {
    background-position: -500px -400px; }
  .badge-50.LIN {
    background-position: -500px -450px; }
  .badge-50.LIV {
    background-position: 0px -500px; }
  .badge-50.LKM {
    background-position: -50px -500px; }
  .badge-50.LNO {
    background-position: -100px -500px; }
  .badge-50.LOK {
    background-position: -150px -500px; }
  .badge-50.LUD {
    background-position: -200px -500px; }
  .badge-50.LUT {
    background-position: -250px -500px; }
  .badge-50.LYN {
    background-position: -300px -500px; }
  .badge-50.M05 {
    background-position: -350px -500px; }
  .badge-50.MAN {
    background-position: -400px -500px; }
  .badge-50.MAR {
    background-position: -450px -500px; }
  .badge-50.MCH {
    background-position: -500px -500px; }
  .badge-50.MCI {
    background-position: -550px 0px; }
  .badge-50.MCO {
    background-position: -550px -50px; }
  .badge-50.MFF {
    background-position: -550px -100px; }
  .badge-50.MID {
    background-position: -550px -150px; }
  .badge-50.MIL {
    background-position: -550px -200px; }
  .badge-50.MKD {
    background-position: -550px -250px; }
  .badge-50.MOL {
    background-position: -550px -300px; }
  .badge-50.MOR {
    background-position: -550px -350px; }
  .badge-50.MTA {
    background-position: -550px -400px; }
  .badge-50.MUN {
    background-position: -550px -450px; }
  .badge-50.NAP {
    background-position: -550px -500px; }
  .badge-50.NEW {
    background-position: 0px -550px; }
  .badge-50.NFO {
    background-position: -50px -550px; }
  .badge-50.NHT {
    background-position: -100px -550px; }
  .badge-50.NIC {
    background-position: -150px -550px; }
  .badge-50.NKM {
    background-position: -200px -550px; }
  .badge-50.NOR {
    background-position: -250px -550px; }
  .badge-50.NOT {
    background-position: -300px -550px; }
  .badge-50.NWP {
    background-position: -350px -550px; }
  .badge-50.OFK {
    background-position: -400px -550px; }
  .badge-50.OLD {
    background-position: -450px -550px; }
  .badge-50.OLY {
    background-position: -500px -550px; }
  .badge-50.OSM {
    background-position: -550px -550px; }
  .badge-50.OXF {
    background-position: -600px 0px; }
  .badge-50.PAO {
    background-position: -600px -50px; }
  .badge-50.PBG {
    background-position: -600px -100px; }
  .badge-50.PET {
    background-position: -600px -150px; }
  .badge-50.PLY {
    background-position: -600px -200px; }
  .badge-50.PLZ {
    background-position: -600px -250px; }
  .badge-50.PNE {
    background-position: -600px -300px; }
  .badge-50.POR {
    background-position: -600px -350px; }
  .badge-50.PSG {
    background-position: -600px -400px; }
  .badge-50.PSV {
    background-position: -600px -450px; }
  .badge-50.PTO {
    background-position: -600px -500px; }
  .badge-50.PTV {
    background-position: -600px -550px; }
  .badge-50.QAB {
    background-position: 0px -600px; }
  .badge-50.QPR {
    background-position: -50px -600px; }
  .badge-50.RAP {
    background-position: -100px -600px; }
  .badge-50.RBL {
    background-position: -150px -600px; }
  .badge-50.RDG {
    background-position: -200px -600px; }
  .badge-50.RMA {
    background-position: -250px -600px; }
  .badge-50.RMD {
    background-position: -300px -600px; }
  .badge-50.ROC {
    background-position: -350px -600px; }
  .badge-50.RSB {
    background-position: -400px -600px; }
  .badge-50.RSO {
    background-position: -450px -600px; }
  .badge-50.RSV {
    background-position: -500px -600px; }
  .badge-50.RTH {
    background-position: -550px -600px; }
  .badge-50.RUB {
    background-position: -600px -600px; }
  .badge-50.S04 {
    background-position: -650px 0px; }
  .badge-50.SBR {
    background-position: -650px -50px; }
  .badge-50.SCL {
    background-position: -650px -100px; }
  .badge-50.SCU {
    background-position: -650px -150px; }
  .badge-50.SDK {
    background-position: -650px -200px; }
  .badge-50.SEV {
    background-position: -650px -250px; }
  .badge-50.SHR {
    background-position: -650px -300px; }
  .badge-50.SHU {
    background-position: -650px -350px; }
  .badge-50.SHW {
    background-position: -650px -400px; }
  .badge-50.SIO {
    background-position: -650px -450px; }
  .badge-50.SKE {
    background-position: -650px -500px; }
  .badge-50.SOU {
    background-position: -650px -550px; }
  .badge-50.SPP {
    background-position: -650px -600px; }
  .badge-50.SPR {
    background-position: 0px -650px; }
  .badge-50.SSL {
    background-position: -50px -650px; }
  .badge-50.STE {
    background-position: -100px -650px; }
  .badge-50.STK {
    background-position: -150px -650px; }
  .badge-50.STO {
    background-position: -200px -650px; }
  .badge-50.STU {
    background-position: -250px -650px; }
  .badge-50.STV {
    background-position: -300px -650px; }
  .badge-50.SUN {
    background-position: -350px -650px; }
  .badge-50.SUT {
    background-position: -400px -650px; }
  .badge-50.SWA {
    background-position: -450px -650px; }
  .badge-50.SWI {
    background-position: -500px -650px; }
  .badge-50.TOT {
    background-position: -600px -650px; }
  .badge-50.VAL {
    background-position: -650px -650px; }
  .badge-50.VIL {
    background-position: -700px 0px; }
  .badge-50.VIT {
    background-position: -700px -50px; }
  .badge-50.VTG {
    background-position: -700px -100px; }
  .badge-50.WAT {
    background-position: -700px -150px; }
  .badge-50.WBA {
    background-position: -700px -200px; }
  .badge-50.WHU {
    background-position: -700px -250px; }
  .badge-50.WIG {
    background-position: -700px -300px; }
  .badge-50.WIM {
    background-position: -700px -350px; }
  .badge-50.WLS {
    background-position: -700px -400px; }
  .badge-50.WOB {
    background-position: -700px -450px; }
  .badge-50.WOL {
    background-position: -700px -500px; }
  .badge-50.WYC {
    background-position: -700px -550px; }
  .badge-50.YEO {
    background-position: -700px -600px; }
  .badge-50.ZLN {
    background-position: -700px -650px; }
  .badge-50.ZNT {
    background-position: 0px -700px; }
  .badge-50.ZRL {
    background-position: -50px -700px; }
  .badge-50.default {
    background-position: -350px -350px; }
  .badge-50.t185 {
    background-position: -550px -650px; }

.badge-100 {
  background-image: url("../pulselive/i/sprites/badges-100-sprite.png");
  background-repeat: no-repeat;
  width: 100px;
  height: 100px;
  display: block;
  background-position: -700px -700px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .badge-100 {
      background-image: url("../pulselive/i/sprites/badges-100-sprite@x2.png");
      background-size: 1500px 1500px; } }
  .badge-100.ACM {
    background-position: -100px 0px; }
  .badge-100.ADL {
    background-position: -1000px -600px; }
  .badge-100.AEK {
    background-position: 0px -100px; }
  .badge-100.AFW {
    background-position: -100px -100px; }
  .badge-100.AJA {
    background-position: -200px 0px; }
  .badge-100.APO {
    background-position: -200px -100px; }
  .badge-100.ARS {
    background-position: 0px -200px; }
  .badge-100.ASI {
    background-position: -100px -200px; }
  .badge-100.AST {
    background-position: -200px -200px; }
  .badge-100.ASY {
    background-position: -300px 0px; }
  .badge-100.ATA {
    background-position: -300px -100px; }
  .badge-100.ATH {
    background-position: -300px -200px; }
  .badge-100.ATM {
    background-position: 0px -300px; }
  .badge-100.AUS {
    background-position: -100px -300px; }
  .badge-100.AVL {
    background-position: -200px -300px; }
  .badge-100.AZ {
    background-position: -300px -300px; }
  .badge-100.B04 {
    background-position: -400px 0px; }
  .badge-100.BAL {
    background-position: -400px -100px; }
  .badge-100.BAR {
    background-position: -400px -200px; }
  .badge-100.BAT {
    background-position: -400px -300px; }
  .badge-100.BBV {
    background-position: 0px -400px; }
  .badge-100.BCN {
    background-position: -100px -400px; }
  .badge-100.BEF {
    background-position: -200px -400px; }
  .badge-100.BEL {
    background-position: -300px -400px; }
  .badge-100.BHA {
    background-position: -400px -400px; }
  .badge-100.BIR {
    background-position: -500px 0px; }
  .badge-100.BJK {
    background-position: -500px -100px; }
  .badge-100.BLB {
    background-position: -500px -200px; }
  .badge-100.BLP {
    background-position: -500px -300px; }
  .badge-100.BMG {
    background-position: -500px -400px; }
  .badge-100.BOL {
    background-position: 0px -500px; }
  .badge-100.BOR {
    background-position: -100px -500px; }
  .badge-100.BOU {
    background-position: -200px -500px; }
  .badge-100.BRA {
    background-position: -300px -500px; }
  .badge-100.BRE {
    background-position: -400px -500px; }
  .badge-100.BRG {
    background-position: -500px -500px; }
  .badge-100.BRI {
    background-position: -600px 0px; }
  .badge-100.BRR {
    background-position: -600px -100px; }
  .badge-100.BRU {
    background-position: -600px -200px; }
  .badge-100.BRW {
    background-position: -600px -300px; }
  .badge-100.BRY {
    background-position: -600px -400px; }
  .badge-100.BSC {
    background-position: -600px -500px; }
  .badge-100.BSL {
    background-position: 0px -600px; }
  .badge-100.BUR {
    background-position: -100px -600px; }
  .badge-100.BVB {
    background-position: -200px -600px; }
  .badge-100.CAR {
    background-position: -300px -600px; }
  .badge-100.CEL {
    background-position: -400px -600px; }
  .badge-100.CHA {
    background-position: -500px -600px; }
  .badge-100.CHE {
    background-position: -600px -600px; }
  .badge-100.CHF {
    background-position: -700px 0px; }
  .badge-100.CHT {
    background-position: -700px -100px; }
  .badge-100.CLV {
    background-position: -700px -200px; }
  .badge-100.CMU {
    background-position: -700px -300px; }
  .badge-100.COU {
    background-position: -700px -400px; }
  .badge-100.COV {
    background-position: -700px -500px; }
  .badge-100.CPH {
    background-position: -700px -600px; }
  .badge-100.CRE {
    background-position: 0px -700px; }
  .badge-100.CRW {
    background-position: -100px -700px; }
  .badge-100.CRY {
    background-position: -200px -700px; }
  .badge-100.CSK {
    background-position: -300px -700px; }
  .badge-100.CUT {
    background-position: -400px -700px; }
  .badge-100.CZV {
    background-position: -500px -700px; }
  .badge-100.DAG {
    background-position: -600px -700px; }
  .badge-100.DER {
    background-position: -800px 0px; }
  .badge-100.DER-new {
    background-position: -800px -100px; }
  .badge-100.DMK {
    background-position: -800px -200px; }
  .badge-100.DND {
    background-position: -800px -300px; }
  .badge-100.DNR {
    background-position: -800px -400px; }
  .badge-100.DON {
    background-position: -800px -500px; }
  .badge-100.DYK {
    background-position: -800px -600px; }
  .badge-100.DZG {
    background-position: -800px -700px; }
  .badge-100.EAS {
    background-position: 0px -800px; }
  .badge-100.EVE {
    background-position: -100px -800px; }
  .badge-100.EXE {
    background-position: -200px -800px; }
  .badge-100.FCA {
    background-position: -300px -800px; }
  .badge-100.FCB {
    background-position: -400px -800px; }
  .badge-100.FCL {
    background-position: -500px -800px; }
  .badge-100.FCSM {
    background-position: -600px -800px; }
  .badge-100.FEN {
    background-position: -700px -800px; }
  .badge-100.FEY {
    background-position: -800px -800px; }
  .badge-100.FGR {
    background-position: -900px 0px; }
  .badge-100.FIO {
    background-position: -900px -100px; }
  .badge-100.FKQ {
    background-position: -900px -200px; }
  .badge-100.FKV {
    background-position: -900px -300px; }
  .badge-100.FLE {
    background-position: -900px -400px; }
  .badge-100.FUL {
    background-position: -900px -500px; }
  .badge-100.GAL {
    background-position: -900px -600px; }
  .badge-100.GIL {
    background-position: -900px -700px; }
  .badge-100.GRI {
    background-position: -900px -800px; }
  .badge-100.GRO {
    background-position: 0px -900px; }
  .badge-100.HAL {
    background-position: -100px -900px; }
  .badge-100.HBS {
    background-position: -200px -900px; }
  .badge-100.HOF {
    background-position: -300px -900px; }
  .badge-100.HUD {
    background-position: -400px -900px; }
  .badge-100.HUL {
    background-position: -500px -900px; }
  .badge-100.IBA {
    background-position: -600px -900px; }
  .badge-100.IPS {
    background-position: -700px -900px; }
  .badge-100.JUV {
    background-position: -800px -900px; }
  .badge-100.KAA {
    background-position: -900px -900px; }
  .badge-100.KOE {
    background-position: -1000px 0px; }
  .badge-100.KRA {
    background-position: -1000px -100px; }
  .badge-100.KYS {
    background-position: -1000px -200px; }
  .badge-100.LAZ {
    background-position: -1000px -300px; }
  .badge-100.LEE {
    background-position: -1000px -400px; }
  .badge-100.LEG {
    background-position: -1000px -500px; }
  .badge-100.LEI {
    background-position: 0px 0px; }
  .badge-100.LEP {
    background-position: -1000px -700px; }
  .badge-100.LIB {
    background-position: -1000px -800px; }
  .badge-100.LIN {
    background-position: -1000px -900px; }
  .badge-100.LIV {
    background-position: 0px -1000px; }
  .badge-100.LKM {
    background-position: -100px -1000px; }
  .badge-100.LNO {
    background-position: -200px -1000px; }
  .badge-100.LOK {
    background-position: -300px -1000px; }
  .badge-100.LUD {
    background-position: -400px -1000px; }
  .badge-100.LUT {
    background-position: -500px -1000px; }
  .badge-100.LYN {
    background-position: -600px -1000px; }
  .badge-100.M05 {
    background-position: -700px -1000px; }
  .badge-100.MAN {
    background-position: -800px -1000px; }
  .badge-100.MAR {
    background-position: -900px -1000px; }
  .badge-100.MCH {
    background-position: -1000px -1000px; }
  .badge-100.MCI {
    background-position: -1100px 0px; }
  .badge-100.MCO {
    background-position: -1100px -100px; }
  .badge-100.MFF {
    background-position: -1100px -200px; }
  .badge-100.MID {
    background-position: -1100px -300px; }
  .badge-100.MIL {
    background-position: -1100px -400px; }
  .badge-100.MKD {
    background-position: -1100px -500px; }
  .badge-100.MOL {
    background-position: -1100px -600px; }
  .badge-100.MOR {
    background-position: -1100px -700px; }
  .badge-100.MTA {
    background-position: -1100px -800px; }
  .badge-100.MUN {
    background-position: -1100px -900px; }
  .badge-100.NAP {
    background-position: -1100px -1000px; }
  .badge-100.NEW {
    background-position: 0px -1100px; }
  .badge-100.NFO {
    background-position: -100px -1100px; }
  .badge-100.NHT {
    background-position: -200px -1100px; }
  .badge-100.NIC {
    background-position: -300px -1100px; }
  .badge-100.NKM {
    background-position: -400px -1100px; }
  .badge-100.NOR {
    background-position: -500px -1100px; }
  .badge-100.NOT {
    background-position: -600px -1100px; }
  .badge-100.NWP {
    background-position: -700px -1100px; }
  .badge-100.OFK {
    background-position: -800px -1100px; }
  .badge-100.OLD {
    background-position: -900px -1100px; }
  .badge-100.OLY {
    background-position: -1000px -1100px; }
  .badge-100.OSM {
    background-position: -1100px -1100px; }
  .badge-100.OXF {
    background-position: -1200px 0px; }
  .badge-100.PAO {
    background-position: -1200px -100px; }
  .badge-100.PBG {
    background-position: -1200px -200px; }
  .badge-100.PET {
    background-position: -1200px -300px; }
  .badge-100.PLY {
    background-position: -1200px -400px; }
  .badge-100.PLZ {
    background-position: -1200px -500px; }
  .badge-100.PNE {
    background-position: -1200px -600px; }
  .badge-100.POR {
    background-position: -1200px -700px; }
  .badge-100.PSG {
    background-position: -1200px -800px; }
  .badge-100.PSV {
    background-position: -1200px -900px; }
  .badge-100.PTO {
    background-position: -1200px -1000px; }
  .badge-100.PTV {
    background-position: -1200px -1100px; }
  .badge-100.QAB {
    background-position: 0px -1200px; }
  .badge-100.QPR {
    background-position: -100px -1200px; }
  .badge-100.RAP {
    background-position: -200px -1200px; }
  .badge-100.RBL {
    background-position: -300px -1200px; }
  .badge-100.RDG {
    background-position: -400px -1200px; }
  .badge-100.RMA {
    background-position: -500px -1200px; }
  .badge-100.RMD {
    background-position: -600px -1200px; }
  .badge-100.ROC {
    background-position: -700px -1200px; }
  .badge-100.RSB {
    background-position: -800px -1200px; }
  .badge-100.RSO {
    background-position: -900px -1200px; }
  .badge-100.RSV {
    background-position: -1000px -1200px; }
  .badge-100.RTH {
    background-position: -1100px -1200px; }
  .badge-100.RUB {
    background-position: -1200px -1200px; }
  .badge-100.S04 {
    background-position: -1300px 0px; }
  .badge-100.SBR {
    background-position: -1300px -100px; }
  .badge-100.SCL {
    background-position: -1300px -200px; }
  .badge-100.SCU {
    background-position: -1300px -300px; }
  .badge-100.SDK {
    background-position: -1300px -400px; }
  .badge-100.SEV {
    background-position: -1300px -500px; }
  .badge-100.SHR {
    background-position: -1300px -600px; }
  .badge-100.SHU {
    background-position: -1300px -700px; }
  .badge-100.SHW {
    background-position: -1300px -800px; }
  .badge-100.SIO {
    background-position: -1300px -900px; }
  .badge-100.SKE {
    background-position: -1300px -1000px; }
  .badge-100.SOU {
    background-position: -1300px -1100px; }
  .badge-100.SPP {
    background-position: -1300px -1200px; }
  .badge-100.SPR {
    background-position: 0px -1300px; }
  .badge-100.SSL {
    background-position: -100px -1300px; }
  .badge-100.STE {
    background-position: -200px -1300px; }
  .badge-100.STK {
    background-position: -300px -1300px; }
  .badge-100.STO {
    background-position: -400px -1300px; }
  .badge-100.STU {
    background-position: -500px -1300px; }
  .badge-100.STV {
    background-position: -600px -1300px; }
  .badge-100.SUN {
    background-position: -700px -1300px; }
  .badge-100.SUT {
    background-position: -800px -1300px; }
  .badge-100.SWA {
    background-position: -900px -1300px; }
  .badge-100.SWI {
    background-position: -1000px -1300px; }
  .badge-100.TOT {
    background-position: -1200px -1300px; }
  .badge-100.VAL {
    background-position: -1300px -1300px; }
  .badge-100.VIL {
    background-position: -1400px 0px; }
  .badge-100.VIT {
    background-position: -1400px -100px; }
  .badge-100.VTG {
    background-position: -1400px -200px; }
  .badge-100.WAT {
    background-position: -1400px -300px; }
  .badge-100.WBA {
    background-position: -1400px -400px; }
  .badge-100.WHU {
    background-position: -1400px -500px; }
  .badge-100.WIG {
    background-position: -1400px -600px; }
  .badge-100.WIM {
    background-position: -1400px -700px; }
  .badge-100.WLS {
    background-position: -1400px -800px; }
  .badge-100.WOB {
    background-position: -1400px -900px; }
  .badge-100.WOL {
    background-position: -1400px -1000px; }
  .badge-100.WYC {
    background-position: -1400px -1100px; }
  .badge-100.YEO {
    background-position: -1400px -1200px; }
  .badge-100.ZLN {
    background-position: -1400px -1300px; }
  .badge-100.ZNT {
    background-position: 0px -1400px; }
  .badge-100.ZRL {
    background-position: -100px -1400px; }
  .badge-100.default {
    background-position: -700px -700px; }
  .badge-100.t185 {
    background-position: -1100px -1300px; }

.icn.arrow-increase {
  width: 56px;
  height: 69px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") 0px 0px no-repeat; }

.logo.arrow-increase {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 56px;
  height: 69px;
  background-position: 0px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-increase {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrow-increasesmall {
  width: 26px;
  height: 47px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") -56px 0px no-repeat; }

.logo.arrow-increasesmall {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 26px;
  height: 47px;
  background-position: -56px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-increasesmall {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrow-left {
  width: 9px;
  height: 8px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") -82px -8px no-repeat; }

.logo.arrow-left {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 9px;
  height: 8px;
  background-position: -82px -8px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-left {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrow-leftwhite {
  width: 9px;
  height: 8px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") -82px 0px no-repeat; }

.logo.arrow-leftwhite {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 9px;
  height: 8px;
  background-position: -82px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-leftwhite {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrow-right {
  width: 9px;
  height: 8px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") -71px -47px no-repeat; }

.logo.arrow-right {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 9px;
  height: 8px;
  background-position: -71px -47px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-right {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrow-rightdark {
  width: 9px;
  height: 8px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") -71px -58px no-repeat; }

.logo.arrow-rightdark {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 9px;
  height: 8px;
  background-position: -71px -58px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-rightdark {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrow-rightgreylg {
  width: 15px;
  height: 11px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") -56px -58px no-repeat; }

.logo.arrow-rightgreylg {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 15px;
  height: 11px;
  background-position: -56px -58px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-rightgreylg {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrow-rightpink {
  width: 12px;
  height: 7px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") -54px -69px no-repeat; }

.logo.arrow-rightpink {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 12px;
  height: 7px;
  background-position: -54px -69px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-rightpink {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrow-rightpurple {
  width: 15px;
  height: 9px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") -24px -69px no-repeat; }

.logo.arrow-rightpurple {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 15px;
  height: 9px;
  background-position: -24px -69px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-rightpurple {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrow-rightwhite {
  width: 15px;
  height: 9px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") -39px -69px no-repeat; }

.logo.arrow-rightwhite {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 15px;
  height: 9px;
  background-position: -39px -69px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-rightwhite {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrow-rightwhitelg {
  width: 15px;
  height: 11px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") -56px -47px no-repeat; }

.logo.arrow-rightwhitelg {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 15px;
  height: 11px;
  background-position: -56px -47px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrow-rightwhitelg {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrows-switch {
  width: 12px;
  height: 13px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") 0px -69px no-repeat; }

.logo.arrows-switch {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 12px;
  height: 13px;
  background-position: 0px -69px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrows-switch {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.icn.arrows-switchwhite {
  width: 12px;
  height: 13px;
  background: url("../pulselive/i/sprites/arrows-sprite.png") -12px -69px no-repeat; }

.logo.arrows-switchwhite {
  background: url("../pulselive/i/sprites/arrows-sprite.png") no-repeat;
  width: 12px;
  height: 13px;
  background-position: -12px -69px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.arrows-switchwhite {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }

.flag {
  background-image: url("../pulselive/i/sprites/flags-sprite.png");
  background-repeat: no-repeat;
  width: 30px;
  height: 20px;
  display: inline-block; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .flag {
      background-image: url("../pulselive/i/sprites/flags-sprite@x2.png");
      background-size: 270px 260px; } }
  .flag.AG {
    background-position: -30px 0px; }
  .flag.AL {
    background-position: -180px -40px; }
  .flag.AM {
    background-position: 0px -20px; }
  .flag.AO {
    background-position: -30px -20px; }
  .flag.AQ {
    background-position: 0px -40px; }
  .flag.AR {
    background-position: -30px -40px; }
  .flag.AT {
    background-position: -60px 0px; }
  .flag.AU {
    background-position: -60px -20px; }
  .flag.BA {
    background-position: -60px -40px; }
  .flag.BB {
    background-position: 0px -60px; }
  .flag.BE {
    background-position: -30px -60px; }
  .flag.BF {
    background-position: -60px -60px; }
  .flag.BG {
    background-position: -90px 0px; }
  .flag.BI {
    background-position: -90px -20px; }
  .flag.BJ {
    background-position: -90px -40px; }
  .flag.BM {
    background-position: -90px -60px; }
  .flag.BO {
    background-position: 0px -80px; }
  .flag.BR {
    background-position: -30px -80px; }
  .flag.BS {
    background-position: -60px -80px; }
  .flag.BY {
    background-position: -90px -80px; }
  .flag.CA {
    background-position: 0px -100px; }
  .flag.CD {
    background-position: -30px -100px; }
  .flag.CG {
    background-position: -60px -100px; }
  .flag.CH {
    background-position: -90px -100px; }
  .flag.CI {
    background-position: -120px 0px; }
  .flag.CL {
    background-position: -120px -20px; }
  .flag.CM {
    background-position: -120px -40px; }
  .flag.CN {
    background-position: -120px -60px; }
  .flag.CO {
    background-position: -120px -80px; }
  .flag.CR {
    background-position: -120px -100px; }
  .flag.CV {
    background-position: 0px -120px; }
  .flag.CW {
    background-position: -30px -120px; }
  .flag.CY {
    background-position: -60px -120px; }
  .flag.CZ {
    background-position: -90px -120px; }
  .flag.DE {
    background-position: -120px -120px; }
  .flag.DK {
    background-position: -150px -20px; }
  .flag.DZ {
    background-position: -150px -40px; }
  .flag.EC {
    background-position: -150px -60px; }
  .flag.EE {
    background-position: -150px -80px; }
  .flag.EG {
    background-position: -150px -100px; }
  .flag.ES {
    background-position: -150px -120px; }
  .flag.FI {
    background-position: 0px -140px; }
  .flag.FO {
    background-position: -30px -140px; }
  .flag.FR {
    background-position: -60px -140px; }
  .flag.GA {
    background-position: -90px -140px; }
  .flag.GB-ENG {
    background-position: -120px -140px; }
  .flag.GB-NIR {
    background-position: -150px -140px; }
  .flag.GB-SCT {
    background-position: 0px -160px; }
  .flag.GB-WLS {
    background-position: -30px -160px; }
  .flag.GD {
    background-position: -60px -160px; }
  .flag.GE {
    background-position: -90px -160px; }
  .flag.GH {
    background-position: -120px -160px; }
  .flag.GI {
    background-position: -150px -160px; }
  .flag.GM {
    background-position: -180px 0px; }
  .flag.GN {
    background-position: -180px -20px; }
  .flag.GR {
    background-position: 0px 0px; }
  .flag.GY {
    background-position: -180px -60px; }
  .flag.HN {
    background-position: -180px -80px; }
  .flag.HR {
    background-position: -180px -100px; }
  .flag.HU {
    background-position: -180px -120px; }
  .flag.IE {
    background-position: -180px -140px; }
  .flag.IL {
    background-position: -180px -160px; }
  .flag.IR {
    background-position: 0px -180px; }
  .flag.IS {
    background-position: -30px -180px; }
  .flag.IT {
    background-position: -60px -180px; }
  .flag.JM {
    background-position: -90px -180px; }
  .flag.JP {
    background-position: -120px -180px; }
  .flag.KE {
    background-position: -150px -180px; }
  .flag.KN {
    background-position: -180px -180px; }
  .flag.KR {
    background-position: -210px 0px; }
  .flag.LR {
    background-position: -210px -20px; }
  .flag.LT {
    background-position: -210px -40px; }
  .flag.LV {
    background-position: -210px -60px; }
  .flag.MA {
    background-position: -210px -80px; }
  .flag.ME {
    background-position: -210px -100px; }
  .flag.MK {
    background-position: -210px -120px; }
  .flag.ML {
    background-position: -210px -140px; }
  .flag.MS {
    background-position: -210px -160px; }
  .flag.MX {
    background-position: -210px -180px; }
  .flag.NG {
    background-position: 0px -200px; }
  .flag.NL {
    background-position: -30px -200px; }
  .flag.NO {
    background-position: -60px -200px; }
  .flag.NZ {
    background-position: -90px -200px; }
  .flag.OM {
    background-position: -120px -200px; }
  .flag.PE {
    background-position: -150px -200px; }
  .flag.PH {
    background-position: -180px -200px; }
  .flag.PK {
    background-position: -210px -200px; }
  .flag.PL {
    background-position: 0px -220px; }
  .flag.PS {
    background-position: -30px -220px; }
  .flag.PT {
    background-position: -60px -220px; }
  .flag.PY {
    background-position: -90px -220px; }
  .flag.RO {
    background-position: -120px -220px; }
  .flag.RS {
    background-position: -150px -220px; }
  .flag.RU {
    background-position: -180px -220px; }
  .flag.SC {
    background-position: -210px -220px; }
  .flag.SE {
    background-position: -240px 0px; }
  .flag.SI {
    background-position: -240px -20px; }
  .flag.SK {
    background-position: -240px -40px; }
  .flag.SL {
    background-position: -240px -60px; }
  .flag.SN {
    background-position: -240px -80px; }
  .flag.ST {
    background-position: -240px -100px; }
  .flag.TG {
    background-position: -240px -120px; }
  .flag.TH {
    background-position: -240px -140px; }
  .flag.TN {
    background-position: -240px -160px; }
  .flag.TR {
    background-position: -240px -180px; }
  .flag.TT {
    background-position: -240px -200px; }
  .flag.UA {
    background-position: -240px -220px; }
  .flag.US {
    background-position: 0px -240px; }
  .flag.UY {
    background-position: -30px -240px; }
  .flag.VE {
    background-position: -60px -240px; }
  .flag.ZA {
    background-position: -90px -240px; }
  .flag.ZM {
    background-position: -120px -240px; }
  .flag.default, .flag {
    background-position: -150px 0px; }

.icn.chevron-down-pink {
  width: 9px;
  height: 5px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -64px -59px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-down-pink {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-down-pink {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 9px;
  height: 5px;
  background-position: -64px -59px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-down-pink {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-downblack-normal {
  width: 15px;
  height: 9px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -24px -59px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-downblack-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-downblack-normal {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 15px;
  height: 9px;
  background-position: -24px -59px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-downblack-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-downblack-small {
  width: 10px;
  height: 6px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -54px -59px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-downblack-small {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-downblack-small {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 10px;
  height: 6px;
  background-position: -54px -59px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-downblack-small {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-downgrey-normal {
  width: 16px;
  height: 9px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -68px -25px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-downgrey-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-downgrey-normal {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 16px;
  height: 9px;
  background-position: -68px -25px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-downgrey-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-downgrey-small {
  width: 9px;
  height: 5px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -84px -34px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-downgrey-small {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-downgrey-small {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 9px;
  height: 5px;
  background-position: -84px -34px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-downgrey-small {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-downwhite-normal {
  width: 16px;
  height: 9px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -68px -34px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-downwhite-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-downwhite-normal {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 16px;
  height: 9px;
  background-position: -68px -34px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-downwhite-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-downwhite-small {
  width: 9px;
  height: 5px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -84px -25px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-downwhite-small {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-downwhite-small {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 9px;
  height: 5px;
  background-position: -84px -25px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-downwhite-small {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-dropdown {
  width: 8px;
  height: 5px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -73px -59px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-dropdown {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-dropdown {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 8px;
  height: 5px;
  background-position: -73px -59px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-dropdown {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-large-left {
  width: 34px;
  height: 59px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") 0px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-large-left {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-large-left {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 34px;
  height: 59px;
  background-position: 0px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-large-left {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-large-right {
  width: 34px;
  height: 59px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -34px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-large-right {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-large-right {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 34px;
  height: 59px;
  background-position: -34px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-large-right {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-left {
  width: 9px;
  height: 15px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -68px -43px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-left {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-left {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 9px;
  height: 15px;
  background-position: -68px -43px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-left {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-left-p {
  width: 9px;
  height: 15px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -9px -74px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-left-p {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-left-p {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 9px;
  height: 15px;
  background-position: -9px -74px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-left-p {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-left-w {
  width: 9px;
  height: 15px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -18px -74px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-left-w {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-left-w {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 9px;
  height: 15px;
  background-position: -18px -74px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-left-w {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-right-greylarge {
  width: 25px;
  height: 25px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -68px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-right-greylarge {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-right-greylarge {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 25px;
  height: 25px;
  background-position: -68px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-right-greylarge {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-rightblack-normal {
  width: 9px;
  height: 15px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") 0px -59px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-rightblack-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-rightblack-normal {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 9px;
  height: 15px;
  background-position: 0px -59px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-rightblack-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-rightpurple-normal {
  width: 9px;
  height: 15px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -77px -43px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-rightpurple-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-rightpurple-normal {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 9px;
  height: 15px;
  background-position: -77px -43px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-rightpurple-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-rightpurple-small {
  width: 6px;
  height: 10px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -86px -43px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-rightpurple-small {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-rightpurple-small {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 6px;
  height: 10px;
  background-position: -86px -43px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-rightpurple-small {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-rightwhite-normal {
  width: 9px;
  height: 15px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") 0px -74px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-rightwhite-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-rightwhite-normal {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 9px;
  height: 15px;
  background-position: 0px -74px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-rightwhite-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-rightwhite-small {
  width: 6px;
  height: 10px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -27px -74px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-rightwhite-small {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-rightwhite-small {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 6px;
  height: 10px;
  background-position: -27px -74px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-rightwhite-small {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-upblack-n {
  width: 15px;
  height: 9px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -39px -59px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-upblack-n {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-upblack-n {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 15px;
  height: 9px;
  background-position: -39px -59px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-upblack-n {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.chevron-upwhite-n {
  width: 15px;
  height: 9px;
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -9px -59px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.chevron-upwhite-n {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.logo.chevron-upwhite-n {
  background: url("../pulselive/i/sprites/chevrons-sprite.png") no-repeat;
  width: 15px;
  height: 9px;
  background-position: -9px -59px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.chevron-upwhite-n {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.icn.external-b {
  width: 8px;
  height: 7px;
  background: url("../pulselive/i/sprites/external-sprite.png") -28px -32px no-repeat; }

.logo.external-b {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 8px;
  height: 7px;
  background-position: -28px -32px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-b {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.icn.external-d {
  width: 10px;
  height: 10px;
  background: url("../pulselive/i/sprites/external-sprite.png") -40px -20px no-repeat; }

.logo.external-d {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 10px;
  height: 10px;
  background-position: -40px -20px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-d {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.icn.external-l {
  width: 20px;
  height: 20px;
  background: url("../pulselive/i/sprites/external-sprite.png") 0px 0px no-repeat; }

.logo.external-l {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: 0px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-l {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.icn.external-l-w {
  width: 20px;
  height: 20px;
  background: url("../pulselive/i/sprites/external-sprite.png") -20px 0px no-repeat; }

.logo.external-l-w {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: -20px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-l-w {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.icn.external-p {
  width: 10px;
  height: 10px;
  background: url("../pulselive/i/sprites/external-sprite.png") -40px -10px no-repeat; }

.logo.external-p {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 10px;
  height: 10px;
  background-position: -40px -10px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-p {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.icn.external-promo-p {
  width: 12px;
  height: 12px;
  background: url("../pulselive/i/sprites/external-sprite.png") -12px -20px no-repeat; }

.logo.external-promo-p {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 12px;
  height: 12px;
  background-position: -12px -20px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-promo-p {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.icn.external-promo-w {
  width: 12px;
  height: 12px;
  background: url("../pulselive/i/sprites/external-sprite.png") 0px -20px no-repeat; }

.logo.external-promo-w {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 12px;
  height: 12px;
  background-position: 0px -20px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-promo-w {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.icn.external-sm-g {
  width: 10px;
  height: 9px;
  background: url("../pulselive/i/sprites/external-sprite.png") -10px -32px no-repeat; }

.logo.external-sm-g {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 10px;
  height: 9px;
  background-position: -10px -32px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-sm-g {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.icn.external-sm-pink {
  width: 12px;
  height: 12px;
  background: url("../pulselive/i/sprites/external-sprite.png") -24px -20px no-repeat; }

.logo.external-sm-pink {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 12px;
  height: 12px;
  background-position: -24px -20px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-sm-pink {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.icn.external-sm-ter {
  width: 11px;
  height: 10px;
  background: url("../pulselive/i/sprites/external-sprite.png") -40px 0px no-repeat; }

.logo.external-sm-ter {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 11px;
  height: 10px;
  background-position: -40px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-sm-ter {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.icn.external-ter {
  width: 10px;
  height: 10px;
  background: url("../pulselive/i/sprites/external-sprite.png") 0px -32px no-repeat; }

.logo.external-ter {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 10px;
  height: 10px;
  background-position: 0px -32px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-ter {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.icn.external-w {
  width: 8px;
  height: 8px;
  background: url("../pulselive/i/sprites/external-sprite.png") -20px -32px no-repeat; }

.logo.external-w {
  background: url("../pulselive/i/sprites/external-sprite.png") no-repeat;
  width: 8px;
  height: 8px;
  background-position: -20px -32px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.external-w {
      background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
      background-size: 51px 42px; } }

.flag {
  background-image: url("../pulselive/i/sprites/flags-sprite.png");
  background-repeat: no-repeat;
  width: 30px;
  height: 20px;
  display: inline-block; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .flag {
      background-image: url("../pulselive/i/sprites/flags-sprite@x2.png");
      background-size: 270px 260px; } }
  .flag.AG {
    background-position: -30px 0px; }
  .flag.AL {
    background-position: -180px -40px; }
  .flag.AM {
    background-position: 0px -20px; }
  .flag.AO {
    background-position: -30px -20px; }
  .flag.AQ {
    background-position: 0px -40px; }
  .flag.AR {
    background-position: -30px -40px; }
  .flag.AT {
    background-position: -60px 0px; }
  .flag.AU {
    background-position: -60px -20px; }
  .flag.BA {
    background-position: -60px -40px; }
  .flag.BB {
    background-position: 0px -60px; }
  .flag.BE {
    background-position: -30px -60px; }
  .flag.BF {
    background-position: -60px -60px; }
  .flag.BG {
    background-position: -90px 0px; }
  .flag.BI {
    background-position: -90px -20px; }
  .flag.BJ {
    background-position: -90px -40px; }
  .flag.BM {
    background-position: -90px -60px; }
  .flag.BO {
    background-position: 0px -80px; }
  .flag.BR {
    background-position: -30px -80px; }
  .flag.BS {
    background-position: -60px -80px; }
  .flag.BY {
    background-position: -90px -80px; }
  .flag.CA {
    background-position: 0px -100px; }
  .flag.CD {
    background-position: -30px -100px; }
  .flag.CG {
    background-position: -60px -100px; }
  .flag.CH {
    background-position: -90px -100px; }
  .flag.CI {
    background-position: -120px 0px; }
  .flag.CL {
    background-position: -120px -20px; }
  .flag.CM {
    background-position: -120px -40px; }
  .flag.CN {
    background-position: -120px -60px; }
  .flag.CO {
    background-position: -120px -80px; }
  .flag.CR {
    background-position: -120px -100px; }
  .flag.CV {
    background-position: 0px -120px; }
  .flag.CW {
    background-position: -30px -120px; }
  .flag.CY {
    background-position: -60px -120px; }
  .flag.CZ {
    background-position: -90px -120px; }
  .flag.DE {
    background-position: -120px -120px; }
  .flag.DK {
    background-position: -150px -20px; }
  .flag.DZ {
    background-position: -150px -40px; }
  .flag.EC {
    background-position: -150px -60px; }
  .flag.EE {
    background-position: -150px -80px; }
  .flag.EG {
    background-position: -150px -100px; }
  .flag.ES {
    background-position: -150px -120px; }
  .flag.FI {
    background-position: 0px -140px; }
  .flag.FO {
    background-position: -30px -140px; }
  .flag.FR {
    background-position: -60px -140px; }
  .flag.GA {
    background-position: -90px -140px; }
  .flag.GB-ENG {
    background-position: -120px -140px; }
  .flag.GB-NIR {
    background-position: -150px -140px; }
  .flag.GB-SCT {
    background-position: 0px -160px; }
  .flag.GB-WLS {
    background-position: -30px -160px; }
  .flag.GD {
    background-position: -60px -160px; }
  .flag.GE {
    background-position: -90px -160px; }
  .flag.GH {
    background-position: -120px -160px; }
  .flag.GI {
    background-position: -150px -160px; }
  .flag.GM {
    background-position: -180px 0px; }
  .flag.GN {
    background-position: -180px -20px; }
  .flag.GR {
    background-position: 0px 0px; }
  .flag.GY {
    background-position: -180px -60px; }
  .flag.HN {
    background-position: -180px -80px; }
  .flag.HR {
    background-position: -180px -100px; }
  .flag.HU {
    background-position: -180px -120px; }
  .flag.IE {
    background-position: -180px -140px; }
  .flag.IL {
    background-position: -180px -160px; }
  .flag.IR {
    background-position: 0px -180px; }
  .flag.IS {
    background-position: -30px -180px; }
  .flag.IT {
    background-position: -60px -180px; }
  .flag.JM {
    background-position: -90px -180px; }
  .flag.JP {
    background-position: -120px -180px; }
  .flag.KE {
    background-position: -150px -180px; }
  .flag.KN {
    background-position: -180px -180px; }
  .flag.KR {
    background-position: -210px 0px; }
  .flag.LR {
    background-position: -210px -20px; }
  .flag.LT {
    background-position: -210px -40px; }
  .flag.LV {
    background-position: -210px -60px; }
  .flag.MA {
    background-position: -210px -80px; }
  .flag.ME {
    background-position: -210px -100px; }
  .flag.MK {
    background-position: -210px -120px; }
  .flag.ML {
    background-position: -210px -140px; }
  .flag.MS {
    background-position: -210px -160px; }
  .flag.MX {
    background-position: -210px -180px; }
  .flag.NG {
    background-position: 0px -200px; }
  .flag.NL {
    background-position: -30px -200px; }
  .flag.NO {
    background-position: -60px -200px; }
  .flag.NZ {
    background-position: -90px -200px; }
  .flag.OM {
    background-position: -120px -200px; }
  .flag.PE {
    background-position: -150px -200px; }
  .flag.PH {
    background-position: -180px -200px; }
  .flag.PK {
    background-position: -210px -200px; }
  .flag.PL {
    background-position: 0px -220px; }
  .flag.PS {
    background-position: -30px -220px; }
  .flag.PT {
    background-position: -60px -220px; }
  .flag.PY {
    background-position: -90px -220px; }
  .flag.RO {
    background-position: -120px -220px; }
  .flag.RS {
    background-position: -150px -220px; }
  .flag.RU {
    background-position: -180px -220px; }
  .flag.SC {
    background-position: -210px -220px; }
  .flag.SE {
    background-position: -240px 0px; }
  .flag.SI {
    background-position: -240px -20px; }
  .flag.SK {
    background-position: -240px -40px; }
  .flag.SL {
    background-position: -240px -60px; }
  .flag.SN {
    background-position: -240px -80px; }
  .flag.ST {
    background-position: -240px -100px; }
  .flag.TG {
    background-position: -240px -120px; }
  .flag.TH {
    background-position: -240px -140px; }
  .flag.TN {
    background-position: -240px -160px; }
  .flag.TR {
    background-position: -240px -180px; }
  .flag.TT {
    background-position: -240px -200px; }
  .flag.UA {
    background-position: -240px -220px; }
  .flag.US {
    background-position: 0px -240px; }
  .flag.UY {
    background-position: -30px -240px; }
  .flag.VE {
    background-position: -60px -240px; }
  .flag.ZA {
    background-position: -90px -240px; }
  .flag.ZM {
    background-position: -120px -240px; }
  .flag.default, .flag {
    background-position: -150px 0px; }

.icn.pl-logo-asia-normal {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 230px;
  height: 75px;
  background-position: 0px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-asia-normal {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-asia-sm {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 166px;
  height: 54px;
  background-position: -330px -75px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-asia-sm {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-centered-w-normal {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 287px;
  height: 55px;
  background-position: -230px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-centered-w-normal {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-centered-w-sm {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 150px;
  height: 29px;
  background-position: -226px -155px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-centered-w-sm {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-centered-w-xs {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 104px;
  height: 20px;
  background-position: -230px -55px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-centered-w-xs {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-corporate {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 119px;
  height: 22px;
  background-position: -376px -155px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-corporate {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-footer-normal {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 190px;
  height: 80px;
  background-position: 0px -75px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-footer-normal {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-footer-sm {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 107px;
  height: 45px;
  background-position: -119px -155px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-footer-sm {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-footer-w-sm {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 119px;
  height: 50px;
  background-position: 0px -155px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-footer-w-sm {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-footer-w-xs {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 95px;
  height: 40px;
  background-position: -101px -205px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-footer-w-xs {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-footer-xs {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 85px;
  height: 36px;
  background-position: -291px -205px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-footer-xs {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-live-normal {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 140px;
  height: 75px;
  background-position: -190px -75px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-live-normal {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-live-sm {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 101px;
  height: 54px;
  background-position: 0px -205px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-live-sm {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-m {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 33px;
  height: 42px;
  background-position: -76px -259px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-m {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-mobile-menu {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 95px;
  height: 40px;
  background-position: -196px -205px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-mobile-menu {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-normal {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 38px;
  height: 49px;
  background-position: 0px -259px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-normal {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-sm {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 24px;
  height: 30px;
  background-position: -376px -205px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-sm {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-w-normal {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 38px;
  height: 49px;
  background-position: -38px -259px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-w-normal {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.pl-logo-w-sm {
  background: url("../pulselive/i/sprites/pl-logo-sprite.png") no-repeat;
  width: 24px;
  height: 30px;
  background-position: -400px -205px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.pl-logo-w-sm {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }

.icn.facebook-b {
  width: 8px;
  height: 13px;
  background: url("../pulselive/i/sprites/social-sprite.png") -15px -103px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.facebook-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.facebook-b {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 8px;
  height: 13px;
  background-position: -15px -103px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.facebook-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.facebook-c {
  width: 16px;
  height: 16px;
  background: url("../pulselive/i/sprites/social-sprite.png") -95px -44px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.facebook-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.facebook-c {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 16px;
  height: 16px;
  background-position: -95px -44px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.facebook-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.facebook-comment-b {
  width: 20px;
  height: 18px;
  background: url("../pulselive/i/sprites/social-sprite.png") 0px -71px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.facebook-comment-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.facebook-comment-b {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: 0px -71px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.facebook-comment-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.facebook-comment-w {
  width: 20px;
  height: 18px;
  background: url("../pulselive/i/sprites/social-sprite.png") -42px -49px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.facebook-comment-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.facebook-comment-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -42px -49px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.facebook-comment-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.facebook-lg-c {
  width: 22px;
  height: 22px;
  background: url("../pulselive/i/sprites/social-sprite.png") 0px -49px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.facebook-lg-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.facebook-lg-c {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 22px;
  height: 22px;
  background-position: 0px -49px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.facebook-lg-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.facebook-lg-w {
  width: 22px;
  height: 22px;
  background: url("../pulselive/i/sprites/social-sprite.png") -53px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.facebook-lg-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.facebook-lg-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 22px;
  height: 22px;
  background-position: -53px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.facebook-lg-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.facebook-like-b {
  width: 20px;
  height: 18px;
  background: url("../pulselive/i/sprites/social-sprite.png") -75px -36px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.facebook-like-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.facebook-like-b {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -75px -36px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.facebook-like-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.facebook-like-w {
  width: 20px;
  height: 18px;
  background: url("../pulselive/i/sprites/social-sprite.png") -75px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.facebook-like-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.facebook-like-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -75px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.facebook-like-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.facebook-sm-w {
  width: 5px;
  height: 9px;
  background: url("../pulselive/i/sprites/social-sprite.png") -90px -71px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.facebook-sm-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.facebook-sm-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 5px;
  height: 9px;
  background-position: -90px -71px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.facebook-sm-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.facebook-w {
  width: 16px;
  height: 16px;
  background: url("../pulselive/i/sprites/social-sprite.png") -95px -60px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.facebook-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.facebook-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 16px;
  height: 16px;
  background-position: -95px -60px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.facebook-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.fb {
  width: 17px;
  height: 17px;
  background: url("../pulselive/i/sprites/social-sprite.png") -56px -71px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.fb {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.fb {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 17px;
  height: 17px;
  background-position: -56px -71px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.fb {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.google-b {
  width: 13px;
  height: 13px;
  background: url("../pulselive/i/sprites/social-sprite.png") -115px -90px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.google-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.google-b {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 13px;
  height: 13px;
  background-position: -115px -90px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.google-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.google-c {
  width: 15px;
  height: 15px;
  background: url("../pulselive/i/sprites/social-sprite.png") -115px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.google-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.google-c {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -115px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.google-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.google-w {
  width: 15px;
  height: 15px;
  background: url("../pulselive/i/sprites/social-sprite.png") -115px -60px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.google-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.google-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -115px -60px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.google-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.instagram-b {
  width: 18px;
  height: 18px;
  background: url("../pulselive/i/sprites/social-sprite.png") -38px -71px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.instagram-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.instagram-b {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 18px;
  height: 18px;
  background-position: -38px -71px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.instagram-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.instagram-c {
  width: 15px;
  height: 15px;
  background: url("../pulselive/i/sprites/social-sprite.png") -115px -45px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.instagram-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.instagram-c {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -115px -45px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.instagram-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.instagram-comment-b {
  width: 20px;
  height: 18px;
  background: url("../pulselive/i/sprites/social-sprite.png") -75px -18px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.instagram-comment-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.instagram-comment-b {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -75px -18px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.instagram-comment-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.instagram-comment-w {
  width: 20px;
  height: 18px;
  background: url("../pulselive/i/sprites/social-sprite.png") -22px -49px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.instagram-comment-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.instagram-comment-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 20px;
  height: 18px;
  background-position: -22px -49px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.instagram-comment-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.instagram-m {
  width: 17px;
  height: 17px;
  background: url("../pulselive/i/sprites/social-sprite.png") -73px -71px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.instagram-m {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.instagram-m {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 17px;
  height: 17px;
  background-position: -73px -71px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.instagram-m {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.instagram-sm-w {
  width: 9px;
  height: 9px;
  background: url("../pulselive/i/sprites/social-sprite.png") -30px -89px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.instagram-sm-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.instagram-sm-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 9px;
  height: 9px;
  background-position: -30px -89px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.instagram-sm-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.instagram-w {
  width: 15px;
  height: 15px;
  background: url("../pulselive/i/sprites/social-sprite.png") -115px -30px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.instagram-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.instagram-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -115px -30px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.instagram-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.instagram-white {
  width: 18px;
  height: 18px;
  background: url("../pulselive/i/sprites/social-sprite.png") -20px -71px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.instagram-white {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.instagram-white {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 18px;
  height: 18px;
  background-position: -20px -71px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.instagram-white {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.twitter-b {
  width: 13px;
  height: 12px;
  background: url("../pulselive/i/sprites/social-sprite.png") -17px -89px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.twitter-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.twitter-b {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 13px;
  height: 12px;
  background-position: -17px -89px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.twitter-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.twitter-c {
  width: 18px;
  height: 15px;
  background: url("../pulselive/i/sprites/social-sprite.png") -95px -14px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.twitter-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.twitter-c {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 18px;
  height: 15px;
  background-position: -95px -14px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.twitter-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.twitter-embed {
  width: 28px;
  height: 28px;
  background: url("../pulselive/i/sprites/social-sprite.png") 0px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.twitter-embed {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.twitter-embed {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 28px;
  height: 28px;
  background-position: 0px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.twitter-embed {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.twitter-hi {
  width: 25px;
  height: 21px;
  background: url("../pulselive/i/sprites/social-sprite.png") -25px -28px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.twitter-hi {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.twitter-hi {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 25px;
  height: 21px;
  background-position: -25px -28px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.twitter-hi {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.twitter-lg-c {
  width: 25px;
  height: 21px;
  background: url("../pulselive/i/sprites/social-sprite.png") 0px -28px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.twitter-lg-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.twitter-lg-c {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 25px;
  height: 21px;
  background-position: 0px -28px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.twitter-lg-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.twitter-lg-w {
  width: 25px;
  height: 21px;
  background: url("../pulselive/i/sprites/social-sprite.png") -28px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.twitter-lg-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.twitter-lg-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 25px;
  height: 21px;
  background-position: -28px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.twitter-lg-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.twitter-m {
  width: 17px;
  height: 14px;
  background: url("../pulselive/i/sprites/social-sprite.png") 0px -89px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.twitter-m {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.twitter-m {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 17px;
  height: 14px;
  background-position: 0px -89px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.twitter-m {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.twitter-sm-w {
  width: 9px;
  height: 7px;
  background: url("../pulselive/i/sprites/social-sprite.png") -28px -21px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.twitter-sm-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.twitter-sm-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 9px;
  height: 7px;
  background-position: -28px -21px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.twitter-sm-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.twitter-w {
  width: 18px;
  height: 15px;
  background: url("../pulselive/i/sprites/social-sprite.png") -95px -29px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.twitter-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.twitter-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 18px;
  height: 15px;
  background-position: -95px -29px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.twitter-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.whatsapp {
  width: 15px;
  height: 15px;
  background: url("../pulselive/i/sprites/social-sprite.png") -115px -75px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.whatsapp {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.whatsapp {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -115px -75px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.whatsapp {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.whatsapp-c {
  width: 15px;
  height: 15px;
  background: url("../pulselive/i/sprites/social-sprite.png") 0px -103px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.whatsapp-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.whatsapp-c {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: 0px -103px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.whatsapp-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.whatsapp-w {
  width: 15px;
  height: 15px;
  background: url("../pulselive/i/sprites/social-sprite.png") -115px -15px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.whatsapp-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.whatsapp-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -115px -15px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.whatsapp-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.whatsapplg-w {
  width: 22px;
  height: 22px;
  background: url("../pulselive/i/sprites/social-sprite.png") -53px -22px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.whatsapplg-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.whatsapplg-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 22px;
  height: 22px;
  background-position: -53px -22px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.whatsapplg-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.youtube-b {
  width: 13px;
  height: 15px;
  background: url("../pulselive/i/sprites/social-sprite.png") -62px -49px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.youtube-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.youtube-b {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 13px;
  height: 15px;
  background-position: -62px -49px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.youtube-b {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.youtube-c {
  width: 20px;
  height: 15px;
  background: url("../pulselive/i/sprites/social-sprite.png") -75px -54px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.youtube-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.youtube-c {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 20px;
  height: 15px;
  background-position: -75px -54px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.youtube-c {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.youtube-play {
  width: 18px;
  height: 13px;
  background: url("../pulselive/i/sprites/social-sprite.png") -95px -76px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.youtube-play {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.youtube-play {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 18px;
  height: 13px;
  background-position: -95px -76px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.youtube-play {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.youtube-w {
  width: 20px;
  height: 14px;
  background: url("../pulselive/i/sprites/social-sprite.png") -95px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.youtube-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.logo.youtube-w {
  background: url("../pulselive/i/sprites/social-sprite.png") no-repeat;
  width: 20px;
  height: 14px;
  background-position: -95px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.youtube-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.icn.sponsor-award-barclays-blue {
  width: 81px;
  height: 14px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -229px -344px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-award-barclays-blue {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-award-barclays-blue {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 81px;
  height: 14px;
  background-position: -229px -344px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-award-barclays-blue {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-award-manager {
  width: 81px;
  height: 23px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -100px -318px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-award-manager {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-award-manager {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 81px;
  height: 23px;
  background-position: -100px -318px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-award-manager {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-award-player {
  width: 30px;
  height: 30px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -351px -222px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-award-player {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-award-player {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 30px;
  height: 30px;
  background-position: -351px -222px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-award-player {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-bar-ea {
  width: 72px;
  height: 72px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -160px -50px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-bar-ea {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-bar-ea {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 72px;
  height: 72px;
  background-position: -160px -50px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-bar-ea {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-barclays {
  width: 138px;
  height: 23px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") 0px -266px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-barclays {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-barclays {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 138px;
  height: 23px;
  background-position: 0px -266px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-barclays {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-budweiser {
  width: 115px;
  height: 40px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") 0px -160px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-budweiser {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-budweiser {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 115px;
  height: 40px;
  background-position: 0px -160px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-budweiser {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-cadbury {
  width: 51px;
  height: 47px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -388px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-cadbury {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-cadbury {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 51px;
  height: 47px;
  background-position: -388px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-cadbury {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-carling {
  width: 80px;
  height: 41px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -271px -222px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-carling {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-carling {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 80px;
  height: 41px;
  background-position: -271px -222px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-carling {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-cocacola {
  width: 100px;
  height: 31px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -160px -122px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-cocacola {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-cocacola {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 100px;
  height: 31px;
  background-position: -160px -122px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-cocacola {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-ea-lrg {
  width: 80px;
  height: 80px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") 0px -80px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-ea-lrg {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-ea-lrg {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 80px;
  height: 80px;
  background-position: 0px -80px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-ea-lrg {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-ea-med {
  width: 50px;
  height: 50px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -331px -167px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-ea-med {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-ea-med {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 50px;
  height: 50px;
  background-position: -331px -167px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-ea-med {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-ea-n {
  width: 35px;
  height: 35px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -388px -263px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-ea-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-ea-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 35px;
  height: 35px;
  background-position: -388px -263px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-ea-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-avery-n {
  width: 100px;
  height: 26px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -152px -240px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-avery-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-avery-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 100px;
  height: 26px;
  background-position: -152px -240px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-avery-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-avery-sm {
  width: 100px;
  height: 26px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") 0px -318px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-avery-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-avery-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 100px;
  height: 26px;
  background-position: 0px -318px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-avery-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-barclays-n {
  width: 152px;
  height: 26px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") 0px -240px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-barclays-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-barclays-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 152px;
  height: 26px;
  background-position: 0px -240px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-barclays-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-barclays-sm {
  width: 107px;
  height: 18px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -255px -266px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-barclays-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-barclays-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 107px;
  height: 18px;
  background-position: -255px -266px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-barclays-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-budweiser-n {
  width: 115px;
  height: 40px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") 0px -200px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-budweiser-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-budweiser-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 115px;
  height: 40px;
  background-position: 0px -200px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-budweiser-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-budweiser-sm {
  width: 115px;
  height: 40px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -115px -160px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-budweiser-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-budweiser-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 115px;
  height: 40px;
  background-position: -115px -160px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-budweiser-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-cadbury-n {
  width: 60px;
  height: 55px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -271px -167px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-cadbury-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-cadbury-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 60px;
  height: 55px;
  background-position: -271px -167px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-cadbury-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-cadbury-sm {
  width: 42px;
  height: 39px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -388px -126px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-cadbury-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-cadbury-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 42px;
  height: 39px;
  background-position: -388px -126px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-cadbury-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-carling-n {
  width: 111px;
  height: 50px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -160px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-carling-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-carling-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 111px;
  height: 50px;
  background-position: -160px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-carling-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-carling-sm {
  width: 78px;
  height: 35px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -80px -80px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-carling-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-carling-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 78px;
  height: 35px;
  background-position: -80px -80px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-carling-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-cocacola-n {
  width: 91px;
  height: 29px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") 0px -289px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-cocacola-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-cocacola-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 91px;
  height: 29px;
  background-position: 0px -289px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-cocacola-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-cocacola-sm {
  width: 70px;
  height: 22px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -181px -318px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-cocacola-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-cocacola-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 70px;
  height: 22px;
  background-position: -181px -318px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-cocacola-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-ea-n {
  width: 80px;
  height: 80px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -80px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-ea-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-ea-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 80px;
  height: 80px;
  background-position: -80px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-ea-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-ea-sm {
  width: 80px;
  height: 80px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") 0px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-ea-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-ea-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 80px;
  height: 80px;
  background-position: 0px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-ea-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-nike-n {
  width: 111px;
  height: 39px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -115px -200px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-nike-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-nike-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 111px;
  height: 39px;
  background-position: -115px -200px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-nike-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-nike-sm {
  width: 78px;
  height: 28px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -80px -344px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-nike-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-nike-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 78px;
  height: 28px;
  background-position: -80px -344px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-nike-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-panini-n {
  width: 104px;
  height: 25px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -91px -289px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-panini-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-panini-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 104px;
  height: 25px;
  background-position: -91px -289px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-panini-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-panini-sm {
  width: 96px;
  height: 23px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -195px -289px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-panini-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-panini-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 96px;
  height: 23px;
  background-position: -195px -289px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-panini-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-sporting-n {
  width: 117px;
  height: 33px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -271px 0px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-sporting-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-sporting-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 117px;
  height: 33px;
  background-position: -271px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-sporting-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-sporting-sm {
  width: 82px;
  height: 23px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -291px -289px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-sporting-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-sporting-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 82px;
  height: 23px;
  background-position: -291px -289px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-sporting-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-tag-n {
  width: 63px;
  height: 55px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -271px -112px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-tag-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-tag-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 63px;
  height: 55px;
  background-position: -271px -112px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-tag-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-tag-sm {
  width: 45px;
  height: 39px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -388px -47px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-tag-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-tag-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 45px;
  height: 39px;
  background-position: -388px -47px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-tag-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-topps-n {
  width: 80px;
  height: 44px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -271px -33px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-topps-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-topps-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 80px;
  height: 44px;
  background-position: -271px -33px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-topps-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-footer-topps-sm {
  width: 56px;
  height: 31px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -64px -372px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-footer-topps-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-footer-topps-sm {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 56px;
  height: 31px;
  background-position: -64px -372px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-footer-topps-sm {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-nike-b {
  width: 80px;
  height: 28px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") 0px -344px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-nike-b {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-nike-b {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 80px;
  height: 28px;
  background-position: 0px -344px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-nike-b {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-nike-sm-w {
  width: 29px;
  height: 10px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -388px -328px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-nike-sm-w {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-nike-sm-w {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 29px;
  height: 10px;
  background-position: -388px -328px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-nike-sm-w {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-nike-tick {
  width: 100px;
  height: 35px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -271px -77px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-nike-tick {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-nike-tick {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 100px;
  height: 35px;
  background-position: -271px -77px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-nike-tick {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-nike-w {
  width: 71px;
  height: 25px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -158px -344px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-nike-w {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-nike-w {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 71px;
  height: 25px;
  background-position: -158px -344px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-nike-w {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-placeholder {
  width: 64px;
  height: 33px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") 0px -372px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-placeholder {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-placeholder {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 64px;
  height: 33px;
  background-position: 0px -372px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-placeholder {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-season-award-barclays-n {
  width: 117px;
  height: 20px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -138px -266px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-season-award-barclays-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-season-award-barclays-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 117px;
  height: 20px;
  background-position: -138px -266px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-season-award-barclays-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-season-award-barclays-sml {
  width: 93px;
  height: 16px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -251px -318px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-season-award-barclays-sml {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-season-award-barclays-sml {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 93px;
  height: 16px;
  background-position: -251px -318px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-season-award-barclays-sml {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-season-award-cadbury-n {
  width: 43px;
  height: 40px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -388px -86px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-season-award-cadbury-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-season-award-cadbury-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 43px;
  height: 40px;
  background-position: -388px -86px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-season-award-cadbury-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-season-award-cadbury-sml {
  width: 32px;
  height: 30px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -388px -298px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-season-award-cadbury-sml {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-season-award-cadbury-sml {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 32px;
  height: 30px;
  background-position: -388px -298px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-season-award-cadbury-sml {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-season-award-carling-n {
  width: 60px;
  height: 40px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -80px -115px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-season-award-carling-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-season-award-carling-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 60px;
  height: 40px;
  background-position: -80px -115px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-season-award-carling-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-season-award-carling-sml {
  width: 46px;
  height: 30px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -388px -205px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-season-award-carling-sml {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-season-award-carling-sml {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 46px;
  height: 30px;
  background-position: -388px -205px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-season-award-carling-sml {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-season-award-ea-n {
  width: 40px;
  height: 40px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -388px -165px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-season-award-ea-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-season-award-ea-n {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 40px;
  height: 40px;
  background-position: -388px -165px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-season-award-ea-n {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-season-award-ea-sml {
  width: 30px;
  height: 30px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -351px -33px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-season-award-ea-sml {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-season-award-ea-sml {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 30px;
  height: 30px;
  background-position: -351px -33px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-season-award-ea-sml {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-tag {
  width: 54px;
  height: 47px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -334px -112px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-tag {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-tag {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 54px;
  height: 47px;
  background-position: -334px -112px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-tag {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.sponsor-topps {
  width: 47px;
  height: 28px;
  background: url("../pulselive/i/sprites/sponsors-sprite.png") -388px -235px no-repeat; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .icn.sponsor-topps {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.logo.sponsor-topps {
  background: url("../pulselive/i/sprites/sponsors-sprite.png") no-repeat;
  width: 47px;
  height: 28px;
  background-position: -388px -235px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.sponsor-topps {
      background-image: url("../pulselive/i/sprites/sponsors-sprite@x2.png");
      background-size: 439px 405px; } }

.icn.ball-black {
  width: 15px;
  height: 15px;
  background: url("../pulselive/i/sprites/balls-sprite.png") -20px 0px no-repeat; }

.logo.ball-black {
  background: url("../pulselive/i/sprites/balls-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: -20px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.ball-black {
      background-image: url("../pulselive/i/sprites/balls-sprite@x2.png");
      background-size: 49px 49px; } }

.icn.ball-grey {
  width: 14px;
  height: 14px;
  background: url("../pulselive/i/sprites/balls-sprite.png") -15px -20px no-repeat; }

.logo.ball-grey {
  background: url("../pulselive/i/sprites/balls-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -15px -20px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.ball-grey {
      background-image: url("../pulselive/i/sprites/balls-sprite@x2.png");
      background-size: 49px 49px; } }

.icn.ball-infographic {
  width: 15px;
  height: 15px;
  background: url("../pulselive/i/sprites/balls-sprite.png") 0px -20px no-repeat; }

.logo.ball-infographic {
  background: url("../pulselive/i/sprites/balls-sprite.png") no-repeat;
  width: 15px;
  height: 15px;
  background-position: 0px -20px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.ball-infographic {
      background-image: url("../pulselive/i/sprites/balls-sprite@x2.png");
      background-size: 49px 49px; } }

.icn.ball-largewhite {
  width: 20px;
  height: 20px;
  background: url("../pulselive/i/sprites/balls-sprite.png") 0px 0px no-repeat; }

.logo.ball-largewhite {
  background: url("../pulselive/i/sprites/balls-sprite.png") no-repeat;
  width: 20px;
  height: 20px;
  background-position: 0px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.ball-largewhite {
      background-image: url("../pulselive/i/sprites/balls-sprite@x2.png");
      background-size: 49px 49px; } }

.icn.ball-purple {
  width: 14px;
  height: 14px;
  background: url("../pulselive/i/sprites/balls-sprite.png") -35px 0px no-repeat; }

.logo.ball-purple {
  background: url("../pulselive/i/sprites/balls-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -35px 0px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.ball-purple {
      background-image: url("../pulselive/i/sprites/balls-sprite@x2.png");
      background-size: 49px 49px; } }

.icn.ball-small {
  width: 14px;
  height: 14px;
  background: url("../pulselive/i/sprites/balls-sprite.png") -35px -14px no-repeat; }

.logo.ball-small {
  background: url("../pulselive/i/sprites/balls-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -35px -14px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.ball-small {
      background-image: url("../pulselive/i/sprites/balls-sprite@x2.png");
      background-size: 49px 49px; } }

.icn.ball-smallwhite {
  width: 14px;
  height: 14px;
  background: url("../pulselive/i/sprites/balls-sprite.png") 0px -35px no-repeat; }

.logo.ball-smallwhite {
  background: url("../pulselive/i/sprites/balls-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: 0px -35px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.ball-smallwhite {
      background-image: url("../pulselive/i/sprites/balls-sprite@x2.png");
      background-size: 49px 49px; } }

.icn.ball-white {
  width: 14px;
  height: 14px;
  background: url("../pulselive/i/sprites/balls-sprite.png") -14px -35px no-repeat; }

.logo.ball-white {
  background: url("../pulselive/i/sprites/balls-sprite.png") no-repeat;
  width: 14px;
  height: 14px;
  background-position: -14px -35px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .logo.ball-white {
      background-image: url("../pulselive/i/sprites/balls-sprite@x2.png");
      background-size: 49px 49px; } }

/* Typography */
.light {
  font-family: "PremierSans-Light", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal; }

.heavy {
  font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal; }

.pageTitle {
  font-size: 7.3rem; }
  @media (max-width: 43.75em) {
    .pageTitle {
      font-size: 3.1rem; } }

.sectionTitle {
  font-size: 2.2rem;
  margin-bottom: 2rem; }
  @media (max-width: 43.75em) {
    .sectionTitle {
      font-size: 1.7rem; } }

.subHeader {
  font-size: 2.3rem;
  margin-bottom: 1rem;
  position: relative;
  clear: both; }
  @media (max-width: 43.75em) {
    .subHeader {
      font-size: 1.7rem; } }

h4 {
  font-size: 1.6rem; }

h5 {
  font-size: 1.4rem; }

h6 {
  font-size: 1.2rem; }

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal;
  font-weight: 400; }

p {
  line-height: 1.6;
  color: #242424; }
  p a {
    text-decoration: none;
    color: #e90052; }
    p a:hover {
      text-decoration: underline; }

* {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; }

/* stylelint-disable */
* {
  box-sizing: border-box; }

#mainContent:focus {
  outline: 0; }

h1,
h2,
h3,
h4,
h5,
h6,
p {
  margin-top: 0;
  margin-bottom: 0; }

figure {
  margin: 0; }

ul,
ol {
  padding-left: 0;
  margin-top: 0;
  margin-bottom: 0; }
  ul li,
  ol li {
    list-style-type: none; }

dd {
  margin-left: 0; }

table {
  font-size: inherit; }

b,
strong {
  font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal; }

abbr[title] {
  border: 0;
  cursor: help; }

::-moz-selection {
  background: #e90052;
  color: #fff; }

::selection {
  background: #ff2882;
  color: #fff; }

/* Global */
html {
  font-size: 62.5%;
  max-width: 100%; }

body {
  background: #fff;
  font-family: "PremierSans-Regular", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal;
  color: #242424;
  -webkit-text-size-adjust: 100%;
  font-size: 1.4rem;
  overflow-x: hidden;
  min-width: 20em; }
  body.fixedBody {
    overflow: hidden; }

.left {
  float: left; }

.right {
  float: right; }

.text-centre {
  text-align: center !important; }

.hide {
  display: none !important; }

.visuallyHidden, .tooltipContainer {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px; }

#mainContent {
  clear: both;
  overflow: hidden; }
  @media (min-width: 63.9375em) {
    #mainContent {
      overflow: visible; }
      #mainContent::before {
        content: "";
        display: block; }
      #mainContent::after {
        content: "";
        display: table;
        clear: both; } }

.pageButtons {
  float: right; }
  .pageButtons [class*="btn"] {
    float: left;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    background: #1b5460; }
    .pageButtons [class*="btn"]:not(:first-child) {
      margin-left: 1rem; }
    .pageButtons [class*="btn"] .icn {
      opacity: 0.6; }
    .pageButtons [class*="btn"]:hover {
      background: #103138; }

.pageHeader {
  margin-bottom: 2rem; }
  .pageHeader::before {
    content: "";
    display: block; }
  .pageHeader::after {
    content: "";
    display: table;
    clear: both; }
  .pageHeader .pageTitle {
    float: left; }
  .pageHeader .sectionTitle {
    float: left;
    line-height: 4rem;
    margin-bottom: 0; }
  .pageHeader .btn {
    float: right; }
  .pageHeader .socialShare {
    float: right;
    margin-top: 1.5rem; }
  .pageHeader .titleSub {
    display: block;
    clear: both; }

.toggleContainer .toggleBtn .icn {
  float: right; }

.toggleContainer .toggleContent {
  display: none; }

.toggleContainer.open .chevron-downblack-normal {
  content: "";
  background: url("../pulselive/i/sprites/chevrons-sprite.png") -39px -59px no-repeat;
  width: 15px;
  height: 9px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .toggleContainer.open .chevron-downblack-normal {
      background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
      background-size: 93px 89px; } }

.toggleContainer.open .toggleContent {
  display: block; }

.show-m {
  display: none; }

.show-ms {
  display: none; }

.hide-ms {
  display: block; }

img {
  opacity: 1;
  transition: opacity 0.35s ease-in-out, transform 0.2s; }

@media (max-width: 56.25em) {
  .hide-ms {
    display: none !important; }
  .show-ms {
    display: block !important; } }

@media (max-width: 63.9375em) {
  .hide-m {
    display: none; }
  .show-m {
    display: block; } }

@media (max-width: 25em) {
  .hide-xs {
    display: none; } }

@media (max-width: 43.75em) {
  .hide-s {
    display: none; } }

.marginBottom {
  margin-bottom: 2rem; }

.overlay {
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0; }

.pageOptions {
  margin-bottom: 3rem; }
  .pageOptions .btn {
    float: left; }
  .pageOptions .socialShareHover {
    float: left;
    margin-left: 1rem; }
  @media (max-width: 63.9375em) {
    .pageOptions {
      padding: 0 1rem;
      max-width: 100%;
      margin-bottom: 3rem; } }
  @media (max-width: 43.75em) {
    .pageOptions {
      margin-bottom: 1rem; } }

.divider {
  height: 0.5rem;
  background: #e8e8e8;
  margin-bottom: 5rem;
  border: 0; }

.premiumBox {
  background: linear-gradient(to top, #fafafa, #dbdbdb);
  height: 110px;
  position: relative;
  padding: 0 5px; }

@media (max-width: 63.9375em) {
  .hasFixedSidebar {
    display: flex;
    flex-direction: column; }
  .fixedSidebar {
    order: 2; }
  .sidebarPush {
    order: 1; } }

.noContentContainer {
  background: #37003c;
  color: white;
  margin: 2rem 0;
  position: relative;
  border-radius: 3px;
  overflow: hidden;
  font-size: 1.2rem;
  padding: 1.5rem 2rem; }

/* Grid */
.wrapper {
  max-width: 1376px;
  margin: auto;
  padding-left: 1rem;
  padding-right: 1rem; }
  .wrapper.col-12 {
    float: none; }
    .wrapper.col-12 .col-12,
    .wrapper.col-12 .wrapper.col-12 {
      padding: 0; }
  .wrapper .col-12 {
    padding: 0; }
  .wrapper .col-12,
  .wrapper .wrapper.col-12 {
    padding: 0; }
  @media (max-width: 43.75em) {
    .wrapper {
      padding-left: 0;
      padding-right: 0; }
      .wrapper.col-12 {
        padding-left: 1rem;
        padding-right: 1rem; } }

/* Columns */
[class*="col-"] {
  box-sizing: border-box;
  width: 100%;
  position: relative;
  padding-left: 1rem;
  padding-right: 1rem; }
  [class*="col-"].centered {
    float: none;
    margin: 0 auto; }

[class^="col-1"] {
  width: span(1); }

[class^="col-2"] {
  width: span(2); }

[class^="col-3"] {
  width: span(3); }

[class^="col-4"] {
  width: span(4); }

[class^="col-5"] {
  width: span(5); }

[class^="col-6"] {
  width: span(6); }

[class^="col-7"] {
  width: span(7); }

[class^="col-8"] {
  width: span(8); }

[class^="col-9"] {
  width: span(9); }

[class^="col-10"] {
  width: span(10); }

[class^="col-11"] {
  width: span(11); }

[class^="col-12"] {
  width: span(12); }

@media (max-width: 63.9375em) {
  [class*="col-"] {
    width: span(12); } }

@media (max-width: 63.9375em) and (min-width: 43.75em) {
  .col-1-m {
    width: span(1); }
  .col-2-m {
    width: span(2); }
  .col-3-m {
    width: span(3); }
  .col-4-m {
    width: span(4); }
  .col-5-m {
    width: span(5); }
  .col-6-m {
    width: span(6); }
  .col-7-m {
    width: span(7); }
  .col-8-m {
    width: span(8); }
  .col-9-m {
    width: span(9); }
  .col-10-m {
    width: span(10); }
  .col-11-m {
    width: span(11); }
  .col-12-m {
    width: span(12); } }

@media (max-width: 43.75em) and (min-width: 20em) {
  .col-1-s {
    width: span(1); }
  .col-2-s {
    width: span(2); }
  .col-3-s {
    width: span(3); }
  .col-4-s {
    width: span(4); }
  .col-5-s {
    width: span(5); }
  .col-6-s {
    width: span(6); }
  .col-7-s {
    width: span(7); }
  .col-8-s {
    width: span(8); }
  .col-9-s {
    width: span(9); }
  .col-10-s {
    width: span(10); }
  .col-11-s {
    width: span(11); }
  .col-12-s {
    width: span(12); } }

/* Block Grids */
[class*="block-list"] {
  clear: both;
  margin-left: -0.4rem;
  margin-right: -0.4rem;
  font-size: 0; }
  [class*="block-list"]::before {
    content: "";
    display: block; }
  [class*="block-list"]::after {
    content: "";
    display: table;
    clear: both; }
  [class*="block-list"] > li {
    width: span(12 of 12);
    clear: both;
    margin-bottom: 3rem;
    padding-left: 0.4rem;
    padding-right: 0.4rem;
    display: inline-block;
    vertical-align: top;
    font-size: 1.4rem; }

.block-list-padding {
  margin: 0 -1rem; }
  .block-list-padding li {
    padding: 0 1rem; }

.block-list-1 > li {
  width: span(12 of 12);
  float: none; }

.block-list-2 > li {
  width: span(6 of 12); }

.block-list-3 > li {
  width: span(4 of 12); }

.block-list-4 > li {
  width: span(3 of 12); }

.block-list-5 > li {
  width: 20%; }

@media (max-width: 63.9375em) {
  .block-list-2-m > li {
    width: span(6 of 12); }
  .block-list-3-m > li {
    width: span(4 of 12); }
  .block-list-4-m > li {
    width: span(3 of 12); } }

@media (max-width: 43.75em) {
  .block-list-2 > li,
  .block-list-3 > li,
  .block-list-4 > li {
    width: span(12 of 12);
    float: none; }
  .block-list-1-s > li {
    width: span(12 of 12); }
  .block-list-2-s > li {
    width: span(6 of 12); }
  .block-list-3-s > li {
    width: span(4 of 12); }
  .block-list-4-s > li {
    width: span(3 of 12); } }

@media (max-width: 25em) {
  .block-list-1-xs > li {
    width: span(12 of 12); }
  .block-list-2-xs > li {
    width: span(6 of 12); }
  .block-list-3-xs > li {
    width: span(4 of 12); }
  .block-list-4-xs > li {
    width: span(3 of 12); } }

.col-collapse {
  padding: 0 !important; }

@media (max-width: 43.75em) {
  .col-collapse-mob {
    padding: 0 !important; } }

.flex-grid {
  align-items: stretch;
  display: flex;
  flex-wrap: wrap; }

.fixed-two-col {
  height: calc( 100vh - 110px);
  padding: 0; }
  .fixed-two-col .main-video-col {
    overflow: -moz-scrollbars-none;
    overflow-y: scroll;
    padding-top: 2rem;
    -ms-overflow-style: none; }
    .fixed-two-col .main-video-col::-webkit-scrollbar {
      width: 0 !important; }
  .fixed-two-col > [class*="col-"] {
    padding-left: 0;
    padding-right: 0; }
  .fixed-two-col--dark-bg {
    background: linear-gradient(to bottom right, #300034 0%, #300034 44%, #1c001e 100%);
    color: #ebebe4; }
  .fixed-two-col .fixed-two-col__primary {
    padding: 2rem 6rem; }

.clubNavigation {
  background: #fff;
  position: relative;
  padding: 0.5rem 0 0.5rem 16.5rem;
  z-index: 20; }
  .clubNavigation::before {
    content: "";
    display: block; }
  .clubNavigation::after {
    content: "";
    display: table;
    clear: both; }
  .clubNavigation .clubSitesHeading {
    float: left; }
  .clubNavigation h4 {
    color: #76766f;
    font-size: 1.1rem;
    line-height: 5rem;
    font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal;
    text-transform: uppercase; }
  .clubNavigation .icon {
    display: inline-block;
    vertical-align: middle;
    margin-left: 0.5rem;
    position: relative;
    top: -1px; }
    .clubNavigation .icon::after {
      content: "";
      background: url("../pulselive/i/sprites/external-sprite.png") -10px -32px no-repeat;
      width: 10px;
      height: 9px;
      display: block; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .clubNavigation .icon::after {
          background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
          background-size: 51px 42px; } }
  .clubNavigation .clubList {
    max-width: 130rem;
    margin-left: 7rem;
    padding-right: 3rem; }
    .clubNavigation .clubList::before {
      content: "";
      display: block; }
    .clubNavigation .clubList::after {
      content: "";
      display: table;
      clear: both; }
  .clubNavigation li {
    float: left;
    width: 4.5%; }
  .clubNavigation .badge-25 {
    display: none; }
  .clubNavigation .badge-50 {
    transform: scale(0.6);
    transition: all 0.1s ease-in-out; }
  .clubNavigation a {
    display: table;
    margin: 0 auto;
    padding: 0 1rem;
    border-radius: 100%;
    position: relative; }
    .clubNavigation a:hover .badge-50, .clubNavigation a:focus .badge-50 {
      transform: scale(0.8); }
  .clubNavigation .name {
    display: none; }
  @media (max-width: 1024px) {
    .clubNavigation {
      padding-top: 1.75rem;
      padding-bottom: 1.75rem; }
      .clubNavigation .clubSitesHeading h4 {
        line-height: 2.5rem; }
      .clubNavigation .badge-50 {
        display: none; }
      .clubNavigation .badge-25 {
        display: block; }
      .clubNavigation.open {
        padding-bottom: 0; } }
  @media (max-width: 56.25em) {
    .clubNavigation {
      display: none;
      position: absolute;
      z-index: 20;
      top: 6.2rem;
      bottom: 0;
      left: -100%;
      width: 70%;
      overflow-y: auto;
      padding-top: 0;
      padding-left: 0;
      -webkit-overflow-scrolling: touch; }
      .clubNavigation h4 {
        display: none; }
      .clubNavigation .clubList {
        margin-left: 0;
        padding-right: 0; }
      .clubNavigation li {
        width: 100%;
        border-bottom: 1px solid #e8e8e8;
        line-height: 4rem; }
      .clubNavigation a {
        display: block;
        padding: 0.5rem 1rem;
        border-radius: 0;
        color: #242424;
        text-decoration: none; }
        .clubNavigation a::after {
          display: none; }
        .clubNavigation a:hover {
          transform: none; }
      .clubNavigation .badge-25 {
        display: inline-block;
        vertical-align: middle;
        margin-right: 1rem; }
      .clubNavigation .badge-50 {
        display: none; }
      .clubNavigation .name {
        font-size: 1.2rem;
        display: inline; }
        .clubNavigation .name::after {
          content: "";
          display: inline-block;
          vertical-align: middle;
          margin-left: 0.5rem;
          content: "";
          background: url("../pulselive/i/sprites/external-sprite.png") -10px -32px no-repeat;
          width: 10px;
          height: 9px; } }
      @media (max-width: 56.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 56.25em) and (min-resolution: 192dpi) {
        .clubNavigation .name::after {
          background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
          background-size: 51px 42px; } }
  @media (max-width: 56.25em) {
      .clubNavigation.open {
        display: block; } }
  @media (max-width: 43.75em) {
    .clubNavigation {
      width: 60%; }
      .clubNavigation .wrapper.col-12 {
        padding: 0; } }

@media (max-width: 56.25em) {
  .mastheadOpen .clubNavigation.open {
    left: 30%; } }

@media (max-width: 43.75em) {
  .mastheadOpen .clubNavigation.open {
    left: 40%; } }

.navContainer {
  min-height: 6rem; }

.masthead {
  position: relative;
  z-index: 100;
  min-height: 17rem;
  /* specific selector for overriding display block */
  /* hide submenus for Fantasy, Stats and Video except on mobile */ }
  @media (max-width: 63.9375em) {
    .masthead {
      min-height: 16.2rem; } }
  @media (max-width: 43.75em) {
    .masthead .fantasyUsername {
      display: none; } }
  .masthead .skipTo {
    padding: 1em;
    position: absolute;
    top: -50px;
    left: 1em;
    z-index: 1000;
    color: #fff;
    text-decoration: none;
    border-radius: 0 0 2px 2px;
    transition: 0.2s;
    background: #ff2882; }
    .masthead .skipTo:focus {
      position: absolute;
      top: 0; }
  .masthead .pageLinks {
    float: left; }
    .masthead .pageLinks > li {
      float: left;
      position: relative; }
      .masthead .pageLinks > li.featuredLink .navLink {
        line-height: 1.7rem;
        padding-left: 4rem; }
        .masthead .pageLinks > li.featuredLink .navLink.active {
          background-color: #05f0ff;
          color: #37003c; }
      .masthead .pageLinks > li.fantasy a::after {
        border-bottom-color: #00ff87; }
      .masthead .pageLinks > li.stats a::after {
        border-bottom-color: #eaff04; }
      .masthead .pageLinks > li.video a::after {
        display: none; }
      .masthead .pageLinks > li.open .dropdown {
        transform: scale(1) translateX(-50%);
        visibility: visible; }
      .masthead .pageLinks > li:hover .dropdown {
        transform: scale(1) translateX(-50%);
        visibility: visible; }
  .masthead .pageLinks > li.noDrop .dropdown,
  .masthead .navContainer .mainNav .pageLinks > li.noDrop .dropdown {
    display: none; }
  .masthead .clubs {
    display: none; }
  .masthead a.navLink,
  .masthead .navOption,
  .masthead .pageLinks li,
  .masthead .searchBtn {
    position: relative; }
    .masthead a.navLink::before,
    .masthead .navOption::before,
    .masthead .pageLinks li::before,
    .masthead .searchBtn::before {
      content: "";
      display: block;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 0;
      background: #e90052;
      transition: 0.2s;
      z-index: -1; }
  .masthead a.navLink:hover::before, .masthead a.navLink:focus::before,
  .masthead .navOption:hover::before,
  .masthead .navOption:focus::before {
    height: 5px; }
  .masthead .fantasyLogout {
    font-family: "PremierSans-Regular", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal;
    font-size: 1.3rem;
    line-height: 5rem; }
  .masthead .pageLinks li:focus::before {
    height: 5px; }
  .masthead .pageLinks li:focus.open::before, .masthead .pageLinks li:focus:hover::before {
    height: 0; }
  .masthead .navLink {
    display: block;
    color: #fff;
    text-decoration: none;
    padding: 0 2rem;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    position: relative;
    font-size: 1.5rem;
    font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal; }
    .masthead .navLink .chevron-dropdown {
      margin-left: 0.8rem;
      display: inline-block;
      vertical-align: baseline;
      transform: translateY(-1.5px); }
    .masthead .navLink.mobile {
      display: none; }
    .masthead .navLink.active::before {
      display: none; }
    .masthead .navLink.active::after {
      content: "";
      display: block;
      border: 6px solid transparent;
      border-bottom-color: #fff;
      position: absolute;
      bottom: 0;
      left: 50%;
      margin-left: -6px; }
    .masthead .navLink.featuredLink {
      background-color: #05f0ff;
      color: #37003c; }
  .masthead .dropdownMobile {
    display: none; }
  .masthead .dropdown {
    position: absolute;
    top: 6rem;
    left: 50%;
    background: #ff2882;
    min-width: 100%;
    border-radius: 0 0 2px 2px;
    transform: scale(0) translateX(-50%);
    transform-origin: left top;
    transition: all 0.1s;
    visibility: hidden;
    z-index: 30;
    padding: 1rem 2rem;
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    white-space: nowrap; }
    .masthead .dropdown::before {
      content: "";
      display: block;
      border: 8px solid transparent;
      border-bottom-color: #ff2882;
      position: absolute;
      top: -16px;
      left: 50%;
      margin-left: -8px; }
    .masthead .dropdown ul {
      column-count: 2; }
    .masthead .dropdown li {
      display: block;
      float: none;
      line-height: normal;
      -webkit-column-break-inside: avoid;
      -moz-column-break-inside: avoid;
      column-break-inside: avoid; }
    .masthead .dropdown a {
      display: block;
      line-height: 2.4;
      min-width: 9rem;
      color: #fff;
      text-decoration: none;
      font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal;
      font-size: 1.3rem; }
      .masthead .dropdown a:hover, .masthead .dropdown a:focus {
        text-decoration: underline; }
  .masthead .menuBtn {
    display: none;
    width: auto;
    background: #37003c;
    position: relative;
    padding: 0 2rem;
    float: right;
    height: 6rem;
    cursor: pointer; }
    .masthead .menuBtn::after {
      background: rgba(255, 255, 255, 0.2);
      bottom: 1.2rem;
      content: "";
      display: block;
      height: auto;
      left: 0;
      position: absolute;
      top: 1.2rem;
      width: 1px; }
    .masthead .menuBtn .menuBtnContainer {
      display: inline-block;
      vertical-align: middle; }
      .masthead .menuBtn .menuBtnContainer div {
        width: 2.2rem;
        height: 0.2rem;
        background: #fff;
        margin-bottom: 0.3rem;
        border-radius: 0.3rem;
        position: relative; }
        .masthead .menuBtn .menuBtnContainer div:last-child {
          margin-bottom: 0; }
  .masthead .logo {
    position: absolute;
    z-index: 50;
    left: 50%;
    width: 75%;
    height: 85%;
    transform: translate(-50%, -50%);
    top: 50%; }
  .masthead .mobile-logo {
    display: block;
    padding: 1rem 0 0 1.2rem; }
  .masthead .logoBackground {
    background: #fff;
    border-top-right-radius: 137%;
    border-bottom-right-radius: 85%;
    width: 100%;
    height: 100%;
    min-height: 125px;
    position: absolute;
    bottom: 0;
    left: 0; }
  .masthead .logoContainer {
    display: block;
    position: absolute;
    left: 0;
    transition: 0.2s;
    bottom: 0;
    height: 100%;
    width: 123px;
    z-index: 30; }
    .masthead .logoContainer:focus {
      transform: scale(1.05); }
    .masthead .logoContainer picture {
      display: block; }
    .masthead .logoContainer img {
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      width: 100%; }
    .masthead .logoContainer .mobile {
      display: none; }
  .masthead .currentSection {
    display: none;
    line-height: 6rem;
    float: left;
    position: relative;
    padding-left: 8rem;
    font-weight: 400;
    font-size: 1.4rem;
    color: #fff; }
  .masthead .search {
    position: relative; }
    .masthead .search .searchBtn {
      height: 6rem;
      width: 6rem;
      cursor: pointer;
      transition: all 0.2s ease; }
      .masthead .search .searchBtn .icn {
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%); }
      .masthead .search .searchBtn:focus::before {
        height: 5px; }
      .masthead .search .searchBtn.active {
        background: #e90052; }
        .masthead .search .searchBtn.active:focus {
          background: #b60040; }
        .masthead .search .searchBtn.active .icn {
          content: "";
          background: url("../pulselive/i/sprites/global-sprite.png") -560px -167px no-repeat;
          width: 17px;
          height: 17px; }
          @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .masthead .search .searchBtn.active .icn {
              background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
              background-size: 748px 697px; } }
    .masthead .search .searchInputContainer {
      position: absolute;
      top: 0;
      right: 0;
      display: none;
      background: #e8e8e8;
      z-index: 10; }
    .masthead .search .searchInput {
      width: 30rem;
      height: 6rem; }
    .masthead .search .searchCommit {
      background: #267788;
      height: 6rem;
      width: auto;
      padding: 0 1rem; }
      .masthead .search .searchCommit:hover, .masthead .search .searchCommit:focus {
        background: #1b5460; }
  .masthead .navBar {
    background: #37003c;
    line-height: 6rem;
    color: #fff;
    top: 0;
    left: 0;
    width: 100%;
    transition: box-shadow 0.2s;
    backface-visibility: hidden;
    position: relative; }
    .masthead .navBar::before {
      content: "";
      display: block; }
    .masthead .navBar::after {
      content: "";
      display: table;
      clear: both; }
  .masthead .mainNav {
    padding-left: 14rem;
    float: left; }
    .masthead .mainNav .navLink {
      padding: 0 2.5rem; }
      @media (max-width: 63.9375em) {
        .masthead .mainNav .navLink {
          padding: 0 1.5rem; } }
  .masthead .navOption {
    float: right;
    position: relative; }
    .masthead .navOption::after {
      background: rgba(255, 255, 255, 0.2);
      bottom: 1.2rem;
      content: "";
      display: block;
      height: auto;
      left: 0;
      position: absolute;
      top: 1.2rem;
      width: 1px; }
    .masthead .navOption .icn {
      display: inline-block;
      vertical-align: middle;
      margin-right: 1rem;
      position: relative;
      top: -2px; }
      .masthead .navOption .icn.show-m {
        display: none; }
  .masthead .navOption--no-border::after {
    display: none; }
  @media (max-width: 75em) {
    .masthead .mainNav .navLink,
    .masthead .navLink {
      font-size: 1.3rem;
      padding: 0 1.5rem; } }
  @media (max-width: 56.25em) {
    .masthead {
      min-height: 6rem;
      position: fixed;
      top: 0;
      right: 0;
      left: 0; }
      .masthead .navContainer {
        height: 6rem;
        line-height: 6rem; }
      .masthead .navBar {
        height: 6rem;
        line-height: 6rem;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2); }
      .masthead .menuBtn {
        display: block; }
      .masthead .plLogo {
        position: static; }
        .masthead .plLogo img {
          height: 6rem;
          width: 15.61rem;
          top: 0;
          bottom: auto; }
        .masthead .plLogo picture {
          display: none; }
        .masthead .plLogo .mobile {
          display: block; }
      .masthead .navBar.fixed .plLogo img {
        height: 6rem;
        width: 15.61rem; }
      .masthead .currentSection {
        display: block;
        color: #fff; }
      .masthead .mainNav {
        padding-left: 0;
        top: 6rem;
        left: 0;
        right: 0;
        bottom: 0;
        transform: translateX(-100%);
        opacity: 0;
        overflow-y: auto;
        border-top: 2px solid #e90052;
        background: transparent; }
        .masthead .mainNav::after {
          content: "";
          display: block;
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0;
          width: 30%;
          background: #250428;
          z-index: -1; }
      .masthead .pageLinks {
        margin-left: 0;
        float: none;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        transform: translateZ(0); }
        .masthead .pageLinks > li {
          position: static; }
          .masthead .pageLinks > li:hover .navLink {
            background: #37003c; }
          .masthead .pageLinks > li:hover .dropdown {
            display: none;
            transform: none; }
      .masthead .mainNav a.navLink {
        display: none; }
        .masthead .mainNav a.navLink.active.active {
          display: none; }
      .masthead .clubs {
        display: block; }
      .masthead .mainNav .navLink {
        border: 0;
        padding: 1.5rem 1rem 1.5rem 4rem;
        line-height: 1;
        background: #37003c;
        width: 30%;
        font-size: 1.4rem;
        margin-bottom: 0.2rem;
        z-index: 15;
        position: relative;
        font-family: "PremierSans-Regular", Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-weight: normal;
        color: rgba(255, 255, 255, 0.6);
        display: flex;
        height: 5.4rem;
        align-items: center; }
        .masthead .mainNav .navLink .icn {
          opacity: 0.6; }
        .masthead .mainNav .navLink::before {
          content: "";
          display: block;
          position: absolute;
          left: 1rem;
          top: 50%;
          transform: translateY(-50%);
          opacity: 0.6; }
        .masthead .mainNav .navLink .chevron-downwhite-small {
          display: none; }
        .masthead .mainNav .navLink .external-w {
          display: inline-block;
          vertical-align: middle;
          margin-left: 10px;
          margin-top: 1px; }
        .masthead .mainNav .navLink:focus:focus {
          background: #4e0056; }
        .masthead .mainNav .navLink.active.active {
          background-color: #4e0056;
          color: #fff; }
          .masthead .mainNav .navLink.active.active + .dropdown {
            display: block; }
          .masthead .mainNav .navLink.active.active .icn {
            opacity: 1; }
          .masthead .mainNav .navLink.active.active::before {
            opacity: 1; }
          .masthead .mainNav .navLink.active.active::after {
            border-bottom-color: transparent;
            border-right-color: #fff;
            bottom: 50%;
            left: 100%;
            margin-left: -12px;
            margin-bottom: -6px;
            z-index: 1; }
        .masthead .mainNav .navLink:focus {
          background: #01040f; }
      .masthead .premierleague > .navLink::before {
        content: "";
        background: url("../pulselive/i/sprites/balls-sprite.png") -14px -35px no-repeat;
        width: 14px;
        height: 14px;
        left: 1.4rem; } }
    @media (max-width: 56.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 56.25em) and (min-resolution: 192dpi) {
      .masthead .premierleague > .navLink::before {
        background-image: url("../pulselive/i/sprites/balls-sprite@x2.png");
        background-size: 49px 49px; } }
  @media (max-width: 56.25em) {
      .masthead .fantasy > .navLink::before {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -424px -605px no-repeat;
        width: 12px;
        height: 12px;
        left: 1.5rem; } }
    @media (max-width: 56.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 56.25em) and (min-resolution: 192dpi) {
      .masthead .fantasy > .navLink::before {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  @media (max-width: 56.25em) {
      .masthead .thisispremierleague > .navLink::before {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -455px -487px no-repeat;
        width: 20px;
        height: 13px;
        left: 1rem; } }
    @media (max-width: 56.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 56.25em) and (min-resolution: 192dpi) {
      .masthead .thisispremierleague > .navLink::before {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  @media (max-width: 56.25em) {
      .masthead .thisispremierleague > .navLink.active::before {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -435px -487px no-repeat;
        width: 20px;
        height: 13px; } }
    @media (max-width: 56.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 56.25em) and (min-resolution: 192dpi) {
      .masthead .thisispremierleague > .navLink.active::before {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  @media (max-width: 56.25em) {
      .masthead .stats > .navLink::before {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -460px -605px no-repeat;
        width: 12px;
        height: 12px;
        left: 1.5rem; } }
    @media (max-width: 56.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 56.25em) and (min-resolution: 192dpi) {
      .masthead .stats > .navLink::before {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  @media (max-width: 56.25em) {
      .masthead .video > .navLink::before {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -475px -487px no-repeat;
        width: 18px;
        height: 12px;
        left: 1.2rem; } }
    @media (max-width: 56.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 56.25em) and (min-resolution: 192dpi) {
      .masthead .video > .navLink::before {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  @media (max-width: 56.25em) {
      .masthead .communities > .navLink::before {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -531px -487px no-repeat;
        width: 19px;
        height: 11px;
        left: 1.1rem; } }
    @media (max-width: 56.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 56.25em) and (min-resolution: 192dpi) {
      .masthead .communities > .navLink::before {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  @media (max-width: 56.25em) {
      .masthead .more .navLink::before {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -743px -89px no-repeat;
        width: 4px;
        height: 14px;
        left: 1.7rem; } }
    @media (max-width: 56.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 56.25em) and (min-resolution: 192dpi) {
      .masthead .more .navLink::before {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  @media (max-width: 56.25em) {
      .masthead .clubs > .navLink::before {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -566px -300px no-repeat;
        width: 11px;
        height: 14px;
        left: 1.5rem; } }
    @media (max-width: 56.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 56.25em) and (min-resolution: 192dpi) {
      .masthead .clubs > .navLink::before {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  @media (max-width: 56.25em) {
      .masthead .languageSelector {
        display: none; }
      .masthead .dropdown {
        width: 70%;
        min-width: 0;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 30%;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        font-size: 1.2rem;
        transform: none;
        visibility: visible;
        padding: 0;
        box-shadow: none;
        display: none;
        background: #fff; }
        .masthead .dropdown ul {
          column-count: initial; }
        .masthead .dropdown a {
          text-decoration: none;
          text-align: left;
          color: #242424;
          padding: 1rem 1rem;
          font-size: 1.4rem; }
          .masthead .dropdown a:hover {
            text-decoration: none; }
          .masthead .dropdown a:focus {
            background: #e8e8e8; }
        .masthead .dropdown [class*="col-"] {
          padding-left: 0;
          padding-right: 0; }
        .masthead .dropdown li {
          border-bottom: 1px solid #e8e8e8;
          line-height: 4rem; }
      .masthead .navBar li {
        float: none; }
      .masthead .searchBar {
        transition: none; }
        .masthead .searchBar .plSearch {
          transition: none; }
        .masthead .searchBar .searchInput {
          font-size: 16px; }
      .masthead .searchOverlay {
        transition: none; } }
  @media (max-width: 960px) {
    .masthead .mainNav {
      padding-left: 14rem; } }
  @media (max-width: 34.375em) {
    .masthead .signIn {
      display: none; } }
  @media (max-width: 43.75em) {
    .masthead .mainNav .navLink, .masthead .mainNav::after {
      width: 40%; }
    .masthead .mainNav .dropdown {
      left: 40%;
      width: 60%; }
    .masthead .mainNav .fantasy > .navLink::before {
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -733px -495px no-repeat;
      width: 14px;
      height: 20px;
      left: 1.5rem; } }
  @media (max-width: 43.75em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 43.75em) and (min-resolution: 192dpi) {
    .masthead .mainNav .fantasy > .navLink::before {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }
  @media (max-width: 43.75em) {
    .masthead .mainNav .stats > .navLink::before {
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -330px -535px no-repeat;
      width: 18px;
      height: 15px;
      left: 1.5rem; } }
  @media (max-width: 43.75em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 43.75em) and (min-resolution: 192dpi) {
    .masthead .mainNav .stats > .navLink::before {
      background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
      background-size: 748px 697px; } }
  @media (max-width: 43.75em) {
    .masthead .navOption .icn.show-m {
      display: inline-block; } }
  @media (max-width: 430px) {
    .masthead .navText {
      flex: 0; } }
  @media (max-width: 25em) {
    .masthead .plLogo {
      margin-right: 1rem; }
    .masthead .menuBtn {
      padding: 0 1.5rem; }
      .masthead .menuBtn span {
        position: absolute;
        left: -400px; }
    .masthead .search .searchBtn {
      width: 5rem; }
    .masthead .navLink {
      padding: 0 1.5rem; }
    .masthead .navOption .icn {
      margin-right: 0.5rem; }
    .masthead .mainNav .navLink {
      font-size: 1.2rem; } }

.mastheadOpen {
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding-top: 6rem; }
  @media (max-width: 56.25em) {
    .mastheadOpen .masthead {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      height: 100%;
      z-index: 100; }
      .mastheadOpen .masthead .navBar,
      .mastheadOpen .masthead .fixedContainer {
        position: static; }
      .mastheadOpen .masthead .menuBtn {
        background: #e90052; }
        .mastheadOpen .masthead .menuBtn .menuBtnContainer div:nth-child(1) {
          transform: rotate(45deg);
          top: 0.5rem; }
        .mastheadOpen .masthead .menuBtn .menuBtnContainer div:nth-child(2) {
          transform: scale(0); }
        .mastheadOpen .masthead .menuBtn .menuBtnContainer div:nth-child(3) {
          transform: rotate(-45deg);
          top: -0.5rem;
          position: relative; }
      .mastheadOpen .masthead .mainNav {
        display: block;
        transform: translateX(0);
        opacity: 1;
        position: absolute;
        top: 6rem;
        right: 0;
        bottom: 0;
        left: 0; }
      .mastheadOpen .masthead .movedLink {
        display: none; }
      .mastheadOpen .masthead.searchOpen .mainNav {
        padding-top: 5rem; } }

.fixedContainer {
  top: 0;
  left: 0;
  right: 0; }
  .fixedContainer.fixed {
    position: fixed; }
    .fixedContainer.fixed .logoContainer {
      height: auto !important;
      top: 0; }
    .fixedContainer.fixed .logo {
      margin-top: -0.2rem; }
    @media (max-width: 56.25em) {
      .fixedContainer.fixed {
        position: static; }
        .fixedContainer.fixed .navBar.fixed .plLogo img {
          height: 6rem; } }

body.webViewBody {
  padding-top: 0; }

@media (max-width: 56.25em) {
  body {
    padding-top: 6rem; } }

.ismHeader .fantasy > a::after {
  content: "";
  display: block;
  border: 6px solid transparent;
  border-bottom-color: #fff;
  position: absolute;
  bottom: 0;
  left: 50%;
  margin-left: -6px; }

@media (max-width: 56.25em) {
  .ismHeader .fantasy .navLink .icn {
    opacity: 1; }
  .ismHeader .fantasy .navLink::after {
    border-bottom-color: transparent;
    border-right-color: #fff;
    bottom: 50%;
    left: 100%;
    margin-left: -12px;
    margin-bottom: -6px;
    z-index: 1; } }

.subNavContainer {
  height: 5rem; }

.subNav {
  line-height: 4.2rem;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15);
  position: relative;
  background: #fff;
  z-index: 1;
  margin-left: 0;
  margin-right: 0; }
  .subNav::before {
    content: "";
    display: block; }
  .subNav::after {
    content: "";
    display: table;
    clear: both; }
  .subNav ul {
    padding-left: 14.5rem; }
    .subNav ul::before {
      content: "";
      display: block; }
    .subNav ul::after {
      content: "";
      display: table;
      clear: both; }
    .subNav ul.showMoreEnabled .more {
      display: list-item; }
    .subNav ul .more {
      float: right;
      position: relative;
      display: none;
      margin-right: 0;
      margin-left: 0; }
      .subNav ul .more .moreToggle {
        line-height: 5rem;
        padding: 0 1.5rem;
        display: block;
        cursor: pointer;
        color: #76766f;
        font-size: 1.3rem; }
        .subNav ul .more .moreToggle .icn {
          display: none; }
        .subNav ul .more .moreToggle::before {
          content: "";
          background: url("../pulselive/i/sprites/global-sprite.png") -743px -103px no-repeat;
          width: 4px;
          height: 14px;
          display: inline-block;
          vertical-align: middle;
          margin-right: 1rem;
          position: relative;
          top: -1px; }
          @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .subNav ul .more .moreToggle::before {
              background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
              background-size: 748px 697px; } }
        .subNav ul .more .moreToggle:hover {
          background: #e8e8e8; }
      .subNav ul .more ul {
        display: none;
        position: absolute;
        z-index: 1;
        top: 4.2rem;
        right: 0;
        background: #e8e8e8;
        padding-left: 0; }
      .subNav ul .more li {
        float: none; }
      .subNav ul .more a {
        white-space: nowrap;
        padding: 0 2rem; }
        .subNav ul .more a::before {
          display: none; }
        .subNav ul .more a:hover {
          color: #e90052; }
      .subNav ul .more.open .moreToggle {
        background: #e8e8e8; }
      .subNav ul .more.open ul {
        display: block; }
  .subNav .linkBold {
    color: #242424;
    font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal; }
  .subNav.fixed {
    position: fixed;
    top: 6rem;
    left: 0;
    right: 0; }
  .subNav li {
    float: left;
    margin-left: 0;
    margin-right: 0; }
  .subNav a {
    display: block;
    color: #76766f;
    text-decoration: none;
    padding: 0.4rem 2rem;
    font-size: 1.3rem;
    position: relative;
    transition: all 0.2s ease-in-out; }
    .subNav a::before {
      content: "";
      display: block;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 0;
      background: linear-gradient(to right, #963cff, #a64dae);
      transition: 0.2s;
      z-index: -1; }
    .subNav a:hover::before, .subNav a:focus::before {
      height: 4px; }
    .subNav a.active {
      font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal; }
      .subNav a.active::before {
        height: 4px;
        background: linear-gradient(to right, #963cff, #a64dae); }
      .subNav a.active:focus::before {
        background: #b60040; }
  @media (max-width: 56.25em) {
    .subNav {
      display: none; } }

#mainContent .subNav {
  margin-bottom: 2rem; }

.mainFooter {
  margin-top: 3rem;
  position: relative;
  z-index: 60;
  background: #fff; }
  .mainFooter .pl-logo-footer {
    display: block;
    margin: 0 auto 3rem;
    transition: 0.2s; }
    .mainFooter .pl-logo-footer:focus {
      transform: scale(1.05); }
  .mainFooter .footerContent {
    padding: 10rem 4rem;
    background: #37003c;
    background-image: url("../pulselive/i/bg-elements/pl-footer.svg");
    background-position: bottom;
    background-size: 100% auto;
    background-repeat: no-repeat; }
    .mainFooter .footerContent .icn {
      display: inline-block;
      vertical-align: middle;
      margin-left: 0.5rem;
      margin-top: -0.1rem; }
    .mainFooter .footerContent .wrapper {
      display: flex;
      justify-content: space-between;
      padding: 0; }
    .mainFooter .footerContent .footerCol {
      padding-right: 1rem; }
    .mainFooter .footerContent a {
      color: #fff;
      text-decoration: none;
      font-size: 1.4rem;
      padding: 0.7rem 0;
      display: block;
      padding-right: 0.2rem;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap; }
      .mainFooter .footerContent a:hover, .mainFooter .footerContent a:focus {
        color: #ff2882; }
    .mainFooter .footerContent ul li {
      -webkit-column-break-inside: avoid;
      -moz-column-break-inside: avoid;
      column-break-inside: avoid; }
  .mainFooter .subHeader {
    color: #fff;
    font-size: 2.3rem;
    margin-bottom: 2rem; }
  .mainFooter .active {
    color: #e90052; }
  .mainFooter .double ul {
    column-count: 2; }
  .mainFooter .external {
    color: #05f0ff; }
  .mainFooter .footerCorporate {
    padding: 3rem 0;
    font-size: 1.1rem; }
    .mainFooter .footerCorporate::before {
      content: "";
      display: block; }
    .mainFooter .footerCorporate::after {
      content: "";
      display: table;
      clear: both; }
    .mainFooter .footerCorporate ul {
      float: left; }
    .mainFooter .footerCorporate li {
      display: inline-block;
      position: relative;
      margin-right: 1rem;
      padding-right: 1rem;
      vertical-align: middle; }
      .mainFooter .footerCorporate li::after {
        background: #2f2f2f;
        border-radius: 100%;
        content: "";
        display: block;
        height: 0.3rem;
        right: 0;
        position: absolute;
        top: 50%;
        transform: translate(50%, -50%);
        width: 0.3rem; }
      .mainFooter .footerCorporate li:last-child::after, .mainFooter .footerCorporate li:first-child::after {
        display: none; }
    .mainFooter .footerCorporate a {
      color: #242424;
      text-decoration: none; }
      .mainFooter .footerCorporate a:hover, .mainFooter .footerCorporate a:focus {
        text-decoration: underline; }
    .mainFooter .footerCorporate .wrapper {
      padding: 0; }
    .mainFooter .footerCorporate .official {
      float: right; }
      .mainFooter .footerCorporate .official a {
        transition: 0.2s; }
        .mainFooter .footerCorporate .official a:focus {
          transform: scale(0.9); }
    .mainFooter .footerCorporate .icn {
      display: inline-block;
      vertical-align: middle;
      margin-left: 1rem;
      margin-top: -0.1rem; }
  @media (max-width: 68.75em) {
    .mainFooter .pl-logo-footer {
      content: "";
      background: url("../pulselive/i/sprites/pl-logo-sprite.png") -119px -155px no-repeat;
      width: 107px;
      height: 45px; } }
  @media (max-width: 68.75em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 68.75em) and (min-resolution: 192dpi) {
    .mainFooter .pl-logo-footer {
      background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
      background-size: 517px 308px; } }
  @media (max-width: 81.25em) {
    .mainFooter .footerCol {
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      margin-bottom: 1.6rem;
      width: 50%;
      padding: 0 0.5rem 2rem; }
      .mainFooter .footerCol:last-child {
        border-bottom: 0; }
    .mainFooter .subHeader {
      font-size: 1.7rem;
      margin-bottom: 0;
      padding-bottom: 1rem; }
    .mainFooter .footerContent {
      background-image: url("../pulselive/i/bg-elements/pl-footer-m-top.svg"), url("../pulselive/i/bg-elements/pl-footer-m-bottom.svg");
      background-color: #37003c;
      background-position: top left, bottom left;
      background-repeat: no-repeat, no-repeat;
      padding: 3rem 1rem; }
      .mainFooter .footerContent .wrapper {
        flex-wrap: wrap; }
      .mainFooter .footerContent ul {
        column-count: 2; }
    .mainFooter .footerCorporate {
      text-align: center; }
      .mainFooter .footerCorporate ul {
        float: none;
        display: table;
        margin: 0 auto 3rem; }
      .mainFooter .footerCorporate li {
        margin-bottom: 1rem; }
        .mainFooter .footerCorporate li:first-child {
          display: block;
          border-right: 0;
          padding-right: 0;
          margin-right: 0; }
      .mainFooter .footerCorporate .official {
        float: none;
        text-align: center; } }
  @media (max-width: 63.9375em) {
    .mainFooter {
      padding-bottom: 3rem; } }
  @media (max-width: 43.75em) {
    .mainFooter .footerContent {
      padding: 2rem 0.5rem; }
      .mainFooter .footerContent .wrapper {
        display: block; }
    .mainFooter .footerCol {
      width: 100%;
      display: block; }
      .mainFooter .footerCol ul {
        column-count: 3; } }
  @media (max-width: 37.5em) {
    .mainFooter .footerCol ul {
      column-count: 2; } }

/* Buttons */
.btn,
[class*="btn-"] {
  text-align: center;
  padding: 0 3.6rem;
  text-decoration: none;
  background: #37003c;
  color: #fff;
  display: block;
  transition: all 0.2s;
  position: relative;
  font-size: 1.3rem;
  cursor: pointer;
  line-height: 4rem;
  border-radius: 3px;
  font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal;
  z-index: 1;
  overflow: hidden; }
  .btn::after,
  [class*="btn-"]::after {
    position: absolute;
    content: "";
    top: 0;
    right: -1px;
    bottom: 0;
    left: -1px;
    background-image: linear-gradient(to left, #ff2882, #963cff);
    z-index: -1;
    transition: opacity 0.2s linear;
    transition-delay: 0.2s;
    opacity: 0; }
  .btn::before,
  [class*="btn-"]::before {
    position: absolute;
    content: "";
    top: 0;
    bottom: 0;
    left: -100%;
    width: 100%;
    background-image: linear-gradient(to right, #ff2882, #37003c);
    z-index: -1;
    transition: all 0.2s linear;
    opacity: 0; }
  .btn [class*="icn"],
  [class*="btn-"] [class*="icn"] {
    display: inline-block;
    vertical-align: middle;
    position: relative;
    left: 1rem; }
  .btn [class*="arrow-right"],
  [class*="btn-"] [class*="arrow-right"] {
    content: "";
    background: url("../pulselive/i/sprites/arrows-sprite.png") -39px -69px no-repeat;
    width: 15px;
    height: 9px;
    left: auto;
    right: 1.6rem;
    top: 1.5rem;
    transition: right 0.2s;
    position: absolute; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .btn [class*="arrow-right"],
      [class*="btn-"] [class*="arrow-right"] {
        background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
        background-size: 91px 82px; } }
  .btn [class*="external"],
  [class*="btn-"] [class*="external"] {
    margin-top: -1px; }
  .btn [class*="chevron-rightblack-normal"],
  [class*="btn-"] [class*="chevron-rightblack-normal"] {
    display: inline-block;
    vertical-align: -3px;
    margin-left: 0.5rem;
    margin-right: 0; }
  .btn:hover, .btn:focus,
  [class*="btn-"]:hover,
  [class*="btn-"]:focus {
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15); }
    .btn:hover::before, .btn:hover::after, .btn:focus::before, .btn:focus::after,
    [class*="btn-"]:hover::before,
    [class*="btn-"]:hover::after,
    [class*="btn-"]:focus::before,
    [class*="btn-"]:focus::after {
      opacity: 1;
      left: -1px; }
    .btn:hover [class*="tooltip"], .btn:focus [class*="tooltip"],
    [class*="btn-"]:hover [class*="tooltip"],
    [class*="btn-"]:focus [class*="tooltip"] {
      display: block; }
    .btn:hover [class*="arrow-right"], .btn:focus [class*="arrow-right"],
    [class*="btn-"]:hover [class*="arrow-right"],
    [class*="btn-"]:focus [class*="arrow-right"] {
      content: "";
      background: url("../pulselive/i/sprites/arrows-sprite.png") -39px -69px no-repeat;
      width: 15px;
      height: 9px;
      right: 1rem; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .btn:hover [class*="arrow-right"], .btn:focus [class*="arrow-right"],
        [class*="btn-"]:hover [class*="arrow-right"],
        [class*="btn-"]:focus [class*="arrow-right"] {
          background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
          background-size: 91px 82px; } }
    .btn:hover [class*="calendar"], .btn:focus [class*="calendar"],
    [class*="btn-"]:hover [class*="calendar"],
    [class*="btn-"]:focus [class*="calendar"] {
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -172px -605px no-repeat;
      width: 16px;
      height: 16px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .btn:hover [class*="calendar"], .btn:focus [class*="calendar"],
        [class*="btn-"]:hover [class*="calendar"],
        [class*="btn-"]:focus [class*="calendar"] {
          background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
          background-size: 748px 697px; } }
    .btn:hover [class*="external"], .btn:focus [class*="external"],
    [class*="btn-"]:hover [class*="external"],
    [class*="btn-"]:focus [class*="external"] {
      content: "";
      background: url("../pulselive/i/sprites/external-sprite.png") -20px -32px no-repeat;
      width: 8px;
      height: 8px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .btn:hover [class*="external"], .btn:focus [class*="external"],
        [class*="btn-"]:hover [class*="external"],
        [class*="btn-"]:focus [class*="external"] {
          background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
          background-size: 51px 42px; } }
    .btn:hover .reset-b, .btn:focus .reset-b,
    [class*="btn-"]:hover .reset-b,
    [class*="btn-"]:focus .reset-b {
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -550px -487px no-repeat;
      width: 15px;
      height: 11px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .btn:hover .reset-b, .btn:focus .reset-b,
        [class*="btn-"]:hover .reset-b,
        [class*="btn-"]:focus .reset-b {
          background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
          background-size: 748px 697px; } }
    .btn:hover[type="submit"], .btn:focus[type="submit"],
    [class*="btn-"]:hover[type="submit"],
    [class*="btn-"]:focus[type="submit"] {
      background-image: linear-gradient(to left, #ff2882, #963cff); }
  .btn.active,
  [class*="btn-"].active {
    background: #37003c;
    color: #fff; }
    .btn.active:hover, .btn.active:focus,
    [class*="btn-"].active:hover,
    [class*="btn-"].active:focus {
      background: #080009; }
  .btn .short,
  [class*="btn-"] .short {
    display: none; }
  @media (max-width: 43.75em) {
    .btn .long,
    [class*="btn-"] .long {
      display: none; }
    .btn .short,
    [class*="btn-"] .short {
      display: inline-block; } }

button.btn, button[class*="btn-"] {
  border: none; }
  button.btn:focus:active, button[class*="btn-"]:focus:active {
    outline: none; }

.btn-primary {
  background: #37003c;
  color: #fff; }

.btn-secondary {
  background: #267788;
  color: #fff; }
  .btn-secondary:hover, .btn-secondary:focus {
    background: #1b5460; }

.btn-tertiary {
  background: #05f0ff;
  color: #242424; }
  .btn-tertiary:hover, .btn-tertiary:focus {
    background: #00c4d1;
    color: #242424; }
    .btn-tertiary:hover [class*="arrow-right"], .btn-tertiary:focus [class*="arrow-right"] {
      content: "";
      background: url("../pulselive/i/sprites/arrows-sprite.png") -71px -47px no-repeat;
      width: 9px;
      height: 8px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .btn-tertiary:hover [class*="arrow-right"], .btn-tertiary:focus [class*="arrow-right"] {
          background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
          background-size: 91px 82px; } }

.btn-highlight {
  background: #37003c;
  color: #fff; }
  .btn-highlight--outline {
    background: #fff;
    box-shadow: inset 0 0 0 1px #e90052;
    color: #e90052; }
    .btn-highlight--outline:hover, .btn-highlight--outline:focus {
      background: #b60040;
      color: #fff;
      box-shadow: inset 0 0 0 1px #b60040; }

.btn-fantasy {
  background: #00ff87;
  color: #242424; }
  .btn-fantasy:hover, .btn-fantasy:focus {
    background: #00cc6c;
    color: #242424; }
    .btn-fantasy:hover [class*="arrow-right"], .btn-fantasy:focus [class*="arrow-right"] {
      content: "";
      background: url("../pulselive/i/sprites/arrows-sprite.png") -71px -47px no-repeat;
      width: 9px;
      height: 8px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .btn-fantasy:hover [class*="arrow-right"], .btn-fantasy:focus [class*="arrow-right"] {
          background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
          background-size: 91px 82px; } }

.btn-kicks {
  background: #eaff04;
  color: #242424; }
  .btn-kicks:hover, .btn-kicks:focus {
    background: #bfd000;
    color: #242424; }
    .btn-kicks:hover [class*="arrow-right"], .btn-kicks:focus [class*="arrow-right"] {
      content: "";
      background: url("../pulselive/i/sprites/arrows-sprite.png") -71px -47px no-repeat;
      width: 9px;
      height: 8px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .btn-kicks:hover [class*="arrow-right"], .btn-kicks:focus [class*="arrow-right"] {
          background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
          background-size: 91px 82px; } }

.btn-more {
  background: #e90052;
  color: #fff;
  text-align: left;
  padding: 0 1.5rem;
  border-right: 4rem solid #b60040;
  position: relative; }
  .btn-more .icn {
    position: absolute;
    left: auto;
    right: -2.9rem;
    top: 1.2rem; }
  .btn-more:hover, .btn-more:focus {
    background: #b60040; }

.btn-more.btn-more-default {
  background: #e8e8e8;
  border-right-color: #dbdbdb;
  color: #242424; }
  .btn-more.btn-more-default:hover, .btn-more.btn-more-default:focus {
    background: #e90052;
    border-right-color: #e90052;
    color: #fff; }

.btn-tab {
  text-decoration: none;
  border-radius: 3px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  background: #ebebe6;
  color: #6c6c6c;
  font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal;
  padding: 0.4rem 1rem;
  min-width: 11.8rem;
  font-size: 1.3rem; }
  .btn-tab.active {
    background: #fff;
    color: #2f2f2f; }
    .btn-tab.active:hover, .btn-tab.active:focus {
      background: #fff;
      color: #2f2f2f; }
  .btn-tab:hover, .btn-tab:focus {
    background: #ff2882;
    color: #fff; }
  .btn-tab::after, .btn-tab::before {
    display: none; }

.btn-tab-disabled {
  background: #c2c2c2;
  opacity: 0.4;
  cursor: no-drop; }
  .btn-tab-disabled:focus, .btn-tab-disabled:hover {
    background: #c2c2c2;
    color: #333; }

.btn-centered {
  display: table;
  margin: 0 auto;
  padding: 0 2rem; }

.btn-disabled {
  background: #fff;
  border: 1px solid #e8e8e8;
  opacity: 0.6;
  cursor: no-drop; }
  .btn-disabled:hover, .btn-disabled:focus {
    background: #fff;
    color: #333; }
    .btn-disabled:hover [class*="arrow-right"], .btn-disabled:focus [class*="arrow-right"] {
      content: "";
      background: url("../pulselive/i/sprites/arrows-sprite.png") -71px -47px no-repeat;
      width: 9px;
      height: 8px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .btn-disabled:hover [class*="arrow-right"], .btn-disabled:focus [class*="arrow-right"] {
          background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
          background-size: 91px 82px; } }
    .btn-disabled:hover [class*="calendar"], .btn-disabled:focus [class*="calendar"] {
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -703px -654px no-repeat;
      width: 22px;
      height: 20px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .btn-disabled:hover [class*="calendar"], .btn-disabled:focus [class*="calendar"] {
          background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
          background-size: 748px 697px; } }
    .btn-disabled:hover [class*="external"], .btn-disabled:focus [class*="external"] {
      content: "";
      background: url("../pulselive/i/sprites/external-sprite.png") -28px -32px no-repeat;
      width: 8px;
      height: 7px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .btn-disabled:hover [class*="external"], .btn-disabled:focus [class*="external"] {
          background-image: url("../pulselive/i/sprites/external-sprite@x2.png");
          background-size: 51px 42px; } }
    .btn-disabled:hover .reset-b, .btn-disabled:focus .reset-b {
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -550px -487px no-repeat;
      width: 15px;
      height: 11px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .btn-disabled:hover .reset-b, .btn-disabled:focus .reset-b {
          background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
          background-size: 748px 697px; } }

.clearBtn {
  position: absolute;
  line-height: 2rem;
  top: 50%;
  margin-top: -1rem;
  right: 0;
  background: #e90052;
  color: #fff;
  padding: 0 1rem;
  font-size: 1.2rem;
  cursor: pointer;
  transition: all 0.2s;
  font-weight: 400;
  border-radius: 2px;
  display: none; }
  .clearBtn:hover, .clearBtn:focus {
    background: #b60040; }
  .clearBtn.active {
    display: block; }

.btn-tipl {
  width: auto;
  position: relative;
  display: inline-block;
  line-height: 1;
  padding: 1.2rem 1.6rem;
  text-align: center;
  background: transparent;
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 1.1rem;
  cursor: pointer; }
  .btn-tipl::before {
    content: "";
    width: 100%;
    height: 2px;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    display: block;
    margin: 0 0 1.2rem;
    background-image: linear-gradient(to right, transparent 0%, rgba(255, 255, 255, 0.3) 50%, transparent 100%); }
  .btn-tipl::after {
    content: "";
    display: inline-block;
    margin-left: 1rem;
    content: "";
    background: url("../pulselive/i/sprites/arrows-sprite.png") -39px -69px no-repeat;
    width: 15px;
    height: 9px;
    transition: transform 0.2s ease; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .btn-tipl::after {
        background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
        background-size: 91px 82px; } }
  .btn-tipl:hover {
    background: transparent; }
    .btn-tipl:hover::after {
      transform: translateX(6px); }

.btn-history {
  background-color: #7a7543;
  color: #fff;
  display: inline-block;
  line-height: 3.6rem;
  min-width: 18rem;
  width: auto; }
  .btn-history:hover, .btn-history:focus {
    background: #6a653a; }
  .btn-history [class*="arrow-left"] {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    margin-top: -4px;
    margin-left: -4.5px;
    left: 1rem;
    margin-left: auto; }

.btn--history-otd {
  font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal;
  font-size: 1.4rem;
  height: 4rem;
  width: 18rem; }

.filter-button {
  color: #76766f;
  cursor: pointer;
  font-size: 1.1rem;
  flex-shrink: 0;
  font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal;
  padding: 1.1rem 3rem;
  text-transform: uppercase; }
  .filter-button__icon {
    display: inline-block;
    margin-bottom: -0.5rem;
    margin-right: 1rem; }
  .filter-button__icon--hover {
    display: none; }
  .filter-button:hover {
    color: #ff2882; }
    .filter-button:hover .filter-button__icon {
      display: none; }
    .filter-button:hover .filter-button__icon--hover {
      display: inline-block; }
  @media (max-width: 43.75em) {
    .filter-button {
      padding: 1.1rem; } }

.icon-button {
  color: #37003c;
  font-size: 1.2rem;
  flex-shrink: 0;
  font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal;
  padding: 0 3rem; }
  .icon-button__icon {
    display: inline-block;
    margin-bottom: -0.6rem;
    margin-right: 1rem; }
  .icon-button__icon--hover {
    display: none; }
  .icon-button--hidden {
    display: none; }
  .icon-button:hover {
    color: #ff2882; }
    .icon-button:hover .icon-button__icon {
      display: none; }
    .icon-button:hover .icon-button__icon--hover {
      display: inline-block; }

.widget-button {
  color: #2f2f2f;
  background: none;
  text-align: right;
  padding-right: 0.6rem; }
  .widget-button::before, .widget-button::after {
    content: none; }
  .widget-button:hover, .widget-button:focus {
    color: #ff2882;
    text-decoration: underline;
    box-shadow: none; }
    .widget-button:hover .icn.arrow-right, .widget-button:focus .icn.arrow-right {
      right: -0.6rem; }
  .widget-button .icn.arrow-right {
    content: "";
    background: url("../pulselive/i/sprites/arrows-sprite.png") -54px -69px no-repeat;
    width: 12px;
    height: 7px;
    position: relative;
    top: -0.1rem;
    right: 0;
    margin-left: 0.6rem;
    transition: right 0.2s; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .widget-button .icn.arrow-right {
        background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
        background-size: 91px 82px; } }

.dropDown {
  position: relative;
  cursor: pointer;
  width: 20rem;
  padding: 0; }
  .dropDown::before {
    background: #e8e8e8;
    bottom: 1rem;
    content: "";
    display: block;
    height: auto;
    position: absolute;
    right: 0;
    top: 1rem;
    width: 1px; }
  .dropDown .loader-small {
    position: absolute;
    bottom: 1rem;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1; }
  .dropDown .label {
    position: absolute;
    left: 1.8rem;
    top: 1.8rem;
    z-index: -1;
    margin-bottom: 0.3rem;
    font-size: 1.1rem;
    color: #963cff;
    font-family: "PremierSans-Bold-Italic", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal;
    white-space: nowrap; }
  .dropDown .current {
    transition: all 0.2s;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal;
    color: #2f2f2f;
    font-size: 1.7rem;
    padding: 3.5rem 4rem 1.8rem 1.8rem; }
    .dropDown .current::after {
      content: "";
      display: block;
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -740px -418px no-repeat;
      width: 8px;
      height: 10px;
      position: absolute;
      right: 1.8rem;
      top: 50%;
      transform: translateY(-50%); }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .dropDown .current::after {
          background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
          background-size: 748px 697px; } }
    .dropDown .current:hover, .dropDown .current:focus {
      color: #e90052; }
      .dropDown .current:hover::before, .dropDown .current:focus::before {
        width: 100%; }
      .dropDown .current:hover::after, .dropDown .current:focus::after {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -740px -407px no-repeat;
        width: 8px;
        height: 11px; }
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
          .dropDown .current:hover::after, .dropDown .current:focus::after {
            background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
            background-size: 748px 697px; } }
  .dropDown .dropdownList {
    visibility: hidden;
    transform: scale(0);
    transform-origin: top center;
    position: absolute;
    top: 7rem;
    left: 0;
    z-index: 70;
    background: #fff;
    min-width: 100%;
    transition: 0.1s;
    box-shadow: 0 1px 12px 0 rgba(0, 0, 0, 0.15);
    border-radius: 0 0 2px 2px;
    max-height: 40rem;
    overflow-y: auto;
    padding: 1rem 0; }
    .dropDown .dropdownList::before {
      background: linear-gradient(to left, #ff2882, #963cff);
      content: "";
      display: block;
      height: 3px;
      position: absolute;
      left: 0;
      top: 0;
      width: 100%; }
    .dropDown .dropdownList li {
      color: #333;
      padding: 1rem 2rem;
      cursor: pointer;
      font-size: 1.2rem;
      transition: all 0.2s; }
      .dropDown .dropdownList li a {
        color: #242424;
        text-decoration: none; }
      .dropDown .dropdownList li:hover, .dropDown .dropdownList li:focus, .dropDown .dropdownList li.highlight {
        background-color: transparent;
        font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-weight: normal; }
  .dropDown .short {
    display: none; }
  .dropDown .badge-20 {
    display: inline-block;
    vertical-align: middle;
    margin-right: 0.5em; }
  .dropDown.clubs .dropdownList {
    column-count: 2;
    white-space: nowrap; }
  .dropDown.active .current::before {
    width: 100%; }
  .dropDown.active .current:hover, .dropDown.active .current:focus {
    color: #37003c; }
    .dropDown.active .current:hover::before, .dropDown.active .current:focus::before {
      background: #37003c; }
  .dropDown.inactive .label {
    opacity: 0.4; }
  .dropDown.inactive .current {
    cursor: not-allowed;
    opacity: 0.4; }
    .dropDown.inactive .current:hover::before, .dropDown.inactive .current:focus::before {
      width: 0; }
  .dropDown.open .current::before {
    width: 100%; }
  .dropDown.open .current:hover, .dropDown.open .current:focus {
    color: #37003c; }
    .dropDown.open .current:hover::before, .dropDown.open .current:focus::before {
      background: #37003c; }
  .dropDown.open .dropdownList {
    visibility: visible;
    transform: scale(1); }
  @media (max-width: 25em) {
    .dropDown .long {
      display: none; }
    .dropDown .short {
      display: block; } }

.btn.showMoreBtn {
  margin-top: 1rem;
  display: none; }
  @media (max-width: 43.75em) {
    .btn.showMoreBtn {
      display: block; } }

.showMore {
  transition: all 0.4s; }
  .showMore .moreBtn {
    margin-bottom: 3rem; }
  @media (max-width: 43.75em) {
    .showMore {
      display: none; } }
  .showMore.open {
    display: block; }

.fixtureLiveStreamContainer.livestreamText {
  text-align: right;
  margin-right: 2.9rem; }

.matchFixtureContainer {
  position: relative; }
  .matchFixtureContainer .quickView {
    position: absolute;
    top: 1.2rem;
    right: 5rem;
    line-height: 3rem;
    background: #fff;
    border: 1px solid #efefef;
    font-size: 1.3rem;
    color: #2f2f2f;
    font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal; }
    .matchFixtureContainer .quickView::before, .matchFixtureContainer .quickView::after {
      content: none; }
    @media (max-width: 56.25em) {
      .matchFixtureContainer .quickView {
        display: none; } }
    .matchFixtureContainer .quickView:hover {
      background: #37003c;
      border-color: #37003c;
      color: #fff; }
  .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer {
    margin-left: 0;
    position: relative; }
    .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer .multipleBroadcastersContainer {
      margin-left: 0;
      margin-right: 1rem; }
      .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer .multipleBroadcastersContainer .broadcaster.multiple {
        text-align: center;
        line-height: 16px;
        padding-left: 0.5rem; }
    .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer .broadcaster {
      margin-right: 0.5rem;
      line-height: 30px;
      padding-left: 0;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 0; }
      .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer .broadcaster .broadcaster-text {
        line-height: normal; }
      .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer .broadcaster .logo {
        transform: none;
        top: auto;
        left: auto; }
    .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer .icn.livestream {
      float: right;
      margin-top: 2.5px;
      margin-left: 2rem; }

.fixtures {
  position: relative; }
  .fixtures .btn.quickView {
    padding: 0 1rem; }
  .fixtures .date {
    display: block;
    font-size: 2.3rem;
    line-height: 3rem;
    float: left;
    font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal; }
    .fixtures .date.short {
      display: none; }
  .fixtures .competition {
    max-width: 65%;
    margin-bottom: 2rem;
    padding-right: 1rem;
    text-align: right; }
    .fixtures .competition .competitionImage1 {
      transform: scale(0.85);
      right: -22px;
      position: relative; }
    @media (min-width: 43.75em) {
      .fixtures .competition.allcompetitions {
        text-align: center;
        width: 18rem; } }
    .fixtures .competition.allcompetitions [class^="competitionImage"] {
      margin-left: auto;
      margin-right: auto; }
    @media (max-width: 700px) {
      .fixtures .competition {
        margin-bottom: 0.5rem; } }
  .fixtures .matchList {
    margin-bottom: 6rem;
    border-top: 1px solid #efefef;
    clear: both; }
    .fixtures .matchList > li {
      border-bottom: 1px solid #efefef; }
      .fixtures .matchList > li:last-child {
        border-bottom: 1px solid #efefef; }
      @media (max-width: 700px) {
        .fixtures .matchList > li {
          margin: 0 1rem; } }
  .fixtures .pl-long-n {
    margin-bottom: 1rem; }
  @media (max-width: 1000px) {
    .fixtures__matches-list {
      position: relative; }
      .fixtures__matches-list::before {
        content: "";
        position: absolute;
        display: block;
        bottom: -4rem;
        left: -1rem;
        right: -1rem;
        height: 3rem;
        background-color: #37003b; }
      .fixtures__matches-list::after {
        content: "";
        position: absolute;
        display: block;
        bottom: -4rem;
        left: 0.8rem;
        right: 0.8rem;
        height: 0.6rem;
        background: linear-gradient(to left, #ff2882, #963cff); }
      .fixtures__matches-list:last-child::before, .fixtures__matches-list:last-child::after {
        display: none; } }
  @media (max-width: 700px) {
    .fixtures__matches-list::before {
      left: 0;
      right: 0; } }
  @media (max-width: 43.75em) {
    .fixtures {
      margin: 0 -1rem; }
      .fixtures .noContentContainer {
        margin: 2rem 1rem; }
      .fixtures .date {
        margin-bottom: 1rem;
        margin-left: 1rem;
        font-size: 1.7rem; }
        .fixtures .date.long {
          display: none; }
        .fixtures .date.short {
          display: block;
          line-height: 2rem; }
      .fixtures .pl-long-n {
        margin-right: 1rem;
        margin-top: 0.1rem;
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -122px -487px no-repeat;
        width: 122px;
        height: 20px; } }
    @media (max-width: 43.75em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 43.75em) and (min-resolution: 192dpi) {
      .fixtures .pl-long-n {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  @media (max-width: 43.75em) {
      .fixtures .competition .competitionImage1 {
        content: "";
        background: url("../pulselive/i/sprites/pl-logo-sprite.png") -376px -205px no-repeat;
        width: 24px;
        height: 30px;
        transform: scale(1);
        right: 0;
        top: -7px; } }
    @media (max-width: 43.75em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 43.75em) and (min-resolution: 192dpi) {
      .fixtures .competition .competitionImage1 {
        background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
        background-size: 517px 308px; } }

.refereeHeader {
  margin: 1rem 0;
  clear: both;
  text-align: center;
  font-size: 1.1rem;
  color: #76766f;
  padding-right: 4rem; }
  .refereeHeader::before {
    content: "";
    display: block; }
  .refereeHeader::after {
    content: "";
    display: table;
    clear: both; }
  .refereeHeader .match {
    float: left;
    width: 45%; }
  .refereeHeader .referees {
    float: left;
    width: 50%; }
  .refereeHeader .ref {
    float: left;
    width: 25%; }
  @media (max-width: 75em) {
    .refereeHeader {
      display: none; } }

.fixtureHeader {
  font-size: 2rem; }

@media (max-width: 43.75em) {
  .fixtureHeader {
    font-size: 1.8rem; }
  .fixturePagefilter.open {
    width: 100%; } }

.fixtureKeyMobile {
  display: none; }

.fixtureExtras {
  flex: 2;
  order: 4;
  display: flex;
  justify-content: flex-end; }
  .fixtureExtras .btn,
  .fixtureExtras .btn-more {
    float: right; }

.generateFixturesCalendar {
  position: relative;
  padding: 2.7rem 4rem 2.6rem;
  cursor: pointer; }
  .generateFixturesCalendar::before {
    background: #e8e8e8;
    bottom: 1rem;
    content: "";
    display: block;
    height: auto;
    position: absolute;
    left: 0;
    top: 1rem;
    width: 1px; }

@media (max-width: 75em) {
  .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer .multipleBroadcastersContainer {
    margin-right: 3rem; }
  .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer .broadcaster {
    min-width: 20rem; } }

@media (max-width: 72.5em) {
  .fixtureKeyDesktop {
    display: none !important; }
  .fixtureKeyMobile {
    display: block;
    clear: both;
    margin-bottom: 1.5rem; }
    .fixtureKeyMobile::before {
      content: "";
      display: block; }
    .fixtureKeyMobile::after {
      content: "";
      display: table;
      clear: both; }
    .fixtureKeyMobile .fixtureLocalTimeMessage {
      width: auto;
      padding-bottom: 0; }
    .fixtureKeyMobile .fixtureLiveStreamContainer {
      float: right;
      line-height: 45px;
      margin-top: -1px; }
    .fixtureKeyMobile .livestreamText {
      float: right;
      line-height: 45px; } }

@media (max-width: 56.25em) {
  .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer {
    margin-right: 0;
    float: none; }
    .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer .multipleBroadcastersContainer {
      padding: 0;
      line-height: 25px;
      margin: 0; }
      .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer .multipleBroadcastersContainer .broadcaster.multiple {
        line-height: 25px;
        padding-left: 2rem; }
    .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer .broadcaster {
      float: none;
      padding-left: 2rem;
      text-align: center;
      line-height: 25px;
      min-width: initial;
      position: relative;
      top: auto;
      transform: none;
      left: auto;
      margin: 0.5rem 0 -1.5rem; }
    .matchFixtureContainer .fixtureBroadcast.broadcastDataContainer span.icn.livestream {
      position: relative;
      left: -5px;
      float: none;
      margin: 0; }
  .fixtureLocalTimeMessage.localTimeMessage {
    width: auto;
    vertical-align: middle;
    margin-bottom: 1rem; }
  .fixtureExtras {
    float: left;
    clear: both; }
    .fixtureExtras .btn,
    .fixtureExtras .btn-more {
      margin-right: 1rem;
      margin-left: 0; } }

@media (max-width: 43.75em) {
  .fixtureKeyMobile .fixtureLocalTimeMessage {
    position: initial; }
  .fixturePagefilter {
    display: inline-block; }
  .fixtureExtras {
    display: inline-block;
    margin: 0;
    float: right;
    clear: none; } }

@media (max-width: 500px) {
  .fixturePagefilter {
    width: 100%;
    margin-bottom: 1.5rem; }
  .fixtureExtras .btn,
  .fixtureExtras .btn-more {
    text-align: center;
    margin-right: 0;
    float: none; }
  .fixtureLocalTimeMessage.localTimeMessage {
    display: block;
    float: right;
    text-align: right !important;
    position: initial;
    top: initial;
    left: initial;
    font-size: 1.1rem;
    background-size: 4px 12px; }
  .fixtureLiveStreamContainer.liveStreamContainer.livestreamText {
    display: block;
    float: left;
    margin-bottom: 2rem; } }

.broadcastFixturesContainer {
  clear: both; }

.highlightContainer span.stadiumName {
  padding-left: 2.8rem; }

.fixture--large .teams,
.fixture .teams {
  position: relative;
  font-size: 0; }

.fixture--large .teams {
  width: 45%; }

.fixture .teams {
  width: 42%; }

.fixture,
.fixture--large {
  display: block;
  color: #242424;
  text-decoration: none;
  position: relative; }
  .fixture .arrow-right,
  .fixture--large .arrow-right {
    display: none; }
  .fixture .short,
  .fixture--large .short {
    display: none; }
  .fixture span,
  .fixture time,
  .fixture--large span,
  .fixture--large time {
    display: inline-block;
    vertical-align: middle; }
  .fixture .overview,
  .fixture--large .overview {
    display: block;
    padding: 1.8rem 0; }
    .fixture .overview .broadcaster.broadcaster--multiple,
    .fixture--large .overview .broadcaster.broadcaster--multiple {
      font-size: 12px;
      padding: 10px;
      max-width: 15%;
      width: auto;
      margin: 0 auto;
      text-align: left; }
      .fixture .overview .broadcaster.broadcaster--multiple .liveOn,
      .fixture--large .overview .broadcaster.broadcaster--multiple .liveOn {
        margin-bottom: 5px;
        display: block;
        width: 50%;
        float: left;
        text-align: right;
        margin-top: 5px; }
    .fixture .overview .broadcaster--stacked,
    .fixture--large .overview .broadcaster--stacked {
      padding-left: 0;
      text-align: center;
      display: block;
      min-width: initial; }
      .fixture .overview .broadcaster--stacked li,
      .fixture--large .overview .broadcaster--stacked li {
        display: block; }
        .fixture .overview .broadcaster--stacked li .logo,
        .fixture--large .overview .broadcaster--stacked li .logo {
          display: inline-block;
          margin-bottom: 0; }
          .fixture .overview .broadcaster--stacked li .logo:nth-of-type(n + 1),
          .fixture--large .overview .broadcaster--stacked li .logo:nth-of-type(n + 1) {
            margin-top: 4px; }
    .fixture .overview .score,
    .fixture--large .overview .score {
      background: #37003c;
      font-size: 1.8rem;
      color: #fff;
      font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal; }
      .fixture .overview .score span,
      .fixture--large .overview .score span {
        padding: 0 0.7rem;
        font-weight: 400;
        vertical-align: initial;
        color: #37003c;
        position: relative; }
        .fixture .overview .score span::before,
        .fixture--large .overview .score span::before {
          content: " ";
          display: block;
          width: 0.1rem;
          height: 2.4rem;
          background: rgba(255, 255, 255, 0.2);
          position: absolute;
          top: 0.4rem;
          left: 50%; }
      .fixture .overview .score.has-penalties,
      .fixture--large .overview .score.has-penalties {
        margin-top: -2.5rem; }
    .fixture .overview .score,
    .fixture .overview time,
    .fixture--large .overview .score,
    .fixture--large .overview time {
      line-height: 3.2rem; }
    .fixture .overview .minutes,
    .fixture--large .overview .minutes {
      position: absolute;
      z-index: 1;
      top: 0;
      left: 1.6rem;
      line-height: 5.4rem;
      color: #963cff;
      font-size: 1.1rem; }
      .fixture .overview .minutes strong,
      .fixture--large .overview .minutes strong {
        font-size: 1.2rem;
        display: inline-block;
        vertical-align: bottom; }
  .fixture .highlightName,
  .fixture--large .highlightName {
    width: 45%;
    position: relative; }
  .fixture .team,
  .fixture--large .team {
    width: 50%;
    padding-left: 7.8rem;
    position: relative; }
    .fixture .team:not(:first-of-type) .badge-25,
    .fixture--large .team:not(:first-of-type) .badge-25 {
      left: 4.3rem; }
    .fixture .team:first-of-type,
    .fixture--large .team:first-of-type {
      text-align: right;
      padding-left: 0;
      padding-right: 7.8rem; }
      .fixture .team:first-of-type .badge-25,
      .fixture--large .team:first-of-type .badge-25 {
        right: 4rem; }
    .fixture .team .shortname,
    .fixture--large .team .shortname {
      display: block;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; }
    .fixture .team .abbr,
    .fixture--large .team .abbr {
      display: none; }
  .fixture .teamName,
  .fixture--large .teamName {
    font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal;
    font-size: 1.7rem;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 100%; }
  .fixture .penalties,
  .fixture--large .penalties {
    font-size: 1.1rem;
    text-align: center;
    height: 2rem;
    line-height: 2rem;
    width: 100%;
    margin-top: 0.5rem; }
    .fixture .penalties p,
    .fixture--large .penalties p {
      color: #76766f; }
    .fixture .penalties__lowercase,
    .fixture--large .penalties__lowercase {
      text-transform: lowercase;
      vertical-align: baseline; }
  .fixture time,
  .fixture .score,
  .fixture--large time,
  .fixture--large .score {
    width: 6.6rem;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -3.2rem;
    margin-top: -1.5rem; }
  .fixture time,
  .fixture--large time {
    background: #fff;
    color: #2f2f2f;
    font-size: 1.3rem;
    border: 1px solid #efefef;
    margin-top: -1.7rem; }
  .fixture .badge-25,
  .fixture--large .badge-25 {
    position: absolute;
    top: 50%;
    margin-top: -12.5px; }
  .fixture .stadium,
  .fixture .stadium-w,
  .fixture--large .stadium,
  .fixture--large .stadium-w {
    margin-right: 0.5rem; }
  .fixture .stadiumName,
  .fixture .broadcaster,
  .fixture--large .stadiumName,
  .fixture--large .broadcaster {
    border-left-color: rgba(0, 0, 0, 0.15);
    padding-left: 1rem;
    font-size: 1.3rem;
    min-width: 16rem; }
  .fixture .stadiumName,
  .fixture--large .stadiumName {
    width: 25%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap; }
  .fixture .broadcaster,
  .fixture--large .broadcaster {
    color: #76766f;
    margin-top: 0; }
    .fixture .broadcaster:empty,
    .fixture--large .broadcaster:empty {
      display: none; }
    .fixture .broadcaster .logo,
    .fixture--large .broadcaster .logo {
      margin-left: 0.5rem; }
  .fixture .overview > .arrow-right,
  .fixture--large .overview > .arrow-right {
    position: absolute;
    top: 2.2rem;
    right: 2.3rem;
    transition: right 0.2s;
    content: "";
    background: url("../pulselive/i/sprites/arrows-sprite.png") -56px -58px no-repeat;
    width: 15px;
    height: 11px; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .fixture .overview > .arrow-right,
      .fixture--large .overview > .arrow-right {
        background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
        background-size: 91px 82px; } }
  .fixture .matchDetails,
  .fixture--large .matchDetails {
    background: #fff;
    display: block;
    color: #242424;
    padding-left: 6rem;
    position: relative; }
    .fixture .matchDetails::before,
    .fixture--large .matchDetails::before {
      content: "";
      display: block; }
    .fixture .matchDetails::after,
    .fixture--large .matchDetails::after {
      content: "";
      display: table;
      clear: both; }
  .fixture .eventsContainer,
  .fixture--large .eventsContainer {
    width: 40%;
    padding: 1rem 0 1.3rem; }
    .fixture .eventsContainer h6,
    .fixture--large .eventsContainer h6 {
      text-align: center;
      font-size: 1.1rem;
      color: #76766f;
      font-weight: 400;
      font-family: "PremierSans-Regular", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal; }
    .fixture .eventsContainer::after,
    .fixture--large .eventsContainer::after {
      content: "";
      display: block;
      height: 3px;
      width: 100%;
      position: absolute;
      bottom: 0;
      left: 0;
      background: #e90052; }
  .fixture .teamEvents,
  .fixture--large .teamEvents {
    width: 50%;
    float: left;
    font-size: 1.2rem; }
    .fixture .teamEvents li,
    .fixture--large .teamEvents li {
      padding: 0.8rem 0;
      position: relative;
      line-height: 1.3; }
    .fixture .teamEvents .icon,
    .fixture--large .teamEvents .icon {
      width: 2rem;
      display: block;
      margin-top: 1px; }
    .fixture .teamEvents .icn,
    .fixture--large .teamEvents .icn {
      margin: 0 auto;
      display: block; }
    .fixture .teamEvents .info,
    .fixture--large .teamEvents .info {
      display: block; }
    .fixture .teamEvents.home,
    .fixture--large .teamEvents.home {
      padding-right: 1rem;
      text-align: right;
      border-right: 1px dashed #e8e8e8; }
      .fixture .teamEvents.home .icon,
      .fixture--large .teamEvents.home .icon {
        float: right; }
      .fixture .teamEvents.home .info,
      .fixture--large .teamEvents.home .info {
        margin-right: 3rem; }
    .fixture .teamEvents.away,
    .fixture--large .teamEvents.away {
      padding-left: 1rem; }
      .fixture .teamEvents.away .icon,
      .fixture--large .teamEvents.away .icon {
        float: left; }
      .fixture .teamEvents.away .info,
      .fixture--large .teamEvents.away .info {
        margin-left: 3rem; }
  .fixture .assists,
  .fixture--large .assists {
    color: #76766f; }
    .fixture .assists li,
    .fixture--large .assists li {
      padding: 0.3rem 0; }
  .fixture .og,
  .fixture--large .og {
    color: #267788;
    margin-top: -0.1rem; }
  .fixture.live,
  .fixture--large.live {
    color: #2f2f2f;
    border-top: 0; }
    .fixture.live .stadiumName,
    .fixture.live .broadcaster,
    .fixture--large.live .stadiumName,
    .fixture--large.live .broadcaster {
      border-color: #d00049; }
    .fixture.live .broadcaster p,
    .fixture--large.live .broadcaster p {
      color: #fff; }
    .fixture.live .score,
    .fixture--large.live .score {
      background: #ff2882;
      color: #fff;
      font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal; }
      .fixture.live .score span,
      .fixture--large.live .score span {
        color: #ff2882; }
  .fixture .mcBtn,
  .fixture--large .mcBtn {
    background: #fff;
    border-radius: 2px;
    padding: 0 5rem 0 1rem;
    float: right;
    margin-right: 0.5rem;
    color: #242424;
    font-size: 1.2rem;
    position: relative;
    font-weight: 600;
    line-height: 3rem; }
    .fixture .mcBtn .arrow-right,
    .fixture--large .mcBtn .arrow-right {
      position: absolute;
      top: 11px;
      right: 10px;
      transition: 0.2s; }
  .fixture .teams,
  .fixture .highlightName,
  .fixture--large .teams,
  .fixture--large .highlightName {
    margin-right: -4px; }
  .fixture .referees,
  .fixture--large .referees {
    text-align: center;
    width: 50%;
    font-size: 1.1rem;
    line-height: 3rem;
    border-left: 1px solid #e8e8e8; }
  .fixture .ref,
  .fixture--large .ref {
    width: 25%;
    margin-right: -4px; }
    .fixture .ref:first-child,
    .fixture--large .ref:first-child {
      font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal;
      font-size: 1.2rem; }
    .fixture .ref .refLabelMobile,
    .fixture--large .ref .refLabelMobile {
      display: none; }
  .fixture .refLabel,
  .fixture--large .refLabel {
    display: none;
    vertical-align: middle;
    margin-right: 1rem;
    color: #76766f; }
  @media (max-width: 75em) {
    .fixture .highlightName,
    .fixture--large .highlightName {
      width: 55%; }
    .fixture .teams,
    .fixture .eventsContainer,
    .fixture--large .teams,
    .fixture--large .eventsContainer {
      width: 55%; }
      .fixture .teams .overview .stadiumName,
      .fixture .eventsContainer .overview .stadiumName,
      .fixture--large .teams .overview .stadiumName,
      .fixture--large .eventsContainer .overview .stadiumName {
        display: none; }
      .fixture .teams.referee,
      .fixture .eventsContainer.referee,
      .fixture--large .teams.referee,
      .fixture--large .eventsContainer.referee {
        margin-bottom: 2rem;
        border-bottom: 1px solid #e8e8e8; }
        .fixture .teams.referee .overview,
        .fixture .eventsContainer.referee .overview,
        .fixture--large .teams.referee .overview,
        .fixture--large .eventsContainer.referee .overview {
          padding-bottom: 0;
          padding-right: 0; }
          .fixture .teams.referee .overview > .arrow-right,
          .fixture .eventsContainer.referee .overview > .arrow-right,
          .fixture--large .teams.referee .overview > .arrow-right,
          .fixture--large .eventsContainer.referee .overview > .arrow-right {
            margin-top: 0;
            top: 1.6rem; }
      .fixture .teams .referees,
      .fixture .eventsContainer .referees,
      .fixture--large .teams .referees,
      .fixture--large .eventsContainer .referees {
        border-left: 0;
        width: auto;
        background: #f0f0f0;
        border-top: 1px solid #e8e8e8;
        display: block; }
      .fixture .teams .ref,
      .fixture .eventsContainer .ref,
      .fixture--large .teams .ref,
      .fixture--large .eventsContainer .ref {
        font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-weight: normal;
        margin-right: 0; }
      .fixture .teams .refLabel,
      .fixture .eventsContainer .refLabel,
      .fixture--large .teams .refLabel,
      .fixture--large .eventsContainer .refLabel {
        display: inline-block; }
    .fixture .overview .stadiumName,
    .fixture--large .overview .stadiumName {
      display: none; }
    .fixture.referee,
    .fixture--large.referee {
      margin-bottom: 2rem;
      border-bottom: 1px solid #e8e8e8; }
      .fixture.referee .overview,
      .fixture--large.referee .overview {
        padding-bottom: 0;
        padding-right: 0; }
        .fixture.referee .overview .referees,
        .fixture--large.referee .overview .referees {
          border-top: 0 solid #e8e8e8;
          margin-top: 0; }
        .fixture.referee .overview > .arrow-right,
        .fixture--large.referee .overview > .arrow-right {
          margin-top: 0;
          top: 1.6rem; }
    .fixture .referees,
    .fixture--large .referees {
      border-left: 0;
      width: auto;
      background: #f0f0f0;
      border-top: 1px solid #e8e8e8;
      margin: 0.5rem -4rem -0.5rem;
      display: block; }
    .fixture .ref,
    .fixture--large .ref {
      font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal;
      margin-right: 0; }
    .fixture .refLabel,
    .fixture--large .refLabel {
      display: inline-block; } }
  @media (max-width: 43.75em) {
    .fixture .referees,
    .fixture--large .referees {
      text-align: left; }
    .fixture .ref,
    .fixture--large .ref {
      text-align: center; }
      .fixture .ref .refLabelMobile,
      .fixture--large .ref .refLabelMobile {
        display: initial;
        vertical-align: bottom;
        font-weight: bold;
        margin-right: 0.5rem; }
    .fixture time,
    .fixture--large time {
      margin-top: -1.8rem; } }
  @media (max-width: 31.25em) {
    .fixture .overview .score,
    .fixture .overview time,
    .fixture--large .overview .score,
    .fixture--large .overview time {
      font-size: 1.1rem;
      width: 6.6rem;
      margin-left: -3.3rem; }
    .fixture .overview .score,
    .fixture--large .overview .score {
      font-size: 1.8rem; }
    .fixture .overview time,
    .fixture--large .overview time {
      font-size: 1.1rem; }
    .fixture .overview .team,
    .fixture--large .overview .team {
      padding-left: 7.6rem; }
      .fixture .overview .team:not(:first-of-type) .badge-25,
      .fixture--large .overview .team:not(:first-of-type) .badge-25 {
        left: 4.1rem; }
      .fixture .overview .team:first-of-type,
      .fixture--large .overview .team:first-of-type {
        padding-left: 0;
        padding-right: 7.6rem; }
        .fixture .overview .team:first-of-type .badge-25,
        .fixture--large .overview .team:first-of-type .badge-25 {
          right: 4.1rem; }
    .fixture .overview .minutes strong,
    .fixture--large .overview .minutes strong {
      font-size: 0.9rem; }
    .fixture .overview .teamName,
    .fixture--large .overview .teamName {
      font-size: 1.2rem;
      font-weight: 400; }
    .fixture .overview .arrow-right,
    .fixture--large .overview .arrow-right {
      content: "";
      background: url("../pulselive/i/sprites/arrows-sprite.png") -71px -58px no-repeat;
      width: 9px;
      height: 8px; } }
  @media (max-width: 31.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 31.25em) and (min-resolution: 192dpi) {
    .fixture .overview .arrow-right,
    .fixture--large .overview .arrow-right {
      background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
      background-size: 91px 82px; } }
  @media (max-width: 28.125em) {
    .fixture .overview .score,
    .fixture--large .overview .score {
      line-height: 2.8rem;
      top: 50%; }
      .fixture .overview .score span,
      .fixture--large .overview .score span {
        line-height: 2.8rem; }
        .fixture .overview .score span::before,
        .fixture--large .overview .score span::before {
          height: 2rem; }
    .fixture .overview .team,
    .fixture--large .overview .team {
      padding-right: 0;
      padding-left: 7.5rem; }
      .fixture .overview .team:first-of-type,
      .fixture--large .overview .team:first-of-type {
        padding-left: 0;
        padding-right: 7.5rem; }
      .fixture .overview .team .teamName,
      .fixture--large .overview .team .teamName {
        font-size: 1.1rem; }
    .fixture .teamEvents.home .info,
    .fixture--large .teamEvents.home .info {
      margin-right: 2rem; }
    .fixture .teamEvents.away .info,
    .fixture--large .teamEvents.away .info {
      margin-left: 2rem; } }
  @media (max-width: 22.4375em) {
    .fixture .overview .team .teamName,
    .fixture--large .overview .team .teamName {
      font-size: 1.5rem; }
    .fixture .overview .team .shortname,
    .fixture--large .overview .team .shortname {
      display: none; }
    .fixture .overview .team .abbr,
    .fixture--large .overview .team .abbr {
      display: block; } }
  @media (max-width: 56.25em) {
    .fixture .matchDetails,
    .fixture--large .matchDetails {
      padding-left: 0; }
    .fixture .teams,
    .fixture .eventsContainer,
    .fixture .highlightName,
    .fixture--large .teams,
    .fixture--large .eventsContainer,
    .fixture--large .highlightName {
      width: 100%;
      padding-right: 0; }
    .fixture .teams,
    .fixture .highlightName,
    .fixture--large .teams,
    .fixture--large .highlightName {
      padding: 0.5rem 2.5rem; }
    .fixture .broadcaster,
    .fixture--large .broadcaster {
      padding: 0.3rem 0;
      margin: 0;
      background: none;
      display: block;
      border: 0;
      text-align: center;
      color: #242424;
      position: relative;
      font-size: 1rem;
      margin-bottom: 1rem; }
      .fixture .broadcaster::before,
      .fixture--large .broadcaster::before {
        content: "";
        display: block; }
      .fixture .broadcaster::after,
      .fixture--large .broadcaster::after {
        content: "";
        display: table;
        clear: both; }
      .fixture .broadcaster .main,
      .fixture--large .broadcaster .main {
        float: left;
        width: 50%;
        padding-right: 0.5rem; }
      .fixture .broadcaster .channel,
      .fixture--large .broadcaster .channel {
        float: left;
        width: 50%;
        text-align: left;
        margin-left: 0;
        border-color: #fff;
        padding-left: 1rem; }
      .fixture .broadcaster.noChannel .main,
      .fixture--large .broadcaster.noChannel .main {
        width: 100%;
        padding-right: 0;
        text-align: center; }
    .fixture.live,
    .fixture--large.live {
      background-color: transparent;
      border-bottom: 0; }
      .fixture.live .overview,
      .fixture--large.live .overview {
        position: relative; }
      .fixture.live .long,
      .fixture--large.live .long {
        display: none; }
      .fixture.live .short,
      .fixture--large.live .short {
        display: inline-block;
        vertical-align: baseline; }
      .fixture.live .team:first-of-type,
      .fixture--large.live .team:first-of-type {
        padding-left: 4rem; }
      .fixture.live:focus .teams,
      .fixture--large.live:focus .teams {
        background: #b60040; }
    .fixture.referee .overview,
    .fixture--large.referee .overview {
      padding: 0; } }

@media (max-width: 63.9375em) {
  .fixture .mcBtn {
    width: 3rem;
    position: absolute;
    right: 0;
    top: 50%;
    margin-top: -1.5rem;
    padding: 0 1rem;
    z-index: 5;
    text-indent: -99999px; } }

@media (max-width: 56.25em) {
  .fixture.referee {
    border-bottom: 0;
    margin-bottom: 0; }
  .fixture .referees {
    border-top: 0 solid #e8e8e8;
    margin: 0;
    width: 100%; }
  .fixture .ref {
    border-top: 1px solid #e8e8e8;
    width: 100%; }
  .fixture .overview > .arrow-right {
    right: 1rem; } }

@media (max-width: 56.25em) {
  .fixture .matchDetails {
    padding-left: 0; }
  .fixture .teams,
  .fixture .eventsContainer,
  .fixture .highlightName {
    width: 100%;
    padding-right: 0; }
  .fixture .teams,
  .fixture .highlightName {
    padding: 0 2.5rem; }
  .fixture .broadcaster {
    padding: 0.5rem 0 0;
    margin: 0;
    display: block;
    border: 0;
    text-align: center;
    color: #242424;
    position: relative;
    font-size: 1rem;
    margin-bottom: 1rem; }
    .fixture .broadcaster::before {
      content: "";
      display: block; }
    .fixture .broadcaster::after {
      content: "";
      display: table;
      clear: both; }
    .fixture .broadcaster .main {
      float: left;
      width: 50%;
      padding-right: 0.5rem; }
    .fixture .broadcaster .channel {
      float: left;
      width: 50%;
      text-align: left;
      margin-left: 0;
      border-color: #fff;
      padding-left: 1rem; }
    .fixture .broadcaster.noChannel .main {
      width: 100%;
      padding-right: 0;
      text-align: center; }
  .fixture.live {
    background-color: transparent;
    border-bottom: 0; }
    .fixture.live .overview {
      position: relative; }
    .fixture.live .long {
      display: none; }
    .fixture.live .short {
      display: inline-block;
      vertical-align: baseline; }
    .fixture.live .team:first-of-type {
      padding-left: 1rem; }
    .fixture.live .broadcaster .logo .broadcaster-text {
      color: #e90052; }
    .fixture.live:focus .teams {
      background: #b60040; }
  .fixture.referee .overview {
    padding: 0; } }

.fixture .multipleBroadcastersButton {
  margin-left: 0.5rem;
  color: #000; }
  .fixture .multipleBroadcastersButton:hover {
    color: #000; }

.fixture.fixture--small .overview {
  padding-right: 0; }
  .fixture.fixture--small .overview .teams,
  .fixture.fixture--small .overview .highlightName {
    width: 100%; }
    .fixture.fixture--small .overview .teams time,
    .fixture.fixture--small .overview .highlightName time {
      line-height: 2.5rem;
      width: 5rem; }

.fixture.fixture--small .broadcaster {
  padding: 0.3rem 0;
  margin: 0;
  background: none;
  display: block;
  border: 0;
  text-align: center;
  color: #242424;
  position: relative;
  font-size: 1rem;
  margin-bottom: 1rem; }
  .fixture.fixture--small .broadcaster::before {
    content: "";
    display: block; }
  .fixture.fixture--small .broadcaster::after {
    content: "";
    display: table;
    clear: both; }
  .fixture.fixture--small .broadcaster .main {
    float: left;
    width: 50%;
    padding-right: 0.5rem; }
  .fixture.fixture--small .broadcaster .channel {
    float: left;
    width: 50%;
    text-align: left;
    margin-left: 0;
    border-color: #fff;
    padding-left: 1rem; }
  .fixture.fixture--small .broadcaster.noChannel .main {
    width: 100%;
    padding-right: 0;
    text-align: center; }

div.fixture .arrow-right,
a.fixture .arrow-right {
  display: block; }

div.fixture[data-href]:not(.disabled):hover, div.fixture[data-href]:not(.disabled):focus,
a.fixture[data-href]:not(.disabled):hover,
a.fixture[data-href]:not(.disabled):focus {
  background: linear-gradient(to left, #ff2882, #963cff 45%);
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15);
  color: #fff;
  cursor: pointer; }
  div.fixture[data-href]:not(.disabled):hover .stadium, div.fixture[data-href]:not(.disabled):focus .stadium,
  a.fixture[data-href]:not(.disabled):hover .stadium,
  a.fixture[data-href]:not(.disabled):focus .stadium {
    content: "";
    background: url("../pulselive/i/sprites/global-sprite.png") -607px -491px no-repeat;
    width: 30px;
    height: 14px; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      div.fixture[data-href]:not(.disabled):hover .stadium, div.fixture[data-href]:not(.disabled):focus .stadium,
      a.fixture[data-href]:not(.disabled):hover .stadium,
      a.fixture[data-href]:not(.disabled):focus .stadium {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  div.fixture[data-href]:not(.disabled):hover time, div.fixture[data-href]:not(.disabled):focus time,
  a.fixture[data-href]:not(.disabled):hover time,
  a.fixture[data-href]:not(.disabled):focus time {
    background: #fff;
    border-color: #fff; }
  div.fixture[data-href]:not(.disabled):hover .broadcaster, div.fixture[data-href]:not(.disabled):focus .broadcaster,
  a.fixture[data-href]:not(.disabled):hover .broadcaster,
  a.fixture[data-href]:not(.disabled):focus .broadcaster {
    color: #fff; }
  div.fixture[data-href]:not(.disabled):hover .minutes, div.fixture[data-href]:not(.disabled):focus .minutes,
  a.fixture[data-href]:not(.disabled):hover .minutes,
  a.fixture[data-href]:not(.disabled):focus .minutes {
    color: #fff; }
  div.fixture[data-href]:not(.disabled):hover .overview > .arrow-right, div.fixture[data-href]:not(.disabled):focus .overview > .arrow-right,
  a.fixture[data-href]:not(.disabled):hover .overview > .arrow-right,
  a.fixture[data-href]:not(.disabled):focus .overview > .arrow-right {
    content: "";
    background: url("../pulselive/i/sprites/arrows-sprite.png") -56px -47px no-repeat;
    width: 15px;
    height: 11px;
    right: 1rem; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      div.fixture[data-href]:not(.disabled):hover .overview > .arrow-right, div.fixture[data-href]:not(.disabled):focus .overview > .arrow-right,
      a.fixture[data-href]:not(.disabled):hover .overview > .arrow-right,
      a.fixture[data-href]:not(.disabled):focus .overview > .arrow-right {
        background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
        background-size: 91px 82px; } }

div.fixture:hover:not(.disabled):hover .overview > .arrow-right, div.fixture:hover:not(.disabled):focus .overview > .arrow-right, div.fixture:focus:not(.disabled):hover .overview > .arrow-right, div.fixture:focus:not(.disabled):focus .overview > .arrow-right,
a.fixture:hover:not(.disabled):hover .overview > .arrow-right,
a.fixture:hover:not(.disabled):focus .overview > .arrow-right,
a.fixture:focus:not(.disabled):hover .overview > .arrow-right,
a.fixture:focus:not(.disabled):focus .overview > .arrow-right {
  right: 1.5rem; }

div.fixture:hover.live .score, div.fixture:focus.live .score,
a.fixture:hover.live .score,
a.fixture:focus.live .score {
  background-color: #fff;
  color: #37003c; }
  div.fixture:hover.live .score span, div.fixture:focus.live .score span,
  a.fixture:hover.live .score span,
  a.fixture:focus.live .score span {
    color: #fff; }
    div.fixture:hover.live .score span::before, div.fixture:focus.live .score span::before,
    a.fixture:hover.live .score span::before,
    a.fixture:focus.live .score span::before {
      background: #37003c; }

div.fixture.live:hover, div.fixture.live:focus,
a.fixture.live:hover,
a.fixture.live:focus {
  background: linear-gradient(to left, #ff2882, #963cff); }
  div.fixture.live:hover .stadiumName,
  div.fixture.live:hover .broadcaster, div.fixture.live:focus .stadiumName,
  div.fixture.live:focus .broadcaster,
  a.fixture.live:hover .stadiumName,
  a.fixture.live:hover .broadcaster,
  a.fixture.live:focus .stadiumName,
  a.fixture.live:focus .broadcaster {
    border-color: #8d0040; }
  div.fixture.live:hover .arrow-right, div.fixture.live:focus .arrow-right,
  a.fixture.live:hover .arrow-right,
  a.fixture.live:focus .arrow-right {
    right: 1.5rem; }
    @media (max-width: 63.9375em) {
      div.fixture.live:hover .arrow-right, div.fixture.live:focus .arrow-right,
      a.fixture.live:hover .arrow-right,
      a.fixture.live:focus .arrow-right {
        right: 10px; } }

@media (max-width: 75em) {
  div.fixture:hover .referees,
  a.fixture:hover .referees {
    color: #242424; }
  div.fixture .stadiumName,
  a.fixture .stadiumName {
    min-width: initial; }
  div.fixture .broadcaster,
  a.fixture .broadcaster {
    min-width: initial; } }

@media (max-width: 56.25em) {
  div.fixture:hover .broadcaster, div.fixture:focus .broadcaster,
  a.fixture:hover .broadcaster,
  a.fixture:focus .broadcaster {
    color: #333; } }

.fixture.fixture--small .overview .teams,
.fixture.fixture--small .overview .highlightName {
  padding: 0 10px; }

.fixture.fixture--small .overview .teamName {
  font-size: 1.2rem; }

.fixture.fixture--small .overview .team {
  font-size: 1.2rem;
  padding-left: 6rem; }
  .fixture.fixture--small .overview .team:first-of-type {
    padding-left: 0;
    padding-right: 6rem; }

.fixture.fixture--small .broadcastDataContainer.broadcaster--multiple {
  display: inline-block;
  max-width: none; }

.fixture.fixture--small .broadcastDataContainer .broadcaster--stacked {
  display: inline; }

.fixture.fixture--small .broadcastDataContainer .broadcaster {
  text-align: center; }

.fixture--large time {
  font-size: 15px; }

.fixture--large .overview {
  padding-right: 0; }
  @media (max-width: 56.25em) {
    .fixture--large .overview .broadcaster.broadcaster--multiple .liveOn {
      display: none; } }
  @media (max-width: 56.25em) {
    .fixture--large .overview .broadcaster.broadcaster--multiple {
      text-align: center;
      width: 100%;
      padding: 0;
      max-width: none; } }
  .fixture--large .overview .broadcaster--stacked {
    width: 50%;
    min-width: initial;
    float: right; }
    @media (max-width: 56.25em) {
      .fixture--large .overview .broadcaster--stacked {
        width: 100%;
        margin-bottom: 0; }
        .fixture--large .overview .broadcaster--stacked li {
          display: inline; } }
  .fixture--large .overview .matchDate {
    font-size: 15px;
    padding-left: 10px;
    width: 18%;
    text-align: left; }
    @media (max-width: 81.25em) {
      .fixture--large .overview .matchDate {
        width: 100%; } }
  .fixture--large .overview .matchDate.matchDate--fullWidth {
    width: 100%; }
  .fixture--large .overview .matchDate.matchDate--halfWidth {
    width: 50%; }
  .fixture--large .overview .teams {
    width: 40%; }
    @media (max-width: 75em) {
      .fixture--large .overview .teams {
        width: 55%; } }
    @media (max-width: 56.25em) {
      .fixture--large .overview .teams {
        width: 100%; } }
  .fixture--large .overview .teams.teams--medium,
  .fixture--large .overview .highlightName {
    width: 55%; }
    @media (max-width: 56.25em) {
      .fixture--large .overview .teams.teams--medium,
      .fixture--large .overview .highlightName {
        width: 100%; } }
  .fixture--large .overview .teamName {
    font-size: 15px; }
  .fixture--large .overview .stadiumName {
    font-size: 12px;
    width: 10%; }
  .fixture--large .overview .broadcasters {
    display: inline-block;
    width: 20%; }
    @media (max-width: 56.25em) {
      .fixture--large .overview .broadcasters {
        width: 100%; } }

@media (max-width: 56.25em) {
  .fixtures .matchList.broadcasterMatchlist {
    border-bottom: 0; }
    .fixtures .matchList.broadcasterMatchlist > li {
      margin-bottom: 2rem; } }

.footerSponsorStrip {
  background: #fff;
  max-width: 1376px;
  margin: auto;
  padding-left: 1rem;
  padding-right: 1rem;
  margin: 0 auto;
  padding: 4.5rem 0 2rem;
  position: relative;
  z-index: 1; }
  .footerSponsorStrip::after {
    background: linear-gradient(to left, #ff2882, #963cff);
    content: "";
    display: block;
    height: 0.4rem;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: auto; }
  .footerSponsorStrip ul {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    width: 100%; }
  .footerSponsorStrip li {
    padding: 0 1.5rem;
    display: flex;
    position: relative;
    margin-bottom: 2rem; }
    .footerSponsorStrip li a {
      align-self: center;
      text-decoration: none;
      color: #76766f;
      text-align: center;
      font-size: 1.1rem;
      display: flex;
      flex-direction: column;
      height: 100%;
      /* styelint-disable selector-max-type */
      /* styelint-enable selector-max-type */ }
      .footerSponsorStrip li a:hover, .footerSponsorStrip li a:focus {
        text-decoration: underline; }
    .footerSponsorStrip li .icn {
      margin: auto auto 1rem; }
    .footerSponsorStrip li .type {
      margin-top: auto;
      font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal; }
    .footerSponsorStrip li:nth-child(1) {
      padding-right: 3rem;
      margin-right: 1rem; }
      .footerSponsorStrip li:nth-child(1)::after {
        background: #e8e8e8;
        content: "";
        display: block;
        height: 4.8rem;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 0.1rem; }
    .footerSponsorStrip li:nth-last-child(2) {
      padding-left: 3rem;
      margin-left: 1rem; }
      .footerSponsorStrip li:nth-last-child(2)::after {
        background: #e8e8e8;
        content: "";
        display: block;
        height: 4.8rem;
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 0.1rem; }
  .footerSponsorStrip .small {
    display: none; }
  .footerSponsorStrip .sponsor-footer-ea,
  .footerSponsorStrip .sponsor-footer-ea-sm {
    transform: scale(0.8); }
  @media (max-width: 75em) and (min-width: 68.75em) {
    .footerSponsorStrip li {
      padding: 0 0.5rem; } }
  @media (max-width: 68.75em) {
    .footerSponsorStrip li {
      padding: 0 0.4rem; }
    .footerSponsorStrip .large {
      display: none; }
    .footerSponsorStrip .small {
      display: block; } }
  @media (max-width: 56.25em) {
    .footerSponsorStrip {
      display: block;
      margin: 0;
      border-top: 0;
      padding: 1rem; }
      .footerSponsorStrip .pl-logo-footer {
        content: "";
        background: url("../pulselive/i/sprites/pl-logo-sprite.png") -119px -155px no-repeat;
        width: 107px;
        height: 45px; } }
    @media (max-width: 56.25em) and (-webkit-min-device-pixel-ratio: 2), (max-width: 56.25em) and (min-resolution: 192dpi) {
      .footerSponsorStrip .pl-logo-footer {
        background-image: url("../pulselive/i/sprites/pl-logo-sprite@x2.png");
        background-size: 517px 308px; } }
  @media (max-width: 56.25em) {
      .footerSponsorStrip::after {
        left: 1rem;
        right: 1rem; }
      .footerSponsorStrip li {
        width: 33.3%;
        padding: 1rem;
        border-bottom: 1px solid #e8e8e8;
        margin-bottom: 0; }
        .footerSponsorStrip li:first-child {
          width: 100%;
          border-right: 0;
          margin-right: 0; }
          .footerSponsorStrip li:first-child::after {
            display: none; }
        .footerSponsorStrip li:nth-child(1) {
          padding-right: 1rem; }
        .footerSponsorStrip li:nth-last-child(2) {
          border-left: 0;
          border-bottom: 0;
          margin-left: 0;
          padding-left: 1rem; }
          .footerSponsorStrip li:nth-last-child(2)::after {
            display: none; }
        .footerSponsorStrip li:last-child {
          border-bottom: 0; }
      .footerSponsorStrip a {
        margin: auto; } }
  @media (max-width: 500px) {
    .footerSponsorStrip li {
      width: 50%;
      border-right: 0; }
      .footerSponsorStrip li:not(:nth-child(3n + 1)) {
        border-right: 0; }
      .footerSponsorStrip li:nth-child(2n) {
        border-right: 1px solid #e8e8e8; } }

/* Responsive Video */
.videoWrapper {
  position: relative;
  padding-bottom: 56.25%;
  height: 0; }
  .videoWrapper iframe,
  .videoWrapper object,
  .videoWrapper embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; }
  .videoWrapper video {
    width: 100%;
    height: auto; }

.inlineVideo .videoWrapper {
  margin-bottom: 1rem; }

.inlineVideo .runTime {
  margin-bottom: 1rem; }

.inlineVideo .title {
  font-size: 1.6rem;
  line-height: 1.2;
  font-weight: 600;
  margin-bottom: 1rem; }

@keyframes colour {
  0% {
    background: #37003c; }
  33% {
    background: #963cff; }
  66% {
    background: #ff2882; }
  100% {
    background: #ff6900; } }

@keyframes grow {
  from {
    width: 0; }
  to {
    width: 10rem; } }

.loader-small {
  position: relative;
  clear: both;
  display: table;
  margin: 0 auto;
  height: 1rem; }
  .loader-small .line {
    animation: grow 0.4s infinite alternate, colour 1.6s infinite forwards;
    height: 2px; }

.loader {
  text-align: center;
  margin: 2rem 0;
  clear: both; }
  .loader .loader-small {
    margin-top: 1rem; }

.paginationContainer {
  margin: 2rem 0; }
  .paginationContainer .paginationBtn {
    width: 4rem;
    height: 4rem;
    border-radius: 100%;
    border: 1px solid #e8e8e8;
    display: inline-block;
    vertical-align: middle;
    margin-left: 1rem;
    position: relative;
    cursor: pointer;
    transition: 0.2s; }
    .paginationContainer .paginationBtn:hover {
      background: #e8e8e8; }
      .paginationContainer .paginationBtn:hover .icn {
        opacity: 1; }
    .paginationContainer .paginationBtn.inactive {
      background-color: transparent;
      opacity: 0.4;
      cursor: default; }
      .paginationContainer .paginationBtn.inactive .icn {
        opacity: 0.6; }
  .paginationContainer .icn {
    opacity: 0.6;
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    margin-top: -7.5px;
    margin-left: -4.5px;
    transition: 0.2s; }
  .paginationContainer .paginationPages {
    display: inline-block;
    vertical-align: middle; }
  .paginationContainer li {
    display: inline-block;
    vertical-align: middle;
    min-width: 3rem;
    height: 3rem;
    line-height: 3rem;
    border-radius: 100%;
    margin-left: 1rem;
    text-align: center;
    color: #76766f; }
    .paginationContainer li:hover {
      background: #e8e8e8;
      cursor: pointer; }
    .paginationContainer li.break:hover {
      cursor: default;
      background: transparent; }
    .paginationContainer li.active {
      background: #e90052;
      color: #fff; }
      .paginationContainer li.active:hover {
        color: #fff; }

.searchInputContainer {
  position: relative;
  margin-bottom: 2rem;
  margin-right: 3.5rem; }
  .searchInputContainer .searchInput {
    display: block;
    height: 5rem;
    border: 0;
    padding: 0 2.5rem 0 1rem;
    width: 100%;
    z-index: 1;
    border-radius: 0;
    appearance: none;
    background-color: transparent;
    border-bottom: 1px solid #e8e8e8;
    transition: 0.2s; }
    .searchInputContainer .searchInput:focus {
      border-bottom-color: #e90052; }
  .searchInputContainer input[type="search"] {
    box-sizing: border-box; }
  .searchInputContainer .searchCommit {
    position: absolute;
    top: 50%;
    margin-top: -1.75rem;
    right: 1rem;
    width: 3.5rem;
    height: 3.5rem;
    background: #fff;
    border-radius: 100%;
    transition: all 0.2s;
    cursor: pointer; }
    .searchInputContainer .searchCommit .icn {
      position: absolute;
      top: 50%;
      left: 50%;
      z-index: 1;
      margin-top: -10px;
      margin-left: -10px; }
    .searchInputContainer .searchCommit:hover, .searchInputContainer .searchCommit:focus {
      background: #e90052; }
      .searchInputContainer .searchCommit:hover .icn, .searchInputContainer .searchCommit:focus .icn {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -677px -517px no-repeat;
        width: 20px;
        height: 20px; }
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
          .searchInputContainer .searchCommit:hover .icn, .searchInputContainer .searchCommit:focus .icn {
            background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
            background-size: 748px 697px; } }
  .searchInputContainer .clearBtn {
    right: 6rem; }
  @media (max-width: 43.75em) {
    .searchInputContainer {
      margin-bottom: 0; }
      .searchInputContainer .searchInput {
        height: 4.8rem; }
      .searchInputContainer .searchCommit {
        height: 3.6rem;
        width: 3.6rem;
        right: 1rem;
        margin-top: -1.8rem; } }

/* stylelint-disable */
.socialShare .label {
  display: none; }

.socialShare .share-white {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -8px;
  margin-left: -6px; }

.socialShare .share-whitesmall {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -6px;
  margin-left: -4.5px; }

.socialShare .share-black {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -8px;
  margin-left: -6px; }

.socialShare .share-grey {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -8px;
  margin-left: -6px; }

.socialShare .twitter-w {
  content: "";
  background: url("../pulselive/i/sprites/social-sprite.png") -28px 0px no-repeat;
  width: 25px;
  height: 21px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .socialShare .twitter-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.socialShare .facebook-w {
  content: "";
  background: url("../pulselive/i/sprites/social-sprite.png") -53px 0px no-repeat;
  width: 22px;
  height: 22px;
  margin-top: -10.5px;
  margin-left: -10.5px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .socialShare .facebook-w {
      background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
      background-size: 130px 118px; } }

.socialShare .google-w {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -7.5px;
  margin-left: -7.5px; }

.socialShare .whatsapp-w {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -7.5px;
  margin-left: -7.5px; }

.socialShare .mail-w {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -5px;
  margin-left: -7.5px; }

.socialShare .twitter {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -6px;
  margin-left: -6.5px; }

.socialShare .facebook {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -6.5px;
  margin-left: -4px; }

.socialShare .google {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -6.5px;
  margin-left: -6.5px; }

.socialShare .whatsapp {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -7.5px;
  margin-left: -7.5px; }

.socialShare .mail {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -5px;
  margin-left: -7.5px; }

.socialShare .instagram {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 1;
  margin-top: -9px;
  margin-left: -9px; }

.socialShare .socialOptions {
  white-space: nowrap;
  font-size: 0; }
  .socialShare .socialOptions li {
    display: inline-block;
    vertical-align: top; }
  .socialShare .socialOptions li:nth-child(4) {
    display: none; }
    @media (max-width: 43.75em) {
      .socialShare .socialOptions li:nth-child(4) {
        display: inline-block; } }
  .socialShare .socialOptions .option {
    display: block;
    position: relative;
    width: 4rem;
    height: 4rem;
    transition: all 0.2s;
    cursor: pointer;
    border-radius: 100%; }
    .socialShare .socialOptions .option:hover, .socialShare .socialOptions .option:focus {
      opacity: 1;
      background: rgba(0, 0, 0, 0.1); }

.widgetShare.open,
.socialShareHover {
  position: relative;
  display: inline-block; }
  .widgetShare.open .socialShareBtn,
  .socialShareHover .socialShareBtn {
    padding: 1rem 0.65rem;
    background: #37003c;
    font-size: 0.9rem;
    height: 2rem;
    color: #fff;
    position: relative;
    padding-top: 0.4rem;
    line-height: 1.5rem;
    cursor: pointer;
    transition: 0.2s;
    white-space: nowrap;
    border-radius: 4px 4px 0 0;
    font-family: "PremierSans-Bold-Italic", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal; }
    .widgetShare.open .socialShareBtn .icn,
    .socialShareHover .socialShareBtn .icn {
      display: inline-block;
      vertical-align: middle;
      margin-right: 0.3rem;
      margin-top: -2px;
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -741px -80px no-repeat;
      width: 6px;
      height: 8px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .widgetShare.open .socialShareBtn .icn,
        .socialShareHover .socialShareBtn .icn {
          background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
          background-size: 748px 697px; } }
    .widgetShare.open .socialShareBtn:hover, .widgetShare.open .socialShareBtn:focus,
    .socialShareHover .socialShareBtn:hover,
    .socialShareHover .socialShareBtn:focus {
      color: #fff; }
      .widgetShare.open .socialShareBtn:hover .icn, .widgetShare.open .socialShareBtn:focus .icn,
      .socialShareHover .socialShareBtn:hover .icn,
      .socialShareHover .socialShareBtn:focus .icn {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -741px -80px no-repeat;
        width: 6px;
        height: 8px; }
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
          .widgetShare.open .socialShareBtn:hover .icn, .widgetShare.open .socialShareBtn:focus .icn,
          .socialShareHover .socialShareBtn:hover .icn,
          .socialShareHover .socialShareBtn:focus .icn {
            background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
            background-size: 748px 697px; } }
  .widgetShare.open .socialOptions,
  .socialShareHover .socialOptions {
    position: absolute;
    top: 2rem;
    right: 0;
    left: 0;
    max-height: 0;
    overflow: hidden;
    transition: 0.2s;
    z-index: 20;
    visibility: hidden; }
    .widgetShare.open .socialOptions::after,
    .socialShareHover .socialOptions::after {
      content: " ";
      background: #37003c;
      border-radius: 0 0 4px 4px;
      display: block;
      height: 1rem; }
    .widgetShare.open .socialOptions .option,
    .socialShareHover .socialOptions .option {
      height: 4rem;
      position: relative;
      transition: 0.2s;
      cursor: pointer; }
    .widgetShare.open .socialOptions .icn,
    .socialShareHover .socialOptions .icn {
      transform: translateY(-0.5rem);
      opacity: 0; }
    .widgetShare.open .socialOptions .whatsapp,
    .socialShareHover .socialOptions .whatsapp {
      display: none;
      background: #43d854; }
      .widgetShare.open .socialOptions .whatsapp .icn,
      .socialShareHover .socialOptions .whatsapp .icn {
        content: "";
        background: url("../pulselive/i/sprites/social-sprite.png") -53px -22px no-repeat;
        width: 22px;
        height: 22px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -12px;
        margin-top: -10px; }
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
          .widgetShare.open .socialOptions .whatsapp .icn,
          .socialShareHover .socialOptions .whatsapp .icn {
            background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
            background-size: 130px 118px; } }
      .widgetShare.open .socialOptions .whatsapp:hover, .widgetShare.open .socialOptions .whatsapp:focus,
      .socialShareHover .socialOptions .whatsapp:hover,
      .socialShareHover .socialOptions .whatsapp:focus {
        background: #ff2882; }
    .widgetShare.open .socialOptions .twitter,
    .socialShareHover .socialOptions .twitter {
      background: #00aced; }
      .widgetShare.open .socialOptions .twitter .icn,
      .socialShareHover .socialOptions .twitter .icn {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -12px;
        margin-top: -10px; }
      .widgetShare.open .socialOptions .twitter:hover, .widgetShare.open .socialOptions .twitter:focus,
      .socialShareHover .socialOptions .twitter:hover,
      .socialShareHover .socialOptions .twitter:focus {
        background: #fff; }
        .widgetShare.open .socialOptions .twitter:hover .icn, .widgetShare.open .socialOptions .twitter:focus .icn,
        .socialShareHover .socialOptions .twitter:hover .icn,
        .socialShareHover .socialOptions .twitter:focus .icn {
          content: "";
          background: url("../pulselive/i/sprites/social-sprite.png") 0px -28px no-repeat;
          width: 25px;
          height: 21px; }
          @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .widgetShare.open .socialOptions .twitter:hover .icn, .widgetShare.open .socialOptions .twitter:focus .icn,
            .socialShareHover .socialOptions .twitter:hover .icn,
            .socialShareHover .socialOptions .twitter:focus .icn {
              background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
              background-size: 130px 118px; } }
    .widgetShare.open .socialOptions .facebook,
    .socialShareHover .socialOptions .facebook {
      background: #3b5998; }
      .widgetShare.open .socialOptions .facebook .icn,
      .socialShareHover .socialOptions .facebook .icn {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -11px;
        margin-top: -11px; }
      .widgetShare.open .socialOptions .facebook:hover, .widgetShare.open .socialOptions .facebook:focus,
      .socialShareHover .socialOptions .facebook:hover,
      .socialShareHover .socialOptions .facebook:focus {
        background: #fff; }
        .widgetShare.open .socialOptions .facebook:hover .icn, .widgetShare.open .socialOptions .facebook:focus .icn,
        .socialShareHover .socialOptions .facebook:hover .icn,
        .socialShareHover .socialOptions .facebook:focus .icn {
          content: "";
          background: url("../pulselive/i/sprites/social-sprite.png") 0px -49px no-repeat;
          width: 22px;
          height: 22px; }
          @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .widgetShare.open .socialOptions .facebook:hover .icn, .widgetShare.open .socialOptions .facebook:focus .icn,
            .socialShareHover .socialOptions .facebook:hover .icn,
            .socialShareHover .socialOptions .facebook:focus .icn {
              background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
              background-size: 130px 118px; } }
    .widgetShare.open .socialOptions .google,
    .socialShareHover .socialOptions .google {
      display: none;
      background: #dd4b39; }
      .widgetShare.open .socialOptions .google .icn,
      .socialShareHover .socialOptions .google .icn {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        margin-top: -7.5px;
        margin-left: -7.5px; }
      .widgetShare.open .socialOptions .google:hover, .widgetShare.open .socialOptions .google:focus,
      .socialShareHover .socialOptions .google:hover,
      .socialShareHover .socialOptions .google:focus {
        background: #c23321; }
    .widgetShare.open .socialOptions .email,
    .socialShareHover .socialOptions .email {
      background: #fff; }
      .widgetShare.open .socialOptions .email .icn,
      .socialShareHover .socialOptions .email .icn {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        margin-top: -8px;
        margin-left: -12px;
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -381px -452px no-repeat;
        width: 24px;
        height: 16px; }
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
          .widgetShare.open .socialOptions .email .icn,
          .socialShareHover .socialOptions .email .icn {
            background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
            background-size: 748px 697px; } }
      .widgetShare.open .socialOptions .email:hover, .widgetShare.open .socialOptions .email:focus,
      .socialShareHover .socialOptions .email:hover,
      .socialShareHover .socialOptions .email:focus {
        background: #ff2882; }
        .widgetShare.open .socialOptions .email:hover .icn, .widgetShare.open .socialOptions .email:focus .icn,
        .socialShareHover .socialOptions .email:hover .icn,
        .socialShareHover .socialOptions .email:focus .icn {
          position: absolute;
          top: 50%;
          left: 50%;
          z-index: 1;
          margin-top: -8px;
          margin-left: -12px;
          content: "";
          background: url("../pulselive/i/sprites/global-sprite.png") -405px -452px no-repeat;
          width: 24px;
          height: 16px; }
          @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .widgetShare.open .socialOptions .email:hover .icn, .widgetShare.open .socialOptions .email:focus .icn,
            .socialShareHover .socialOptions .email:hover .icn,
            .socialShareHover .socialOptions .email:focus .icn {
              background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
              background-size: 748px 697px; } }
    .widgetShare.open .socialOptions .copy,
    .socialShareHover .socialOptions .copy {
      background: #38003c; }
      .widgetShare.open .socialOptions .copy .icn,
      .socialShareHover .socialOptions .copy .icn {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        margin-top: -10px;
        margin-left: -10px;
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -544px -420px no-repeat;
        width: 20px;
        height: 20px; }
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
          .widgetShare.open .socialOptions .copy .icn,
          .socialShareHover .socialOptions .copy .icn {
            background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
            background-size: 748px 697px; } }
      .widgetShare.open .socialOptions .copy:focus, .widgetShare.open .socialOptions .copy:hover,
      .socialShareHover .socialOptions .copy:focus,
      .socialShareHover .socialOptions .copy:hover {
        background: #ff2882; }
  .widgetShare.open.open .socialOptions,
  .socialShareHover.open .socialOptions {
    max-height: 200px;
    visibility: visible; }
    .widgetShare.open.open .socialOptions .icn,
    .socialShareHover.open .socialOptions .icn {
      transform: translateY(0);
      opacity: 1; }

.widgetShare {
  float: right;
  position: relative; }
  .widgetShare .share-label {
    display: none; }
  .widgetShare .socialOptions {
    position: absolute;
    top: 0;
    right: 0;
    padding-right: 2.4rem;
    background: #e8e8e8;
    transition: all 0.3s ease-out;
    max-width: 0;
    overflow: hidden;
    visibility: hidden; }
    .widgetShare .socialOptions li {
      display: block; }
    .widgetShare .socialOptions .option {
      width: 2.4rem;
      height: 2.4rem;
      border-radius: 0; }
      .widgetShare .socialOptions .option .icn {
        opacity: 0;
        transition: opacity 0.2s; }
      .widgetShare .socialOptions .option:hover {
        background: #dbdbdb; }
  .widgetShare .socialShareBtn {
    height: 2.4rem;
    width: 2.4rem;
    position: relative;
    z-index: 10;
    cursor: pointer;
    display: inline-block;
    vertical-align: middle;
    border-radius: 0; }
    .widgetShare .socialShareBtn .icn {
      margin-top: -8px;
      transform: scale(0.8); }
    .widgetShare .socialShareBtn:hover .icn, .widgetShare .socialShareBtn:focus .icn {
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -665px -252px no-repeat;
      width: 12px;
      height: 16px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .widgetShare .socialShareBtn:hover .icn, .widgetShare .socialShareBtn:focus .icn {
          background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
          background-size: 748px 697px; } }
  .widgetShare.open .share-label {
    display: inline-block; }
  .widgetShare.open .socialShareBtn {
    background: #37003c;
    width: auto; }
    .widgetShare.open .socialShareBtn .icn {
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -741px -80px no-repeat;
      width: 6px;
      height: 8px;
      position: relative;
      top: auto;
      left: auto;
      margin: -3px 0.3rem 0 0;
      transform: scale(1); }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .widgetShare.open .socialShareBtn .icn {
          background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
          background-size: 748px 697px; } }
    .widgetShare.open .socialShareBtn:hover, .widgetShare.open .socialShareBtn:focus {
      background: #37003c; }
  .widgetShare.open .socialOptions {
    max-width: none;
    display: block;
    padding: 0; }
    .widgetShare.open .socialOptions .option {
      position: relative;
      top: auto;
      left: auto;
      margin: 0;
      width: 100%; }
      .widgetShare.open .socialOptions .option .icn {
        opacity: 1; }

.socialLinks .label {
  display: none; }

.socialLinks .socialOptions {
  white-space: nowrap;
  font-size: 0; }
  .socialLinks .socialOptions li {
    display: inline-block;
    vertical-align: top; }
    .socialLinks .socialOptions li:not(:last-child) {
      margin-right: 1rem; }
  .socialLinks .socialOptions [class*="option"] {
    display: inline-block;
    position: relative;
    width: 4rem;
    height: 4rem;
    transition: all 0.2s;
    cursor: pointer;
    border-radius: 100%;
    background: #fff; }
    .socialLinks .socialOptions [class*="option"]:hover {
      background: #e6e6e6; }
  .socialLinks .socialOptions .facebook-c {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    margin-top: -8px;
    margin-left: -8px; }
  .socialLinks .socialOptions .twitter-c {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    margin-top: -7.5px;
    margin-left: -9px; }
  .socialLinks .socialOptions .whatsapp-c {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    margin-top: -7.5px;
    margin-left: -7.5px; }
  .socialLinks .socialOptions .youtube-c {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    margin-top: -7.5px;
    margin-left: -10px; }
  .socialLinks .socialOptions .instagram-c {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    margin-top: -7.5px;
    margin-left: -7.5px; }
  .socialLinks .socialOptions .google-c {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    margin-top: -7.5px;
    margin-left: -7.5px; }

.socialLinks.coloured .socialOptions .facebook-option {
  background: #3b5998;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15); }
  .socialLinks.coloured .socialOptions .facebook-option .icn {
    content: "";
    background: url("../pulselive/i/sprites/social-sprite.png") -95px -60px no-repeat;
    width: 16px;
    height: 16px; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .socialLinks.coloured .socialOptions .facebook-option .icn {
        background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
        background-size: 130px 118px; } }
  .socialLinks.coloured .socialOptions .facebook-option:hover {
    background: #fff; }
    .socialLinks.coloured .socialOptions .facebook-option:hover .icn {
      content: "";
      background: url("../pulselive/i/sprites/social-sprite.png") -95px -44px no-repeat;
      width: 16px;
      height: 16px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .socialLinks.coloured .socialOptions .facebook-option:hover .icn {
          background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
          background-size: 130px 118px; } }

.socialLinks.coloured .socialOptions .whatsapp-option {
  background: #43d854;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15); }
  .socialLinks.coloured .socialOptions .whatsapp-option:hover {
    background: #28c039; }
  .socialLinks.coloured .socialOptions .whatsapp-option .icn {
    content: "";
    background: url("../pulselive/i/sprites/social-sprite.png") -115px -15px no-repeat;
    width: 15px;
    height: 15px; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .socialLinks.coloured .socialOptions .whatsapp-option .icn {
        background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
        background-size: 130px 118px; } }

.socialLinks.coloured .socialOptions .twitter-option {
  background: #00aced;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15); }
  .socialLinks.coloured .socialOptions .twitter-option .icn {
    content: "";
    background: url("../pulselive/i/sprites/social-sprite.png") -95px -29px no-repeat;
    width: 18px;
    height: 15px; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .socialLinks.coloured .socialOptions .twitter-option .icn {
        background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
        background-size: 130px 118px; } }
  .socialLinks.coloured .socialOptions .twitter-option:hover {
    background: #fff; }
    .socialLinks.coloured .socialOptions .twitter-option:hover .icn {
      content: "";
      background: url("../pulselive/i/sprites/social-sprite.png") -95px -14px no-repeat;
      width: 18px;
      height: 15px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .socialLinks.coloured .socialOptions .twitter-option:hover .icn {
          background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
          background-size: 130px 118px; } }

.socialLinks.coloured .socialOptions .youtube-option {
  background: #b00;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15); }
  .socialLinks.coloured .socialOptions .youtube-option:hover {
    background: #880000; }
  .socialLinks.coloured .socialOptions .youtube-option .icn.youtube-c {
    content: "";
    background: url("../pulselive/i/sprites/social-sprite.png") -95px 0px no-repeat;
    width: 20px;
    height: 14px; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .socialLinks.coloured .socialOptions .youtube-option .icn.youtube-c {
        background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
        background-size: 130px 118px; } }

.socialLinks.coloured .socialOptions .instagram-option {
  background: #fff;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15); }
  .socialLinks.coloured .socialOptions .instagram-option .icn {
    content: "";
    background: url("../pulselive/i/sprites/social-sprite.png") -38px -71px no-repeat;
    width: 18px;
    height: 18px;
    margin-top: -9.5px;
    margin-left: -9.5px; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .socialLinks.coloured .socialOptions .instagram-option .icn {
        background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
        background-size: 130px 118px; } }
  .socialLinks.coloured .socialOptions .instagram-option:hover {
    background: #000; }
    .socialLinks.coloured .socialOptions .instagram-option:hover .icn {
      content: "";
      background: url("../pulselive/i/sprites/social-sprite.png") -20px -71px no-repeat;
      width: 18px;
      height: 18px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .socialLinks.coloured .socialOptions .instagram-option:hover .icn {
          background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
          background-size: 130px 118px; } }

.socialLinks.coloured .socialOptions .google-option {
  background: #dd4b39;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.15); }
  .socialLinks.coloured .socialOptions .google-option:hover {
    background: #c23321; }
  .socialLinks.coloured .socialOptions .google-option .icn {
    content: "";
    background: url("../pulselive/i/sprites/social-sprite.png") -115px -60px no-repeat;
    width: 15px;
    height: 15px; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .socialLinks.coloured .socialOptions .google-option .icn {
        background-image: url("../pulselive/i/sprites/social-sprite@x2.png");
        background-size: 130px 118px; } }

/* WhatsApp Show Mobile */
@media (max-width: 63.9375em) {
  .socialShareHover .socialOptions .whatsapp {
    display: block; }
  .socialShareHover .socialOptions .copy {
    display: none; } }

@media (max-width: 63.9375em) {
  .galleryArticle .socialShareSticky .socialShareHover,
  .socialShareSticky .socialShareHover.articleShare .socialShareHover {
    float: none;
    display: block;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    margin: 0;
    z-index: 150; }
    .galleryArticle .socialShareSticky .socialShareHover::before,
    .socialShareSticky .socialShareHover.articleShare .socialShareHover::before {
      content: "";
      display: block; }
    .galleryArticle .socialShareSticky .socialShareHover::after,
    .socialShareSticky .socialShareHover.articleShare .socialShareHover::after {
      content: "";
      display: table;
      clear: both; }
    .galleryArticle .socialShareSticky .socialShareHover .socialShareBtn,
    .socialShareSticky .socialShareHover.articleShare .socialShareHover .socialShareBtn {
      float: left;
      width: 8rem;
      height: 4rem;
      border-radius: 0;
      text-align: center;
      line-height: 3.2rem; }
    .galleryArticle .socialShareSticky .socialShareHover .socialOptions,
    .socialShareSticky .socialShareHover.articleShare .socialShareHover .socialOptions {
      top: 0;
      left: 8rem;
      max-height: none;
      max-width: none; }
      .galleryArticle .socialShareSticky .socialShareHover .socialOptions .icn,
      .socialShareSticky .socialShareHover.articleShare .socialShareHover .socialOptions .icn {
        transform: translateY(0);
        opacity: 1; }
      .galleryArticle .socialShareSticky .socialShareHover .socialOptions li,
      .socialShareSticky .socialShareHover.articleShare .socialShareHover .socialOptions li {
        width: 25%;
        float: left; } }

.webViewBody .socialShare,
.webViewBody .socialShareHover {
  display: none; }

/* stylelint-disable */
.tabHeader {
  padding: 1.5rem 1rem;
  text-align: center;
  background: #e8e8e8;
  clear: both; }

.tablist li {
  display: inline-block;
  position: relative;
  padding: 1.5rem 3rem;
  font-size: 1.3rem;
  text-decoration: none;
  text-align: center;
  background-color: #ebebe6;
  color: #6c6c6c;
  cursor: pointer;
  transition: all 0.2s;
  border-radius: 3px 3px 0 0;
  font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal; }
  @media (max-width: 43.75em) {
    .tablist li {
      padding: 1.2rem 2rem; } }
  .tablist li:not(:last-child) {
    margin-right: 0.5rem; }
  .tablist li:hover, .tablist li:focus {
    background-color: #ff2882;
    color: #fff; }
  .tablist li.active {
    background: #fff;
    color: #2f2f2f;
    border-bottom: none; }

.tablist .more {
  display: none;
  padding: 0; }
  .tablist .more .icn {
    display: inline-block;
    margin-left: 0.5rem;
    width: 10px;
    height: 6px;
    vertical-align: middle;
    content: "";
    background: url("../pulselive/i/sprites/chevrons-sprite.png") -54px -59px no-repeat;
    width: 10px;
    height: 6px;
    transition: transform 0.2s; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .tablist .more .icn {
        background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
        background-size: 93px 89px; } }
  .tablist .more .moreToggle {
    padding: 1.5rem 3rem; }
    @media (max-width: 43.75em) {
      .tablist .more .moreToggle {
        padding: 1.2rem 2rem; } }
  .tablist .more .moreToggleDropdown {
    position: absolute;
    top: 3.8rem;
    right: 0;
    width: 18rem;
    transform: scale(0);
    transition: 0.1s;
    transform-origin: top right;
    visibility: hidden;
    white-space: normal;
    border-top: 1px solid #ccc;
    z-index: 50; }
    .tablist .more .moreToggleDropdown li {
      display: block;
      margin: 0;
      border-radius: 0; }
  .tablist .more:hover .icn {
    content: "";
    background: url("../pulselive/i/sprites/chevrons-sprite.png") -84px -25px no-repeat;
    width: 9px;
    height: 5px; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .tablist .more:hover .icn {
        background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
        background-size: 93px 89px; } }
  .tablist .more.open .icn {
    transform: rotateX(180deg); }
  .tablist .more.open .moreToggleDropdown {
    visibility: visible;
    transform: scale(1); }

.tablist.showMoreEnabled .more {
  display: inline-block; }

.tabbedContent {
  float: left;
  width: 100%; }
  .tabbedContent [data-ui-tab] {
    display: none;
    position: relative; }
    .tabbedContent [data-ui-tab]::before {
      content: "";
      display: block; }
    .tabbedContent [data-ui-tab]::after {
      content: "";
      display: table;
      clear: both; }
    .tabbedContent [data-ui-tab].active {
      display: block; }

.sideTabsContainer [data-ui-tab] {
  width: 75%;
  float: left;
  padding-left: 2rem;
  border-left: 1px solid #37003c; }

.sideTabsContainer .tablist {
  width: 25%;
  float: left;
  display: block;
  padding: 0; }
  .sideTabsContainer .tablist .info {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    margin-top: -7px;
    margin-left: -7px; }
  .sideTabsContainer .tablist .tour {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    margin-top: -5.5px;
    margin-left: -9.5px; }
  .sideTabsContainer .tablist .pin {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    margin-top: -7.5px;
    margin-left: -6px; }
  .sideTabsContainer .tablist .icn {
    position: absolute;
    left: 2rem; }
  .sideTabsContainer .tablist li {
    width: 100%;
    margin-right: 0;
    margin-bottom: 1rem;
    background: #e8e8e8;
    border-radius: 3px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    color: #333; }
    .sideTabsContainer .tablist li:hover, .sideTabsContainer .tablist li.active {
      background: #37003c;
      color: white; }
      .sideTabsContainer .tablist li:hover .info, .sideTabsContainer .tablist li.active .info {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -466px -535px no-repeat;
        width: 14px;
        height: 14px; }
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
          .sideTabsContainer .tablist li:hover .info, .sideTabsContainer .tablist li.active .info {
            background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
            background-size: 748px 697px; } }
      .sideTabsContainer .tablist li:hover .tour, .sideTabsContainer .tablist li.active .tour {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -512px -487px no-repeat;
        width: 19px;
        height: 11px; }
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
          .sideTabsContainer .tablist li:hover .tour, .sideTabsContainer .tablist li.active .tour {
            background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
            background-size: 748px 697px; } }
      .sideTabsContainer .tablist li:hover .pin, .sideTabsContainer .tablist li.active .pin {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -564px -420px no-repeat;
        width: 12px;
        height: 15px; }
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
          .sideTabsContainer .tablist li:hover .pin, .sideTabsContainer .tablist li.active .pin {
            background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
            background-size: 748px 697px; } }

@media (max-width: 43.75em) {
  .sideTabsContainer [data-ui-tab] {
    width: 100%;
    float: none;
    padding-left: 0;
    border: none; }
  .sideTabsContainer .tablist {
    width: 100%;
    float: none; } }

.table {
  clear: both; }
  .table thead {
    background-color: #fbfbfb; }
    .table thead th {
      color: #6c6c6c; }
  .table .tableBodyContainer::before {
    line-height: 0.8rem;
    content: "-";
    color: #fff;
    display: block; }
  .table .rowHighlight {
    background: #efefef; }
  .table .rowHighlightLight {
    background: #f7f4f4; }
  .table .matchAbridged .teamName {
    min-width: 0; }
  .table table {
    width: 100%;
    text-align: center;
    font-size: 1.5rem;
    border-collapse: inherit; }
  .table .tooltipContainer.tooltip-link {
    text-decoration: none; }
  .table a {
    color: #242424;
    text-decoration: none;
    vertical-align: middle;
    display: flex;
    height: 100%;
    align-items: center; }
    .table a:hover, .table a:focus {
      text-decoration: underline; }
  .table .team {
    text-align: left; }
    .table .team::after {
      background: #e4e4e4; }
  .table th.team {
    padding-left: 4.5rem; }
  .table .tableDark {
    background: #fff; }
  .table .tableMid {
    background: #fff; }
  .table .tableLight {
    background: #fff; }
  .table td,
  .table th {
    padding: 1.2rem 1rem; }
    .table td.points, .table td:last-child, .table td:nth-last-child(2),
    .table th.points,
    .table th:last-child,
    .table th:nth-last-child(2) {
      font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal; }
  .table .thShort {
    display: none; }
  .table th {
    color: #666;
    font-size: 1.2rem;
    vertical-align: middle; }
    @media (max-width: 43.75em) {
      .table th {
        padding: 0.7rem 1rem; } }
    .table th span {
      display: block; }
    .table th.revealMoreHeader {
      padding: 0;
      vertical-align: middle; }
  .table.statsTable th {
    text-align: left; }
  .table td {
    border-bottom: 1px solid #efefef;
    height: 5.7rem; }
    @media (max-width: 43.75em) {
      .table td {
        height: 4.8rem; } }
  .table td.button-tooltip {
    display: table-cell; }
  .table td.pos {
    text-align: center;
    z-index: 1; }
    .table td.pos .tooltipContainer {
      line-height: 2rem;
      bottom: 1.5rem;
      left: -1.5rem; }
    .table td.pos .value {
      width: 2rem;
      display: inline-block; }
  .table .revealMore {
    width: 5.6rem;
    background-color: #fbfbfb;
    cursor: pointer;
    transition: all 0.2s; }
    .table .revealMore.playerClubHistory__revealMoreRow {
      visibility: visible;
      padding: 0;
      width: 5.6rem; }
    .table .revealMore .icn {
      margin: 0 auto;
      transform: scale(0.8);
      transition: transform 0.2s cubic-bezier(0.77, 0, 0.175, 1);
      text-align: center; }
    @media (min-width: 501px) {
      .table .revealMore:hover {
        background: #ff2882;
        border-bottom-color: #fff; }
        .table .revealMore:hover .icn {
          content: "";
          background: url("../pulselive/i/sprites/chevrons-sprite.png") -68px -34px no-repeat;
          width: 16px;
          height: 9px; } }
    @media (min-width: 501px) and (-webkit-min-device-pixel-ratio: 2), (min-width: 501px) and (min-resolution: 192dpi) {
      .table .revealMore:hover .icn {
        background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
        background-size: 93px 89px; } }
  .table .movement {
    position: relative;
    display: inline-block;
    margin: 0; }
    .table .movement.none {
      border-radius: 100%;
      width: 4px;
      height: 4px;
      background: #adadad;
      top: -0.3rem; }
    .table .movement.hidden {
      display: none; }
      .table .movement.hidden .tooltipContainer {
        display: none; }
    .table .movement.up, .table .movement.down {
      border-left: 3px solid transparent;
      border-right: 3px solid transparent;
      top: -0.3rem;
      margin-right: -1px; }
    .table .movement.up {
      border-bottom: 3px solid #13cf00; }
    .table .movement.down {
      border-top: 3px solid #e90052; }
  .table [class*="badge-50"] {
    display: inline-block;
    vertical-align: middle;
    margin-right: 1rem; }
  .table .flag {
    vertical-align: middle;
    position: relative;
    top: -2px;
    margin-right: 5px; }
  .table td.team {
    text-align: left; }
    .table td.team .badgeContainer {
      width: 35px;
      height: 35px;
      display: block;
      position: absolute;
      top: 0.5rem;
      left: 0.5rem;
      border-radius: 100%;
      background: transparent;
      z-index: 1; }
    .table td.team .badge-20,
    .table td.team .badge-25 {
      display: inline-block;
      vertical-align: middle; }
    .table td.team .short,
    .table td.team .long {
      padding-left: 1rem; }
    .table td.team .short {
      display: none; }
    @media (max-width: 25em) {
      .table td.team .badgeContainer {
        display: none; }
      .table td.team .short,
      .table td.team .long {
        padding-left: 0.5rem; } }
    .table td.team::after {
      content: "";
      top: 1rem;
      bottom: 1rem;
      width: 1px;
      display: block;
      position: absolute;
      background: #efefef;
      right: 0; }
      @media (max-width: 63.9375em) {
        .table td.team::after {
          display: none; } }
  .table .teamForm {
    text-align: center; }
  .table .teamHeader {
    text-align: left; }
  .table .form {
    width: 19rem;
    padding-right: 0;
    text-align: left; }
    .table .form li {
      width: 3.2rem;
      height: 3.2rem;
      line-height: 3.3rem;
      text-align: center;
      background: #76766f;
      color: #fff;
      border-radius: 100%;
      display: inline-block;
      vertical-align: middle;
      font-size: 1.3rem;
      cursor: pointer;
      font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal; }
    .table .form .win {
      background: #13cf00; }
    .table .form .lose {
      background: #d81920; }
  .table .form-abbreviation {
    text-decoration: none; }
  .table .resultHighlight {
    font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal; }
  .table .nextMatch {
    display: block;
    background: #fff;
    border-radius: 100%;
    cursor: pointer;
    height: 3rem;
    width: 3rem;
    position: relative;
    border: 1px solid #e8e8e8;
    margin: 0 auto; }
    .table .nextMatch .badge-20 {
      position: absolute;
      top: 50%;
      left: 50%;
      margin-top: -10px;
      margin-left: -10px; }
  .table .showSmall {
    display: none; }
  .table tr.expanded {
    background: linear-gradient(to left, #ff2882, #963cff 40%);
    background-attachment: fixed;
    color: #fff; }
    .table tr.expanded .revealMore {
      background: #37003c;
      border-bottom-color: #fff; }
      .table tr.expanded .revealMore .icn {
        content: "";
        background: url("../pulselive/i/sprites/chevrons-sprite.png") -68px -34px no-repeat;
        width: 16px;
        height: 9px;
        transform: rotate(-180deg) scale(0.8); }
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
          .table tr.expanded .revealMore .icn {
            background-image: url("../pulselive/i/sprites/chevrons-sprite@x2.png");
            background-size: 93px 89px; } }
      .table tr.expanded .revealMore:hover {
        background-color: #ff2882; }
      .table tr.expanded .revealMore:focus {
        background-color: #37003c; }
    .table tr.expanded td {
      font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal; }
    .table tr.expanded .badgeContainer {
      background: #fff; }
    .table tr.expanded .badge-25 {
      z-index: 5; }
    .table tr.expanded a,
    .table tr.expanded p {
      color: #fff; }
    .table tr.expanded + .expandable {
      display: table-row; }
      .table tr.expanded + .expandable td:last-child {
        position: relative; }
        .table tr.expanded + .expandable td:last-child::after {
          display: block;
          content: "";
          position: absolute;
          bottom: 0;
          left: 1rem;
          right: 1rem;
          height: 6px;
          background: linear-gradient(to left, #ff2882, #963cff); }
  @media (max-width: 63.9375em) {
    .table .teamPerformanceStandingsArea {
      display: none; } }
  .table .nextMatchCol {
    padding: 0; }
    .table .nextMatchCol .tooltipContainer .tooltip-content::after {
      right: 1.7rem; }
  .table .expandable {
    text-align: left;
    border-bottom: 5px solid #37003c;
    display: none;
    z-index: 500; }
    .table .expandable td {
      padding: 3rem;
      height: auto; }
    .table .expandable a {
      text-decoration: none; }
    .table .expandable .expandableTeam {
      float: left;
      text-decoration: none;
      padding-top: 1rem; }
      .table .expandable .expandableTeam .badge-50,
      .table .expandable .expandableTeam .teamName {
        display: inline-block;
        vertical-align: middle; }
      .table .expandable .expandableTeam .badge-50 {
        margin-right: 1rem; }
      .table .expandable .expandableTeam .teamName {
        font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-weight: normal;
        font-size: 2.2rem; }
      .table .expandable .expandableTeam:hover .teamName, .table .expandable .expandableTeam:focus .teamName {
        text-decoration: underline; }
    .table .expandable .expandableFixtures {
      font-size: 1.2rem;
      float: right; }
      .table .expandable .expandableFixtures .resultWidget {
        float: left;
        margin-right: 20px; }
    .table .expandable .matchAbridged {
      background-color: #efefef;
      padding: 1rem 3rem 1rem 1rem; }
      .table .expandable .matchAbridged .score,
      .table .expandable .matchAbridged time {
        line-height: 2rem; }
    .table .expandable .label {
      margin-bottom: 1rem; }
    .table .expandable .form {
      display: none; }
    .table .expandable .btnContainer {
      float: right;
      margin-top: 2.4rem; }
    .table .expandable .btn-highlight {
      color: #fff;
      line-height: 4.5rem;
      display: block; }
      .table .expandable .btn-highlight [class*="arrow-right"] {
        top: 1.75rem; }
    .table .expandable [class*="overallStats"] {
      text-align: left;
      border-collapse: separate;
      border-spacing: 1rem; }
      .table .expandable [class*="overallStats"] th {
        border-bottom: 3px solid #e90052;
        padding: 0;
        padding-bottom: 0.5rem; }
      .table .expandable [class*="overallStats"] td {
        font-size: 3.5rem;
        padding: 0; }
      .table .expandable [class*="overallStats"] .percentSize {
        font-size: 1.6rem; }
    .table .expandable .overallStatsAbridged {
      margin-top: 25rem;
      display: none; }
    .table .expandable .overallStats {
      padding-top: 3rem;
      display: none; }
    .table .expandable .performanceWidgetArea {
      height: 20rem;
      margin-top: 1rem;
      background: #fff;
      float: left;
      width: 100%;
      position: relative;
      display: none; }
      .table .expandable .performanceWidgetArea .btn {
        position: absolute;
        top: 1rem;
        right: 1rem; }
    .table .expandable .teamPerformanceStandingsArea {
      float: left;
      width: 100%;
      margin-top: 1rem;
      padding: 2rem 0;
      background: #fff; }
      .table .expandable .teamPerformanceStandingsArea header {
        padding: 0 2rem;
        margin-bottom: 1rem; }
      .table .expandable .teamPerformanceStandingsArea .subHeader {
        margin-bottom: 0;
        line-height: 4rem; }
      .table .expandable .teamPerformanceStandingsArea .matchAbridged {
        background-color: #fff; }
    .table .expandable .teamPerformanceStandingsContainer {
      clear: both;
      padding: 0 1rem;
      margin-bottom: -2rem; }
      .table .expandable .teamPerformanceStandingsContainer circle {
        cursor: pointer; }
    .table .expandable div.google-visualization-tooltip {
      border: 0;
      box-shadow: none;
      margin-left: -11rem; }
      .table .expandable div.google-visualization-tooltip .matchAbridged {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
        position: relative;
        text-align: center;
        padding: 1rem 1.5rem; }
        .table .expandable div.google-visualization-tooltip .matchAbridged .teamContainer {
          display: table;
          margin: 0 auto; }
        .table .expandable div.google-visualization-tooltip .matchAbridged .position {
          margin-bottom: 0.5rem;
          display: block; }
  @media (max-width: 1150px) {
    .table .expandable .form {
      display: block; }
    .table .expandable .teamForm {
      margin-bottom: 0.5rem;
      font-size: 1.2rem; }
    .table .expandable .btnContainer {
      margin-top: 0.5rem; }
    .table .team {
      width: 30%; } }
  @media (max-width: 71.875em) {
    .table .expandable td {
      padding: 2rem 1rem; }
    .table .expandable .expandableFixtures {
      width: 100%;
      text-align: center;
      margin: 0 auto; }
      .table .expandable .expandableFixtures .resultWidget {
        float: left;
        width: 30%;
        padding: 0 1rem;
        display: block;
        margin-right: 0; }
    .table .expandable .form {
      text-align: center;
      float: left;
      padding: 0 1rem; }
      .table .expandable .form .teamForm {
        margin-bottom: 1.5rem; }
      .table .expandable .form li {
        margin-right: 0; }
    .table .expandable .btnContainer {
      width: 20%;
      margin-top: 2.4rem; }
    .table .expandable .expandableTeam {
      display: none; }
    .table .expandable .overallStatsAbridged {
      display: none; }
    .table .expandable .overallStats {
      display: table; }
    .table .expandable .performanceWidgetArea {
      margin-top: 0; }
    .table .hideMed {
      display: none; } }
  @media (max-width: 62.5em) {
    .table .expandable .expandableFixtures .resultWidget {
      width: 50%; }
    .table .expandable .form,
    .table .expandable .btnContainer {
      width: 50%; }
    .table .expandable .btnContainer {
      padding: 0 1rem; }
    .table .expandable .form .teamForm {
      margin-bottom: 0.5rem; }
    .table .expandable .resultWidget {
      margin-bottom: 1rem; } }
  @media (max-width: 56.25em) {
    .table .team {
      width: 40%; } }
  @media (max-width: 43.75em) {
    .table table {
      font-size: 1.3rem; }
    .table .team {
      width: 25%; }
    .table .revealMore {
      width: 4.8rem; }
    .table .thFull,
    .table .hideSmall {
      display: none; }
    .table .thShort,
    .table .showSmall {
      display: block; }
    .table td.team .long {
      display: none; }
    .table td.team .short {
      display: inline-block;
      vertical-align: middle; }
      .table td.team .short:hover {
        text-decoration: none; }
    .table .expandable td {
      padding: 1rem; }
    .table .expandable .overallStats {
      padding-top: 1rem; }
    .table .expandable .expandableFixtures .resultWidget {
      margin-bottom: 1rem;
      width: 100%;
      display: block; }
    .table .expandable .form {
      width: 100%; }
      .table .expandable .form ul {
        text-align: center;
        margin-bottom: 1rem; }
    .table .expandable .btnContainer {
      width: 100%;
      margin-top: 1rem;
      margin-bottom: 2rem; } }
  @media (max-width: 29.375em) {
    .table td,
    .table th {
      padding-left: 0.5rem;
      padding-right: 0.5rem;
      font-size: 1.2rem; }
      .table td.team,
      .table th.team {
        padding-left: 0.3rem;
        padding-right: 0.3rem;
        width: 24%; }
    .table.wrapper.col-12 th.points,
    .table.wrapper.col-12 td.points {
      padding-right: 0.5rem; }
    .table .revealMore {
      width: 3rem; } }

.tableCompetitionExplainedContainer {
  text-align: center; }
  .tableCompetitionExplainedContainer .tableNotificationPromo {
    display: inline-block; }

.table .isPL [data-position="1"] td,
.table .isPL [data-position="4"] td,
.table .isPL [data-position="5"] td,
.table .isPL [data-position="17"] td,
.tableSmall .isPL [data-position="1"] td,
.tableSmall .isPL [data-position="4"] td,
.tableSmall .isPL [data-position="5"] td,
.tableSmall .isPL [data-position="17"] td {
  border-color: #cdcdcd; }

.tableSmall {
  padding-top: 0.8rem; }
  .tableSmall table {
    font-size: 1.1rem; }
    .tableSmall table th {
      font-size: 1rem; }
    .tableSmall table th,
    .tableSmall table td {
      padding-left: 0.5rem;
      padding-right: 0.5rem;
      height: 2.4rem; }
      .tableSmall table th:last-child,
      .tableSmall table td:last-child {
        padding-right: 1rem; }
    .tableSmall table td {
      padding-top: 0.9rem;
      padding-bottom: 0.9rem; }
      .tableSmall table td.pos, .tableSmall table td.team {
        font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-weight: normal; }
      .tableSmall table td:nth-last-child(2) {
        font-family: "PremierSans-Regular", Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-weight: normal; }
    .tableSmall table .team {
      text-align: left; }
    .tableSmall table th.team {
      padding-left: 3.5rem; }
    .tableSmall table .movement.up, .tableSmall table .movement.down, .tableSmall table .movement.none {
      top: -0.2rem; }

@media (max-width: 93.75em) {
  .table.wrapper.col-12 .points {
    padding-right: 2rem; } }

.tableLogo {
  margin-bottom: 2rem; }
  @media (max-width: 43.75em) {
    .tableLogo {
      margin-bottom: 1rem; } }

@media (max-width: 43.75em) {
  .allTablesContainer {
    overflow-x: scroll; } }

.tableContainer {
  margin-bottom: 2rem; }

.roundsContainer {
  margin-bottom: 2rem; }
  @media (max-width: 43.75em) {
    .roundsContainer .tablist li {
      padding-left: 1.5rem;
      padding-right: 1.5rem; } }
  .roundsContainer:empty {
    display: none; }

.standingEntriesContainer .badge-20 {
  margin-right: 1rem; }

table + .pointsDeductedContainer {
  margin-top: 1rem; }

.pointsDeductedContainer {
  font-size: 1.3rem;
  color: #76766f;
  white-space: normal; }

.tableFixtureDateHeader {
  display: block;
  font-size: 1.6rem;
  line-height: 3rem;
  padding-bottom: 0.7rem;
  font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal;
  border-bottom: 2px solid #efefef; }

.tableFixtureResultContainer {
  border-bottom: 1px solid #e8e8e8;
  border-top: 0; }

.tableFixtureContainer {
  margin-bottom: 2rem; }

.thumbnail {
  display: block;
  text-decoration: none;
  color: #242424;
  transition: all 0.2s; }
  .thumbnail figure {
    transition: all 0.1s; }
    .thumbnail figure::before {
      content: "";
      display: block; }
    .thumbnail figure::after {
      content: "";
      display: table;
      clear: both; }
  .thumbnail .image {
    position: relative;
    overflow: hidden; }
    .thumbnail .image.thumbCrop-fantasy img, .thumbnail .image.thumbCrop-latestnews img, .thumbnail .image.thumbCrop-gallery-item img,
    .thumbnail .image.thumbCrop-news-list .thumbnail .image.thumbCrop-match-photo img {
      height: 100%;
      display: block;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0; }
    .thumbnail .image.thumbCrop-fantasy::after, .thumbnail .image.thumbCrop-latestnews::after, .thumbnail .image.thumbCrop-gallery-item::after,
    .thumbnail .image.thumbCrop-news-list .thumbnail .image.thumbCrop-match-photo::after {
      display: block;
      content: ""; }
    .thumbnail .image.thumbCrop-fantasy::after {
      padding-top: 66.40316%; }
    .thumbnail .image.thumbCrop-latestnews::after {
      padding-top: 66.51376%; }
    .thumbnail .image.thumbCrop-news-list::after {
      padding-top: 67.72152%; }
    .thumbnail .image.thumbCrop-match-photo::after {
      padding-top: 71.14695%; }
    .thumbnail .image.thumbCrop-gallery-item::after {
      padding-top: 71.14695%; }
  .thumbnail span {
    display: block; }
  .thumbnail img {
    width: 100%;
    display: block;
    position: relative;
    transition: opacity 0.4s ease-in-out, transform 0.4s;
    backface-visibility: hidden; }
  .thumbnail figcaption {
    padding: 1.4rem 1rem 1rem;
    min-height: 8rem;
    position: relative; }
    .thumbnail figcaption::before {
      content: "";
      display: block; }
    .thumbnail figcaption::after {
      content: "";
      display: table;
      clear: both; }
    .thumbnail figcaption::before {
      width: 90%;
      height: 0.4rem;
      background-image: linear-gradient(to left, #963cff, #ff2882);
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      margin: 0 auto;
      transition: 0.4s; }
  .thumbnail .tag {
    margin-bottom: 0.8rem;
    min-height: 13px;
    color: #e90052;
    font-family: "PremierSans-Bold-Italic", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal;
    font-size: 1.1rem; }
  .thumbnail .title {
    line-height: 1.3;
    font-family: "PremierSans-Regular", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal;
    font-size: 1.7rem;
    word-wrap: break-word;
    transition: all 0.1s; }
    .thumbnail .title .icn {
      display: inline-block;
      vertical-align: middle;
      margin-left: 0.5rem; }
  .thumbnail .text {
    word-break: break-word;
    font-size: 1.2rem;
    line-height: 1.8;
    color: #76766f;
    margin-top: 1rem; }
  .thumbnail time {
    font-size: 1.1rem; }
  .thumbnail .published {
    color: #76766f;
    margin-top: 0.5rem;
    display: block; }
  .thumbnail.videoThumb .image {
    position: relative; }
    .thumbnail.videoThumb .image.thumbCrop-hero-small img, .thumbnail.videoThumb .image.thumbCrop-video-small img {
      height: 100%;
      width: 100%;
      object-fit: cover;
      display: block;
      position: absolute;
      top: 0;
      left: 0; }
    .thumbnail.videoThumb .image.thumbCrop-hero-small::after, .thumbnail.videoThumb .image.thumbCrop-video-small::after {
      display: block;
      content: ""; }
    .thumbnail.videoThumb .image.thumbCrop-video-small::after {
      padding-top: 55.9633%; }
    .thumbnail.videoThumb .image.thumbCrop-hero-small::after {
      padding-top: 56.32184%; }
  .thumbnail.videoThumb .videoThumb__play-icon {
    fill: #fff;
    left: 50%;
    max-width: 6rem;
    min-width: 4rem;
    opacity: 0.8;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 12%;
    z-index: 2; }
    @media (max-width: 63.9375em) {
      .thumbnail.videoThumb .videoThumb__play-icon {
        display: none; } }
  .thumbnail.videoThumb figcaption {
    padding: 1rem 1.4rem 1.8rem; }
    .thumbnail.videoThumb figcaption::before {
      background-image: linear-gradient(to left, #37003c, #ff2882); }
  .thumbnail.videoThumb .published {
    display: none; }
  .thumbnail.videoThumb .audioDesc {
    content: "";
    background: url("../pulselive/i/sprites/global-sprite.png") -473px -452px no-repeat;
    width: 22px;
    height: 16px;
    display: inline-block;
    text-indent: -999px;
    overflow: hidden;
    margin-top: 0.5rem; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .thumbnail.videoThumb .audioDesc {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  .thumbnail.videoThumb .closedCaption {
    content: "";
    background: url("../pulselive/i/sprites/global-sprite.png") -429px -452px no-repeat;
    width: 22px;
    height: 16px;
    display: inline-block;
    text-indent: -999px;
    overflow: hidden;
    margin-top: 0.5rem; }
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      .thumbnail.videoThumb .closedCaption {
        background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
        background-size: 748px 697px; } }
  .thumbnail.videoThumb .runTime {
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    background: #ff2882;
    color: #fff;
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    line-height: 2.2rem;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.25);
    font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: normal; }
    .thumbnail.videoThumb .runTime .icn {
      margin: 0 0.6rem 0 0.8rem;
      display: inline-block;
      vertical-align: middle;
      position: static; }
    .thumbnail.videoThumb .runTime time {
      display: inline-block;
      vertical-align: middle;
      margin-right: -2px;
      padding: 0.1rem 0.8rem;
      background: #37003c;
      font-size: 1.2rem; }
    .thumbnail.videoThumb .runTime .audioDesc,
    .thumbnail.videoThumb .runTime .closedCaption {
      background: #37003c;
      font-size: 1.2rem;
      vertical-align: middle;
      padding: 0.1rem 0.8rem; }
      @supports not (display: flex) {
        .thumbnail.videoThumb .runTime .audioDesc,
        .thumbnail.videoThumb .runTime .closedCaption {
          display: inline-block; } }
    .thumbnail.videoThumb .runTime .closedCaption {
      border-right: 1px solid #a6004c; }
  .thumbnail.albumThumb .image {
    position: relative; }
    .thumbnail.albumThumb .image img {
      position: absolute;
      top: 0;
      left: 0; }
    .thumbnail.albumThumb .image::before {
      display: none; }
    .thumbnail.albumThumb .image::after {
      content: "";
      display: block;
      padding-top: 56.32184%; }
  .thumbnail.albumThumb figcaption::before {
    background-image: linear-gradient(to left, #37003c, #963cff); }
  .thumbnail.albumThumb .ginfo {
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    background: #963cff;
    color: #fff;
    display: block;
    z-index: 10; }
    .thumbnail.albumThumb .ginfo .icn {
      margin: -0.1rem 0.5rem 0;
      display: inline-block;
      vertical-align: middle;
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -625px -535px no-repeat;
      width: 14px;
      height: 10px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .thumbnail.albumThumb .ginfo .icn {
          background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
          background-size: 748px 697px; } }
    .thumbnail.albumThumb .ginfo .count {
      display: inline-block;
      vertical-align: middle;
      padding: 0 0.8rem;
      background: #37003c;
      line-height: 2.2rem;
      font-size: 1.2rem;
      font-family: "PremierSans-Bold", Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: normal; }
  .thumbnail .openModal {
    position: absolute;
    top: 1rem;
    right: 1rem;
    width: 40px;
    height: 40px;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    transform-origin: top right; }
    .thumbnail .openModal .expandIcon {
      fill: #fff;
      width: 100%;
      height: 100%;
      transition: all 0.2s ease; }
    .thumbnail .openModal:focus .expandIcon, .thumbnail .openModal:hover .expandIcon {
      fill: #e90052; }
    @media (max-width: 63.9375em) {
      .thumbnail .openModal {
        display: none; } }
  .thumbnail:focus .title, .thumbnail:hover .title {
    text-decoration: underline; }
  .thumbnail:focus img, .thumbnail:hover img {
    transform: scale(1.1); }
  .thumbnail:focus .openModal, .thumbnail:hover .openModal {
    transform: scale(1.15); }
  .thumbnail:focus figcaption::before, .thumbnail:hover figcaption::before {
    width: 100%;
    transition: 0.2s; }
  .thumbnail .ieOpenModal {
    display: none; }
  .thumbnail.hero .image,
  .thumbnail.hero figcaption {
    width: 100%;
    float: none; }
  .thumbnail.hero .title {
    font-size: 1.6rem; }
  .thumbnail.thumbLong {
    background-color: transparent;
    width: 100%; }
    .thumbnail.thumbLong figure {
      display: flex; }
    .thumbnail.thumbLong .image {
      width: 40%;
      float: left; }
      .thumbnail.thumbLong .image::before {
        content: "";
        background: url("../pulselive/i/sprites/global-sprite.png") -677px 0px no-repeat;
        width: 26px;
        height: 149px;
        left: auto;
        right: -1px; }
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
          .thumbnail.thumbLong .image::before {
            background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
            background-size: 748px 697px; } }
      .thumbnail.thumbLong .image img {
        height: 100%;
        object-fit: cover; }
    .thumbnail.thumbLong .title {
      font-size: 3.1rem;
      margin-bottom: 0.8rem; }
    .thumbnail.thumbLong .text {
      font-size: 1.3rem;
      color: #6c6c6c; }
    .thumbnail.thumbLong figcaption {
      width: 60%;
      padding: 3.6rem;
      display: flex;
      flex-direction: column;
      justify-content: center; }
      .thumbnail.thumbLong figcaption::before {
        left: 0;
        top: 0;
        right: auto;
        width: 0.4rem;
        height: 100%;
        background-image: linear-gradient(to top, #963cff, #ff2882); }
    @media (max-width: 43.75em) {
      .thumbnail.thumbLong figcaption {
        padding: 1.7rem; }
        .thumbnail.thumbLong figcaption::before {
          content: none; }
      .thumbnail.thumbLong .title {
        font-size: 1.5rem;
        line-height: 1.4;
        margin-bottom: 0; }
      .thumbnail.thumbLong .image {
        height: auto; }
      .thumbnail.thumbLong figure {
        align-items: unset; } }
  .thumbnail.tertiary {
    background-color: #05f0ff;
    margin-bottom: 1rem; }
    .thumbnail.tertiary .image::before {
      content: "";
      background: url("../pulselive/i/sprites/global-sprite.png") -677px -149px no-repeat;
      width: 26px;
      height: 149px;
      left: auto;
      right: -1px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .thumbnail.tertiary .image::before {
          background-image: url("../pulselive/i/sprites/global-sprite@x2.png");
          background-size: 748px 697px; } }
    .thumbnail.tertiary .tag {
      color: #000;
      margin-top: 1rem; }
    .thumbnail.tertiary .title {
      font-size: 1.6rem; }
    .thumbnail.tertiary .text {
      color: #242424; }
    .thumbnail.tertiary figcaption {
      padding: 1rem 2rem; }
    @media (max-width: 43.75em) {
      .thumbnail.tertiary {
        margin-left: -2rem;
        margin-right: -2rem; } }
  @media (max-width: 43.75em) {
    .thumbnail .text {
      display: none; }
    .thumbnail .title {
      font-size: 1.5rem;
      line-height: 1.8rem; }
    .thumbnail figcaption::before {
      content: none; }
    .thumbnail.videoThumb figcaption::before {
      content: " "; }
    .thumbnail.videoThumb .runtime {
      font-size: 1rem;
      line-height: 1.8rem; }
      .thumbnail.videoThumb .runtime .icn {
        transform: scale(0.7); }
      .thumbnail.videoThumb .runtime time {
        font-size: 1rem; } }
  @media (max-width: 25em) {
    .thumbnail .title {
      font-size: 1.3rem; } }
  @media (max-width: 700px) {
    .thumbnail figure {
      display: flex; }
      .thumbnail figure .image {
        width: 38%; }
      .thumbnail figure figcaption {
        width: 62%;
        padding: 1.4rem 1rem 1rem 1.6rem; }
        .thumbnail figure figcaption::before {
          display: none; }
    .thumbnail.videoThumb .runTime {
      left: 4px;
      bottom: 4px;
      line-height: 1.8rem; }
      .thumbnail.videoThumb .runTime .icn {
        margin: 0 0.4rem 0 0.5rem; }
      .thumbnail.videoThumb .runTime time {
        padding: 0.1rem 0.5rem; }
    .thumbnail.videoThumb figcaption {
      padding: 1.4rem 1rem 1rem 1.6rem; } }

.placeholder.thumbnail img {
  height: 100% !important;
  min-height: 12rem; }
  @media (max-width: 450px) {
    .placeholder.thumbnail img {
      min-height: 8rem; } }

.placeholder .image {
  background-color: #e8e8e8; }
  .placeholder .image::before {
    background-image: url(../pulselive/i/elements/premier-league-logo.svg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    content: "";
    display: block;
    left: 50%;
    opacity: 0.1;
    padding-top: 60%;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 30%; }

.history-videos .thumbnail.videoThumb .image, .history-videos .thumbnail.albumThumb .image,
.history-galleries .thumbnail.videoThumb .image,
.history-galleries .thumbnail.albumThumb .image {
  border-color: #7d2847; }

.history-videos .thumbnail.videoThumb .runTime,
.history-videos .thumbnail.videoThumb .ginfo, .history-videos .thumbnail.albumThumb .runTime,
.history-videos .thumbnail.albumThumb .ginfo,
.history-galleries .thumbnail.videoThumb .runTime,
.history-galleries .thumbnail.videoThumb .ginfo,
.history-galleries .thumbnail.albumThumb .runTime,
.history-galleries .thumbnail.albumThumb .ginfo {
  background: #881d48; }
  .history-videos .thumbnail.videoThumb .runTime time,
  .history-videos .thumbnail.videoThumb .runTime .count,
  .history-videos .thumbnail.videoThumb .ginfo time,
  .history-videos .thumbnail.videoThumb .ginfo .count, .history-videos .thumbnail.albumThumb .runTime time,
  .history-videos .thumbnail.albumThumb .runTime .count,
  .history-videos .thumbnail.albumThumb .ginfo time,
  .history-videos .thumbnail.albumThumb .ginfo .count,
  .history-galleries .thumbnail.videoThumb .runTime time,
  .history-galleries .thumbnail.videoThumb .runTime .count,
  .history-galleries .thumbnail.videoThumb .ginfo time,
  .history-galleries .thumbnail.videoThumb .ginfo .count,
  .history-galleries .thumbnail.albumThumb .runTime time,
  .history-galleries .thumbnail.albumThumb .runTime .count,
  .history-galleries .thumbnail.albumThumb .ginfo time,
  .history-galleries .thumbnail.albumThumb .ginfo .count {
    background: #7d2847; }
  .history-videos .thumbnail.videoThumb .runTime .audioDesc,
  .history-videos .thumbnail.videoThumb .runTime .closedCaption,
  .history-videos .thumbnail.videoThumb .ginfo .audioDesc,
  .history-videos .thumbnail.videoThumb .ginfo .closedCaption, .history-videos .thumbnail.albumThumb .runTime .audioDesc,
  .history-videos .thumbnail.albumThumb .runTime .closedCaption,
  .history-videos .thumbnail.albumThumb .ginfo .audioDesc,
  .history-videos .thumbnail.albumThumb .ginfo .closedCaption,
  .history-galleries .thumbnail.videoThumb .runTime .audioDesc,
  .history-galleries .thumbnail.videoThumb .runTime .closedCaption,
  .history-galleries .thumbnail.videoThumb .ginfo .audioDesc,
  .history-galleries .thumbnail.videoThumb .ginfo .closedCaption,
  .history-galleries .thumbnail.albumThumb .runTime .audioDesc,
  .history-galleries .thumbnail.albumThumb .runTime .closedCaption,
  .history-galleries .thumbnail.albumThumb .ginfo .audioDesc,
  .history-galleries .thumbnail.albumThumb .ginfo .closedCaption {
    background: #300034; }
  .history-videos .thumbnail.videoThumb .runTime .closedCaption,
  .history-videos .thumbnail.videoThumb .ginfo .closedCaption, .history-videos .thumbnail.albumThumb .runTime .closedCaption,
  .history-videos .thumbnail.albumThumb .ginfo .closedCaption,
  .history-galleries .thumbnail.videoThumb .runTime .closedCaption,
  .history-galleries .thumbnail.videoThumb .ginfo .closedCaption,
  .history-galleries .thumbnail.albumThumb .runTime .closedCaption,
  .history-galleries .thumbnail.albumThumb .ginfo .closedCaption {
    border-color: #881d48; }

.button-tooltip {
  position: relative;
  display: block;
  z-index: 1;
  cursor: pointer; }
  .button-tooltip:focus .tooltipContainer, .button-tooltip:hover .tooltipContainer {
    clip: auto;
    height: auto;
    width: auto;
    opacity: 1; }
  .button-tooltip .tooltipContainer:focus, .button-tooltip .tooltipContainer:hover {
    clip: auto;
    height: auto;
    width: auto;
    opacity: 1; }

.tooltipContainer {
  position: absolute;
  bottom: 2.4rem;
  left: 50%;
  transform: translateX(-50%);
  z-index: 90;
  padding: 0 0 1rem;
  text-align: center;
  text-decoration: none;
  white-space: nowrap;
  overflow: visible;
  color: #242424;
  opacity: 0;
  transition: 0.2s; }
  .tooltipContainer.tooltip-left {
    left: 0;
    transform: translateX(0%); }
    .tooltipContainer.tooltip-left .tooltip-content::after {
      left: 2rem; }
  .tooltipContainer.tooltip-right {
    right: -1.3rem;
    left: auto;
    transform: translateX(0%); }
    .tooltipContainer.tooltip-right .tooltip-content::after {
      right: 2rem;
      left: auto; }
  .tooltipContainer .tooltip-content {
    background: #fff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
    position: relative;
    display: block;
    transition: all 0.2s;
    padding: 1rem; }
    .tooltipContainer .tooltip-content::after {
      content: "";
      display: block;
      border: 10px solid transparent;
      border-top-color: #fff;
      border-bottom: 0;
      position: absolute;
      bottom: -9px;
      left: 50%;
      margin-left: -10px;
      transition: all 0.2s; }
  .tooltipContainer .matchAbridged {
    background-color: transparent;
    padding: 1rem 2.5rem 1rem 1rem; }
    .tooltipContainer .matchAbridged:hover .icn {
      transform: none; }
    .tooltipContainer .matchAbridged [class*="arrow-right"] {
      bottom: 1.8rem;
      right: 1.1rem;
      margin-bottom: 0;
      transition: transform 0.2s; }
  .tooltipContainer.tooltip-link:hover .tooltip-content::after, .tooltipContainer.tooltip-link:focus .tooltip-content::after {
    border-top-color: #ff2882; }
  .tooltipContainer.tooltip-link:hover .matchAbridged, .tooltipContainer.tooltip-link:focus .matchAbridged {
    color: #fff;
    background: #ff2882; }
    .tooltipContainer.tooltip-link:hover .matchAbridged .matchInfo, .tooltipContainer.tooltip-link:focus .matchAbridged .matchInfo {
      color: #fff; }
    .tooltipContainer.tooltip-link:hover .matchAbridged [class*="arrow-right"], .tooltipContainer.tooltip-link:focus .matchAbridged [class*="arrow-right"] {
      transform: scale(0.7) translateX(5px);
      right: 0.9rem;
      content: "";
      background: url("../pulselive/i/sprites/arrows-sprite.png") -39px -69px no-repeat;
      width: 15px;
      height: 9px; }
      @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .tooltipContainer.tooltip-link:hover .matchAbridged [class*="arrow-right"], .tooltipContainer.tooltip-link:focus .matchAbridged [class*="arrow-right"] {
          background-image: url("../pulselive/i/sprites/arrows-sprite@x2.png");
          background-size: 91px 82px; } }
    .tooltipContainer.tooltip-link:hover .matchAbridged time, .tooltipContainer.tooltip-link:focus .matchAbridged time {
      background: #fff;
      color: #ff2882; }
  .tooltipContainer.tooltip-link .tooltip-content {
    padding: 0; }
    .tooltipContainer.tooltip-link .tooltip-content:hover, .tooltipContainer.tooltip-link .tooltip-content:focus {
      background: #ff2882; }
      .tooltipContainer.tooltip-link .tooltip-content:hover::after, .tooltipContainer.tooltip-link .tooltip-content:focus::after {
        border-top-color: #ff2882; }

.nextMatchCol .tooltipContainer.tooltip-right {
  right: 1rem; }
