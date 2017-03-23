<div class="jumbotron bio">
    <div class="container">
        <div class="identity">
            <h1>
                <?php getUserData('identity', null); ?>
            </h1>
            <h2>Career</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="career">
                    <?php getUserData('experiences', 0); ?>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/600x200">
                    </a>
                    <?php getUserData('experiences', 1); ?>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/600x200">
                    </a>
                </h3>
            </div>
            <div class="col-md-6">
                <h3 class="career">
                    <?php getUserData('experiences', 2); ?>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/600x200">
                    </a>
                    <?php getUserData('experiences', 3); ?>
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/600x200">
                    </a>
                </h3>
            </div>
        </div>
    </div>
</div>