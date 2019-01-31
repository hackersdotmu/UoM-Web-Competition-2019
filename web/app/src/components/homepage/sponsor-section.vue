<template>
  <div class="home-component sponsor-section-wrapper">
    <div class="container">
      <h2 class="mega-rainbow">Sponsors</h2>
      <div class="sponsor-level-wrapper titanium">
        <div class="sponsors-wrapper platinum-wrapper">

          <a href="#" class="sponsor-logo">
            <h2>Elite Business School</h2>
          </a> 

          <a href="#" class="sponsor-logo">
            <h2>Oracle</h2>
          </a>
          <a href="#" class="sponsor-logo">
            <h2>Fashion Corner</h2>
          </a>
          <a href="#" class="sponsor-logo">
            <h2>Teamonite</h2>
          </a>
             <a href="#" class="sponsor-logo">
            <h2>Blink</h2>
          </a>
          <a href="#" class="sponsor-logo">
            <h2>Hackers.mu</h2>
          </a>
          <a href="#" class="sponsor-logo">
            <h2>ItSolvz</h2>
            </a>
             <a href="#" class="sponsor-logo">
            <h2>Oracle Club UOM</h2>
          </a>
          <a href="#" class="sponsor-logo">
            <h2>Uom Computer Club</h2>
          </a>
          <a href="#" class="sponsor-logo">
            <h2>Student Union</h2>
            </a>
             <a href="#" class="sponsor-logo">
            <h2>HP</h2>
            </a>
        </div>
      </div>
      

      <div class="tribute-text">
        Reach out and engage with a community of students from all departments<br/>
        Our website will give you access to all university and learning center students in Mauritius
        and the opportunity to contact them and reach for help or even for job ooportunities.
      </div>
    </div>
  </div>
</template>


<style lang="scss" scoped>
.home-component {
  padding: $section-spacer 0;
}

.mega-rainbow {
  padding-bottom: 30px;
}

.sponsor-level-wrapper {
  &.titanium {
    --color-start: #aae3f6;
    --color-end: #4f90a2;
  }
  &.platinum {
    --color-start: #eff5f9;
    --color-end: #686d91;
  }
  &.gold {
    --color-start: #fdcc77;
    --color-end: #aa8541;
  }
  &.speaker {
    --color-start: rgb(5, 154, 97);
    --color-end: rgb(2, 130, 6);
  }
  &.silver {
    --color-start: #fdfbf9;
    --color-end: #79807b;
  }
  &.bronze {
    --color-start: #a27a42;
    --color-end: #75390b;
  }
  &.media {
    --color-start: #009687;
    --color-end: #005b7f;
  }
  &.happy {
    --color-start: #c2ba81;
    --color-end: #a54e5f;
  }
}

.sponsors-wrapper {
  display: flex;
  flex-wrap: wrap;
  padding: 20px 0 50px;
  justify-content: center;
  align-items: center;

  &:last-child {
    // border-bottom: 1px solid rgba(#fff, 0.3);
  }

  .sponsor-logo {
    padding: 10px;

    &:last-child {
      padding: 5px;
    }
    display: block;
    img {
      display: block;
      width: 250px;
      height: auto;
      padding: 10px;
      // margin: 0 auto;
    }
  }
}
.platinum-wrapper {
  // grid-template-columns: 1fr 1fr;

  @media screen and (max-width: $tablet) {
    // grid-template-columns: 1fr;
    // grid-row-gap: 40px;
  }
}

.gold-wrapper {
  // grid-template-columns: 1fr 1fr;

  @media screen and (max-width: $tablet) {
    // grid-template-columns: 1fr;
    // grid-row-gap: 40px;
  }
}
.medium-wrapper {
  .sponsor-logo {
    img {
      width: 200px;
    }
  }

  @media screen and (max-width: $tablet) {
    .sponsor-logo {
      &:nth-child(even) {
        padding: 5px;
      }
      img {
        width: 150px;
      }
    }
  }
}
.small-wrapper {
  .sponsor-logo {
    img {
      width: 150px;
    }
  }
  @media screen and (max-width: $tablet) {
    .sponsor-logo {
      &:nth-child(even) {
        padding: 5px;
      }
      img {
        width: 100px;
      }
    }
  }
}

.sponsor-section-wrapper {
  .subtitle {
    padding-top: 20px;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    font-weight: 900;

    background: linear-gradient(90deg, var(--color-start), var(--color-end));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
}

.view-more {
  padding: $gutter * 2 0;
}

.button-center {
  // width: 300px;
  margin: $gutter auto;
}
</style>
