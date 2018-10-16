<!--/-/-/-/-/-/-/-/-/
    Begin Page Categories  
-/-/-/-/-/-/-/-/-/-/-/-->

<div class="col-md-3 col-md-pull-9">
        <aside class="categorie-sidebar mb-100">
            <!-- Categories Module Start -->
            <div class="categorie-module mb-80">
                <h3>Types of Lights</h3>
                <ul class="categorie-list">
                    @foreach($categories as $category)
                    <li class="{{ setActiveCategory($category->slug)}}"><a href="{{ route('products', ['category' => $category->slug])}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- Categories Module End -->
        </aside>
    </div>
 <!--/-/-/-/-/-/-/-/-/
    End Page Categories  
-/-/-/-/-/-/-/-/-/-/-/-->