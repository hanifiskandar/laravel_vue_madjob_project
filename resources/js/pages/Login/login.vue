<style scoped>
    .container-fluid{
        color: #fff;
        background: url('../../../../public/images/background.jpg') center/cover no-repeat #343a40; /*Replace 'path/to/your/image.jpg' with the actual path to your image */
        height: 100vh;
    }
    .login-container {
      max-width: 500px;
      margin: 200px auto;
      padding: 20px;
      border-radius: 10px;
      background-color: rgba(0, 0, 0, 0.7);
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 30px;
      font-family: Georgia, "Times New Roman", serif;

    }
    .form{
        margin: 20px;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
</style>

<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="login-container">
                    <div class="text-center">
                        <i class="fas fa-briefcase fa-lg"></i>
                    </div> 
                    <h2>Login</h2>
                    <form @submit.prevent="login">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input v-model="username" type="text" class="form-control" id="username" placeholder="Enter your username">
                            <span class="text-danger" v-if="this.errorMessages.value?.username">{{ this.errorMessages.value.username[0] }}</span>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>  
                            <input v-model="password" type="password" class="form-control" id="password" placeholder="Enter your password">
                            <span class="text-danger" v-if="this.errorMessages.value?.password">{{ this.errorMessages.value.password[0] }}</span>
                        </div>
                        <div class="mb-3">
                            <router-link to="/register">Don’t have an account? Register</router-link>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            username: '',
            password: '',
            errorMessages: {},
        };
    },
    methods: {
        async login() {
            try {
                const response = await axios.post('/api/login', {
                    username: this.username,
                    password: this.password
                });
                    // Extract token from response
                    const token = response.data.token;

                // Store token in localStorage
                localStorage.setItem('token', token)
                console.log('asd');
                console.log(token);

                // Handle success response, maybe redirect or show a success message
                this.$router.push('/');

                console.log(response.data);
            } catch (error) {
                // Handle error response, maybe show an error message
                console.error('Error:', error);
                if (error.response.status === 422) {
                    this.errorMessages.value = error.response.data.errors
                }
            }
     
        }

    }
}
</script>
