@extends('layouts.master')

@section('content')

@include('layouts.loginedUserNavbar')
<div class="eprofile ui container">
  <div class="ui centered card">
  <div class="centered image">
    <img src="/images/avatar2/large/kristy.png">
  </div>
  <div class="content">
    <h2>Goh See Ting</h2>
    <div class="skills description">
      <h3>Skills</h3>
      PHP, WAMP, MAMP, Python, Meteor
    </div>
    <div class="Jobs done">
      <h3>Jobs History</h3>
      waiter at KFC, barista at starbucks
    </div>
      <h3>Testimonials</h3>
    <div class="ui comments">
      <div class="comment">
      <a class="avatar">
        <img src="/images/avatar/small/joe.jpg">
      </a>
      <div class="content">
        <a class="author">Joe Henderson</a>
        <div class="metadata">
          <div class="date">1 day ago</div>
        </div>
        <div class="text">
          <p>See Ting is a diligent waiter!</p>
        </div>
        <div class="actions">
          <a class="reply">Reply</a>
        </div>
      </div>
    </div>
    <div class="comment">
      <a class="avatar">
        <img src="/images/avatar/small/christian.jpg">
      </a>
      <div class="content">
        <a class="author">Christian Rocha</a>
        <div class="metadata">
          <div class="date">2 days ago</div>
        </div>
        <div class="text">
          Highly recommended guy! He is a great helper!
        </div>
        <div class="actions">
          <a class="reply">Reply</a>
        </div>
      </div>
    </div>
    <form class="profile ui reply form">
      <div class="field">
        <textarea></textarea>
      </div>
      <div class="ui primary submit labeled icon button">
        <i class="icon edit"></i> Add Comment
      </div>
      <div class="ui green submit button">
        <i class="icon edit"></i> I want this guy!
      </div>
    </form>
  </div>
  </div>
  </div>
</div>


@endsection
