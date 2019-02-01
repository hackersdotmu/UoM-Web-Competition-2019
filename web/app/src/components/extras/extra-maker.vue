<template>
  <div class="student-card component">

    
    <div class="card" v-for="item in student">
      <div class="card-header" style="background-image: url(https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077482/profile-card/images/profile-picture.png)">
        <div class="card-header-bar">
          <a href="#" class="btn-message"><span class="sr-only">Message</span></a>
          <a href="#" class="btn-menu"><span class="sr-only">Menu</span></a>
        </div>

        <div class="card-header-slanted-edge">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200">
            <path class="polygon" d="M-20,200,1000,0V200Z" /></svg>
          <a href="#" class="btn-follow"><span class="sr-only">Follow</span></a>
        </div>
      </div>

      <div class="card-body">
        <h2 class="name">{{item.FIRSTNAME}}</h2>
        <h4 class="job-title">{{item.SURNAME}}</h4>
        <div class="bio">{{item.DESCRIPTION}}</div>
        <div class="social-accounts">
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/dribbble.svg"
              alt=""><span class="sr-only">Dribbble</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/twitter.svg"
              alt=""><span class="sr-only">Twitter</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/instagram.svg"
              alt=""><span class="sr-only">Instagram</span></a>
        </div>
      </div>

      <div class="card-footer">
        <div class="stats">
          <div class="stat">
            <span class="label">Following</span>
            <span class="value">56K</span>
          </div>
          <div class="stat">
            <span class="label">Followers</span>
            <span class="value">940</span>
          </div>
          <div class="stat">
            <span class="label">Likes</span>
            <span class="value">320</span>
          </div>
        </div>
      </div>
    </div> 

      <div class="card">
      <div class="card-header" style="background-image: url(https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077482/profile-card/images/profile-picture.png)">
        <div class="card-header-bar">
          <a href="#" class="btn-message"><span class="sr-only">Message</span></a>
          <a href="#" class="btn-menu"><span class="sr-only">Menu</span></a>
        </div>

        <div class="card-header-slanted-edge">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200">
            <path class="polygon" d="M-20,200,1000,0V200Z" /></svg>
          <a href="#" class="btn-follow"><span class="sr-only">Follow</span></a>
        </div>
      </div>

      <div class="card-body">
        <h2 class="name">John Smith</h2>
        <h4 class="job-title">Product Designer</h4>
        <div class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, aperiam.</div>
        <div class="social-accounts">
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/dribbble.svg"
              alt=""><span class="sr-only">Dribbble</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/twitter.svg"
              alt=""><span class="sr-only">Twitter</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/instagram.svg"
              alt=""><span class="sr-only">Instagram</span></a>
        </div>
      </div>

      <div class="card-footer">
        <div class="stats">
          <div class="stat">
            <span class="label">Following</span>
            <span class="value">56K</span>
          </div>
          <div class="stat">
            <span class="label">Followers</span>
            <span class="value">940</span>
          </div>
          <div class="stat">
            <span class="label">Likes</span>
            <span class="value">320</span>
          </div>
        </div>
      </div>
    </div> 

      <div class="card">
      <div class="card-header" style="background-image: url(https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077482/profile-card/images/profile-picture.png)">
        <div class="card-header-bar">
          <a href="#" class="btn-message"><span class="sr-only">Message</span></a>
          <a href="#" class="btn-menu"><span class="sr-only">Menu</span></a>
        </div>

        <div class="card-header-slanted-edge">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200">
            <path class="polygon" d="M-20,200,1000,0V200Z" /></svg>
          <a href="#" class="btn-follow"><span class="sr-only">Follow</span></a>
        </div>
      </div>

      <div class="card-body">
        <h2 class="name">John Smith</h2>
        <h4 class="job-title">Product Designer</h4>
        <div class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, aperiam.</div>
        <div class="social-accounts">
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/dribbble.svg"
              alt=""><span class="sr-only">Dribbble</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/twitter.svg"
              alt=""><span class="sr-only">Twitter</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/instagram.svg"
              alt=""><span class="sr-only">Instagram</span></a>
        </div>
      </div>

      <div class="card-footer">
        <div class="stats">
          <div class="stat">
            <span class="label">Following</span>
            <span class="value">56K</span>
          </div>
          <div class="stat">
            <span class="label">Followers</span>
            <span class="value">940</span>
          </div>
          <div class="stat">
            <span class="label">Likes</span>
            <span class="value">320</span>
          </div>
        </div>
      </div>
    </div> 

      <div class="card">
      <div class="card-header" style="background-image: url(https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077482/profile-card/images/profile-picture.png)">
        <div class="card-header-bar">
          <a href="#" class="btn-message"><span class="sr-only">Message</span></a>
          <a href="#" class="btn-menu"><span class="sr-only">Menu</span></a>
        </div>

        <div class="card-header-slanted-edge">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200">
            <path class="polygon" d="M-20,200,1000,0V200Z" /></svg>
          <a href="#" class="btn-follow"><span class="sr-only">Follow</span></a>
        </div>
      </div>

      <div class="card-body">
        <h2 class="name">John Smith</h2>
        <h4 class="job-title">Product Designer</h4>
        <div class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, aperiam.</div>
        <div class="social-accounts">
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/dribbble.svg"
              alt=""><span class="sr-only">Dribbble</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/twitter.svg"
              alt=""><span class="sr-only">Twitter</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/instagram.svg"
              alt=""><span class="sr-only">Instagram</span></a>
        </div>
      </div>

      <div class="card-footer">
        <div class="stats">
          <div class="stat">
            <span class="label">Following</span>
            <span class="value">56K</span>
          </div>
          <div class="stat">
            <span class="label">Followers</span>
            <span class="value">940</span>
          </div>
          <div class="stat">
            <span class="label">Likes</span>
            <span class="value">320</span>
          </div>
        </div>
      </div>
    </div> 


    <div class="card">
      <div class="card-header" style="background-image: url(https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077482/profile-card/images/profile-picture.png)">
        <div class="card-header-bar">
          <a href="#" class="btn-message"><span class="sr-only">Message</span></a>
          <a href="#" class="btn-menu"><span class="sr-only">Menu</span></a>
        </div>

        <div class="card-header-slanted-edge">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200">
            <path class="polygon" d="M-20,200,1000,0V200Z" /></svg>
          <a href="#" class="btn-follow"><span class="sr-only">Follow</span></a>
        </div>
      </div>

      <div class="card-body">
        <h2 class="name">John Smith</h2>
        <h4 class="job-title">Product Designer</h4>
        <div class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, aperiam.</div>
        <div class="social-accounts">
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/dribbble.svg"
              alt=""><span class="sr-only">Dribbble</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/twitter.svg"
              alt=""><span class="sr-only">Twitter</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/instagram.svg"
              alt=""><span class="sr-only">Instagram</span></a>
        </div>
      </div>

      <div class="card-footer">
        <div class="stats">
          <div class="stat">
            <span class="label">Following</span>
            <span class="value">56K</span>
          </div>
          <div class="stat">
            <span class="label">Followers</span>
            <span class="value">940</span>
          </div>
          <div class="stat">
            <span class="label">Likes</span>
            <span class="value">320</span>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" style="background-image: url(https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077482/profile-card/images/profile-picture.png)">
        <div class="card-header-bar">
          <a href="#" class="btn-message"><span class="sr-only">Message</span></a>
          <a href="#" class="btn-menu"><span class="sr-only">Menu</span></a>
        </div>

        <div class="card-header-slanted-edge">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200">
            <path class="polygon" d="M-20,200,1000,0V200Z" /></svg>
          <a href="#" class="btn-follow"><span class="sr-only">Follow</span></a>
        </div>
      </div>

      <div class="card-body">
        <h2 class="name">John Smith</h2>
        <h4 class="job-title">Product Designer</h4>
        <div class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, aperiam.</div>
        <div class="social-accounts">
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/dribbble.svg"
              alt=""><span class="sr-only">Dribbble</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/twitter.svg"
              alt=""><span class="sr-only">Twitter</span></a>
          <a href="#"><img src="https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/instagram.svg"
              alt=""><span class="sr-only">Instagram</span></a>
        </div>
      </div>

      <div class="card-footer">
        <div class="stats">
          <div class="stat">
            <span class="label">Following</span>
            <span class="value">56K</span>
          </div>
          <div class="stat">
            <span class="label">Followers</span>
            <span class="value">940</span>
          </div>
          <div class="stat">
            <span class="label">Likes</span>
            <span class="value">320</span>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>
