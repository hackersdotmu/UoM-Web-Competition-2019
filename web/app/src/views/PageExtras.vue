<template>
  <div class="container">
    <h1 class="mega-rainbow">News Feed</h1>

    <div class="news-feed-container">

      <!-- edit here -->
    </div>
  </div>
</template>

<script>
export default {

};
</script>

<style lang="scss">
.full-section-container {
  display: grid;
  grid-template-columns:
    [full-start] 1fr [container-start] minmax(300px, 1300px)
    [container-end] 1fr [full-end];
  background: transparent;
  background-size: cover, cover;

  .container {
    grid-column: container;
    padding: calc(var(--gutter) * 2) calc(var(--gutter) / 2);
  } 

//  do not touch above
  .new-feed-container {




  }
}
</style>
