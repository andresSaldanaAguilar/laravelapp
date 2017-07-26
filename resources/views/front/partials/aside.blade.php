<div class="list-group">
  <div class="col-md-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group" role="menu" style="height: auto;
        max-height: 200px;
        overflow-x: hidden;">
        <a href="#" class="list-group-item active">Categorias</a>
        @foreach ($categories as $category)
          <a href="#" class="list-group-item"> {{ $category->name }}
          <span class="badge"> {{ $category->articles->count() }} </span>  </a>
        @endforeach
    </div>
  </div><!--/.sidebar-offcanvas-->

  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
    <div class="scrollable-menu" role="menu" style="height: auto;
        max-height: 200px;
        overflow-x: hidden;">
        <a href="#" class="list-group-item active">Tags</a>
        @foreach ($tags as $tag)
          <label class="label label-default"> {{ $tag->name }} </label>
          &nbsp;
        @endforeach
    </div>
  </div><!--/.sidebar-offcanvas-->
</div><!--/list-->