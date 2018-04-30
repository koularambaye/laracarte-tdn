@extends('layouts.default', ['title' => 'Contact'])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
      <h2>Get In Touch</h2>
      <p class="text-muted">
        If you having trouble with this service, please <a href="mailto:keyta.koularambaye@gmail.com">ask for help</a>.
      </p>

      <form action="#" method="post">
        <div class="form-group">
          <label for="name" class="label-control">Name</label>
          <input type="text" name="name" id="name" class="form-control" required="required"/>
        </div>
        <div class="form-group">
          <label for="email" class="label-control">Email</label>
          <input type="email" name="email" id="email" class="form-control" required="required"/>
        </div>
        <div class="form-group">
          <label for="message" class="label-control sr-only">Message</label>
          <textarea rows="10" name="message" id="message" class="form-control" required="required"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
        </div>
      </form>
    </div>
  </div>
</div>
@stop
