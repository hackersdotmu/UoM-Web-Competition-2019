<template>
  <div class="home-component dept-list">

    <h2 class="mega-rainbow">Department</h2>

    <div class="dept-list-top dept-wrapper">
      <div class="dept-sec-a">
        <h2>Section A</h2>
      </div>
      <div class="dept-list-a">
        <div class="dept-item">
          <!-- met image hover -->

          <router-link class="example" :to="{ name: 'sponsors' }">
            <figure class="imghvr-shutter-in-out-diag-2"><img src="../../assets/WEBCUP/DEPARTMENTS/IT1.jpg"
                alt="example-image">
              <figcaption>
                <h3 class="dept-name-txt">IT</h3>
              </figcaption>
            </figure>
          </router-link>

          <!-- met image hover ici -->
        </div>
        <div class="dept-item">
          <!-- met image hover -->

          <div class="example">
            <figure class="imghvr-shutter-in-out-diag-2"><img src="../../assets/WEBCUP/DEPARTMENTS/ENGINEERING3.jpg"
                alt="example-image">
              <figcaption>
                <h3 class="dept-name-txt">ENGINEERING</h3>
              </figcaption>
            </figure>
          </div>

          <!-- met image hover ici -->
        </div>
        <div class="dept-item">
          <!-- met image hover -->
          <div class="example">
            <figure class="imghvr-shutter-in-out-diag-2"><img src="../../assets/WEBCUP/DEPARTMENTS/AGRICULTURE1.jpg"
                alt="example-image">
              <figcaption>
                <h3 class="dept-name-txt">AGRICULTURE</h3>
              </figcaption>
            </figure>
          </div>
          <!-- met image hover ici -->
        </div>
        <div class="dept-item">
          <!-- met image hover -->

          <div class="example">
            <figure class="imghvr-shutter-in-out-diag-2"><img src="../../assets/WEBCUP/DEPARTMENTS/SCIENCE1.jpg"
                alt="example-image">
              <figcaption>
                <h3 class="dept-name-txt">SCIENCE</h3>
              </figcaption>
            </figure>
          </div>

          <!-- met image hover ici -->
        </div>
      </div>
    </div>
    <div class="dept-list-bot dept-wrapper">
      <div class="dept-sec-b">
        <h2>Section B</h2>
      </div>
      <div class="dept-list-b">
        <div class="dept-item">
          <!-- met image hover -->
          <div class="example">
            <figure class="imghvr-shutter-in-out-diag-2"><img src="../../assets/WEBCUP/DEPARTMENTS/MANAGEMENT1.jpg"
                alt="example-image">
              <figcaption>
                <h3 class="dept-name-txt">MANAGEMENT</h3>
              </figcaption>
            </figure>
          </div>


          <!-- met image hover ici -->
        </div>
        <div class="dept-item">
          <!-- met image hover -->
          <div class="example">
            <figure class="imghvr-shutter-in-out-diag-2"><img src="../../assets/WEBCUP/DEPARTMENTS/HUMANITIES2.jpg"
                alt="example-image">
              <figcaption>
                <h3 class="dept-name-txt" >HUMANITIES AND SOCIAL STUDIES</h3>
              </figcaption>
            </figure>
          </div>


          <!-- met image hover ici -->
        </div>
        <div class="dept-item">
          <!-- met image hover -->

          <div class="example">
            <figure class="imghvr-shutter-in-out-diag-2"><img src="../../assets/WEBCUP/DEPARTMENTS/FINANCE3.jpg"
                alt="example-image">
              <figcaption>
                <h3 class="dept-name-txt">FINANCE</h3>
              </figcaption>
            </figure>
          </div>

          <!-- met image hover ici -->
        </div>
        <div class="dept-item">
          <!-- met image hover -->
          <div class="example">
            <figure class="imghvr-shutter-in-out-diag-2"><img src="../../assets/WEBCUP/DEPARTMENTS/OCEAN1.jpg"
                alt="example-image">
              <figcaption>
                <h3 class="dept-name-txt">OCEAN</h3>
              </figcaption>
            </figure>
          </div>


          <!-- met image hover ici -->
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
  @import url(https://fonts.googleapis.com/css?family=Josefin+Slab);

  .dept-name-txt {
    font-size: 20px
  }
  .effects {
    margin: 3em auto 5em;
    max-width: 980px;
    overflow: hidden;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .example {
    width: 100%;
    // height: 425px;
  }

  figure {
    // height: 425px;
  }


  *[class^='imghvr-'],
  *[class*=' imghvr-'] {
    position: relative;
    display: inline-block;
    margin: 0px;
    max-width: 100%;
    background-color: rgba(255, 106, 106, 0.75);
    color: #fff;
    overflow: hidden;
    backface-visibility: hidden;
    transform: translateZ(0);
  }

  *[class^='imghvr-'] img,
  *[class*=' imghvr-'] img {
    vertical-align: top;
    max-width: 100%;
    object-fit: cover;
    height: inherit;
  }

  *[class^='imghvr-'] figcaption,
  *[class*=' imghvr-'] figcaption {
    background-color: inherit;
    padding: 30px;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    font-size: 30px;
    text-align: center;
  }

  *[class^='imghvr-'] h3,
  *[class*=' imghvr-'] h3,
  *[class^='imghvr-'] p,
  *[class*=' imghvr-'] p {
    margin: 0;
    padding: 0;
    color: #fff;
    font-family: 'Josefin Slab', serif;
  }

  *[class^='imghvr-'] h3,
  *[class*=' imghvr-'] h3 {
    // margin-top: 120px;
  }

  *[class^='imghvr-'],
  *[class*=' imghvr-'],
  *[class^='imghvr-']:before,
  *[class^='imghvr-']:after,
  *[class*=' imghvr-']:before,
  *[class*=' imghvr-']:after,
  *[class^='imghvr-'] *,
  *[class*=' imghvr-'] *,
  *[class^='imghvr-'] *:before,
  *[class^='imghvr-'] *:after,
  *[class*=' imghvr-'] *:before,
  *[class*=' imghvr-'] *:after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.35s ease;
    transition: all 0.35s ease;
  }

  /* imghvr-zoom-out*
   ----------------------------- */
  *[class^='imghvr-zoom-out'] figcaption,
  *[class*=' imghvr-zoom-out'] figcaption {
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    -webkit-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    opacity: 0;
  }

  *[class^='imghvr-zoom-out']:hover figcaption,
  *[class*=' imghvr-zoom-out']:hover figcaption,
  *[class^='imghvr-zoom-out'].hover figcaption,
  *[class*=' imghvr-zoom-out'].hover figcaption {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
  }

  /* imghvr-zoom-out
   ----------------------------- */
  .imghvr-zoom-out:hover img {
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    opacity: 0;
  }

  /* imghvr-shutter-in-*
   ----------------------------- */
  *[class^='imghvr-shutter-in-']:after,
  *[class*=' imghvr-shutter-in-']:after,
  *[class^='imghvr-shutter-in-']:before,
  *[class*=' imghvr-shutter-in-']:before {
    background: inherit;
    position: absolute;
    content: '';
  }

  *[class^='imghvr-shutter-in-']:after,
  *[class*=' imghvr-shutter-in-']:after {
    top: 0;
    left: 0;
  }

  *[class^='imghvr-shutter-in-']:before,
  *[class*=' imghvr-shutter-in-']:before {
    right: 0;
    bottom: 0;
  }

  *[class^='imghvr-shutter-in-'] figcaption,
  *[class*=' imghvr-shutter-in-'] figcaption {
    opacity: 0;
    z-index: 1;
  }

  *[class^='imghvr-shutter-in-']:hover figcaption,
  *[class*=' imghvr-shutter-in-']:hover figcaption {
    opacity: 1;
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
  }

  /* imghvr-shutter-in-out-diag-2
   ----------------------------- */
  .imghvr-shutter-in-out-diag-2:after,
  .imghvr-shutter-in-out-diag-2:before {
    width: 200%;
    height: 200%;
    -webkit-transition: all 0.6s ease;
    transition: all 0.6s ease;
  }

  .imghvr-shutter-in-out-diag-2:after {
    -webkit-transform: skew(45deg) translateX(-100%);
    transform: skew(45deg) translateX(-100%);
  }

  .imghvr-shutter-in-out-diag-2:before {
    -webkit-transform: skew(45deg) translateX(100%);
    transform: skew(45deg) translateX(100%);
  }

  .imghvr-shutter-in-out-diag-2:hover:after {
    -webkit-transform: skew(45deg) translateX(0%);
    transform: skew(45deg) translateX(0%);
  }

  .imghvr-shutter-in-out-diag-2:hover:before {
    -webkit-transform: skew(45deg) translateX(0%);
    transform: skew(45deg) translateX(0%);
  }

  /* imghvr-flip-*
   ----------------------------- */
  *[class^='imghvr-flip-'],
  *[class*=' imghvr-flip-'] {
    -webkit-perspective: 50em;
    perspective: 50em;
  }

  *[class^='imghvr-flip-'] img,
  *[class*=' imghvr-flip-'] img {
    backface-visibility: hidden;
  }

  *[class^='imghvr-flip-'] figcaption,
  *[class*=' imghvr-flip-'] figcaption {
    opacity: 0;
  }

  *[class^='imghvr-flip-']:hover img,
  *[class*=' imghvr-flip-']:hover img {
    opacity: 0;
  }

  *[class^='imghvr-flip-']:hover figcaption,
  *[class*=' imghvr-flip-']:hover figcaption {
    opacity: 1;
    -webkit-transition-delay: 0.15s;
    transition-delay: 0.15s;
  }

  /* imghvr-flip-horiz
   ----------------------------- */
  .imghvr-flip-horiz figcaption {
    -webkit-transform: rotateX(90deg);
    transform: rotateX(90deg);
    -webkit-transform-origin: 0% 50%;
    -ms-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
  }

  .imghvr-flip-horiz:hover img {
    -webkit-transform: rotateX(-180deg);
    transform: rotateX(-180deg);
  }

  .imghvr-flip-horiz:hover figcaption {
    -webkit-transform: rotateX(0deg);
    transform: rotateX(0deg);
  }

  /* imghvr-flip-vert
   ----------------------------- */
  .imghvr-flip-vert figcaption {
    -webkit-transform: rotateY(90deg);
    transform: rotateY(90deg);
    -webkit-transform-origin: 50% 0%;
    -ms-transform-origin: 50% 0%;
    transform-origin: 50% 0%;
  }

  .imghvr-flip-vert:hover img {
    -webkit-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
  }

  .imghvr-flip-vert:hover figcaption {
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
  }

  /* imghvr-push-*, imghvr-slide-*
   ----------------------------- */
  *[class^='imghvr-push-']:hover figcaption,
  *[class*=' imghvr-push-']:hover figcaption,
  *[class^='imghvr-slide-']:hover figcaption,
  *[class*=' imghvr-slide-']:hover figcaption {
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
  }

  /* imghvr-push-left
   ----------------------------- */
  .imghvr-push-left figcaption {
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
  }

  .imghvr-push-left:hover img {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
  }

  /* imghvr-shutter-out-*
   ----------------------------- */
  *[class^='imghvr-shutter-out-']:before,
  *[class*=' imghvr-shutter-out-']:before {
    background: inherit;
    position: absolute;
    content: '';
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
  }

  *[class^='imghvr-shutter-out-'] figcaption,
  *[class*=' imghvr-shutter-out-'] figcaption {
    opacity: 0;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
  }

  *[class^='imghvr-shutter-out-']:hover:before,
  *[class*=' imghvr-shutter-out-']:hover:before {
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
  }

  *[class^='imghvr-shutter-out-']:hover figcaption,
  *[class*=' imghvr-shutter-out-']:hover figcaption {
    opacity: 1;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
  }

  /* imghvr-shutter-out-horiz
   ----------------------------- */
  .imghvr-shutter-out-horiz:before {
    left: 50%;
    right: 50%;
    top: 0;
    bottom: 0;
  }

  .imghvr-shutter-out-horiz:hover:before {
    left: 0;
    right: 0;
  }

  /* imghvr-shutter-out-vert
   ----------------------------- */
  .imghvr-shutter-out-vert:before {
    top: 50%;
    bottom: 50%;
    left: 0;
    right: 0;
  }

  .imghvr-shutter-out-vert:hover:before {
    top: 0;
    bottom: 0;
  }

  /* imghvr-hinge-*
   ----------------------------- */
  *[class^='imghvr-hinge-'],
  *[class*=' imghvr-hinge-'] {
    -webkit-perspective: 50em;
    perspective: 50em;
  }

  *[class^='imghvr-hinge-'] figcaption,
  *[class*=' imghvr-hinge-'] figcaption {
    opacity: 0;
    z-index: 1;
  }

  *[class^='imghvr-hinge-']:hover img,
  *[class*=' imghvr-hinge-']:hover img {
    opacity: 0;
  }

  *[class^='imghvr-hinge-']:hover figcaption,
  *[class*=' imghvr-hinge-']:hover figcaption {
    opacity: 1;
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
  }

  /* imghvr-hinge-left
   ----------------------------- */
  .imghvr-hinge-left img {
    -webkit-transform-origin: 0% 50%;
    -ms-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
  }

  .imghvr-hinge-left figcaption {
    -webkit-transform: rotateY(-90deg);
    transform: rotateY(-90deg);
    -webkit-transform-origin: 100% 50%;
    -ms-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
  }

  .imghvr-hinge-left:hover img {
    -webkit-transform: rotateY(90deg);
    transform: rotateY(90deg);
  }

  .imghvr-hinge-left:hover figcaption {
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg);
  }

  /* imghvr-blur
   ----------------------------- */
  .imghvr-blur figcaption {
    opacity: 0;
  }

  .imghvr-blur:hover img {
    -webkit-filter: blur(30px);
    filter: blur(30px);
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
    opacity: 0;
  }

  .imghvr-blur:hover figcaption {
    opacity: 1;
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
  }

  /* imghvr-fold*
   ----------------------------- */
  *[class^='imghvr-fold'],
  *[class*=' imghvr-fold'] {
    -webkit-perspective: 50em;
    perspective: 50em;
  }

  *[class^='imghvr-fold'] img,
  *[class*=' imghvr-fold'] img {
    -webkit-transform-origin: 50% 0%;
    -ms-transform-origin: 50% 0%;
    transform-origin: 50% 0%;
  }

  *[class^='imghvr-fold'] figcaption,
  *[class*=' imghvr-fold'] figcaption {
    z-index: 1;
    opacity: 0;
  }

  *[class^='imghvr-fold']:hover img,
  *[class*=' imghvr-fold']:hover img {
    opacity: 0;
    -webkit-transition-delay: 0;
    transition-delay: 0;
  }

  *[class^='imghvr-fold']:hover figcaption,
  *[class*=' imghvr-fold']:hover figcaption {
    -webkit-transform: rotateX(0deg) translate3d(0, 0%, 0) scale(1);
    transform: rotateX(0deg) translate3d(0, 0%, 0) scale(1);
    opacity: 1;
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
  }

  /* imghvr-fold-down
   ----------------------------- */
  .imghvr-fold-down img {
    -webkit-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
  }

  .imghvr-fold-down figcaption {
    -webkit-transform: rotateX(90deg) translate3d(0%, 50%, 0) scale(0.6);
    transform: rotateX(90deg) translate3d(0%, 50%, 0) scale(0.6);
    -webkit-transform-origin: 50% 0%;
    -ms-transform-origin: 50% 0%;
    transform-origin: 50% 0%;
  }

  .imghvr-fold-down:hover img {
    -webkit-transform: rotateX(-90deg) scale(0.6) translateY(-50%);
    transform: rotateX(-90deg) scale(0.6) translateY(-50%);
  }



  .dept-list {
    width: 100%;
    // background-color: red;  
    // height: 105vh;
    // margin-top: 20px;

    .dept-wrapper {
      display: grid;
      width: 100%;
      grid-gap: 40px;
      padding: 75px 0;
      // margin-top: 30px;
    }

    .dept-list-top {
      background-color: white;
      grid-template-areas: "desc liste";
      grid-template-columns: 0.5fr 0.7fr;
      grid-template-rows: 1fr;

      .dept-sec-a {
        grid-area: desc;
        margin: auto 40px;

        h2 {
          color: black;
        }
      }

      .dept-list-a {
        grid-area: liste;
        display: grid;
        grid-template-areas: "a b c d";
        grid-template-rows: 1fr;
        grid-gap: 20px;

        .dept-item {
          width: 200px;
          // height: 200px;
          // background-color: red;


        }
      }
    }

    .dept-list-bot {
      background-color: black;
      grid-template-areas: "liste desc";
      grid-template-columns: 0.7fr 0.5fr;

      .dept-sec-b {
        grid-area: desc;
        margin: auto;

      }

      .dept-list-b {
        grid-area: liste;
        display: grid;
        grid-template-areas: "a b c d";
        grid-template-rows: 1fr;
        grid-gap: 20px;

        .dept-item {
          // width: 100%;
          // background-color: red;
          width: 200px;
          // height: 200px;


        }

      }
    }
  }
</style>