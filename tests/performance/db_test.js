import http from 'k6/http';
import { sleep } from 'k6';

export let options = {
  // How many times will the test run
  iterations: 1000,
  // Concurrencylevel (concurrent users)
  vus: 50, // 500 concurrent users
};

export default function () {

  //Endpoint for framework mock data
  http.get('http://codeigniter4.local'); //mockdata
  sleep(1);

  // Endpoint for the homepage
  http.get('http://laravel.local/');
  sleep(1);

  // Endpoint for retrieving users
  http.get('http://yii2.local');
  sleep(1);

  // Endpoint for retrieving posts
  //http.get('http://codeigniter4.local/posts');
  sleep(1);

  // Endpoint for retrieving comments
  //http.get('http://codeigniter4.local/comments');
  sleep(1);
}
