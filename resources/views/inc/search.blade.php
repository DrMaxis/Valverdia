
<div class="col-md-4 col-sm-5 hidden-control" style="margin:0 auto;">
    <i class="pe-7s-search"></i>
    <form action="{{ route('search') }}" method="GET">
            
                <input type="text" class="search" name="query" id="query" value="{{ request()->input('query') }}" placeholder="Search for products...">
            </form>


</div>