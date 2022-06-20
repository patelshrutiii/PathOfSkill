<?php
require_once "header.php";
require_once "script.php";

?>
<style>
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);
body {
  margin: 0;
  padding: 0;
  font-family: "Open Sans", sans-serif;
  color: #333;
}

header {
  background: #111;
}

.headline {
  position: relative;
  height: 400px;
  color: #fff;
  text-align: center;
  background: url("https://farm9.staticflickr.com/8088/8363737128_b76782c7a2_b.jpg") no-repeat center center;
  background-size: cover;
}
.headline:after {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(17, 17, 17, 0.5);
}

.inner {
  position: absolute;
  top: 50%;
  left: 50%;
  opacity: 0;
  z-index: 10;
  transform: translateX(-50%) translateY(-50%);
  -webkit-animation: fade-in 0.75s 0.25s ease-in forwards;
          animation: fade-in 0.75s 0.25s ease-in forwards;
}
.inner h1 {
  margin: 0;
  font-size: 4em;
  line-height: 1.2em;
}
.inner p {
  margin: 0;
  font-size: 1.4em;
  font-style: italic;
  font-family: serif;
}

nav {
  position: fixed;
  width: 100%;
  z-index: 10;
}
nav.scrolled {
  background: rgba(17, 17, 17, 0.9);
}
nav ul {
  float: right;
  list-style: none;
  padding: 25px;
  margin: 0;
}
nav li {
  float: left;
}
nav a {
  font-size: 0.9em;
  color: #fff;
  text-decoration: none;
  margin: 5px 0 0 20px;
  display: block;
}
nav a:hover {
  color: #ededed;
}

.logo {
  height: 75px;
  float: left;
}
.logo:before, .logo:after {
  position: absolute;
  font-size: 7em;
  font-weight: 300;
  line-height: 0;
  color: #fff;
  top: 25px;
}
.logo:before {
  content: "»";
  left: 20px;
}
.logo:after {
  content: "«";
  left: 34px;
}

section {
  width: 100%;
  margin: 25px auto;
  padding: 20px;
  max-width: 800px;
  font-size: 1.2em;
  line-height: 1.6em;
  box-sizing: border-box;
}

@-webkit-keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
</style>
<nav>
  <div class="logo"></div>
  <ul>
    <li><a href="#">Item 1</a></li>
    <li><a href="#">Item 2</a></li>
    <li><a href="#">Item 3</a></li>
    <li><a href="#">Item 4</a></li>
  </ul>
</nav>
<header>
  <div class="headline">
    <div class="inner">
      <h1>Hello</h1>
      <p>Scroll down the page</p>
    </div>
  </div>
</header>
<section>
  <h2>Lorem ipsum</h2>
  <p>Sed lectus mi, eleifend quis congue non, lacinia id quam. Cras porta pellentesque nulla, ac auctor ligula scelerisque non. In vel placerat lacus. Nam pretium vitae purus et laoreet. Aliquam erat volutpat. Pellentesque id volutpat sem, et condimentum nisl. Donec bibendum congue mauris, ac commodo tortor volutpat ac. Donec lobortis lorem nisi, sit amet bibendum lacus vestibulum interdum. Donec mollis ligula at semper iaculis.</p>
  <p>Duis et vestibulum turpis. Duis non ultrices quam. Sed volutpat imperdiet sollicitudin. Aliquam erat volutpat. Donec at adipiscing purus. Duis varius metus vitae mattis pellentesque. Etiam tempor urna sed congue vulputate. Nulla neque metus, vulputate a dui ut, suscipit fringilla risus. Suspendisse posuere dignissim vestibulum. Praesent congue vestibulum dolor, quis lobortis libero egestas ac. Sed venenatis bibendum interdum. Curabitur rhoncus urna quis viverra varius. Cras posuere non tortor at volutpat. Suspendisse porta, turpis at ullamcorper imperdiet, felis lacus eleifend sapien, pulvinar elementum ipsum lacus ut elit. Sed ipsum erat, porttitor non malesuada at, interdum at nibh. Mauris ut ornare purus.</p>
  <h2>Nulla vitae lacus</h2>
  <p>Praesent commodo elit vel massa gravida lacinia. Maecenas auctor dignissim porttitor. Donec tincidunt mi eget semper bibendum. Morbi quis sagittis sapien. Fusce ut ligula purus. Nulla tristique augue nec lectus lacinia congue. Nunc tempus eros quam, ac sollicitudin mauris vehicula ac. Vivamus pulvinar elit ac risus placerat rutrum.</p>
  <p>Magna indoctum erroribus no his, alii fabellas eum an. Et tota clita eleifend eum, pri ne euismod eloquentiam, sea ei quas tibique. Ipsum tamquam cum id, tota clita congue ad usu. Ex eos admodum nominati. Eam ei summo dictas nostrum, vim harum graeco apeirian te. Sensibus persequeris nam an, cu legere oblique tincidunt eos, et soleat vivendum indoctum eos.</p>
  <p>Donec lobortis porta ipsum a tristique. Integer sit amet ipsum porta, bibendum mauris vitae, ultricies lectus.</p>
</section>
<script>
var $headline = $('.headline'),
    $inner = $('.inner'),
    $nav = $('nav'),
    navHeight = 75;

$(window).scroll(function() {
  var scrollTop = $(this).scrollTop(),
      headlineHeight = $headline.outerHeight() - navHeight,
      navOffset = $nav.offset().top;

  $headline.css({
    'opacity': (1 - scrollTop / headlineHeight)
  });
  $inner.children().css({
    'transform': 'translateY('+ scrollTop * 0.4 +'px)'
  });
  if (navOffset > headlineHeight) {
    $nav.addClass('scrolled');
  } else {
    $nav.removeClass('scrolled');
  }
});
</script>