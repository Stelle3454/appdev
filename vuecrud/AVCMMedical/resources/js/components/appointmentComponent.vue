<template>
    <div>
      <header>
        <div class="wrapper">
          <h1 class="word">AVCM Medical Clinic</h1>
          <h1>Login</h1>
          <form @submit.prevent="submitForm">
            <div class="input-box">
              <input v-model="formData.name" type="text" placeholder="Name" required>
            </div>
            <div class="input-box">
              <input v-model="formData.email" type="email" placeholder="Email" required>
            </div>
            <div class="input-box">
              <input v-model="formData.purpose" type="text" placeholder="Purpose of Appointment" required>
            </div>
            <div class="input-box">
              <input v-model="selectedDate" type="text" placeholder="Date of Appointment" @click="showCalendar" readonly>
              <div class="large-calendar" v-show="showLargeCalendar">
                <!-- Large calendar component -->
                <vue-calendar @date-selected="dateSelected"></vue-calendar>
              </div>
            </div>
            <button type="submit" class="btn">Submit</button>
          </form>
          <div class="register-link">
            <p>Don't have an account?<a href="signup.html">Register</a></p>
          </div>
        </div>
      </header>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        formData: {
          name: '',
          email: '',
          purpose: '',
          selectedDate: ''
        },
        showLargeCalendar: false
      };
    },
    methods: {
      dateSelected(date) {
        this.formData.selectedDate = date;
        this.showLargeCalendar = false;
      },
      showCalendar() {
        this.showLargeCalendar = true;
      },
      async submitForm() {
        try {
          const response = await axios.post('http://127.0.0.1:8000/api/patientsched', this.formData);
          console.log(response.data);
          // Handle success response
        } catch (error) {
          console.error(error);
          // Handle error response
        }
      }
    }
  };
  </script>
 