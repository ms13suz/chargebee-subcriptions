@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header" style="font-size: 20px;
            color: #420ba0;">Create a new subscription with Chargebee</div>
            <div class="card-body">
               @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
               @endif
               <div id="container" class="checkout container">
                  <div id="customer-info" class="row">
                     <div class="col-sm-12" id="checkout_info">
                        <form id="subscribe-form">
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" name="first_name" placeholder="Enter your first name......" required>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" placeholder="Enter your last name......" required>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="email]">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="example@example.com..." required>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Enter your phone number......">
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" class="form-control" name="company" placeholder="Enter your company name......">
                                 </div>
                              </div>
                           </div>
                           <hr>
                           <input type="hidden" name="plan_id" value="cbdemo_scale" />
                           <p class="text-danger" id="errorContainer" style="display:none">There were errors while submitting</p>
                           <div class="form-inline">
                              <div class="form-group">
                                 <input type="submit" style="background-color:#7e57c2;border-color:#7e57c2;" class="submit-btn btn btn-success btn-lg" value="Proceed to Payment">
                              </div>
                              <div class="form-group">
                                 <span id="loader" class="subscribe-process process" style="display:none">Processing&hellip;</span>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
