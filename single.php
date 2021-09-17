<?php  /* gets the code from header.php*/ get_header() ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
					<h1>Blogg</h1>


                    <ul>

                        <!-- the loop -->

                        <article>
                            <?php the_post_thumbnail() ?>
                            <h2 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i> <?php echo get_the_date() ?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> <a href="forfattare.html"> <?php the_author() ?></a>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i> <a href="kategori.html"><?php the_category(", ") ?></a>
                                </li>
                            </ul>
                            <p> <?php the_content(); ?></p>
                        </article>

                        <!-- end of the loop -->

                    </ul>

                    <?php wp_reset_postdata(); ?>




                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
					<div id="sidebar">
						<ul>
							<li>
                                
							<?php /* displays a search form, which on submit leads to search.php */ get_search_form(); ?>
							</li>
						</ul>
						<ul role="navigation">
							<li class="pagenav">
								<h2>Sidor</h2>
								<ul>

								<?php /* Displays the chosen menu */ wp_nav_menu( array(
 'theme_location' => 'sidebar2', 'menu_class' => "menu"
) ); ?>
								</ul>
							</li>
							<li>
								<h2>Arkiv</h2>
								<ul>
									<li>
										<a href="arkiv.html">oktober 2016</a>
									</li>
								</ul>
							</li>
							<li class="categories">
								<h2>Kategorier</h2>
								<ul>
								<?php /* Displays the chosen menu */  wp_nav_menu( array(
 'theme_location' => 'sidebar', 'menu_class' => "menu"
) ); ?>
								</ul>
							</li>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</section>
</main>

<?php /* gets code from footer.php */ get_footer() ?>