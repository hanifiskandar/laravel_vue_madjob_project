// checkTokenAuth.js

import axios from 'axios';

export default {
    checkAuthentication(to, from, next) {
        console.log('sinssi ke');

    const token = localStorage.getItem('token');
    console.log(token);
    if (!token) {
      next('/login'); // Redirect to login if token not available
    } else {
      // Validate token here if necessary
      // For instance, you can send a request to the server to validate the token
      console.log('sini ke');
      axios.get('/api/validate-token')
        .then(response => {
          // Token is valid, proceed to the route
          next();
        })
        .catch(error => {
          console.error('Token validation failed:', error);
          // Token is invalid, redirect to login page
          next('/login');
        });
    }
  }
};
