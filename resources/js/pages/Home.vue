<template>
    <Header></Header>
    <Search></Search>

<section class="job mb-3 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <h5>Recommend Jobs</h5>
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">PHP Web Developer</h5>
                        <h6 class="card-subtitle mb-2 text-muted">INTEL SDN BHD</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card shadow mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Laravel Developer</h5>
                        <h6 class="card-subtitle mb-2 text-muted">AMD SDN BHD</h6>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, odio.</p>
                    </div>
                </div>
                <div class="card shadow mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Laravel Developer</h5>
                        <h6 class="card-subtitle mb-2 text-muted">AMD SDN BHD</h6>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, odio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <h5>Saved Jobs</h5>
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">PHP Web Developer</h5>
                        <h6 class="card-subtitle mb-2 text-muted">INTEL SDN BHD</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card shadow mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Laravel Developer</h5>
                        <h6 class="card-subtitle mb-2 text-muted">AMD SDN BHD</h6>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, odio.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <Footer></Footer>
</template>

<script>
import Header from '@/pages/Layouts/header.vue';
import Footer from '@/pages/Layouts/footer.vue';
import Search from '@/pages/Layouts/search.vue';
import checkTokenAuth from '@/checkTokenAuth.js';


export default {
mixins: [checkTokenAuth],

components: {
    Header,
    Footer,
    Search
  },

//   methods:{

//   },

beforeRouteEnter(to, from, next) {
    const token = localStorage.getItem('token');
    console.log("Token in beforeRouteEnter:", token);
    checkTokenAuth.checkAuthentication(to, from, next);
  },

  data() {
    return {
      country: 'Malaysia',
    }
  }
  // Other logic for the home page
}
</script>