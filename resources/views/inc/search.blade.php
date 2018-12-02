<div class="col-md-5 col-sm-5 hidden-control pull-right" style="margin-top:-50px;">
    <form class="searchForm" action="{{ route('search') }}" method="GET">
        <div class="fieldset">
            <input type="text" class="search full-width has-padding has-border" name="query" id="query" value="{{ request()->input('query') }}"
                placeholder="Search for products...">
             <i class="fa fa-search" style="font-size:20px; color:white;"> <button type="submit" style="display:none;">
                    
                </button></i>
        </div>

    </form>


</div>