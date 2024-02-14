<template>
        <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-briefcase"></i> Mad Job
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Job Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.html">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Career Advice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Company Profile</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-dark btn-lg" href="register.html" role="button">Register</a>

                    <!-- <a class="btn btn-light btn btn-outline-dark btn-lg mx-2" role="button"><router-link :to="{name: 'login'}"></router-link>Login</a> -->
                    <router-link to="/login" class="btn btn-light btn-outline-dark btn-lg mx-2" role="button">Login</router-link>

                    
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        hi
        <router-view></router-view>
    </div>

    <!-- Section Main -->

    <section class="search bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="content-search">
                    <h1>Find The Most Exciting Startup Jobs</h1>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <label for="what" class="font-weight-500">What</label>
                      <input type="text" class="form-control" id="what" placeholder="Enter Keywords">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <label for="category" class="font-weight-500" >Category</label>
                      <input type="text" class="form-control custom-input" id="category" placeholder="Any Classification">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <label for="location" class="font-weight-500">Location</label>
                      <input type="text" class="form-control custom-input" id="location" placeholder="Enter Location">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="pt-4">

                        <button class="btn btn-light bg-dark text-white w-50">SEEK</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

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

    <footer class="text-muted py-3 bg-light fixed-bottom">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>
</template>