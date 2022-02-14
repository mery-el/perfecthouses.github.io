@extends('layouts.master')
@section('title')
Add new listing
@endsection

@section('content')
<style>
    ::placeholder {
       color: #9ca3af;
    }

    .input{
        margin-bottom: 3rem;
        display: block;
        width: 100%;
        padding-left: 1rem;
        padding-right: 1rem;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        border:2px solid #e5e7eb;
        border-radius:5px;
        color: #9ca3af;
    }

    .input{
        resize: vertical;
    }

    .form label{
        font-weight:700;
        color: #00427d;
        font-size:15px;
        margin-bottom:10px;
    }

</style>
<button class="btn scrolltop-btn back-top"><i class="fa fa-angle-up"></i></button>
    <!--start section page body-->
    <section id="section-body" class="form">
        <div class="container">
            <div class="membership-page-top">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="membership-page-title">
                            <h1 class="page-title"> Complete your order </h1>
                            <p class="page-subtitle"> Please enter your Account and Billing information to complete your membership! </p>
                        </div>
                        <ol class="pay-step-bar">
                            <li class="pay-step-block active"><span>1. Listing</span></li>
                            <li class="pay-step-block"><span>2. <span class="hidden-xs">Select</span> Package</span></li>
                            <li class="pay-step-block"><span>3. Payment</span></li>
                            <li class="pay-step-block"><span>4. Done</span></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="membership-content-area">
                <form>
                    <div class="account-block">
                        <div class="add-title-tab">
                            <h3>{{__('login.propertydp')}}</h3>
                            <div class="add-expand"></div>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="property-title">Title</label>
                                            <input class="input" id="property-title" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="input" id="description" rows="6" placeholder="Enter your property title"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-type">Type</label>
                                            <select class="input" id="property-type" data-live-search="false" data-live-search-style="begins" title="Select">
                                            <option value="0" disabled selected>{{__('login.selectp')}}</option> 
                                               @foreach($types as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-status">Status</label>
                                            <select class="input" id="property-status" data-live-search="false" data-live-search-style="begins" title="Select">
                                                <option value="0" disabled selected>{{__('login.selectst')}}</option>
                                                <option value="1">{{__('login.sell')}}</option>
                                                <option value="2">{{__('login.rent')}}</option>
                                                <option value="3">{{__('login.foreclosures')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-status">Property Size</label>
                                            <input class="input" id="property-title" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-4" id="pricem">
                                        <div class="form-group">
                                            <label for="price">Property price</label>
                                            <input class="input" id="price" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pricemonth">
                                        <div class="form-group">
                                            <label for="pricemonth">Price/Month</label>
                                            <input class="input" id="pricemonth" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pricesqft">
                                        <div class="form-group">
                                            <label for="pricesqft">Price/sqft</label>
                                            <input class="input" id="pricesqft" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 pricey">
                                        <div class="form-group">
                                            <label for="pricey">Price/Year</label>
                                            <input class="input" id="pricey" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-block">
                        <div class="add-title-tab">
                            <h3>Property media</h3>
                            <div class="add-expand"></div>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row">
                                <div class="property-media">
                                    <div class="media-gallery">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <figure class="gallery-thumb">
                                                    <img src="http://placehold.it/127x127" alt="thumb">
                                                    <span class="icon icon-fav"><i class="fa fa-star-o"></i></span>
                                                    <span class="icon icon-delete"><i class="fa fa-trash"></i></span>
                                                    <span class="icon icon-loader"><i class="fa fa-spinner fa-spin"></i></span>
                                                </figure>
                                            </div>
                                            <div class="col-sm-2">
                                                <figure class="gallery-thumb">
                                                    <img src="http://placehold.it/127x127" alt="thumb">
                                                    <span class="icon icon-fav"><i class="fa fa-star-o"></i></span>
                                                    <span class="icon icon-delete"><i class="fa fa-trash"></i></span>
                                                </figure>
                                            </div>
                                            <div class="col-sm-2">
                                                <figure class="gallery-thumb">
                                                    <img src="http://placehold.it/127x127" alt="thumb">
                                                    <span class="icon icon-fav"><i class="fa fa-star-o"></i></span>
                                                    <span class="icon icon-delete"><i class="fa fa-trash"></i></span>
                                                </figure>
                                            </div>
                                            <div class="col-sm-2">
                                                <figure class="gallery-thumb">
                                                    <img src="http://placehold.it/127x127" alt="thumb">
                                                    <span class="icon icon-fav"><i class="fa fa-star-o"></i></span>
                                                    <span class="icon icon-delete"><i class="fa fa-trash"></i></span>
                                                </figure>
                                            </div>
                                            <div class="col-sm-2">
                                                <figure class="gallery-thumb">
                                                    <img src="http://placehold.it/127x127" alt="thumb">
                                                    <span class="icon icon-fav"><i class="fa fa-star-o"></i></span>
                                                    <span class="icon icon-delete"><i class="fa fa-trash"></i></span>
                                                </figure>
                                            </div>
                                            <div class="col-sm-2">
                                                <figure class="gallery-thumb">
                                                    <img src="http://placehold.it/127x127" alt="thumb">
                                                    <span class="icon icon-fav"><i class="fa fa-star-o"></i></span>
                                                    <span class="icon icon-delete"><i class="fa fa-trash"></i></span>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-drag-drop">
                                        <h4><i class="fa fa-cloud-upload"></i> Drag and drop images here</h4>
                                        <h4>or</h4>
                                        <button class="btn btn-primary">Select Images</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-block">
                        <div class="add-title-tab">
                            <h3>Property location</h3>
                            <div class="add-expand"></div>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row  push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input class="form-control" id="address" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="neighborhood">Neighborhood</label>
                                            <input class="form-control" id="neighborhood" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input class="form-control" id="city" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="zip">Zip</label>
                                            <input class="form-control" id="zip" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="countryState">Country / State</label>
                                            <input class="form-control" id="countryState" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select class="selectpicker" id="country" data-live-search="false" data-live-search-style="begins" title="Select">
                                                <option>Country 1</option>
                                                <option>Country 2</option>
                                                <option>Country 3</option>
                                                <option>Country 4</option>
                                                <option>Country 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-tab-row">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div id="map">
                                            <img src="assets/images/add-map-image.png" alt="img">
                                        </div>
                                        <button class="btn btn-primary btn-block">Place the pin using the property address above</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="property-map">Google Maps latitude</label>
                                            <input class="form-control" id="property-map" placeholder="Enter your property title">
                                        </div>
                                        <div class="form-group">
                                            <label for="property-map-long">Google Maps longitude</label>
                                            <input class="form-control" id="property-map-long" placeholder="Enter your property title">
                                        </div>
                                        <div class="form-group">
                                            <label for="property-map-street">Google Street View - Camera Angle</label>
                                            <input class="form-control" id="property-map-street" placeholder="Enter your property title">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">
                                                Enable Google street view
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-block">
                        <div class="add-title-tab">
                            <h3>Property location</h3>
                            <div class="add-expand"></div>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-id">Property ID</label>
                                            <input class="form-control" id="property-id" placeholder="Enter property ID">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-area">Area Size</label>
                                            <input class="form-control" id="property-area" placeholder="Enter property area size">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-size-prefix">Size Prefix</label>
                                            <input class="form-control" id="property-size-prefix" placeholder="Sq Ft">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-bedrooms">Bedrooms</label>
                                            <input class="form-control" id="property-bedrooms" placeholder="Enter number of bedrooms">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-bathrooms">Bathrooms</label>
                                            <input class="form-control" id="property-bathrooms" placeholder="Enter number of bathrooms">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-garage">Garage</label>
                                            <input class="form-control" id="property-garage" placeholder="Enter number of garages">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-garage-size">Garages Size</label>
                                            <input class="form-control" id="property-garage-size" placeholder="Enter garage size">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-year-built">Year Built</label>
                                            <div class="input-group input_date">
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                <input class="form-control" id="property-year-built">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-video">Virtual Tour Video URL</label>
                                            <input class="form-control" id="property-video" placeholder="YouTube, Vimeo, SWF File and MOV File are supported">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-tab-row">
                                <h4>Additional  details</h4>
                                <table class="additional-block">
                                    <thead>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><label>Title</label></td>
                                        <td><label>Value</label></td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    </thead>
                                    <tbody class="ui-sortable">
                                    <tr>
                                        <td class="action-field">
                                            <span class="sort-additional-row ui-sortable-handle"><i class="fa fa-navicon"></i></span>
                                        </td>
                                        <td class="field-title">
                                            <input class="form-control" type="text">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text">
                                        </td>
                                        <td class="action-field">
                                            <span class="remove-additional-row"><i class="fa fa-remove"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="action-field">
                                            <span class="sort-additional-row ui-sortable-handle"><i class="fa fa-navicon"></i></span>
                                        </td>
                                        <td class="field-title">
                                            <input class="form-control" type="text">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text">
                                        </td>
                                        <td class="action-field">
                                            <span class="remove-additional-row"><i class="fa fa-remove"></i></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td></td>
                                        <td><button class="add-additional-row"><i class="fa fa-plus"></i> Add New</button></td>
                                        <td></td>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="account-block">
                        <div class="add-title-tab">
                            <h3>Property Features</h3>
                            <div class="add-expand"></div>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                @foreach($features as $feature)
                                    <div class="col-sm-2">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="{{$feature->id}}">
                                                {{$feature->name}}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-block">
                        <div class="add-title-tab">
                            <h3>Property Video</h3>
                            <div class="add-expand"></div>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="videoUrl">Video URL</label>
                                            <input class="form-control" id="videoUrl" placeholder="Enter your property title">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="table-list">
                                            <div class="form-group table-cell full-width" style="padding-right: 8px;">
                                                <label for="videoImageUrl">Video image URL</label>
                                                <input class="form-control" id="videoImageUrl" placeholder="Enter your property title">
                                            </div>
                                            <div class="table-cell v-align-bottom">
                                                <button class="btn btn-primary">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-block">
                        <div class="add-title-tab">
                            <h3>Floor Plans</h3>
                            <div class="add-expand"></div>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row">
                                <table class="add-sort-table">
                                    <thead>
                                    <tr>
                                        <td class="row-sort"></td>
                                        <td class="sort-middle">
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <label for="floorPlans">Floor Plans</label>
                                                    <select class="selectpicker" id="floorPlans" data-live-search="false" data-live-search-style="begins" title="Disable">
                                                        <option>Disable</option>
                                                        <option>Enable</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="row-remove"></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="row-sort">
                                            <span class="sort"><i class="fa fa-navicon"></i></span>
                                        </td>
                                        <td class="sort-middle">
                                            <div class="sort-inner-block">
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="planTitle">Plan Title</label>
                                                            <input name="plan-title" type="text" id="planTitle" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="planSize">Plan Size</label>
                                                            <input name="plan-size" type="text" id="planSize" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="planBedrooms">Plan Bedrooms</label>
                                                            <input name="plan-bedrooms" type="text" id="planBedrooms" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="planBathrooms">Plan Bathrooms</label>
                                                            <input name="plan-bathrooms" type="text" id="planBathrooms" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="planPrice">Plan Price</label>
                                                            <input name="plan-price" type="text" id="planPrice" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="planImage">Plan Image</label>
                                                            <div class="file-upload-block">
                                                                <input name="plan-image" type="text" id="planImage" class="form-control">
                                                                <button class="btn btn-primary">Select</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-xs-12">
                                                        <label for="planDescription">Plan Description</label>
                                                        <textarea name="plan-description" rows="4" id="planDescription" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="row-remove">
                                            <span class="remove"><i class="fa fa-remove"></i></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td class="row-sort"></td>
                                        <td class="sort-middle">
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <button class="btn btn-primary"><i class="fa fa-plus"></i> Add more</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="row-remove"></td>
                                    </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="account-block">
                        <div class="add-title-tab">
                            <h3>Multi Units / Sub Properties</h3>
                            <div class="add-expand"></div>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row">
                                <table class="add-sort-table">
                                    <thead>
                                    <tr>
                                        <td class="row-sort"></td>
                                        <td class="sort-middle">
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <label for="multuUnits">Multi Units / Sub Properties</label>
                                                    <select class="selectpicker" id="multuUnits" data-live-search="false" data-live-search-style="begins" title="Disable">
                                                        <option>Disable</option>
                                                        <option>Enable</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="row-remove"></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="row-sort">
                                            <span class="sort"><i class="fa fa-navicon"></i></span>
                                        </td>
                                        <td class="sort-middle">
                                            <div class="sort-inner-block">
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="propertyTitle">Property Title</label>
                                                            <input name="plan-title" type="text" id="propertyTitle" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="propertyType">Property Type</label>
                                                            <input name="plan-size" type="text" id="propertyType" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="propertyBedrooms">Bedrooms</label>
                                                            <input name="plan-bedrooms" type="text" id="propertyBedrooms" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="propertyBathrooms">Bathrooms</label>
                                                            <input name="plan-bathrooms" type="text" id="propertyBathrooms" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="propertySize">Property Size</label>
                                                            <input name="plan-price" type="text" id="propertySize" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="sizePostfix">Size Postfix</label>
                                                            <input name="plan-image" type="text" id="sizePostfix" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="propertyPrice">Property Price</label>
                                                            <input name="plan-image" type="text" id="propertyPrice" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <label for="availabilityDate">Availabitity Date</label>
                                                        <input name="plan-image" type="text" id="availabilityDate" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="row-remove">
                                            <span class="remove"><i class="fa fa-remove"></i></span>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td class="row-sort"></td>
                                        <td class="sort-middle">
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12">
                                                    <button class="btn btn-primary"><i class="fa fa-plus"></i> Add more</button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="row-remove"></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="account-block">
                        <div class="add-title-tab">
                            <h3>Attachments</h3>
                            <div class="add-expand"></div>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row push-padding-bottom">
                                <div class="add-attachment">
                                    <p>Attachments</p>
                                    <div class="attach-list">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="attach-icon"><i class="fa fa-file-o"></i></div>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">filename.pdf</a></h4>
                                                <ul class="attach-actions">
                                                    <li><a href="#"><i class="fa fa-edit"></i> edit</a></li>
                                                    <li><a href="#"><i class="fa fa-remove"></i> remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="attach-icon"><i class="fa fa-file-o"></i></div>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">filename.pdf</a></h4>
                                                <ul class="attach-actions">
                                                    <li><a href="#"><i class="fa fa-edit"></i> edit</a></li>
                                                    <li><a href="#"><i class="fa fa-remove"></i> remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Add media</button>
                                    <p>You can attach PDF files, Map images OR other documents to provide further details related to property.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="account-block">
                        <div class="add-title-tab">
                            <h3>Agent Information</h3>
                            <div class="add-expand"></div>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row push-padding-bottom">
                                <p>What to display in agent information box?</p>
                                <div class="radio">
                                    <label>
                                        <input type="radio">
                                        None <small>(Agent information box will not displayed)</small>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio">
                                        My profile information <small>(You can add your information <a href="#">here</a>)</small>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio">
                                        Display an agent’s information
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select class="selectpicker" id="status" data-live-search="false" data-live-search-style="begins" title="John Deo">
                                                <option>John Deo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-block text-right">
                        <button type="submit" class="btn btn-primary">Submit Property</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--end section page body-->
    <script type="text/javascript" src="{{ url('assets/js/jquery.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.pricemonth').hide()
            $('.pricey').hide()
            $('#pricem').hide()
            $('.pricesqft').hide()
            $('#property-status').change(function(){
                if($(this).val() == 1){
                    $('.pricemonth').hide()
                    $('.pricey').hide()
                    $('#pricem').show()
                    $('.pricesqft').show()
                }else if($(this).val() == 2){
                    $('.pricemonth').show()
                    $('.pricey').hide()
                    $('#pricem').hide()
                    $('.pricesqft').hide()
                }else if($(this).val() == 3){
                    $('.pricey').show()
                    $('#pricem').show()
                    $('.pricemonth').hide()
                    $('.pricesqft').hide()
                }
            })
        })
    </script>
@endsection