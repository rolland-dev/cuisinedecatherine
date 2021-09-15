/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// import de bootswatch
import 'bootswatch/dist/darkly/bootstrap.min.css';

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

// assets/js/app.js
import Vue from 'vue';

/**
* Create a fresh Vue Application instance
*/
new Vue({
  el: '#app',


});