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
</template>