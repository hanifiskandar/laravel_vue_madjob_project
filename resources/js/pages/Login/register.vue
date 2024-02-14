<style scoped>
.container-fluid{
        color: #fff;
        background: url('../../../../public/images/background.jpg') center/cover no-repeat #343a40; /*Replace 'path/to/your/image.jpg' with the actual path to your image */
        height: 100vh;
}
.register-container {
  max-width: 500px;
  margin: 200px auto;
  padding: 20px;
  border-radius: 10px;
  background-color: rgba(0, 0, 0, 0.7);
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
}
.register-container h2 {
  text-align: center;
  margin-bottom: 30px;
  font-family: Georgia, "Times New Roman", serif;

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
            <div class="register-container">
                <div class="text-center">
                    <i class="fas fa-briefcase fa-lg"></i>
                </div>
                <h2>Register</h2>
                <form @submit.prevent="register">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input v-model="record.username" type="text"  class="form-control" id="username" placeholder="Enter your username">
                    <span class="text-danger" v-if="this.errorMessages.value?.username">{{ this.errorMessages.value.username[0] }}</span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <!-- <input v-model="record.email" type="email" class="form-control" id="email" placeholder="Enter your email"> -->
                    <input v-model="record.email" type="text" class="form-control" id="email" placeholder="Enter your email">
                    <span class="text-danger" v-if="this.errorMessages.value?.email">{{ this.errorMessages.value.email[0] }}</span>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select v-model="record.type" class="form-select" id="type" aria-label="Default select example">
                        <option value="user">User</option>
                        <option value="employer">Employer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input v-model="record.password" type="password" class="form-control" id="password" placeholder="Enter your password">
                    <span class="text-danger" v-if="this.errorMessages.value?.password">{{ this.errorMessages.value.password[0] }}</span>
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input v-model="record.confirm_password" type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Confirm your password">
                    <span class="text-danger" v-if="this.errorMessages.value?.password">{{ this.errorMessages.value.password[0] }}</span>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </div>
                <div class="mb-3">
                    <router-link to="/login">Already have an account? Sign in</router-link>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- :error-messages="getValue(errorMessages, 'something')" -->
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
            record: {
                type: 'user',
            },
            errorMessages: {},
        };
    },
    methods: {
        // getValue(resource,key){
        //     return this.getValue(resource, key);
        // },
        async register() {
            try {
                const response = await axios.post('/api/register', this.record);
                // Handle success response, maybe redirect or show a success message
                this.$router.push('/login');
                
                console.log(response.data);
            } catch (error) {
                // Handle error response, maybe show an error message
                console.error('Error:', error);
                if (error.response.status === 422) {
                    this.errorMessages.value = error.response.data.errors
                }
                // console.error('Error:', response.data.errors);
                // this.errorMessages = response.data.errors;
                // console.log('ERROR');
                // console.log(this.errorMessages);
                // console.log(response.data.errors);
            }
        }


    }
}
</script>
