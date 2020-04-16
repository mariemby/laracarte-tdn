@extends('layouts.default',['titre'=>'about'])
@section('content')
<div class="container" >
<div class="row" >
<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
<h2>Get In Touch</h2>
<p class="text-muted">if you having trouble with this service,please ask 
<a href="mailto:mariem.ben.yahya@gmail.com"> for help.</a></p>
<form action="#" method="POST">
<div class="form-group">
<label for="name" class="control-label">Name</label>
<input type="text" class="form-control" required="required">
<label for="email" class="control-label">Email</label>
<input type="email" class="form-control" required="required">
</div>
<div class="form-group">
<label for="message" class="control-label sr-only">Message</label>
<textarea name="message" id="message" rows="10" cols="10" class="form-control" required="required"></textarea>
</div>
<div class="form-group">
<button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
</div>
</form>

</div>
</div>
@stop