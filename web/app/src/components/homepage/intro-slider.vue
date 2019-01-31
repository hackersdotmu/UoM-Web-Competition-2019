<template>
  <div class="home-component intro-slider-wrapper">
    <carousel class="slider-wrapper" :per-page="1" :loop="true" :autoplay="true" :autoplayTimeout="3000"
      :paginationActiveColor="'#ff4932'" :autoplayHoverPause="true" :mouse-drag="false" :navigationEnabled="true"
      :paginationColor="'#fff'" :paginationPadding="5" :paginationSize="20" :centerMode="true" :navigationNextLabel="'›'"
      :navigationPrevLabel="'‹'">
      <slide class="slide">
        <div class="slide-item slide-quote">
          <div class="frame">
            <div>
              <div class="headline">
                <div>User Statistics</div>
              </div>
              <div class="circle-big">
                <div class="text">
                  2758<div class="small">Students</div>
                </div>
                <svg>
                  <circle class="bg" cx="57" cy="57" r="52"></circle>
                  <circle class="progress" cx="57" cy="57" r="52"></circle>
                </svg>
              </div>
              <div class="circles-small">
                <div class="circle-small">
                  <div class="text">15<br /><p class="small">Number Of Universities</p></div>
                  <svg>
                    <circle class="bg" cx="40" cy="40" r="37"></circle>
                    <circle class="progress one" cx="40" cy="40" r="37"></circle>
                  </svg>
                </div>
                <div class="circle-small">
                  <div class="text">15,055<br /><p class="small">Website Visit Per Day</p>
                  </div>
                  <svg>
                    <circle class="bg" cx="40" cy="40" r="37"></circle>
                    <circle class="progress two" cx="40" cy="40" r="37"></circle>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </slide>
      <slide class="slide">
        <div class="slide-item slide-quote">
          Nou
          <span class="mega-rainbow">Concept</span> nouvo dans moris
        </div>
      </slide>
     
      <slide class="slide">
        <div class="slide-item slide-quote">
          Pou
          <span class="mega-rainbow">ConnecT</span> et
          <span class="mega-rainbow">kas Barrier</span> entre universite
        </div>
        <!-- <div class="slide-item slide-button button">
          <button-waw :theme="'#97d0e1'" :size="'70px'" :link="'#'">Register
            now</button-waw>
        </div> -->
      </slide>
    </carousel>
  </div>
</template>


<style lang="scss" scoped>
  .intro-slider-wrapper {}

  .slider-wrapper {

    // height: 500px; //fallback
    .slide {
      width: 100%;
      height: 70vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;

      .slide-item {
        padding: $gutter 0;
      }

      .slide-quote {
        width: 50%;
        font-size: 40px;
        text-align: center;
        text-transform: uppercase;
        font-weight: 900;

        span {
          font-size: 150%;
          font-family: $font-headings;
        }
      }

      .slide-button {}
    }

    @media screen and (max-width: $tablet) {
      height: 70vh;

      .slide {
        .slide-item {
          padding: $gutter 0;
        }

        .slide-quote {
          width: 80%;
          font-size: 25px;

          span {
            font-size: 150%;
          }
        }

        .slide-button {}
      }
    }
  }
</style>


<style lang="scss"> 


.frame {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  height: 400px;
  margin-top: -200px;
  margin-left: -200px;
  border-radius: 3px;
  box-shadow: .5rem .5rem 1rem rgba(0, 0, 0, 0.6);
  overflow: hidden;
  // background: #413951;
  // background: linear-gradient(145deg, #413951 0%, #201c29 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#413951', endColorstr='#201c29',GradientType=0 );
  color: #fff;
  font-family: 'montserrat', Helvetica, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
	display: flex;
	justify-content: center;
	align-items: center;
}

.headline {
  font-size: 2rem;
  text-transform: uppercase;
  text-align: center;
}

.circle-big {
  position: relative;
  width: 114px;
  height: 114px;
  margin: 30px auto 25px auto;
}

.circle-big svg {
  width: 114px;
  height: 114px;
}

.circle-big .bg {
  fill: none;
  stroke-width: 10px;
  stroke: #343035;
}

.circle-big .progress {
  fill: none;
  stroke-width: 10px;
  stroke: #9a0fe0;
  stroke-linecap: round;
  stroke-dasharray: 326.56;
  stroke-dashoffset: 60;
          transform: rotate(-90deg);
          transform-origin: 50% 50%;
          animation: big 1.5s ease-in-out;
}

.circle-big .text {
  position: absolute;
  width: 100%;
  top: 37px;
  font-size: 24px;
  text-align: center;
  font-weight: 400;
  line-height: 22px;
}

.circle-big .text .small {
  font-size: 14px;
  color: #fff;
}

.circles-small {
  margin: 0 auto;
  width: 400px;
  height: 80px;
  text-align: center;
}

.circle-small {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  margin: 0 20px;
}

.circle-small svg {
  width: 80px;
  height: 80px;
}

.circle-small .bg {
  fill: none;
  stroke-width: 6px;
  stroke: #343035;
}

.circle-small .progress {
  fill: none;
  stroke-width: 6px;
  stroke: #9a0fe0;
  stroke-linecap: round;
  stroke-dasharray: 232.36;
          transform: rotate(-90deg);
          transform-origin: 50% 50%;
}

.circle-small .progress.one {
  stroke-dashoffset: 80;
          animation: one 2.5s ease-in-out, appear 1s;
}

.circle-small .progress.two {
  stroke-dashoffset: 140;
          animation: two 3.5s ease-in-out, appear 2s;
}

.circle-small .text {
  position: absolute;
  width: 100%;
  top: 26px;
  font-size: 17px;
  text-align: center;
  font-weight: 400;
  line-height: 16px;
}

.circle-small .text .small {
  font-size: 12px;
  color: #fff;
}

@keyframes big {
  from {
    stroke-dashoffset: 326.56;
  }
  to {
    stroke-dashoffset: 60;
  }
}

@keyframes one {
  from {
    stroke-dashoffset: 232.36;
  }
  to {
    stroke-dashoffset: 80;
  }
}

@keyframes two {
  from {
    stroke-dashoffset: 232.36;
  }
  to {
    stroke-dashoffset: 140;
  }
}

@keyframes appear {
	0%, 50% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}



  .slider-wrapper {
    .VueCarousel-wrapper {
      height: 100%;
    }

    .VueCarousel-navigation {
      position: absolute;
      width: 90%;
      height: 50px;
      margin: 0 auto;
      left: 5%;
      top: 45%;
      // overflow: hidden;

      @media screen and (max-width: $tablet) {
        width: 80%;
        overflow: hidden;
      }
    }

    .VueCarousel-pagination {
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
    }

    .VueCarousel-navigation-button {
      color: white;
    }

    .VueCarousel-navigation-prev,
    .VueCarousel-navigation-next {
      position: absolute;
      top: 50%;
      padding: 0;
      margin: 0;
      left: 0;
      font-size: 50px;
    }

    .VueCarousel-navigation-next {
      right: 0;
      left: auto;
    }
  }
</style>

<script>
  import {
    Carousel,
    Slide
  } from "vue-carousel";

  export default {
    components: {
      Carousel,
      Slide
    }
  };
</script>