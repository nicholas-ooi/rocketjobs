<!DOCTYPE html>
<html>
<head>
  <title>RocketJobs</title>
  <link rel="stylesheet" href="{{ URL::asset('/public/css/semantic.css') }}" />

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/reset.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/site.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/container.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/grid.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/header.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/image.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/menu.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/divider.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/dropdown.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/segment.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/button.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/list.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/icon.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/sidebar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/public/components/transition.css') }}">

  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{ URL::asset('/public/components/visibility.js') }}"></script>
  <script src="{{ URL::asset('/public/components/sidebar.js') }}"></script>
  <script src="{{ URL::asset('/public/components/transition.js') }}"></script>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

    })
  ;
  </script>
</head>
<body>

  @include('layouts.topnavbar')

  <!-- @section('sidebar')
  @show -->

  <!-- @section('followingnavbar')
  @show -->


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <!-- @section('topnavbar')
    @show -->


    <div class="ui text container">
      <h1 class="ui inverted header">
        Imagine-a-Company
      </h1>
      <h2>Do whatever you want when you want to.</h2>
      <div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>
    </div>

  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">We Help Companies and Companions</h3>
          <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
          <h3 class="ui header">We Make Bananas That Can Dance</h3>
          <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
        </div>
        <div class="six wide right floated column">
          <img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <a class="ui huge button">Check Them Out</a>
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"What a Company"</h3>
          <p>That is what they all say about us</p>
        </div>
        <div class="column">
          <h3>"I shouldn't have gone with their competitor."</h3>
          <p>
            <img src="assets/images/avatar/nan.jpg" class="ui avatar image"> <b>Nan</b> Chief Fun Officer Acme Toys
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
      <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
      <a class="ui large button">Read More</a>
      <h4 class="ui horizontal header divider">
        <a href="#">Case Studies</a>
      </h4>
      <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
      <p>Yes I know you probably disregarded the earlier boasts as non-sequitor filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
      <a class="ui large button">I'm Still Quite Interested</a>
    </div>
  </div>


  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--
  <div class="container">
    <div class="content">
      <div class="title">RocketJobs</div>

      <div class="ui relaxed divided list">
        <div class="item">
          <i class="large github middle aligned icon"></i>
          <div class="content">
            <a class="header">Semantic-Org/Semantic-UI</a>
            <div class="description">Updated 10 mins ago</div>
          </div>
        </div>
        <div class="item">
          <i class="large github middle aligned icon"></i>
          <div class="content">
            <a class="header">Semantic-Org/Semantic-UI-Docs</a>
            <div class="description">Updated 22 mins ago</div>
          </div>
        </div>
        <div class="item">
          <i class="large github middle aligned icon"></i>
          <div class="content">
            <a class="header">Semantic-Org/Semantic-UI-Meteor</a>
            <div class="description">Updated 34 mins ago</div>
          </div>
        </div>
      </div>

    </div>
  </div>
-->
</body>
</html>
