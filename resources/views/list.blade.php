@extends('layouts.app')


@section('head')

@endsection



@section('body')
<!-- Listing Start -->
<section id="listing1" class="listing1 padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-md-9">
            <h2 class="uppercase">PROPERTY LISTINGS</h2>
            <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
          </div>
          <div class="col-md-3">
          <form class="callus">
            <div class="single-query">
              <div class="intro">
                <select>
                  <option class="active">Default Order</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                </select>
              </div>
            </div>
            </form>
          </div>
        </div>
        <div class="row">
          @foreach($listings as $listing)
          <div class="col-sm-6">
             @php
              $photo = $listing->photo->name;
              $photo_id = json_decode($photo);
            @endphp
            <div class="property_item heading_space">
              <div class="image">
                <a href="{{ url('/property/'.$listing->id ) }}"><img src="{{$listing->photo_id .''. $photo_id[0]->featured}}" alt="latest property"  height= "254px"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right"> &#8358; {{$listing->price}}</span>
                </div>
                <span class="tag_t">For {{ucfirst($listing->status->name)}}</span> 
                <span class="tag_l">
                @if ($listing->featured === 1)
                    Featured
                @else
                    Popular
                @endif
                </span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="captlize"><a href="{{ url('/property/'.$listing->id ) }}">{{$listing->title}}</a></h3>
                  <p>{{$listing->address}}</p>
                </div>
                <div class="property_meta transparent"> 
                  <span><i class="icon-select-an-objecto-tool"></i>{{$listing->square_foot}} sq ft</span> 
                  <span><i class="icon-bed"></i>{{$listing->rooms}} Bedroom's</span> 
                  <span><i class="icon-safety-shower"></i>{{$listing->bathroom}} Bathroom's</span>   
                </div>
                <div class="favroute clearfix">
                  <p class="pull-md-left">{{ $listing->created_at->diffForHumans() }} &nbsp; <i class="icon-calendar2"></i></p>
                  <ul class="pull-right">
                    <li><a href="#."><i class="icon-like"></i></a></li>
                    <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                  </ul>
                </div>
                <div class="toggle_share collapse" id="one">
                  <ul>
                    <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                    <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                    <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
        
        <div class="padding_bottom text-center">
          
             {{$listings->links()}}

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
        </div>

        <div class="row">
          <div class="col-md-12">
            <h3 class="bottom40 margin40">Popular Properties</h3>
          </div>
        </div>

        @foreach($populars as $popular)
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            @php
              $photo = $popular->photo->name;
              $photo_id = json_decode($photo);
            @endphp
            <img src="{{$popular->photo_id .''. $photo_id[0]->featured}}" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>{{$popular->title}}</h4>
              <p class="bottom15">{{$popular->address}}</p>
              <a href="#.">{{$popular->price}}</a>
            </div>
          </div>
        </div>
        @endforeach

        <div class="row">
          <div class="col-md-12">
            <h3 class="margin40 bottom20">Featured Properties</h3>
          </div>
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
              @foreach($features as $feature)
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    @php
                      $photo = $feature->photo->name;
                      $photo_id = json_decode($photo);
                    @endphp
                    <a href="#"><img src="{{$feature->photo_id .''. $photo_id[0]->featured}}" alt="listing" style="height: 254px;" ></a>
                    <div class="feature"><span class="tag-2">For {{ucfirst($feature->status->name)}}</span></div>
                    <div class="price clearfix"><span class="tag pull-right">${{$feature->price}} Per {{ucfirst($feature->type->name)}}- <small>{{$feature->category->name}}</small></span></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>
<!-- Listing end -->
@endsection