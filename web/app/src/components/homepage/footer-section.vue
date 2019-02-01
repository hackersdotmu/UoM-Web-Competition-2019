<template>
  <div class="home-component footer-section-wrapper">
    <div class="container footer-section-container">
      <div class="link-wrapper">
        <router-link class="link" :to="{ name: 'pastevents' }">Travail</router-link>

        <router-link class="link" :to="{ name: 'sponsors' }">sponsors</router-link>


        <a class="link" href="mailto:conference@mscc.mu?subject=Inquiry re. Developers Conference 2019">contact
          us ✉</a>

  
        <router-link class="link" :to="{ name: 'jobs' }">Vey Profile</router-link>


      </div>
    </div>
  </div>
</template>

<style lang="scss">
.link-wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-gap: 2px;
  margin-top: $gutter;
  margin-bottom: $gutter * 3;
}

.link {
  text-transform: uppercase;
  letter-spacing: 1px;
  color: $color-blue-light;
  border-radius: 5px;
  padding: 5px;
  font-size: 16px;
  font-weight: 600;
  padding-bottom: $gutter / 2;

  &:visited {
    color: $color-blue-light;
  }

  &.active,
  &.router-link-exact-active {
    color: $color-red-light;
  }
}

@media screen and (max-width: $tablet) {
  .link-wrapper {
    margin-left: 0px;
    align-items: center;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    grid-row-gap: 10px;
    text-align: center;
  }

  .footer-stripe-wrapper {
    padding: 50px 0;
  }
  .footer-section-container {
    display: flex;
    justify-content: center;
  }
}
</style>
