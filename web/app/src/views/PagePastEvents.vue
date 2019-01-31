<template>
  <div>
    <h1 class="mega-rainbow">Opportunite Travail</h1>  

    <div class="timeline-container" id="timeline-1">
      
      <div class="timeline">

        <div class="timeline-item" data-text="FATHER OF THE TURKS" v-for="(event, index) in past_events" :key="index">
          <div class="timeline__content">
          <h2>{{ event.title }}</h2>
            <img class="timeline__img" src="../assets/WEBCUP/LOGOS/AD.png" />
            <h2 class="timeline__content-title">{{ event.year }}</h2>
            <p class="timeline__content-desc">{{ event.description }}</p>
             <!-- <a :href="event.link" class="cd-read-more">More Information</a> -->
          <span class="cd-date">{{ event.date }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      past_events: [
        {
          title: "ingenieur dans Front-end",
          year: "XYZ Companie",
          date: "25 April 2019",
          image: "",
          logo: "",
          link: "",
          description:
            "Qualification dans developement website et bon maitrise dans language vue.js et javascript. avoy to cv lor nu page www.example.com ou passe dans nu bureau"
        },
        {
          title: "Department Finance",
          year: "X Ltd",
          date: "23 - 25 April 2019",
          image: "",
          logo: "",
          link: "",
            description:
            "Qualification dans developement website et bon maitrise dans language vue.js et javascript. avoy to cv lor nu page www.example.com ou passe dans nu bureau"
       
          },
        {
          title: "Trainin dans ERP",
          year: "Erp Tm",
          date: "23 - 25 April 2019",
          image: "",
          logo: "",
          link: "",
          description:
            "Qualification dans developement website et bon maitrise dans language vue.js et javascript. avoy to cv lor nu page www.example.com ou passe dans nu bureau"
        },
        {
          title: "Train Oracle",
          year: "Oracle",
          date: "23 - 25 April 2019",
          image: "",
          logo: "",
          link:
            "",
            description:
            "Qualification dans developement website et bon maitrise dans language vue.js et javascript. avoy to cv lor nu page www.example.com ou passe dans nu bureau"
        },
        {
          title: "IT support",
          year: "IT Solve",
          date: "23 - 25 April 2019",
          image: "",
          logo: "",
          link: "",
            description:
            "Qualification dans developement website et bon maitrise dans language vue.js et javascript. avoy to cv lor nu page www.example.com ou passe dans nu bureau"
        },
      
      ]
    };
  }
};
</script>

<style lang="scss" scoped>
html * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

*,
*:after,
*:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
} 

.cd-date {

  color: white;
}

a {
  color: #acb7c0;
  text-decoration: none;
  cursor: pointer;
}

img {
  max-width: 100%;
}

h1,
h2 {
  font-weight: bold;
}

 @import url('https://fonts.googleapis.com/css?family=Cardo|Pathway+Gothic+One');
// Responsive
@mixin responsive() {
  @media only screen and (max-width: 767px) {
    @content;
  }
}

$content-font: Cardo;
$heading-font: 'Pathway Gothic One',
sans-serif;
$timeline-width:1170px;
$timeline-container-width:100%;

.timeline {
  display: flex;
  margin: 0 auto;
  flex-wrap: wrap;
  flex-direction: column;
  max-width: $timeline-width;
  position: relative;

  &__content {
    &-title {
      font-weight: normal;
      font-size: 66px;
      margin: -10px 0 0 0;
      transition: .4s;
      padding: 0 10px;
      box-sizing: border-box;
      font-family: $heading-font;
      color: #fff;
    }
    &-desc {
      margin: 0;
      font-size: 15px;
      box-sizing: border-box;
      color: rgba(#fff, .7);
      // font-family: $content-font;
      font-weight: normal;
      line-height: 25px;
    }
  }
  &:before {
    position: absolute;
    left: 50%;
    width: 2px;
    height: 100%;
    margin-left: -1px;
    content: "";
    background: rgba(255, 255, 255, .07);
    @include responsive() {
      left: 40px;
    }
  }
  &-item {
    // padding: 40px 0;
    // opacity: .3;
    opacity: 1;

    // filter: blur(2px);
    filter: blur(0px);

    transition: .5s;
    box-sizing: border-box;
    width: calc(50% - 40px);
    display: flex;
    position: relative;
    transform: translateY(-80px); 
    &:before {
      content: attr(data-text);
      letter-spacing: 3px;
      width: 100%;
      position: absolute;
      color: rgba(#fff, .5);
      font-size: 13px;
      font-family: $heading-font;
      border-left: 2px solid rgba(#fff, .5);
      top: 70%;
      margin-top: -5px;
      padding-left: 15px;
      opacity: 0;
      right: calc(-100% - 56px); 

    }
    &:nth-child(even) {
      align-self: flex-end;
      &:before {
        right: auto;
        text-align: right;
        left: calc(-100% - 56px);
        padding-left: 0;
        border-left: none;
        border-right: 2px solid rgba(#fff, .5);
        padding-right: 15px;
      }
    }
    &--active {
      opacity: 1;
      transform: translateY(0);
      filter: blur(0px);
      &:before {
        top: 50%;
        transition: .3s all .2s;
        opacity: 1;
      }
      .timeline__content-title {
        margin: -50px 0 20px 0;
      }
    }
    @include responsive() {
      align-self: baseline !important;
      width: 100%;
      padding: 0 30px 150px 80px;
      &:before {
        left: 10px !important;
        padding: 0 !important;
        top: 50px;
        text-align: center !important;
        width: 60px;
        border: none !important;
      }
      &:last-child {
        padding-bottom: 40px;
      }
    }
  }
  &__img {
    max-width: 100%;
    box-shadow: 0 10px 15px rgba(0, 0, 0, .4);
  }
  &-container {
    width: $timeline-container-width;
    position: relative;
    padding: 80px 0;
    transition: .3s ease 0s;
    background-attachment: fixed;
    background-size: cover;
    &:before {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(31, 30, 71, 0.05);
      content: "";
    }
  }
  &-header {
    width: 100%;
    text-align: center;
    margin-bottom: 80px;
    position: relative;
    &__title {
      color: #fff;
      font-size: 46px;
      font-family: $content-font;
      font-weight: normal;
      margin: 0;
    }
    &__subtitle {
      color: rgba(255, 255, 255, .5);
      font-family: $heading-font;
      font-size: 16px;
      letter-spacing: 5px;
      margin: 10px 0 0 0;
      font-weight: normal;
    }
  }
}
</style>
