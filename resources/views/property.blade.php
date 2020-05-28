@extends('layouts.app')
@section('body')
<section id="property" class="padding">
   <div class="container property-details">
      <div class="col-md-8 listing1 property-details">
        <h2 class="text-uppercase">{{$property->title}}</h2>
        <p class="bottom30">{{$property->address}}</p>
        
               @php
                $photo = $property->photo->name;
                $photo_id = json_decode($photo);
                @endphp
      <div id="property-d-1" class="owl-carousel">
            <div class="item">
               <img src="{{$property->photo_id .''. $photo_id[0]->featured}}" alt="image" height="452px" />
            </div>
             <div class="item">
               <img src="{{$property->photo_id .''. $photo_id[0]->sideview}}" alt="image" height="452" />
            </div>
             <div class="item">
               <img src="{{$property->photo_id .''. $photo_id[0]->featured}}" alt="image" height="452" />
            </div>
             <div class="item">
               <img src="{{$property->photo_id .''. $photo_id[0]->featured}}" alt="image" height="452" />
            </div>
      </div>
      <div id="property-d-1-2" class="owl-carousel">
             <div class="item" >
               <img src="{{$property->photo_id .''. $photo_id[0]->featured}}" alt="image"/>
            </div>
             <div class="item" >
               <img src="{{$property->photo_id .''. $photo_id[0]->sideview}}" alt="image"/>
            </div>
             <div class="item" >
               <img src="{{$property->photo_id .''. $photo_id[0]->featured}}" alt="image"/>
            </div>
             <div class="item" >
               <img src="{{$property->photo_id .''. $photo_id[0]->featured}}" alt="image"/>
            </div>
      </div>
        <div class="property_meta bg-black bottom40">
          <span>
            <i class="icon-select-an-objecto-tool"></i>{{$property->square_foot}} sq ft
         </span>
          <span>
            <i class=" icon-bed"></i>{{$property->rooms}} Bedroom's Rooms
         </span>
          <span>
            <i class="icon-safety-shower"></i>{{$property->bathroom}} Bathroom's
         </span>
          
          
        </div>
        <h2 class="text-uppercase">Property Description</h2>
        <p class="bottom30">{{$property->description}}
        </p>
   
        <h2 class="text-uppercase bottom20">Quick Summary</h2>
        <div class="row property-d-table bottom40">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>Property Id</b></td>
                  <td class="text-right">{{$property->id}}</td>
                </tr>
                <tr>
                  <td><b>Price</b></td>
                  <td class="text-right">${{$property->price}}/ {{$property->type->name}}</td>
                </tr>
                <tr>
                  <td><b>Bedroom's</b></td>
                  <td class="text-right">{{$property->rooms}}</td>
                </tr>
                <tr>
                  <td><b>Bathroom's</b></td>
                  <td class="text-right">{{$property->bathroom}}</td>
                </tr>
                <tr>
                  <td><b>Available</b></td>
                  <td class="text-right">YES</td>
                </tr>
                <tr>
                  <td><b>Status</b></td>
                  <td class="text-right">For {{$property->status->name}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            {{-- <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>Status</b></td>
                  <td class="text-right">For {{$property->status->name}}</td>
                </tr>
              </tbody>
            </table> --}}
          </div>
        </div>
        <h2 class="text-uppercase bottom20">Features</h2>
        <div class="row bottom40">
          <div class="col-md-4 col-sm-6 col-xs-12">
            @php
         $feature = json_decode($property->features);
            @endphp
             
            <ul class="pro-list">
              <li>{{$feature[0]->f1}}</li>
              <li>{{$feature[0]->f2}}</li>
              <li>{{$feature[0]->f3}}</li>
              <li>{{$feature[0]->f4}}</li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            {{-- <ul class="pro-list">
              <li>Microwave</li>
              <li>Outdoor Shower</li>
              <li>Refrigerator</li>
              <li>Swimming Pool</li>
            </ul> --}}
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            {{-- <ul class="pro-list">
              <li> Quiet Neighbourhood</li>
              <li> TV Cable & WIFI</li>
              <li> Window Coverings</li>
            </ul> --}}
          </div>
        </div>
        <h2 class="text-uppercase bottom20">Video Presentation</h2>
        <div class="row bottom40">
          <div class="col-md-12 padding-b-20">
            <div class="pro-video">
              <figure class="wpf-demo-gallery">
                <video id="player1" class="video" controls="controls" preload="none"">
                   <source src="{{$property->video->name}}" type="video/mp4" />
              </figure>
            </div>
          </div>
        </div>
        <h2 class="text-uppercase bottom20">View In VR</h2>
        <div class="row bottom40">
          <div class="col-md-12 bottom20">
                  <iframe 
                     width="100%" 
                     height="480px" 
                     src="{{$property->video->virtual}}/embed?chrome=min" 
                     frameborder="0" style="border:none;" allowvr="yes" allow="vr; xr; accelerometer; magnetometer; gyroscope; autoplay;" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="" >
                  </iframe>

            
          </div>
          <div class="social-networks">
            <div class="social-icons-2">
              <span class="share-it">Share this Property</span>
              <span><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></span>
              <span><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></span>
              <span><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i> Google +</a></span>
            </div>
          </div>
        </div>
        <h2 class="text-uppercase bottom20">Contact Agent</h2>
        <div class="col-sm-12 bottom40">
            <form class="callus">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 row">
                  <div class="row">
                    <div class="col-sm-3">
                      <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          
      </div>
      <aside class="col-md-4 col-xs-12">
        <div class="property-query-area clearfix">
          <div class="col-md-12">
            <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
          </div>
          <form class="callus">
            <div class="single-query form-group col-sm-12">
              <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select>
                  <option selected="" value="any">Location</option>
                  <option>All areas</option>
                  <option>Bayonne </option>
                  <option>Greenville</option>
                  <option>Manhattan</option>
                  <option>Queens</option>
                  <option>The Heights</option>
                </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select>
                  <option class="active">Property Type</option>
                  <option>All areas</option>
                  <option>Bayonne </option>
                  <option>Greenville</option>
                  <option>Manhattan</option>
                  <option>Queens</option>
                  <option>The Heights</option>
                </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select>
                  <option class="active">Property Status</option>
                  <option>All areas</option>
                  <option>Bayonne </option>
                  <option>Greenville</option>
                  <option>Manhattan</option>
                  <option>Queens</option>
                  <option>The Heights</option>
                </select>
              </div>
            </div>
            <div class="search-2 col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Beds</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Baths</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 bottom10">
              <div class="single-query-slider">
                <label><strong>Price Range:</strong></label>
                <div class="price text-right">
                  <span>$</span>
                  <div class="leftLabel"></div>
                  <span>to $</span>
                  <div class="rightLabel"></div>
                </div>
                <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 form-group">
              <button type="submit" class="btn-blue border_radius">Search</button>
            </div>
          </form>
          <div class="col-sm-12">
            <div class="group-button-search">
              <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter bottom15">
                <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                <div class="text-1">Show more search options</div>
                <div class="text-2 hide">less more search options</div>
              </a>
            </div>
          </div>
          <div class="search-propertie-filters collapse">
            <div class="container-2">
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="bottom40 margin40">Featured Properties</h3>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">45 Regent Street, London, UK</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">45 Regent Street, London, UK</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="images/f-p-1.png" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">45 Regent Street, London, UK</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="margin40 bottom20">Featured Properties</h3>
          </div>
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
   </div>
</section>
@endsection