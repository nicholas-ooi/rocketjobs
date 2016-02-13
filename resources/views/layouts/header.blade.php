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
