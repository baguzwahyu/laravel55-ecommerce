        <div class="col-lg-3">

          <h1 class="my-4">Category</h1>
          @foreach ($categorys as $category)
          <div class="list-group">
            <a href="#" class="list-group-item">{{ $category->CategoryName }}</a>
          </div>
          @endforeach

        </div>
        <!-- /.col-lg-3 -->