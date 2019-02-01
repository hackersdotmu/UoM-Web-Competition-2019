<template>
  <div class="home-component devcon-stats-wrapper"> 
      <h2 class="mega-rainbow">University</h2>

    <div class="container">
      
      <div class="university-listing">
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/ABR.png" alt="">
          </div>
          <h3 class="uni-name">Aberyswyth University</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/AMCRC.png" alt="">
          </div>
          <h3 class="uni-name">Anna Medical College</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/CTI.png" alt="">
          </div>
          <h3 class="uni-name">Charles Telfair Institute</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/CURTIN.png" alt="">
          </div>
          <h3 class="uni-name">Curtin University</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/DLC.png" alt="">
          </div>
          <h3 class="uni-name">Datamatics Learning Center</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/EBS.png" alt="">
          </div>
          <h3 class="uni-name">Elite Business School</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/GREEN.png" alt="">
          </div>
          <h3 class="uni-name">Greenwich University</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/LCA.png" alt="">
          </div>
          <h3 class="uni-name">London College Of Accountancy testing</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/MIDDLESEX.png" alt="">
          </div>
          <h3 class="uni-name">Middlesex University</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/MIE.png" alt="">
          </div>
          <h3 class="uni-name">Mauritius Examination Institute</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/OUM.png" alt="">
          </div>
          <h3 class="uni-name">Open University</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/RBS2.png" alt="">
          </div>
          <h3 class="uni-name">Rushmore Business School</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/UOM.png" alt="">
          </div>
          <h3 class="uni-name">University Of Mauritius</h3>
        </div>
        <div class="uni-wrapper">
          <div class="uni-logo">
          <img class="uni-logo-pic" src="../../assets/WEBCUP/LOGOS/UTM.png" alt="">
          </div>
          <h3 class="uni-name">University Technology Mauritius</h3>
        </div>
        
        
      </div>
    </div>
  </div>
</template>

<script>
// import { mapGetters, mapActions } from "vuex";
// 
// import { FETCH_STATS } from "@/store";
// 
// export default {
  // created() {
    // this.FETCH_STATS();
  // },
  // computed: {
    // ...mapGetters(["getStats"])
  // },
// 
  // methods: {
    // ...mapActions([FETCH_STATS])
  // }
// };
</script>
<style lang="scss" scoped> 
.uni-logo-pic {
  width: 150px
} 

.uni-name {
  font-size: 20px;
}

.devcon-stats-wrapper {
  padding: 100px 0;
  margin-top: 40px;
}
.university-listing {
  display: grid;
  // justify-content: space-around;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  grid-row-gap: 100px;

  .uni-wrapper {
    position: relative;
    padding: 30px 0 0 0;
    --width: 200px;
    width: var(--width);

    // &:before {
    //   content: " ";
    //   width: var(--width);
    //   height: 140px;
    //   // left: 50%;
    //   top: 0px;
    //   left: 0;
    //   margin-left: -calc(var(--width) / 2);

    //   position: absolute;
    //   background-image: url("../../assets/menu-hover.svg");
    //   background-repeat: no-repeat;
    //   background-position: center center;
    //   background-size: contain;
    //   transform: translate(0px, 10px);
    //   opacity: 0.5;
    //   transition: all 0.5s ease-out;
    // }
    // &:after {
    //   content: " ";
    //   --width: 100px;
    //   width: var(--width);
    //   height: 40px;
    //   left: calc(var(--width) * 1.2);
    //   top: 0px;
    //   // left: 0;
    //   // margin-left: -calc(var(--width) / 2);

    //   position: absolute;
    //   background-image: url("../../assets/menu-hover.svg");
    //   background-repeat: no-repeat;
    //   background-position: center center;
    //   background-size: contain;
    //   transform: translate(0px, 10px);
    //   opacity: 0.5;
    //   transition: all 0.5s ease-out;
    // }

    .number {
      font-size: 60px;
      font-weight: 900;
      text-align: center;
      overflow-wrap: break-word;
    }
    .label {
      text-align: center;
      font-size: 21px;
      text-transform: uppercase;
    }
  }
}
</style>
