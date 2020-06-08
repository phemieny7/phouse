@extends('layouts.app')

{{--//here is the slide section  --}}
@section('slide')
<div class="rev_slider_wrapper">
  <div id="rev_slider_third" class="rev_slider"  data-version="5.0">
    <ul>
      @foreach($slides as $slide)
      <li data-transition="fade">
          @php
          $photo = $slide->photo->name;
          $photo_id = json_decode($photo);
          $feature = $photo_id[0]->featured;
          @endphp
        <img src="{{asset("$slide->photo_id$feature")}}" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="black-caption tp-caption tp-resizeme"
         data-start="1300"
          data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']"
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
          data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <div class="price">{{ucfirst($slide->status->name)}}</div>
          <h2>{{$slide->title}}</h2>
          <p class="bottom30">{{ substr($slide->description, 0, 40)}}....
          </p>
          <div class="property_meta">
            <span><i class="icon-select-an-objecto-tool"></i>{{$slide->square_foot}} sq ft</span>
            <span><i class="icon-bed"></i>{{$slide->rooms}} Bedroom's</span>
            <span><i class="icon-pool-stairs"></i>Type: {{$slide->category->name}}</span>
          </div>
          <div class="property_meta bottom30">
            <span><i class="icon-garage"></i>{{$slide->garage}} Garage</span>
            <span><i class="icon-safety-shower"></i>{{$slide->bathroom}} bathrooms</span>
          </div>
          <div class="bottom row">
            <div class="col-sm-6"><span> <i class="icon-icons74"></i>{{$slide->address}} </span></div>
            <div class="col-sm-6"><span> &#8358;{{$slide->price}} {{$slide->type->name}} -<small>{{$slide->category->name}}</small></span></div>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
  <!-- END REVOLUTION SLIDER -->
</div>
@endsection

@section('search')
  <section class="property-query-area bg_light">
      <div class="container">
        <div class="row">
          <form class="callus">
            <div class="col-md-3 col-sm-6">
              <div class="single-query form-group">
                <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="single-query form-group">
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
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="single-query form-group">
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
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="single-query form-group">
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
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="row search-2">
                <div class="col-md-6 col-sm-6">
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
                <div class="col-md-6 col-sm-6">
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
            <div class="col-md-3 col-sm-6">
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
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-8">
                  <div class="single-query-slider">
                    <label>Price Range:</label>
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
                <div class="col-md-4 text-right form-group">
                  <button type="submit" class="btn-blue border_radius top15">Search</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
</section>
@endsection

@section('feature')
<section id="feature_property" class="padding">
  <div class="container feature3">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h2 class="uppercase">{{$featured->title}}</h2>
        <h4 class="bottom30">{{$featured->address}}</h4>
        <p class="bottom30">{{$featured->description}}</p>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <ul class="feature_list">

            </ul>
          </div>

          <div class="col-md-6 col-sm-6">
            
            </ul>
          </div>
        </div>
        <div class="property_meta">
          <span><i class="icon-select-an-objecto-tool"></i>{{$featured->square_foot}} sq ft</span> <span><i class="icon-bed"></i>{{$featured->rooms}} Bedrooms</span> <span><i class="icon-safety-shower"></i>{{$featured->bathroom}} Bathroom</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>{{$featured->garage}} Garage</span>
        </div>
        <a href="{{ url('/property/'.$featured->id ) }}" class="uppercase btn-blue border_radius space30">view all detail</a>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="feature_main">
          @php
          $photo = $featured->photo->name;
          $photo_id = json_decode($photo);
          $image = $photo_id[0]->featured;
          @endphp
          <img src="{{asset("$featured->photo_id$image")}}" alt="featured" class="img-responsive" style="width: 540px; height: 360px"/>
          <div class="bottom clearfix">
            <span class="pull-left">For Rent</span>
            <h4 class="pull-right">&#8358; {{$featured->price}} Per Month - <small>Family Home</small></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('deals')
<section id="deals" class="padding bg_light">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2 class="uppercase">Best Deal Properties</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      <div class="three-item owl-carousel">
        @foreach($deals as $deal)
        <div class="item feature_item">
          @php
          $photo = $deal->photo->name;
          $photo_id = json_decode($photo);
          $image = $photo_id[0]->featured;
          @endphp

          <div class="image"><a href="{{ URL('/property/'.$deal->id )}}"> <img src="{{asset("$deal->photo_id$image")}}" alt="Featured Property" style="width: 364px; height: 254px"></a>
            <span class="price default_clr">For Rent</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="{{ url('/property/'.$deal->id ) }}">{{$deal->title}}</a></h3>
              <p>{{ substr($deal->description, 0, 40)}}......</p>
              <h4 class="top15"> &#8358; {{$deal->price}} Per {{$deal->type->name}} - <small>{{$deal->category->name}}</small></h4>
            </div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                  <td class="text-right">{{$deal->square_foot}} sq ft</td>
                </tr>
                <tr>
                  <td><i class="icon-bed"></i>Bedrooms</td>
                  <td class="text-right">{{$deal->rooms}}</td>
                </tr>
                <tr>
                  <td><i class="icon-safety-shower"></i>Bathrooms</td>
                  <td class="text-right">{{$deal->bathroom}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection

@section('latest')
<section id="property" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-10">
        <h2 class="uppercase">latest Properties</h2>
        <p class="heading_space"> We are proud to present to you some of the best homes, apartments, offices e.g. across Australia for affordable
          prices.
        </p>
      </div>
    </div>
    <div class="row">
      <div id="two-col-slider" class="owl-carousel">
        @foreach($latests as $latest)
        <div class="item">
          <div class="property_item heading_space">
             @php
                $photo = $latest->photo->name;
                $photo_id = json_decode($photo);
                $image = $photo_id[0]->featured;
              @endphp
            <div class="image"> <a href="{{ url('/property/'.$latest->id ) }}"><img src="{{asset("$latest->photo_id$image")}}" alt="latest property" class="img-responsive" style="width: 560px; height: 310px"></a> </div>
            <div class="price default_clr clearfix bottom20">
              <span class="tag pull-left">For {{ucfirst($latest->status->name)}}</span>
              <h4 class="pull-right">&#8358;{{$latest->price }} - {{$latest->type->name}} - <small>{{$latest->category->name}}</small></h4>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"> <a href="{{ url('/property/'.$latest->id ) }}.">{{$latest->title}}</a></h3>
                <p>{{$latest->description}}</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">{{$latest->address}}</p>
                <ul class="pull-right">
                  <li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                  <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="one">
                <ul>
                  <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
              <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>{{$latest->square_foot}} sq ft</span> <span><i class="icon-bed"></i>{{$latest->rooms}} Bedrooms</span> <span><i class="icon-safety-shower"></i>{{$latest->bathroom}} Bathroom</span></div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection

@section('client')
<section id="logos">
  <div class="container partner2 padding">
    <div class="row">
      <div class="col-sm-10">
        <h2 class="uppercase">Our Partners</h2>
        <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
      </div>
    </div>
    <div class="row">
      <div id="partner-slider" class="owl-carousel">
        @foreach($partners as $partner)
        <div class="item">
          <img src="{{asset("$partner->photo")}}" alt="{{$partner->name}}">
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection
