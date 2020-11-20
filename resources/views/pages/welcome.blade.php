@extends('main')

@section('title','Homepage')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="jumbotron">
      <h1 class="display-4">Welcome to My Blog</h1>
      <p class="lead">Thankyou so much for visiting my website.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-8">
    <div class="post">
      <h3>Post Title</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum vel odio nam obcaecati ratione dolorem molestiae architecto perferendis ab ipsam cum necessitatibus autem similique, possimus eveniet praesentium ipsum quas aperiam?
      </p>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>
    <br>
    <div class="post">
      <h3>Post Title</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum vel odio nam obcaecati ratione dolorem molestiae architecto perferendis ab ipsam cum necessitatibus autem similique, possimus eveniet praesentium ipsum quas aperiam?
      </p>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>
    <br>
    <div class="post">
      <h3>Post Title</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum vel odio nam obcaecati ratione dolorem molestiae architecto perferendis ab ipsam cum necessitatibus autem similique, possimus eveniet praesentium ipsum quas aperiam?
      </p>
      <a href="#" class="btn btn-primary">Read More</a>
    </div>
  </div>


  <div class="col-md-3 col-md-offset-1">
    <p>Sidebar</p>
  </div>
</div>
@endsection