<ul>
    @foreach($categories as $category)
        <li class="categorie_list">
            <a href="{{ route('category.show', $category->id) }}">
                {{ $category->name }}
                @if($category->children->count())
                    <i class="fa fa-angle-right"></i>
                @endif
            </a>

            @if($category->children->count())
                <ul class="categories_mega_menu">
                    @foreach($category->children as $child)
                        <li>
                            <a href="{{ route('category.show', $child->id) }}">
                                {{ $child->name }}
                                @if($child->children->count())
                                    <i class="fa fa-angle-right"></i>
                                @endif
                            </a>

                            @if($child->children->count())
                                <div class="categorie_sub_menu">
                                    <ul>
                                        @foreach($child->children as $subchild)
                                            <li>
                                                <a href="{{ route('category.show', $subchild->id) }}">
                                                    {{ $subchild->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>
