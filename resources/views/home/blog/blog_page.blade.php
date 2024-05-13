@extends('home.inc.master')
@section('title')
Blog
@endsection
@section('content')
<!--================================Gallery section start here=======================-->
<section class="blog_gallery pb-5 pt-5">
		<div class="container">				
  			<h1>Trending Posts</h1>
  			<div class="gallery-wrap pt-5">
			    <ul id="filters" class="clearfix">
			      <li><span class="filter active" data-filter="all">All</span></li>
                  @foreach($categories as $category)
			      <li><span class="filter" data-filter=".{{$category->id}}">{{ $category->name }}</span></li>
                  @endforeach
			    </ul>
    			<div id="gallery">   
				    
                    @foreach($posts as $post)
				    <a class="gallery-item {{$post->category_id }} card" href="{{ route('blog-post-details', [$post->id, $post->slug]) }}" data-cat="{{$post->category_id }}">
				      	<div class="overlay"></div>
				        <img src="{{ asset('assets/images/thumbimage/'.$post->thumb_image) }}" alt="{{ $post->title }}" />
				      	<div class=" card-body">
				      		<p>{{ dateFormat($post->created_at ) }}</p>
				        	<div class=" card-title">
				            	<h4> {{ $post->title }} </h4>
				            </div>
				          	<div class=" card-text">
				            	<p>{{ $post->description }}</p>
				          	</div>
				          			         
				      	</div>
				    </a> 
                    @endforeach
    			</div> 
			</div>		
		</div>
	</section>
	<!--================================Gallery section end here=======================-->
@endsection


@section('script')
<script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js'></script>
<script>
	  $(function () {
	    
		  var filterList = {
		  
		    init: function () {
		    
		      $('#gallery').mixItUp({
		        selectors: {
		          target: '.gallery-item',
		          filter: '.filter' 
		        },
		        load: {
		          filter: 'all'
		        }     
		      });               
		    
		    }

		  };
		  
		  filterList.init();
		  
		});
	</script>

@endsection