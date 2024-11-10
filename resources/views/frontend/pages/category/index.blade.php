<!-- #CATEGORY-->
<section class="section category" aria-label="category">
    <div class="container">

        <p class="section-subtitle">Course Categories</p>

        <h2 class="h2 section-title">Popular Topics To Learn</h2>

        <ul class="grid-list">

            @foreach ($categories as $category)
                            <li>
                <div class="category-card">

                    <div class="card-icon">
                        <ion-icon name="briefcase-outline"></ion-icon>
                    </div>

                    <div>
                        <h3 class="h3 card-title">
                            <a href="#">{{ $category->name }}</a>
                        </h3>

                        <span class="card-meta">39 Course</span>
                    </div>

                </div>
            </li>
            @endforeach

        </ul>

    </div>
</section>
