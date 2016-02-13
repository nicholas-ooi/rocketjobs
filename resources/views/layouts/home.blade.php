<!DOCTYPE html>
<html>
<head>
  <title>RocketJobs</title>
  <link rel="stylesheet" href="{{ URL::asset('/public/css/semantic.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('/public/css/home.css') }}" />

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


<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item">RocketJobs</a>
    <div class="right menu">
      <div class="item">
        <a class="ui button">I'm Hiring!</a>
      </div>
      <div class="item">
        <a class="ui button">Login/Sign Up</a>
      </div>
    </div>
  </div>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

   <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="item">RocketJobs</a>
        <div class="right item">
          <a class="ui inverted button">I'm Hiring!</a>
          <a class="ui inverted button">Login/Sign Up</a>
        </div>
      </div>
    </div>
    

    <div class="ui text container">
      <h1 class="ui inverted header">RocketJobs</h1>
      <h2>Are you ready for the next RocketJob launch?</h2>
      <div class="item">
      <div class="home-search ui icon input">
        <input type="text" placeholder="Which city are you located?">
        <i class="right arrow icon"></i>
      </div>
    </div>
    </div>
  </div>

  <div class="home-buttons ui two column grid centered center aligned">
    <div class="row">
      <div class="four wide column">Search nearby rocket jobs</div>
      <div class="four wide column">Accept the offer</div>
    </div>
    <div class="row">
      <div class="four wide column">Receive confirmation</div>
      <div class="four wide column">Happy Rocketjob-ing</div>
    </div>
  </div>

<!--
<div class="home-buttons centered row container">
  <div class=" ui two column center aligned">
    <div class="four wide column">Search nearby rocket jobs</div>
    <div class="four wide column">Accept the offer</div>
      <div class="four wide column">Receive confirmation</div>
      <div class="four wide column">Happy Rocketjob-ing</div>
    </div>
  </div>
</div>
  -->
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

</body>
</html>
