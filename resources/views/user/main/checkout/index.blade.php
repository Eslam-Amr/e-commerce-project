

@extends('user.part.master')
@section('title', 'Checkout')
@section('cart-active', 'active')

@section('content')
@include('user.part.hero',['name'=>'Checkout'])

<section class="shopify-cart checkout-wrap padding-large">
    <div class="container">
      <form class="form-group" method="POST" action="{{ route('checkout.store') }}">
        @csrf
        <div class="row d-flex flex-wrap">
          <div class="col-lg-6">
            <h2 class="display-7 text-uppercase text-dark pb-4">Billing Details</h2>
            <div class="billing-details">
              <label for="fname">First Name*</label>
              <input type="text" id="fname" name="first_name" class="form-control mt-2 mb-4 ps-3">
              <x-input-error :messages="$errors->get('first_name')" class="mt-2" />

              <label for="lname">Last Name*</label>
              <input type="text" id="lname" name="last_name" class="form-control mt-2 mb-4 ps-3">
      <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
          <label for="cname">Company Name(optional)*</label>
          <input type="text" id="cname" name="company_name" class="form-control mt-2 mb-4">
          <x-input-error :messages="$errors->get('company_name')" class="mt-2" />

              <label for="cname">Country / Region*</label>
              <select name="country"  class="form-select form-control mt-2 mb-4" aria-label="Default select example">
                <option selected="" hidden="">United States</option>
                <option value="1">UK</option>
                <option value="2">Australia</option>
                <option value="3">Canada</option>
              </select>
          <x-input-error :messages="$errors->get('country')" class="mt-2" />

              <label for="address">Street Address*</label>
              <input type="text" id="adr" name="street_address" placeholder="House number and street name" class="form-control mt-3 ps-3 mb-3">
          <x-input-error :messages="$errors->get('street_address')" class="mt-2" />

              <input type="text" id="adr" name="appartment_info" placeholder="Appartments, suite, etc." class="form-control ps-3 mb-4">
          <x-input-error :messages="$errors->get('appartment_info')" class="mt-2" />

              <label for="city">Town / City *</label>
              <input type="text" id="city" name="city" class="form-control mt-3 ps-3 mb-4">
          <x-input-error :messages="$errors->get('city')" class="mt-2" />
     <label for="email">Phone *</label>
              <input type="text" id="phone" name="phone" class="form-control mt-2 mb-4 ps-3">

          <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            <label for="email">Email address *</label>
              <input type="text" id="email" name="email" class="form-control mt-2 mb-4 ps-3">
          <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>
          </div>
          <div class="col-lg-6">
            <h2 class="display-7 text-uppercase text-dark pb-4">Additional Information</h2>
            <div class="billing-details">
              <label for="fname">Order notes (optional)</label>
              <textarea class="form-control pt-3 pb-3 ps-3 mt-2" placeholder="Notes about your order. Like special notes for delivery."></textarea>
            </div>

        <button type="submit" name="submit" class="btn btn-dark mt-5 btn-medium text-uppercase btn-rounded-none">Place an order</button>
          </div>
        </div>
      </form>
    </div>
  </section>
@endsection
