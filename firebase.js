// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDPOtJjYz6tu0OPQlTGGiiH8xdpc60PwlY",
  authDomain: "college-website-7b3eb.firebaseapp.com",
  projectId: "college-website-7b3eb",
  storageBucket: "college-website-7b3eb.appspot.com",
  messagingSenderId: "903210337288",
  appId: "1:903210337288:web:4c5f8ccd853e04e2fcfdbd",
  measurementId: "G-F932L9YXM2"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

function doUserLogin(){
     
  signInWithPopup(auth, provider)
  .then((result) => {
      const credential = GoogleAuthProvider.credentialFromResult(result)
      const token = credential.accessToken
      const user = result.user
      if (user.email.endsWith("@somaiya.edu")) {
          localStorage.setItem('isAuth', true)
          setIsAuth(true)
          navigate('/userDashboard.php');
      } else {
          setError("Login allowed only from Somaiya domain.");
      }
  })
  .catch((error) => {
      setError(error.message)
  })
}
export { doUserLogin };