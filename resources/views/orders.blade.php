@extends('layouts.ui') 
@section('xcss')


<style>

.my-orders {
  .order-container {
    margin-bottom: 64px;
  }
  .order-header {
    background: #F6F6F6;
    border: 1px solid #DDDDDD;
    padding: 14px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .order-products {
    background: white;
    border: 1px solid #DDDDDD;
    border-top: none;
    padding: 14px;
  }

  .order-header-items {
    display: flex;

    div {
      margin-right: 14px;
    }
  }

  .order-product-item {
    display: flex;
    margin: 32px 0;

    img {
      max-width: 140px;
      margin-right: 24px;
    }
  }
}



.text-center {
    text-align: center;
}

.spacer {
    margin-bottom: 30px;
}

.sticky-footer {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.full-width {
  width: 100%;
}

strong {
  font-weight: bold;
}

.uppercase {
  text-transform: uppercase;
}

.font-bold {
  font-weight: bold;
}




.my-orders .order-container {
  margin-bottom: 64px;
}
 .my-orders .order-header {
  background: #F6F6F6;
  border: 1px solid #DDDDDD;
  padding: 14px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
 .my-orders .order-products {
  background: white;
  border: 1px solid #DDDDDD;
  border-top: none;
  padding: 14px;
}
 .my-orders .order-header-items {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
 .my-orders .order-header-items div {
  margin-right: 14px;
}
 .my-orders .order-product-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 32px 0;
}
 .my-orders .order-product-item img {
  max-width: 140px;
  margin-right: 24px;
}



    </style>

@endsection
 
@section('content') 
{{-- Title --}}
@include('partials.orders.title') 
{{-- Orders Container --}}
@include('partials.orders.orderscontainer')
@endsection