
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDLn2ws8PSqmmrfTmciSjwOFeKu3ieQ7PI",
    authDomain: "login-19609.firebaseapp.com",
    projectId: "login-19609",
    storageBucket: "login-19609.appspot.com",
    messagingSenderId: "642048776404",
    appId: "1:642048776404:web:19449a7622d4b0f9ae8341",
    measurementId: "G-WG7JEXTQEP"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
