// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "",
  authDomain: "",
  projectId: "",
  storageBucket: "",
  messagingSenderId: "",
  appId: "",
  measurementId: ""
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
      if (user.email.endsWith("@")) {
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
