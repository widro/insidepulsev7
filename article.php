<?php get_header(); ?>
	<div class="content_left">


		<div class="article_headline color1 bold">
			<?php the_title(); ?>
		</div>
		<div class="article_subheadline">
			<div class="article_subheadline_left">
				by <a href=<?php echo $authorlink ?>><?php echo $insider_display_name ?></a> on <?php the_time('F j, Y'); ?>  | <a href="mailto:<?php the_author_email(); ?>">Email the author</a> <?php edit_post_link('Edit Post','| ',' '); ?>	<?php if($show_twitter){echo $show_twitter_text;	}?>
			</div>
			<div class="article_subheadline_right">
				<img class="subscribe_newsletter" src="http://media.insidepulse.com/shared/images/v7/sharethistemp.png">
			</div>

		</div>
		<div class="article_body">
				<!-- content -->
				<?php the_content(''); ?>
				<!-- content end -->
		</div>

		<div class="article_box_header">
			<div class="article_box_header_left">
				<h3 class="icon1 font2">Related Articles</h3>

			</div>
			<div class="article_box_header_right">
				<a href="#" class="color1">more articles &raquo;</a>
			</div>
		</div>
		<div class="clear"></div>
		<div class="article_box_body">

			<div class="article_box_cell">
				<a href="#"><img src="http://media.insidepulse.com/shared/images/v7/temp/morningbacklash500.jpg"><br>incredible headline because it is all the best of what we have to offer</a>
			</div>

			<div class="article_box_cell">
				<a href="#"><img src="http://media.insidepulse.com/shared/images/v7/temp/morningbacklash500.jpg"><br>incredible headline because it is all the best of what we have to offer</a>
			</div>

			<div class="article_box_cell">
				<a href="#"><img src="http://media.insidepulse.com/shared/images/v7/temp/morningbacklash500.jpg"><br>incredible headline because it is all the best of what we have to offer</a>
			</div>

			<div class="article_box_cell">
				<a href="#"><img src="http://media.insidepulse.com/shared/images/v7/temp/morningbacklash500.jpg"><br>incredible headline because it is all the best of what we have to offer</a>
			</div>



		</div>


<?php include('sidebar.php'); ?>


<?php include('footer.php'); ?>