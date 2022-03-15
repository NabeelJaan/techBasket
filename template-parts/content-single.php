<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="md:items-center mb-8">
		<!-- col-1 -->
		<div>
			<?php the_title( sprintf( '<h1 class="entry-title text-2xl font-bold font-Jost leading-tight mb-31 lg:text-4xl"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		</div>
		<div class="">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('large'); ?>
			</a>
		</div>

		<div class="header-meta my-4">

			<?php
				$categories = get_the_category();
				$separator = ' ';
				$output = '';
				if ( ! empty( $categories ) ) {
					echo '<span class="hidden md:inline-block text-base font-Jost font-medium ">Category: </span>';
					foreach( $categories as $category ) {
						$output .= '<a class="hidden md:inline-block text-green font-Jost pr-4 mr-4 border-r-2 border-gray-300" href="' . get_category_link( $category->term_id ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
					}
					echo trim( $output, $separator );
				}
			?>
			
			</span>
			<span class="text-base font-Jost pr-4 mr-4 border-r-2 border-gray-300">Published: 
				<time class="text-base font-Jost text-green font-medium "><?php echo get_the_date(); ?></time>
			</span>
			<span class="text-base font-Jost">By - <a class="text-green font-Jost font-medium" href="<?php the_permalink(); ?>"><?php the_author(); ?></a></span>
		</div>

		<div class="entry-content single-post mt-2">

			<?php the_content(); ?>

			<?php
				wp_link_pages(
					array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					)
				);
			?>
		</div>

		<div class="xs:mt-3 xs:mb-12 md:my-8 bg-green max-w-6xl h-px m-auto"></div>

		<div class="space-x-4 md:mt-6">
			<div class="py-2 border border-gray-300 items-center inline-flex">
				<div class="text-sm border-r px-4">
					<i class="fas fa-share-alt"></i>
				</div>
				<div class="text-xs px-4 font-medium">
					Share
				</div>
			</div>
			<a class="py-2 border border-gray-300 items-center inline-flex" href="#">
				<div class="text-sm border-r px-4 text-dark-blue">
					<i class="fab fa-facebook"></i>
				</div>
				<div class="text-xs px-4 font-medium text-dark-blue">
					Facebook
				</div>
			</a>
			<a class="py-2 border border-gray-300 items-center inline-flex" href="#">
				<div class="text-sm border-r px-4 text-light-blue">
					<i class="fab fa-twitter"></i>
				</div>
				<div class="text-xs px-4 font-medium text-light-blue">
					Twitter
				</div>
			</a>
			<a class="py-2 border border-gray-300 items-center inline-flex" href="#">
				<div class="text-sm border-r px-4 text-light-green">
					<i class="fab fa-whatsapp"></i>
				</div>
				<div class="text-xs px-4 font-medium text-light-green">
					WhatsApp
				</div>
			</a>
			<a class="py-2 border border-gray-300 items-center inline-flex" href="#">
				<div class="text-sm border-r px-4 text-blue-7">
					<i class="fab fa-linkedin"></i>
				</div>
				<div class="text-xs px-4 font-medium text-blue-7">
					LinkedIn
				</div>
			</a>
		</div>

		<div class="xs:mt-3 xs:mb-12 md:my-8 bg-green max-w-6xl h-px m-auto"></div>

	</div> <!-- End col-1 -->

</article>