<script>
import axios from 'axios';

  export default {
    name: 'hello',
    data() {
      return {
        student: {},
      }
    },
    mounted() {
      axios.get("http://localhost:4000")
      .then((response) => {
        console.log(response.data);
        this.student = response.data;
      })
      .catch((error) => {
        console.log(error);
      })
    }
  };
</script>
<style lang="scss" scoped>
@import url(https://fonts.googleapis.com/css?family=Exo+2:300,400,700);
body{
  padding:0;
  margin:0;
  font-size:14px;
  font-family: "Exo 2", sans-serif;
  color: #333;
} 

.student-card {
  width: 90%;
  margin: auto;
  // background-color: red;
  display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  

}

.card{
  position: relative;
  width: 315px; /* Remove for full width */
  height: 450px; /* Remove for full width */
  // margin:30px auto;
  box-shadow: 0 0 100px rgba(0,0,0, .3);
}
.card-header{
  position: relative;
  height: 220px;
  background-size: cover;
  background-position: top;
}
.card-header:after{
  content:'';
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(to top, rgb(5,85,134), rgba(181,181,181, 0.1));
}

.card-header-bar{
  position: absolute;
  top:0;
  width: 100%;
  z-index: 1;
  width: 100%;
}

.sr-only{
  position: absolute;
  width: 1px;
  height: 1px;
  clip: rect(0,0,0,0);
  border: none;
  overflow: hidden;
}
.btn-message{
  display: inline-block;
  background: url(https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077483/profile-card/images/message.svg) no-repeat;
  width: 19.37px;
  height: 16.99px;
  margin-right:10px;
  margin-top:10px;
  float: right;
}
.btn-menu{
  display: inline-block;
  background: url(https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077483/profile-card/images/menu.svg) no-repeat;
  width: 19px;
  height: 12.16px;
  margin-left:10px;
  margin-top:10px;
  float: left;
}

svg .polygon{
  fill: #fff;
}
.card-header-slanted-edge{
  position: absolute;
  bottom: -3px;
  z-index: 1;
  width: 100%;
  right:0;
  left:0;
}

.btn-follow{
  position: absolute;
  top: -15px;
  right: 25px;
  width: 45px;
  height: 45px;
  background: linear-gradient(to left, #2D77C1, #68FAC2);
  border-radius:100%;
  box-shadow: 0 10px 15px rgba(110,221,235, .53);
}

.btn-follow:after{
  content: '';
  position:absolute;
  background: url(https://res.cloudinary.com/dj14cmwoz/image/upload/v1491077480/profile-card/images/add.svg) no-repeat;
  width:17px;
  height: 17px;
  left: 50%;
  top:50%;
  transform: translate(-50%, -50%);
}

.card-body{
  text-align:center;
  padding-left: 10px;
}

.name{
  font-size: 20px;
  font-weight: 700;
  text-transform: uppercase;
  margin: 0 auto;
}

.job-title{
  font-size: 14px;
  font-weight: 300;
  margin-top: 5px;
  color: #919191;
}

.bio{
  font-size: 14px;
  color: #7B7B7B;
  font-weight: 300;
  margin: 10px auto;
  line-height: 20px;
}

.social-accounts img{
  width: 15px;
}

.social-accounts a{
  margin-left: 10px;
}
.social-accounts a:first-child{
  margin-left: 0;
}

.card-footer{
  /*position:fixed; /* Full card width/height */
  position: absolute; /* Fixed card width/height */

  left: 0;
  width: 100%;
  bottom: 20px;
}
.stat{
  box-sizing: border-box;
  width: calc(100% / 3);
  float: left;
  text-align: center;
  border-left: 1px solid #EBEBEB;
}
.stat .label{
  display: block;
  text-transform: uppercase;
  font-weight: 300;
  font-size: 11px;
  letter-spacing: 1px;
  color: #95989A;
}

.stat .value{
  display: block;
  font-weight: 700;
  font-size:20px;
  margin-top: 5px;
}

</style>
