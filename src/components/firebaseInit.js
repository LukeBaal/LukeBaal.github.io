// import firebase from 'firebase';
import { initializeApp } from 'firebase/app';
import 'firebase/firestore';
import firebaseConfig from './firebaseConfig';
const firebaseApp = initializeApp(firebaseConfig).firestore();
firebaseApp.settings({ timestampsInSnapshots: true });
export default firebaseApp;
