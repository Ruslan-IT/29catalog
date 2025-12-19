<div class="categorie_banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="categorie_banner_title">
                    <h3>Top Categories</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="categorie_banner_active owl-carousel">
                @foreach($categoriesRandom as $category)

                <div class="single_categorie_banner">
                    <div class="categorie_banner_thumb">
                        <a href="{{ route('category.show', $category->id) }}">

                            <img src="{{ asset('storage/' . $category->main_image)  }}" alt="{{ $category->name }}">
                        </a>



                        <div class="categorie_banner_content">
                            <h3>{{ $category->name }}</h3>
                            @if($category->children->count())
                            <ul>
                                @foreach($category->children as $child)
                                <li><a href="{{ route('category.show', $child->id) }}">{{ $child->name }}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
