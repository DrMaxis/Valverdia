<ul class="social-footer-list list-inline text-right">
    @foreach($items as $menu_item)
    <li><a href="{{$menu_item->link()}}"><i class ="{{$menu_item->title}}"></i></a></li>
    @endforeach
</ul>